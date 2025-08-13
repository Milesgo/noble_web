<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class DeleteAlbumSong extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('AlbumSong_m', 'Common_m' ));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		if (!isset($params['lang']))
			$params['lang'] = "kr";


		$deleteAlbumSong = array(
			'table_name' => 'ALBUM_SONG',
			'where_case' => array('alb_song_no' => $params['alb_song_no'])
		);
		$this->common_m->deleteQuery($deleteAlbumSong);
 
 		// 남은 곡 순서 조정
		$albumSongList = $this->AlbumSong_m->selectAlbumSongList(array(
														'mem_no' => $params['mem_no'], 
														'alb_no' => $params['alb_no'],
														'rowNumber' => 999999));

		$finalResult = array('result' => 'SUCCESS');

		for($i=0; $i<$albumSongList['pageInfo']['totalCount']; $i++) { 
			$albumSong = $albumSongList['resultList'][$i];

			$updateAlbumSongOrder = array(
				'table_name' => 'ALBUM_SONG',
				'update_columns' => array('alb_song_order' => ($i+1)),
				'where_case' => array('alb_song_no' => $albumSong['alb_song_no'])
			);

			$result = $this->common_m->updateQuery($updateAlbumSongOrder);
			if($result['result'] == "FAILURE") {
				$finalResult = array(
					'result' => 'FAILURE', 
					'message' => $this->Common_m->getLocalMessage("앨범곡 삭제시 오류가 발생하였습니다", $params['lang']));
			}
		}


		$this->response($finalResult, 200);
	}
}
