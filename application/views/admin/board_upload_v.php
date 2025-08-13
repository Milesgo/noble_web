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
									게시물 <?=($mode=="new") ? "작성" : "수정";?>
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
										<a href="/admin/<?=$boardData['board_id']?>" class="m-nav__link">
											<span class="m-nav__link-text">
												<?=$boardData['board_name']?>
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
								
								<input type="hidden" id="board_id" value="<?=$boardData['board_id']?>">
								<input type="hidden" id="post_no" value="<?=($mode=="edit") ? $postData['post_no'] : "0";?>">
								<input type="hidden" id="contentsPictures">
								
								<div class="m-portlet__body">
									<div class="form-group m-form__group">
										<input type="text" class="form-control m-input" id="post_title" placeholder="제목을 입력하세요" value="<?=($mode=="edit") ? $postData['post_title'] : "";?>">
									</div>

									<div class="form-group m-form__group row">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="summernote" id="post_content"><?=($mode=="edit") ? $postData['post_content'] : "";?></div>
<!-- 											<textarea class="form-control m-input" id="post_content" rows="15"><?=($mode=="edit") ? $postData['post_content'] : "";?></textarea>
 -->
										</div>
									</div>

									<?php
										if($boardData['board_use_category'] == "Y") { 
									?>
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											카테고리
										</label>									
										<div class="col-lg-3 no-horz-padding">
											<select class="form-control m-input" id="ct_no">
									<?php
										foreach($categoryData as $category) {			
									?>
												<option value="<?=$category['ct_no']?>" <?=(isset($postData) && $category['ct_no']==$postData['ct_no']) ? "selected" : ""?>><?=$category['ct_name']?></option>
									<?php											
										} 	
									?>
											</select>
										</div>
									</div>
									<?php
									}
									?>

									<?php
										if($boardData['board_use_thumbnail'] == "Y") { 
									?>
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											대표 이미지 등록
										</label>									
										<div class="custom-file col-lg-3">
											<input type="file" class="custom-file-input" id="post_thumbnail">
											<label class="custom-file-label" for="post_thumbnail">
												파일 선택												
											</label>
										</div>
									</div>
									
									<?php									
										if(isset($postData) && $postData['post_thumbnail'] > 0) {
									?>
									<div id="img_thumbnail" class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											현재 대표 이미지
										</label>									
										<div class="col-lg-4">
	                    <div class="portfolio-item pf-illustrations pf-uielements pf-media">
	                        <div class="portfolio-item-wrap">
	                            <div class="portfolio-image">
	                                <a href="#"><img src="<?=UPLOADURL?>/thumbnail/<?=$postData['store_name']?>" alt=""></a>
	                            </div>
	                            <div class="portfolio-description">
	                                <a data-lightbox="image" href="<?=UPLOADURL?>/thumbnail/<?=$postData['store_name']?>"><i class="fa fa-search"></i></a>
	                                <a href="#"><i class="fa fa-remove delete-thumbnail"></i></a>
	                            </div>
	                        </div>
	                    </div>
										</div>
									</div>
									<?php
										}
									}
									?>											
									
								</div>
								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 text-center">
												<?php
													if($mode=="new") { 
													// 새글 작성시 : 작성완료 | 임시저장
												?>
												<button type="button" id="m_post_upload_publish" class="btn btn-brand">작성완료</button>
												<button type="button" id="m_post_upload_save" class="btn btn-secondary">임시저장</button>
												<?php
													} else { 
														// 수정시
														switch ($postData['post_status']) {
															case 'PUBLISH':
																// 공개된글 수정시 : 수정완료 | 숨기기
												?>
												<button type="button" id="m_post_upload_publish" class="btn btn-brand">수정완료</button>
												<button type="button" id="m_post_upload_hide" class="btn btn-secondary">숨기기</button>
												<?php
																break;
															case 'SAVE':
																// 임시저장글 수정시 : 발행하기 | 임시저장
												?>
												<button type="button" id="m_post_upload_publish" class="btn btn-brand">발행하기</button>
												<button type="button" id="m_post_upload_save" class="btn btn-secondary">임시저장</button>
												<?php
																break;
															case 'HIDE':
																// 비공개글 수정시 : 공개하기 | 저장하기									
												?>
												<button type="button" id="m_post_upload_publish" class="btn btn-brand">공개하기</button>
												<button type="button" id="m_post_upload_hide" class="btn btn-secondary">저장하기</button>
												<?php
																break;
														}
													}
												?>

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
		<script src="<?=SERVERURL?>/assets/js/board_common.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/sweetalert2.js" type="text/javascript"></script>
		<!--end::Page Resources -->

		<!--Polo Javascript :: 팝업 -->
		<script src="<?=SERVERURL?>/assets/polo/plugins.js"></script>
		<script src="<?=SERVERURL?>/assets/polo/functions.js"></script> 

	</body>
	<!-- end::Body -->
</html>
