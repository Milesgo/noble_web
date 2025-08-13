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
									<?=$boardData['board_name']?>
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
											<th>순번</th>
											<th>번호</th>
											<th>제목</th>
											<th>작성일</th>
											<th class="not-mobile">상태</th>
											<th class="not-mobile">작성자</th>
										</tr>
									</thead>
								</table>
								<!--end: Datatable -->

								<!--begin: Datatable -->
								<div class="m_datatable" id="datatable"></div>
								<input type="hidden" id="board_id" value="<?=$boardData['board_id']?>">
								<input type="hidden" id="keyword" value="">
								<input type="hidden" id="status" value="">
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
		<script src="<?=SERVERURL?>/assets/js/board_<?=$board_id?>.js" type="text/javascript"></script>
		<!--end::Page Resources -->
	</body>
	<!-- end::Body -->
</html>