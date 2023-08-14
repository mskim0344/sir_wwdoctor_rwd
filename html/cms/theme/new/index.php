<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>









<!-------------------------- 메인 슬라이드 swiper -------------------------->
<header>
  <div class="swiper" id="mainBannerswiper">

	<div class="swiper-wrapper" >
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_01.jpg')">
	  
	    <div class="carousel-caption  container">
		  	<h2 class="Noto-ko fw fs">
				기침,천식,폐질환
		  		<p class="Noto-ko fw fs">편강 한의원</p>
			</h2>
		</div>
		
		
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_02.jpg')">
	  
	  <div class="carousel-caption  container">
		  	<h2 class="Noto-ko fw fs">
			  근본치유에 집중하는
		  		<p class="Noto-ko fw fs">평강 원인 치유법</p>
			</h2>
		</div>
	  
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_03.jpg')">
	 
	  <div class="carousel-caption  container">
		  	<h2 class="Noto-ko fw fs">
			  평강의학이
		  		<p class="Noto-ko fw fs">세계로 갑니다</p>
			</h2>
		</div>
	 
	  </div>
	</div>
	<div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
	<div class="container position-absolute paginationbox">
		<div class="swiper-pagination "></div>

	</div>

	
	

	
	
  </div>
</header>
<script>
	    const mainbannerttext = ['기침, 천식, 폐질환 편강한의원','편강 원인 치유법','편강의학이 세계로 갑니다'];
		var swiper = new Swiper("#mainBannerswiper", {

						pagination: {
							el: ".swiper-pagination",
							clickable: true,
							renderBullet: function (index, className) {
							return '<span class="' + className + '">' + mainbannerttext[index] + "</span>";
							},
							
						},
						navigation: {
								nextEl: ".swiper-button-next",
								prevEl: ".swiper-button-prev",
						},
						spaceBetween:0,
						loop:true,
						centeredSlides: true,
						autoplay: {
							delay: 10000,
							disableOnInteraction: false,
						},

					});
	</script>
<!-------------------------- 메인 슬라이드 swiper -------------------------->

<!-- notice -->
<aside class="bg-dark text-white h80">
	<div class=" container d-flex">
		<a class="white mt-4 " href="">Notice</a>
		<div class="  mt-4 mx-5 alarm">
			<a class="" href=""></a>
		</div>  
	</div>
</aside>




















<!-------------------------- 테마소개 + 유튜브영상 -------------------------->

<div class="padding-top-60 padding-bottom-60" style="background:#f2f2f2;">
	<div class="container">
	<div class="center-heading">
		<h2>원인 치료 경험담 </h2>
		<h5>편강의학을 경험하신 분들의 소중한 치료 후기</h5>
		
	</div>
	  <div class="d-flex">
		<div class="col-lg-6">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/zksDH5q0muU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">SERVICE</h2>
		  <p class="ks4"><strong>새롭게 7개의 페이지가 업로드 되었습니다.</strong></p>
		  <p class="ks4"><a href="http://ety.kr/shop/item/1623421493" target="_blank">http://ety.kr/shop/item/1623421493</a></p>
		  <p class="ks4">배포는 소프트존만 가능하며 배포처는 에티테마,SIR 만 제한하고 있습니다.</p>
		  <p class="ks4">설치방법안내 <strong><a href="http://ety.kr/board/ety_theme_free_movie" target="_blank">http://ety.kr/board/ety_theme_free_movie</a></strong> 에서 진행하고 있으므로 궁금점이나 문의사항이 있으시면 해당 게시판을 이용해주세요.</p>
		</div>
	  </div>
	</div>
</div>




<!-------------------------- 제품안내 갤러리 -------------------------->
<div class="container margin-top-60 margin-bottom-60">
	<div class="center-heading margin-top-40">
		<h2 class="ks4">제품안내</h2>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		해당 제품에 대한 소개내용 입니다.
		</p>
	</div>
	<!-- LATEST : pic_basic_company -->
	<?php echo latest('theme/pic_basic_company', 'gallery', 6, 24); ?>
</div>





















<!-------------------------- 게시판 -------------------------->
<div class="padding-top-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
			</div>
		</div>
	</div>
</div>





<!-------------------------- GALLERY -------------------------->
<!-- 

테마폴더/tail.php : 43 번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정


-->

<div class="container margin-bottom-60">
	<?php echo latest('theme/pic_basic_owl', 'gallery', 9, 24); ?>
</div>












<?php
include_once(G5_THEME_PATH.'/tail.php');