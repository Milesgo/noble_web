<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
	<link href="<?=SERVERURL?>/assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<?php $board_id = "banner"; ?>
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
									배너관리
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
											<th>배너명</th>
											<th class="not-mobile">타겟</th>
											<th>등록일</th>
											<th>상태</th>
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

			<!--begin::Modal-->
			<div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">
								배너 순서 조정
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									&times;
								</span>
							</button>
						</div>
						<div class="modal-body">
							<ul id="bannerlist">
						<?php
							foreach($bannerList['resultList'] as $banner) {
						?>
								<li value="<?=$banner['banner_no']?>" style="cursor: pointer;">[<?=substr($banner['banner_registerdate'], 0, 10)?>] <?=$banner['banner_name']?></li>
						<?php											
							} 	
						?>											

							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								닫기
							</button>
							<button id="btnSaveOrder" type="button" class="btn btn-primary">
								저장하기
							</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Modal-->

			<!-- end:: Body -->
			<?php include "common_footer_v.php"; ?>
		</div>
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
        
		<script src="<?=SERVERURL?>/assets/js/admin_kt.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/datatables.bundle.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/board_banner.js" type="text/javascript"></script>

		<script src="https://SortableJS.github.io/Sortable/Sortable.js"></script>		
        
	</body>
	<!-- end::Body -->
</html>