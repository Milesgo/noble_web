<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('common_m'));
	}        


	public function selectBannerList($searchParam) {
		
		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " b.banner_no DESC " ;
		}

		// if (!isset($searchParam['bannerDisplay']) OR empty($searchParam['bannerDisplay'])) {
		// 	$searchParam['bannerDisplay'] = "Y" ;
		// }

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				b.banner_no
				, b.banner_name
				, b.banner_target
				, b.banner_detail
				, b.banner_display
				, b.banner_img
				, b.banner_registerdate
				, cp.store_name
				, concat('" . UPLOADURL . "/banner/', cp.store_name) img_url
			FROM
				BANNER b
			LEFT JOIN
				CONTENTS_PICTURE cp
			ON b.banner_img = cp.pic_seq
			";		

		$where_sql = array() ;

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'banner_name' :
					$where_sql[] = " b.banner_name LIKE CONCAT('%', ". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
			}
		}

		if (isset($searchParam['bannerDisplay']) AND !empty($searchParam['bannerDisplay'])) {
			$where_sql[] = " b.banner_display = ". $this->db->escape($searchParam['bannerDisplay']) ; ;
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

	public function selectBannerListForBoard() {

		$sql = "
			SELECT
				b.banner_no
				, b.banner_name
				, b.banner_target
				, b.banner_registerdate
				, b.banner_display
			FROM
				BANNER b
			";		

		$where_sql = array() ;

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'banner_name' :
					$where_sql[] = " b.banner_name LIKE CONCAT('%', ". $this->db->escape($searchParam['keyword']) .", '%')" ;
					break ;
			}
		}

		if (isset($searchParam['bannerDisplay']) AND !empty($searchParam['bannerDisplay'])) {
			$where_sql[] = " b.banner_display = ". $this->db->escape($searchParam['bannerDisplay']) ; ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= " ORDER BY b.banner_no DESC " ;

		return $this->db->query($sql)->result();

	}

 
	public function selectBannerDetail($searchParam) {

		$sql = "
			SELECT
				b.banner_no
				, b.banner_name
				, b.banner_target
				, b.banner_detail
				, b.banner_display
				, b.banner_img
				, b.banner_registerdate
				, cp.store_name
			FROM
				BANNER b
			LEFT JOIN
				CONTENTS_PICTURE cp
			ON b.banner_img = cp.pic_seq
			";		

		$where_sql = array() ;

		if (isset($searchParam['banner_no']) AND !empty($searchParam['banner_no'])) {
			$where_sql[] = "b.banner_no = ". $this->db->escape($searchParam['banner_no']) ;
		}
		
		if (count($where_sql) > 0)
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		return $this->db->query($sql)->row_array();
	}

	// 배너 등록
	public function insertNewBanner($banner) {
		$sql = "
			INSERT INTO
				BANNER
				(
					banner_name
					, banner_target
					, banner_detail
					, banner_display
					, banner_registerdate
					, admin_no
				)
				VALUES
				(
					". $this->db->escape($banner['banner_name']) ."
					, ". $this->db->escape($banner['banner_target']) ."
					, ". $this->db->escape($banner['banner_detail']) ."
					, ". $this->db->escape($banner['banner_display']) ."
					, NOW()
					, ". $this->db->escape($banner['admin_no']) ."
				)
		" ;
		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			$row = $this->db->query("SELECT max(banner_order) as max_banner_order FROM BANNER")->row_array();
			
			$updateNewOrder = array(
				'table_name' => 'BANNER',
				'update_columns' => array('banner_order' => ($row['max_banner_order']+1)),
				'where_case' => array('banner_no' => $newSeq)
			);

			$this->common_m->updateQuery($updateNewOrder);			

			return array(
				'result' => 'SUCCESS',
				'banner_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "배너 등록시 오류가 발생하였습니다"  // 외국어 지원 필요 없음
			) ;
		}
	}
 
 	public function changeBannerDisplay($banner_no, $banner_display) { 
		$updateBanner = array(
			'table_name' => 'BANNER',
			'update_columns' => array('banner_display' => $banner_display),
			'where_case' => array('banner_no' => $banner_no),
			'return_value' => array('board_id' => "banner")
		);

		$result = $this->common_m->updateQuery($updateBanner);		
		return $result;
	}

 	public function changeBannerOrder($banner_no, $banner_order) { 
		$updateBanner = array(
			'table_name' => 'BANNER',
			'update_columns' => array('banner_order' => $banner_order),
			'where_case' => array('banner_no' => $banner_no)
		);

		$result = $this->common_m->updateQuery($updateBanner);		
		return $result;
	}	

}