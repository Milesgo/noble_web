<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetAlbumSongList extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('AlbumSong_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
	
		if (isset($params['pageNumber']))
			$searchParam['pageNumber'] = $params['pageNumber'];

		if (isset($params['rowNumber']))
			$searchParam['rowNumber'] = $params['rowNumber'];

		if (isset($params['mem_no'])) {
			$searchParam['mem_no'] = $params['mem_no'];
		}

		if (isset($params['alb_no']))
			$searchParam['alb_no'] = $params['alb_no'];

		if (isset($params['song_no']))
			$searchParam['song_no'] = $params['song_no'];

		$result = $this->AlbumSong_m->selectAlbumSongList($searchParam);
		$result['result'] = ($result['pageInfo']['totalCount'] > 0) ? "SUCCESS" : "FAILURE";

		$this->response($result, 200);
	}
}