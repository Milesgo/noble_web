<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class AddAlbumSong extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('AlbumSong_m', 'Album_m', 'Common_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);
		if (!isset($params['lang']))
			$params['lang'] = "kr";


		$albumList = $this->Album_m->selectAlbumList(array(
															'mem_no' => $params['mem_no'], 
															'alb_no' => $params['alb_no'], 
															'rowNumber' => 999999
													));

		if($albumList['pageInfo']['totalCount']==0) { 

			$result = array('result' => 'FAILURE', 'message' => $this->Common_m->getLocalMessage("앨범이 존재하지 않습니다", $params['lang']));

		} else { 

			$checkExist = $this->AlbumSong_m->selectAlbumSongList(array(
																'mem_no' => $params['mem_no'], 
																'alb_no' => $params['alb_no'], 
																'song_no' => $params['song_no']
														));

			if($checkExist['pageInfo']['totalCount']>0)
				$result = array('result' => 'FAILURE', 'message' => $this->Common_m->getLocalMessage("이미 등록되어 있습니다", $params['lang']));
			else {

				$albumSongList = $this->AlbumSong_m->selectAlbumSongList(array(
																	'mem_no' => $params['mem_no'], 
																	'alb_no' => $params['alb_no'], 
																	'rowNumber' => 999999
															));

				$result = $this->AlbumSong_m->insertNewAlbumSong(array(
						'song_no' => $params['song_no'], 
						'mem_no' => $params['mem_no'], 
						'alb_no' => $params['alb_no'], 
						'alb_song_order' => $albumSongList['pageInfo']['totalCount'] + 1,
						'lang' => $params['lang']
				));
			}

		}

		$this->response($result, 200);
	}
}
