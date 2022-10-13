<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
		<?php if($col_name) { ?>
			<?php if($col_name == "two") { ?>
					</div>
					<div class="col-md-<?php echo $col_side;?><?php echo ($at_set['side']) ? ' pull-left' : '';?> at-col at-side">
						<?php include_once($is_side_file); // Side ?>
					</div>
				</div>
			<?php } else { ?>
				</div><!-- .at-content -->
			<?php } ?>
			</div><!-- .at-container -->
		<?php } ?>
	</div><!-- .at-body -->

	<?php if(!$is_main_footer) { ?>
		<footer class="at-footer">
				<div class="ft-content">
					<div class="title-wrap">
						<div class="at-container" style="max-width: 1300px;">
							<div class="title">
								<div class="title-01">
									<img src="http://www.koh-a.com/img/logo_pc2.png" style="float:left;">
									<div class="title-float">
										<div class="top">대구본사</div>
										<div class="mid">대구광역시 북구 유통단지로 50 조명관 관리동 크리스탈 B/D 4F</div>
										<div class="bot">TEL:053-383-3001ㅣFAX:053-383-3009</div>
									</div>
									<div class="title-float">
										<div class="top">수출팀</div>
										<div class="mid">서울특별시 강남구 테헤란로78길 14-14,제나(승진)빌딩 5F</div>
										<div class="bot">TEL:02-798-3010ㅣFAX:02-798-3012</div>
									</div>
									<div class="title-float" style="float:none;">
										<div class="top">한국 경주</div>
										<div class="mid">경상북도 경주시 강동면 천강로 920-42</div>
										<div class="bot">TEL:054-762-9470~3ㅣFAX:054-762-5508</div>
									</div>
								</div>
								<div class="title-01" style="margin-left: 210px;">
									<div class="title-float">
										<div class="top">한국의성</div>
										<div class="mid">경상분도 의성군 의성읍 용연1길 40-4</div>
										<div class="bot">TEL:054-833-5951~3ㅣFAX:054-833-5955</div>
									</div>
									<div class="title-float" style="padding-left: 130px; padding-right: 113px;">
										<div class="top">한국창원</div>
										<div class="mid">경남 창원시 성산구 창원대로1144번길 41</div>
										<div class="bot">TEL:055-716-0330ㅣFAX:055-716-0331</div>
									</div>
									<div class="title-float" style="float:none;">
										<div class="top">한국 광주</div>
										<div class="mid">광주광역시 북구 첨단벤처로60번길 20</div>
										<div class="bot">TEL:062-720-2709ㅣFAX:062-720-2709</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ft-last">
							<div>Copyright2020 KOH-A JUNG GONG All rights reserved.</div>
						</div>
					</div>
				</div>
		</footer>
	<?php } ?>
	<!-- .wrapper -->

<div class="at-go">
	<div id="go-btn" class="go-btn">
		<span class="go-top cursor"><i class="fa fa-chevron-up"></i></span>
		<span class="go-bottom cursor"><i class="fa fa-chevron-down"></i></span>
	</div>
</div>

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEMA_URL;?>/assets/js/respond.js"></script>
<![endif]-->

<!-- JavaScript -->
<script>
var sub_show = "<?php echo $at_set['subv'];?>";
var sub_hide = "<?php echo $at_set['subh'];?>";
var menu_startAt = "<?php echo ($m_sat) ? $m_sat : 0;?>";
var menu_sub = "<?php echo $m_sub;?>";
var menu_subAt = "<?php echo ($m_subsat) ? $m_subsat : 0;?>";
</script>
<script src="<?php echo THEMA_URL;?>/assets/bs3/js/bootstrap.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/sly.min.js"></script>
<script src="<?php echo THEMA_URL;?>/assets/js/custom.js"></script>
<?php if($is_sticky_nav) { ?>
<script src="<?php echo THEMA_URL;?>/assets/js/sticky.js"></script>
<?php } ?>

<?php echo apms_widget('basic-sidebar'); //사이드바 및 모바일 메뉴(UI) ?>

<?php if($is_designer || $is_demo) include_once(THEMA_PATH.'/assets/switcher.php'); //Style Switcher ?>
