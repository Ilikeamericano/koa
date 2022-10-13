<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if(isset($_COOKIE['lang'])) {
	$lang = $_COOKIE['lang'];
} else {
	setcookie("lang", "ko", time()+86400*30, "/");
	$lang = $_COOKIE['lang'];
}
$manual = array();
$manual['ko'] = 4;
$manual['en'] = 5;
$manual['de'] = 6;
$manual['ja'] = 7;
?>
<style>
	.page-content { line-height:22px; word-break: keep-all; word-wrap: break-word; }
	.page-content p { margin:0 0 15px; padding:0; }
	.page-content .slogan { font-size:25px; letter-spacing:-1px; margin-bottom:15px; line-height:34px; }
	.page-content .slogan i { font-size:17px; vertical-align:top; margin-top:6px; }
	.product-2-1 {		
		text-align: center;
		font-size: 40px;
		font-weight: 900;
		margin-top: 73px;
		line-height: 50px;
	}
	.product-2-2 {
		font-size: 20px;
		margin-top: 33px;
		text-align: center;
		line-height: 35px;
		color: #000;
		margin-bottom: 53px;
	}
	.product-3 {
		background: #000;
		padding-bottom: 80px;
	}
	.p3-item {
		float: left;
		width: 20%;
		color: #FFF;
		font-size: 20px;
		line-height: 31px;
		text-align: center;
	}
	.p3-item img {
		height: 100px;
		margin-bottom: 5px;
		margin-top: 70px;
	}
	.product-4 {
		text-align: center;
	}
	.product-4 img {
		width: 1514px;
		margin-top: 100px;
		margin-bottom: 100px;
	}
	.product-5 {
		background: #F4F4F4;
		text-align: center;
	}
	.p5-title {
		font-size: 50px;
		font-weight: 900;
		margin-top: 72px;
	}
	.p5-content {
		margin-top: 35px;
		font-size: 20px;
	}
	.p5-wadiz {
		background: url('<?php echo G5_IMG_URL;?>/bg_p5.jpg');
		background-size: 100%;
		float: left;
		width: 100%;
		margin-top: 46px;
		margin-bottom: 77px;
	}
	.p5-wadiz-left {
		float: left;
		width: 50%;
	}
	.p5-wadiz-right {
		float: left;
		width: 50%;
	}
	.p5-wadiz-title {		
		color: #FFF;
		margin-top: 130px;
		font-size: 40px;
		font-weight: bold;
		line-height: 38px;
	}
	.p5-wadiz-won {
		font-size: 75px;
		color: #FFF;
		font-weight: 900;
		margin-top: 53px;
		margin-bottom: 162px;
	}
	.pt-1 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_1.jpg');
		background-position: center;
		text-align: center;
		height: 927px;
	}
	.point-title {		
		color: #00A8A6;
		font-size: 18px;
		font-weight: bold;
		padding-top: 104px;
	}
	.point-subtitle {		
		color: #FFF;
		margin-top: 30px;
		font-weight: 900;
		font-size: 51px;
	}
	.pt1-content1 {		
		font-size: 29px;
		color: #FFF;
		font-weight: bold;
		margin-top: 577px;
		margin-bottom: 20px;
	}
	.pt1-content2 {
		color: #FFF;
		font-size: 20px;
		line-height: 34px;
	}
	.pt-2 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_2.jpg');
		background-position: center;
		text-align: center;
		height: 927px;
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.pt2-text {		
		text-align: left;
		position: absolute;
		right: 7%;
		margin-top: 234px;
	}
	.pt2-content {		
		color: #FFF;
		font-weight: bold;
		font-size: 19px;
		margin-top: 101px;
		line-height: 35px;
	}
	.pt-3 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_3.jpg');
		background-position: center;
		text-align: center;
		height: 946px;
		overflow: hidden;
	}
	.pt3-content1 {		
		color: #FFF;
		font-size: 20px;
		margin-top: 47px;
		margin-bottom: 10px;
	}
	.pt3-content2 {
		color: #858484;
		font-size: 14px;
		margin-bottom: 12px;
	}
	.pt-4 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_4_ncb_<?php echo $lang;?>.jpg?ver=20210902');
		background-position: center;
		text-align: center;
		height: 927px;
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.pt-4-info {		
		text-align: left;
		position: absolute;
		right: 6%;
		margin-top: 50px;
	}
	.pt-4-subtitle {		
		font-size: 20px;
		color: #FFF;
		margin-top: 40px;
	}
	.pt-4-grid {
		width: 435px;
		margin-top: 90px;
	}
	.pt-4-item {
		text-align: center;
		float: left;
		width:30%;
		margin: 1%;
		border: 1px solid #252525;
		padding: 13px 6px;
		color: #FFF;
		font-size: 12px;
	}
	.pt-4-item img {
		height: 54px;
		margin-bottom: 5px;
	}
	.pt-5 {
		background: #F3F3F3;
		text-align: center;
	}
	.pt5-content1 {
		font-size: 20px;
		color: #000;
		margin-top: 45px;
	}
	.pt5-grid {
		margin-top: 65px;
	}
	.pt5-item {   
		text-align: left;
		float: left;
		width: 30%;
		margin: 1%;
		color: #000;
		font-size: 15px;
		height: 278px;
	}
	.pt5-item img {
		width: 100%;
	}
	.pt5-content2 {		
		width: 100%;
		float: left;
		text-align: center;
		font-size: 20px;
		margin-top: 27px;
		font-weight: bold;
		margin-bottom: 30px;
	}
	.pt5-content3 {		
		width: 100%;
		float: left;
		margin-bottom: 100px;
	}
	.pt5-btn-1 {
		background: #252525;
		color: #FFF;
		font-size: 25px;
		font-weight: bold;
		padding: 22px;
		float: left;
		cursor: pointer;
		line-height: 30px;
		<?php if($lang=='de') {?>	
		width: 350px;
		margin-left: 18%;
		<?php } else  {?>		
		width: 270px;
		margin-left: 25.5%;
		<?php } ?>
	}
	.pt5-btn-2 {
		background: #00A8A6;
		color: #FFF;
		width: 200px;
		font-size: 25px;
		font-weight: bold;
		padding: 22px;
		display: inline-block;
		margin-left: 35px;
		float: left;
		cursor: pointer;
		line-height: 30px;
		<?php if($lang=='de') {?>	
		width: 350px;
		<?php } else  {?>		
		width: 270px;
		<?php } ?>
	}
	.pt-6-1 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_6_1.jpg');
		background-position: center;
		text-align: center;
		height: 927px;
	}
	.pt-6-2 {
		background: url('<?php echo G5_IMG_URL;?>/bg_pt_6_2.jpg');
		background-position: center;
		text-align: center;
		height: 927px;
	}
	.pt6-1-info {
		text-align: center;
		position: absolute;
		left: 6%;
		margin-top: 267px;
	}
	.pt6-content1 {
		font-size: 20px;
		color: #000;
		margin-top: 80px;
		line-height: 35px;
	}
	.pt-6-1 img {		
		position: absolute;
		right: 0;
		height: 800px;
		margin-top: 83px;
	}
	.pt-6-2 img {
		margin-top: 114px;
	}
	.pt-7 {
		background: #191920;
		float: left;
		width: 100%;
	}
	.pt7-item {
		width: 22%;
		margin: 1%;
		float: left;
		margin-top: 34px;
		margin-bottom: 37px;
	}
	.pt7-item img {
		width: 100%;
	}
	.pt7-item-title {
		color: #FFF;
		font-size: 23px;
		margin-top: 23px;
		font-weight: 900;
		text-align: center;
	}
	.pt7-item-content {
		color: #FFF;
		margin-top: 15px;
		font-size: 15px;
		text-align: center;
	}
	.pt7-item-point {
		color: #00A8A6;
		font-size: 17px;
		font-weight: bold;
		margin-bottom: 15px;
		text-align: center;
	}
	.cp {
		
	}
	.cp-title {			
		text-align: center;
		font-size: 50px;
		font-weight: 900;
		margin-top: 111px;
	}
	.cp img {
		width: 100%;
	}
	.faq-title {
		text-align: center;
		font-size: 50px;
		font-weight: 900;
		margin-top: 111px;
	}
	.faq-q {
		float: left;
		width: 100%;
		border-top: 2px solid #D4D4D4;
		padding: 17px 10px;
		cursor: pointer;
	}
	.faq-a {
		float: left;
		width: 100%;
		border-top: 2px solid #D4D4D4;
		background: #F5F5F5;
		font-size: 14px;
		height: 92px;
		vertical-align: middle;
		display: table-cell;
		padding-left: 125px;
		display: flex;
		align-items: center;
	}
	.icon-q {			
		float: left;
		font-size: 38px;
		font-weight: bold;
		line-height: 50px;
		color: #26AFAD;
		width: 70px;
		margin-right: 45px;
	}
	.cate-q {
		font-size: 15px;
		margin-bottom: 4px;
	}
	.content-q {
		font-size: 20px;
		color: #000;
		margin-top: 3px;
		margin-bottom: 5px;
	}
	.icon-faq {
		float: right;
		margin-top: -33px;
	}
	.faq-list {		
		float: left;
		width: 100%;
		margin-top: 70px;
	}
	.cp-title-com{
		
	}
	.cp-tb-title-left{
		float: left;
		font-size: 22px;
		width: 46%;
		text-align: center;
		color: #fff;
		border: 1px solid #252525;
		background-color: #252525;
		line-height: 40px;
		margin-left: 8%;
	}
	.cp-tb-title-right{
		float: left;
		font-size: 22px;
		width: 46%;
		text-align: center;
		border: 1px solid #252525;
		line-height: 40px;
	}
	.cp-img-left{
		float: left;
		margin-left: 10.03%;
		padding: 30px 100px 30px 30px;
	}
	.cp-img-right{
		float: left;
		margin-left: 10px;
		border-left: 1px solid #c7c7c7;
		padding: 30px 30px 30px 100px;
	}
	.cp-img-container{
		width:100%;
	}
	.com-title{
		float: left;
		width: 100%;
		font-size: 30px;
		line-height: 50px;
		margin-left: 8%;
	}
	.com-title-left{
		float: left;
		width: 46.06%;
	}
	.com-title-right{
		float: left;
		padding-left: 6%;
		width: 40%;
		border-left: 1px solid #c7c7c7;
	}
	.first-name{
		float: left;
		margin-left: 0%;
		color: #040404;
	}
	.sec-name{
		float: left;
		margin-left: 10%;
		color: #9d9d9d;
	}
	.tir-name{
		float: left;
		color: #9d9d9d;
	}
	.for-name{
		float: left;
		margin-left: 20%;
		color: #9d9d9d;
	}
</style>
<div class="page-content">
</div>
</div>
</div>
</div>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
</script>

<div class="at-body" >
<!-- 1 -->
<?php if($lang=='ko') {?>
	<img src="<?php echo G5_IMG_URL;?>/ncb_1_<?php echo $lang;?>.jpg?ver=20210903" style="width: 100%;"/>
	<?php } else if($lang=='en') {?>
    <img src="<?php echo G5_IMG_URL;?>/ncb_1_<?php echo $lang;?>.jpg?ver=20210903" style="width: 100%;"/>
	<?php } else if($lang=='de') {?>
	<img src="<?php echo G5_IMG_URL;?>/ncb_1_<?php echo $lang;?>.jpg?ver=20210903" style="width: 100%;"/>
	<?php } 
    else if($lang=='ja') {?>
	<img src="<?php echo G5_IMG_URL;?>/ncb_1_<?php echo $lang;?>.jpg?ver=20210903" style="width: 100%;"/>
	<?php } ?>    


<!-- 2 -->
<div class="at-container">
	<div class="product-2-1">
        <?php 
        if($lang=='ko') {?>달리면 충전되는 라이더를 위한 배터리<?php } 
        else if($lang=='en') {?>A battery for a rider charged during traveling<?php } 
        else if($lang=='de') {?>Wheelswing, Batterie für Fahrer<?php } 
        else if($lang=='ja') {?>走れば充電ができるライダーのためのバッテリー<?php } 
        ?>
    </div>
	<div class="product-2-2">
        <?php 
        if($lang=='ko') {?>
	    휠스윙은 라이딩하는 동안 전기를 만들어 냅니다.<br/>이 전기는 USB를 통해 스마트폰, 자전거 용품 등 다양한 액세서리를 충전할 수 있습니다.
	    <?php } 
        else if($lang=='en') {?>
	    The Wheelswing generates the power during riding.<br/>
	    This power can charge various accessories such as smartphones and accessories for a bicycle etc. through a USB cable.
	    <?php } 
        else if($lang=='de') {?>
	    die beim Radfahren aufgeladen werden, erzeugt während der Fahrt Strom.<br/>
	    Dieser Strom kann Smartphones und eine Vielzahl von Fahrradzubehör über USB aufladen.
	    <?php } 
        else if($lang=='ja') {?>
	    ホイールスイングはライディングしている間、電気を作り出します。<br/>
	    この電気はUSBを通じてスマホ、自転車用品など多様なアクセサリーを充電することができます。
	    <?php }     
        ?>
    </div>
</div>

<!-- 3 -->
<div class="product-3">
	<div class="at-container">
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item1_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			비접촉<br/>구동 시스템
			<?php } 
            else if($lang=='en') {?>
			Contactless <br/>Driving System
			<?php } 
            else if($lang=='de') {?>
			Kontaktloses<br/>Antriebssystem
			<?php } 
            else if($lang=='ja') {?>
			非接触駆動システム
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item2_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			자가<br/>발전
			<?php } 
            else if($lang=='en') {?>
			Self-Power<br/>Generation
			<?php } 
            else if($lang=='de') {?>
			Selbstgenerierung<br/>　
			<?php } 
            else if($lang=='ja') {?>
			自家発電<br/>　
			<?php } 
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item3_on.png?ver=20210902"/><br/>
			<?php 
            if($lang=='ko') {?>
			배터리<br/>내장
			<?php } 
            else if($lang=='en') {?>
			Built-in<br/>Battery
			<?php } 
            else if($lang=='de') {?>
			Eingebauter Akku <br/>　
			<?php } 
            else if($lang=='ja') {?>
			バッテリー内装 <br/>　
			<?php } 
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item4_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			USB<br/>충전 방식
			<?php } 
            else if($lang=='en') {?>
			USB<br/>Charging Method
			<?php } 
            else if($lang=='de') {?>
			USB-Lademethode<br/>　
			<?php } 
            else if($lang=='ja') {?>
			USB充電方式<br/>　
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item5_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			간단한<br/>설치
			<?php } 
            else if($lang=='en') {?>
			Simple<br/>Installation
			<?php } 
            else if($lang=='de') {?>
			Einfache Installation<br/>　
			<?php } 
            else if($lang=='ja') {?>
			簡単な設置<br/>　
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item6_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			유니버설<br/>브라켓
			<?php } 
            else if($lang=='en') {?>
			Universal<br/>Bracket
			<?php } 
            else if($lang=='de') {?>
			Universalhalterung
			<?php } 
            else if($lang=='ja') {?>
			ユニバーサルブラケット
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item7_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			하이브리드<br/>방식
			<?php } 
            else if($lang=='en') {?>
			Hybrid<br/>Method
			<?php } 
            else if($lang=='de') {?>
			Hybridmethode
			<?php } 
            else if($lang=='ja') {?>
			ハイブリッド方式
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item8_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			가벼운<br/>페달링
			<?php } 
            else if($lang=='en') {?>
			Light<br/>Pedaling
			<?php } 
            else if($lang=='de') {?>
			Leichtes Treten
			<?php } 
            else if($lang=='ja') {?>
			軽いペダリング
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item9_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			신뢰성<br/>시험
			<?php } 
            else if($lang=='en') {?>
			Reliability<br/>Test
			<?php } 
            else if($lang=='de') {?>
			Zuverlässigkeitstest
			<?php } 
            else if($lang=='ja') {?>
			信頼性試験
			<?php }
            ?>
		</div>
		<div class="p3-item">
			<img src="<?php echo G5_IMG_URL;?>/p3_item10_on.png"/><br/>
			<?php 
            if($lang=='ko') {?>
			생활 방수<br/>설계
			<?php } 
            else if($lang=='en') {?>
			Living Waterproofing<br/>Design
			<?php } 
            else if($lang=='de') {?>
			Wasserdichtes<br/>Design
			<?php } 
            else if($lang=='ja') {?>
			生活放水設計
			<?php }
            ?>
		</div>
	</div>
</div>

<!-- 4 -->
<div class="product-4">
	<?php 
    if($lang=='ko') {?>
	<img src="<?php echo G5_IMG_URL;?>/nbc_4.png"/>
	<?php } 
    else if($lang=='en') {?>
	<img src="<?php echo G5_IMG_URL;?>/nbc_4_en.png"/>
	<?php } 
    else if($lang=='de') {?>
	<img src="<?php echo G5_IMG_URL;?>/nbc_4_de.jpg"/>
	<?php } 
    else if($lang=='ja') {?>
	<img src="<?php echo G5_IMG_URL;?>/nbc_4_ja.png"/>
	<?php }
    ?>
</div>

<!-- 5 -->
<div class="product-5">
	<div class="at-container">
		<div class="p5-title">
		<?php 
            if($lang=='ko') {?>Wadiz 크라우드펀딩<?php } 
            else if($lang=='en') {?>Wadiz Crowd Funding<?php } 
            else if($lang=='de') {?>Wadiz Crowdfunding<?php }
            else if($lang=='ja') {?>WADIZ クラウドファンディング<?php }
        ?>
		</div>
		<div class="p5-content">
            <?php 
            if($lang=='ko') {?>세계 무대와 크라우드펀딩을 통해 검증된 우수성<?php } 
            else if($lang=='en') {?>Excellence verified through the global stage and crowd funding<?php } 
            else if($lang=='de') {?>Bewährte Spitzenleistungen auf der Weltbühne und Crowdfunding<?php } 
            else if($lang=='ja') {?>世界舞台とクラウドファンディングで検証された優秀性<?php } 
            ?>
        </div>
		<div class="p5-wadiz">
			<div class="p5-wadiz-left">
				<div class="p5-wadiz-title">
                    <?php 
                    if($lang=='ko') {?>누적 펀딩액<?php } 
                    else if($lang=='en') {?>Accumulated Funding Amount<?php } 
                    else if($lang=='de') {?>kumulierter Finanzierungsbetrag<?php } 
                    else if($lang=='ja') {?>累積ファンディング益<?php }
                    ?>
                </div>
				<div class="p5-wadiz-won">
                    <?php 
                    if($lang=='ko') {?>20,209,500원<?php } 
                    else if($lang=='en') {?>$17,430<?php } 
                    else if($lang=='de') {?>€14,712<?php } 
                    else if($lang=='ja') {?>¥1,916,810<?php } 
                    ?>
                </div>
			</div>
			<div class="p5-wadiz-right">
				<div class="p5-wadiz-title">
                    <?php 
                    if($lang=='ko') {?>누적 서포터<?php } 
                    else if($lang=='en') {?>Accumulated Supporters<?php } 
                    else if($lang=='de') {?>kumulierter Unterstützer<?php } 
                    else if($lang=='ja') {?>累積サポーター<?php } 
                    ?>
                </div>
				<div class="p5-wadiz-won">
                    <?php 
                    if($lang=='ko') {?>197명<?php } 
                    else if($lang=='en') {?>197 people<?php } 
                    else if($lang=='de') {?>197 Personen<?php } 
                    else if($lang=='ja') {?>197人<?php } 
                    ?>
                </div>
			</div>
		</div>
	</div>
</div>

<!-- POINT 1 -->
<div class="pt-1">
	<div class="point-title">POINT 1</div>
	<div class="point-subtitle">
        <?php 
        if($lang=='ko') {?>비접촉 구동 시스템<?php } 
        else if($lang=='en') {?>Contactless Driving System<?php } 
        else if($lang=='de') {?>Kontaktloses Antriebssystem<?php } 
        else if($lang=='ja') {?>非接触駆動システム<?php } 
        ?>
    </div>
	
	<div class="pt1-content1">
        <?php 
        if($lang=='ko') {?>세계 최초! 세계 유일!<?php } 
        else if($lang=='en') {?>The first one in the world! A unique one in the world!<?php } 
        else if($lang=='de') {?>Weltneuheit! Der einzige auf der Welt! <?php } 
        else if($lang=='ja') {?>世界最初! 世界唯一! <?php }
        ?>
    </div>
	<div class="pt1-content2">
	<?php 
    if($lang=='ko') {?>
	자기장으로 구동하고 발전과 충전이 자유로운 비접촉 자전거 발전기입니다.<br/>
	(아라고 원판의 원리를 응용해 마찰 없이 전기를 생산합니다.)
	<?php } 
    else if($lang=='en') {?>
	It is a contactless bicycle generator that is free to generate and charge the power with driving by a magnetic field<br/>
	(It generates the power without friction by applying the principle of the Arago’s disc.)
	<?php } 
    else if($lang=='de') {?>
	Dies ist ein berührungsloser Fahrradgenerator, der vom Magnetfeld angetrieben wird und frei erzeugt und aufgeladen werden kann.<br/>
	(Durch die Anwendung des Prinzips der Arago-Scheibe wird reibungslos Strom erzeugt.)
	<?php } 
    else if($lang=='ja') {?>
	磁場で駆動し、発電と充電が自由な非接触自転車発電気です。<br/>
	(アラゴの円版原理を応用して摩擦なく電気を生産します。)
	<?php }
    ?>
	</div>
</div>

<!-- POINT 2 -->
<div class="pt-2">
	<div class="pt2-text">
		<div class="point-title">POINT 2</div>
		<div class="point-subtitle">
            <?php 
            if($lang=='ko') {?>자가발전<?php } 
            else if($lang=='en') {?>Self-Power Generation<?php } 
            else if($lang=='de') {?>Selbstgenerierung<?php } 
            else if($lang=='ja') {?>自家発電<?php } 
            ?>
        </div>
		<div class="pt2-content">
		<?php 
        if($lang=='ko') {?>
		매번 배터리 잔량을 체크할 필요가 없습니다.<br/>
		야간 라이딩의 필수품인 전조등,후미등이 방전되는<br/>
		위험한 상황에서도 걱정 없이 사용가능합니다.
		<?php } 
        else if($lang=='en') {?>
		You don’t have to check the residual quantity of the battery<br/>all the time. It is available without worries even in the<br/>dangerous situation that headlights and taillights that are<br/>essential items for a riding at night are discharged.
		<?php } 
        else if($lang=='de') {?>
		Der verbleibende Akkuladestand muss nicht jedes Mal<br/>überprüft werden. Es kann auch in gefährlichen Situationen,<br/>in denen die für Nachtfahrten wichtigen Scheinwerfer und<br/>Rücklichter entladen sind, problemlos verwendet werden.
		<?php } 
        else if($lang=='ja') {?>
		毎度バッテリーの残量をチェックする必要がありません。<br/>夜中のライディングの必修品である前照灯, <br/>ストップライトが放電する危険な状況でもご心配なく使用可能です。
		<?php } 
        ?>
		</div>
	</div>
</div>


<div class="pt-3">
	<div class="point-title">POINT 3</div>
	<div class="point-subtitle">
        <?php 
        if($lang=='ko') {?>배터리 내장<?php } 
        else if($lang=='en') {?>Built-in Battery<?php } 
        else if($lang=='de') {?>Eingebauter Akku<?php } 
        else if($lang=='ja') {?>バッテリー 内装<?php } 
        ?>
    </div>
	<div class="pt3-content1">
	<?php 
    if($lang=='ko') {?>
	1,300mAh 배터리가 내장되어 정차 상태에서도 저장된 전기를 이용해 충전할 수 있습니다.
	<?php } 
    else if($lang=='en') {?>
	There is a built-in battery of 1,300mAh so you can charge it by using the stored power even in the state that a bicycle is halted. 
	<?php } 
    else if($lang=='de') {?>
	Der 1.300-mAh-Akku ist eingebaut, sodass das Fahrrad auch beim Anhalten mit dem gespeicherten Strom aufgeladen werden kann.
	<?php } 
    else if($lang=='ja') {?>
	1,300mAhバッテリーが内装されており、停車状態でも貯蔵された電気で充電ができます。
	<?php }
    ?>
    </div>
	<div class="pt3-content2">
	<?php 
    if($lang=='ko') {?>
	(실내에서 시험주행한 데이터로 자전거 RM 종류와 주행 상황에 따라 차이가 있을 수 있습니다.)
	<?php } 
    else if($lang=='en') {?>
	(Since it is the data as a result of indoor trials of traveling, it may vary depending on types of RM of a bicycle and the traveling conditions.)
	<?php } 
    else if($lang=='de') {?>
	(Dies sind Daten aus Indoor-Testfahrten, die je nach Fahrradtyp RM und Fahrbedingungen unterschiedlich sein können.)
	<?php } 
    else if($lang=='ja') {?>
	(室内で試験走行したデータで自転車RIM種類と走行状況によって差がある可能性があります。)
	<?php } 
    ?>
    </div>
	<?php 
    if($lang=='ko') {?>
	<img src="<?php echo G5_IMG_URL;?>/img_pt3.jpg"/>
	<?php } 
    else if($lang=='en') {?>
	<img src="<?php echo G5_IMG_URL;?>/img_pt3_en.jpg"/>
	<?php } 
    else if($lang=='de') {?>
	<img src="<?php echo G5_IMG_URL;?>/img_pt3_de.jpg"/>
	<?php } 
    else if($lang=='ja') {?>
	<img src="<?php echo G5_IMG_URL;?>/img_pt3_ja.jpg?ver=20210902" />
	<?php }
    ?>
</div>

<!-- POINT 3 -->
<div class="pt-4">
	<div class="pt-4-info">
		<div class="point-title">POINT 3</div>
		<div class="point-subtitle">
            <?php 
            if($lang=='ko') {?>USB 충전 방식<?php } 
            else if($lang=='en') {?>USB Charging Method<?php } 
            else if($lang=='de') {?>USB-Lademethode<?php } 
            else if($lang=='ja') {?>USB充電方式<?php } 
            ?>
        </div>
		<div class="pt-4-subtitle">
            <?php 
            if($lang=='ko') {?>USB로 연결해 쉽고 간편하게 충전합니다.<?php } 
            else if($lang=='en') {?>It is charged easily and conveniently through a connection of a USB cable.<?php } 
            else if($lang=='de') {?>Lädt sich einfach und bequem über USB auf.<?php } 
            else if($lang=='ja') {?>USBで接続してたやすくて手軽に充電します。<?php }
            ?>
        </div>
		<div class="pt-4-grid">
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item1.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Smart Phone<?php } 
                else if($lang=='en') {?>Smart Phone<?php } 
                else if($lang=='de') {?>Smartphone <?php }
                else if($lang=='ja') {?>スマートフォン <?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item2.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Auxiliry Battery<?php } 
                else if($lang=='en') {?>Auxiliry Battery<?php } 
                else if($lang=='de') {?>Zusatzbatterie<?php } 
                else if($lang=='ja') {?>補助バッテリー<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item3.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Light<?php } 
                else if($lang=='en') {?>Light<?php } 
                else if($lang=='de') {?>Licht<?php } 
                else if($lang=='ja') {?>ライト<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item4.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>GPS<?php } 
                else if($lang=='en') {?>GPS<?php } 
                else if($lang=='de') {?>GPS<?php }
                else if($lang=='ja') {?>GPS<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item5.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>BT Speaker<?php } 
                else if($lang=='en') {?>BT Speaker<?php } 
                else if($lang=='de') {?>BT-Lautsprecher<?php }
                else if($lang=='ja') {?>BTスピーカー<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item6.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Wireless Earphone<?php } 
                else if($lang=='en') {?>Wireless Earphone<?php } 
                else if($lang=='de') {?>Drahtloser Kopfhörer<?php } 
                else if($lang=='ja') {?>ワイヤレスイヤホン<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item7.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Action camera<?php } 
                else if($lang=='en') {?>Action camera<?php } 
                else if($lang=='de') {?>Action Kamera<?php } 
                else if($lang=='ja') {?>アクションカメラ<?php } 
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item8.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Cycling computer<?php } 
                else if($lang=='en') {?>Cycling computer<?php } 
                else if($lang=='de') {?>Cycling computer<?php } 
                else if($lang=='ja') {?>サイクル·コンピューター<?php }
                ?>
			</div>
			<div class="pt-4-item">
				<img src="<?php echo G5_IMG_URL;?>/pt3_item9.png?ver=20210830"/><br/>
				<?php 
                if($lang=='ko') {?>Navigation<?php } 
                else if($lang=='en') {?>Navigation<?php } 
                else if($lang=='de') {?>Navigation<?php } 
                else if($lang=='ja') {?>ナビゲーション<?php }
                ?>
			</div>
		</div>
	</div>
</div>

<!-- POINT 5 -->
<div class="pt-5">
	<div class="point-title">POINT 4</div>
	<div class="point-subtitle" style="color:#000;">
        <?php 
        if($lang=='ko') {?>설치방법<?php } 
        else if($lang=='en') {?>How to Install<?php } 
        else if($lang=='de') {?>Installationsmethode<?php }
        else if($lang=='ja') {?>設置方法<?php }
        ?>
    </div>
	<div class="pt5-content1">
	<?php 
        if($lang=='ko') {?>
	   전문가의 도움 없이 셀프로 설치 할 수 있습니다.
	   <?php } 
        else if($lang=='en') {?>
	   You can install it by yourself without any assistance from an expert.
	   <?php } 
        else if($lang=='de') {?>
	   Sie können es ohne fachkundige Hilfe selbst installieren.
	   <?php } 
        else if($lang=='ja') {?>
	   専門家の手伝いがなくても自分で設置できます。
	   <?php } 
    ?>
	</div>
	<div class="at-container">
		<div class="pt5-grid">
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_1.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>
				포크와 시트 스테이 두께에 따라 고무패드, 크레센트를 조합해 브라켓을 조립합니다.
				<?php } 
                else if($lang=='en') {?>
				The bracket is assembled by combining the rubber pad and the crescent depending on the thickness of a fork and a seat stay.
				<?php } 
                else if($lang=='de') {?>
				Die Halterung wird durch Kombinieren des Gummipads und des Halbmonds in Abhängigkeit von der Dicke einer Gabel und einer Sitzstrebe zusammengebaut.
				<?php } 
                else if($lang=='ja') {?>
				フォークとシートステイの厚さによってゴムパッド、クレセントを組み立ててブラケットを組み立てます。
				<?php }
                ?>
			</div>
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_2.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>
				설치가이드를 이용해, 설치 위치를 확인합니다.
				<?php } 
                else if($lang=='en') {?>
				You need to check the installation position by using the installation guide.
				<?php } 
                else if($lang=='de') {?>
				Sie müssen die Installationsposition anhand der Installationsanleitung überprüfen.
				<?php } 
                else if($lang=='ja') {?>
				設置ガイドを利用して, 設置位置を確認します。
				<?php }
                ?>
			</div>
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_3.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>
				브라켓을 끼우고 볼트와 너트로 고정합니다.<br/>
				(위치 조정을 위해 느슨하게 조여주세요.)
				<?php } 
                else if($lang=='en') {?>
				The bracket is inserted and fixed by bolts and nuts.<br/>
				(Tighten it loosely to adjust the position.)
				<?php } 
                else if($lang=='de') {?>
				Die Halterung wird mit Schrauben und Muttern eingesetzt und befestigt.<br/>
				(Ziehen Sie es locker an, um die Position anzupassen.)
				<?php } 
                else if($lang=='ja') {?>
				ブラケットを挟み込んでボルトとナットで固定します。<br/>
				(位置調整のために少し緩めてください。)
				<?php }
                ?>
				
			</div>
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_4_n.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>본체를 고정된 브라켓에 끼우고 볼트와 너트로 고정합니다.<?php } 
                else if($lang=='en') {?>The body is inserted into a bracket and fixed by bolts and nuts.<?php } 
                else if($lang=='de') {?>SDer Körper wird in eine Halterung eingesetzt und mit Schrauben und Muttern befestigt.<?php }
                else if($lang=='ja') {?>本体を固定したブラケットに挟み込んでボルトとナットで固定します。<?php }
                ?>
			</div>
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_5_n.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>설치 위치를 조정한 후, 브라켓을 단단하게 고정합니다.<?php } 
                else if($lang=='en') {?>After adjusting the position of installation by using the filler gauge, fix the bracket firmly.<?php } 
                else if($lang=='de') {?>Nachdem Sie die Position der Installation mithilfe der Fühlerlehre eingestellt haben, befestigen Sie die Halterung fest.<?php } 
                else if($lang=='ja') {?>設置位置を調整した後、ブラケットを固く固定します。<?php } 
                ?>
			</div>
			<div class="pt5-item">
				<img src="<?php echo G5_IMG_URL;?>/img_pt5_6_n.jpg"/><br/>
				<?php 
                if($lang=='ko') {?>설치완료<?php } 
                else if($lang=='en') {?>Installation completed<?php } 
                else if($lang=='de') {?>Installation abgeschlossen<?php } 
                else if($lang=='ja') {?>設置完了<?php } 
                ?>
			</div>
		</div>
		<div class="pt5-content2">
            <?php 
            if($lang=='ko') {?>설치 방법 자세히 보러 가기<?php } 
            else if($lang=='en') {?>Go to see how to install in detail<?php } 
            else if($lang=='de') {?>Gehen Sie zur detaillierten Installationsmethode<?php } 
            else if($lang=='ja') {?>設置方法 詳しく見に行く<?php } 
            ?>
        </div>
		<div class="pt5-content3">
			<a href="https://www.youtube.com/playlist?list=PLgT1GAat8a1PxHYs5lkjc5mJji8iOVQXZ" target="_blank"><div class="pt5-btn-1"><?php if($lang=='ko') {?>설치 영상<?php } 
                else if($lang=='en') {?>Video for Installation<?php } 
                else if($lang=='de') {?>Installationsvideo<?php }
                else if($lang=='ja') {?>設置映像<?php }
                ?></div></a>
			<div class="pt5-btn-2" onClick="location.href='<?php echo G5_BBS_URL;?>/board.php?bo_table=manual&wr_id=<?php echo $manual[$lang];?>'"><?php if($lang=='ko') {?>설치 매뉴얼<?php } 
                else if($lang=='en') {?>Installation Manual<?php } 
                else if($lang=='de') {?>Installationshandbuch<?php } 
                else if($lang=='ja') {?>設置マニュアル<?php } 
                ?></div>
		</div>
	</div>
</div>

<!-- POINT 6 -->
<div class="pt-6-1">
	<div class="pt6-1-info">
		<div class="point-title">POINT 5</div>
		<div class="point-subtitle" style="color: #000;"><?php if($lang=='ko') {?>유니버설 브라켓<?php } else if($lang=='en') {?>Universal Bracket<?php } else if($lang=='de') {?>Universalhalterung<?php }
        else if($lang=='ja') {?>ユニバーサルブラケット<?php }    
        ?></div>
		<div class="pt6-content1">
		<?php if($lang=='ko') {?>
		앞바퀴 포크 / 뒷바퀴 시트 스테이 어디든 설치 가능합니다.
		<?php } 
        else if($lang=='en') {?>
		It is available for installation at anywhere such as the fork of the front wheel<br/>/ the seat stay on the rear wheel<?php } 
        else if($lang=='de') {?>es kann überall an der Vorderradgabel<br/>/ Hinterradsitzstrebe montiert werden.<?php } 
        else if($lang=='ja') {?>前ホイールフォーク<br/>/ 裏ホイールシートステイどこにでも設置可能です。<?php }
        ?>
		</div>
	</div>
	<img src="<?php echo G5_IMG_URL;?>/img_pt6_1.png"/>
</div>
<div class="pt-6-2">
	<img src="<?php echo G5_IMG_URL;?>/img_pt6_2.png"/>
</div>

<!-- POINT 7 -->
<div class="pt-7">
	<div class="at-container">
		<div class="pt7-item">
			<div class="pt7-item-point">POINT 6</div>
			<img src="<?php echo G5_IMG_URL;?>/img_pt7_1.jpg"><br/>
			<div class="pt7-item-title">
                <?php 
                if($lang=='ko') {?>하이브리드 방식<?php } 
                else if($lang=='en') {?>Hybrid Method<?php } 
                else if($lang=='de') {?>Hybridmethode<?php } 
                else if($lang=='ja') {?>ハイブリッド方式<?php } 
                ?></div>
			<div class="pt7-item-content">
                <?php 
                if($lang=='ko') {?>고무링만 교체하면 접촉식으로 변신!<?php } 
                else if($lang=='en') {?>Transformed to a contact type once only the rubber ring is replaced!<?php } 
                else if($lang=='de') {?>Tauschen Sie einfach den Gummiring aus, damit er zu einem Kontakttyp wird!<?php } 
                else if($lang=='ja') {?>ゴムリングだけを交換すれば接触式に変身!<?php } 
                ?></div>
		</div>
		<div class="pt7-item">
			<div class="pt7-item-point">POINT 7</div>
			<img src="<?php echo G5_IMG_URL;?>/img_pt7_2.jpg"><br/>
			<div class="pt7-item-title">
                <?php 
                if($lang=='ko') {?>가벼운 페달링<?php } 
                else if($lang=='en') {?>Light Pedaling<?php } 
                else if($lang=='de') {?>Leichtes Treten<?php } 
                else if($lang=='ja') {?>軽いペダリング<?php } 
                ?></div>
			<div class="pt7-item-content">
                <?php 
                if($lang=='ko') {?>깃털처럼 가볍고 부드러운 주행감!<?php } 
                else if($lang=='en') {?>A light and soft sense of driving like a feather!<?php } 
                else if($lang=='de') {?>Leichtes und weiches Fahrgefühl wie eine Vogelfeder!<?php } 
                else if($lang=='ja') {?>羽毛のように軽くて柔らかい走行感!<?php } 
                ?>
            </div>
		</div>
		<div class="pt7-item">
			<div class="pt7-item-point">POINT 8</div>
			<img src="<?php echo G5_IMG_URL;?>/img_pt7_3.jpg"><br/>
			<div class="pt7-item-title"><?php if($lang=='ko') {?>신뢰성 시험<?php } 
                else if($lang=='en') {?>Reliability Test<?php } 
                else if($lang=='de') {?>Zuverlässigkeitstest<?php } 
                else if($lang=='ja') {?>信頼性試験<?php } 
                ?>
            </div>
			<div class="pt7-item-content"><?php if($lang=='ko') {?>안전을 위한 엄격한 테스트<?php } 
                else if($lang=='en') {?>A strict test for safety!<?php } 
                else if($lang=='de') {?>Strenger Sicherheitstest!<?php } 
                else if($lang=='ja') {?>安全のための厳しいテスト<?php } 
                ?>
            </div>
		</div>
		<div class="pt7-item">
			<div class="pt7-item-point">POINT 9</div>
			<img src="<?php echo G5_IMG_URL;?>/img_pt7_4.jpg"><br/>
			<div class="pt7-item-title"><?php if($lang=='ko') {?>생활 방수 설계<?php } 
                else if($lang=='en') {?>Living Waterproofing Design<?php } 
                else if($lang=='de') {?>Wasserdichtes Design<?php } 
                else if($lang=='ja') {?>生活防水設計<?php } 
                ?>
            </div>
			<div class="pt7-item-content"><?php if($lang=='ko') {?>IPX5 방수로 비가 오는 날에도!<?php } 
                else if($lang=='en') {?>For even raining days with IPX5 waterproofing!<?php } 
                else if($lang=='de') {?>auch an Regentagen wasserdicht durch IPX5!<?php } 
                else if($lang=='ja') {?>IPX5防水で雨が降る日も!<?php } 
                ?>
            </div>
		</div>
	</div>
</div>

<!-- 비교 -->
<div class="cp">
	<div class="at-container">
		<div class="cp-title"><?php if($lang=='ko') {?>제품 비교<?php } else if($lang=='en') {?>Comparison of Products<?php } 
            else if($lang=='de') {?>Produktvergleich<?php } 
            else if($lang=='ja') {?>製品比較<?php }
            ?></div>
			<?php if($lang=='ko') {
			include_once(G5_PATH.'/page/ncb_pc_ko.php');
			}/*?>
			
			<?php
			else if($lang=='en') {
			include_once(G5_PATH.'/page/ncb_pc_en.php');
			}?>
			<?php
			else if($lang=='de') {
			include_once(G5_PATH.'/page/ncb_pc_de.php');
			}?>
			<?php
			else if($lang=='ja') {
			include_once(G5_PATH.'/page/ncb_pc_ja.php');
			}*/?>
</div>
</div>

<script>
function openSideMenu(num) {
	$('.faq-a').slideUp('fast');
	if ($('#faq-a-' + num).css("display") == "none") {
		$('#faq-a-' + num).slideDown('fast');
		$('#icon-faq-' + num).attr("src", "<?php echo G5_IMG_URL;?>/icon_arrow_up.png");
	} else {
		$('#faq-a-'+num).slideUp('fast');
		$('#icon-faq-' + num).attr("src", "<?php echo G5_IMG_URL;?>/icon_arrow_down.png");
	}
}
</script>
<div class="faq">
	<div class="at-container">
		<div class="cp-title">FAQ</div>
		<div class="faq-list">
		
			<div class="faq-q" onClick="openSideMenu(1)">
				<div class="icon-q">Q</div>
				<div class="content-q">
					<div class="cate-q"><?php if($lang=='ko') {?>공통 사항<?php } else if($lang=='en') {?>Common Thing<?php } else if($lang=='de') {?>Häufig<?php } else if($lang=='ja') {?>共通事項<?php } ?></div>
					<div class="content"><?php if($lang=='ko') {?>전기 자전거 인가요?<?php } else if($lang=='en') {?>Is it an electric bicycle?<?php } else if($lang=='de') {?>Ist es ein elektrisches Fahrrad?<?php } else if($lang=='ja') {?>電気自転車ですか?<?php } ?></div>
				</div>
				<img src="<?php echo G5_IMG_URL;?>/icon_arrow_down.png" class="icon-faq" id="icon-faq-1"/>
			</div>
			<div class="faq-a" id="faq-a-1" style="display: none;">
				<?php if($lang=='ko') {?>아닙니다. 이 제품은 자전거 바퀴에 설치해서 전기를 얻어내는 자전거 발전기입니다.<?php } else if($lang=='en') {?>No, it isn’t. This product is a bicycle generator to gain the power by being installed on a bicycle.<?php } 
                else if($lang=='de') {?>Nein. Dieses Produkt ist ein Fahrradgenerator, der Strom erzeugt, indem er auf einem Fahrradrad installiert wird.<?php } 
                else if($lang=='ja') {?>いいえ、この製品は自転車のホイールに設置して電気を作り出す自転車発電機です。<?php } 
                ?>
			</div>
			
			<div class="faq-q" onClick="openSideMenu(2)">
				<div class="icon-q">Q</div>
				<div class="content-q">
					<div class="cate-q"><?php if($lang=='ko') {?>공통 사항<?php } else if($lang=='en') {?>Common Thing<?php } 
                        else if($lang=='de') {?>Häufig<?php }
                        else if($lang=='ja') {?>共通事項<?php }
                        ?></div>
					<div class="content"><?php if($lang=='ko') {?>전기 자전거 배터리 충전이 가능한가요?<?php } else if($lang=='en') {?>Is it possible to charge the battery of an electric bicycle?<?php } 
                        else if($lang=='de') {?>Kann ich die elektrische Fahrradbatterie aufladen?<?php } 
                         else if($lang=='ja') {?>電気自転車バッテリー充電が可能ですか?<?php } 
                        ?>
                    </div>
				</div>
				<img src="<?php echo G5_IMG_URL;?>/icon_arrow_down.png" class="icon-faq" id="icon-faq-2"/>
			</div>
			<div class="faq-a" id="faq-a-2" style="display: none;">
				<?php if($lang=='ko') {?>
				전압과 전류가 맞지 않아 현재 저희 발전기로는 충전이 불가합니다.<br/>
				전기 자전거 이외에도 전압과 전류가 맞지 않는 제품은 충전하실 수 없습니다.
				<?php } else if($lang=='en') {?>
				Since the voltage and the current are not appropriate, it is not possible to charge with our generator for now.<br/>
				Aside from an electric bicycle, you can’t charge any product that has different voltage and current.
				<?php } 
                else if($lang=='de') {?>
				Da Spannung und Strom nicht kompatibel sind, ist mit unserem Generator kein Aufladen möglich.<br/>
				  Andere Produkte als Elektrofahrräder, deren Spannung und Strom nicht übereinstimmen, können nicht aufgeladen werden.
				  <?php }
                else if($lang=='ja') {?>
				電圧と電流が合わないので現在の我々の発電機では充電ができないです。<br/>
                電気自転車以外にも電圧と電流が合わない製品は充電することができません。
				  <?php }
                ?>
			</div>
			
			<div class="faq-q" onClick="openSideMenu(3)">
				<div class="icon-q">Q</div>
				<div class="content-q">
					<div class="cate-q">VOLT1 plus-NCB</div>
					<div class="content"><?php if($lang=='ko') {?>모든 자전거에 사용 가능한가요?<?php } else if($lang=='en') {?>Is it available for any type of a bicycle?<?php } 
                        else if($lang=='de') {?>Kann der Generator auf allen Fahrrädern verwendet werden?<?php } 
                        else if($lang=='ja') {?>全ての自転車に使用可能ですか?<?php } 
                        ?>
                    </div>
				</div>
				<img src="<?php echo G5_IMG_URL;?>/icon_arrow_down.png" class="icon-faq" id="icon-faq-3"/>
			</div>
			<div class="faq-a" id="faq-a-3" style="display: none;">
				<?php if($lang=='ko') {?>
				비접촉식 발전기는 림 브레이크 자전거와 스피닝/헬스 자전거에서 사용 가능합니다. <br>
                카본 림, 철 림, 디스크브레이크 자전거, 미니벨로, 접이식 자전거를 보유하신 분들께는 당사의 접촉식 자전거 발전기를 추천해드립니다.
			   <?php } else if($lang=='en') {?>
			   The contactless generator is available for the rim brake bicycle and the spinning/health bicycle.<br/>
			  We recommend our contact typed bicycle generator to those who have a carbon rim, a steel rim, a disc brake bicycle, a minivelo bike and a folding bike.
			  <?php } 
                else if($lang=='de') {?>
			  Der kontaktlose Generator kann für Felgenbremsräder und Spinning- / Health-Bikes verwendet werden.<br/>
			  Für diejenigen, die Carbonfelgen, Eisenfelgen, Scheibenbremsräder, Minivelo und Falträder besitzen, empfehlen wir unseren fahrradgenerator mit Berührung.
			  <?php }
                else if($lang=='ja') {?>
			     非接触式発電気はリムブレーキ自転車とスピニング/ヘルス自転車で使用可能です。<br>
                カーボンリム、鉄リム、ディスクブレーキ自転車、小径車、折り畳み自転車を保有している方には当社の接触式自転車発電機をお勧めします。
			  <?php }
                ?>
			</div>
			
			<div class="faq-q" onClick="openSideMenu(4)">
				<div class="icon-q">Q</div>
				<div class="content-q">
					<div class="cate-q"><?php if($lang=='ko') {?>공통 사항<?php } else if($lang=='en') {?>Common Thing<?php } 
                        else if($lang=='de') {?>Häufig<?php }
                        else if($lang=='ja') {?>共通事項<?php }
                        ?>
                    </div>
					<div class="content"><?php if($lang=='ko') {?>구성품은 재구매 가능한가요?<?php } else if($lang=='en') {?>Can I purchase the components again?<?php } 
                        else if($lang=='de') {?>Können die Komponenten  nachgekauft werden?<?php } 
                         else if($lang=='ja') {?>構成品は再購買可能ですか?<?php }
                        ?>
                    </div>
				</div>
				<img src="<?php echo G5_IMG_URL;?>/icon_arrow_down.png" class="icon-faq" id="icon-faq-4"/>
			</div>
			<div class="faq-a" id="faq-a-4" style="display: none;">
				<?php if($lang=='ko') {?>
				네. 모든 구성품은 재구매 가능합니다.<br/>
				> <a href="https://smartstore.naver.com/wheelswing/products/4985214762" target="_blank" style="float: left; margin-left: -197px; margin-top: 23px;"><?php if($lang=='ko') {?>구성품 구매하러 가기<?php } else {?>Go to buy components<?php }?></a>
				<?php } 
                else if($lang=='en') {?>
				Yes, it is. All components can be purchased again.<br/>
				> <a href="https://smartstore.naver.com/wheelswing/products/4985214762" target="_blank" style="float: left; margin-left: -294px; margin-top: 23px;">
				<?php if($lang=='ko') {?>구성품 구매하러 가기<?php } else {?>Go to buy components<?php }?></a>
				<?php } 
                else if($lang=='de') {?>
				Ja. Alle Komponenten können nachgekauft werden.<br/>
				> <a href="https://smartstore.naver.com/wheelswing/products/4985214762" target="_blank" style="float: left; margin-left: -310px; margin-top: 23px;">
				<?php if($lang=='ko') {?>구성품 구매하러 가기<?php } else {?>Go to buy components<?php }?></a>
				<?php } 
                else if($lang=='ja') {?>
				はい。全ての構成品は再購買可能です。<br/>
				> <a href="https://smartstore.naver.com/wheelswing/products/4985214762" target="_blank" style="float: left; margin-left: -240px; margin-top: 23px;"><?php if($lang=='ko') {?>構成品　買いに行く<?php } else {?>Go to buy components<?php }?></a>
				<?php }
                ?>
			</div>
			
			<div class="faq-q" onClick="openSideMenu(5)">
				<div class="icon-q">Q</div>
				<div class="content-q">
					<div class="cate-q"><?php if($lang=='ko') {?>공통 사항<?php } else if($lang=='en') {?>Common Thing<?php } 
                        else if($lang=='de') {?>Häufig<?php }
                        else if($lang=='ja') {?>共通事項<?php }
                        ?>
                    </div>
					<div class="content"><?php if($lang=='ko') {?>이외 다른 문의 사항이 있습니다.<?php } else if($lang=='en') {?>Aside from it, I have other inquiries.<?php } 
                        else if($lang=='de') {?>Ich habe weitere Fragen.<?php }
                        else if($lang=='ja') {?>その他、他の問い合わせがあります。<?php }
                        ?>
                    </div>
				</div>
				<img src="<?php echo G5_IMG_URL;?>/icon_arrow_down.png" class="icon-faq" id="icon-faq-5"/>
			</div>
			<div class="faq-a" id="faq-a-5" style="display: none;">
				<?php if($lang=='ko') {?>
				홈페이지 메인 하단 ‘CONTACT’로 문의 남겨주시거나, wus.cs@wus.co.kr 또는 053-213-8802로 연락주시기 바랍니다.
				<?php } else if($lang=='en') {?>
				Please leave your inquiries at ‘CONTACT’ at the bottom of the main website or contact us at service@wus.co.kr or +82-53-213-8802
				<?php } 
                else if($lang=='de') {?>Bitte hinterlassen Sie eine Anfrage unter " CONTACT " unten auf der Homepage oder wenden Sie sich an service@wus.co.kr oder +82-53-213-8802<?php } 
                else if($lang=='ja') {?>ホームページメインの下に‘CONTACT’に問い合わせを送って頂ければこのメール（wus.cs@wus.co.kr）または 053-213-8802にご連絡お願い致します。<?php } 
                ?>
			</div>
		</div>
	</div>
</div>

<div class="at-container" style="overflow: inherit;">
<div class="at-content">
<div class="page-content" style="margin-bottom: 163px;">
</div>
</div>
</div>
</div>

<div class="h30"></div>
