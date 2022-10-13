<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.title-bg-01{
	background-image: url('http://www.koh-a.com/img/bg_rnd.jpg');
    padding-top: 15%;
    text-align: center;
	z-index: 0;
}
.lli{
	list-style: none;
    float: left;
    font-size: 16px;
    font-weight: 900;
    padding: 0px 55px;
	color:#000;
}
.llii{
	list-style: none;
    float: left;
    font-size: 20px;
    font-weight: 900;
    padding: 10px 55px;
	color:#000;
	border: 2px solid #000;
    border-bottom: none;
}
.ullli{
    background-color: #fff;
}
.title-border{
	float: left;
    width: 90%;
    border: 2px solid #9B9B9B;
    margin: 5% 5%;
}
.title-01-text{
	font-size: 32px;
    line-height: 30px;
    font-weight: 900;
    text-align: center;
    margin-top: 12px;
    margin-bottom: 50px;
    float: left;
    width: 100%;
}
.inline-padding{
	float: left;
    width: 100%;
    padding: 30px 5%;
}
.title-rnd3-item{
	float: left;
    width: 33.33333333%;
    padding-right: 15px;
    padding-left: 15px;
}
.item-title{
	height: 96px;
    color: #FFF;
    font-weight: bold;
    font-size: 20px;
    text-align: center;
    padding-top: 37px;
    margin-bottom: 15px;
}
.item-inner{
	border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 50px;
}
.inner-item-property{
	color: #4f4f4f;
    font-weight: bold;
    font-size: 14px;
    line-height: 18px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 6px;
    margin-bottom: 6px;
}
.inner-span{
	color: #818181;
    font-size: 11px;
}
.img-container{
	float: left;
    width: 100%;
}
.item{
	width:33%;
	padding-right: 15px;
    padding-left: 15px;
	float:left;
}
.item-01{
	font-size: 20px;
    font-weight: 900;
    margin-top: 23px;
}
.item-02{
	font-size: 14px;
    margin-top: 6px;
    margin-bottom: 58px
}

</style>

<div style="background-color: #ccc;">
	<div class="title-bg-01">
		<div style="font-size: 50px;font-weight: 900;color: #fff;text-shadow: 3px 3px 3px #000;padding-bottom: 15%;">R&D</div>

	</div>
	<div class="at-container" style="overflow: inherit;">
		<div class="ullli" style="margin-top: -62px;">
			<ul style="display: flex; justify-content: center; padding: 20px 0;">
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=rnd_1" style="margin: 0 80px;"><li class="lli">연구소소개</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=rnd_2" style="margin: 0 80px;" ><li class="lli">연구성과</li></a>
				<a href="http://sungtaek13.dothome.co.kr/bbs/page.php?hid=rnd_3"style="border-bottom: 2px solid; padding-bottom: 15px; margin: 0 80px;margin: 0 80px;"><li class="lli">연구시설</li></a>
			</ul>
		</div>
	</div>
	<div class="at-container" style="background-color: #fff; padding-bottom: 40px;">
		<div class="title-border">
			<div class="inline-padding">
				<div class="title-01-text">연구시설 & 소프트웨어</div>
				<div class="img-container">
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/1.jpg">
						<div class="item-01">만능재료시험기</div>
						<div class="item-02">기계 인장 시험, 압축 시험, 휨 시험</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/2.jpg">
						<div class="item-01">3차원 측정기</div>
						<div class="item-02">부품정밀측정기</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/3.jpg">
						<div class="item-01">진원도 측정기</div>
						<div class="item-02">부품의 진원도&동심도 측정</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/4.jpg">
						<div class="item-01">조도측정기</div>
						<div class="item-02">부품의 표면&거칠기 측정</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/5.jpg">
						<div class="item-01">로크웰 경도 측정기</div>
						<div class="item-02">금속의 경도 측정</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/6.jpg">
						<div class="item-01">마이크로 비커스 경도계</div>
						<div class="item-02">금속의 경도 측정</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/7.jpg">
						<div class="item-01">도금두께 측정기</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/8.jpg">
						<div class="item-01">오븐</div>
						<div class="item-02">재료의 가열 시험</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/9.jpg">
						<div class="item-01">챔버(Chamber)</div>
						<div class="item-02">고온&저온 싸이클 시험</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/10.jpg">
						<div class="item-01">열충격기</div>
						<div class="item-02">고온&저온 열충격 시험</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/11.jpg">
						<div class="item-01">다이나모 테스트 시험기</div>
						<div class="item-02">모터의 성능시험</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/12.jpg">
						<div class="item-01">오실로스코프</div>
						<div class="item-02">시간에 따른 전압 변화 측정</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/13.jpg">
						<div class="item-01">J-Mag 2/3D</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/14.jpg">
						<div class="item-01">Opera 2/3D</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/15.jpg">
						<div class="item-01">Auto Cad</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/16.jpg">
						<div class="item-01">Pro-E</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/17.jpg">
						<div class="item-01">Catia 3D</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/18.jpg">
						<div class="item-01">Ansys</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/19.jpg">
						<div class="item-01">PSIM</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/20.jpg">
						<div class="item-01">OrCAD</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/21.jpg">
						<div class="item-01">Pads 2/3D</div>
						<div class="item-02">&nbsp;</div>
					</div>
					<div class="item">
						<img src="http://www.koh-a.com/img/rnd_facilities/22.jpg">
						<div class="item-01">CAN Viewer</div>
						<div class="item-02">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
