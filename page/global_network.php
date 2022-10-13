<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
?>
<style>
.hi-top{
	background-image: url(<?php echo G5_IMG_URL ?>/hi_bg.png);
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
	background-image: url(<?php echo G5_IMG_URL ?>/mid_bg.png);
    height: 395px;
    background-size: 100% auto;
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
	padding-top: 25px;
}
.sel-option{
	width: 100px;
    border: none;
    height: 50px;
	border-left: 1px solid #b2b2b2;
}
.sel-con{
	
}
.CEO{
	
}
.CEO_name{
	float: left;
    padding-left: 10px;
    font-size: 20px;
    font-weight: bold;
    margin-top: -3px;
}
.CEO_sign{
	float: left;
    margin-top: -5px;
    padding-left: 10px;
}
<!-- 가져온것 -->
.map-1{
	border: 1px solid #CCCCCC;
    margin: 45px 48px 25px 48px;
}
.address-row {
	float:left;
	width:100%;
}
.address-row-left {
	float: left;
	margin-top: 30px;
	font-size: 24px;
	line-height: 97px;
	font-weight: 900;
	width: 270px;
	text-align: center;
}
.address-row-left img {
	float:right;
}
.address-row-right {
	float: left;
	font-size: 18px;
	padding: 27px 0px 52px 30px;
	line-height: 37px;
	padding-right: 0px;
}
.address-row-arrow {
	float: right;
	line-height: 122px;
	margin-right: 15px;
	cursor:pointer;
}
.address-list{
	float: left;
    width: 100%;
    margin-bottom: 100px;
}
</style>
<script>
	function slideMap(num) {
		if($('#gn-map-'+num).css("display") == "none"){
			$('#gn-map-'+num).slideDown(300);
			//$('#gn-map-'+num).css({"display": "block"});
			$('#arrow-'+num).attr("src", "<?php echo G5_IMG_URL ?>/iframe_icon.png");
		} else {
			$('#gn-map-'+num).slideUp(300);
			$('#arrow-'+num).attr("src", "<?php echo G5_IMG_URL ?>/iframe_icon.png");
		}
	}
</script>
</div>
</div>
</div>
<div class="hi-top">
	<div class="at-container">
		<div class="left-hi">
			<div class="smalls">회사소개</div>
			<div class="big">글로벌 네트워크</div>
		</div>
	</div>
</div>
<div style="border-bottom: 1px solid #b2b2b2;">
	<div class="at-container">
		<a href="<?php echo $at_href['main'];?>"><div style="float:left; height: 50px; width: 50px; float: left; text-align: center; border-left: 1px solid #b2b2b2;"><img src="<?php echo G5_IMG_URL ?>/home.png" style="margin-top: 13px;"></div></a>
		<div class="sel-con">
			<div class="boxx" style="margin-left: 50px;">
			  <div class="selectBox2 ">
				<button class="label">회사소개<img src="<?php echo G5_IMG_URL?>/under_ang_b.png" style="margin-left: 85px; transition: transform 0.3s;"></button>
				<ul class="optionList">
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=rnd_intro"><li class="optionItem">연구개발</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pd_core"><li class="optionItem">제품</li></a>
					<a href="<?php echo G5_BBS_URL?>/page.php?hid=pactory"><li class="optionItem">공장</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=news"><li class="optionItem">뉴스룸</li></a>
					<a href="<?php echo G5_BBS_URL?>/board.php?bo_table=notice"><li class="optionItem">고객지원</li></a>
				</ul>
			  </div>
			</div>
			<div class="boxx" style="margin-left: 250px;">
			  <div class="selectBox2" style="border-left: none;">
				<button class="label">글로벌 네트워크<img src="<?php echo G5_IMG_URL?>/under_ang.png" style="margin-left: 55px; transition: transform 0.3s;"></button>
				<ul class="optionList" style="width: 201px;">
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=hi"><li class="optionItem">CEO 인사말</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=history"><li class="optionItem">연혁</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=vision"><li class="optionItem">비전</li></a>
				  <a href="<?php echo G5_BBS_URL?>/page.php?hid=Business_intro"><li class="optionItem">사업부 소개</li></a>
				</ul>
			  </div>
			</div>
		</div>
	</div>
</div>
<div>
	<div class="at-container">
		<div class="hi-title">글로벌 네트워크</div>
	</div>
	<div class="at-container">
		<div class="address-list">
			<div class="address-row">
				<div class="address-row-left"><img src="<?php echo G5_IMG_URL ?>/uiseong.png" style="width: 270px; height: 164px;"></div>
				<div class="address-row-right">
				<b style="font-size: 25px;">의성공장</b></br>
				<b style="padding-right: 30px;">주소</b> 경북 의성군 의성읍 용연리 682번지</br>
				<b style="padding-right: 30px;">전화</b> 054-833-5951<b style="padding-right: 30px; padding-left: 200px;">팩스</b> 054-833-5955</div>
				<div class="address-row-arrow" onClick="slideMap(1)"><img src="<?php echo G5_IMG_URL ?>/iframe_icon.png" id="arrow-1"/></div>
				<div style="float: right; background-color: #d7d7d7; height: 2px; width: 74.4%;">&nbsp;</div>
			</div>
			<div class="address-map" id="gn-map-1" style="display:none; float:right;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934.24941715038!2d128.6645474616963!3d36.33375092367524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35668262306cc641%3A0xa7a82eb58fd9daae!2z6rK97IOB67aB64-EIOydmOyEseq1sCDsnZjshLHsnY0g7Jqp7Jew66asIDY4Mg!5e0!3m2!1sko!2skr!4v1662616894766!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0; float:right; width:870px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			
			<div class="address-row">
				<div class="address-row-left"><img src="<?php echo G5_IMG_URL ?>/gwangju.png" style="width: 270px; height: 164px;"></div>
				<div class="address-row-right">
				<b style="font-size: 25px;">광주공장</b></br>
				<b style="padding-right: 30px;">주소</b> 광주 북구 첨단벤처로60번길 20 (대촌동)</br>
				<b style="padding-right: 30px;">전화</b> 062-720-2700<b style="padding-right: 30px; padding-left: 200px;">팩스</b> 062-720-2709</div>
				<div class="address-row-arrow"onClick="slideMap(2)"><img src="<?php echo G5_IMG_URL ?>/iframe_icon.png" id="arrow-2"/></div>
				<div style="float: right; background-color: #d7d7d7; height: 2px; width: 74.4%;">&nbsp;</div>
			</div>
			<div class="address-map" id="gn-map-2" style="display:none; float:right;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1629.609218965758!2d126.859872!3d35.225932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x26937b3ffb4ca3da!2z6rOg7JWE7KCV6rO16rSR7KO86rO17J6l!5e0!3m2!1sko!2skr!4v1662617143525!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0; float:right; width:870px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			
			<div class="address-row">
				<div class="address-row-left"><img src="<?php echo G5_IMG_URL ?>/taeju.png" style="width: 270px; height: 164px;"></div>
				<div class="address-row-right">
				<b style="font-size: 25px;">태주공장</b></br>
				<b style="padding-right: 30px;">주소</b> 태주시 해릉구 해릉공업원구 홍업로 96호 표준엄방제3당 보아전자(태주) 유한공사</br>
				<b style="padding-right: 30px;">전화</b> 0523-8608-9171</div>
				<div class="address-row-arrow"onClick="slideMap(3)"><img src="<?php echo G5_IMG_URL ?>/iframe_icon.png" id="arrow-3"/></div>
				<div style="float: right; background-color: #d7d7d7; height: 2px; width: 74.4%;">&nbsp;</div>
			</div>
			<div class="address-map" id="gn-map-3" style="display:none; float:right;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26924.055325390495!2d119.97066200000002!3d32.485878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af760621946d6e6!2sHailing%20Industrial%20Park!5e0!3m2!1sko!2skr!4v1663150568214!5m2!1sko!2skr" width="924" height="450" frameborder="0" style="border:0; float:right; width:870px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		
	</div>
</div>
