<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetSongDetail extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('song_m','Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";

		$result = $this->song_m->selectSongDetail(array(
			'song_no' => $params['song_no'],
			'lang' => $params['lang']
		));

		$result['result'] = !empty($result) ? "SUCCESS" : "FAILURE";
		if($result['result'] == "FAILURE")
			$result['message'] = $this->Common_m->getLocalMessage("해당 곡이 없습니다", $params['lang']);

	    $this->response($result, 200);   
	}
}