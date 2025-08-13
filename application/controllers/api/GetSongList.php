<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetSongList extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Song_m'));
	}

	public function index_post() {
		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
	
		if (isset($params['pageNumber']))
			$searchParam['pageNumber'] = $params['pageNumber'];

		if (isset($params['rowNumber']))
			$searchParam['rowNumber'] = $params['rowNumber'];
	
		if (isset($params['keyword']))
			$searchParam['keyword'] = $params['keyword'];
	
		if (isset($params['searchKeyfield']))
			$searchParam['searchKeyfield'] = $params['searchKeyfield'];
	
		if (isset($params['codeInst']))
			$searchParam['codeInst'] = $params['codeInst'];
	
		if (isset($params['codeGenre']))
			$searchParam['codeGenre'] = $params['codeGenre'];
	
		if (isset($params['codeDuet']))
			$searchParam['codeDuet'] = $params['codeDuet'];
	
		if (isset($params['codeKey']))
			$searchParam['codeKey'] = $params['codeKey'];
	
		if (isset($params['price']))
			$searchParam['price'] = $params['price'];

		if (isset($params['orderKey']))
			$searchParam['orderKey'] = $params['orderKey'];

		if (isset($params['lang']))
			$searchParam['lang'] = $params['lang'];

		if (isset($params['includeMulti']))
			$searchParam['includeMulti'] = $params['includeMulti'];

		$searchParam['isLive'] = "Y";

		if (isset($params['test'])) { 
			if($params['test'] == 1)
				unset($searchParam['isLive']);
		}

		// if (isset($params['mem_no']))
			// $searchParam['mem_no'] = $params['mem_no'];

		$result = $this->Song_m->selectSongList($searchParam);
		$result['result'] = ($result['pageInfo']['totalCount'] > 0) ? "SUCCESS" : "FAILURE";

		$this->response($result, 200);
	}

}
