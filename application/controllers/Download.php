<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Download extends CI_Controller {

	function __construct() {
		parent::__construct() ;
		$this->load->model(array('board_m', 'banner_m', 'member_m','song_m', 'purchase_m'));
	}

	public function index()
	{
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();

		$board_id = $this->input->get("board_id");
		$keyword = $this->input->get("keyword");
		$status = $this->input->get("status");
		
		switch ($board_id) {
			case 'member':

				$sheet->setCellValue('A1', '순번')
					->setCellValue('B1', '회원명')
					->setCellValue('C1', '이메일')
					->setCellValue('D1', '가입방법')
					->setCellValue('E1', '보유캐시')
					->setCellValue('F1', '유료 종료일자')
					->setCellValue('G1', '가입일자')
					->setCellValue('H1', '상태');

				$searchParam = array(
					'searchKeyfield' => 'all',
					'searchKeyword' => $keyword,
					'rowNumber' => 99999999
				);

				$postList = $this->member_m->selectMemberList($searchParam) ;

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$idx = $postList['pageInfo']['totalCount'] - ($postList['pageInfo']['pageNumber']-1) * $postList['pageInfo']['rowNumber'] - $i;

					$post = $postList['resultList'][$i];

                    switch($post['mem_jointype']) { 
                        case "EMAIL":
                            $mem_jointype = "이메일";
                            break;
                        case "KAKAO":
                            $mem_jointype = "카카오톡";
                            break;
                        case "GOOGLE":
                            $mem_jointype = "구글";
                            break;
                        case "NAVER":
                            $mem_jointype = "네이버";
                            break;
                    }

                    $mem_totime = ($post['mem_totime'] == '') ? '무료회원' : $post['mem_totime'];

                    switch($post['mem_islive']) { 
                        case "Y":
                            $mem_islive = "정상회원";
                            break;
                        case "N":
                            $mem_islive = "탈퇴회원";
                            break;
                    }

					$sheet->setCellValue('A'.$row, $idx)
						->setCellValue('B'.$row, $post['mem_name'])
						->setCellValue('C'.$row, $post['mem_email'])
						->setCellValue('D'.$row, $mem_jointype)
						->setCellValue('E'.$row, $post['mem_cash'])
						->setCellValue('F'.$row, $mem_totime)
						->setCellValue('G'.$row, $post['mem_joindate'])
						->setCellValue('H'.$row, $mem_islive);
				}

				break;		

			case 'banner':

				$sheet->setCellValue('A1', '배너명')
					->setCellValue('B1', '타겟')
					->setCellValue('C1', '등록일')
					->setCellValue('D1', '상태');

				$searchParam = array(
					'searchKeyfield' => 'banner_name',
					'keyword' => $keyword,
					'rowNumber' => 99999999
				);

				$postList = $this->banner_m->selectBannerList($searchParam);

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$post = $postList['resultList'][$i];

                    switch($post['banner_target']) { 
                        case "URL":
                            $banner_target = "링크";
                            break;
                        case "SONG":
                            $banner_target = "곡";
                            break;
                        case "NOTICE":
                            $banner_target = "공지사항";
                            break;
                    }

                    switch($post['banner_display']) { 
                        case "Y":
                            $banner_display = "공개";
                            break;
                        case "N":
                            $banner_display = "비공개";
                            break;
                    }

					$sheet->setCellValue('A'.$row, $post['banner_name'])
						->setCellValue('B'.$row, $banner_target)
						->setCellValue('C'.$row, $post['banner_registerdate'])
						->setCellValue('D'.$row, $banner_display);
				}

				break;	

			case 'notice':

				$sheet->setCellValue('A1', '제목')
					->setCellValue('B1', '작성일')
					->setCellValue('C1', '상태')
					->setCellValue('D1', '작성자');


				$searchParam = array(
					'board_id' => $board_id,
					'searchKeyfield' => 'post_title',
					'keyword' => $keyword,
					'status' => $status,
					'rowNumber' => 99999999
				);

				$postList = $this->board_m->selectPostList($searchParam) ;		

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$post = $postList['resultList'][$i];

                    switch($post['post_status']) { 
                        case "PUBLISH":
                            $post_status = "발행";
                            break;
                        case "SAVE":
                            $post_status = "임시저장";
                            break;
                        case "HIDE":
                            $post_status = "비공개";
                            break;
                    }

					$sheet->setCellValue('A'.$row, $post['post_title'])
						->setCellValue('B'.$row, $post['post_registerdate'])
						->setCellValue('C'.$row, $post_status)
						->setCellValue('D'.$row, $post['mem_name']);
				}

				break;

			case 'song':

				$sheet->setCellValue('A1', '번호')
					->setCellValue('B1', '제목')
					->setCellValue('C1', '영상 (AR)')
					->setCellValue('D1', '영상 (MR)')
					->setCellValue('E1', 'MP3 (AR)')
					->setCellValue('F1', 'MP3 (MR)')
					->setCellValue('G1', '악보 가격')
					->setCellValue('H1', '악기')
					->setCellValue('I1', '장르')
					->setCellValue('J1', '중주')
					->setCellValue('K1', '키')
					->setCellValue('L1', '가격')
					->setCellValue('M1', '전체 다운수')
					->setCellValue('N1', 'MP4(AR) 회원')
					->setCellValue('O1', 'MP4(MR) 회원')
					->setCellValue('P1', 'MP3(AR) 회원')
					->setCellValue('Q1', 'MP3(MR) 회원')
					->setCellValue('R1', 'MP4(AR) 비회원')
					->setCellValue('S1', 'MP4(MR) 비회원')
					->setCellValue('T1', 'MP3(AR) 비회원')
					->setCellValue('U1', 'MP3(MR) 비회원');

				$searchParam = array(
					'searchKeyfield' => 'song_title',
					'keyword' => $keyword,
					'status' => $status,
					'rowNumber' => 99999999
				);

				$postList = $this->song_m->selectSongList($searchParam) ;

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$post = $postList['resultList'][$i];

	                $song_url_ar = ($post['song_url_ar'] == "") ? "미등록" : "등록";
	                $song_url_mr = ($post['song_url_mr'] == "") ? "미등록" : "등록";
	                $song_mp3_ar = ($post['song_mp3_ar'] == "") ? "미등록" : "등록";
	                $song_mp3_mr = ($post['song_mp3_mr'] == "") ? "미등록" : "등록";
	                $song_pdfprice = ($post['song_pdf'] == "") ? "악보없음" : $post['song_pdfprice'];

                    switch($post['song_price']) { 
                        case "PAID":
                            $song_price = "유료";
                            break;
                        case "FREE":
                            $song_price = "무료";
                            break;
                    }

                    $download_total = $post['song_download_ar_member'] + $post['song_download_mr_member']
                    				+ $post['song_download_mp3ar_member'] + $post['song_download_mp3mr_member']
                    				+ $post['song_download_ar_guest'] + $post['song_download_mr_guest']
                    				+ $post['song_download_mp3ar_guest'] + $post['song_download_mp3mr_guest'];

					$sheet->setCellValue('A'.$row, $post['song_no'])
						->setCellValue('B'.$row, $post['song_title'])
						->setCellValue('C'.$row, $song_url_ar)
						->setCellValue('D'.$row, $song_url_mr)
						->setCellValue('E'.$row, $song_mp3_ar)
						->setCellValue('F'.$row, $song_mp3_mr)
						->setCellValue('G'.$row, $song_pdfprice)
						->setCellValue('H'.$row, $post['song_inst_text'])
						->setCellValue('I'.$row, $post['song_genre_text'])
						->setCellValue('J'.$row, $post['song_duet_text'])
						->setCellValue('K'.$row, $post['song_key_text'])
						->setCellValue('L'.$row, $song_price)
						->setCellValue('M'.$row, $download_total)
						->setCellValue('N'.$row, $post['song_download_ar_member'])
						->setCellValue('O'.$row, $post['song_download_mr_member'])
						->setCellValue('P'.$row, $post['song_download_mp3ar_member'])
						->setCellValue('Q'.$row, $post['song_download_mp3mr_member'])
						->setCellValue('R'.$row, $post['song_download_ar_guest'])
						->setCellValue('S'.$row, $post['song_download_mr_guest'])
						->setCellValue('T'.$row, $post['song_download_mp3ar_guest'])
						->setCellValue('U'.$row, $post['song_download_mp3mr_guest']);
				}

				break;	

			case 'purchase':

				$sheet->setCellValue('A1', '상태')
					->setCellValue('B1', '회원명')
					->setCellValue('C1', '이메일')
					->setCellValue('D1', '주문ID')
					->setCellValue('E1', '상품')
					->setCellValue('F1', '결제금액')
					->setCellValue('G1', '기간')
					->setCellValue('H1', '결제일자')
					->setCellValue('I1', '취소일자');

				$searchParam = array(
					'searchKeyfield' => 'all',
					'searchKeyword' => $keyword,
					'includeCancel' => 'Y',
					'rowNumber' => 99999999
				);

				$postList = $this->purchase_m->selectPurchaseList($searchParam) ;	

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$post = $postList['resultList'][$i];

	                $pur_status = ($post['pur_canceldate'] != null) ? "취소" : "정상";
	                $mem_name = ($post['mem_name'] != null) ? $post['mem_name'] : "비회원";

                    switch($post['product_id']) { 
	                    case "noble_subscription":
	                        $product_id = "월정액 (".$post['num_pay']."회차)";
	                        break;
	                    case "noble_6":
	                        $product_id = "6개월";
	                        break;
	                    case "noble_12":
	                        $product_id = "12개월";
	                        break;
	                    case "noblecash_10000":
	                        $product_id = "10,000캐시";
	                        break;
	                    case "noblecash_30000":
	                        $product_id = "30,000캐시";
	                        break;
	                    case "noblecash_50000":
	                        $product_id = "50,000캐시";
	                        break;
                    }

                    $pur_price = $post['pur_price'] . "원";

                    switch ($post['product_id']) {
	                    case "noble_subscription":
	                    case "noble_6":
	                    case "noble_12":
	                        $acc_period = substr($post['acc_fromtime'], 0, 10) . " ~ " . substr($post['acc_totime'], 0, 10);
	                        break;
	                    default:
	                        $acc_period = "-";
	                        break;
                    }

                    $post['pur_regdate'] = ($post['num_pay']==1) ? $post['pur_regdate'] : "자동결제";

					$sheet->setCellValue('A'.$row, $pur_status)
						->setCellValue('B'.$row, $mem_name)
						->setCellValue('C'.$row, $post['mem_email'])
						->setCellValue('D'.$row, $post['order_id'])
						->setCellValue('E'.$row, $product_id)
						->setCellValue('F'.$row, $pur_price)
						->setCellValue('G'.$row, $acc_period)
						->setCellValue('H'.$row, $post['pur_regdate'])
						->setCellValue('I'.$row, $post['pur_canceldate']);
				}

				break;	

			case 'monthly':

				$sheet->setCellValue('A1', '번호')
					->setCellValue('B1', '제목')
					->setCellValue('C1', '영상 (AR)')
					->setCellValue('D1', '영상 (MR)')
					->setCellValue('E1', 'MP3 (AR)')
					->setCellValue('F1', 'MP3 (MR)')
					->setCellValue('G1', '악보 가격')
					->setCellValue('H1', '악기')
					->setCellValue('I1', '장르')
					->setCellValue('J1', '중주')
					->setCellValue('K1', '키')
					->setCellValue('L1', '작사')
					->setCellValue('M1', '작곡')
					->setCellValue('N1', '편곡자')
					->setCellValue('O1', '퍼블릭도메인여부')
					->setCellValue('P1', '저작권협회코드')					
					->setCellValue('Q1', '가격')
					->setCellValue('R1', '전체 다운수')
					->setCellValue('S1', 'MP4(AR) 다운수')
					->setCellValue('T1', 'MP4(MR) 다운수')
					->setCellValue('U1', 'MP3(AR) 다운수')
					->setCellValue('V1', 'MP3(MR) 다운수')
					->setCellValue('W1', '악보 다운수');

				$postList = $this->song_m->selectMonthlySongListForDownload(array('year'=>$this->input->get("year"), 'month'=>$this->input->get("month"))) ;

				for($i=0; $i<count($postList['resultList']);$i++) { 

					$row = $i+2;

					$post = $postList['resultList'][$i];

	                $song_url_ar = ($post['song_url_ar'] == "") ? "미등록" : "등록";
	                $song_url_mr = ($post['song_url_mr'] == "") ? "미등록" : "등록";
	                $song_mp3_ar = ($post['song_mp3_ar'] == "") ? "미등록" : "등록";
	                $song_mp3_mr = ($post['song_mp3_mr'] == "") ? "미등록" : "등록";
	                $song_pdfprice = ($post['song_pdf'] == "") ? "악보없음" : $post['song_pdfprice'];

                    switch($post['song_price']) { 
                        case "PAID":
                            $song_price = "유료";
                            break;
                        case "FREE":
                            $song_price = "무료";
                            break;
                    }

					$sheet->setCellValue('A'.$row, $post['song_no'])
						->setCellValue('B'.$row, $post['song_title'])
						->setCellValue('C'.$row, $song_url_ar)
						->setCellValue('D'.$row, $song_url_mr)
						->setCellValue('E'.$row, $song_mp3_ar)
						->setCellValue('F'.$row, $song_mp3_mr)
						->setCellValue('G'.$row, $song_pdfprice)
						->setCellValue('H'.$row, $post['song_inst_text'])
						->setCellValue('I'.$row, $post['song_genre_text'])
						->setCellValue('J'.$row, $post['song_duet_text'])
						->setCellValue('K'.$row, $post['song_key_text'])
						->setCellValue('L'.$row, $post['song_lyricist'])
						->setCellValue('M'.$row, $post['song_composer'])
						->setCellValue('N'.$row, $post['song_arranger'])
						->setCellValue('O'.$row, $post['song_ispublicdomain'])
						->setCellValue('P'.$row, $post['song_copyright_code'])
						->setCellValue('Q'.$row, $song_price)
						->setCellValue('R'.$row, $post['cnt_total'])
						->setCellValue('S'.$row, $post['cnt_mp4ar'])
						->setCellValue('T'.$row, $post['cnt_mp4mr'])
						->setCellValue('U'.$row, $post['cnt_mp3ar'])
						->setCellValue('V'.$row, $post['cnt_mp3mr'])
						->setCellValue('W'.$row, $post['cnt_pdf']);
				}

				break;					
		}

		if($this->input->get("year") >0 && $this->input->get("month") > 0) 
			$filename = $board_id . "_" . sprintf("%4d%02d",$this->input->get("year"),$this->input->get("month"));
		else
			$filename = $board_id . "_" . date("Ymd", time());	

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$filename.'.xlsx"');
		$writer = new Xlsx($spreadsheet);
		$writer->save('php://output');
	}
}
