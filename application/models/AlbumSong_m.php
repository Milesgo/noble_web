<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlbumSong_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('common_m'));
	}        


	public function selectAlbumSongList($searchParam) {
		
		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 10 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " abs.alb_song_order " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;
 
		$sql = "
			SELECT
				abs.alb_song_no
				, abs.alb_no
				, abs.alb_song_order
				, abs.alb_song_regdate
				, s.song_no
				, s.song_title
				, s.song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, s.song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, s.song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, s.song_key_code
				, s.song_key_multi
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, s.song_price
				, s.song_pdfprice
				, s.song_url_ar
				, s.song_url_mr		
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdf
			FROM
				ALBUM_SONG abs
			INNER JOIN 
				SONG s
				ON abs.song_no = s.song_no
			LEFT JOIN 
				CODE_ACCOMPANY ca_inst 
				ON ca_inst.code_name = s.song_inst_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_genre 
				ON ca_genre.code_name = s.song_genre_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_duet 
				ON ca_duet.code_name = s.song_duet_code
			LEFT JOIN 
				CODE_ACCOMPANY ca_key 
				ON ca_key.code_name = s.song_key_code
		";		
 
		$where_sql = array() ;

		if (isset($searchParam['alb_no']) AND !empty($searchParam['alb_no'])) {
			$where_sql[] = "abs.alb_no = ". $this->db->escape($searchParam['alb_no']) ;
		}

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no'])) {
			$where_sql[] = "abs.mem_no = ". $this->db->escape($searchParam['mem_no']) ;
		}

		if (isset($searchParam['alb_song_no']) AND !empty($searchParam['alb_song_no'])) {
			$where_sql[] = "abs.alb_song_no = ". $this->db->escape($searchParam['alb_song_no']) ;
		}

		if (isset($searchParam['song_no']) AND !empty($searchParam['song_no'])) {
			$where_sql[] = "s.song_no = ". $this->db->escape($searchParam['song_no']) ;
		}

		$where_sql[] = "s.song_islive = 'Y' ";


		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= "
			ORDER BY
				". $searchParam['orderKey'] ."
		" ;

		$count_result = $this->db->query($sql)->num_rows() ;		

		if ($searchParam['rowNumber'] > 0) {
			$sql .= "
			LIMIT ". $limit_start .", ". $limit_end ."
			" ;
		}

		return array(
			'pageInfo' => array(
				'totalCount' => intval($count_result) ,
				'pageNumber' => $searchParam['pageNumber'] ,
				'rowNumber' => $searchParam['rowNumber'] ,
				'totalPage' => (($searchParam['rowNumber'] > 0 AND $count_result > 0) ? (intval($count_result / $searchParam['rowNumber']) + (($count_result % $searchParam['rowNumber']) == 0 ? 0 : 1)) : 1)
			) ,
			'resultList' => $this->db->query($sql)->result_array()
		) ;
	}


	// 신규 앨범 등록
	public function insertNewAlbumSong($albumsong) {
		$sql = "
			INSERT INTO
				ALBUM_SONG
				(
					song_no
					, mem_no
					, alb_no
					, alb_song_order
					, alb_song_regdate
				)
				VALUES
				(
					". $this->db->escape($albumsong['song_no']) ."
					, ". $this->db->escape($albumsong['mem_no']) ."
					, ". $this->db->escape($albumsong['alb_no']) ."
					, ". $this->db->escape($albumsong['alb_song_order']) ."
					, NOW()
				)
		" ;
		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			$sqlSong = "
				SELECT
					s.song_no
					, s.song_title
					, s.song_inst_code
					, ca_inst.code_text as song_inst_text
					, ca_inst.code_order as song_inst_idx
					, s.song_genre_code
					, ca_genre.code_text as song_genre_text
					, ca_genre.code_order as song_genre_idx 
					, s.song_duet_code
					, ca_duet.code_text as song_duet_text 
					, ca_duet.code_order as song_duet_idx 
					, s.song_key_code
					, s.song_key_multi
					, ca_key.code_text as song_key_text
					, ca_key.code_order as song_key_idx
					, s.song_price
					, s.song_url_ar
					, s.song_url_mr		
					, s.song_mp3_ar
					, s.song_mp3_mr		
					, s.song_pdf
				FROM
					SONG s
				LEFT JOIN 
					CODE_ACCOMPANY ca_inst 
					ON ca_inst.code_name = s.song_inst_code
				LEFT JOIN 
					CODE_ACCOMPANY ca_genre 
					ON ca_genre.code_name = s.song_genre_code
				LEFT JOIN 
					CODE_ACCOMPANY ca_duet 
					ON ca_duet.code_name = s.song_duet_code
				LEFT JOIN 
					CODE_ACCOMPANY ca_key 
					ON ca_key.code_name = s.song_key_code
				WHERE 
					s.song_no = ". $this->db->escape($albumsong['song_no']);


			$song = $this->db->query($sqlSong)->row_array();

			return array(
				'result' => 'SUCCESS',
				'alb_song_no' => $newSeq,
				'song_no' => $albumsong['song_no'],
				'alb_no' => $albumsong['alb_no'],
				'alb_song_order' => $albumsong['alb_song_order'],
				'song_title' => $song['song_title'],
				'song_inst_code' => $song['song_inst_code'],
				'song_genre_code' => $song['song_genre_code'],
				'song_duet_code' => $song['song_duet_code'],
				'song_key_code' => $song['song_key_code'],
				'song_key_multi' => $song['song_key_multi'],
				'song_inst_text' => $song['song_inst_text'],
				'song_genre_text' => $song['song_genre_text'],
				'song_duet_text' => $song['song_duet_text'],
				'song_key_text' => $song['song_key_text'],
				'song_inst_idx' => $song['song_inst_idx'],
				'song_genre_idx' => $song['song_genre_idx'],
				'song_duet_idx' => $song['song_duet_idx'],
				'song_key_idx' => $song['song_key_idx'],
				'song_price' => $song['song_price'],
				'song_url_ar' => $song['song_url_ar'],
				'song_url_mr' => $song['song_url_mr'],
				'song_filename_ar' => basename($song['song_url_ar']),
				'song_filename_mr' => basename($song['song_url_mr']),
				'song_filename_mp3_ar' => basename($song['song_mp3_ar']),
				'song_filename_mp3_mr' => basename($song['song_mp3_mr']),
				'song_filename_pdf' => basename($song['song_pdf'])
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => $this->common_m->getLocalMessage("앨범에 곡 등록시 오류가 발생하였습니다", $albumsong['lang'])
			) ;
		}
	}
 
}