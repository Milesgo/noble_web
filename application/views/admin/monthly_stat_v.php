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
				<!-- BEGIN: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title">
									월별 집계
								</h3>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-xl-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__body">								
										<!--begin::Section-->
										<div class="m-section">
											<div class="m-section__content">
												<table class="table">
													<thead>
														<tr>
															<th style='text-align:center;'>
																년/월
															</th>
															<th style='text-align:center;'>
																
															</th>
														</tr>
													</thead>
													<tbody>
													<?php
														for($i=2019; $i<= date("Y",time()); $i++) { 
															$from_month = ($i==2019) ? 5 : 1;
															for($j=$from_month; $j<=12; $j++) { 
																if(strtotime($i."-".$j."-01") > time())
																	break;
													?>
														<tr>
															<th scope='row' style='text-align:center;'><?=sprintf("%4d년 %02d월", $i, $j)?></th>
															<td style='text-align:center;'>
																<a href="/admin/monthly?year=<?=$i?>&month=<?=$j?>" class="btn btn-success m-btn m-btn--icon m-btn--air" ><span>데이터 보기</span></a>	
																<a data-year="<?=$i?>" data-month="<?=$j?>" class="btn_download btn btn-warning m-btn m-btn--icon m-btn--air" ><span>다운로드</span></a>	
															</td>
														</tr>
													<?php
															}
														}
													?>
													</tbody>
												</table>
											</div>
										</div>
										<!--end::Section-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Portlet-->

					</div>
					
				</div>
				<!--end::Portlet-->
			</div>
		</div>
	</div>
</div>
</div>
<!-- end:: Body -->
</div>
<!-- end:: Page -->

			<?php include "common_footer_v.php"; ?>
		
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
        
<script>
	$(document).ready(function() {
		$('.btn_download').on("click", function(t) {
            location.href="https://noble.lemongstory.com/download?board_id=monthly&year="+$(this).data("year")+"&month="+$(this).data("month");
        });
	});	
</script>

	</body>
	<!-- end::Body -->
</html>
