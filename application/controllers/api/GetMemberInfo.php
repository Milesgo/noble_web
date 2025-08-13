<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetMemberInfo extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Member_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
		$searchParam['lang'] = "kr";

		if (isset($params['lang']))
			$searchParam['lang'] = $params['lang'];

		if (isset($params['mem_no'])) {			
			$searchParam['mem_no'] = $params['mem_no'];
		}

		$result = $this->Member_m->selectMemberDetailInfo($searchParam);

		if($result['mem_info']['mem_islive'] == "N") { 
			$result = array('result' => 'FAILURE', 'message' => $this->Common_m->getLocalMessage("탈퇴한 회원입니다", $searchParam['lang']));
		} else { 
			// ANDROID 월정액 체크
			$sql = " 
				SELECT 
					(SELECT count(pur_no) FROM LOG_PURCHASE WHERE mem_no = '". $params['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android') as subscription_cnt,
					(SELECT android_token FROM LOG_PURCHASE WHERE mem_no = '". $params['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android' ORDER BY pur_no DESC LIMIT 1) as android_token,
					(SELECT max(pur_no) FROM LOG_PURCHASE WHERE mem_no = '". $params['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android') as pur_no,
					(SELECT count(acc_no) FROM MEMBER_ACCESS WHERE mem_no= '". $params['mem_no'] ."' AND acc_islive='Y' AND acc_totime > now()) as valid_cnt
			";

			$res = $this->db->query($sql)->row_array();

			if($res['subscription_cnt'] > 0  && $res['valid_cnt'] == 0) { 
				$access_token = $this->Common_m->getGoogleDeveloperAccessToken();
				$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $res['android_token'] . "?access_token=" . $access_token;

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_URL,$url);
				$res2=curl_exec($ch);
				curl_close($ch);

				$json = json_decode($res2);

				// 구독중이면 1개월 연장
				if((isset($json->error) && $json->error->code == 410) || (isset($json->autoRenewing) && $json->autoRenewing == false)) {
					// 구독 해지 상태. do nothing
				} else { 				
					if(isset($json->expiryTimeMillis)) {

						$access_sql = "SELECT mem_no, pur_no, acc_fromtime, acc_totime FROM MEMBER_ACCESS WHERE mem_no = " . $this->db->escape($params['mem_no']) . " AND acc_islive='Y' ORDER BY acc_totime DESC LIMIT 1";
						$access_data = $this->db->query($access_sql)->row_array();

						$lasttime = new DateTime($access_data['acc_totime']);
						$fromtime = $lasttime->add(new DateInterval('PT1S'));

						// $totime = clone $fromtime; 
						// $totime = $totime->add(new DateInterval('P1M'));	

						$totime = date("Y-m-d H:i:s",($json->expiryTimeMillis/1000));

						$sql = "
							INSERT INTO
								MEMBER_ACCESS
								(
									mem_no
									, pur_no
									, acc_fromtime
									, acc_totime
								)
								VALUES
								(
									". $this->db->escape($params['mem_no']) ."
									, ". $this->db->escape($res['pur_no']) ."
									, ". $this->db->escape($fromtime->format('Y-m-d H:i:s')) ."
									, ". $this->db->escape($totime) ."
								)
						";

						$this->db->query($sql);

					}

					$result = $this->Member_m->selectMemberDetailInfo($searchParam);
				}
			}
		}

		$this->response($result, 200);
	}
}
