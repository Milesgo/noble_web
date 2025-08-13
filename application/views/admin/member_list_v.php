<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
	<link href="<?=SERVERURL?>/assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<?php $board_id = "member"; ?>
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
									회원관리
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												어제 기준 가입자수 : <?=number_format($memberYesterday);?>명
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">

							<div class="m-portlet__body">
								
								<!-- begin: Datatable  -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
									<thead>
										<tr>
											<th>순번</th>
											<th>번호</th>
											<th>회원명</th>
											<th class="not-mobile">이메일</th>
											<th class="not-mobile">가입방법</th>
											<th class="not-mobile">보유캐시</th>
											<th>유료종료일자</th>
											<th class="not-mobile">가입일자</th>
											<th class="not-mobile">상태</th>
										</tr>
									</thead>
								</table>

								<input type="hidden" id="board_id" value="<?=$board_id?>">
								<input type="hidden" id="keyword" value="">
								<!--end: Datatable -->
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
        
		<script src="<?=SERVERURL?>/assets/js/admin_kt.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/datatables.bundle.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/board_member.js" type="text/javascript"></script>
        
	</body>
	<!-- end::Body -->
</html>