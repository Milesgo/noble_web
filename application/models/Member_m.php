<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_m extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->model(array('Common_m'));
	}
 

	// 이메일 중복 체크
	public function checkEmail($searchParam) {
		
		$sql = "
			SELECT 
				mem_no
			FROM 
				MEMBER
			WHERE
				mem_email = ". $this->db->escape($searchParam['mem_email']);
				
		if ($this->db->query($sql)->num_rows() == 0) { 
			return array(
				'result' => 'SUCCESS'
			) ;
		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->Common_m->getLocalMessage("이메일로 가입한 메일 주소입니다. 이메일로 로그인해주세요.", $searchParam['lang']) 
			) ;
		}
	}
	

	// 가입 방식 확인. 가입 방식이 이메일인 경우에만 SUCCESS
	public function checkJointype($searchParam) {
		
		$sql = "
			SELECT 
				mem_jointype
			FROM 
				MEMBER
			WHERE
				mem_email = ". $this->db->escape($searchParam['mem_email']);
				
		if ($this->db->query($sql)->num_rows() > 0) { 

			switch ($this->db->query($sql)->row()->mem_jointype) {
				case 'EMAIL':
					return array('result' => 'SUCCESS');
					break;
				
				case 'KAKAO':
					return array(
							'result' => 'FAILURE', 
							'message' => $this->Common_m->getLocalMessage("카카오 ID로 가입한 메일 주소입니다. 카카오 ID로 로그인해주세요.", $searchParam['lang'])
					);
					break;
				case 'NAVER':
					return array(
							'result' => 'FAILURE', 
							'message' => $this->Common_m->getLocalMessage("네이버 ID로 가입한 메일 주소입니다. 네이버 ID로 로그인해주세요.", $searchParam['lang'])
					);
					break;
				case 'GOOGLE':
					return array(
							'result' => 'FAILURE', 
							'message' => $this->Common_m->getLocalMessage("구글 ID로 가입한 메일 주소입니다. 구글 ID로 로그인해주세요.", $searchParam['lang'])
					);
			}

		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->Common_m->getLocalMessage("메일 주소가 일치하지 않습니다", $searchParam['lang'])
			) ;
		}
	}

	
	public function joinNewMember($member) {

	 	$sql = "
			INSERT INTO
				MEMBER
				(
					mem_name
					, mem_email
					, mem_password
					, mem_jointype
					, mem_snsid
					, mem_joindate
				)
				VALUES
				(
					" . $this->db->escape($member['mem_name']) . "
					, " . $this->db->escape($member['mem_email']) . "
					, " . $this->db->escape(md5($member['mem_password'])) . "
					, " . $this->db->escape($member['mem_jointype']) . "
					, " . $this->db->escape($member['mem_snsid']) . "
					, NOW()
				)
			";

		if($this->db->query($sql) > 0) { 
			$newMemberNo = $this->db->insert_id();

			return array(
				'result' => 'SUCCESS',
				'mem_no' => $newMemberNo
			);
		} else { 
			return array(
				'result' => 'FAILURE',
				'message' => $this->Common_m->getLocalMessage("오류가 발생하였습니다", $member['lang'])
			);
		}		
	 
	}
	

	public function loginMember($member) {

		$sql = "
			SELECT
				mem_no
				, mem_name
			FROM
				MEMBER
		";

		$where_sql = array() ;
		$where_sql[] = "mem_jointype = ". $this->db->escape($member['mem_jointype']) ;
		
		switch ($member['mem_jointype']) {
			case 'EMAIL':
				$where_sql[] = "mem_email = ". $this->db->escape($member['mem_email']) ;
				$where_sql[] = "mem_password = ". $this->db->escape(md5($member['mem_password'])) ;
				break;
			
			default: // SNS (카카오톡, 네이버, 구글)
				$where_sql[] = "mem_snsid = ". $this->db->escape($member['mem_snsid']) ;
				break;
		}
				
		$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		if ($this->db->query($sql)->num_rows() == 0) { 

			$message = $this->Common_m->getLocalMessage("비밀번호가 일치하지 않습니다", $member['lang']);

			return array(
				'result' => 'FAILURE' ,
				'message' => $message
			) ;
		} else { 
			$result = $this->db->query($sql)->row_array();

			return array(
				'result' => 'SUCCESS' ,
				'mem_no' => $result['mem_no']
			) ;
		}

	}

	public function selectMemberList($searchParam) {

		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}

		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " m.mem_no DESC " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$count_sql = "
			SELECT
				COUNT(m.mem_no) cnt
			FROM
				MEMBER m
		" ;

		$sql = "
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_joindate
				, m.mem_islive
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		" ;

		$where_sql = array() ;

		if (isset($searchParam['searchKeyword']) AND !empty($searchParam['searchKeyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'mem_name' :
					$where_sql[] = " m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%')" ;
					break ;
				case 'mem_email' :
					$where_sql[] = " m.mem_email LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%')" ;
					break ;
				case 'all' :
					$where_sql[] = " (m.mem_name LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%') OR m.mem_email LIKE CONCAT('%', ". $this->db->escape($searchParam['searchKeyword']) .", '%'))" ;
					break ;
			}
		}

		if (isset($searchParam['mem_islive']) AND !empty($searchParam['mem_islive'])) {
			$where_sql[] = " m.mem_islive = ". $this->db->escape($searchParam['mem_islive']) ;
		}

		if (isset($searchParam['mem_subscription']) AND !empty($searchParam['mem_subscription'])) {
			$where_sql[] = " m.mem_subscription = ". $this->db->escape($searchParam['mem_subscription']) ;
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {
			$where_sql[] = " m.mem_no = ". $this->db->escape($searchParam['mem_no']) ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
			$count_sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "
			GROUP BY mem_no
			ORDER BY
				". $searchParam['orderKey'] ."
		" ;

		if ($searchParam['rowNumber'] > 0) {
			$sql .= "
			LIMIT ". $limit_start .", ". $limit_end ."
			" ;
		}

		$count_result = $this->db->query($count_sql)->row_array() ;

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


	public function selectMemberListForBoard() {

		$sql = "
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_cash
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND pur_no = mem_pur_no AND acc_islive='Y' ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, m.mem_joindate
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no
				AND lp.product_id like 'noble\_%'
		" ;

		$where_sql = array() ;

		$where_sql[] = " ifnull(m.mem_outdate, 0) = 0 ";

		// if (isset($param['mem_islive']) AND !empty($param['mem_islive'])) {
		// 	$where_sql[] = " m.mem_islive = ". $this->db->escape($param['mem_islive']) ;
		// }

		// if (isset($param['mem_subscription']) AND !empty($param['mem_subscription'])) {
		// 	$where_sql[] = " m.mem_subscription = ". $this->db->escape($param['mem_subscription']) ;
		// }

		// if (isset($param['mem_no']) AND !empty($param['mem_no'])) {
		// 	$where_sql[] = " m.mem_no = ". $this->db->escape($param['mem_no']) ;
		// }

		// if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		// }

		$sql .= " GROUP BY mem_no ";
        // $sql .= "ORDER BY " . $pagination['orderkey'] . " LIMIT " . $pagination['posLimit'] . ", " . $pagination['limit']; 

		return $this->db->query($sql)->result();
	}


	public function getMemberCountYesterday() {

		$count_sql = "
			SELECT
				COUNT(mem_no) cnt
			FROM
				MEMBER m
			WHERE
				mem_islive='Y' AND mem_joindate < curdate()
		" ;

		$count_result = $this->db->query($count_sql)->row_array() ;

		return $count_result['cnt'];
	}

	public function selectMemberDetailInfo($searchParam) {

		$sql = "
			SELECT
				m.mem_no
				, m.mem_name
				, m.mem_email
				, m.mem_jointype
				, m.mem_snsid
				, m.mem_joindate
				, IFNULL(lp.pur_no, 0) mem_pur_no
				, IFNULL((SELECT product_id FROM LOG_PURCHASE WHERE mem_no = m.mem_no AND pur_no = mem_pur_no ORDER BY pur_no DESC LIMIT 1),'') mem_product_id
				, IFNULL((SELECT acc_fromtime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND acc_islive='Y' AND pur_no = mem_pur_no ORDER BY acc_no DESC LIMIT 1),'') mem_fromtime
				, IFNULL((SELECT acc_totime FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND acc_islive='Y' AND pur_no = mem_pur_no ORDER BY acc_no DESC LIMIT 1),'') mem_totime
				, (SELECT COUNT(acc_no) FROM MEMBER_ACCESS WHERE mem_no = m.mem_no AND acc_islive='Y') cnt_purchase
				, m.mem_cash
				, m.mem_point
				, m.mem_islive
			FROM
				MEMBER m
			LEFT JOIN
				LOG_PURCHASE lp
			ON
				m.mem_no = lp.mem_no				
		" ;

		$where_sql = array() ;

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {
			$where_sql[] = " m.mem_no = ". $this->db->escape($searchParam['mem_no']) ;
		}

		if (isset($searchParam['mem_email']) AND !empty($searchParam['mem_email'])) {
			$where_sql[] = " m.mem_email = ". $this->db->escape($searchParam['mem_email']) ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$mem_info = $this->db->query($sql)->row_array();

		if($mem_info['mem_pur_no']>0) {

			$tempsql = $sql . "
				GROUP BY mem_pur_no
				HAVING mem_fromtime <= now() AND mem_totime >= now()
			";

			if($this->db->query($tempsql)->num_rows()>0) {
				$sql .= "
					GROUP BY mem_pur_no
					HAVING mem_totime >= now()
					ORDER BY mem_pur_no DESC LIMIT 1
				";
				$mem_info = $this->db->query($sql)->row_array();
			} else {
				$mem_info['mem_pur_no'] = 0 ;
				$mem_info['mem_product_id'] = '';
				$mem_info['mem_fromtime'] = '';
				$mem_info['mem_totime'] = ''; 
			}
		}

		if ($this->db->query($sql)->num_rows() > 0) { 

			$result = array('result' => 'SUCCESS', 'mem_info' => $mem_info);

			if(isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) { 
				$sql = "SELECT lp.product_id, acc_fromtime, acc_totime FROM MEMBER_ACCESS ma JOIN LOG_PURCHASE lp ON ma.pur_no = lp.pur_no 
						WHERE ma.mem_no = " . $this->db->escape($searchParam['mem_no']) . " AND ma.acc_totime >= now() AND acc_islive='Y' 
						ORDER BY lp.pur_no";

				$result['product_info'] = $this->db->query($sql)->result_array();
			}

			return $result;
		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => '조건에 해당되는 회원이 없습니다' // 외국어 지원 필요 없음
			) ;
		}
	}


	public function createNewPassword() {
		$newPassword = "" ;
		for($i = 0 ; $i < PASSWORD_CREATE_LENGTH ; $i++) {
			$newPassword .= PASSWORD_ALLOW_CHARS[rand(0, strlen(PASSWORD_ALLOW_CHARS) - 1)] ;
		}
		return $newPassword ;
	}	

	public function dropoutMember($member) { 
		$sql = "
			UPDATE
				MEMBER
			SET
				mem_name = NULL
				, mem_email = NULL
				, mem_password = NULL
				, mem_jointype = NULL
				, mem_snsid = NULL
				, mem_outdate = NOW()
				, mem_islive = 'N'
			WHERE
				mem_no = ". $this->db->escape($member['mem_no']) ."
		";

		log_message("ERROR","DROPOUT : " . $sql);

		if($this->db->query($sql) > 0) { 
			return array(
				'result' => 'SUCCESS'
			);
		} else { 
			return array(
				'result' => 'FAILURE',
				'message' => $this->Common_m->getLocalMessage("오류가 발생하였습니다", $member['lang'])
			);
		}
	}

	public function getDailyMemberCount($param) { 
		$sql = "
			SELECT 
				day(".$param['mem_type'].") as day
				, count(mem_no) as cnt
			FROM MEMBER 
			WHERE year(".$param['mem_type'].") = ".$this->db->escape($param['year'])." 
			  AND month(".$param['mem_type'].") = ".$this->db->escape($param['month'])." 
			GROUP BY day(".$param['mem_type'].")";


		if ($this->db->query($sql)->num_rows() > 0) { 

			return array('result' => 'SUCCESS', 'stat' => $this->db->query($sql)->result_array());

		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => '일별 통계 데이터 조회에 실패하였습니다' // 외국어 지원 필요 없음
			) ;
		}		

	}

	public function getTotalMemberCountBeforeDate($param) { 
		$sql = "
			SELECT 
				count(mem_no) as cnt
			FROM MEMBER 
			WHERE mem_islive='Y' AND mem_joindate < ".$this->db->escape($param['date']);


		if ($this->db->query($sql)->num_rows() > 0) { 
			return $this->db->query($sql)->row_array();
		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => '전체 통계 데이터 조회에 실패하였습니다' // 외국어 지원 필요 없음
			) ;
		}		

	}

}