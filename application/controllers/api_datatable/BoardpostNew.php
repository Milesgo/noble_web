<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class BoardpostNew extends REST_Controller {
    function __construct() {
        parent::__construct() ;
        $this->load->model(array('board_m', 'banner_m', 'member_m','song_m', 'purchase_m'));
    }

    public function index_get() {
        $this->loadData($this->uri->segment(3), $this->input->get("year"), $this->input->get("month"));
    }

    // public function song() {  $this->loadData("song"); }
    // public function banner() {  $this->loadData("banner"); }
    // public function member() {  
    //     $this->loadData("member"); 
    // }
    // public function notice() {  $this->loadData("notice"); }
    // public function purchase() {  $this->loadData("purchase"); }
    // public function monthly() {  $this->loadData("monthly", $this->input->get("year"), $this->input->get("month")); }

    private function loadData($board_id, $year = 0, $month = 0) { 
        // $datatable = array_merge(['pagination' => [], 'sort' => [], 'query' => []], $_REQUEST);
        // $keyword = isset($datatable['query']['generalSearch']) ? $datatable['query']['generalSearch'] : "";
        // $status = isset($datatable['query']['Status']) ? $datatable['query']['Status'] : "";
        // $category = isset($datatable['query']['Category']) ? $datatable['query']['Category'] : "";

        // $sort  = ! empty($datatable['sort']['sort']) ? $datatable['sort']['sort'] : 'asc';

        // switch ($board_id) {
        //     case 'song':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'song_no';
        //         break;

        //     case 'banner':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'banner_no';
        //         break;

        //     case 'member':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'mem_no';
        //         break;
            
        //     case 'notice':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'post_no';
        //         break;

        //     case 'purchase':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'pur_no';
        //         break;

        //     case 'monthly':
        //         $field = ! empty($datatable['sort']['field']) ? $datatable['sort']['field'] : 'log_no';
        //         break;
        // }
        

        switch ($board_id) {

            case 'song':

                // if($field == "download_total")
                //     $field = "(song_download_ar_member + song_download_ar_guest)";

                // $searchParam = array(
                //     'pageNumber' => $datatable['pagination']['page'],
                //     'searchKeyfield' => 'song_title',
                //     'keyword' => $keyword,
                //     'rowNumber' => $datatable['pagination']['perpage'],
                //     'orderKey' => $field.' '.$sort
                // );


                $alldata = $this->song_m->selectSongListForBoard() ;   

                $columnsDefault = [
                    'song_no' => true,
                    'song_no2' => true,
                    'song_title' => true,
                    'song_url_ar' => true,
                    'song_url_mr' => true,
                    'song_mp3_ar' => true,
                    'song_mp3_mr' => true,
                    'song_pdfprice' => true,
                    'song_inst_text' => true,
                    'song_genre_text' => true,
                    'song_duet_text' => true,
                    'song_key_text' => true,
                    'song_price' => true,
                    'download_total' => true, 
                    'song_download_ar_member' => true,
                    'song_download_mr_member' => true,
                    'song_download_mp3ar_member' => true,
                    'song_download_mp3mr_member' => true,
                    'song_download_ar_guest' => true,
                    'song_download_mr_guest' => true,
                    'song_download_mp3ar_guest' => true,
                    'song_download_mp3mr_guest' => true,
                    'song_keyword' => true
                ];                
                break;

            case 'banner':
                // $searchParam = array(
                //     'pageNumber' => $datatable['pagination']['page'],
                //     'searchKeyfield' => 'banner_name',
                //     'keyword' => $keyword,
                //     'banner_display' => $status,
                //     'rowNumber' => $datatable['pagination']['perpage'],
                //     'orderKey' => $field.' '.$sort
                // );

                // $postList = $this->banner_m->selectBannerList($searchParam) ;   

                $alldata = $this->banner_m->selectBannerListForBoard();
                $columnsDefault = [
                    'banner_no'     => true,
                    'banner_name'  => true,
                    'banner_target'  => true,
                    'banner_registerdate'  => true,
                    'banner_display'  => true
                ];

                break;

            case 'member':
                $alldata = $this->member_m->selectMemberListForBoard() ;

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
                break;

            case 'purchase':
                // $searchParam = array(
                //     'includeCancel' => 'Y',
                //     'pageNumber' => $datatable['pagination']['page'],
                //     'searchKeyfield' => 'all',
                //     'searchKeyword' => $keyword,
                //     'status' => $status,
                //     'rowNumber' => $datatable['pagination']['perpage']
                // );

                $alldata = $this->purchase_m->selectPurchaseListForBoard() ;   
                $columnsDefault = [
                    'pur_no' => true,
                    'pur_no2' => true,
                    'pur_status' => true,
                    'mem_name' => true,
                    'mem_email' => true,
                    'pur_os' => true,
                    'order_id' => true,
                    'product_id' => true,
                    'pur_price' => true,
                    'acc_no' => true,
                    'pur_regdate' => true,
                    'pur_canceldate' => true,
                    'num_pay' => true,
                    'acc_fromtime' => true,
                    'acc_totime' => true
                ];
                break;
            
            case 'monthly':

                $searchParam = array(
                    'year' => $year,
                    'month' => $month
                );
                
                $alldata = $this->song_m->selectMonthlySongListForBoard($searchParam) ;    
               
                $columnsDefault = [
                    'song_title' => true,
                    'song_price' => true,
                    'cnt_total' => true,
                    'cnt_mp4mr' => true,
                    'cnt_mp4ar' => true,
                    'cnt_mp3mr' => true,
                    'cnt_mp3ar' => true,
                    'cnt_pdf' => true
                ];

                break;

            case 'notice':
                $alldata = $this->board_m->selectPostListForBoard(array('board_id' => $board_id)) ;      
                $columnsDefault = [
                    'post_no'     => true,
                    'post_title'  => true,
                    'post_registerdate'  => true,
                    'post_status'  => true,
                    'mem_name'  => true
                ];

                break;
        }

        $result = $this->common->initDatatable(array('alldata' => $alldata, 'columnsDefault' => $columnsDefault, 'request' => $this->input->get()));

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

        echo json_encode($result);
    }
}