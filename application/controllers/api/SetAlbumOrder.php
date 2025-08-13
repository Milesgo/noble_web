<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class SetAlbumOrder extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";

		for($i=0; $i<count($params['alb_info']); $i++) { 

			$alb_info = $params['alb_info'][$i];

			$updateAlbumOrder = array(
				'table_name' => 'ALBUM',
				'update_columns' => array('alb_order' => $alb_info['alb_order']),
				'where_case' => array('alb_no' => $alb_info['alb_no'], 'mem_no' => $params['mem_no'])
			);

			$result = $this->common_m->updateQuery($updateAlbumOrder);
			if($result['result'] == "FAILURE")
				$result['message'] = $this->Common_m->getLocalMessage("앨범 순서 조정시 오류가 발생하였습니다", $params['lang']);

		}
		
		$this->response($result, 200);
	}
}
