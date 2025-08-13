<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class LogBuyPdf extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Song_m', 'Purchase_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$song = $this->Song_m->selectSongDetail(array(
			'song_no' => $params['song_no']
		));

		$logParam = array();
		$logParam['song_no'] = $params['song_no'];
		$logParam['mem_no'] = $params['mem_no'];
		$logParam['log_moneytype'] = $params['money_type'];
		$logParam['song_pdfprice'] = $song['song_pdfprice'];
		$logParam['lang'] = "kr";

		if (isset($params['lang']))
			$logParam['lang'] = $params['lang'];

		$result = $this->Song_m->logBuyPdf($logParam);

		if($result['result'] == "SUCCESS") { 
			$result['song'] = $song;
			$result['log_regdate'] = date("Y-m-d H:i:s",time());
		}

		$this->response($result, 200);
	}
}
