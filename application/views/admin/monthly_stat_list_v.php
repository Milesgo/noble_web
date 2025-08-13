<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
	<link href="<?=SERVERURL?>/assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<?php $board_id = $this->uri->segment(2); ?>
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
								<h3 class="m-subheader__title">
									월별 다운로드 목록 - <?=$year?>년 <?=$month?>월
								</h3>
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
											<th>제목</th>
											<th>가격</th>
											<th>전체 다운수</th>
											<th class="not-mobile">MP4(AR) 다운수</th>
											<th class="not-mobile">MP4(MR) 다운수</th>
											<th class="not-mobile">MP3(AR) 다운수</th>
											<th class="not-mobile">MP3(MR) 다운수</th>
											<th class="not-mobile">악보 다운수</th>
										</tr>
									</thead>
								</table>
								<!--end: Datatable -->

								<!--begin: Datatable -->
								<div class="m_datatable" id="datatable"></div>
								<input type="hidden" id="status" value="">
								<input type="hidden" id="board_id" value="monthly">
								<input type="hidden" id="keyword" value="">
								<input type="hidden" id="year" value="<?=$year?>">
								<input type="hidden" id="month" value="<?=$month?>">
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
        <!--begin::Page Resources -->
		<script src="<?=SERVERURL?>/assets/js/admin_kt.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/datatables.bundle.js" type="text/javascript"></script>

    	<!-- <script src="<?=SERVERURL?>/assets/js/board_common.js" type="text/javascript"></script> -->
		<script src="<?=SERVERURL?>/assets/js/board_monthly_stat.js" type="text/javascript"></script>
		<!--end::Page Resources -->
	</body>
	<!-- end::Body -->
</html>