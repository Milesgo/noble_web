<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetNoticeList extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('board_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
		$searchParam['board_id'] = "notice";
	
		if (isset($params['pageNumber']))
			$searchParam['pageNumber'] = $params['pageNumber'];

		if (isset($params['rowNumber']))
			$searchParam['rowNumber'] = $params['rowNumber'];
	
		if (isset($params['keyword']))
			$searchParam['keyword'] = $params['keyword'];
	
		if (isset($params['searchKeyfield']))
			$searchParam['searchKeyfield'] = $params['searchKeyfield'];

		$searchParam['status'] = 'PUBLISH';

		$result = $this->board_m->selectPostList($searchParam);
		$result['result'] = ($result['pageInfo']['totalCount'] > 0) ? "SUCCESS" : "FAILURE";

		$this->response($result, 200);
	}
}