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
									배너 <?=($mode=="new") ? "등록" : "수정";?>
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
										<a href="/admin/banner" class="m-nav__link">
											<span class="m-nav__link-text">
												배너관리
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
								<input type="hidden" id="banner_no" value="<?=($mode=="edit") ? $bannerData['banner_no'] : "0";?>">
								<input type="hidden" id="mode" value="<?=$mode?>">								

								<div class="m-portlet__body">

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											배너명
										</label>									
										<div class="custom-file col-lg-3 no-horz-padding">
										<input type="text" class="form-control m-input" id="banner_name" value="<?=($mode=="edit") ? $bannerData['banner_name'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											카테고리
										</label>									
										<div class="col-lg-3 no-horz-padding">
											<select class="form-control m-input" id="banner_target">
												<option value="">선택하세요</option>
												<option value="URL" <?=($mode=="edit" && $bannerData['banner_target']=="URL") ? "selected" : "";?>>링크</option>
												<option value="NOTICE" <?=($mode=="edit" && $bannerData['banner_target']=="NOTICE") ? "selected" : "";?>>공지사항</option>
												<option value="SONG" <?=($mode=="edit" && $bannerData['banner_target']=="SONG") ? "selected" : "";?>>곡</option>
											</select>
										</div>
									</div>

									<div class="form-group m-form__group row" id="row_url" style="display: none;">
										<label class="col-lg-2 col-form-label">
											링크
										</label>									
										<div class="custom-file col-lg-3 no-horz-padding">
										<input type="text" class="form-control m-input" id="banner_detail_url" value="<?=($mode=="edit") ? $bannerData['banner_detail'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row" id="row_notice" style="display: none;">
										<label class="col-lg-2 col-form-label">
											공지사항
										</label>									
										<div class="col-lg-3 no-horz-padding">
											<select class="form-control m-input" id="banner_detail_notice">
												<option value="">선택하세요</option>
									<?php
										foreach($noticeList['resultList'] as $notice) {			
									?>
												<option value="<?=$notice['post_no']?>" <?=(isset($bannerData) && $notice['post_no']==$bannerData['banner_detail']) ? "selected" : ""?>><?=$notice['post_title']?></option>
									<?php											
										} 	
									?>
											</select>
										</div>
									</div>

									<div class="form-group m-form__group row" id="row_song" style="display: none;">
										<label class="col-lg-2 col-form-label">
											곡
										</label>									
										<div class="col-lg-3 no-horz-padding">
											<select class="form-control m-input m-select2" id="banner_detail_song">
												<option value="">선택하세요</option>
									<?php
										foreach($songList['resultList'] as $song) {			
									?>
												<option value="<?=$song['song_no']?>" <?=(isset($bannerData) && $song['song_no']==$bannerData['banner_detail']) ? "selected" : ""?>><?=$song['song_title']?></option>
									<?php											
										} 	
									?>
											</select>
										</div>
									</div>									

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											배너 이미지
										</label>									
										<div class="custom-file col-lg-3">
											<input type="file" class="custom-file-input" id="banner_img">
											<label class="custom-file-label" for="banner_img">
												파일 선택												
											</label>
										</div>
									</div>
									
									<?php									
										if(isset($bannerData) && $bannerData['banner_img'] > 0) {
									?>
									<div id="img_thumbnail" class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											배너 이미지
										</label>									
										<div class="col-lg-4">
	                    <div class="portfolio-item pf-illustrations pf-uielements pf-media">
	                        <div class="portfolio-item-wrap">
	                            <div class="portfolio-image">
	                                <a href="#"><img src="<?=UPLOADURL?>/banner/<?=$bannerData['store_name']?>" alt=""></a>
	                            </div>
	                            <div class="portfolio-description">
	                                <a data-lightbox="image" href="<?=UPLOADURL?>/banner/<?=$bannerData['store_name']?>"><i class="fa fa-search"></i></a>
	                                <a href="#"><i class="fa fa-remove delete-banner-image"></i></a>
	                            </div>
	                        </div>
	                    </div>
										</div>
									</div>
									<?php
									}
									?>											

 									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											공개여부
										</label>									
										<div class="col-lg-3">
											<select class="form-control m-input" id="banner_display">
												<option value="Y" <?=(isset($bannerData) && $bannerData['banner_display'] == 'Y') ? "SELECTED" : "";?>>공개</option>
												<option value="N" <?=(isset($bannerData) && $bannerData['banner_display'] == 'N') ? "SELECTED" : "";?>>비공개</option>
											</select>
										</div>
									</div> 
									
								</div>
								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 text-center">
												<button type="button" id="banner_upload_publish" class="btn btn-brand">확인</button>
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
		<script src="<?=SERVERURL?>/assets/js/upload_banner.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/sweetalert2.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/select2.js" type="text/javascript"></script>
		<!--end::Page Resources -->

		<!--Polo Javascript :: 팝업 -->
		<script src="<?=SERVERURL?>/assets/polo/plugins.js"></script>
		<script src="<?=SERVERURL?>/assets/polo/functions.js"></script> 

	</body>
	<!-- end::Body -->
</html>
