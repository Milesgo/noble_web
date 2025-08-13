<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		// $this->load->model(array('config_m', 'memberFunction_m', 'log_m', 'user')) ;		
	}        

	public function selectBoardDetail($searchParam) {
		
		$sql = "
			SELECT
				board_no
				, board_id
				, board_name
				, board_use_thumbnail
				, board_use_category
				, board_use_write
				, board_use_status
			FROM
				BOARD_SETTING
		";

		$where_sql = array() ;

		if (isset($searchParam['board_id']) AND !empty($searchParam['board_id'])) {
			$where_sql[] = "board_id = ". $this->db->escape($searchParam['board_id']) ;
		}
		
		if (count($where_sql) > 0)
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		return $this->db->query($sql)->row_array();
	}

	public function selectPostList($searchParam) {
		
		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " bp.post_registerdate DESC " ;
		}
		// if (!isset($searchParam['status']) OR empty($searchParam['status'])) {
		// 	$searchParam['status'] = "PUBLISH" ;
		// }


		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				bp.post_no
				, bp.ct_no
				, bc.ct_name
				, bp.board_id
				, bp.post_title
				, bp.post_totalcomment
				, bp.post_status
				, bp.post_registerdate
				, bp.post_hit
				, bp.mem_no
				, bp.mem_name
				, cp.store_name
			FROM
				BOARD_POST bp
			LEFT JOIN
				BOARD_CATEGORY bc
			ON bp.ct_no = bc.ct_no
			LEFT JOIN
				CONTENTS_PICTURE cp
			ON bp.post_thumbnail = cp.pic_seq
			";		

		$where_sql = array() ;

		if (isset($searchParam['board_id']) AND !empty($searchParam['board_id'])) {
			$where_sql[] = " bp.board_id = ". $this->db->escape($searchParam['board_id']) ; ;
		}

		if (isset($searchParam['category']) AND !empty($searchParam['category'])) {
			$where_sql[] = " bc.ct_no = ". $this->db->escape($searchParam['category']) ; ;
		}

		if (isset($searchParam['post_no']) AND !empty($searchParam['post_no'])) {
			$where_sql[] = " bc.post_no = ". $this->db->escape($searchParam['post_no']) ; ;
		}

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'post_title' :
					$where_sql[] = " bp.post_title LIKE CONCAT('%', ". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
				case 'post_registerdate' :
					$where_sql[] = " post_registerdate >= DATE_SUB(CURDATE(), INTERVAL " . $searchParam['keyword'] . " DAY)" ;
					break ;
			}
		}

		if (isset($searchParam['status']) AND !empty($searchParam['status'])) {
			$where_sql[] = " bp.post_status = ". $this->db->escape($searchParam['status']) ; ;
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

	public function selectPostListForBoard($searchParam) {
		
		// if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
		// 	$searchParam['pageNumber'] = 1 ;
		// }
		// if (!isset($searchParam['rowNumber'])) {
		// 	$searchParam['rowNumber'] = 10 ;
		// }
		// if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
		// 	$searchParam['orderKey'] = " bp.post_registerdate DESC " ;
		// }
		// // if (!isset($searchParam['status']) OR empty($searchParam['status'])) {
		// // 	$searchParam['status'] = "PUBLISH" ;
		// // }


		// $searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		// $limit_end = $searchParam['rowNumber'] ;
		// $limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				bp.post_no
				, bp.post_title
				, bp.post_registerdate
				, bp.post_status
				, bp.mem_name
			FROM
				BOARD_POST bp
			";		

		$where_sql = array() ;

		if (isset($searchParam['board_id']) AND !empty($searchParam['board_id'])) {
			$where_sql[] = " bp.board_id = ". $this->db->escape($searchParam['board_id']) ; ;
		}

		if (isset($searchParam['category']) AND !empty($searchParam['category'])) {
			$where_sql[] = " bc.ct_no = ". $this->db->escape($searchParam['category']) ; ;
		}

		if (isset($searchParam['post_no']) AND !empty($searchParam['post_no'])) {
			$where_sql[] = " bc.post_no = ". $this->db->escape($searchParam['post_no']) ; ;
		}

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'post_title' :
					$where_sql[] = " bp.post_title LIKE CONCAT('%', ". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
				case 'post_registerdate' :
					$where_sql[] = " post_registerdate >= DATE_SUB(CURDATE(), INTERVAL " . $searchParam['keyword'] . " DAY)" ;
					break ;
			}
		}

		if (isset($searchParam['status']) AND !empty($searchParam['status'])) {
			$where_sql[] = " bp.post_status = ". $this->db->escape($searchParam['status']) ; ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= " ORDER BY bp.post_registerdate DESC " ;

		return $this->db->query($sql)->result();

		// $count_result = $this->db->query($sql)->num_rows() ;		

		// if ($searchParam['rowNumber'] > 0) {
		// 	$sql .= "
		// 	LIMIT ". $limit_start .", ". $limit_end ."
		// 	" ;
		// }

		// return array(
		// 	'pageInfo' => array(
		// 		'totalCount' => intval($count_result) ,
		// 		'pageNumber' => $searchParam['pageNumber'] ,
		// 		'rowNumber' => $searchParam['rowNumber'] ,
		// 		'totalPage' => (($searchParam['rowNumber'] > 0 AND $count_result > 0) ? (intval($count_result / $searchParam['rowNumber']) + (($count_result % $searchParam['rowNumber']) == 0 ? 0 : 1)) : 1)
		// 	) ,
		// 	'resultList' => $this->db->query($sql)->result_array()
		// ) ;
	}

	public function selectPostDetail($searchParam) {
		
		$sql = "
			SELECT
				bp.post_no
				, bp.post_title
				, bp.post_content
				, bp.post_totalcomment
				, bp.post_status
				, bp.post_thumbnail			
				, bp.post_registerdate
				, bp.post_hit
				, bp.ct_no
				, bp.mem_no
				, bp.mem_name
				, bp.post_url
				, cp.store_name
			FROM
				BOARD_POST bp
			LEFT JOIN
				CONTENTS_PICTURE cp
			ON bp.post_thumbnail = cp.pic_seq
			";

		$where_sql = array() ;
		$where_sql[] = "bp.post_no = ". $this->db->escape($searchParam['post_no']) ;
		
		if (count($where_sql) > 0)
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		return $this->db->query($sql)->row_array();
	}

	public function selectCategoryList($searchParam) {
		
		$sql = "
			SELECT
				ct_no
				, board_id
				, ct_name
				, ct_order
			FROM
				BOARD_CATEGORY
		";

		$where_sql = array() ;

		if (isset($searchParam['board_id']) AND !empty($searchParam['board_id'])) {
			$where_sql[] = "board_id = ". $this->db->escape($searchParam['board_id']) ;
		}

		if (count($where_sql) > 0)
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		$sql .= "
			ORDER BY ct_order ASC			
		" ;
		
		return $this->db->query($sql)->result_array();
	}

	// 게시물 작성
	public function insertNewPost($post) {
		$sql = "
			INSERT INTO
				BOARD_POST
				(
					board_id
					, ct_no
					, post_title
					, post_content
					, post_status
					, post_registerdate
					, mem_no
					, mem_name
				)
				VALUES
				(
					". $this->db->escape($post['board_id']) ."
					, ". $this->db->escape($post['ct_no']) ."
					, ". $this->db->escape($post['post_title']) ."
					, ". $this->db->escape($post['post_content']) ."
					, ". $this->db->escape($post['post_status']) ."
					, NOW()
					, ". $this->db->escape($post['mem_no']) ."
					, ". $this->db->escape($post['mem_name']) ."
				)
		" ;
		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			return array(
				'result' => 'SUCCESS',
				'post_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "게시물 등록시 오류가 발생하였습니다" // 외국어 지원 필요 없음
			) ;
		}
	}


	public function insertBoardHitLog($hit) {

		$already_sql = "
			SELECT 
				log_no
			FROM 
				BOARD_LOG 
			WHERE
				post_no = ".$this->db->escape($hit['post_no'])." AND 
				mem_no = ".$this->db->escape($hit['mem_no'])." AND 
				log_registerdate > ".$this->db->escape((date("Y-m-d H:i:s",time()-60*60)))."
		";

		// 비회원인 경우 IP 체크항목 추가
		if($hit['mem_no'] == 0) 
			$already_sql .= " AND log_ipaddress = ".$this->db->escape($_SERVER["REMOTE_ADDR"]);
		
		if ($this->db->query($already_sql)->num_rows() == 0) {			
			// 조회수 1 증가
			$this->db->query("UPDATE BOARD_POST SET post_hit = post_hit + 1 WHERE post_no = " . $this->db->escape($hit['post_no']));
			$hit['is_count']="Y";
		} else 
			$hit['is_count']="N";

		$sql = "
			INSERT INTO
				BOARD_LOG
				(
					post_no
					, mem_no
					, log_registerdate
					, log_ipaddress
					, log_iscount
				)
				VALUES
				(
					". $this->db->escape($hit['post_no']) ."
					, ". $this->db->escape($hit['mem_no']) ."
					, NOW()
					, ". $this->db->escape($_SERVER["REMOTE_ADDR"]) ."
					, ". $this->db->escape($hit['is_count']) ."					
				)
		";
		
		$this->db->query($sql);				
					
 	}	

}