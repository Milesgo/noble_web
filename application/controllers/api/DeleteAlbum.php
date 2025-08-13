<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class DeleteAlbum extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";

		$deleteAlbumSong = array(
			'table_name' => 'ALBUM_SONG',
			'where_case' => array('alb_no' => $params['alb_no'])
		);
		$this->common_m->deleteQuery($deleteAlbumSong);

		$deleteAlbum = array(
			'table_name' => 'ALBUM',
			'where_case' => array('alb_no' => $params['alb_no'])
		);
		$this->common_m->deleteQuery($deleteAlbum);

		$albumList = $this->Album_m->selectAlbumList(array('mem_no' => $params['mem_no'], 
														'rowNumber' => 999999,
														'orderKey' => 'alb_order ASC'));

		$finalResult = array('result' => 'SUCCESS');

		for($i=0; $i<$albumList['pageInfo']['totalCount']; $i++) { 
			$album = $albumList['resultList'][$i];

			$updateAlbumOrder = array(
				'table_name' => 'ALBUM',
				'update_columns' => array('alb_order' => ($i+1)),
				'where_case' => array('alb_no' => $album['alb_no'])
			);

			$result = $this->common_m->updateQuery($updateAlbumOrder);
			if($result['result'] == "FAILURE") {
				$finalResult = array(
					'result' => 'FAILURE', 
					'message' =>  $this->Common_m->getLocalMessage("앨범 삭제시 오류가 발생하였습니다", $params['lang'])
				);
			}
		}

		$this->response($finalResult, 200);
	}
}
