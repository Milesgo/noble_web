<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_m extends CI_Model {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('picture_m', 'banner_m', 'board_m', 'admin_m' , 'member_m')) ;		
	}        

	// 수정 쿼리
	public function updateQuery($data) {

		try {
			if (!isset($data) OR empty($data)) throw new Exception('변경 대상 정보를 입력해주세요.') ;
			if (!isset($data['table_name']) OR empty($data['table_name'])) throw new Exception('변경 테이블 정보를 입력해주세요') ;
			if (!isset($data['update_columns']) OR empty($data['update_columns'])) throw new Exception('변경 컬럼 정보를 입력해주세요') ;
			if (!isset($data['where_case']) OR empty($data['where_case'])) throw new Exception('변경 조건 정보를 입력해주세요') ;

			$update_columns = array() ;
			foreach ($data['update_columns'] as $column => $value) {
				$update_columns[] = $column .'='. $this->db->escape($value) ;
			}

			$where_case = array() ;
			foreach ($data['where_case'] as $where => $value) {
				$idx = is_array($value) ? implode(", ", $value) : $value;
				$where_case[] = $where .' IN ('. $this->db->escape($idx) .')';
			}

			$sql = "UPDATE " . $data['table_name'] . " SET ". implode(', ', $update_columns) ." WHERE ". implode(' AND ', $where_case) ;

			if ($this->db->query($sql) > 0) {
				$result = array();
				$result['result'] = 'SUCCESS';

				// 미리 설정된 리턴 값이 있는 경우에만 추가
				if (isset($data['return_value']) AND !empty($data['return_value'])) { 
					foreach ($data['return_value'] as $name => $value) {
						$result[$name] = $value;
					}
				}

				return $result;
			} else {
				throw new Exception("정보 변경에 실패하였습니다.\n잠시 후 다시 시도하여 주십시요.") ;
			}				
			
		}
		catch (Exception $e) {
			return array(
				'result' => 'FAILURE' ,
				'message' => $e->getMessage()
			) ;
		}

	}


	// 삭제 쿼리
	public function deleteQuery($data) {

		try {
			if (!isset($data) OR empty($data)) throw new Exception('삭제 대상 정보를 입력해주세요.') ;
			if (!isset($data['table_name']) OR empty($data['table_name'])) throw new Exception('삭제 테이블 정보를 입력해주세요') ;
			if (!isset($data['where_case']) OR empty($data['where_case'])) throw new Exception('삭제 조건 정보를 입력해주세요') ;

			$where_case = array() ;
			foreach ($data['where_case'] as $where => $value) {
				$idx = is_array($value) ? implode(", ", $value) : $value;
				$where_case[] = $where .' IN ('. $idx .')';
			}

			$sql = "DELETE FROM " . $data['table_name'] . " WHERE ". implode(' AND ', $where_case) ;

			if ($this->db->query($sql) > 0) {
				$result = array();
				$result['result'] = 'SUCCESS';

				// 미리 설정된 리턴 값이 있는 경우에만 추가
				if (isset($data['return_value']) AND !empty($data['return_value'])) { 
					foreach ($data['return_value'] as $name => $value) {
						$result[$name] = $value;
					}
				}

				return $result;
			} else {
				throw new Exception("삭제 실패하였습니다.\n잠시 후 다시 시도하여 주십시요.") ;
			}				
			
		}
		catch (Exception $e) {
			return array(
				'result' => 'FAILURE' ,
				'message' => $e->getMessage()
			) ;
		}
	}	


	// 파일 업로드
	public function setupUploadConfig() {

		$upload_config = array(
			'upload_path' 	=> "./uploads/temporary",
			'encrypt_name' 	=> TRUE,
			'allowed_types' => 'gif|jpg|jpeg|png|jpe',
			'max_size' => 2048
		) ;

		if (!is_dir($upload_config['upload_path'])) {
			mkdir($upload_config['upload_path'], 0777, true) ;
		}

		$this->load->library('upload', $upload_config) ;
		
	}		
 
 	public function allowOnlyAdmin($message) { 
		if (!$this->admin_m->isAdmin()) {
			echo json_encode(array(
				'result' => 'FAILURE',
				'message' => $message
			)) ;
			exit;
		}
 	}

	// 이미지 포함하여 등록 및 수정 처리
	public function insertAndUpdateThing($type, $no, $thing, $tableName, $folderName, $img) { 

		if($this->input->post($no)==0) {
			
			switch ($type) {
				case 'BANNER': // 새 배너 등록					
					$result = $this->banner_m->insertNewBanner($thing);
					break;
				case 'POST': // 새 게시물 등록
					$result = $this->board_m->insertNewPost($thing);
					break;
				case 'SONG': // 새 곡 등록
					$thing['song_keyword_initial'] = $this->cho_hangul($thing['song_title']);
					$result = $this->song_m->insertNewSong($thing);
					break;
				case 'MEMBER': // 새 회원 등록
					// do nothing
					break;
			}

		} else { 
			// 수정 범위에서 제외	
			switch ($type) {
				case 'BANNER': 
					unset($thing['admin_no']);
					break;
				case 'SONG': 
					unset($thing['admin_no']);
					$thing['song_keyword_initial'] = $this->cho_hangul($thing['song_title']);
					break;
				case 'POST': 
					// 글 수정
					$postData = $this->board_m->selectPostDetail(array($no => $this->input->post($no)));

					// 이미 발행된 글은 작성시간을 수정하지 않음
					// if($postData['post_status'] != "PUBLISH")
						// $thing['post_registerdate'] = date("Y-m-d H:i:s",time());

					break;
				case 'MEMBER':
					// do nothing
					break;
			}
			
			$updateThing = array(
				'table_name' => $tableName,
				'update_columns' => $thing,
				'where_case' => array($no => $this->input->post($no))
			);
			$result = $this->updateQuery($updateThing);
			$result[$no] = $this->input->post($no);
		}	

		// 등록 및 정시 모두 $result[$no] 에 no값이 들어있음
		switch ($result['result']) {
			case 'SUCCESS':

				$contentsPictures = $this->input->post('contentsPictures') ;
				
				// log_message("ERROR","NO : ". $result[$no]);
				log_message("ERROR","contentsPictures : ". $contentsPictures);

				if (!empty($contentsPictures)) {
	
					$contentsPicture = explode(',', $contentsPictures) ;
					
					for ($i = 0 ; $i < count($contentsPicture) ; $i++) {
						$updatePicture = array(
							'table_name' => 'CONTENTS_PICTURE',
							'update_columns' => array('pic_owner' => $result[$no]),
							'where_case' => array('pic_seq' => $contentsPicture[$i])
						);
						$this->updateQuery($updatePicture);
					}
				}				


				// 첨부 이미지가 있는 경우
				if (isset($_FILES[$img]) AND !empty($_FILES[$img]['name'])) {

					$this->setupUploadConfig();

					if ($this->upload->do_upload($img)) {
						// 업로드에 성공한 경우
						$upload_data = $this->upload->data();						

						$picture = array(
							'pic_div' => $this->input->post("pic_div"),
							'pic_owner' => $result[$no],
							'pic_name' => $upload_data['orig_name'],
							'pic_ext' => strtolower($upload_data['file_ext']),
							'pic_size' => filesize($upload_data['file_path'] . $upload_data['file_name']),
							'pic_width' => $upload_data['image_width'] ,
							'pic_height' => $upload_data['image_height'] ,
							'store_path' => $upload_data['file_path'] ,
							'store_name' => $upload_data['file_name'] ,
							'store_mem' => $this->admin_m->getAdminId()
						) ;

						$result_picture = $this->picture_m->insertNewPicture($picture) ;

						if ($result_picture['result'] == 'SUCCESS') {
							$newfilename = $result_picture['pic_seq'] . $result_picture['pic_ext'];

							$updatePicture = array(
								'table_name' => 'CONTENTS_PICTURE',
								'update_columns' => array('store_path' => $folderName, 'store_name' => $newfilename),
								'where_case' => array('pic_seq' => $result_picture['pic_seq'])
							);
							$this->updateQuery($updatePicture);

							$fileData = file_get_contents(SERVERURL . "/uploads/temporary/" . $picture['store_name']);

							try {
							    // Upload data.
							    $s3_result = $this->common->s3->putObject([
							        'Bucket' => 'noblemrplayer',
								    'Key'    => $folderName . '/' . $newfilename,
								    'Body'   => $fileData
							    ]);

								$updateThing = array(
									'table_name' => $tableName,
									'update_columns' => array($img => $result_picture['pic_seq']),
									'where_case' => array($no => $result[$no])
								);
								$this->updateQuery($updateThing);

							} catch (S3Exception $e) {
							}

							unlink(UPLOAD_PATH . $picture['store_name']);
						}
						echo json_encode($result) ;						
					} else {
						// 업로드에 실패한 경우
						echo json_encode(array(
							'result' => 'FAILURE' ,
							'message' => "업로드 실패!!\n지정된 확장자가 아니거나, 파일용량이 제한값보다 클 수 있습니다."
						)) ;
					}				
				} else 
					if($type=="SONG")
						return $result;
					else 
						echo json_encode($result);
					break;						
				break;
			case 'FAILURE':
					if($type=="SONG")
						return $result;
					else 
						echo json_encode($result);
				break;
		}
	}



	// 음악 파일 업로드
	public function uploadSongFile($no, $songFile) { 

		switch ($songFile) {
			case 'song_url_ar':
			case 'song_url_mr':
				$folderName = "melody";
				break;
			case 'song_mp3_ar':
			case 'song_mp3_mr':
				$folderName = "mp3";
				break;
			case 'song_pdf':
				$folderName = "pdf";
				break;
		}
			
		if (isset($_FILES[$songFile]) AND !empty($_FILES[$songFile]['name'])) {

			$upload_config = array(
				'upload_path' 	=> "./uploads/temporary",
				'encrypt_name' 	=> TRUE,
				'allowed_types' => '*',
				'max_size' => 20480
			) ;

			$this->load->library('upload', $upload_config) ;

			if ($this->upload->do_upload($songFile)) {

				$upload_data = $this->upload->data() ;
				$newfilename = $no . '_' . $this->member_m->createNewPassword() . $upload_data['file_ext'];

				$fileData = file_get_contents($upload_data['file_path'] . $upload_data['file_name']);

				try {
				    // Upload data.
				    $s3_result = $this->common->s3->putObject([
				        'Bucket' => 'noblemrplayer',
					    'Key'    => $folderName . '/' . $newfilename,
					    'Body'   => $fileData
				    ]);


					$this->updateQuery(array(
						'table_name' => "SONG",
						'update_columns' => array($songFile => $s3_result['ObjectURL']),
						'where_case' => array('song_no' => $no)
					));


				} catch (S3Exception $e) {
				}

				unlink(UPLOAD_PATH . $upload_data['file_name']);

			} else {
				// 업로드에 실패한 경우
				echo json_encode(array(
					'result' => 'FAILURE' ,
					'message' => "업로드 실패!!\n지정된 확장자가 아니거나, 파일용량이 제한값보다 클 수 있습니다." . $this->upload->display_errors()
				)) ;
			}				
		} else 
			echo json_encode($result);				
	}	

	private function utf8_strlen($str) { return mb_strlen($str, 'UTF-8'); }
	private function utf8_charAt($str, $num) { return mb_substr($str, $num, 1, 'UTF-8'); }
	private function utf8_ord($ch) {
	  $len = strlen($ch);
	  if($len <= 0) return false;
	  $h = ord($ch{0});
	  if ($h <= 0x7F) return $h;
	  if ($h < 0xC2) return false;
	  if ($h <= 0xDF && $len>1) return ($h & 0x1F) <<  6 | (ord($ch{1}) & 0x3F);
	  if ($h <= 0xEF && $len>2) return ($h & 0x0F) << 12 | (ord($ch{1}) & 0x3F) << 6 | (ord($ch{2}) & 0x3F);          
	  if ($h <= 0xF4 && $len>3) return ($h & 0x0F) << 18 | (ord($ch{1}) & 0x3F) << 12 | (ord($ch{2}) & 0x3F) << 6 | (ord($ch{3}) & 0x3F);
	  return false;
	}

	public function cho_hangul($str) {
	  $cho = array("ㄱ","ㄲ","ㄴ","ㄷ","ㄸ","ㄹ","ㅁ","ㅂ","ㅃ","ㅅ","ㅆ","ㅇ","ㅈ","ㅉ","ㅊ","ㅋ","ㅌ","ㅍ","ㅎ");
	  $result = "";
	  for ($i=0; $i<$this->utf8_strlen($str); $i++) {
	    $code = $this->utf8_ord($this->utf8_charAt($str, $i)) - 44032;
	    if ($code > -1 && $code < 11172) {
	      $cho_idx = $code / 588;      
	      $result .= $cho[$cho_idx];
	    }
	  }
	  return $result;
	}

	public function getGoogleDeveloperAccessToken() { 
		$url = "https://accounts.google.com/o/oauth2/token";
		$post_data["grant_type"] = "refresh_token";
		$post_data["client_id"] = "113302326315-qnkj55i01jrogpds6m0ejjm85h53am2a.apps.googleusercontent.com";
		$post_data["client_secret"] = "us-YfK09y_AFpJqPzoM4Vm19";
		$post_data["refresh_token"] = "1/b4W0pzCSBkWdbB0m2GekyAq1vXWRPakvbg5MTXijQNg";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); //POST로 보낼 데이터 지정하기
		$result=curl_exec($ch);
		curl_close($ch);

		$json = json_decode($result);
		return $json->access_token;
	}

	// 메시지 구하기
	public function getLocalMessage($msg_korea, $lang) {

		$sql = "SELECT * FROM MESSAGE WHERE msg_korea = ". $this->db->escape($msg_korea) ."";
		$row = $this->db->query($sql)->row_array();

		switch ($lang) {
			case 'en':
				$message = $row['msg_english'];
				break;
			case 'zh':
				$message = $row['msg_china'];
				break;
			case 'ja':
				$message = $row['msg_japan'];
				break;		
			default:
				$message = $row['msg_korea'];
				break;
		}

		return $message;
	}	

	public function isMobile() {
 	   return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
}