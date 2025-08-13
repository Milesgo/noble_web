<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_m extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->model(array('Common_m'));
	}
 

	public function selectPurchaseList($searchParam) {

		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}

		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " if(acc_fromtime is null, pur_regdate, if(num_pay>1, acc_fromtime, pur_regdate)) desc " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				lp.pur_no
				, lp.product_id
				, lp.product_name
				, lp.pur_os
				, lp.pur_regdate
				, if(lp.pur_os='android', lp.android_order_id, lp.ios_transactionidentifier) order_id
				, if(lp.product_id='noble_subscription', (SELECT COUNT(pur_no) FROM MEMBER_ACCESS WHERE pur_no = lp.pur_no AND acc_islive='Y' AND acc_fromtime < ma.acc_fromtime) ,0)+1 num_pay
				, lp.pur_regdate
				, lp.pur_canceldate
				, lp.pur_price
				, m.mem_name
				, m.mem_email
				, if(ma.acc_no is null, 0, ma.acc_no) acc_no
				, if(ma.acc_fromtime is null, 0, ma.acc_fromtime) acc_fromtime
				, if(ma.acc_totime is null, 0, ma.acc_totime) acc_totime
			FROM
				LOG_PURCHASE lp
			LEFT JOIN 
				MEMBER_ACCESS ma
			ON lp.pur_no = ma.pur_no
			AND ma.acc_islive = 'Y'
			LEFT JOIN
				MEMBER m
			ON
				lp.mem_no = m.mem_no
		" ;

		$where_sql = array() ;

		if (isset($searchParam['searchKeyword']) AND !empty($searchParam['searchKeyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'product' :
					switch ($searchParam['searchKeyword']) {
						case 'subscription':
							$where_sql[] = " (lp.product_id = 'noble_subscription' OR lp.product_id = 'noble_6' OR lp.product_id = 'noble_12')" ;
							break;

						case 'cash':
							$where_sql[] = " (lp.product_id = 'noblecash_10000' OR lp.product_id = 'noblecash_30000' OR lp.product_id = 'noblecash_50000')" ;
							break;
					}
					break ;
				case 'mem_name' :
					$where_sql[] = " m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%')" ;
					break ;
				case 'all' :
					$where_sql[] = " (m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%') OR m.mem_email LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%') OR lp.android_order_id LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%'))" ;
					break ;
			}
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {			
			$where_sql[] = " lp.mem_no = ". $this->db->escape($searchParam['mem_no']);
		}

		if (isset($searchParam['status']) AND !empty($searchParam['status'])) {
			switch ($searchParam['status']) { 
				case 'normal':
					$where_sql[] = " isnull(pur_canceldate) = true";
					break;
				case 'cancel':
					$where_sql[] = " isnull(pur_canceldate) = false";
					break;
			}			
		}

		if (isset($searchParam['includeCancel']) AND !empty($searchParam['includeCancel'])) {			
			switch ($searchParam['includeCancel']) { 
				case 'N':
					$where_sql[] = " isnull(pur_canceldate) = true";
					break;
			}			
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "

			ORDER BY
				". $searchParam['orderKey'] ."
		" ;

		$count_result['cnt'] = $this->db->query($sql)->num_rows() ;

		if ($searchParam['rowNumber'] > 0) {
			$sql .= "
			LIMIT ". $limit_start .", ". $limit_end ."
			" ;
		}

		return array(
			'pageInfo' => array(
				'totalCount' => intval($count_result['cnt']) ,
				'pageNumber' => $searchParam['pageNumber'] ,
				'rowNumber' => $searchParam['rowNumber'] ,
				'totalPage' => (($searchParam['rowNumber'] > 0 AND $count_result['cnt'] > 0) ? (intval($count_result['cnt'] / $searchParam['rowNumber']) + (($count_result['cnt'] % $searchParam['rowNumber']) == 0 ? 0 : 1)) : 1)

			) ,
			'resultList' => $this->db->query($sql)->result_array()
		) ;

	}


	public function selectPurchaseListForBoard() {

    //             {data: 'pur_no'},
    //             {data: 'mem_name'},
    //             {data: 'mem_email'},
    //             {data: 'pur_os'},
    //             {data: 'order_id'},
    //             {data: 'product_id'},
    //             {data: 'pur_price'},
    //             {data: 'acc_no'},
    //             {data: 'pur_regdate'},
    //             {data: 'pur_canceldate'}

				// , lp.product_name
				// , lp.pur_regdate
				// , if(lp.product_id='noble_subscription', (SELECT COUNT(pur_no) FROM MEMBER_ACCESS WHERE pur_no = lp.pur_no AND acc_islive='Y' AND acc_fromtime < ma.acc_fromtime) ,0)+1 num_pay
				// , if(ma.acc_fromtime is null, 0, ma.acc_fromtime) acc_fromtime
				// , if(ma.acc_totime is null, 0, ma.acc_totime) acc_totime

		$sql = "
			SELECT
				lp.pur_no
				, lp.pur_no as pur_no2
				, if(lp.pur_canceldate != '', '취소', '정상') as pur_status
				, m.mem_name
				, m.mem_email
				, lp.pur_os
				, if(lp.pur_os='android', lp.android_order_id, lp.ios_transactionidentifier) order_id
				, lp.product_id
				, lp.pur_price
				, if(ma.acc_no is null, 0, ma.acc_no) acc_no
				, lp.pur_regdate
				, lp.pur_canceldate
				, if(lp.product_id='noble_subscription', (SELECT COUNT(pur_no) FROM MEMBER_ACCESS WHERE pur_no = lp.pur_no AND acc_islive='Y' AND acc_fromtime < ma.acc_fromtime) ,0)+1 num_pay
				, if(ma.acc_fromtime is null, 0, ma.acc_fromtime) acc_fromtime
				, if(ma.acc_totime is null, 0, ma.acc_totime) acc_totime				
			FROM
				LOG_PURCHASE lp
			LEFT JOIN 
				MEMBER_ACCESS ma
			ON lp.pur_no = ma.pur_no
			AND ma.acc_islive = 'Y'
			LEFT JOIN
				MEMBER m
			ON
				lp.mem_no = m.mem_no
		" ;

		$where_sql = array() ;

		if (isset($searchParam['searchKeyword']) AND !empty($searchParam['searchKeyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'product' :
					switch ($searchParam['searchKeyword']) {
						case 'subscription':
							$where_sql[] = " (lp.product_id = 'noble_subscription' OR lp.product_id = 'noble_6' OR lp.product_id = 'noble_12')" ;
							break;

						case 'cash':
							$where_sql[] = " (lp.product_id = 'noblecash_10000' OR lp.product_id = 'noblecash_30000' OR lp.product_id = 'noblecash_50000')" ;
							break;
					}
					break ;
				case 'mem_name' :
					$where_sql[] = " m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%')" ;
					break ;
				case 'all' :
					$where_sql[] = " (m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%') OR m.mem_email LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%') OR lp.android_order_id LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%'))" ;
					break ;
			}
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {			
			$where_sql[] = " lp.mem_no = ". $this->db->escape($searchParam['mem_no']);
		}

		if (isset($searchParam['status']) AND !empty($searchParam['status'])) {
			switch ($searchParam['status']) { 
				case 'normal':
					$where_sql[] = " isnull(pur_canceldate) = true";
					break;
				case 'cancel':
					$where_sql[] = " isnull(pur_canceldate) = false";
					break;
			}			
		}

		if (isset($searchParam['includeCancel']) AND !empty($searchParam['includeCancel'])) {			
			switch ($searchParam['includeCancel']) { 
				case 'N':
					$where_sql[] = " isnull(pur_canceldate) = true";
					break;
			}			
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "ORDER BY if(acc_fromtime is null, pur_regdate, if(num_pay>1, acc_fromtime, pur_regdate)) desc" ;
		return $this->db->query($sql)->result();

	}

	public function purchaseProduct($product) {

		switch ($product['os']) {
			case 'android':				
				$sql = "
					INSERT INTO
						LOG_PURCHASE
						(
							mem_no
							, product_id
							, product_name
							, pur_os
							, android_order_id
							, android_token
							, pur_price
							, pur_regdate
						)
						VALUES
						(
							". $this->db->escape($product['mem_no']) ."
							, ". $this->db->escape($product['product_id']) ."
							, ". $this->db->escape($product['product_name']) ."
							, ". $this->db->escape($product['os']) ."
							, ". $this->db->escape($product['order_id']) ."
							, ". $this->db->escape($product['token']) ."
							, ". $this->db->escape($product['price']) ."
							, NOW()
						)
				" ;
				break;		
			case 'ios':
				$sql = "
					INSERT INTO
						LOG_PURCHASE
						(
							mem_no
							, product_id
							, product_name
							, pur_os
							, ios_transactionidentifier
							, pur_price
							, pur_regdate
						)
						VALUES
						(
							". $this->db->escape($product['mem_no']) ."
							, ". $this->db->escape($product['product_id']) ."
							, ". $this->db->escape($product['product_name']) ."
							, ". $this->db->escape($product['os']) ."
							, ". $this->db->escape($product['transactionidentifier']) ."
							, ". $this->db->escape($product['price']) ."
							, NOW()
						)
				" ;
				break;		
		}

		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			if($product['product_id'] == "noble_subscription" || $product['product_id'] == "noble_6" || $product['product_id'] == "noble_12") {

				$access_sql = "SELECT mem_no, pur_no, acc_fromtime, acc_totime FROM MEMBER_ACCESS WHERE mem_no = " . $this->db->escape($product['mem_no']) . " ORDER BY acc_totime DESC LIMIT 1";
				$access_data = $this->db->query($access_sql)->row_array();

				if($this->db->query($access_sql)->num_rows() > 0) { 
					$lasttime = new DateTime($access_data['acc_totime']);
					if(new DateTime() > $lasttime)
						$fromtime = new DateTime();
					else
						$fromtime = $lasttime->add(new DateInterval('PT1S'));
				} else
					$fromtime = new DateTime();

				$totime = clone $fromtime; 

				switch ($product['product_id']) {
					case 'noble_subscription':
						$totime = $totime->add(new DateInterval('P30D'));	
						break;
					case 'noble_6':
						$totime = $totime->add(new DateInterval('P6M'));	
						break;
					case 'noble_12':
						$totime = $totime->add(new DateInterval('P12M'));
						break;					
				}


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
							". $this->db->escape($product['mem_no']) ."
							, ". $this->db->escape($newSeq) ."
							, ". $this->db->escape($fromtime->format('Y-m-d H:i:s')) ."
							, ". $this->db->escape($totime->format('Y-m-d H:i:s')) ."
						)
				";

				$this->db->query($sql);

				if($product['product_id'] == "noble_subscription") {
					// 회원정보에서 구독중 처리
					$this->common_m->updateQuery(array(
						'table_name' => 'MEMBER',
						'update_columns' => array('mem_subscription' => 'Y'),
						'where_case' => array('mem_no' => $product['mem_no'])
					));					
				}

				// 안드로이드에 한하여, 6개월/12개월 결제시 정기권 결제여부 체크 후 해지시킴
				if($product['os']=="android" && ($product['product_id']=="noble_6" || $product['product_id']=="noble_12")) { 

					$sql = " 
						SELECT android_token 
						FROM LOG_PURCHASE
						WHERE 
							mem_no = " . $product['mem_no'] ."
							AND product_id = 'noble_subscription'
							AND pur_os = 'android'
						ORDER BY pur_no DESC LIMIT 1";

					if($this->db->query($sql)->num_rows()>0) { 

						$access_token = $this->Common_m->getGoogleDeveloperAccessToken();

						$row = $this->db->query($sql)->row_array();
						$token = $row['android_token'];

						$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . "?access_token=" . $access_token;

						$ch = curl_init();
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_URL,$url);
						$result=curl_exec($ch);
						curl_close($ch);

						$json = json_decode($result);
						$autoRenewing = $json->autoRenewing;

						// 구독중이면 해지
						if($autoRenewing==1) { 
							$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . ":cancel?access_token=" . $access_token;

							$ch = curl_init();
							curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							curl_setopt($ch, CURLOPT_URL,$url);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS,  null);
							$result=curl_exec($ch);
							curl_close($ch);

							// 회원정보에서 해지 처리
							$this->common_m->updateQuery(array(
								'table_name' => 'MEMBER',
								'update_columns' => array('mem_subscription' => 'N'),
								'where_case' => array('mem_no' => $product['mem_no'])
							));
						}
					}
				}

			} else if($product['product_id'] == "noblecash_10000" || $product['product_id'] == "noblecash_30000" || $product['product_id'] == "noblecash_50000") {

				switch ($product['product_id']) {
					case 'noblecash_10000':
						$cash = 10000;
						break;
					case 'noblecash_30000':
						$cash = 30000;
						break;
					case 'noblecash_50000':
						$cash = 50000;
						break;
				}

				$sql = "UPDATE MEMBER SET mem_cash = mem_cash + " . $cash . " WHERE mem_no = ". $this->db->escape($product['mem_no']);
				$this->db->query($sql);
			}

			return array(
				'result' => 'SUCCESS',
				'pur_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->Common_m->getLocalMessage("오류가 발생하였습니다", $product['lang'])
			) ;
		}
	}


	public function provideCash($product) {

		$sql = "
			INSERT INTO
				LOG_PURCHASE
				(
					mem_no
					, product_id
					, product_name
					, pur_os
					, pur_price
					, pur_regdate
				)
				VALUES
				(
					". $this->db->escape($product['mem_no']) ."
					, ". $this->db->escape($product['product_id']) ."
					, ". $this->db->escape($product['product_name']) ."
					, 'admin'
					, ". $this->db->escape($product['price']) ."
					, NOW()
				)
		" ;

		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			$sql = "UPDATE MEMBER SET mem_cash = mem_cash + " . $product['price'] . " WHERE mem_no = ". $this->db->escape($product['mem_no']);
			$this->db->query($sql);

			return array(
				'result' => 'SUCCESS',
				'pur_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "캐시 추가 시 오류가 발생하였습니다" // 외국어 지원 필요 없음
			) ;
		}
	}	


	public function cancelPurchase($product) {

		$row = $this->db->query("SELECT * FROM LOG_PURCHASE WHERE pur_no = ". $this->db->escape($product['pur_no']))->row_array();

		if($row['pur_canceldate'] != "") {
			return array(
				'result' => 'FAILURE',
				'message' => '이미 취소된 건입니다' // 외국어 지원 필요 없음
			) ;			
			exit;
		} 

		$updatePurhcase = array(
			'table_name' => 'LOG_PURCHASE',
			'update_columns' => array('pur_canceldate' => date("Y-m-d H:i:s", time())),
			'where_case' => array('pur_no' => $product['pur_no'])
		);		

		$result = $this->common_m->updateQuery($updatePurhcase);

		if ($result['result'] == "SUCCESS") {

			if(strpos($row['product_id'], "noblecash_") !== false) { 
				// 캐시 취소 처리
				$cashamount = str_replace("noblecash_", "", $row['product_id']);
				$sql = "UPDATE MEMBER SET mem_cash = mem_cash - ".$cashamount." WHERE mem_no = ". $this->db->escape($row['mem_no']);
				$this->db->query($sql);
			} else { 
				// 이용권 취소 처리
				$updateAccess = array(
					'table_name' => 'MEMBER_ACCESS',
					'update_columns' => array('acc_islive' => 'N'),
					'where_case' => array('pur_no' => $product['pur_no'])
				);
				$this->common_m->updateQuery($updateAccess);

				// 회원정보의 구독상태 해지 처리
				if($row['product_id'] == "noble_subscription") {
					$this->common_m->updateQuery(array(
						'table_name' => 'MEMBER',
						'update_columns' => array('mem_subscription' => 'N'),
						'where_case' => array('mem_no' => $row['mem_no'])
					));
				}
			}

			// 안드로이드 주문건이면 환불처리 하기
			if($row['pur_os'] == "android") { 

				$android_token = "heojfaghmcoaiaafnpekehoh.AO-J1OwDSOAG-SJw0bEikKj2WG8Xe54uABEI-Zfatx0xOc4LD5NlXvvOGGcLL2xHBNA0bhdlNrw0hZ9D8UWHftpFM_bney-0yhFi5qQqss4ttV8I-op5W4U";
				$access_token = $this->Common_m->getGoogleDeveloperAccessToken();
				$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/orders/".$row['android_order_id'].":refund/";

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_URL,$url);
				$result=curl_exec($ch);
				curl_close($ch);

				$json = json_decode($result);

				log_message("ERROR","환불 결과 : " . var_export($json, 1));

				// if((isset($json->error) && $json->error->code == 410) || $json->autoRenewing == false)
				// 	echo "구독해지";
				// else
				// 	echo "구독중";


			}

			return array(
				'result' => 'SUCCESS'			
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "취소 시 오류가 발생하였습니다" // 외국어 지원 필요 없음
			) ;
		}
	}	

	public function provideMembership($product) {

		$sql = "
			INSERT INTO
				LOG_PURCHASE
				(
					mem_no
					, product_id
					, product_name
					, pur_os
					, pur_price
					, pur_regdate
				)
				VALUES
				(
					". $this->db->escape($product['mem_no']) ."
					, ". $this->db->escape($product['product_id']) ."
					, ". $this->db->escape($product['product_name']) ."
					, 'admin'
					, ". $this->db->escape($product['price']) ."
					, NOW()
				)
		" ;

		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			$access_sql = "SELECT mem_no, pur_no, acc_fromtime, acc_totime FROM MEMBER_ACCESS WHERE mem_no = " . $this->db->escape($product['mem_no']) . " AND acc_islive='Y' ORDER BY acc_totime DESC LIMIT 1";
			$access_data = $this->db->query($access_sql)->row_array();

			if($this->db->query($access_sql)->num_rows() > 0) { 
				$lasttime = new DateTime($access_data['acc_totime']);

				if(new DateTime() > $lasttime)
					$fromtime = new DateTime();
				else
					$fromtime = $lasttime->add(new DateInterval('PT1S'));
			} else
				$fromtime = new DateTime($product['acc_fromdate']);

			$totime = clone $fromtime; 

			switch ($product['product_id']) {
				case 'noble_subscription':
					$totime = $totime->add(new DateInterval('P30D'));	
					break;
				case 'noble_6':
					$totime = $totime->add(new DateInterval('P6M'));	
					break;
				case 'noble_12':
					$totime = $totime->add(new DateInterval('P12M'));
					break;					
			}

			$fromtime->setTime(0,0,0);
			$totime->setTime(23,59,59);

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
						". $this->db->escape($product['mem_no']) ."
						, ". $this->db->escape($newSeq) ."
						, ". $this->db->escape($fromtime->format('Y-m-d H:i:s')) ."
						, ". $this->db->escape($totime->format('Y-m-d H:i:s')) ."
					)
			";

			$this->db->query($sql);

			// 안드로이드에 한하여, 6개월/12개월 결제시 정기권 결제여부 체크 후 해지시킴
			if($product['product_id']=="noble_6" || $product['product_id']=="noble_12") { 

				$sql = " 
					SELECT android_token 
					FROM LOG_PURCHASE
					WHERE 
						mem_no = " . $product['mem_no'] ."
						AND product_id = 'noble_subscription'
						AND pur_os = 'android'
					ORDER BY pur_no DESC LIMIT 1";

				if($this->db->query($sql)->num_rows()>0) { 

					$access_token = $this->Common_m->getGoogleDeveloperAccessToken();

					$row = $this->db->query($sql)->row_array();
					$token = $row['android_token'];

					$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . "?access_token=" . $access_token;

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_URL,$url);
					$result=curl_exec($ch);
					curl_close($ch);

					$json = json_decode($result);
					$autoRenewing = $json->autoRenewing;

					// 구독중이면 해지
					if($autoRenewing==1) { 
						$url="https://www.googleapis.com/androidpublisher/v3/applications/com.noble.ocarina/purchases/subscriptions/noble_subscription/tokens/" . $token . ":cancel?access_token=" . $access_token;

						$ch = curl_init();
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_URL,$url);
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_POSTFIELDS,  null);
						$result=curl_exec($ch);
						curl_close($ch);
					}
				}
			}


			return array(
				'result' => 'SUCCESS',
				'pur_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "정액권 추가 시 오류가 발생하였습니다"  // 외국어 지원 필요 없음
			) ;
		}

	}		

	public function checkLogBuyPdfList($searchParam) {

		$sql = "
			SELECT
				log_no
				, song_no
				, mem_no
				, log_regdate
			FROM
				LOG_BUYPDF
		" ;

		$where_sql = array() ;

		if (isset($searchParam['song_no']) AND !empty($searchParam['song_no'])) {			
			$where_sql[] = " song_no = ". $this->db->escape($searchParam['song_no']);
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {			
			$where_sql[] = " mem_no = ". $this->db->escape($searchParam['mem_no']);
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$row = $this->db->query($sql)->row_array();

		return array('result' => (($this->db->query($sql)->num_rows() > 0) ? true : false), 
					'log_regdate' => $row['log_regdate']
				);
	}


	public function selectScoreList($searchParam) {

		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " (CASE WHEN ASCII(SUBSTRING(s.song_title,1)) BETWEEN 48 AND 57 THEN 3 WHEN ASCII(SUBSTRING(s.song_title,1)) < 128 THEN 2 ELSE 1 END), s.song_title " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				lbp.log_no
				, lbp.log_regdate
				, s.song_no
				, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr		
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
			FROM
				LOG_BUYPDF lbp
			INNER JOIN 
				SONG s
				ON lbp.song_no = s.song_no
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		" ;

		$where_sql = array() ;

		if (isset($searchParam['song_no']) AND !empty($searchParam['song_no'])) {			
			$where_sql[] = " song_no = ". $this->db->escape($searchParam['song_no']);
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {			
			$where_sql[] = " mem_no = ". $this->db->escape($searchParam['mem_no']);
		}

		if (isset($searchParam['song_pdfprice']) AND !empty($searchParam['song_pdfprice'])) {			
			if($searchParam['song_pdfprice'] == "PAID")
				$where_sql[] = " s.song_pdfprice > 0 ";
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "
			ORDER BY
				". $searchParam['orderKey'] ."
		" ;

		$count_result = $this->db->query($sql)->num_rows() ;		

		if ($searchParam['rowNumber'] > 0) {
			$sql .= "
			LIMIT ". $limit_start .", ". $limit_end ."
			" ;
		}

		return array(
			'pageInfo' => array(
				'totalCount' => intval($count_result) ,
				'pageNumber' => $searchParam['pageNumber'] ,
				'rowNumber' => $searchParam['rowNumber'] ,
				'totalPage' => (($searchParam['rowNumber'] > 0 AND $count_result > 0) ? (intval($count_result / $searchParam['rowNumber']) + (($count_result % $searchParam['rowNumber']) == 0 ? 0 : 1)) : 1)
			) ,
			'resultList' => $this->db->query($sql)->result_array()
		) ;
	}
}