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
									회원 <?=($mode=="new") ? "등록" : "수정";?>
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
										<a href="/admin/member" class="m-nav__link">
											<span class="m-nav__link-text">
												회원관리
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
								<input type="hidden" id="mem_no" value="<?=($mode=="edit") ? $memberData['mem_no'] : "0";?>">
								<input type="hidden" id="mode" value="<?=$mode?>">								

								<div class="m-portlet__body">

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											회원명
										</label>									
										<div class="col-lg-3">
										<input type="text" class="form-control m-input" id="mem_name" value="<?=($mode=="edit") ? $memberData['mem_name'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											이메일
										</label>									
										<div class="col-lg-3">
										<input type="text" class="form-control m-input" id="mem_email" value="<?=($mode=="edit") ? $memberData['mem_email'] : "";?>">
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											비밀번호 
										</label>									
										<div class="col-lg-3">
											<?php
											if($memberData['mem_jointype'] == "EMAIL") { 
											?>
												<button type="button" id="member_reset_password" class="btn btn-secondary">비밀번호 초기화</button>
											<?php
											} else {
											?>
												<label class="col-form-label">
													이메일 가입 시에만 가능합니다.
												</label>
											<?php
											}
											?>
										</div>
									</div>
      						
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											가입방법
										</label>									
										<div class="col-lg-3">
											<label class="col-form-label"><?=$memberData['mem_jointype']?></label>
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											가입일자
										</label>									
										<div class="col-lg-3">
											<label class="col-form-label"><?=$memberData['mem_joindate']?></label>
										</div>
									</div>


									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											정액권 이력
										</label>									
										<div class="col-lg-10">
											<!--begin::Section-->
											<div class="m-section">
												<div class="m-section__content">
													<table class="table m-table m-table--head-separator-primary">
														<thead>
															<tr>
																<th>
																	방식
																</th>
																<th>
																	종류
																</th>
																<th>
																	기간
																</th>
																<th>
																	결제일자
																</th>
																<th>
																	
																</th>
															</tr>
														</thead>
														<tbody>

														<?php
															foreach($membershipList['resultList'] as $membership) {	
												                switch($membership['product_id']) { 
												                    case "noble_subscription":
												                        $product_name = "월정액 (" . $membership['num_pay'] . "회차)";
												                        break;
												                    case "noble_6":
												                        $product_name = "6개월";
												                        break;
												                    case "noble_12":
												                        $product_name = "12개월";
												                        break;
												                }

												                $buyMethod = ($membership['order_id'] == "") ? "수동지급" : "정상결제";
														?>
															<tr>
																<td scope="row">
																	<?=$buyMethod?>
																</td>
																<td>
																	<?=$product_name?>
																</td>
																<td>
																	<?=substr($membership['acc_fromtime'],0,16)?> ~ <?=substr($membership['acc_totime'],0,16)?>
																</td>
																<td>
																	<?=($membership['num_pay'] == 1) ? $membership['pur_regdate'] : '자동결제';?>
																</td>
																<td>
																	<?=($membership['order_id'] == "") ? "<a href='#' class='cancel-purchase' data-pur-no='".$membership['pur_no']."'>취소</a>" : ""?>
																</td>
															</tr>
														<?php											
															} 	
														?>
														</tbody>
													</table>
												</div>
											</div>
											<!--end::Section-->
										</div>
									</div>

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											보유캐시
										</label>									
										<div class="col-lg-3">
											<label class="col-form-label"><?=number_format($memberData['mem_cash'])?></label>
										</div>
									</div>
					
									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											캐시 이력
										</label>									
										<div class="col-lg-10">
											<!--begin::Section-->
											<div class="m-section">
												<div class="m-section__content">
													<table class="table m-table m-table--head-separator-primary">
														<thead>
															<tr>
																<th>
																	방식
																</th>
																<th>
																	종류
																</th>
																<th>
																	결제일자
																</th>
																<th>
																</th>
															</tr>
														</thead>
														<tbody>

														<?php
															foreach($cashList['resultList'] as $cash) {	
												                switch($cash['product_id']) { 
												                    case "noblecash_10000":
												                        $product_name = "10,000캐시";
												                        break;
												                    case "noblecash_30000":
												                        $product_name = "30,000캐시";
												                        break;
												                    case "noblecash_50000":
												                        $product_name = "50,000캐시";
												                        break;
												                }

												                $buyMethod = ($cash['order_id'] == "") ? "수동지급" : "정상결제";
														?>
															<tr>
																<td scope="row">
																	<?=$buyMethod?>
																</td>
																<td>
																	<?=$product_name?>
																</td>
																<td>
																	<?=$cash['pur_regdate']?>
																</td>
																<td>
																	<?=($cash['order_id'] == "") ? "<a href='#' class='cancel-purchase' data-pur-no='".$cash['pur_no']."'>취소</a>" : ""?>
																</td>
															</tr>
														<?php											
															} 	
														?>
														</tbody>
													</table>
												</div>
											</div>
											<!--end::Section-->
										</div>
									</div>		

									<div class="form-group m-form__group row">
										<label class="col-lg-2 col-form-label">
											악보 구매 이력
										</label>									
										<div class="col-lg-10">
											<!--begin::Section-->
											<div class="m-section">
												<div class="m-section__content">
													<table class="table m-table m-table--head-separator-primary">
														<thead>
															<tr>
																<th>
																	제목
																</th>
																<th>
																	가격
																</th>
																<th>
																	결제일자
																</th>
															</tr>
														</thead>
														<tbody>

														<?php
															foreach($scoreList['resultList'] as $score) {	
														?>
															<tr>
																<td scope="row">
																	<?=$score['song_title']?>
																</td>
																<td>
																	<?=number_format($score['song_pdfprice'])?>
																</td>
																<td>
																	<?=$score['log_regdate']?>
																</td>
															</tr>
														<?php											
															} 	
														?>
														</tbody>
													</table>
												</div>
											</div>
											<!--end::Section-->
										</div>
									</div>												      					
									
								</div>
								<div class="m-portlet__foot m-portlet__foot--fit">
									<div class="m-form__actions m-form__actions">
										<div class="row">
											<div class="col-lg-12 text-center">
												<button type="button" id="member_upload_publish" class="btn btn-brand">확인</button>

												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#provide_cash">
													캐시 추가
												</button>
												<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#provide_membership">
													정액권 추가
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
			<!-- end:: Body -->

			<!--begin::Modal-->
			<div class="modal fade" id="provide_cash" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">
								캐시 추가
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									&times;
								</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group m-form__group">
									<label for="product_id">
										추가할 캐시:
									</label>
									<select class="form-control m-input" id="product_id">
										<option value='0'>선택하세요</option>
										<option value='noblecash_10000'>10,000 캐시</option>
										<option value='noblecash_30000'>30,000 캐시</option>
										<option value='noblecash_50000'>50,000 캐시</option>
									</select>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								취소
							</button>
							<button type="button" class="btn btn-primary" id="btnProvideCash">
								추가하기
							</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Modal-->

			<!--begin::Modal-->
			<div class="modal fade" id="provide_membership" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">
								정액권 추가
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									&times;
								</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group m-form__group">
									<label for="product_id_membership">
										추가할 기간:
									</label>
									<select class="form-control m-input" id="product_id_membership">
										<option value='0'>선택하세요</option>
										<option value='noble_subscription'>1개월</option>
										<option value='noble_6'>6개월</option>
										<option value='noble_12'>12개월</option>
									</select>
								</div>
								<div class="form-group">
									<label for="acc_fromdate" class="form-control-label">
										시작일:
									</label>
									<input type="text" class="form-control" id="acc_fromdate" readonly />
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">
								취소
							</button>
							<button type="button" class="btn btn-primary" id="btnProvideMembership">
								추가하기
							</button>
						</div>
					</div>
				</div>
			</div>
			<!--end::Modal-->			

			<?php include "common_footer_v.php"; ?>

		</div>
		<!-- end:: Page -->
		<?php include "common_script_v.php"; ?>
        <!--begin::Page Resources -->
		<script src="<?=SERVERURL?>/assets/js/summernote-ko-KR.js" type="text/javascript"></script>		
		<script src="<?=SERVERURL?>/assets/js/upload_member.js" type="text/javascript"></script>
		<script src="<?=SERVERURL?>/assets/js/sweetalert2.js" type="text/javascript"></script>
		<!--end::Page Resources -->

		<!--Polo Javascript :: 팝업 -->
		<script src="<?=SERVERURL?>/assets/polo/plugins.js"></script>
		<script src="<?=SERVERURL?>/assets/polo/functions.js"></script> 

	</body>
	<!-- end::Body -->
</html>
