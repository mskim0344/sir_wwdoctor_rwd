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









<!-------------------------- 아이콘박스 -------------------------->
<div class="container margin-top-60">
	<div class="center-heading ks4">
		<h2>WIDE FREE <strong>THEME</strong> </h2>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		구글 아이콘으로 변경하였습니다.
		</p>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-3">
						<span class="material-icons">search</span>
						<p class="ks4 f14 h75">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink">
						<span class="material-icons">logout</span>
						<p class="ks4 f14 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-2">
						<span class="material-icons">schedule</span>
						<p class="ks4 f14 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons">help_outline</span>
						<p class="ks4 f14 h75">
							문의사항은 질문게시판에 글 남겨주세요.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
	</div><!-- /row -->

	<div class="d-none d-sm-block margin-top-30"></div><!-- pc 만 적용 -->

	<!-------------------------- 두번째줄 -------------------------->
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons">lock_open</span>
						<p class="ks4 f14 h75">
							애플사의 IOS 부터 안드로이드 운영체제까지 모두 지원되는 무료 비즈니스 반응형 홈페이지 입니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons">alarm</span>
						<p class="ks4 f14 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->

		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons">sticky_note_2</span>
						<p class="ks4 f14 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->

		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons">swap_vert</span>
						<p class="ks4 f14 h75">
							문의사항은 질문게시판에 글 남겨주세요.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->
	</div><!-- /row -->
	<div class="margin-bottom-40"></div>
</div><!-- /container -->










<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 350px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/2560x1080"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
					<br />
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button> 
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/shop/item/1623421493"'>7페이지</button>
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->


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




<!-------------------------- USE A LIBRARY -------------------------->
<div class="padding-top-60 padding-bottom-60" style="background:#f2f2f2;">
	<div class="container">
		<div class="center-heading">
			<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
			<span class="center-line"></span>
		</div>
	  <div class="row f16">

		<div class="col-lg-6 text-left">
			<img class="img-fluid rounded" src="<?php echo G5_THEME_URL?>/img/s-4.png" alt="">
		</div>

		<div class="col-lg-6">
		  <h2 class="en1">JavaScript Library</h2>
		  <p class="ks4 f20">테마폴더내 라이선스 문서 확인</p>
		  <ul class="en2">
		  	<li><strong>GNUboard5</strong></li>
			<li><strong>Bootstrap4</strong></li>
			<li>jQuery</li>
			<li>Font Awesome5</li>
			<li>Working contact form with validation</li>
			<li>Unstyled page elements for easy customization</li>
			<li>Parallax</li>
			<li>Owl</li>
			
		  </ul>
		  <p class="ks5">
		  현제 제작되는 모든 테마 및 템플릿은 에티테마 에서 제작되고 있으며 무료 테마 및 템플릿의 경우에는 이미지가 포함 되어 있지 않습니다. 또한 에티테마로 오시면 추가적인 업데이트된 파일을 다운로드 하실 수 있습니다.</p>
		</div>

	  </div>
	  <!-- /.row -->
	</div>
</div>





<!-------------------------- USE A LIBRARY -------------------------->
<div class="padding-top-60 padding-bottom-60">
	<div class="container">
		<div class="center-heading">
			<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
			<span class="center-line"></span>
		</div>
		  <div class="row f16">

			<div class="col-lg-6">
			  <h2 class="en1">JavaScript Library</h2>
			  <p class="ks4 f20">테마폴더내 라이선스 문서 확인</p>
			  <ul class="en2">
				<li><strong>GNUboard5</strong></li>
				<li><strong>Bootstrap4</strong></li>
				<li>jQuery</li>
				<li>Font Awesome5</li>
				<li>Working contact form with validation</li>
				<li>Unstyled page elements for easy customization</li>
				<li>Parallax</li>
				<li>Owl</li>
			  </ul>
			  <p class="ks5">
			  현제 제작되는 모든 테마는 에티테마 에서 제작되고 있으며 무료 테마 및 템플릿의 경우에는 이미지가 포함 되어 있지 않습니다. 또한 에티테마로 오시면 추가적인 업데이트된 파일을 다운로드 하실 수 있습니다.</p>
			</div>

			<div class="col-lg-6 text-right">
				<img class="img-fluid rounded" src="<?php echo G5_THEME_URL?>/img/s-3.png" alt="">
			</div>

		  </div>
	  <!-- /.row -->
	</div>
</div>




<!-------------------------- parallax 박스 및 countdown -------------------------->
<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/2560x1080">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">alarm</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">hourglass_empty</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">trending_down</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">system_update_alt</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /parallax -->





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







<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->
<div class="container-fluid">
	<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.8712817288642!2d127.6344159516823!3d37.298184379750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35635d8af4a6c211%3A0x9b0b7257a5a5a5cc!2z7Jes7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1654254206256!5m2!1sko!2skr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>
		<div class="col-md-6 text-left" style="padding:30px; background:#f5f5f5;">
			<!-- 타이틀 -->
			<div class="margin-bottom-40">
				<h2 class="en1">Contact US</h2>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_name" value="" placeholder="담당자">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
				</div><!-- /col -->
			</div><!-- /row -->
			<div class="row">
				<div class="col-md-12">
					  <div class="form-group">
						<textarea class="form-control" name="ety_content" value="" id="ety_content" rows="3"></textarea>
					  </div>
				</div>
				<div class="col-md-12 margin-bottom-20">
					  <div class="form-check">
						<input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">약관동의</label>
					  </div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-dark ks4 sendmail">문의하기</button>
				</div>
			</div><!-- /row -->					
		</div>
	</div>
</div>




<?php
include_once(G5_THEME_PATH.'/tail.php');