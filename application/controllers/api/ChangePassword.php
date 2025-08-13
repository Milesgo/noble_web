<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class ChangePassword extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Member_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
		$searchParam['lang'] = "kr";

		if (isset($params['lang']))
			$searchParam['lang'] = $params['lang'];

		$searchParam['mem_email'] = $params['mem_email'];
		$searchParam['mem_jointype'] = "EMAIL";
		$searchParam['mem_password'] = $params['mem_old_password'];

		$result = $this->Member_m->loginMember($searchParam);

		if($result['result'] == "SUCCESS") { 
			
			$updateMember = array(
				'table_name' => 'MEMBER',
				'update_columns' => array('mem_password' => md5($params['mem_new_password'])),
				'where_case' => array('mem_email' => $params['mem_email'])
			);

			$result = $this->common_m->updateQuery($updateMember);

		} else { 
			$result['message'] = $this->Common_m->getLocalMessage("기존 비밀번호가 다릅니다", $searchParam['lang']);
		}

		$this->response($result, 200);
	}
}
