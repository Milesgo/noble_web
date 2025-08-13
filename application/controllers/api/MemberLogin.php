<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class MemberLogin extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Member_m', 'Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);
		if (!isset($params['lang']))
			$params['lang'] = "kr";

		if($params['mem_email']=="") { 
			$result = array('result' => 'FAILURE', 'message' => $this->Common_m->getLocalMessage("메일 주소가 없습니다", $params['lang']));
		} else { 

			$searchParam = array();
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

			switch ($params['mem_jointype']) {
				case 'EMAIL':
					$result = $this->Member_m->checkJointype($searchParam);
					
					if($result['result']=="SUCCESS")
						$result = $this->Member_m->loginMember($searchParam);
					break;
				case 'KAKAO':
				case 'GOOGLE':
				case 'NAVER':
					$result = $this->Member_m->loginMember($searchParam);
					if($result['result']=="FAILURE") {
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

						} else {
							$sql = "
								SELECT mem_jointype FROM MEMBER 
								WHERE mem_email = ". $this->db->escape($searchParam['mem_email']);								

								switch ($this->db->query($sql)->row()->mem_jointype) {
									case 'EMAIL':
										$result = array(
												'result' => 'FAILURE', 
												'message' => $this->Common_m->getLocalMessage("이메일로 가입한 메일 주소입니다. 이메일로 로그인해주세요.", $searchParam['lang'])
										);
										break;
									
									case 'KAKAO':
										$result = array(
												'result' => 'FAILURE', 
												'message' => $this->Common_m->getLocalMessage("카카오 ID로 가입한 메일 주소입니다. 카카오 ID로 로그인해주세요.", $searchParam['lang'])
										);
										break;
									case 'NAVER':
										$result = array(
												'result' => 'FAILURE', 
												'message' => $this->Common_m->getLocalMessage("네이버 ID로 가입한 메일 주소입니다. 네이버 ID로 로그인해주세요.", $searchParam['lang'])
										);
										break;
									case 'GOOGLE':
										$result = array(
												'result' => 'FAILURE', 
												'message' => $this->Common_m->getLocalMessage("구글 ID로 가입한 메일 주소입니다. 구글 ID로 로그인해주세요.", $searchParam['lang'])
										);
								}	
						}
					}
					break;
			}			
		}

		$this->response($result, 200);
	}
}
