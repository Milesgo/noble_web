<!DOCTYPE html>
<html lang="ko">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		NOBLE 반주기 관리자 페이지
	</title>
	<meta name="description">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Base Styles -->
	<link href="<?= SERVERURL ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= SERVERURL ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Base Styles -->
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(<?= SERVERURL ?>/assets/images/admin/bg-1.jpg);">
			<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
				<div class="m-login__container">
					<div class="m-login__logo">
						<a href="#">
							<img src="<?= SERVERURL ?>/assets/images/logo_admin.png">
						</a>
					</div>
					<div class="m-login__signin">
						<form class="m-login__form m-form" action="">
							<div class="form-group m-form__group">
								<input class="form-control m-input" type="text" id="admin_id" placeholder="아이디" autocomplete="off">
							</div>
							<div class="form-group m-form__group">
								<input class="form-control m-input m-login__form-input--last" id="admin_password" type="password" placeholder="비밀번호">
							</div>
							<div class="m-login__form-action">
								<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
									로그인
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="<?= SERVERURL ?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?= SERVERURL ?>/assets/js/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="<?= SERVERURL ?>/assets/js/admin_login.js" type="text/javascript"></script>
		<script src="<?= SERVERURL ?>/assets/js/func.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>