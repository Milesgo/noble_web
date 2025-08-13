<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class EditAlbumName extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";

		$result = $this->Album_m->checkAlbumName(array('mem_no' => $params['mem_no'], 'alb_title' => $params['alb_title'], 'alb_no' => $params['alb_no'], 'lang' => $params['lang']));
		if($result['result'] == "SUCCESS") { 
			$updateAlbum = array(
				'table_name' => 'ALBUM',
				'update_columns' => array('alb_title' => $params['alb_title']),
				'where_case' => array('alb_no' => $params['alb_no'])
			);

			$result = $this->common_m->updateQuery($updateAlbum);			
			if($result['result'] == "FAILURE") 
				$result['message'] = $this->Common_m->getLocalMessage("앨범명 변경시 오류가 발생하였습니다", $params['lang']);
		}

		$this->response($result, 200);
	}
}
