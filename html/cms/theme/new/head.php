<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');




// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>


<!-------------------------- 네비게이션 -------------------------->
<?php include_once(G5_THEME_PATH.'/navication.php');?>








<!-------------------------- 게시판 상단 배경 수정하는 곳 -------------------------->
<?php 
   
	if($bo_table){
		include_once(G5_THEME_PATH.'/top_banner.php');
		
	}
	if($co_id){
		include_once(G5_THEME_PATH.'/top_banner.php');
	}
?>
<!-------------------------- ./게시판 상단 배경 수정하는 곳 -------------------------->