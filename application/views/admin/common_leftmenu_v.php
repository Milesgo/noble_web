<?php
	$active_member = "";
	$active_song = "";
	$active_banner = "";
	$active_notice = "";
	$active_purchase = "";
	$active_stat = "";
	$active_monthly = "";

	switch ($this->uri->segment(2)) {
		case 'boardupload':
			switch ($this->uri->segment(3)) {
					case 'banner':
						$active_banner = "m-menu__item--active";
						break;
					case 'notice':
						$active_notice = "m-menu__item--active";
						break;
			}
			break;		
		case 'song':
			$active_song = "m-menu__item--active";
			break;
		case 'banner':
			$active_banner = "m-menu__item--active";
			break;
		case 'notice':
			$active_notice = "m-menu__item--active";
			break;
		case 'purchase':
			$active_purchase = "m-menu__item--active";
			break;
		case 'stat':
			$active_stat = "m-menu__item--active";
			break;
		case 'monthly':
			$active_monthly = "m-menu__item--active";
			break;
	}
?>
	<!-- BEGIN: Left Aside -->
	<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
		<i class="la la-close"></i>
	</button>
	<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
		<!-- BEGIN: Aside Menu -->
		<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
			<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
				<li class="m-menu__item <?=$active_member?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/member" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-users"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									회원관리
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_song?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/song" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-layers"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									곡관리
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_notice?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/notice" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-notes"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									공지관리
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_banner?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/banner" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-layers"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									배너관리
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_purchase?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/purchase" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-piggy-bank"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									결제내역
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_stat?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/stat" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-diagram"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									일/월 회원가입수 통계
								</span>
							</span>
						</span>
					</a>
				</li>

				<li class="m-menu__item <?=$active_monthly?>" aria-haspopup="true" >
					<a href="<?=SERVERURL?>/admin/monthly" class="m-menu__link ">
						<i class="m-menu__link-icon flaticon-diagram"></i>
						<span class="m-menu__link-title">
							<span class="m-menu__link-wrap">
								<span class="m-menu__link-text">
									월별 집계
								</span>
							</span>
						</span>
					</a>
				</li>

			</ul>
		</div>
		<!-- END: Aside Menu -->
	</div>
	<!-- END: Left Aside -->