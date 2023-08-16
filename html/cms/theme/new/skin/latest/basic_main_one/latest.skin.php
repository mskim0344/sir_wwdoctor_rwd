<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>


<div class="row col-12 contents">
   
	<div class="text-white">
       <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="one_more">NOTICE</a>
		
	</div>
    <div class="swiper col justify-content-between h80 d-flex">
        <div class="swiper-wrapper h80">
            <?php for ($i=0; $i<count($list); $i++) {  ?>
                <div class="swiper-slide d-flex align-items-center h80">
                    <span>알림</span>
                    <?php
                

        
                    echo "<a href=\"".$list[$i]['href']."\"> ";       
                        echo $list[$i]['subject'];
                    echo "</a>";

                

                    ?>

                    <span class="lt_date hidden-xs hidden-sm"><?php echo $list[$i]['datetime2'] ?></span>
                </div>        
            <?php }  ?>
            <?php if (count($list) == 0) { //게시물이 없을 때  ?>
            <div class="empty_li swiper-slide">게시물이 없습니다.</div>
            <?php }  ?>
        </div>
        
        <div class="swieprbtn d-flex flex-column">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        
	
    </div>
   
</div>


<style>
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

