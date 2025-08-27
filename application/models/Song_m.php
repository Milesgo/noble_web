<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Song_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('Common_m', 'Member_m', 'Purchase_m')) ;		
	}        


	public function selectSongList($searchParam) {

		if (!isset($searchParam['lang']))
			$searchParam['lang'] = "kr";	

		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 20 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " song_no DESC " ;
		}

		// if (!isset($searchParam['callFrom']) OR empty($searchParam['callFrom'])) {
		// 	$searchParam['callFrom'] = "app" ;
		// }

		// 통합 다운로드 수 기준으로 정렬할 경우
		if($searchParam['orderKey'] == "download") 
			$searchParam['orderKey'] = "song_popular DESC";	

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT
				s.song_no
				, s.song_no as song_no2";

		switch ($searchParam['lang']) {
			case 'en':
				$sql .= ", if(s.song_title_eng='',s.song_title,s.song_title_eng) as song_title";
				break;
			case 'ja':
				$sql .= ", if(s.song_title_jpn='',s.song_title,s.song_title_jpn) as song_title";
				break;
			case 'zh':
				$sql .= ", if(s.song_title_chn='',s.song_title,s.song_title_chn) as song_title";
				break;			
			case 'kr':
			default:
				$sql .= ", s.song_title";
				break;			
		}

		$sql .= "
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
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
		";

		// 인기순 집계시 지난달 한정
		if($searchParam['orderKey']=="download DESC") {
			$sql .= " , count(log_no) as download";
		}

		// 어드민에서만 다운로드수 집계. 쿼리 속도가 느려짐
		// if($searchParam['callFrom']=="admin") {
		// 	$sql .= " 
		// 		, (SELECT count(log_no) FROM LOG_DOWNLOAD WHERE song_no = s.song_no AND mem_no = 0 AND log_regdate >= DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00') AND log_regdate <= DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')) as download_guest
		// 		, (SELECT count(log_no) FROM LOG_DOWNLOAD WHERE song_no = s.song_no AND mem_no > 0 AND log_regdate >= DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00') AND log_regdate <= DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')) as download_member		
		// 	";			
		// }
	
		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no']))
			$sql .= ", abs.alb_song_no
					 , abs.alb_no";

		$sql .="
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
		";

		// // 인기순 집계시 지난달 한정
		// if($searchParam['orderKey'] == "download DESC") { 
		// 	$sql .="
		// 		LEFT JOIN
		// 			LOG_DOWNLOAD ld
		// 			ON s.song_no = ld.song_no
		// 			AND log_regdate >= DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00')
		// 			AND log_regdate <= DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')
		// 	";		
		// }

		if (isset($searchParam['mem_no']) AND !empty($searchParam['mem_no']))
			$sql .= "LEFT JOIN ALBUM_SONG abs ON abs.song_no = s.song_no AND abs.mem_no = " . $this->db->escape($searchParam['mem_no']);

		$where_sql = array() ;

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'suggestion' :
					$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_eng,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_jpn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_chn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_initial,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
					break ;
				case 'song_title' :
					$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_eng,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_jpn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_title_chn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_1,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_2,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_3,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_4,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_5,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_6,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_7,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_8,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_9,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_10,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
					break ;
				case 'song_inst_code' :
				case 'song_genre_code' :
				case 'song_duet_code' :
				case 'song_key_code' :
				case 'song_price' :
					$where_sql[] = $searchParam['searchKeyfield'] . "  = ". $this->db->escape($searchParam['keyword']);
					break ;
			}
		}

		// // 인기순 집계시 지난달 한정
		// if($searchParam['orderKey'] == "download DESC") { 
		// 	$where_sql[] = " ld.log_regdate >= DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00')";
		// 	$where_sql[] = " ld.log_regdate <= DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')";
		// }

		if (isset($searchParam['codeInst']) AND !empty($searchParam['codeInst'])) {
			$where_sql[] = " song_inst_code = ". $this->db->escape($searchParam['codeInst']);
		}

		if (isset($searchParam['codeGenre']) AND !empty($searchParam['codeGenre'])) {
			$where_sql[] = " song_genre_code = ". $this->db->escape($searchParam['codeGenre']);
		}

		if (isset($searchParam['codeDuet']) AND !empty($searchParam['codeDuet'])) {
			$where_sql[] = " song_duet_code = ". $this->db->escape($searchParam['codeDuet']);
		}

		if (isset($searchParam['codeKey']) AND !empty($searchParam['codeKey'])) {
			$where_sql[] = " song_key_code = ". $this->db->escape($searchParam['codeKey']);
		}

		if (isset($searchParam['price']) AND !empty($searchParam['price'])) {
			$where_sql[] = " song_price = ". $this->db->escape($searchParam['price']);
		}

		if (isset($searchParam['isLive']) AND !empty($searchParam['isLive'])) {
			$where_sql[] = " song_islive = ". $this->db->escape($searchParam['isLive']);
		}

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= ' GROUP BY song_no ';

		switch ($searchParam['orderKey']) {
			case 'song_title':
				$sql .= ' ORDER BY (CASE WHEN ASCII(SUBSTRING(song_title,1)) BETWEEN 48 AND 57 THEN 3 WHEN ASCII(SUBSTRING(song_title,1)) < 128 THEN 2 ELSE 1 END), song_title';
				break;
			
			default:
				$sql .= ' ORDER BY '. $searchParam['orderKey'];
				break;
		}		

		$count_result = $this->db->query($sql)->num_rows() ;		

		if ($searchParam['rowNumber'] > 0) {
			$sql .= "
			LIMIT ". $limit_start .", ". $limit_end ."
			" ;
		}

		// log_message('info', 'song list sql: ' . $sql);

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



	public function selectSongListForBoard() {

		$sql = "
			SELECT
				s.song_no
				, s.song_no as song_no2
				, s.song_title
				, s.song_url_ar
				, s.song_url_mr
				, s.song_mp3_ar
				, s.song_mp3_mr
				, s.song_pdfprice
				, ca_inst.code_text as song_inst_text
				, ca_genre.code_text as song_genre_text
				, ca_duet.code_text as song_duet_text 
				, ca_key.code_text as song_key_text
				, s.song_price
				, (s.song_download_ar_member + s.song_download_mr_member + s.song_download_mp3ar_member + s.song_download_mp3mr_member + s.song_download_ar_guest + s.song_download_mr_guest + s.song_download_mp3ar_guest + s.song_download_mp3mr_guest) as download_total
				, s.song_download_ar_member
				, s.song_download_mr_member
				, s.song_download_mp3ar_member
				, s.song_download_mp3mr_member
				, s.song_download_ar_guest
				, s.song_download_mr_guest
				, s.song_download_mp3ar_guest
				, s.song_download_mp3mr_guest
				, concat(replace(s.song_title,' ','') , '/' ,song_keyword_initial, '/' ,song_keyword_1, '/' ,song_keyword_2, '/' ,song_keyword_3, '/' ,song_keyword_4, '/' ,song_keyword_5, '/' ,song_keyword_6, '/' ,song_keyword_7, '/' ,song_keyword_8, '/' ,song_keyword_9, '/' ,song_keyword_10) song_keyword

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
		";

		// $where_sql = array() ;

		// if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
		// 	switch ($searchParam['searchKeyfield']) {
		// 		case 'suggestion' :
		// 			$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_eng,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_jpn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_chn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_initial,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
		// 			break ;
		// 		case 'song_title' :
		// 			$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_eng,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_jpn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_title_chn,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_1,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_2,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_3,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_4,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_5,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_6,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_7,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_8,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_9,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_10,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
		// 			break ;
		// 		case 'song_inst_code' :
		// 		case 'song_genre_code' :
		// 		case 'song_duet_code' :
		// 		case 'song_key_code' :
		// 		case 'song_price' :
		// 			$where_sql[] = $searchParam['searchKeyfield'] . "  = ". $this->db->escape($searchParam['keyword']);
		// 			break ;
		// 	}
		// }

		// if (isset($searchParam['codeInst']) AND !empty($searchParam['codeInst'])) {
		// 	$where_sql[] = " song_inst_code = ". $this->db->escape($searchParam['codeInst']);
		// }

		// if (isset($searchParam['codeGenre']) AND !empty($searchParam['codeGenre'])) {
		// 	$where_sql[] = " song_genre_code = ". $this->db->escape($searchParam['codeGenre']);
		// }

		// if (isset($searchParam['codeDuet']) AND !empty($searchParam['codeDuet'])) {
		// 	$where_sql[] = " song_duet_code = ". $this->db->escape($searchParam['codeDuet']);
		// }

		// if (isset($searchParam['codeKey']) AND !empty($searchParam['codeKey'])) {
		// 	$where_sql[] = " song_key_code = ". $this->db->escape($searchParam['codeKey']);
		// }

		// if (isset($searchParam['price']) AND !empty($searchParam['price'])) {
		// 	$where_sql[] = " song_price = ". $this->db->escape($searchParam['price']);
		// }

		// if (isset($searchParam['isLive']) AND !empty($searchParam['isLive'])) {
		// 	$where_sql[] = " song_islive = ". $this->db->escape($searchParam['isLive']);
		// }

		// if (count($where_sql) > 0) {
		// 	$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		// }

		$sql .= ' GROUP BY song_no ';
		$sql .= ' ORDER BY song_no DESC';

		// log_message('info', 'song list for board: ' . $sql);

		return $this->db->query($sql)->result();
	}



	public function selectSongDetail($searchParam) {

		if (!isset($searchParam['lang']))
			$searchParam['lang'] = "kr";		
		
		$sql = "
			SELECT
				song_no";

		switch ($searchParam['lang']) {
			case 'en':
				$sql .= ", if(song_title_eng='',song_title,song_title_eng) as song_title";
				break;
			case 'ja':
				$sql .= ", if(song_title_jpn='',song_title,song_title_jpn) as song_title";
				break;
			case 'zh':
				$sql .= ", if(song_title_chn='',song_title,song_title_chn) as song_title";
				break;			
			case 'kr':
			default:
				$sql .= ", song_title";
				break;			
		}

		$sql .="
				, song_title_eng
				, song_title_jpn
				, song_title_chn
				, song_lyricist
				, song_composer
				, song_arranger
				, song_inst_code
				, ca_inst.code_text as song_inst_text
				, ca_inst.code_order as song_inst_idx
				, song_genre_code
				, ca_genre.code_text as song_genre_text
				, ca_genre.code_order as song_genre_idx 
				, song_duet_code
				, ca_duet.code_text as song_duet_text 
				, ca_duet.code_order as song_duet_idx 
				, song_key_code
				, ca_key.code_text as song_key_text
				, ca_key.code_order as song_key_idx
				, song_key_multi
				, song_copyright_code
				, song_price
				, song_pdfprice
				, song_url_ar
				, song_url_mr
				, song_mp3_ar
				, song_mp3_mr
				, song_pdf
				, song_keyword_1
				, song_keyword_2
				, song_keyword_3
				, song_keyword_4
				, song_keyword_5
				, song_keyword_6
				, song_keyword_7
				, song_keyword_8
				, song_keyword_9
				, song_keyword_10
				, song_ispublicdomain
				, song_download_pdf
				, song_islive
				, song_download_ar_member
				, song_download_ar_guest
				, song_download_mr_member
				, song_download_mr_guest
				, song_download_mp3ar_member
				, song_download_mp3ar_guest
				, song_download_mp3mr_member
				, song_download_mp3mr_guest
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
		";		

		$where_sql = array() ;
		$where_sql[] = " song_no = ". $this->db->escape($searchParam['song_no']);

		$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		return $this->db->query($sql)->row_array();

/*
		return array(
			'pageInfo' => array(
				'totalCount' => intval($count_result) ,
				'pageNumber' => $searchParam['pageNumber'] ,
				'rowNumber' => $searchParam['rowNumber'] ,
				'totalPage' => (($searchParam['rowNumber'] > 0 AND $count_result > 0) ? (intval($count_result / $searchParam['rowNumber']) + (($count_result % $searchParam['rowNumber']) == 0 ? 0 : 1)) : 1)
			) ,
			'resultList' => $this->db->query($sql)->result_array()
		) ;
*/		
	}


	public function selectCodeList($searchParam) {
		$sql = "
			SELECT				
				code_name
				, code_text
			FROM 
				CODE_ACCOMPANY
		";		

		$where_sql = array() ;
		$where_sql[] = " code_type = ". $this->db->escape($searchParam['code_type']);

		$sql .= ' WHERE '. implode(' AND ', $where_sql) ;

		$sql .= ' ORDER BY code_order ASC';

		return $this->db->query($sql)->result_array();
	}


	// 곡 등록
	public function insertNewSong($song) {

		$sql = "
			INSERT INTO
				SONG
				(
					song_title
					, song_title_eng
					, song_title_jpn
					, song_title_chn					
					, song_lyricist
					, song_composer
					, song_arranger
					, song_keyword_initial
					, song_inst_code
					, song_genre_code
					, song_duet_code
					, song_key_code
					, song_key_multi
					, song_price
					, song_copyright_code
					, song_ispublicdomain
					, song_islive
					, song_keyword_1
					, song_keyword_2
					, song_keyword_3
					, song_keyword_4
					, song_keyword_5
					, song_keyword_6
					, song_keyword_7
					, song_keyword_8
					, song_keyword_9
					, song_keyword_10
					, song_regdate
				)
				VALUES
				(
					". $this->db->escape($song['song_title']) ."
					, ". $this->db->escape($song['song_title_eng']) ."
					, ". $this->db->escape($song['song_title_jpn']) ."
					, ". $this->db->escape($song['song_title_chn']) ."					
					, ". $this->db->escape($song['song_lyricist']) ."
					, ". $this->db->escape($song['song_composer']) ."
					, ". $this->db->escape($song['song_arranger']) ."
					, ". $this->db->escape($song['song_keyword_initial']) ."
					, ". $this->db->escape($song['song_inst_code']) ."
					, ". $this->db->escape($song['song_genre_code']) ."
					, ". $this->db->escape($song['song_duet_code']) ."
					, ". $this->db->escape($song['song_key_code']) ."
					, ". $this->db->escape($song['song_key_multi']) ."
					, ". $this->db->escape($song['song_price']) ."
					, ". $this->db->escape($song['song_copyright_code']) ."
					, ". $this->db->escape($song['song_ispublicdomain']) ."
					, ". $this->db->escape($song['song_islive']) ."
					, ". $this->db->escape($song['song_keyword_1']) ."
					, ". $this->db->escape($song['song_keyword_2']) ."
					, ". $this->db->escape($song['song_keyword_3']) ."
					, ". $this->db->escape($song['song_keyword_4']) ."
					, ". $this->db->escape($song['song_keyword_5']) ."
					, ". $this->db->escape($song['song_keyword_6']) ."
					, ". $this->db->escape($song['song_keyword_7']) ."
					, ". $this->db->escape($song['song_keyword_8']) ."
					, ". $this->db->escape($song['song_keyword_9']) ."
					, ". $this->db->escape($song['song_keyword_10']) ."
					, NOW()
				)
		" ;

		if ($this->db->query($sql) > 0) {
			$newSeq = $this->db->insert_id() ;

			return array(
				'result' => 'SUCCESS',
				'post_no' => $newSeq
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "곡 등록시 오류가 발생하였습니다" // 외국어 지원 필요 없음
			) ;
		}
	}


	// 악보가격 변경
	public function changePdfPrice($param) {

		$updatePdfPrice = array(
			'table_name' => 'SONG',
			'update_columns' => array('song_pdfprice' => $param['song_pdfprice']),
			'where_case' => array('song_no' => $param['song_no'])
		);

		log_message("ERROR","updatePdfPrice : " . var_export($updatePdfPrice, 1));

		$result = $this->Common_m->updateQuery($updatePdfPrice);

		if($result['result'] == "SUCCESS") { 
			$resut = $this->logPdfPrice(array('song_no'=>$param['song_no'], 'song_pdfprice'=>$param['song_pdfprice']));
			return $result;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => "가격 변경시 오류가 발생하였습니다" // 외국어 지원 필요 없음
			) ;
		}
	}

	// 악보가격 로그
	public function logPdfPrice($log) {

		$sql = "
			INSERT INTO
				LOG_PDFPRICE
				(
					song_no
					, song_pdfprice
					, log_regdate
				)
				VALUES
				(
					". $this->db->escape($log['song_no']) ."
					, ". $this->db->escape($log['song_pdfprice']) ."
					, NOW()
				)
		";

		if ($this->db->query($sql) > 0) {
			return array(
				'result' => 'SUCCESS'
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => '로그 등록시 오류가 발생하였습니다' // 외국어 지원 필요 없음
			) ;
		}		
	}


	// 영상 다운로드 로그 (Ver2)
	public function logDownloadVer2($log) {

		$isValidMp4Ar = $isValidMp4Mr = $isValidMp3Ar = $isValidMp3Mr = false;

		$songData = $this->selectSongDetail(array('song_no' => $log['song_no']));

		switch (strtolower($log['song_type'])) {
			case 'album':
				$isValidMp4Ar = ($songData['song_url_ar']!="") ? true : false;
				$isValidMp4Mr = ($songData['song_url_mr']!="") ? true : false;
				$isValidMp3Ar = ($songData['song_mp3_ar']!="") ? true : false;
				$isValidMp3Mr = ($songData['song_mp3_mr']!="") ? true : false;			
				break;
			case 'mp4ar':
				$isValidMp4Ar = true;
				break;
			case 'mp4mr':
				$isValidMp4Mr = true;
				break;
			case 'mp3ar':
				$isValidMp3Ar = true;
				break;
			case 'mp3mr':
				$isValidMp3Mr = true;
				break;
		}	

		if($isValidMp4Ar)
			$this->insertLogDownload(array('song_no' => $log['song_no'], 'mem_no' => $log['mem_no'], 'song_type' => "mp4ar"));
		if($isValidMp4Mr)
			$this->insertLogDownload(array('song_no' => $log['song_no'], 'mem_no' => $log['mem_no'], 'song_type' => "mp4mr"));
		if($isValidMp3Ar)
			$this->insertLogDownload(array('song_no' => $log['song_no'], 'mem_no' => $log['mem_no'], 'song_type' => "mp3ar"));
		if($isValidMp3Mr)
			$this->insertLogDownload(array('song_no' => $log['song_no'], 'mem_no' => $log['mem_no'], 'song_type' => "mp3mr"));

		return array('result'=>'SUCCESS');
	}

	private function insertLogDownload($log) { 
		$sql = "
			INSERT INTO
				LOG_DOWNLOAD
				(
					song_no
					, song_type
					, mem_no
					, log_regdate
				)
				VALUES
				(
					". $this->db->escape($log['song_no']) ."
					, ". $this->db->escape($log['song_type']) ."
					, ". $this->db->escape($log['mem_no']) ."
					, NOW()
				)
		";

		if ($this->db->query($sql) > 0) {
			$result = $this->addSongHit($log);
			return $result;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => '로그 등록시 오류가 발생하였습니다' // 외국어 지원 필요 없음
			) ;
		}	
	}


	private function addSongHit($song) { 			
		$columnName = "song_download_" . strtolower($song['song_type']) . "_" . (($song['mem_no'] == 0) ? "guest" : "member");
		$columnName = str_replace("mp4", "", $columnName);

		$countLog = 0;

		if($song['mem_no'] > 0) { 
			$countLog = $this->db->query("SELECT * FROM LOG_DOWNLOAD WHERE song_type = " . $this->db->escape($song['song_type']) . " AND mem_no = " . $this->db->escape($song['mem_no']) . " AND song_no = ". $this->db->escape($song['song_no']))->num_rows();
		}

		if($song['mem_no'] == 0 || $countLog <= 1) {
			$this->db->query("UPDATE SONG SET " . $columnName . " = " . $columnName . " + 1 WHERE song_no = ". $this->db->escape($song['song_no']));
		}		

		return array('result' => 'SUCCESS') ;
	}


	// 영상 다운로드 로그
	public function logDownload($log) {

		$sql = "
			INSERT INTO
				LOG_DOWNLOAD
				(
					song_no
					, song_type
					, mem_no
					, log_regdate
				)
				VALUES
				(
					". $this->db->escape($log['song_no']) ."
					, ". $this->db->escape($log['song_type']) ."
					, ". $this->db->escape($log['mem_no']) ."
					, NOW()
				)
		";

		if ($this->db->query($sql) > 0) {
			// 회원, 비회원 다운로드수를 나눠서 증가시킴. AR/MR 나누는 작업 추가되어야 함
			$songData = $this->selectSongDetail(array('song_no' => $log['song_no']));
			
			if($log['mem_no']==0) {
				$columnName = "song_download_ar_guest";
				$downloadCnt = $songData['song_download_ar_guest'];
			} else {
				$columnName = "song_download_ar_member";
				$downloadCnt = $songData['song_download_ar_member'];
			}

			$downloadCnt++;

			$updateSong = array(
				'table_name' => 'SONG',
				'update_columns' => array($columnName => $downloadCnt),
				'where_case' => array('song_no' => $log['song_no'])
			);

			$this->Common_m->updateQuery($updateSong);

			return array(
				'result' => 'SUCCESS'
			) ;
		} else {
			return array(
				'result' => 'FAILURE' ,
				'message' => '로그 등록시 오류가 발생하였습니다' // 외국어 지원 필요 없음
			) ;
		}		
	}


	// 악보 다운로드 로그
	public function logBuyPdf($log) {

		$checkBuyPdf = $this->Purchase_m->checkLogBuyPdfList($log);
		
		if(!$checkBuyPdf['result']) { 

			$sql = "
				INSERT INTO
					LOG_BUYPDF
					(
						song_no
						, mem_no
						, log_moneytype
						, song_pdfprice
						, log_regdate
					)
					VALUES
					(
						". $this->db->escape($log['song_no']) ."
						, ". $this->db->escape($log['mem_no']) ."
						, ". $this->db->escape($log['log_moneytype']) ."
						, ". $this->db->escape($log['song_pdfprice']) ."
						, NOW()
					)
			";

			if ($this->db->query($sql) > 0) {
				$newSeq = $this->db->insert_id() ;

				$songData = $this->selectSongDetail(array('song_no' => $log['song_no']));
				$downloadCnt = $songData['song_download_pdf'] + 1;

				$updateSong = array(
					'table_name' => 'SONG',
					'update_columns' => array('song_download_pdf' => $downloadCnt),
					'where_case' => array('song_no' => $log['song_no'])
				);

				$this->Common_m->updateQuery($updateSong);

				$memberData = $this->Member_m->selectMemberDetailInfo(array('mem_no' => $log['mem_no']));

				switch ($log['log_moneytype']) {
					case 'CASH':
						$updateColumns = array('mem_cash' => $memberData['mem_info']['mem_cash'] - $log['song_pdfprice']);
						break;
					case 'POINT':
						$updateColumns = array('mem_point' => $memberData['mem_info']['mem_point'] - $log['song_pdfprice']);
						break;
				}

				$updateMember = array(
					'table_name' => 'MEMBER',
					'update_columns' => $updateColumns,
					'where_case' => array('mem_no' => $log['mem_no'])
				);

				$this->Common_m->updateQuery($updateMember);

				return array(
					'result' => 'SUCCESS'
				) ;
			} else {
				return array(
					'result' => 'FAILURE' ,
					'message' => $this->Common_m->getLocalMessage("오류가 발생하였습니다", $log['lang'])
				) ;
			}	
		} else { 
			// 구매 이력이 있다면, 로그를 남기지 않음
			return array(
				'result' => 'SUCCESS'
			) ;
		}
	}	



	public function selectMonthlySongList($searchParam) {
		
		if (!isset($searchParam['pageNumber']) OR empty($searchParam['pageNumber'])) {
			$searchParam['pageNumber'] = 1 ;
		}
		if (!isset($searchParam['rowNumber'])) {
			$searchParam['rowNumber'] = 20 ;
		}
		if (!isset($searchParam['orderKey']) OR empty($searchParam['orderKey'])) {
			$searchParam['orderKey'] = " song_no DESC " ;
		}

		$searchParam['pageNumber'] = intval($searchParam['pageNumber'], 10) ;

		$limit_end = $searchParam['rowNumber'] ;
		$limit_start = ($searchParam['pageNumber'] - 1) * $searchParam['rowNumber'] ;

		$sql = "
			SELECT ld.song_no
			, s.song_title
			, s.song_price
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no), 0) cnt_total
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4mr'), 0) cnt_mp4mr
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4ar'), 0) cnt_mp4ar
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3mr'), 0) cnt_mp3mr
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3ar'), 0) cnt_mp3ar
			, ifnull((select count(*) from LOG_BUYPDF WHERE song_no = ld.song_no AND log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'), 0) cnt_pdf
		";
 
		$sql .="
			FROM 
				LOG_DOWNLOAD ld
			JOIN 
				SONG s 
				ON ld.song_no = s.song_no
		";
 

		$where_sql = array() ;

		if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
			switch ($searchParam['searchKeyfield']) {
				case 'song_title' :
					$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_1,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_2,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_3,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_4,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_5,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_6,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_7,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_8,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_9,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
									  REPLACE(song_keyword_10,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
					break ;
			}
		}

		$where_sql[] = " ld.log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND ld.log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'";

		if (count($where_sql) > 0) {
			$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		}

		$sql .= ' GROUP BY ld.song_no ';
		$sql .= ' ORDER BY '. $searchParam['orderKey'];

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


	public function selectMonthlySongListForBoard($searchParam) {
		
		$sql = "
			SELECT s.song_title
			, s.song_price
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no), 0) cnt_total
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4ar'), 0) cnt_mp4ar
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4mr'), 0) cnt_mp4mr
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3ar'), 0) cnt_mp3ar
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3mr'), 0) cnt_mp3mr
			, ifnull((select count(*) from LOG_BUYPDF WHERE song_no = ld.song_no AND log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'), 0) cnt_pdf
			FROM 
				LOG_DOWNLOAD ld
			JOIN 
				SONG s 
				ON ld.song_no = s.song_no
		";
 

		$where_sql = array() ;

		// if (isset($searchParam['keyword']) AND !empty($searchParam['keyword'])) {
		// 	switch ($searchParam['searchKeyfield']) {
		// 		case 'song_title' :
		// 			$where_sql[] = " (REPLACE(song_title,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_1,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_2,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_3,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_4,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_5,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_6,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_7,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_8,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_9,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%') OR 
		// 							  REPLACE(song_keyword_10,' ','') LIKE CONCAT('%', ". str_replace(" ", "", $this->db->escape($searchParam['keyword'])) .", '%'))" ;
		// 			break ;
		// 	}
		// }

		$where_sql[] = " ld.log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND ld.log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'";


		$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		$sql .= ' GROUP BY ld.song_no ';
		$sql .= ' ORDER BY ld.song_no DESC';

		return $this->db->query($sql)->result();
	}


	public function selectMonthlySongListForDownload($searchParam) {
		
		$sql = "
		SELECT 
			s.song_no
			, s.song_no as song_no2
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
			, ca_key.code_text as song_key_text
			, ca_key.code_order as song_key_idx
			, s.song_lyricist
			, s.song_composer
			, s.song_arranger
			, s.song_ispublicdomain
			, s.song_copyright_code
			, s.song_price
			, s.song_pdfprice
			, s.song_url_ar
			, s.song_url_mr
			, s.song_mp3_ar
			, s.song_mp3_mr
			, s.song_pdf
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no), 0) cnt_total
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4mr'), 0) cnt_mp4mr
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp4ar'), 0) cnt_mp4ar
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3mr'), 0) cnt_mp3mr
			, ifnull((select count(ld.log_no) from LOG_DOWNLOAD WHERE log_no = ld.log_no AND song_type='mp3ar'), 0) cnt_mp3ar
			, ifnull((select count(*) from LOG_BUYPDF WHERE song_no = ld.song_no AND log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'), 0) cnt_pdf			
			FROM 
				LOG_DOWNLOAD ld
			JOIN 
				SONG s 
				ON ld.song_no = s.song_no
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
		$where_sql[] = " ld.log_regdate >= '".$searchParam['year']."-".$searchParam['month']."-01 00:00:00' AND ld.log_regdate<'".$searchParam['year']."-".$searchParam['month']."-31 23:59:59'";


		$sql .= ' WHERE '. implode(' AND ', $where_sql) ;
		$sql .= ' GROUP BY ld.song_no ';
		$sql .= ' ORDER BY cnt_total DESC';

		log_message("ERROR","sql :::::: " . $sql);

		$count_result = $this->db->query($sql)->num_rows() ;		

		return array(
			'resultList' => $this->db->query($sql)->result_array()
		) ;
	}	

}