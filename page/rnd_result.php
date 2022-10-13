<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/rnd_title.png);
	margin-top: -1.3%;
	height: 400px;
	background-size: 100% 100%;
}
.left-hi{
	color: #fff;
	margin-top: 250px;
}
.smalls{
	font-size: 20px;
}
.big{
	font-size: 46px;
    line-height: 50px;
    font-weight: bold;
    padding-top: 13px;
}
.mid-imag{
	background-image: url('<?php echo G5_IMG_URL ?>/slide-02-2-mo.jpg');
    height: 300px;
}
.hi-title{
	padding-top: 100px;
    padding-bottom: 50px;
    font-size: 35px;
    font-weight: bold;
    line-height: 50px;
}
.hi-bt-title{
	font-size: 26px;
    font-weight: bold;
    padding-top: 30px;
	padding-bottom: 20px;
}
.hi-bt-con{
	font-size: 15px;
    font-weight: bold;
}
.hi-bt-text{
	padding-top: 20px;
}
.sel-option{
	width: 100px;
    border: none;
    height: 50px;
	border-left: 1px solid #b2b2b2;
}
.sel-con{
	
}
.his-table{
	width: 100%;
	float: left;
}
.left-title-now{
	float: left;
    font-size: 18px;
    font-weight: bold;
    border-top: 1px solid #222;
    width: 150px;
    padding-top: 15px;
}
.center-title-now{
	float:left;
}
.right-title-now{
	
}
.center-title-li{
	border-top: 1px solid #909090;
    padding: 10px 0px;
}
.right-title-li{
	border-top: 1px solid #ddd;
	padding: 10px 0px;
}
.rnd-title{
	width: 100%;
    float: left;
}
.rnd-title-left-img{
	float: left;
    width: 50%;
}
.rnd-title-right-text{
	float:left;
	padding-left: 80px;
}
.rnd-title-sub{
	padding-top: 20px;
    padding-bottom: 40px;
    border-bottom: 1px solid #b0b0b0;;
    font-size: 15px;
    font-weight: bold;
}
.rnd-title-sub-1{
	padding-top: 40px;
	padding-bottom: 40px;
	border-bottom: 1px solid #b0b0b0;;
	font-size: 13px;
}
.rnd-sub-title{
	color: #95cd4c;
    padding-bottom: 14px;
}
.rnd-content{
    float: left;
    width: 100%;
    padding-bottom: 10%;
}
.content-left{
	float:left;
}
.content-right{
	float:right;
}
.content-sub{
	font-size: 20px;
    font-weight: bold;
	padding-bottom: 30px;
}
.rnd-title-sub-1 li::marker{
	color: #95cd4c;
}
.content-left li::marker{
	color: #95cd4c;
}
.content-ul{
	padding-left: 20px;
	line-height: 25px;
    font-size: 13px;
}
.rnd-result-con{
	padding-top: 40px;
}
.rnd-result-sub-title{
	font-size: 20px;
    font-weight: bold;
}
.rnd-result-left{
	float: left;
    width: 20%;
    font-size: 20px;
    font-weight: bold;
    color: #092971;
    padding-top: 20px;
    border-top: 1px solid #3a3a3a;
	margin-right: 3%;
}
.rnd-result-right{
	float: left;
    width: 75%;
	border-top: 1px solid #b0b0b0;
    padding-top: 30px;
}
.rnd-result-right-ul{
    list-style: none;
    padding-left: 20px;
    margin-bottom: 0px;
    float: left;
    line-height: 30px;
    font-size: 13px;
    font-weight: bold;
	padding-bottom: 30px;
}
.size-of-day{
	float: left;
    font-size: 17px;
    font-weight: bold;
    color: #0a2972;
	line-height: 30px;
}
.rnd-result-cont{
	float: left;
    width: 100%;
    padding: 0px 5% 0px 5%;
}
.rnd-result-left-con{
	float: left;
	width: 26%;
	font-size: 25px;
	font-weight: bold;
	color: #092971;
	padding-top: 55px;
	border-top: 2px solid #3a3a3a;
	margin-right: 3%;
}
.rnd-result-contorl{
	padding-top: 53px;
}
.rnd-result-right-con{
	float: left;
    width: 71%;
    border-top: 1px solid #b0b0b0;
    padding-top: 49px;
    padding-bottom: 42px;
}
.rnd-result-right-inner{
	float:left;
	width:50%;
}
.td-left{
	color: #092971;
    font-size: 18px;
    font-weight: bold;
    padding-top: 3px;
}
.td-right{
	font-size: 15px;
    padding-left: 20px;
    line-height: 30px;
}
.rnd-result-right-inner td {
    vertical-align: top;
}
<!-- 가져온것 -->



<!-- 다시만든것 -->

</style>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">연구개발</div>
			<div class="big">연구성과</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">연구개발<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">회사소개</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">연구성과<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구소 소개</li></a>
				  <a href="<?php echo G5_BBS_URL?>/board.php?bo_table=patent"><li class="optionItem">국내외 특허</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title">연구성과</div>
		<div class="rnd-result-sub-title">제품별 연구개발 실적</div>
		<div class="rnd-result-contorl">
			<div class="rnd-result-left-con">
				<img src="<?php echo G5_IMG_URL?>/rnd_result.png" style="padding-right: 10px;">Motor Core
			</div>
			<div class="rnd-result-right-con">
				<div class="rnd-result-right-inner">
					<table>
						<tbody>
							<tr>
								<td rowspan="3" class="td-left">2019</td>
								<td class="td-right">모터코어의 제조장치 및 제조방법</td>
							</tr>
							<tr>
								<td class="td-right">모터코어 및 모터코어의 제조장치 및 제조방법</td>
							</tr>
							<tr>
								<td class="td-right">모터코어 제조장치</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="rnd-result-right-inner">
					<table>
						<tbody>
							<tr>
								<td rowspan="6" class="td-left">2018</td>
								<td class="td-right">모터코어 제조용 금형</td>
							</tr>
							<tr>
								<td class="td-right">모터코어 제조용 냉각 장치</td>
							</tr>
							<tr>
								<td class="td-right">모터코어 제조용 지그</td>
							</tr>
							<tr>
								<td class="td-right">모터코어 제조용 가열 장치</td>
							</tr>
							<tr>
								<td class="td-right">모터코어의 측면 흔들림 교정장치</td>
							</tr>
							<tr>
								<td class="td-right">촉진제 분사 모듈</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="rnd-result-contorl">
			<div class="rnd-result-left-con">
				<img src="<?php echo G5_IMG_URL?>/rnd_result1.png" style="padding-right: 10px;">Motor
			</div>
			<div class="rnd-result-right-con">
				<div class="rnd-result-right-inner">
					<table>
						<tbody>
							<tr>
								<td rowspan="1" class="td-left">2020</td>
								<td class="td-right">로터 조립체 및 이를 포함하는 일렉트릭 워터 펌프</td>
							</tr>
							<tr>
								<td rowspan="3" class="td-left">2019</td>
								<td class="td-right">로터 조립체 및 이를 포함하는 일렉트릭 워터 펌프</td>
							</tr>
							<tr>
								<td class="td-right">로터 하우징 및 이를 포함하는 모터</td>
							</tr>
							<tr>
								<td class="td-right">로터 및 이를 포함하는 모터</td>
							</tr>
							<tr>
								<td rowspan="1" class="td-left">2018</td>
								<td class="td-right">브러쉬리스 직류 모터</td>
							</tr>
							<tr>
								<td rowspan="5" class="td-left">2017</td>
								<td class="td-right">브러쉬리스 직류 모터</td>
							</tr>
							<tr>
								<td class="td-right">모터</td>
							</tr>
							<tr>
								<td class="td-right">회전자 및 이를 포함하는 모터</td>
							</tr>
							<tr>
								<td class="td-right">모터 하우징 및 이를 포함한 냉장고용 팬 모터</td>
							</tr>
							<tr>
								<td class="td-right">모터</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="rnd-result-right-inner">
					<table>
						<tbody>
							<tr>
								<td rowspan="2" class="td-left">2014</td>
								<td class="td-right">전동식 워터 펌프의 모터 접속 구조</td>
							</tr>
							<tr>
								<td class="td-right">스퍼터링 구조를 갖는 전동식 압축기용 모터</td>
							</tr>
							<tr>
								<td rowspan="1" class="td-left">2013</td>
								<td class="td-right">더블로터 및 싱글스테이형 BLDC모터</td>
							</tr>
							<tr>
								<td rowspan="4" class="td-left">2012</td>
								<td class="td-right">더블로터 및 싱글스테이형 BLDC모터</td>
							</tr>
							<tr>
								<td class="td-right">더블로터 및 싱글스테이형 BLDC모터</td>
							</tr>
							<tr>
								<td class="td-right">더블로터 및 싱글스테이형 BLDC모터</td>
							</tr>
							<tr>
								<td class="td-right">더블로터 및 싱글스테이형 BLDC모터</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="rnd-result-contorl">
			<div class="rnd-result-left-con" style="border-bottom: 2px solid #3a3a3a; padding-bottom: 50px;">
				<img src="<?php echo G5_IMG_URL?>/rnd_result2.png" style="padding-right: 10px;">PCB Controller
			</div>
			<div class="rnd-result-right-con" style="border-bottom: 1px solid #b0b0b0; margin-bottom: 102px;">
				<div class="rnd-result-right-inner">
					<table>
						<tbody>
							<tr>
								<td rowspan="2" class="td-left">2018</td>
								<td class="td-right">차량의 전원 관리 방법 및 장치</td>
							</tr>
							<tr>
								<td class="td-right">IBS를 이용한 차량의 전원 관리 방법 및 장치</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php /*<div class="rnd-result-con">
			<div class="rnd-result-left">
				<img src="<?php echo G5_IMG_URL?>/rnd_result.png" style="padding-right: 10px;">Motor Core
			</div>
			<div class="rnd-result-right">
				<div class="rnd-result-cont">
					<div class="size-of-day">2019</div>
					<div>
						<ul class="rnd-result-right-ul">
							<li>모터코어의 제조장치 및 제조방법</li>
							<li>모터코어 및 모터코어의 제조장치 및 제조방법</li>
							<li>모터코어 제조장치</li>
						</ul>
					</div>
					<div class="size-of-day" style="padding-left: 15%;">2018</div>
					<div>
						<ul class="rnd-result-right-ul">
							<li>모터코어 제조용 금형</li>
							<li>모터코어 제조용 냉각 장치</li>
							<li>모터코어 제조용 지그</li>
							<li>모터코어 제조용 가열 장치</li>
							<li>모터코어의 측면 흔들림 교정장치</li>
							<li>촉진제 분사 모듈</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="rnd-result-con">
			<div class="rnd-result-left">
				<img src="<?php echo G5_IMG_URL?>/rnd_result1.png" style="padding-right: 10px;">Motor
			</div>
			<div class="rnd-result-right">
				<div class="rnd-result-cont">
					<div class="size-of-day"><p>2020</p><p>2019</p><p style="padding-top: 60px;">2018</p><p>2017</p></div>
					<div>
						<ul class="rnd-result-right-ul">
							<li>로터 조립체 및 이를 포함하는 일렉트릭 워터 펌프</li>
							<li>로터 조립체 및 이를 포함하는 일렉트릭 워터 펌프</li>
							<li>로터 하우징 및 이를 포함하는 모터</li>
							<li>로터 및 이를 포함하는 모터</li>
							<li>브러쉬리스 직류 모터</li>
							<li>브러쉬 리스 직류 모터</li>
							<li>모터</li>
							<li>회전자 및 이를 포함하는 모터</li>
							<li>모터 하우징 및 이를 포함한 냉장고용 팬 모터</li>
							<li>모터</li>
						</ul>
					</div>
					<div class="size-of-day" style="padding-left: 15%;"><p>2018</p><p style="padding-top: 30px;">2013</p><p>2012</p></div>
					<div>
						<ul class="rnd-result-right-ul">
							<li>전동식 워터 펌프의 모터 접속 구조</li>
							<li>스퍼터링 구조를 갖는 전동식 압축기용 모터</li>
							<li>더블로터 및 싱글스테이형 BLDC모터</li>
							<li>더블로터 및 싱글스테이형 BLDC모터</li>
							<li>더블로터 및 싱글스테이형 BLDC모터</li>
							<li>더블로터 및 싱글스테이형 BLDC모터</li>
							<li>더블로터 및 싱글스테이형 BLDC모터</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="rnd-result-con">
			<div class="rnd-result-left" style="border-bottom: 1px solid #3a3a3a; padding-bottom: 55px;">
				<img src="<?php echo G5_IMG_URL?>/rnd_result2.png" style="padding-right: 10px;">PCB Controller
			</div>
			<div class="rnd-result-right" style="margin-bottom: 100px; border-bottom: 1px solid #b0b0b0;">
				<div class="rnd-result-cont">
					<div class="size-of-day">2018</div>
					<div>
						<ul class="rnd-result-right-ul">
							<li>차량의 전원 관리 방법 및 장치</li>
							<li>IBS를 이용한 차량의 전원 관리 방법 및 장치</li>
						</ul>
					</div>
				</div>
			</div>
		</div>*/?>
	</div>
</div>
