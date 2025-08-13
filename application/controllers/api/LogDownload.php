<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class LogDownload extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Song_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (isset($params['song_type']) AND !empty($params['song_type'])) {
			$logParam = array();
			$logParam['song_no'] = $params['song_no'];
			$logParam['song_type'] = $params['song_type'];
			$logParam['mem_no'] = $params['mem_no'];

			$result = $this->Song_m->logDownloadVer2($logParam);

			$this->response($result, 200);
		}
	}
}
