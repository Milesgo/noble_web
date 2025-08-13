<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
  <!-- begin::Body -->
	<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<?php include "common_header_v.php"; ?>
			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<?php include "common_leftmenu_v.php"; ?>
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									곡 <?=($mode=="new") ? "등록" : "수정";?>
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="/admin/song" class="m-nav__link">
											<span class="m-nav__link-text">
												곡관리
											</span>
										</a>
									</li>									
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--begin::Portlet-->
						<div class="m-portlet">
							<!--begin::Form-->
							<form class="m-form m-form--fit m-form--label-align-right">
								<input type="hidden" id="song_no" value="<?=($mode=="edit") ? $songData['song_no'] : "0";?>">
								<input type="hidden" id="mode" value="<?=$mode?>">								

								<div class="m-portlet__body">

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡명
										</label>									
										<div class="custom-file col-lg-6">
										<input type="text" class="form-control m-input" id="song_title" value="<?=($mode=="edit") ? $songData['song_title'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡명 (영어)
										</label>									
										<div class="custom-file col-lg-6">
										<input type="text" class="form-control m-input" id="song_title_eng" value="<?=($mode=="edit") ? $songData['song_title_eng'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡명 (일본어)
										</label>									
										<div class="custom-file col-lg-6">
										<input type="text" class="form-control m-input" id="song_title_jpn" value="<?=($mode=="edit") ? $songData['song_title_jpn'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡명 (중국어)
										</label>									
										<div class="custom-file col-lg-6">
										<input type="text" class="form-control m-input" id="song_title_chn" value="<?=($mode=="edit") ? $songData['song_title_chn'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											작곡가
										</label>									
										<div class="custom-file col-lg-3">
										<input type="text" class="form-control m-input" id="song_composer" value="<?=($mode=="edit") ? $songData['song_composer'] : "";?>">
										</div>
										<label class="col-lg-2 col-form-label">
											작사가
										</label>									
										<div class="custom-file col-lg-3">
										<input type="text" class="form-control m-input" id="song_lyricist" value="<?=($mode=="edit") ? $songData['song_lyricist'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											편곡가
										</label>									
										<div class="custom-file col-lg-3">
										<input type="text" class="form-control m-input" id="song_arranger" value="<?=($mode=="edit") ? $songData['song_arranger'] : "";?>">
										</div>
										<label class="col-lg-2 col-form-label">
											저작권협회코드
										</label>									
										<div class="custom-file col-lg-3">
										<input type="text" class="form-control m-input" id="song_copyright_code" value="<?=($mode=="edit") ? $songData['song_copyright_code'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											악기
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_inst_code">
												<option value="">선택하세요</option>
											<?php foreach ($codeInstList as $key => $value) { ?>
												<option value="<?=$value['code_name']?>" <?=(isset($songData) && $songData['song_inst_code'] == $value['code_name']) ? "SELECTED" : "";?>><?=$value['code_text']?></option>
											<?php } ?>																	
											</select>
										</div>
										<label class="col-lg-2 col-form-label ">
											장르
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_genre_code">
												<option value="">선택하세요</option>
											<?php foreach ($codeGenreList as $key => $value) { ?>
												<option value="<?=$value['code_name']?>" <?=(isset($songData) && $songData['song_genre_code'] == $value['code_name']) ? "SELECTED" : "";?>><?=$value['code_text']?></option>
											<?php } ?>
											</select>
										</div>										
									</div>
 

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											중주
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_duet_code">
												<option value="">선택하세요</option>
											<?php foreach ($codeDuetList as $key => $value) { ?>
												<option value="<?=$value['code_name']?>" <?=(isset($songData) && $songData['song_duet_code'] == $value['code_name']) ? "SELECTED" : "";?>><?=$value['code_text']?></option>
											<?php } ?>												
											</select>
										</div>
										<label class="col-lg-2 col-form-label ">
											키
										</label>									
										<div class="col-lg-2">
											<select class="form-control m-input" id="song_key_code">
												<option value="">선택하세요</option>
											<?php foreach ($codeKeyList as $key => $value) { ?>
												<option value="<?=$value['code_name']?>" <?=(isset($songData) && $songData['song_key_code'] == $value['code_name']) ? "SELECTED" : "";?>><?=$value['code_text']?></option>
											<?php } ?>												
											</select>
										</div>		
										<div class="col-lg-1">
											<input type="text" class="form-control m-input" id="song_key_multi" value="<?=($mode=="edit") ? $songData['song_key_multi'] : "";?>">
										</div>																		
									</div>
 
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											가격
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_price">
												<option value="">선택하세요</option>
												<option value="PAID" <?=(isset($songData) && $songData['song_price'] == 'PAID') ? "SELECTED" : "";?>>유료</option>
												<option value="FREE" <?=(isset($songData) && $songData['song_price'] == 'FREE') ? "SELECTED" : "";?>>무료</option>
											</select>
										</div>
										<label class="col-lg-2 col-form-label">
											퍼블릭 도메인
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_ispublicdomain">
												<option value="Y" <?=(isset($songData) && $songData['song_ispublicdomain'] == 'Y') ? "SELECTED" : "";?>>네</option>
												<option value="N" <?=(isset($songData) && $songData['song_ispublicdomain'] == 'N') ? "SELECTED" : "";?>>아니오</option>
											</select>
										</div>
									</div> 

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡 영상 (AR)
										</label>									
										<div class="custom-file col-lg-6" style="margin-left: 15px;">
											<input type="file" class="custom-file-input" id="song_url_ar">
											<label class="custom-file-label" for="song_url_ar">
												파일 선택												
											</label>
										</div>
									</div>


									<?php									
										if(isset($songData) && $songData['song_url_ar']!='') {
									?>
									<div class="form-group m-form__group row" style="padding-top: 0px;">
										<label class="col-lg-2 col-form-label">											
										</label>									
										<div class="col-lg-3">
											이미 등록된 파일이 있습니다.
										</div>
										<div class="col-lg-3">
											<a href="<?=$songData['song_url_ar']?>" target="_blank">보기</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/admin/song/deletefile?song_no=<?=$songData['song_no']?>&file_type=song_url_ar">삭제</a>
										</div>
									</div>
									<?php
									}
									?>		

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡 영상 (MR)
										</label>									
										<div class="custom-file col-lg-6" style="margin-left: 15px;">
											<input type="file" class="custom-file-input" id="song_url_mr">
											<label class="custom-file-label" for="song_url_mr">
												파일 선택
											</label>
										</div>
									</div>
									
									<?php									
										if(isset($songData) && $songData['song_url_mr']!='') {
									?>
									<div class="form-group m-form__group row" style="padding-top: 0px;">
										<label class="col-lg-2 col-form-label">											
										</label>									
										<div class="col-lg-3">
											이미 등록된 파일이 있습니다.
										</div>
										<div class="col-lg-3">
											<a href="<?=$songData['song_url_mr']?>" target="_blank">보기</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/admin/song/deletefile?song_no=<?=$songData['song_no']?>&file_type=song_url_mr">삭제</a>
										</div>
									</div>
									<?php
									}
									?>										
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡 MP3 (AR)
										</label>									
										<div class="custom-file col-lg-6" style="margin-left: 15px;">
											<input type="file" class="custom-file-input" id="song_mp3_ar">
											<label class="custom-file-label" for="song_mp3_ar">
												파일 선택												
											</label>
										</div>
									</div>

									<?php									
										if(isset($songData) && $songData['song_mp3_ar']!='') {
									?>
									<div class="form-group m-form__group row" style="padding-top: 0px;">
										<label class="col-lg-2 col-form-label">											
										</label>									
										<div class="col-lg-3">
											이미 등록된 파일이 있습니다.
										</div>
										<div class="col-lg-3">
											<a href="<?=$songData['song_mp3_ar']?>" target="_blank">보기</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/admin/song/deletefile?song_no=<?=$songData['song_no']?>&file_type=song_mp3_ar">삭제</a>
										</div>
									</div>
									<?php
									}
									?>		

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											곡 MP3 (MR)
										</label>									
										<div class="custom-file col-lg-6" style="margin-left: 15px;">
											<input type="file" class="custom-file-input" id="song_mp3_mr">
											<label class="custom-file-label" for="song_mp3_mr">
												파일 선택												
											</label>
										</div>
									</div>							
									
									<?php									
										if(isset($songData) && $songData['song_mp3_mr']!='') {
									?>
									<div class="form-group m-form__group row" style="padding-top: 0px;">
										<label class="col-lg-2 col-form-label">											
										</label>									
										<div class="col-lg-3">
											이미 등록된 파일이 있습니다.
										</div>
										<div class="col-lg-3">
											<a href="<?=$songData['song_mp3_mr']?>" target="_blank">보기</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/admin/song/deletefile?song_no=<?=$songData['song_no']?>&file_type=song_mp3_mr">삭제</a>
										</div>
									</div>
									<?php
									}
									?>	

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											PDF
										</label>									
										<div class="custom-file col-lg-6" style="margin-left: 15px;">
											<input type="file" class="custom-file-input" id="song_pdf">
											<label class="custom-file-label" for="song_pdf">
												파일 선택												
											</label>
										</div>
									</div>							

									<?php									
										if(isset($songData) && $songData['song_pdf']!='') {
									?>
									<div class="form-group m-form__group row" style="padding-top: 0px;">
										<label class="col-lg-2 col-form-label">											
										</label>									
										<div class="col-lg-3">
											이미 등록된 파일이 있습니다.
										</div>
										<div class="col-lg-3">
											<a href="<?=$songData['song_pdf']?>" target="_blank">보기</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/admin/song/deletefile?song_no=<?=$songData['song_no']?>&file_type=song_pdf">삭제</a>
										</div>
									</div>
									<?php
									}
									?>	

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											악보 가격
										</label>									
										<div class="custom-file col-lg-3">
										<input type="text" class="form-control m-input" id="song_pdfprice" value="<?=($mode=="edit") ? $songData['song_pdfprice'] : "2000";?>">
										<input type="hidden" id="song_oldpdfprice" value="<?=($mode=="edit") ? $songData['song_pdfprice'] : "0";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											태그
										</label>									
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_1" value="<?=($mode=="edit") ? $songData['song_keyword_1'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_2" value="<?=($mode=="edit") ? $songData['song_keyword_2'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_3" value="<?=($mode=="edit") ? $songData['song_keyword_3'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_4" value="<?=($mode=="edit") ? $songData['song_keyword_4'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_5" value="<?=($mode=="edit") ? $songData['song_keyword_5'] : "";?>">
										</div>
									</div>
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
										</label>									
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_6" value="<?=($mode=="edit") ? $songData['song_keyword_6'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_7" value="<?=($mode=="edit") ? $songData['song_keyword_7'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_8" value="<?=($mode=="edit") ? $songData['song_keyword_8'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_9" value="<?=($mode=="edit") ? $songData['song_keyword_9'] : "";?>">
										</div>
										<div class="col-lg-2">
											<input type="text" class="form-control m-input" id="song_keyword_10" value="<?=($mode=="edit") ? $songData['song_keyword_10'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											공개여부
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="song_islive">
												<option value="Y" <?=(isset($songData) && $songData['song_islive'] == 'Y') ? "SELECTED" : "";?>>공개</option>
												<option value="N" <?=(isset($songData) && $songData['song_islive'] == 'N') ? "SELECTED" : "";?>>비공개</option>
											</select>
										</div>
									</div> 

								</div>

								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 text-center">
												<button type="button" id="song_upload_publish" class="btn btn-brand">확인</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Portlet-->
					</div>
				</div>
			</div>
			<!-- end:: Body -->


			<?php include "common_footer_v.php"; ?>
		</div>
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
        <!--begin::Page Resources -->
		<script src="<?=SERVERURL?>/assets/js/summernote-ko-KR.js" type="text/javascript"></script>		
		<script src="<?=SERVERURL?>/assets/js/upload_song.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/sweetalert2.js" type="text/javascript"></script>
		<!--end::Page Resources -->

		<!--Polo Javascript :: 팝업 -->
		<script src="<?=SERVERURL?>/assets/polo/plugins.js"></script>
		<script src="<?=SERVERURL?>/assets/polo/functions.js"></script> 

	</body>
	<!-- end::Body -->
</html>
