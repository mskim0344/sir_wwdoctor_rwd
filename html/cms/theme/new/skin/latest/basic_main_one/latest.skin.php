<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<link rel="stylesheet" href="/cms/theme/new/css/ety.css">

<div class="row w-100 mx-0 ">
   
	<div class="text-white flex-column justify-content-center line1 d-none d-md-flex">
       <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="one_more mx-auto ml-md-0  border_right px-5 pl-md-0 d-block">NOTICE</a>
		
	</div>
    <div class="swiper col justify-content-between h80 d-flex mx-3 mr-md-0">
        <div class="swiper-wrapper h80">
            <?php for ($i=0; $i<count($list); $i++) {  ?>
                <div class="swiper-slide d-flex align-items-center h80 w-100n justify-content-between">
                    <span class="mx-2 px-3  notice_border ">알림</span>
                    <?php
                

        
                    echo "<a href=\"".$list[$i]['href']."\"> ";       
                        echo $list[$i]['subject'];
                    echo "</a>";

                

                    ?>

                    <span class="lt_date hidden-xs hidden-sm ml-auto"><?php echo $list[$i]['datetime2'] ?></span>
                </div>        
            <?php }  ?>
            <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <div class="empty_li swiper-slide">게시물이 없습니다.</div>
            <?php }  ?>
        </div>
        
        <div class="swieprbtn d-flex flex-column justify-content-center" id="up_down">
            <div class="swiper-button-next my-1  ml-3 mr-0 mx-md-3"></div>
            <div class="swiper-button-prev my-1  ml-3 mr-0 mx-md-3"></div>
        </div>
        
	
    </div>
   
</div>


<style>
    .line1{
        line-height:1 !important;
    }
.notice_border{
    
	
    border: 0.5px solid #999;
    border-radius: 15px;
    line-height:1.8;
    
    
}
.border_right{
	border-right: 1px solid #999;
}
#noticeRolling .contents{
    line-height:80px;
}
#noticeRolling .swiper-button-next,
#noticeRolling .swiper-button-prev {
    position: unset;


}
</style>
<script>

var swiper = new Swiper("#noticeRolling .swiper", {
     direction: "vertical",
     loop:true,
     autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
   
</script>

