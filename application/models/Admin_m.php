<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('common_m')) ;		
	}
	
	public function loginAdmin($admin) {

		$sql = "
			SELECT
				admin_no
			FROM
				ADMIN
			WHERE
				admin_id = ". $this->db->escape($admin['admin_id']) ."
				AND admin_password = ". $this->db->escape(md5($admin['admin_password'])) ."
		" ;

		$query = $this->db->query($sql) ;		
		if ($query->num_rows() == 1) {

			$result = $query->row_array() ;	
			
			// 자동로그인 설정 부분				
			$this->load->helper('cookie') ;
			$this->load->library('encryption');
			$this->encryption->initialize(
				array(
					'cipher' => 'aes-256',
					'mode' => 'ctr',
					'key' => ENCRYPT_KEY
				)
			);


			$updateAdminLogin = array(
				'table_name' => 'ADMIN',
				'update_columns' => array(
													'admin_login_ip' => $_SERVER['REMOTE_ADDR'],
													'admin_login_lastdate' => date("Y-m-d H:i:s",time())),
				'where_case' => array('admin_no' => $result['admin_no'])
			);

			$this->common_m->updateQuery($updateAdminLogin);			

			set_cookie(KEEP_ADMIN_SEQ, $this->encryption->encrypt($result['admin_no']), (60 * 60 * 24 * 7), $_SERVER['SERVER_NAME']) ;	
			$this->session->set_userdata(array(MAGO_ADMIN_SEQ => $result['admin_no'])) ;

			return array(
				'result' => 'SUCCESS'
			) ;
			
		} else {
			return array(
				'result' => 'FAILURE',
				'message' => '아이디 또는 비밀번호가 일치하지 않습니다.'  // 외국어 지원 필요 없음
			) ;
		}
	}
 
	public function isAdmin() {
		$this->load->helper('cookie') ;
		$this->load->library('encryption');
		$this->encryption->initialize(
			array(
				'cipher' => 'aes-256',
				'mode' => 'ctr',
				'key' => ENCRYPT_KEY
			)
		) ;

		return ($this->encryption->decrypt(get_cookie(KEEP_ADMIN_SEQ))!=0) ? true : false;
	}


	public function getAdminId() {
		return ($this->isAdmin() == true) ? $this->encryption->decrypt(get_cookie(KEEP_ADMIN_SEQ)) : 0;
	}	


	public function selectAdminDetailInfo($searchParam) {
		$sql = "
			SELECT
				a.admin_no
				, a.admin_id
				, a.admin_name
				, (SELECT store_name FROM CONTENTS_PICTURE WHERE pic_owner = a.admin_no AND pic_div ='PRFIL' ORDER BY pic_seq DESC LIMIT 1) store_name
			FROM
				ADMIN a
		" ;

		$where_sql = array() ;

		if (isset($searchParam['admin_no']) AND !empty($searchParam['admin_no'])) {
			$where_sql[] = " admin_no = ". $this->db->escape($searchParam['admin_no']) ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		return $this->db->query($sql)->row_array() ;
	}

}