<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateSubscription extends CI_Controller {

	public function __construct() {
		parent::__construct();
 		$this->load->model(array('Common_m','Member_m'));
	}

	public function index()
	{
		$memberList = $this->Member_m->selectMemberList(array('rowNumber'=>99999, 'mem_subscription' => 'Y'));

		foreach ($memberList['resultList'] as $member) {
			// ANDROID 월정액 체크
			$sql = " 
				SELECT 
					(SELECT count(pur_no) FROM LOG_PURCHASE WHERE mem_no = '". $member['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android') as subscription_cnt,
					(SELECT android_token FROM LOG_PURCHASE WHERE mem_no = '". $member['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android' ORDER BY pur_no DESC LIMIT 1) as android_token,
					(SELECT max(pur_no) FROM LOG_PURCHASE WHERE mem_no = '". $member['mem_no'] ."' AND product_id = 'noble_subscription' AND pur_os = 'android') as pur_no,
					(SELECT count(acc_no) FROM MEMBER_ACCESS WHERE mem_no= '". $member['mem_no'] ."' AND acc_totime > now()) as valid_cnt
			";

			$res = $this->db->query($sql)->row_array();

			if($res['subscription_cnt'] > 0 && $res['valid_cnt'] > 0) {
				// 구독상태. 현재 구독 기간에 속함				
			} else if($res['subscription_cnt'] > 0 && $res['valid_cnt'] == 0) { 	
				// 서버상의 구독 기간이 만료되어, Google Play 구독 상황 조회
				$access_token = $this->Common_m->getGoogleDeveloperAccessToken();
				$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $res['android_token'] . "?access_token=" . $access_token;

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_URL,$url);
				$res2=curl_exec($ch);
				curl_close($ch);

				$json = json_decode($res2);			

				print_r($member);
				print_r($json);

				// 구독중이면 1개월 연장
				if((isset($json->error) && $json->error->code == 410) || $json->autoRenewing == false) {
					// 구독 해지 상태. do nothing
					$this->common_m->updateQuery(array(
						'table_name' => 'MEMBER',
						'update_columns' => array('mem_subscription' => 'N'),
						'where_case' => array('mem_no' => $member['mem_no'])
					));					
				} else { 				
					$access_sql = "SELECT mem_no, pur_no, acc_fromtime, acc_totime FROM MEMBER_ACCESS WHERE mem_no = " . $this->db->escape($member['mem_no']) . " ORDER BY acc_totime DESC LIMIT 1";
					$access_data = $this->db->query($access_sql)->row_array();

					$lasttime = new DateTime($access_data['acc_totime']);
					$fromtime = $lasttime->add(new DateInterval('PT1S'));

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
								". $this->db->escape($member['mem_no']) ."
								, ". $this->db->escape($res['pur_no']) ."
								, ". $this->db->escape($fromtime->format('Y-m-d H:i:s')) ."
								, ". $this->db->escape($totime) ."
							)
					";

					$this->db->query($sql);
				}
			}
		}		
	}	
}
