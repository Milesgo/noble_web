<?php
// require 'aws-php/aws-autoloader.php';

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('common_m', 'admin_m', 'member_m', 'board_m', 'picture_m', 'banner_m', 'song_m', 'purchase_m'));
	}
	public function index()
	{
		if ($this->admin_m->isAdmin())
			redirect("http://" . $_SERVER['SERVER_NAME'] . "/admin/member");
		else
			$this->load->view('admin/login_v');
	}

	// 관리자 로그인 프로세스
	public function loginprocess()
	{

		$result = $this->admin_m->loginAdmin(array(
			'admin_id' => $this->input->post("admin_id"),
			'admin_password' => $this->input->post("admin_password")
		));

		echo json_encode($result);
	}

	// admin 로그아웃
	public function logout()
	{
		$this->load->helper('cookie');
		delete_cookie(KEEP_ADMIN_SEQ, $_SERVER['SERVER_NAME']);
		$this->session->sess_destroy();
		redirect("http://" . $_SERVER['SERVER_NAME'] . "/admin");
	}

	// 	일/월 회원가입수 통계
	public function stat()
	{
		$data['year'] = ($this->input->get("year") == 0) ? date("Y", time()) : $this->input->get("year");
		$data['month'] = ($this->input->get("month") == 0) ? date("m", time()) : $this->input->get("month");
		$data['statJoin'] = $this->member_m->getDailyMemberCount(array('year' => $data['year'], 'month' => $data['month'], 'mem_type' => 'mem_joindate'));
		$data['statOut'] = $this->member_m->getDailyMemberCount(array('year' => $data['year'], 'month' => $data['month'], 'mem_type' => 'mem_outdate'));
		$data['memberCount'] = $this->member_m->getTotalMemberCountBeforeDate(array('date' => sprintf("%4d-%02d-01", $data['year'], $data['month'])));

		$this->load->view('admin/stat_member_v', $data);
	}

	// 	월별 집계
	public function monthly()
	{
		$data['year'] = $this->input->get("year");
		$data['month'] = $this->input->get("month");

		if ($data['year'] == 0 && $data['month'] == 0)
			$this->load->view('admin/monthly_stat_v', $data);
		else if ($this->input->get("download") == "y") {
		} else {
			$this->load->view('admin/monthly_stat_list_v', $data);
		}
	}

	// 공지사항관리
	public function notice()
	{
		$this->loadBoard($this->uri->segment(2));
	}


	// 곡관리
	public function song()
	{

		$song_no = $this->uri->segment(3);

		switch ($song_no) {
			case '': // 목록
				$data['songData'] = $this->song_m->selectSongList(array());

				$this->load->view('admin/song_list_v', $data);
				break;

			case 'pdfprice': // PDF가격 변경
				$this->common_m->allowOnlyAdmin('관리자만 변경하실 수 있습니다.');

				$selectedNo = explode(",", $this->input->post('selectedNo'));
				$newPdfPrice = $this->input->post('song_pdfprice');

				$isExistPdfFile = true;

				foreach ($selectedNo as $song_no) {
					$result = $this->song_m->selectSongDetail(array('song_no' => $song_no));
					if ($result['song_pdf'] == "")
						$isExistPdfFile = false;
				}

				if ($isExistPdfFile) {
					foreach ($selectedNo as $song_no)
						$this->song_m->changePdfPrice(array('song_no' => $song_no, 'song_pdfprice' => $newPdfPrice));

					echo json_encode(array('result' => 'SUCCESS'));
				} else {
					echo json_encode(array('result' => 'FAILURE', 'message' => '악보가 없는 곡이 포함되어 있습니다'));
				}

				break;

			case 'delete': // 삭제
				$this->common_m->allowOnlyAdmin('관리자만 삭제하실 수 있습니다.');

				$selectedNo = explode(",", $this->input->post('selectedNo'));

				$allResult = true;

				foreach ($selectedNo as $song_no) {

					$songData = $this->song_m->selectSongDetail(array('song_no' => $song_no));

					$result = $this->common_m->deleteQuery(array(
						'table_name' => 'SONG',
						'where_case' => array('song_no' => $song_no),
						'return_value' => array('board_id' => $this->input->post('board_id'))
					));

					if ($result['result'] == "SUCCESS") {

						if ($songData['song_url_ar'] != "")
							$this->common->s3->deleteObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => 'melody/' . basename($songData['song_url_ar'])
							]);

						if ($songData['song_url_mr'] != "")
							$this->common->s3->deleteObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => 'melody/' . basename($songData['song_url_mr'])
							]);

						if ($songData['song_mp3_ar'] != "")
							$this->common->s3->deleteObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => 'mp3/' . basename($songData['song_mp3_ar'])
							]);

						if ($songData['song_mp3_mr'] != "")
							$this->common->s3->deleteObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => 'mp3/' . basename($songData['song_mp3_mr'])
							]);

						if ($songData['song_pdf'] != "")
							$this->common->s3->deleteObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => 'pdf/' . basename($songData['song_pdf'])
							]);

						$this->common_m->deleteQuery(array(
							'table_name' => 'ALBUM_SONG',
							'where_case' => array('song_no' => $song_no)
						));
					}

					if (!$result) $allResult = false;
				}

				if ($allResult)
					echo json_encode(array("result" => "SUCCESS"));
				else
					echo json_encode(array("result" => "FAILURE", "message" => "삭제 처리시 오류가 발생하였습니다"));
				break;

			case 'deletefile': // 파일 삭제
				$this->common_m->allowOnlyAdmin('관리자만 삭제하실 수 있습니다.');

				$song_no = $this->input->get('song_no');
				$file_type = $this->input->get('file_type');

				$songData = $this->song_m->selectSongDetail(array('song_no' => $song_no));
				$file_name = basename($songData[$file_type]);

				switch ($file_type) {
					case 'song_url_ar':
					case 'song_url_mr':
						$this->common->s3->deleteObject([
							'Bucket' => 'noblemrplayer',
							'Key'    => 'melody/' . $file_name
						]);
						break;

					case 'song_mp3_ar':
					case 'song_mp3_mr':
						$this->common->s3->deleteObject([
							'Bucket' => 'noblemrplayer',
							'Key'    => 'mp3/' . $file_name
						]);
						break;
					case 'song_pdf':
						$this->common->s3->deleteObject([
							'Bucket' => 'noblemrplayer',
							'Key'    => 'pdf/' . $file_name
						]);
						break;
				}

				$updateSong = array(
					'table_name' => 'SONG',
					'update_columns' => array($file_type => ''),
					'where_case' => array('song_no' => $song_no)
				);

				$this->common_m->updateQuery($updateSong);

				echo "<script>history.go(-1);</script>";

				break;

			case 'upload': // 등록
				switch ($this->uri->segment(4)) {
					case 'process': // DB 저장

						$this->common_m->allowOnlyAdmin('관리자만 작성하실 수 있습니다.');

						$song = array(
							'song_title' => $this->input->post('song_title'),
							'song_title_eng' => $this->input->post('song_title_eng'),
							'song_title_jpn' => $this->input->post('song_title_jpn'),
							'song_title_chn' => $this->input->post('song_title_chn'),
							'song_lyricist' => $this->input->post('song_lyricist'),
							'song_composer' => $this->input->post('song_composer'),
							'song_arranger' => $this->input->post('song_arranger'),
							'song_inst_code' => $this->input->post('song_inst_code'),
							'song_genre_code' => $this->input->post('song_genre_code'),
							'song_duet_code' => $this->input->post('song_duet_code'),
							'song_key_code' => $this->input->post('song_key_code'),
							'song_key_multi' => $this->input->post('song_key_multi'),
							'song_price' => $this->input->post('song_price'),
							'song_pdfprice' => $this->input->post('song_pdfprice'),
							'song_copyright_code' => $this->input->post('song_copyright_code'),
							'song_ispublicdomain' => $this->input->post('song_ispublicdomain'),
							'song_islive' => $this->input->post('song_islive'),
							'song_keyword_1' => $this->input->post('song_keyword_1'),
							'song_keyword_2' => $this->input->post('song_keyword_2'),
							'song_keyword_3' => $this->input->post('song_keyword_3'),
							'song_keyword_4' => $this->input->post('song_keyword_4'),
							'song_keyword_5' => $this->input->post('song_keyword_5'),
							'song_keyword_6' => $this->input->post('song_keyword_6'),
							'song_keyword_7' => $this->input->post('song_keyword_7'),
							'song_keyword_8' => $this->input->post('song_keyword_8'),
							'song_keyword_9' => $this->input->post('song_keyword_9'),
							'song_keyword_10' => $this->input->post('song_keyword_10'),
							'admin_no' => $this->admin_m->getAdminId()
						);

						$result = $this->common_m->insertAndUpdateThing('SONG', 'song_no', $song, 'SONG', '', '');

						if ($this->input->post('song_no') > 0)
							$song_no = $this->input->post('song_no');
						else
							$song_no = $result['post_no'];

						if (isset($_FILES['song_url_ar']) and !empty($_FILES['song_url_ar']['name'])) {
							$this->common_m->uploadSongFile($song_no, 'song_url_ar');
						}

						if (isset($_FILES['song_url_mr']) and !empty($_FILES['song_url_mr']['name'])) {
							$this->common_m->uploadSongFile($song_no, 'song_url_mr');
						}

						if (isset($_FILES['song_mp3_ar']) and !empty($_FILES['song_mp3_ar']['name'])) {
							$this->common_m->uploadSongFile($song_no, 'song_mp3_ar');
						}

						if (isset($_FILES['song_mp3_mr']) and !empty($_FILES['song_mp3_mr']['name'])) {
							$this->common_m->uploadSongFile($song_no, 'song_mp3_mr');
						}

						if (isset($_FILES['song_pdf']) and !empty($_FILES['song_pdf']['name'])) {
							$this->common_m->uploadSongFile($song_no, 'song_pdf');
						}

						if ($result['result'] == "SUCCESS") {
							if ($this->input->post('song_oldpdfprice') != $this->input->post('song_pdfprice')) {
								$this->song_m->changePdfPrice(array('song_no' => $song_no, 'song_pdfprice' => $song['song_pdfprice']));
							}
						}

						echo json_encode($result);

						break;

					default: // 곡 등록 화면

						$song_no = $this->uri->segment(4);
						$data['codeInstList'] = $this->song_m->selectCodeList(array('code_type' => 'INST'));
						$data['codeGenreList'] = $this->song_m->selectCodeList(array('code_type' => 'GENRE'));
						$data['codeDuetList'] = $this->song_m->selectCodeList(array('code_type' => 'DUET'));
						$data['codeKeyList'] = $this->song_m->selectCodeList(array('code_type' => 'KEY'));

						if ($song_no > 0) {
							$data['songData'] = $this->song_m->selectSongDetail(array('song_no' => $song_no));
							$data['mode'] = "edit";
						} else {
							$data['mode'] = "new";
						}

						$this->load->view('admin/song_upload_v', $data);
						break;
				}
				break;
		}
	}



	// 배너관리
	public function banner()
	{

		$banner_no = $this->uri->segment(3);

		switch ($banner_no) {
			case '': // 목록			
				$data['bannerList'] = $this->banner_m->selectBannerList(array('bannerDisplay' => 'Y', 'orderKey' => 'b.banner_order ASC '));
				$this->load->view('admin/banner_list_v', $data);
				break;
			case 'change': // 상태값 변경

				$this->common_m->allowOnlyAdmin('관리자만 변경하실 수 있습니다.');

				if (is_array($this->input->post('banner_no'))) {
					$arr = $this->input->post('banner_no');
					for ($i = 0; $i < count($arr); $i++) {
						$result = $this->banner_m->changeBannerDisplay($arr[$i], $this->input->post('banner_display'));
					}
				} else {
					$result = $this->banner_m->changeBannerDisplay($this->input->post('banner_no'), $this->input->post('banner_display'));
				}
				echo json_encode($result);
				break;

			case 'order': // 순서 조정

				$this->common_m->allowOnlyAdmin('관리자만 변경하실 수 있습니다.');

				// 배너 순서 리셋
				$updateBanner = array(
					'table_name' => 'BANNER',
					'update_columns' => array('banner_order' => '0')
				);
				$this->common_m->updateQuery($updateBanner);

				// 배너 순서 재조정
				if (is_array($this->input->post('banner_order'))) {
					$arr = $this->input->post('banner_order');

					for ($i = 0; $i < count($arr); $i++) {
						$result = $this->banner_m->changeBannerOrder($arr[$i], ($i + 1));
					}
				} else {
					$result = $this->banner_m->changeBannerOrder($this->input->post('banner_order'), 1);
				}
				echo json_encode($result);
				break;

			case 'delete': // 삭제
				$this->common_m->allowOnlyAdmin('관리자만 삭제하실 수 있습니다.');


				$selectedNo = explode(",", $this->input->post('selectedNo'));

				$allResult = true;

				foreach ($selectedNo as $banner_no) {
					$result = $this->common_m->deleteQuery(array(
						'table_name' => 'BANNER',
						'where_case' => array('banner_no' => $banner_no),
						'return_value' => array('board_id' => $this->input->post('board_id'))
					));
					if (!$result) $allResult = false;
				}

				if ($allResult) {

					if (is_array($this->input->post('selectedNo'))) {
						$arr = $this->input->post('selectedNo');
						for ($i = 0; $i < count($arr); $i++) {
							$this->picture_m->removePicture(array('pic_div' => 'BANNER', 'pic_owner' => $arr[$i]));
						}
					} else {
						$this->picture_m->removePicture(array('pic_div' => 'BANNER', 'pic_owner' => $this->input->post('selectedNo')));
					}

					echo json_encode(array("result" => "SUCCESS"));
				} else
					echo json_encode(array("result" => "FAILURE", "message" => "삭제 처리시 오류가 발생하였습니다"));

				break;

			case 'upload': // 등록
				switch ($this->uri->segment(4)) {
					case 'process': // DB 저장

						$this->common_m->allowOnlyAdmin('관리자만 작성하실 수 있습니다.');

						$banner = array(
							'banner_name' => $this->input->post('banner_name'),
							'banner_target' => $this->input->post('banner_target'),
							'banner_detail' => $this->input->post('banner_detail'),
							'banner_display' => $this->input->post('banner_display'),
							'admin_no' => $this->admin_m->getAdminId()
						);

						$this->common_m->insertAndUpdateThing('BANNER', 'banner_no', $banner, 'BANNER', 'banner', 'banner_img');
						break;

					default: // 배너 등록

						$banner_no = $this->uri->segment(4);

						$data['songList'] = $this->song_m->selectSongList(array(
							'rowNumber' => 999999,
							'orderKey' => 's.song_title ASC',
						));

						$data['noticeList'] = $this->board_m->selectPostList(array(
							'board_id' => 'notice',
							'orderKey' => 'bp.post_registerdate DESC'
						));

						if ($banner_no > 0) {
							$data['bannerData'] = $this->banner_m->selectBannerDetail(array('banner_no' => $banner_no));
							$data['mode'] = "edit";
						} else {
							$data['mode'] = "new";
						}

						$this->load->view('admin/banner_upload_v', $data);
						break;
				}
				break;

			default:
				// 상세
				$data['post'] = $this->board_m->selectPostDetail(array('post_no' => $post_no));

				// 조회수 추가
				if ($post_no > 0) {
					$hit = array(
						'post_no' => $post_no,
						'mem_no' => $data['mem_no']
					);

					$this->board_m->insertBoardHitLog($hit);
				}

				$this->load->view('front/banner_upload_v', $data);
				break;
		}
	}


	// 회원관리
	public function member()
	{

		$member_no = $this->uri->segment(3);

		switch ($member_no) {
			case '': // 목록
				$data['memberData'] = $this->member_m->selectMemberList(array());
				$data['memberYesterday'] = $this->member_m->getMemberCountYesterday();

				$this->load->view('admin/member_list_v', $data);
				break;

			case 'delete': // 삭제
				$this->common_m->allowOnlyAdmin('관리자만 삭제하실 수 있습니다.');

				$selectedNo = explode(",", $this->input->post('selectedNo'));
				$allResult = true;
				foreach ($selectedNo as $mem_no) {
					$result = $this->member_m->dropoutMember(array('mem_no' => $mem_no));
					if (!$result) $allResult = false;
				}

				if ($allResult)
					echo json_encode(array("result" => "SUCCESS"));
				else
					echo json_encode(array("result" => "FAILURE", "message" => "탈퇴 처리 오류가 발생하였습니다"));

				break;

			case 'upload': // 등록
				switch ($this->uri->segment(4)) {
					case 'process': // DB 저장

						$this->common_m->allowOnlyAdmin('관리자만 작성하실 수 있습니다.');

						$member = array(
							'mem_name' => $this->input->post('mem_name'),
							'mem_email' => $this->input->post('mem_email')
						);

						$this->common_m->insertAndUpdateThing('MEMBER', 'mem_no', $member, 'MEMBER', '', '');
						break;

					default: // 회원 정보 수정

						$mem_no = $this->uri->segment(4);

						$result = $this->member_m->selectMemberDetailInfo(array('mem_no' => $mem_no));
						$data['memberData'] = $result['mem_info'];
						$data['mode'] = "edit";

						$searchParam = array(
							'includeCancel' => 'N',
							'searchKeyfield' => 'product',
							'searchKeyword' => 'subscription',
							'mem_no' => $mem_no,
							'rowNumber' => 99999
						);

						$data['membershipList'] = $this->purchase_m->selectPurchaseList($searchParam);


						$searchParam = array(
							'includeCancel' => 'N',
							'searchKeyfield' => 'product',
							'searchKeyword' => 'cash',
							'mem_no' => $mem_no,
							'rowNumber' => 99999
						);

						$data['cashList'] = $this->purchase_m->selectPurchaseList($searchParam);

						$searchParam = array(
							'mem_no' => $mem_no,
							'orderKey' => ' lbp.log_regdate DESC ',
							'song_pdfprice' => 'PAID',
							'rowNumber' => 99999
						);

						$data['scoreList'] = $this->Purchase_m->selectScoreList($searchParam);


						$this->load->view('admin/member_upload_v', $data);
						break;
				}
				break;

			case 'resetpassword': // 비밀번호 초기화
				$updateMember = array(
					'table_name' => 'MEMBER',
					'update_columns' => array('mem_password' => md5('1234')),
					'where_case' => array('mem_no' => $this->input->post("mem_no"))
				);

				$result = $this->common_m->updateQuery($updateMember);
				echo json_encode($result);
				break;
		}
	}


	// 결제내역
	public function purchase()
	{

		$pur_no = $this->uri->segment(3);

		switch ($pur_no) {
			case '': // 목록
				$data['memberData'] = $this->purchase_m->selectPurchaseList(array());
				$this->load->view('admin/purchase_list_v', $data);
				break;
			case 'providecash': // 캐시추가

				$product = array(
					'product_id' => $this->input->post("product_id"),
					'mem_no' => $this->input->post("mem_no")
				);

				switch ($product['product_id']) {
					case 'noblecash_10000':
						$product['product_name'] = "1만원 캐시";
						$product['price'] = 10000;
						break;
					case 'noblecash_30000':
						$product['product_name'] = "3만원 캐시";
						$product['price'] = 30000;
						break;
					case 'noblecash_50000':
						$product['product_name'] = "5만원 캐시";
						$product['price'] = 50000;
						break;
				}

				$result = $this->purchase_m->provideCash($product);
				echo json_encode($result);
				break;

			case 'cancel': // 캐시취소
				$result = $this->purchase_m->cancelPurchase(array('pur_no' => $this->input->post("pur_no")));
				echo json_encode($result);
				break;

			case 'providemembership': // 기간추가

				$product = array(
					'product_id' => $this->input->post("product_id"),
					'mem_no' => $this->input->post("mem_no"),
					'acc_fromdate' => $this->input->post("acc_fromdate")
				);

				switch ($product['product_id']) {
					case 'noble_subscription':
						$product['product_name'] = "월정기결제 상품";
						$product['price'] = 10000;
						break;
					case 'noble_6':
						$product['product_name'] = "06개월 상품";
						$product['price'] = 50000;
						break;
					case 'noble_12':
						$product['product_name'] = "12개월 상품";
						$product['price'] = 80000;
						break;
				}

				$result = $this->purchase_m->provideMembership($product);
				echo json_encode($result);
				break;
		}
	}


	// 개인정보 수정
	public function myinfoupdate()
	{
		$data['member'] = $this->admin_m->selectAdminDetailInfo(array(
			'admin_no' => $this->admin_m->getAdminId()
		));
		$this->load->view('admin/myinfo_update_v', $data);
	}

	// 개인정보 수정 처리
	public function myinfoupdate_process()
	{
		$this->common_m->allowOnlyAdmin('관리자만 작성하실 수 있습니다.');

		$updateMember = array(
			'table_name' => 'ADMIN',
			'update_columns' => array(
				'admin_name' => $this->input->post('admin_name')
			),
			'where_case' => array('admin_no' => $this->admin_m->getAdminId())
		);

		$this->common_m->updateQuery($updateMember);

		$result = array(
			'result' => 'SUCCESS',
			'message' => '회원 정보가 변경되었습니다'
		);

		// 첨부 이미지가 있는 경우
		if (isset($_FILES['admin_photo']) and !empty($_FILES['admin_photo']['name'])) {

			$this->common_m->setupUploadConfig();

			if ($this->upload->do_upload('admin_photo')) {
				// 업로드에 성공한 경우
				$upload_data = $this->upload->data();

				$picture = array(
					'pic_div' => $this->input->post("pic_div"),
					'pic_owner' => $this->admin_m->getAdminId(),
					'pic_name' => $upload_data['orig_name'],
					'pic_ext' => strtolower($upload_data['file_ext']),
					'pic_size' => filesize($upload_data['file_path'] . $upload_data['file_name']),
					'pic_width' => $upload_data['image_width'],
					'pic_height' => $upload_data['image_height'],
					'store_path' => $upload_data['file_path'],
					'store_name' => $upload_data['file_name'],
					'store_mem' => $this->admin_m->getAdminId()
				);

				$result_picture = $this->picture_m->insertNewPicture($picture);
				if ($result_picture['result'] == 'SUCCESS') {

					$folderName = "profile";
					$newfilename = $result_picture['pic_seq'] . $result_picture['pic_ext'];

					$updatePicture = array(
						'table_name' => 'CONTENTS_PICTURE',
						'update_columns' => array('store_path' => $folderName, 'store_name' => $newfilename),
						'where_case' => array('pic_seq' => $result_picture['pic_seq'])
					);
					$this->common_m->updateQuery($updatePicture);

					$fileData = file_get_contents(SERVERURL . "/uploads/temporary/" . $picture['store_name']);

					try {
						// Upload data.
						$s3_result = $this->common->s3->putObject([
							'Bucket' => 'noblemrplayer',
							'Key'    => $folderName . '/' . $newfilename,
							'Body'   => $fileData
						]);

						$this->common_m->updateQuery(array(
							'table_name' => 'ADMIN',
							'update_columns' => array('admin_photo' => $result_picture['pic_seq']),
							'where_case' => array('admin_no' => $this->admin_m->getAdminId())
						));
					} catch (S3Exception $e) {
					}

					unlink("/data/noble/public_html/uploads/temporary/" . $picture['store_name']);
				}
			} else {
				// 업로드에 실패한 경우
				$result = array(
					'result' => 'FAILURE',
					'message' => '업로드 실패!!\n지정된 확장자가 아니거나, 파일용량이 제한값보다 클 수 있습니다.'
				);
			}
		}

		echo json_encode($result);
	}


	private function loadBoard($board_id)
	{
		$data['boardData'] = $this->board_m->selectBoardDetail(array('board_id' => $board_id));
		if ($data['boardData']['board_use_category'] == "Y")
			$data['categoryData'] = $this->board_m->selectCategoryList(array('board_id' => $board_id));

		$this->load->view('admin/board_list_v', $data);
	}


	// 게시물 작성 화면
	public function boardupload()
	{

		$board_id = $this->uri->segment(3);
		$post_no = $this->uri->segment(4);

		$data['boardData'] = $this->board_m->selectBoardDetail(array('board_id' => $board_id));
		if ($data['boardData']['board_use_category'] == "Y")
			$data['categoryData'] = $this->board_m->selectCategoryList(array('board_id' => $board_id));

		if ($post_no > 0) {
			$data['postData'] = $this->board_m->selectPostDetail(array('post_no' => $post_no));
			$data['mode'] = "edit";
		} else {
			$data['mode'] = "new";
		}

		$this->load->view('admin/board_upload_v', $data);
	}


	// 게시물 등록/수정
	public function boardupload_process()
	{
		$this->common_m->allowOnlyAdmin('관리자만 작성하실 수 있습니다.');

		$member = $this->admin_m->selectAdminDetailInfo(array(
			'admin_no' => $this->admin_m->getAdminId()
		));

		$post = array(
			'board_id' => $this->input->post('board_id'),
			'post_title' => $this->input->post('post_title'),
			'post_content' => $this->input->post('post_content'),
			'post_status' => $this->input->post('post_status'),
			'ct_no' => $this->input->post('ct_no'),
			'mem_no' => $member['admin_no'],
			'mem_name' => $member['admin_name']
		);

		$this->common_m->insertAndUpdateThing('POST', 'post_no', $post, 'BOARD_POST', 'thumbnail', '');
	}

	// 게시물 삭제
	public function boardupload_delete()
	{

		$this->common_m->allowOnlyAdmin('관리자만 삭제하실 수 있습니다.');

		$selectedNo = explode(",", $this->input->post('selectedNo'));

		$allResult = true;

		foreach ($selectedNo as $post_no) {
			$result = $this->common_m->deleteQuery(array(
				'table_name' => 'BOARD_POST',
				'where_case' => array('post_no' => $post_no),
				'return_value' => array('board_id' => $this->input->post('board_id'))
			));
			if (!$result) $allResult = false;
		}

		if ($allResult) {

			if (is_array($this->input->post('selectedNo'))) {
				$arr = $this->input->post('selectedNo');
				for ($i = 0; $i < count($arr); $i++) {
					$this->picture_m->removePicture(array('pic_owner' => $arr[$i]));
				}
			} else {
				$this->picture_m->removePicture(array('pic_owner' => $this->input->post('selectedNo')));
			}

			echo json_encode(array("result" => "SUCCESS"));
		} else
			echo json_encode(array("result" => "FAILURE", "message" => "삭제 처리시 오류가 발생하였습니다"));
	}


	// 게시물 썸네일 삭제
	public function boardupload_delete_thumbnail()
	{

		$postData = $this->board_m->selectPostDetail(array('post_no' => $this->input->post('post_no')));

		$removeResult = $this->picture_m->removePicture(array(
			'pic_seq' => $postData['post_thumbnail']
		));

		$updatePost = array(
			'table_name' => 'BOARD_POST',
			'update_columns' => array('post_thumbnail' => 0),
			'where_case' => array('post_no' => $this->input->post('post_no'))
		);

		$result = $this->common_m->updateQuery($updatePost);
		echo json_encode($result);
	}


	// 배너 이미지 삭제
	public function boardupload_delete_banner()
	{

		$bannerData = $this->banner_m->selectBannerDetail(array('banner_no' => $this->input->post('banner_no')));

		$removeResult = $this->picture_m->removePicture(array(
			'pic_seq' => $bannerData['banner_img']
		));

		$updatePost = array(
			'table_name' => 'BANNER',
			'update_columns' => array('banner_img' => 0),
			'where_case' => array('banner_no' => $this->input->post('banner_no'))
		);

		$result = $this->common_m->updateQuery($updatePost);
		echo json_encode($result);
	}

	// 게시글 내 이미지 삽입등록
	public function boardupload_image()
	{

		$mode = $this->uri->segment(3);

		switch ($mode) {

			case "remove":
				$removeResult = $this->picture_m->removePicture(array(
					'pic_seq' => $this->uri->segment(4)
				));

				echo json_encode($removeResult);
				break;

			case "upload":

				$this->common_m->setupUploadConfig();

				if ($this->upload->do_upload('picture_img_file')) {
					$upload_data = $this->upload->data();

					$picture = array(
						'pic_div' => $this->input->post("pic_div"),
						'pic_owner' => $this->input->post("post_no"),
						'pic_name' => $upload_data['orig_name'],
						'pic_ext' => strtolower($upload_data['file_ext']),
						'pic_size' => filesize($upload_data['file_path'] . $upload_data['file_name']),
						'pic_width' => $upload_data['image_width'],
						'pic_height' => $upload_data['image_height'],
						'store_path' => $upload_data['file_path'],
						'store_name' => $upload_data['file_name'],
						'store_mem' => $this->admin_m->getAdminId()
					);

					$result = $this->picture_m->insertNewPicture($picture);
					if ($result['result'] == 'SUCCESS') {

						$folderName = "notice";

						$updatePicture = array(
							'table_name' => 'CONTENTS_PICTURE',
							'update_columns' => array('store_path' => $folderName),
							'where_case' => array('pic_seq' => $result['pic_seq'])
						);
						$this->common_m->updateQuery($updatePicture);

						$fileData = file_get_contents(SERVERURL . "/uploads/temporary/" . $picture['store_name']);

						try {
							// Upload data.
							$s3_result = $this->common->s3->putObject([
								'Bucket' => 'noblemrplayer',
								'Key'    => $folderName . '/' . $picture['store_name'],
								'Body'   => $fileData
							]);
						} catch (S3Exception $e) {
						}

						unlink("/data/noble/public_html/uploads/temporary/" . $picture['store_name']);
					}

					echo json_encode($result);
				} else {
					echo json_encode(array(
						'result' => 'FAILURE',
						'message' => "업로드 실패!!\n지정된 확장자가 아니거나, 파일용량이 제한값보다 클 수 있습니다. "
					));
				}

				break;
		}
	}

	// 게시물 상태 변경
	public function boardupload_status()
	{

		$this->common_m->allowOnlyAdmin('관리자만 변경하실 수 있습니다.');

		if (is_array($this->input->post('post_no'))) {
			$arr = $this->input->post('post_no');
			for ($i = 0; $i < count($arr); $i++) {
				$result = $this->updateStatus($this->input->post('board_id'), $arr[$i], $this->input->post('post_status'));
			}
		} else {
			$result = $this->updateStatus($this->input->post('board_id'), $this->input->post('post_no'), $this->input->post('post_status'));
		}

		echo json_encode($result);
	}

	private function updateStatus($board_id, $post_no, $post_status)
	{
		$updatePost = array(
			'table_name' => 'BOARD_POST',
			'update_columns' => array('post_status' => $post_status),
			'where_case' => array('post_no' => $post_no),
			'return_value' => array('board_id' => $board_id)
		);

		$postData = $this->board_m->selectPostDetail(array('post_no' => $post_no));

		// // 이미 발행된 글은 작성시간을 수정하지 않음
		// if($postData['post_status'] != "PUBLISH")
		// 	$updatePost['update_columns']['post_registerdate'] = date("Y-m-d H:i:s",time());

		$result = $this->common_m->updateQuery($updatePost);
		return $result;
	}
}
