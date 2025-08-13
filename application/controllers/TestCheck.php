<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestCheck extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_m'));
	}

	public function index()
	{

		$android_token = "khidplgpnceldbhhonfkkoaa.AO-J1Ox3Cybo_2v8YsZ7XxILZ-cUfkg4er7O-yz4koPBpiBS42IcIHcm4w-HryjAadl4TeiIsPdCoUHKuGIUpf1-a6FugNaCGA";
		$access_token = $this->Common_m->getGoogleDeveloperAccessToken();
		$url = "https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $android_token . "?access_token=" . $access_token;

		echo $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		$result = curl_exec($ch);
		curl_close($ch);

		$json = json_decode($result);

		if ((isset($json->error) && $json->error->code == 410) || $json->autoRenewing == false)
			echo "구독해지";
		else
			echo "구독중";

		echo "<BR>";
		echo "start : " . date("Y-m-d H:i:s", ($json->startTimeMillis / 1000));
		echo "<BR>expire : " . date("Y-m-d H:i:s", ($json->expiryTimeMillis / 1000));




		// $access_token = $this->Common_m->getGoogleDeveloperAccessToken();
		// echo $access_token;
		/*		
		// 구독여부 체크
		$token = "dhkhdolimljbahgkinlakjmn.AO-J1OyM5MYjy-gNhDf8gwvKKSrYtcKEcmaJuS_wRY9haO67349c0plAxug_6MOq3wA-Ls3hjfju3Tqt4YfhwAQY4_ibokQV5o-9jtdw6vQgyC7-4mFXmpWb5S7AxW3nOL5RWoD04laj";

		$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . "?access_token=" . $access_token;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		$result=curl_exec($ch);
		curl_close($ch);

		$json = json_decode($result);
		$autoRenewing = $json->autoRenewing;

		if($autoRenewing==1)
			echo "구독중";
		else
			echo "구독해지";


		// 구독중이면 해지
		if($autoRenewing==1) { 
			$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . ":cancel?access_token=" . $access_token;

			echo "<BR><BR>".$url."<BR><BR>";

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,  null);
			$result=curl_exec($ch);
			curl_close($ch);

			print_r($result);

			echo "해지가 완료되었습니다";
		}
*/
		/*
		$sql = "
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_snsid
				, m.mem_joindate
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT product_id FROM LOG_PURCHASE WHERE mem_no = m.mem_no AND pur_no = mem_pur_no),'') mem_product_id
				, IFNULL((SELECT acc_fromtime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no),'') mem_fromtime
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no	
			WHERE
				m.mem_no = 92			
		" ;

		$mem_info = $this->db->query($sql)->row_array();

		if($mem_info['mem_pur_no']>0) {

			$tempsql = $sql . "
				GROUP BY mem_pur_no
				HAVING mem_fromtime <= now() AND mem_totime >= now()
			";

			if($this->db->query($tempsql)->num_rows()>0)
				$sql .= "
					GROUP BY mem_pur_no
					HAVING mem_fromtime <= now() AND mem_totime >= now()
					ORDER BY mem_pur_no DESC LIMIT 1
				";
			else {
				unset($mem_info['mem_fromtime']);
				unset($mem_info['mem_totime']);
			}
		}

		print_r($mem_info);
*/
	}
}
