<?php
if(G5_IS_MOBILE) {
	include_once(G5_PATH.'/page/ncb_m.php');
} else {
	include_once(G5_PATH.'/page/ncb_pc.php');
}
?>