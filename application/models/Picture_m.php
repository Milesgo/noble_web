<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Picture_m extends CI_Model {

	function __construct() {
		parent::__construct();
		$this->load->model(array());
	}

	public function insertNewPicture($picture) {
		$sql = "
			INSERT INTO
				CONTENTS_PICTURE
				(
					pic_div
					, pic_owner
					, pic_num
					, pic_name
					, pic_ext
					, pic_width
					, pic_height
					, pic_size
					, store_path
					, store_name
					, store_mem
					, store_date
				)
				VALUES
				(
					". $this->db->escape($picture['pic_div']) ."
					, ". $this->db->escape($picture['pic_owner']) ."
					, ". (empty($picture['pic_num']) ? "(SELECT IFNULL(MAX(pic_num), 0) + 1 FROM CONTENTS_PICTURE cp WHERE pic_div = ". $this->db->escape($picture['pic_div']) ." AND pic_owner = ". $this->db->escape($picture['pic_owner']) .")" : $this->db->escape($picture['pic_num'])) ."
					, ". $this->db->escape($picture['pic_name']) ."
					, ". $this->db->escape($picture['pic_ext']) ."
					, ". $this->db->escape($picture['pic_width']) ."
					, ". $this->db->escape($picture['pic_height']) ."
					, ". $this->db->escape($picture['pic_size']) ."
					, ". $this->db->escape($picture['store_path']) ."
					, ". $this->db->escape($picture['store_name']) ."
					, ". $this->db->escape($picture['store_mem']) ."
					, NOW()
				)
		" ;
		$this->db->query($sql) ;
		if ($this->db->affected_rows() > 0) {
			$result = $this->db->query("SELECT pic_seq, pic_num, store_name FROM CONTENTS_PICTURE WHERE pic_seq = ". $this->db->insert_id())->row_array() ;
			return array(
				'result' => 'SUCCESS' ,
				'pic_seq' => $result['pic_seq'] ,
				'pic_name' => $picture['pic_name'] ,
				'pic_ext' => $picture['pic_ext'] ,
				'pic_num' => $result['pic_num'] ,
				'pic_size' => $picture['pic_size'],
				'pic_store_name' => $result['store_name']
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "이미지 등록 실패"  // 외국어 지원 필요 없음
			) ;
		}
	}
 
	public function removePicture($picture) {

		$sql = "
				SELECT
					pic_seq
					, store_path
					, store_name
					, pic_ext
					, pic_owner
				FROM
					CONTENTS_PICTURE
		" ;

		$where_sql = array() ;		
		if (isset($picture['pic_seq']) AND !empty($picture['pic_seq'])) {
			$where_sql[] = 'pic_seq = '. $this->db->escape($picture['pic_seq']) ;
		}
		if (isset($picture['pic_div']) AND !empty($picture['pic_div'])) {
			$where_sql[] = 'pic_div = '. $this->db->escape($picture['pic_div']) ;
		}
		if (isset($picture['pic_owner']) AND !empty($picture['pic_owner'])) {
			$where_sql[] = 'pic_owner = '. $this->db->escape($picture['pic_owner']) ;
		}
		if (isset($picture['pic_num']) AND !empty($picture['pic_num'])) {
			$where_sql[] = 'pic_num = '. $this->db->escape($picture['pic_num']) ;
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		} else {
			throw new Exception('조건절이 입력되지 않았습니다.') ;
		}

		$removeCount = 0 ;

		$query = $this->db->query($sql) ;
		$result = $query->result_array() ;
		foreach($result as $row) {		
			$this->common->s3->deleteObject([
			    'Bucket' => 'noblemrplayer',
			    'Key'    => $row['store_path'] .'/'. $row['store_name']
			]);
			
			$this->db->query("DELETE FROM CONTENTS_PICTURE WHERE pic_seq = ". $row['pic_seq']) ;
			$removeCount++ ;
		}

		return array(
			'result' => 'SUCCESS' ,
			'removeCount' => $removeCount
		) ;

	}
	
}