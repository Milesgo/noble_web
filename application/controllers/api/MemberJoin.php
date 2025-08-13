<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class MemberJoin extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Member_m', 'Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$searchParam = array();
		$searchParam['mem_snsid'] = "";
		$searchParam['mem_password'] = "";	
		$searchParam['lang'] = "kr";

		if (isset($params['lang']))
			$searchParam['lang'] = $params['lang'];

		if (isset($params['mem_name']))
			$searchParam['mem_name'] = $params['mem_name'];

		if (isset($params['mem_email']))
			$searchParam['mem_email'] = $params['mem_email'];

		if (isset($params['mem_password']))
			$searchParam['mem_password'] = $params['mem_password'];

		if (isset($params['mem_jointype']))
			$searchParam['mem_jointype'] = $params['mem_jointype'];

		if (isset($params['mem_snsid']))
			$searchParam['mem_snsid'] = $params['mem_snsid'];            
		
		$result = $this->Member_m->checkEmail(array('mem_email' => $searchParam['mem_email'], 'lang' => $searchParam['lang']));
		
		if($result['result']=="SUCCESS") {
			$result = $this->Member_m->joinNewMember($searchParam);

			if($result['result']=="SUCCESS") { 
				$this->Album_m->insertNewAlbum(array(
					'mem_no' => $result['mem_no'], 
					'alb_title' => $this->Common_m->getLocalMessage("오카리나", $searchParam['lang']), 
					'alb_order' => 1,
					'lang' => $searchParam['lang']
				));				

				$this->Album_m->insertNewAlbum(array(
					'mem_no' => $result['mem_no'], 
					'alb_title' => $this->Common_m->getLocalMessage("팬플룻", $searchParam['lang']), 
					'alb_order' => 2,
					'lang' => $searchParam['lang']
				));				
			}
		}

		$this->response($result, 200);
	}
}
