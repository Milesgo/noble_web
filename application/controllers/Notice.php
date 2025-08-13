<?php
class Notice extends CI_Controller {
	public function __construct() {
		parent::__construct();
 		$this->load->model(array('board_m', 'member_m'));
		$this->load->helper('cookie') ;
	}

	public function _remap($method) {

		$post_no = $this->uri->segment(2);	
		$data['mem_no'] = (get_cookie('mem_no') == null) ? 0 : get_cookie('mem_no');
		
		// 상세
		$data['mode'] = "NORMAL";
		$data['post'] = $this->board_m->selectPostDetail(array('post_no' => $post_no));


		preg_match_all("/<a[^>]*href=[\"']?([^>\"']+)[\"']?[^>]*>/i",$data['post']['post_content'],$result);

		for($i=0; $i<count($result[0]);$i++) { 
			if($this->common->getAttribute($result[0][$i], "target") == "_blank")  {

				$replaceString = str_replace("http://", "target-blank://", $result[0][$i]);
				$replaceString = str_replace("https://", "target-blank://", $replaceString);

				$data['post']['post_content'] = str_replace($result[0][$i], $replaceString, $data['post']['post_content']);
			}
		}


		// // 조회수 추가
		// if($post_no > 0) { 
		// 	$hit = array(
		// 			'post_no' => $post_no,
		// 			'mem_no' => $data['mem_no']
		// 	);

		// 	$this->board_m->insertBoardHitLog($hit);
		// }

		$this->load->view('notice_detail_v', $data);
	

	}

}