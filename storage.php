<head>
<title>성택이 포폴 저장소</title>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<style>
body{margin:0; font-family: 'Noto Sans KR', sans-serif !important;}
.head-title{
  float: left;
  width: 100%;
  background-image: url(./bg.jpg);
  height: 20vh;
  background-position: center;
  background-repeat-x: no-repeat;
  background-color: #000;
}
.head-container{
  float: left;
  width: 94%;
  margin: 2% 3%;
}
.h-title-left{
  float: left;
  font-size: 50px;
  color: #e2e2e2;
  margin-right: 10px;
}
.h-title-right{
  font-size: 30px;
  color: #ccc;
  float: left;
  margin-top: 27px;
  margin-right: 10px;
}
.h-title-right2{
  font-size: 18px;
  color: #ccc;
  float: left;
  margin-top: 40px;
}
.content-container{
	float: left;
    width: 95%;
    margin: 0 2.5% 0 2.5%;
    display: flex;
    justify-content: space-evenly;
    margin-top: 100px;
	flex-wrap: wrap;
}
.content01{
	float: left;
    width: 500px;
    text-align: center;
    line-height: 50px;
    padding: 20px 15px;
    border: 1px solid #000;
    border-radius: 2%;
    background-color: #959595;
	transition: 0.5s !important;
}
.content01:hover{
	transform: scale(1.1,1.1) !important;
}
.content-image{
	float:left;
}
#content-img:hover{
	//opacity: 0.3;
}
.content02{
	float: left;
    width: 500px;
    text-align: center;
    line-height: 50px;
    padding: 20px 15px;
    border: 1px solid #000;
    border-radius: 2%;
    background-color: #959595;
}
a{color:#000;}
.content-bg{
	float: left;
    width: 100%;
    background-color: #000;
    height: 100vh;
}
.content-text{
	float: left;
    width: 100%;
}
.text01{
	font-size: 18px;
    font-weight: bold;
}
.text01 b{
	font-weight: 400;
    color: #cbcbcb;
}
#frame{
	width:500px;
	height:275px;
	transition: transform 200ms;
}
#card{
	box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
	transition-duration: 250ms;
	transition-property: transform, box-shadow;
	transition-timing-function: ease-out;
}
@media screen and (max-width: 1080px) {
	
}
</style>
</head>

<body>
<script>
  AOS.init();
</script>
	<div class="head-title">
		<div class="head-container">
			<div class="h-title-left">성택이의</div>
			<div class="h-title-right">포트폴리오</div>
			<div class="h-title-right2">저장소</div>
		</div>
	</div>
	<div class="content-bg">
		<div class="content-container">
			<a href="http://sungtaek13.dothome.co.kr/" target="_blank">
				<div data-aos="fade-up" data-aos-duration="2000" class="content01" style="float:left;">
					<div class="content-image" id="content-img"><img src="./koa.png" style="width:500px;"/></div>
					<div class="content-text">
						<div class="text01">제목 <b>고아정공</b></div>
						<div class="text01">언어 <b>PHP-7.0.21 / JAVAScript / Jquery-1.8.3</b></div>
						<div class="text01">마크업 <b>HTML / CSS3</b></div>
						<div class="text01">CMS <b>그누보드 5</b></div>
						<div class="text01">제작기간 <b>약 4주</b></div>
					</div>
				</div>
			</a>
			<a href="http://sungtaek12.dothome.co.kr/" target="_blank">
				<div data-aos="fade-up" data-aos-duration="2000" class="content02" style="float:left;">
					<div class="content-image" id="frame"><img src="./khoa.png" style="width:500px;" id="card"/></div>
					<div class="content-text">
						<div class="text01">제목 <b>코아오토모티브</b></div>
						<div class="text01">언어 <b>PHP-7.0.21 / JAVAScript / Jquery-1.8.3</b></div>
						<div class="text01">마크업 <b>HTML / CSS3</b></div>
						<div class="text01">CMS <b>그누보드 5</b></div>
						<div class="text01">제작기간 <b>약 4주</b></div>
					</div>
				</div>
			</a>
		</div>
	</div>
<script src="./cardFlip.js"></script>
</body>