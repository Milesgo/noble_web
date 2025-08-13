<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('common_m'));
	}        


	public function selectAlbumList($searchParam) {
		
		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " a.alb_order " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				a.alb_no
				, a.mem_no
				, a.alb_title
				, a.alb_order
				, a.alb_regdate
				, count(abs.alb_song_no) cnt_song
			FROM
				ALBUM a
			LEFT JOIN 
				ALBUM_SONG abs				
			ON
				a.alb_no = abs.alb_no			
			";

		$where_sql = array() ;
		$where_sql[] = "a.mem_no = ". $this->db->escape($searchParam['mem_no']) ;

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'alb_title' :
					$where_sql[] = " a.alb_title LIKE CONCAT('%', ". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
				case 'autoname' :
					$where_sql[] = " a.alb_title LIKE CONCAT(". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
			}
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "
			GROUP BY a.alb_no
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


	// 신규 앨범 등록
	public function insertNewAlbum($album) {
		$sql = "
			INSERT INTO
				ALBUM
				(
					mem_no
					, alb_title
					, alb_order
					, alb_regdate
				)
				VALUES
				(
					". $this->db->escape($album['mem_no']) ."
					, ". $this->db->escape($album['alb_title']) ."
					, ". $this->db->escape($album['alb_order']) ."
					, NOW()
				)
		" ;
		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			return array(
				'result' => 'SUCCESS',
				'alb_no' => $newSeq,
				'alb_title' => $album['alb_title'],
				'alb_order' => $album['alb_order']
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->Common_m->getLocalMessage("앨범 생성시 오류가 발생하였습니다", $album['lang'])
			) ;
		}
	}

  // 앨범명 중복 체크
	public function checkAlbumName($searchParam) {
		
		$sql = "
			SELECT 
				mem_no
			FROM 
				ALBUM";

		$where_sql = array() ;
		$where_sql[] = "mem_no = ". $this->db->escape($searchParam['mem_no']) ;
		$where_sql[] = "alb_title = ". $this->db->escape($searchParam['alb_title']) ;

		// 앨범 번호가 있으면, 수정 케이스. 이 때는 다른 앨범을 대상으로만 비교해야 함
		if (isset($searchParam['alb_no']) AND !empty($searchParam['alb_no'])) {
			$where_sql[] = "alb_no != ". $this->db->escape($searchParam['alb_no']) ;
		}

		if (count($where_sql) > 0)
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
				
		if ($this->db->query($sql)->num_rows() == 0) { 
			return array(
				'result' => 'SUCCESS'
			) ;
		} else { 
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->Common_m->getLocalMessage("동일한 이름의 앨범이 있습니다", $searchParam['lang'])
			) ;
		}
	}
}