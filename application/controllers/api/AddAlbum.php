<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class AddAlbum extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Album_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);
		if (!isset($params['lang']))
			$params['lang'] = "kr";


		$albumList = $this->Album_m->selectAlbumList(array('mem_no' => $params['mem_no'], 
															'rowNumber' => 999999
													));

		if($params['alb_title']=="") {
			$todaydate = date("Y-m-d",time());

			$temp = $this->Album_m->selectAlbumList(array(
					'mem_no' => $params['mem_no'],
					'rowNumber' => 999999, 
					'searchKeyfield' => 'autoname',
					'keyword' => $todaydate
			));

			if($temp['pageInfo']['totalCount'] == 0) { 
				$alb_title = $todaydate;
				$result['result'] = "SUCCESS";				
			} else {
				$alb_idx=1;
				while(1) { 
					$alb_title = $todaydate . " (".sprintf("%03d", $alb_idx).")";
					$result = $this->Album_m->checkAlbumName(array('mem_no' => $params['mem_no'], 'alb_title' => $alb_title, 'lang' => $params['lang']));
					if($result['result'] == "SUCCESS") {
						break;
					} else if($result['result'] == "FAILURE") {
						$alb_idx++;
					}
				}
			}
		} else { 
			$alb_title = $params['alb_title'];
			$result = $this->Album_m->checkAlbumName(array('mem_no' => $params['mem_no'], 'alb_title' => $alb_title, 'lang' => $params['lang']));
		}

		if($result['result'] == "SUCCESS") {

			$result = $this->Album_m->insertNewAlbum(array(
					'mem_no' => $params['mem_no'], 
					'alb_title' => $alb_title, 
					'alb_order' => $albumList['pageInfo']['totalCount'] + 1,
					'lang' => $params['lang']
			));

		}

		$this->response($result, 200);
	}
}
