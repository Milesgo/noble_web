<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php'; 
require_once APPPATH . 'libraries/Format.php'; 

class PurchaseProduct extends REST_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Purchase_m'));
	}

	public function index_post() {

		$params = json_decode(file_get_contents('php://input'), TRUE);

		$purchaseParam = array();
		$purchaseParam['os'] = $params['os'];
		$purchaseParam['product_id'] = $params['product_id'];
		$purchaseParam['mem_no'] = $params['mem_no'];
		$purchaseParam['lang'] = "kr";

		if (isset($params['lang']))
			$purchaseParam['lang'] = $params['lang'];
		
		switch ($purchaseParam['product_id']) {
			case 'noble_subscription':
				$purchaseParam['price'] = 10000;
				$purchaseParam['product_name'] = "월정기결제 상품";
				break;
			case 'noble_6':
				$purchaseParam['price'] = 50000;
				$purchaseParam['product_name'] = "06개월 상품";
				break;
			case 'noble_12':
				$purchaseParam['price'] = 80000;
				$purchaseParam['product_name'] = "12개월 상품";
				break;
			case 'noblecash_10000':
				$purchaseParam['price'] = 10000;
				$purchaseParam['product_name'] = "1만원 캐시";
				break;
			case 'noblecash_30000':
				$purchaseParam['price'] = 30000;
				$purchaseParam['product_name'] = "3만원 캐시";
				break;
			case 'noblecash_50000':
				$purchaseParam['price'] = 50000;
				$purchaseParam['product_name'] = "5만원 캐시";
				break;
		}

		switch ($purchaseParam['os']) {
			case 'android':				
				$purchaseParam['order_id'] = $params['order_id'];
				$purchaseParam['token'] = $params['token'];
				break;		
			case 'ios':
				$purchaseParam['transactionidentifier'] = $params['transactionidentifier'];
				break;
		}


		$result = $this->Purchase_m->purchaseProduct($purchaseParam);
		$this->response($result, 200);
	}
}
