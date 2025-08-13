<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Boardpost extends CI_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('board_m', 'banner_m', 'member_m','song_m', 'purchase_m'));
	}

	public function index() {
	}

	public function song() {  $this->loadData("song"); }
	public function banner() {  $this->loadData("banner"); }
	public function member() {  
		$this->loadData("member"); 
	}
	public function notice() {  $this->loadData("notice"); }
	public function purchase() {  $this->loadData("purchase"); }
	public function monthly() {  $this->loadData("monthly", $this->input->get("year"), $this->input->get("month")); }

	private function loadData($board_id, $year = 0, $month = 0) { 
		$datatable = array_merge(['pagination' => [], 'sort' => [], 'query' => []], $_REQUEST);
		$keyword = isset($datatable['query']['generalSearch']) ? $datatable['query']['generalSearch'] : "";
		$status = isset($datatable['query']['Status']) ? $datatable['query']['Status'] : "";
		$category = isset($datatable['query']['Category']) ? $datatable['query']['Category'] : "";

		$sort  = ! empty($datatable['sort']['sort']) ? $datatable['sort']['sort'] : 'asc';

		switch ($board_id) {
			case 'song':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'song_no';
				break;

			case 'banner':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'banner_no';
				break;

			case 'member':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'mem_no';
				break;
			
			case 'notice':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'post_no';
				break;

			case 'purchase':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'pur_no';
				break;

			case 'monthly':
				$field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'log_no';
				break;
		}
		

		switch ($board_id) {

			case 'song':

				if($field == "download_total")
					$field = "(song_download_ar_member + song_download_ar_guest)";

				$searchParam = array(
					'pageNumber' => $datatable['pagination']['page'],
					'searchKeyfield' => 'song_title',
					'keyword' => $keyword,
					'rowNumber' => $datatable['pagination']['perpage'],
					'orderKey' => $field.' '.$sort
				);

				$postList = $this->song_m->selectSongList($searchParam) ;	
				break;

			case 'banner':
				$searchParam = array(
					'pageNumber' => $datatable['pagination']['page'],
					'searchKeyfield' => 'banner_name',
					'keyword' => $keyword,
					'banner_display' => $status,
					'rowNumber' => $datatable['pagination']['perpage'],
					'orderKey' => $field.' '.$sort
				);

				$postList = $this->banner_m->selectBannerList($searchParam) ;	
				break;

			case 'member':
				// $searchParam = array(
				// 	'pageNumber' => $datatable['pagination']['page'],
				// 	'searchKeyfield' => 'all',
				// 	'searchKeyword' => $keyword,
				// 	'rowNumber' => $datatable['pagination']['perpage'],
				// 	'orderKey' => $field.' '.$sort
				// );	

				$searchParam = array();
				$postList = $this->member_m->selectMemberList($searchParam) ;

				// for($i=0; $i<count($postList['resultList']);$i++) { 
				// 	$postList['resultList'][$i]['idx'] = $postList['pageInfo']['totalCount'] - ($postList['pageInfo']['pageNumber']-1) * $postList['pageInfo']['rowNumber'] - $i;
				// }

		        $columnsDefault = [
		            'mem_no'     => true,
		            'mem_name'  => true,
		            'mem_email'  => true,
		            'mem_jointype'  => true,
		            'mem_cash'  => true,
		            'mem_totime'  => true,
		            'mem_joindate'  => true,
		            'mem_islive'  => true
		        ];
		        
		        $result = $this->common->initDatatable(array('alldata' => $postList, 'columnsDefault' => $columnsDefault, 'request' => $this->input->get()));

		        // header('Content-Type: application/json');
		        // header('Access-Control-Allow-Origin: *');
		        // header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		        // header('Access-Control-Max-Age: 3600');
		        // header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

		        // echo json_encode($result, JSON_PRETTY_PRINT);


				break;

			case 'purchase':
				$searchParam = array(
					'includeCancel' => 'Y',
					'pageNumber' => $datatable['pagination']['page'],
					'searchKeyfield' => 'all',
					'searchKeyword' => $keyword,
					'status' => $status,
					'rowNumber' => $datatable['pagination']['perpage']
				);

				$postList = $this->purchase_m->selectPurchaseList($searchParam) ;	
				break;
			
			case 'monthly':

				$searchParam = array(
					'year' => $year,
					'month' => $month,
					'pageNumber' => $datatable['pagination']['page'],
					'searchKeyfield' => 'song_title',
					'keyword' => $keyword,
					'rowNumber' => $datatable['pagination']['perpage'],
					'orderKey' => $field.' '.$sort
				);

				$postList = $this->song_m->selectMonthlySongList($searchParam) ;	
				break;

			default:
				$searchParam = array(
					'board_id' => $board_id,
					'pageNumber' => $datatable['pagination']['page'],
					'searchKeyfield' => 'post_title',
					'keyword' => $keyword,
					'status' => $status,
					'category' => $category,
					'rowNumber' => $datatable['pagination']['perpage'],
					'orderKey' => $field.' '.$sort
				);

				$postList = $this->board_m->selectPostList($searchParam) ;		
				break;
		}

		// $result['meta'] = array(
		// 	'page' => $postList['pageInfo']['pageNumber'],
		// 	'pages' => $postList['pageInfo']['totalPage'],
		// 	'perpage' => $datatable['pagination']['perpage'],
		// 	'total' => $postList['pageInfo']['totalCount']
		// );

		// //	if selected all records enabled, provide all the ids
		// if (isset($datatable['requestIds']) && filter_var($datatable['requestIds'], FILTER_VALIDATE_BOOLEAN)) {
		//     $result['meta']['rowIds'] = array_map(function ($row) {						
		// 				return $row['post_no'];
		//     }, $postList['resultList']);
		// }

		// $result['data'] = $postList['resultList'];

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

		echo json_encode($result);
	}
}
?>
