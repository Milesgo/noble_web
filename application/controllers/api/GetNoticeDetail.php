<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class GetNoticeDetail extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('banner_m','Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";

		$result = $this->board_m->selectPostDetail(array(
			'post_no' => $params['postNo']
		));

		$result['post_content'] = strip_tags($result['post_content']);

		$result['result'] = !empty($result) ? "SUCCESS" : "FAILURE";
		if($result['result']=="FAILURE")
			$result['message'] = $this->Common_m->getLocalMessage("해당 게시물이 없습니다", $params['lang']);

    $this->response($result, 200);   
	}
}