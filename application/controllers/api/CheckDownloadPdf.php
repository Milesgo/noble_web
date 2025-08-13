<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';
require_once APPPATH . 'libraries/Format.php';

class CheckDownloadPdf extends REST_Controller
{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model(array('Purchase_m', 'Song_m'));
    }

    public function index_post()
    {
        $params = json_decode(file_get_contents('php://input'), true);

        $searchParam = array();
    
        if (isset($params['song_no'])) {
            $searchParam['song_no'] = $params['song_no'];
        }

        if (isset($params['mem_no'])) {
            $searchParam['mem_no'] = $params['mem_no'];
        }

        $result = $this->Purchase_m->checkLogBuyPdfList($searchParam);

        if($result['result']) { 
            $song = $this->Song_m->selectSongDetail(array('song_no' => $params['song_no']));

            if(isset($params['file_pdf']) && $params['file_pdf'] != "")
                $result['shouldDownload'] = (strpos($song['song_pdf'], $params['file_pdf']) !== false) ? false : true;
            else
                $result['shouldDownload'] = true;
        }
        
        $this->response($result, 200);
    }
}
