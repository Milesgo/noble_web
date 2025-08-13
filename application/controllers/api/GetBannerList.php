<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetBannerList extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('banner_m'));
	}

	public function index_post() {
		
		$params = json_decode(file_get_contents('php://input'), TRUE);
/*
		$result = $this->banner_m->selectBannerList(array(
			'pageNumber' => $params['pageNumber'],
			'rowNumber' => $params['rowNumber'],
			'keyword' => $params['keyword'],
			'searchKeyfield' => $params['searchKeyfield'],
			'bannerDisplay' => $params['bannerDisplay']
		));
*/
		$searchParam = array();

		if (isset($params['bannerDisplay']))
			$searchParam['bannerDisplay'] = $params['bannerDisplay'];

		$searchParam['orderKey'] = " b.banner_order ASC ";

		$result = $this->banner_m->selectBannerList($searchParam);
		$result['result'] = ($result['pageInfo']['totalCount'] > 0) ? "SUCCESS" : "FAILURE";

		$this->response($result, 200);
	}
}