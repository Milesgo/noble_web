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
									일/월 회원가입수 통계
								</h3>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-xl-4">
								<div class="form-group m-form__group" style="display: flex;">
									<select class="form-control m-input m-input--air" id="selYear">
										<?php
											for($i=2018; $i<=date("Y",time()); $i++) {
												echo "<option value='".$i."' ".(($i==$year) ? "selected" : "").">".$i."년</option>";
											}
										?>
									</select>
									<select class="form-control m-input m-input--air" id="selMonth">
										<?php
											for($i=1; $i<=12; $i++) {
												echo "<option value='".$i."' ".(($i==$month) ? "selected" : "").">".$i."월</option>";
											}
										?>
									</select>									
									<a id="btn_search" class="btn btn-primary m-btn m-btn--icon m-btn--air" style="color: white; margin-left: 5px;">
										<span>
											조회
										</span>
									</a>									
								</div>		
							</div>
						</div>
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
																날짜
															</th>
															<th style='text-align:center;'>
																가입자수
															</th>
															<th style='text-align:center;'>
																탈퇴자수
															</th>
															<th style='text-align:center;'>
																총 회원수
															</th>
														</tr>
													</thead>
													<tbody>
													<?php
													$numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);
														if(isset($statJoin['stat']) || isset($statOut['stat'])) { 		
															$totalCount = $memberCount['cnt'];
															for ($i=0; $i<$numDays; $i++) {
																$numJoin = 0; $numOut = 0;

																if(isset($statJoin['stat'])) {
																	foreach ($statJoin['stat'] as $stat) { 
																		if($stat['day']==($i+1)) {
																			$numJoin = $stat['cnt'];
																			break;
																		}
																	}
																}

																if(isset($statOut['stat'])) {
																	foreach ($statOut['stat'] as $stat) { 
																		if($stat['day']==($i+1)) {
																			$numOut = $stat['cnt'];
																			break;
																		}
																	}
																}

																$totalCount = $totalCount + $numJoin - $numOut;
													?>
														<tr>
															<th scope='row' style='text-align:center;'><?=sprintf("%4d-%02d-%02d",$year, $month, ($i+1))?></th>
															<td style='text-align:center;'><?=number_format($numJoin)?></td>
															<td style='text-align:center;'><?=number_format($numOut)?></td>
															<td style='text-align:center;'><?=number_format($totalCount)?>명</td>
														</tr>

													<?
															}
														} else {
													?>
														<tr><td colspan="4" style="text-align: center;">조회할 데이터가 없습니다</td></tr>
													<?
														}
													?>
													</tbody>
												</table>
											</div>
										</div>
										<!--end::Section-->
									</div>
								</div>
								<!--end::Portlet-->
							</div>			
						</div>

					</div>
				</div>
			</div>
		</div>

		<?php include "common_footer_v.php"; ?>
		
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
        <!--begin::Page Resources -->
		<script src="<?=SERVERURL?>/assets/js/member_stat.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/select2.js" type="text/javascript"></script>
		<!--end::Page Resources -->

	</body>
	<!-- end::Body -->
</html>
