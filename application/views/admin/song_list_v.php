<!DOCTYPE html>
<html lang="ko">
	<?php include "common_tag_v.php"; ?>
	<link href="<?=SERVERURL?>/assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<?php $board_id = "song"; ?>
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
									곡관리
								</h3>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="/admin/song/upload" class="btn btn-info"><span><i class="la la-pencil"></i><span>곡 등록</span></span></a>
								</div>
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
								 			<th class="not-mobile">영상(AR)</th>
											<th class="not-mobile">영상(MR)</th>
											<th class="not-mobile">MP3(AR)</th>
											<th class="not-mobile">MP3(MR)</th>
											<th class="not-mobile">악보 가격</th>
											<th>악기</th>
											<th class="not-mobile">장르</th>
											<th class="not-mobile">중주</th>
											<th class="not-mobile">키</th>
											<th class="not-mobile">가격</th>
											<th class="not-mobile">전체 다운수</th>
 											<th class="none">MP4(AR) 회원</th>
											<th class="none">MP4(MR) 회원</th>
											<th class="none">MP3(AR) 회원</th>
											<th class="none">MP3(MR) 회원</th>
											<th class="none">MP4(AR) 비회원</th>
											<th class="none">MP4(MR) 비회원</th>
											<th class="none">MP3(AR) 비회원</th>
											<th class="none">MP4(MR) 비회원</th> 
											<th class="none">검색필드</th> 
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
		<script src="<?=SERVERURL?>/assets/js/board_song.js" type="text/javascript"></script>	
		        
	</body>
	<!-- end::Body -->
</html>