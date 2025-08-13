<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
    <!-- end::Body -->
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
									개인정보 수정
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
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												개인정보 수정
											</span>
										</a>
									</li>
								</ul>
							</div>						 
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">				 
						<div class="row">
							<div class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<!--begin::Form-->
									<form class="m-form m-form--label-align-right">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														이름
													</label>
													<div class="col-lg-6">
														<input id="admin_name" type="text" class="form-control m-input" value="<?=$member['admin_name']?>">
													</div>
												</div>											 
												<div class="form-group m-form__group row">
													<label class="col-lg-2 col-form-label">
														프로필 사진
													</label>
													<div class="col-lg-6 custom-file">
														<input type="file" class="custom-file-input" id="admin_photo">

<!-- 														<label class="custom-file-label" style="left: inherit; right: inherit; width: 95%;" for="admin_photo">
															파일 선택
														</label>
 -->
														<label class="custom-file-label" for="admin_photo">
															파일 선택
														</label>
													</div>
												</div>
											</div>										 
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<div class="row">
													<div class="col-lg-2"></div>
													<div class="col-lg-6">
														<button id="myinfo_update_submit" class="btn btn-primary">
															확인
														</button>
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
				</div>
			</div>

			<!-- end:: Body -->
			<?php include "common_footer_v.php"; ?>
		</div>
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
    <!--begin::Page Snippets -->
		<script src="<?=SERVERURL?>/assets/js/admin.js" type="text/javascript"></script>
		<!--end::Page Snippets -->		
	</body>
	<!-- end::Body -->
</html>