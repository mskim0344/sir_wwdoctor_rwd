<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가





include_once(G5_THEME_PATH.'/head.php');
?>



<link rel="stylesheet" href="/cms/theme/new/css/common_copy.css">
<link rel="stylesheet" href="/cms/theme/new/css/main_copy.css?ver=<?php echo time(); ?>">
<!-- <link rel="stylesheet" href="/cms/theme/new/css/sub_copy.css"> -->








<!-------------------------- 메인 슬라이드 swiper -------------------------->
<header>
  <div class="swiper" id="mainBannerswiper">

	<div class="swiper-wrapper" >
	 
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_01.jpg')">
	  
            <div class="carousel-caption  container text_none">
                <h2 class="Noto-ko fw fs">
                    기침,천식,폐질환
                    <p class="Noto-ko fw fs">편강 한의원</p>
                </h2>
            </div>
		
		
	  </div>
	
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_02.jpg')">
	  
            <div class="carousel-caption  container text_none">
                <h2 class="Noto-ko fw fs">
                근본치유에 집중하는
                    <p class="Noto-ko fw fs">평강 원인 치유법</p>
                </h2>
            </div>
	  
	  </div>
	 
	  <div class="swiper-slide" style="background-image: url('/cms/pkimg/banner_bg_03.jpg')">
	 
	    <div class="carousel-caption  container text_none">
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
		const swipermain = new Swiper("#mainBannerswiper", {

						pagination: {
							el: "#mainBannerswiper .swiper-pagination",
							clickable: true,
							renderBullet: function (index, className) {
							return '<span class="' + className + ' aaaa">' + mainbannerttext[index] + "</span>";
							},
							
						},
						navigation: {
								nextEl: "#mainBannerswiper .swiper-button-next",
								prevEl: "#mainBannerswiper .swiper-button-prev",
						},
						spaceBetween:0,
						loop:true,
						centeredSlides: true,
						autoplay: {
							delay: 4500,
							disableOnInteraction: false,
						},

					});
                   
</script>
<!-------------------------- 메인 슬라이드 swiper -------------------------->







<!-- notice -->
<aside class="bg-dark text-white h80" id="noticeRolling">
	<div class="container-lg ">
	    <?php echo latest('theme/basic_main_one', 'notice', 3, 40);?>
		<!-- <a class="white mt-4 " href="">Notice</a>
		<div class="  mt-4 mx-5 alarm">
			<a class="" href=""></a> -->
		</div>  
	</div>
</aside>
<section id="pk_slide" class="py-5">
    <h2 class="m-3">역시,평강한의원</h2>
    <div class="wrap">
        <div class="swiper">
            <div class="rela swiper-wrapper">
                <div class="swiper-slide">
                    <div class="nth1 absol"></div>                

                </div>
                <div class="swiper-slide">
                    <div class="nth2 absol"></div>                

                </div>
                <div class="  swiper-slide">
                    <div class="nth3 absol"></div>                

                </div>
                <div class="  swiper-slide">
                    <div class="nth4 absol"></div>                

                </div>
                <div class="  swiper-slide">
                    <div class="nth5 absol"></div>                

                </div>
                <div class="  swiper-slide">
                    <div class="nth6 absol"></div>                

                </div>
                <div class="  swiper-slide">
                    <div class="nth7 absol"></div>                

                </div>
              
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>







    <!-- 스와이퍼 슬라이드 식 -->
<script>
    var swiper = new Swiper("#pk_slide .swiper", {
      spaceBetween: 15, 
      slidesPerView: 1.5,
      loop:true,
      mousewheel: true,   
      loopAddtionalSlides : 1,  
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: "#pk_slide .swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: "#pk_slide .swiper-button-next",
        prevEl: "#pk_slide .swiper-button-prev",
      },
      scrollbar: {
        el: "#pk_slide .swiper-scrollbar",
        hide: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },       
        1024: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
        1280: {
          slidesPerView: 3.5,
          spaceBetween: 50,
        },
        1440: {
          slidesPerView: 5,
          spaceBetween: 50,
        }
      },
    });
  </script>
<aside class="check_symtom_container d-none">
        <div class="csize01">

            <h2 class="title notoS f42 semibold fc_dark ">
                내 증상 확인하기
            </h2>
            <p class="fc_dark " >증상을 먼저 알면 치료에 도움이 됩니다.</p>
            <a href="javascript:layer_open('self_diagnosis');" class="btn_submit f20 medium fc_white " >
                자가진단 시작하기
            </a>

        </div>
</aside>
<aside class="latest_consult_container ">
        <div class="csize01 d-block d-lg-flex container-lg justify-content-between">

            <h2 class="title notoS f42 semibold fc_white text-center text-lg-left mr-0 mr-lg-5" >
                의료진 상담하기
            </h2>

            <div class="col" >
                <div class="latest_consult ">

                    <div class="swiper ">
                        <ul class="swiper-wrapper" style="height:8rem; line-height:2">
                                   
                            <li class="swiper-slide" >
                                            <div>                                                
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>                                                    

                                            </div>                                     
                            </li>    
                            <li class="swiper-slide" >
                                            <div>                                                
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>                                                    

                                            </div>                                     
                            </li>    
                                  
                            <li class="swiper-slide" >
                                            <div>                                                
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>                                                    

                                            </div>                                     
                            </li>    
                                  
                            <li class="swiper-slide" >
                                            <div>                                                
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>                                                    

                                            </div>                                     
                            </li>    
                                  
                            <li class="swiper-slide" >
                                            <div>                                                
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>
                                                        <p class="d-flex w-100 justify-content-between text-white">
                                                            <span class="pcview">[편강한약]</span>
                                                            <span>서초점</span>
                                                            <span class="mx-auto">약주문</span>
                                                            <span>양**</span>
                                                            <span>2023-07-21</span>
                                                            <span class="pcview">답변완료</span>
                                                        </p>                                                    

                                            </div>                                     
                            </li>    
                                  
                                  
                                        
                                    
                                
                                
                      
                    
                        </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <a href="/counsel/counsel.do" class="btn_link">
                    <span class="sr_only">상담하기 게시판 바로가기</span>
                </a>
            </div>
            <script>
                 var swiper_store = new Swiper(".latest_consult .swiper", {

                    direction: "vertical",
                    spaceBetween:0,
                    loop:true,

                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },

                    });
            </script>

        </div>
</aside>
<section class="pyeonkang py-5">
        <div class="csize01 d-xl-flex py-xl-5 my-5 container-xl">

            <div class="image order-1 mb-5 mb-xl-0" >
                <img src="https://www.wwdoctor.com/static/asset/images/main/pkt_product.jpg" alt="">
            </div>

            <div class="contents order-0">
                <h2 class="title notoS f42 semibold fc_dark " >
                    편강탕(扁康湯)
                </h2>
                <p class="f20 mt_40 " >
                    면역력과 자가 치유 능력을 극대화 시키고 폐의 기능을 활발하게 해줍니다.<br>
                    <b>편한, 편도선의 (편 : 扁) 몸을 건강하게 한다(강 : 康)</b>
                </p>
                <a href="/s_medicine/medical05.do" class="btn_link move_arrow mt_80 " >
                    자세히 보기
                    <div class="btn_arrow">
                        <span class="arrow"></span>
                    </div>
                </a>
            </div>

            <!-- <div class="pop " >
                <a href="https://www.pkmall.co.kr/?utm_source=wwdoctor.com&amp;utm_medium=referral" target="_blank">
                    <img src="https://www.wwdoctor.com/static/asset/images/main/pkt_pop.png" alt="">
                </a>
                <div class="close f14">
                    <label for="pkt_pop">
                        오늘 하루 창 열지 않기
                        <input type="checkbox" name="pkt_pop" id="pkt_pop">
                    </label>
                </div>
                <button type="button" class="btn_close">
                    <span class="sr_only">편강탕 팝업 닫기</span>
                </button>
            </div> -->

        </div>
</section>
<aside class="main_review justify-content-center d-flex flex-column  d-xl-block">
        <div class="csize01 container-xl ">

            <h2 class="title notoS f42 semibold fc_white text-center text-xl-left" >
                원인 치료 경험담
            </h2>
            <p class="f20 medium fc_white mt_20  text-center text-xl-left" >
                편강의학을 경험하신 분들의 소중한 치료 후기
            </p>

            <div class="video mt_60 col-10 mx-auto"  >
                <!-- 유튜브 입력 -->
                <!--임시 리뷰용 백업
                -->
                    <iframe src="https://www.youtube.com/embed/zksDH5q0muU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                <!--
                <video width="100%" poster="/static/images/main/youtube_video_bg.jpg" autoplay loop controls>
                    <source src="/static/asset/images/main/interview.mp4" type="video/mp4">
                </video>
                -->
            </div>

        </div>

        <div class="right d-none d-xl-block">
            <div class="inner wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <ul class="subject">
                    <li>
                        <a href="/s_rhinitis/rhinitis.do?review=true" class="f32 fc_white">비염</a>
                    </li>
                    <li>
                        <a href="/s_asthma/asthma.do?review=true" class="f32 fc_white">천식</a>
                    </li>
                    <li>
                        <a href="/s_copd/copd.do?review=true" class="f32 fc_white">COPD</a>
                    </li>
                    <li>
                        <a href="/s_respiratory/respiratory01.do?review=true" class="f32 fc_white">호흡기질환</a>
                        <ul class="sub">
                            <li>
                                <a href="/s_respiratory/respiratory01.do?review=true" class="f18 fc_white">중증 폐질환</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory02.do?review=true" class="f18 fc_white">기관지염</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory03.do?review=true" class="f18 fc_white">폐섬유화</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory04.do?review=true" class="f18 fc_white">축농증</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory05.do?review=true" class="f18 fc_white">후비루증후군</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory06.do?review=true" class="f18 fc_white">편도선염</a>
                            </li>
                            <li>
                                <a href="/s_respiratory/respiratory07.do?review=true" class="f18 fc_white">폐렴</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/s_dermatopathy/dermatopathy01.do?review=true" class="f32 fc_white">피부질환</a>
                        <ul class="sub">
                            <li>
                                <a href="/s_dermatopathy/dermatopathy01.do?review=true" class="f18 fc_white">아토피</a>
                            </li>
                            <li>
                                <a href="/s_dermatopathy/dermatopathy02.do?review=true" class="f18 fc_white">건선</a>
                            </li>
                            <li>
                                <a href="/s_dermatopathy/dermatopathy03.do?review=true" class="f18 fc_white">지루성피부염</a>
                            </li>
                            <li>
                                <a href="/s_dermatopathy/dermatopathy04.do?review=true" class="f18 fc_white">다양한 가려움증</a>
                            </li>
                            <!-- <li>
                                <a href="dermatopathy05.html?review=true" class="f18 fc_white">한포진</a>
                            </li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="/s_etc/etc06.do?review=true" class="f32 fc_white">기타질환</a>
                        <ul class="sub">
                            <!-- <li>
                                <a href="etc01.html?review=true" class="f18 fc_white">류마티스</a>
                            </li>
                            <li>
                                <a href="etc02.html?review=true" class="f18 fc_white">자가면역질환</a>
                            </li>
                            <li>
                                <a href="etc03.html?review=true" class="f18 fc_white">성장장애</a>
                            </li>
                            <li>
                                <a href="etc04.html?review=true" class="f18 fc_white">만성피로</a>
                            </li>
                            <li>
                                <a href="etc05.html?review=true" class="f18 fc_white">교통사고 후유증</a>
                            </li> -->
                            <li>
                                <a href="/s_etc/etc06.do?review=true" class="f18 fc_white">골다공증</a>
                            </li>
                            <!-- <li>
                                <a href="etc07.html?review=true" class="f18 fc_white">주부습진</a>
                            </li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
	<section class="main_youtube ">
        <div class="csize01 container">
            <div class="d-flex align-items-center flex-column none">
                <h2 class="title notoS f42 semibold fc_dark wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    서효석의 ‘청폐’
                </h2>
                <p class="f20 medium mt_20 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    대표원장님이 알려주는 건강이야기
                </p>
            </div>

            

            <div class="inner mt_50 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                <div class="tags none">
                    <ul class="f_after">
                        <li class="f20 medium fc_dark">
                            #청폐
                        </li>
                        <li class="f20 medium fc_dark">
                            #한의학이야기
                        </li>
                        <li class="f20 medium fc_dark">
                            #건강정보팁
                        </li>
                    </ul>
                </div>

                <div class="video video_main_youtube wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <!-- youtube -->
                    <iframe id="video_pk"src="https://www.youtube.com/embed/OvpWpauAr-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>

                <div class="video_indicator wow fadeIn d-xl-block d-none" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <ul>
                        <li class="on">
                            <a href="#" data-youtube="https://youtu.be/OvpWpauAr-A">
                                <div class="subtitle">
                                    <span class="pretendard f18 fc_gray bold">01</span> <span class="f18 medium">서효석의 청폐</span>
                                </div>
                                <h2 class="title f28 bold">
                                    장수하고 싶습니까?
                                </h2>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-youtube="https://youtu.be/xQs_09cq9v4">
                                <div class="subtitle">
                                    <span class="pretendard f18 fc_gray bold">02</span> <span class="f18 medium">서효석의 청폐</span>
                                </div>
                                <h2 class="title f28 bold">
                                    코로나19 안걸리는 법
                                </h2>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-youtube="https://youtu.be/kG42ccI6Tr8">
                                <div class="subtitle">
                                    <span class="pretendard f18 fc_gray bold">03</span> <span class="f18 medium">특강 방송대&amp;방송대학TV</span>
                                </div>
                                <h2 class="title f28 bold">
                                    비염을 지나 천식으로
                                </h2>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>


<!-- 스와이퍼 처리할 것 -->
<section class="branch py-lg-5">
<div class="container-lg py-lg-3 my-5 d-flex px-0 align-items-center" style="border-radius: 19px;">
        <div class=" mb-4 d-flex align-items-center justify-content-center flex-column" style="width: 25%; height: auto;  border-radius: 30px">
        <h2 class="p-3" style="line-height:1.5;">평강 한의원 지점</h2>
            
            <div class="p-3 fss"><a href="">서울</a></div>
            <div class="p-3 fss"><a href="">부산</a></div>
            <div class="p-3 fss"><a href="">대구</a></div>
            <div class="p-3 fss"><a href="">광주</a></div>
            <div class="p-3 fss"><a href="">제주</a></div>
            <div class="p-3 fss"><a href="">대전</a></div>
        </div>

        
            
            <div class="swiper mySwiper swiper-branch " style="height:50vw; max-height:600px;border-radius: 50px;">
                <div class="swiper-wrapper " >
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://wwdoctor.com/static/asset/images/sub/branch_s01_img.jpg) center;
                        background-size:cover; width:100%; ">                        
                        
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://wwdoctor.com/static/asset/images/sub/branch_m01_img.jpg) center;
                        background-size:cover; width:100%;">                        
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://wwdoctor.com/static/asset/images/sub/branch_sb01_img.jpg) center;
                        background-size:cover; width:100%;">                        
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://wwdoctor.com/static/asset/images/sub/branch_a01_img.jpg) center;
                        background-size:cover; width:100%;">                        
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://wwdoctor.com/static/asset/images/sub/branch_d01_img.jpg) center;
                        background-size:cover; width:100%;">                        
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-kms">
                        <div style="position:relative; height:100%;
                        background:url(https://www.maisonette.co.kr/web/upload/appfiles/ZaReJam3QiELznoZeGGkMG/3c9b73a32ab7fbd9f9fadc7e8d103c1c.jpg) center;
                        background-size:cover; width:100%;">                        
                        </div>
                    </div>
                
                </div>
            
        </div>   
    </div>
</section>

  

</div>

  
  

  <!-- Initialize Swiper -->
  <script>
    var swiperbranch = new Swiper(".swiper-branch", {
      direction: "vertical",
      slidesPerView: 1,
      spaceBetween: 0,
      loop:true,
      mousewheel: true,
      pagination: {
        el: ".swiper-branch .swiper-pagination",
        clickable: true,
      },
    });
  </script>
   


    
    <!-- <div class="container py-5">
        <h2 class="pb-5">언제라도 문의주세요<br>친절하고 자세히 설명해 드리겠습니다</h2>
        <div class="pb-5">
                <div class="pb-5">
                    <ul class="d-flex justify-content-center">
                        <li class=""><a href="/s_branch/seocho.do">편강한의원 서초점</a></li>
                        <li class=""><a href="/s_branch/myeongdong.do">편강한의원 명동점</a></li>
                        <li class=""><a href="/s_branch/sanbon.do">편강한의원 산본점</a></li>
                        <li class=""><a href="/s_branch/ansan.do">편강한의원 안산점</a></li>
                        <li class=""><a href="/s_branch/daegu.do">편강한의원 대구점</a></li>
                        <li class=""><a href="/s_branch/busan.do">편강한의원 부산점</a></li>
                    </ul>
                    
                </div> -->
           
</aside>









<?php
include_once(G5_THEME_PATH.'/tail.php');