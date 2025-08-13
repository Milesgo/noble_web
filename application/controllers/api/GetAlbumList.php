<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';
require_once APPPATH . 'libraries/Format.php';

class GetAlbumList extends REST_Controller
{
    public function __construct()
    {
        parent::__construct() ;
        $this->load->model(array('Album_m'));
    }

    public function index_post()
    {
        $params = json_decode(file_get_contents('php://input'), true);

        $searchParam = array();
    
        if (isset($params['pageNumber'])) {
            $searchParam['pageNumber'] = $params['pageNumber'];
        }
        
        if (isset($params['rowNumber'])) {
            $searchParam['rowNumber'] = $params['rowNumber'];
        }

        if (isset($params['mem_no'])) {
            $searchParam['mem_no'] = $params['mem_no'];
        }

        $result = $this->Album_m->selectAlbumList($searchParam);
        $result['result'] = ($result['pageInfo']['totalCount'] > 0) ? "SUCCESS" : "FAILURE";

        $this->response($result, 200);
    }
}
