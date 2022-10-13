<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 위젯 대표아이디 설정
$wid = 'CMBL';

// 게시판 제목 폰트 설정
$font = 'font-16 en';

// 게시판 제목 하단라인컬러 설정 - red, blue, green, orangered, black, orange, yellow, navy, violet, deepblue, crimson..
$line = 'navy';

// 사이드 위치 설정 - left, right
$side = ($at_set['side']) ? 'left' : 'right';

?>

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script>
	$( document ).ready( function() {
	  AOS.init();
	} );
</script>

<style>
	.widget-index .at-main,
	.widget-index .at-side { padding-top:10px; padding-bottom:0px; }
	.widget-index .div-title-underbar { margin-bottom:15px; }
	.widget-index .div-title-underbar span { padding-bottom:4px; }
	.widget-index .div-title-underbar span b { font-weight:500; }
	.widget-index .widget-img img { display:block; max-width:100%;border-radius: 10px; /* 배너 이미지 */ }
	.widget-box { margin-bottom:25px; }
</style>
<video autoplay="autoplay" muted="muted" loop style="width:100%;";>
	<source src="http://www.koh-a.com/img/mv_pc.mp4" type="video/mp4" >
	<source src="video02.ogg" type="video/mp4">
</video>
<div class="ddd">
    <div data-aos="fade-up">
      <img src="http://www.koh-a.com/img/rect_gray.jpg" style="width: 36px; margin-top: -10px;">
	  PRODUCT
    </div>
</div>
<?php echo apms_widget('basic-title', $wid.'-wt1', 'height=400px shadow=4', 'auto=0'); //타이틀 ?>
<div class="bg_url">
	<div class="mian-center-1">
		<img src="http://www.koh-a.com/img/bolt.jpg">
		DIFFERENTIATION
		<img src="http://www.koh-a.com/img/bolt.jpg">
	</div>
	<div class="main-circle-wrap">
		<div data-aos="fade-up" data-aos-delay="500" class="main-01-circle">
			<img src="http://www.koh-a.com/img/main_02_1.png">
			<div class="main-01-circle-menu">
				소형~중대형까지
			</div>
			<div class="main-01-circle-menu2">
				고객요구맞춤생산
			</div>
		</div>
		<div data-aos="fade-up" data-aos-delay="600" class="main-01-circle-sub">
			<img src="http://www.koh-a.com/img/main_02_line.png">
		</div>
		<div data-aos="fade-up" data-aos-delay="700" class="main-01-circle">
			<img src="http://www.koh-a.com/img/main_02_2.png">
			<div class="main-01-circle-menu" style="font-size: 23px; font-weight: 900;">
				자체보유기술
			</div>
		</div>
		<div data-aos="fade-up" data-aos-delay="800" class="main-01-circle-sub">
			<img src="http://www.koh-a.com/img/main_02_line.png">
		</div>
		<div data-aos="fade-up" data-aos-delay="900" class="main-01-circle">
			<img src="http://www.koh-a.com/img/main_02_3.png">
			<div class="main-01-circle-menu">
				Clesn Energy시대를 선도할
			</div>
			<div class="main-01-circle-menu2">
				친환경제품생산
			</div>
		</div>
	</div>
	<div class="main-02-title">
		<div class="main-02-subtitle">GLOBAL OPERATING ACHIEVE LEADERSHIP</div>
	</div>
</div>
	<div class="main-03-title">
		<div class="swiper mySwiper">
		  <div class="swiper-wrapper">
			<div class="swiper-slide"><a href="http://localhost"><img src="http://www.koh-a.com/data/file/partners/thumb-1982435774_qSnOtd78_aaab94130aa4f67df7b3d05ed244c25385ef548d_247x64.png"></a></div>
			<div class="swiper-slide"><a href="http://localhost"><img src="http://www.koh-a.com/data/file/partners/thumb-1982435774_96Vb3ACH_a50db16d3ad22e6fe7085763503ed3a12817289c_247x64.png"></a></div>
			<div class="swiper-slide"><a href="http://localhost"><img src="http://www.koh-a.com/data/file/partners/thumb-1982435774_cqDCOuAa_0960f339c9037a8462dc3452f6ab242e59db414f_247x64.png"></a></div>
		  </div>
		  <div class="swiper-button-next"></div>
		  <div class="swiper-button-prev"></div>
		  <div class="swiper-pagination"></div>
		</div>
	</div>
	<style>
		.swiper-button-next{
		right:25%;
		left:auto;
		}
		.swiper-button-prev{
			left:25%;
			right:auto;
		}
	</style>
   <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });
    </script>

