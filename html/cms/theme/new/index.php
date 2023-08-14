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

<link rel="stylesheet" href="/cms/theme/new/css/common_copy.css">
<link rel="stylesheet" href="/cms/theme/new/css/main_copy.css">
<link rel="stylesheet" href="/cms/theme/new/css/sub_copy.css">








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




<section class="subject_container">
        <div class="csize01">

            <div class="subject_list_container">
                <ul>

                    <li class="subject subject01 on" style="display: block;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span>역시, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                콧병의 원인을 바로잡아 만성비염을 치료하다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [비염]  폐 기능이 약해지면 찾아오는 비염
                            </p>
                        </div>
                    </li>

                    <li class="subject subject02" style="display: none;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span> 천식, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                악화 요인을 차단하여 천식을 치료하다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [천식]  근본 치료가 필요한 천식
                            </p>
                        </div>
                    </li>

                    <li class="subject subject03" style="display: none;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span>COPD, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                폐 기능을 회복하여 COPD를 치료하다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [COPD]  치료의 핵심, 면역력
                            </p>
                        </div>
                    </li>

                    <li class="subject subject04" style="display: none;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span>호흡기질환, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                폐포와 기관지 강화로 호흡기질환을 치료하다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [호흡기질환]  폐 기능을 강화로 호흡기를 튼튼하게
                            </p>
                        </div>
                    </li>

                    <li class="subject subject05" style="display: none;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span>피부질환, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                아토피는 치료할 수 있습니다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [피부질환]  종합적인 근본 치료
                            </p>
                        </div>
                    </li>

                    <li class="subject subject06" style="display: none;">
                        <div class="image">
                            <div class="inner"></div>
                        </div>
                        <h2 class="title notoS f64 medium fc_dark">
                            <span>기타질환, 편강한의원</span>
                        </h2>
                        <div class="contents mt_30">
                            <p class="subtitle f28 medium">
                                면역력과 심폐기능 강화로 질환 치료가 가능합니다
                            </p>
                            <p class="text f20 fc_gray mt_10">
                                [기타질환]  편강한의원의 근본적 치료
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="subject_indicator">
                <ul class="subject_selector">
                    <li class="on">
                        <button type="button" class="f28 medium fc_dark" data-index="1">
                            <span class="number pretendard">1</span> 비염  鼻炎
                        </button>
                    </li>
                    <li>
                        <button type="button" class="f28 medium fc_dark" data-index="2">
                            <span class="number pretendard">2</span> 천식  喘息
                        </button>
                    </li>
                    <li>
                        <button type="button" class="f28 medium fc_dark" data-index="3">
                            <span class="number pretendard">3</span> COPD
                        </button>
                    </li>
                    <li>
                        <button type="button" class="f28 medium fc_dark" data-index="4">
                            <span class="number pretendard">4</span> 호흡기질환  呼吸氣
                        </button>
                    </li>
                    <li>
                        <button type="button" class="f28 medium fc_dark" data-index="5">
                            <span class="number pretendard">5</span> 피부질환  皮膚
                        </button>
                    </li>
                    <li>
                        <button type="button" class="f28 medium fc_dark" data-index="6">
                            <span class="number pretendard">6</span> 기타질환
                        </button>
                    </li>
                </ul>
              
            </div>

            <div class="deco_image wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                <img src="https://www.wwdoctor.com/static/asset/images/main/subject_img_02.jpg" alt="" clas="">
            </div>

        </div>
</section>
<aside class="check_symtom_container">
        <div class="csize01">

            <h2 class="title notoS f42 semibold fc_dark wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                내 증상 확인하기
            </h2>
            <p class="fc_dark wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">증상을 먼저 알면 치료에 도움이 됩니다.</p>
            <a href="javascript:layer_open('self_diagnosis');" class="btn_submit f20 medium fc_white wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                자가진단 시작하기
            </a>

        </div>
</aside>
<aside class="latest_consult_container">
        <div class="csize01">

            <h2 class="title notoS f42 semibold fc_white wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                의료진 상담하기
            </h2>

            <div class="inner wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="latest_consult">

                    <div class="swiper-container swiper-container-initialized swiper-container-vertical">
                        <ul class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, -144px, 0px);"><li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" style="height: 24px;" data-swiper-slide-index="2">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[편강한약]</td>
                                                                <td> 서초점</td>
                                                                <td class="ellipsis">약주문</td>
                                                                <td>양**</td>
                                                                <td>2023-07-21</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li><li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="height: 24px;" data-swiper-slide-index="3">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[천식]</td>
                                                                <td> 안산점</td>
                                                                <td class="ellipsis">비염 천식</td>
                                                                <td>김**</td>
                                                                <td>2023-07-13</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li><li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="height: 24px;" data-swiper-slide-index="4">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[기타]</td>
                                                                <td> 대구점</td>
                                                                <td class="ellipsis">교통사고 한약</td>
                                                                <td>최**</td>
                                                                <td>2023-07-06</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                            
                            
                                
                                    
                                        <li class="swiper-slide" style="height: 24px;" data-swiper-slide-index="0">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[비염]</td>
                                                                <td> 명동점</td>
                                                                <td class="ellipsis">만성 비염입니다</td>
                                                                <td>박**</td>
                                                                <td>2023-08-08</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                                        
                                        
                                    
                                        <li class="swiper-slide" style="height: 24px;" data-swiper-slide-index="1">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[편강한약]</td>
                                                                <td> 부산점</td>
                                                                <td class="ellipsis">천식 </td>
                                                                <td>남**</td>
                                                                <td>2023-07-31</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                                        
                                        
                                    
                                        <li class="swiper-slide swiper-slide-prev" style="height: 24px;" data-swiper-slide-index="2">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[편강한약]</td>
                                                                <td> 서초점</td>
                                                                <td class="ellipsis">약주문</td>
                                                                <td>양**</td>
                                                                <td>2023-07-21</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                                        
                                        
                                    
                                        <li class="swiper-slide swiper-slide-active" style="height: 24px;" data-swiper-slide-index="3">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[천식]</td>
                                                                <td> 안산점</td>
                                                                <td class="ellipsis">비염 천식</td>
                                                                <td>김**</td>
                                                                <td>2023-07-13</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                                        
                                        
                                    
                                        <li class="swiper-slide swiper-slide-next" style="height: 24px;" data-swiper-slide-index="4">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[기타]</td>
                                                                <td> 대구점</td>
                                                                <td class="ellipsis">교통사고 한약</td>
                                                                <td>최**</td>
                                                                <td>2023-07-06</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li>
                                        
                                        
                                    
                                
                                
                            
                        <li class="swiper-slide swiper-slide-duplicate" style="height: 24px;" data-swiper-slide-index="0">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[비염]</td>
                                                                <td> 명동점</td>
                                                                <td class="ellipsis">만성 비염입니다</td>
                                                                <td>박**</td>
                                                                <td>2023-08-08</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li><li class="swiper-slide swiper-slide-duplicate" style="height: 24px;" data-swiper-slide-index="1">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[편강한약]</td>
                                                                <td> 부산점</td>
                                                                <td class="ellipsis">천식 </td>
                                                                <td>남**</td>
                                                                <td>2023-07-31</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li><li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" style="height: 24px;" data-swiper-slide-index="2">
                                            <a href="/counsel/counsel.do">
                                                <h3 class="f16 fc_white f_after">
                                                    <table style="width:600px;table-layout: fixed;">
                                                        <colgroup>
                                                            <col style="width:70px;">
                                                            <col style="width:60px;">
                                                            <col style="width:250px;">
                                                            <col style="width:50px;">
                                                            <col style="width:100px;">
                                                            <col style="width:70px;">
                                                        </colgroup>
                                                        <tbody>
                                                            <tr>
                                                                <td>[편강한약]</td>
                                                                <td> 서초점</td>
                                                                <td class="ellipsis">약주문</td>
                                                                <td>양**</td>
                                                                <td>2023-07-21</td>
                                                                <td>답변완료</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>


                                                </h3>
                                            </a>
                                        </li></ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <a href="/counsel/counsel.do" class="btn_link">
                    <span class="sr_only">상담하기 게시판 바로가기</span>
                </a>
            </div>

        </div>
</aside>
<section class="pyeonkang">
        <div class="csize01">

            <div class="image wow fadeInUp" data-wow-delay="0.3s" data-wow-offset="500" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <img src="https://www.wwdoctor.com/static/asset/images/main/pkt_product.jpg" alt="">
            </div>

            <div class="contents">
                <h2 class="title notoS f42 semibold fc_dark wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    편강탕(扁康湯)
                </h2>
                <p class="f20 mt_40 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    면역력과 자가 치유 능력을 극대화 시키고 폐의 기능을 활발하게 해줍니다.<br>
                    <b>편한, 편도선의 (편 : 扁) 몸을 건강하게 한다(강 : 康)</b>
                </p>
                <a href="/s_medicine/medical05.do" class="btn_link move_arrow mt_80 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    자세히 보기
                    <div class="btn_arrow">
                        <span class="arrow"></span>
                    </div>
                </a>
            </div>

            <div class="pop wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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
            </div>

        </div>
</section>
<aside class="main_review">
        <div class="csize01">

            <h2 class="title notoS f42 semibold fc_white wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                원인 치료 경험담
            </h2>
            <p class="f20 medium fc_white mt_20 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                편강의학을 경험하신 분들의 소중한 치료 후기
            </p>

            <div class="video mt_60 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
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

        <div class="right">
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
	<section class="main_youtube">
        <div class="csize01">

            <h2 class="title notoS f42 semibold fc_dark wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                서효석의 ‘청폐’
            </h2>
            <p class="f20 medium mt_20 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                대표원장님이 알려주는 건강이야기
            </p>

            <div class="inner mt_50 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                <div class="tags">
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
                    <iframe src="https://www.youtube.com/embed/OvpWpauAr-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>

                <div class="video_indicator wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
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
	<aside class="branch">
    <div class="csize01">
        <h2>언제라도 문의주세요<br>친절하고 자세히 설명해 드리겠습니다</h2>
        <div class="cbox">
            <div class="menu">
                <ul>
                    <li class=""><a href="/s_branch/seocho.do">편강한의원 서초점</a></li>
                    <li class=""><a href="/s_branch/myeongdong.do">편강한의원 명동점</a></li>
                    <li class=""><a href="/s_branch/sanbon.do">편강한의원 산본점</a></li>
                    <li class=""><a href="/s_branch/ansan.do">편강한의원 안산점</a></li>
                    <li class="on"><a href="/s_branch/daegu.do">편강한의원 대구점</a></li>
                    <li class=""><a href="/s_branch/busan.do">편강한의원 부산점</a></li>
                </ul>
                <div class="controls">
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <div class="swiper-pagination swiper-pagination-fraction"><span class="swiper-pagination-current">5</span> / <span class="swiper-pagination-total">6</span></div>
                </div>
            </div>
            <div id="branch_swiper">
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <div class="swiper-wrapper" style="transform: translate3d(-9980px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 18 : 30<br>
                                            09 : 30 - 18 : 00 (동절기 1/2/12월)<br>
                                            10 : 00 - 18 : 00 (서효석 대표원장)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 16 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            13 : 00 - 14 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일 · 일요일
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_s01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/seocho.do">편강한의원 서초점</a></p>
                                <p class="addr">서울시 서초구 서운로 1길 21 (서초동, 편강한의원)</p>
                                <p class="tel"><span>TEL 02.518.7777</span><span>FAX 02.581.1570</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_m01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/myeongdong.do">편강한의원 명동점</a></p>
                                <p class="addr">서울특별시 중구 수표로5 1,2층 (충무로2가)</p>
                                <p class="tel"><span>TEL 02.757.1717</span><span>FAX 02.757.1713</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_sb01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/sanbon.do">편강한의원 산본점</a></p>
                                <p class="addr">경기도 군포시 산본로323번길 16-15 5층 (산본동, 광림빌딩)</p>
                                <p class="tel"><span>TEL 031.397.7733</span><span>FAX 031.397.6766</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_a01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/ansan.do">편강한의원 안산점</a></p>
                                <p class="addr">경기도 안산시 단원구 광덕4로 250 (고잔동) 씨티프라자 201호</p>
                                <p class="tel"><span>TEL 031.487.7773</span><span>FAX 031.485.7773</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_d01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/daegu.do">편강한의원 대구점</a></p>
                                <p class="addr">대구광역시 수성구 달구벌대로 2262(수성동, 편강한의원)</p>
                                <p class="tel"><span>TEL 053.953.7777</span><span>FAX 053.755.5506</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="5" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_b01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/busan.do">편강한의원 부산점</a></p>
                                <p class="addr">부산 부산진구 서면로 74 17층 1702호 (부전동, 아이온시티)</p>
                                <p class="tel"><span>TEL 051.636.7777</span><span>FAX 051.805.7771</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="0" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 18 : 30<br>
                                            09 : 30 - 18 : 00 (동절기 1/2/12월)<br>
                                            10 : 00 - 18 : 00 (서효석 대표원장)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 16 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            13 : 00 - 14 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일 · 일요일
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_s01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/seocho.do">편강한의원 서초점</a></p>
                                <p class="addr">서울시 서초구 서운로 1길 21 (서초동, 편강한의원)</p>
                                <p class="tel"><span>TEL 02.518.7777</span><span>FAX 02.581.1570</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="1" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_m01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/myeongdong.do">편강한의원 명동점</a></p>
                                <p class="addr">서울특별시 중구 수표로5 1,2층 (충무로2가)</p>
                                <p class="tel"><span>TEL 02.757.1717</span><span>FAX 02.757.1713</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide" data-swiper-slide-index="2" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_sb01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/sanbon.do">편강한의원 산본점</a></p>
                                <p class="addr">경기도 군포시 산본로323번길 16-15 5층 (산본동, 광림빌딩)</p>
                                <p class="tel"><span>TEL 031.397.7733</span><span>FAX 031.397.6766</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_a01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/ansan.do">편강한의원 안산점</a></p>
                                <p class="addr">경기도 안산시 단원구 광덕4로 250 (고잔동) 씨티프라자 201호</p>
                                <p class="tel"><span>TEL 031.487.7773</span><span>FAX 031.485.7773</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_d01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/daegu.do">편강한의원 대구점</a></p>
                                <p class="addr">대구광역시 수성구 달구벌대로 2262(수성동, 편강한의원)</p>
                                <p class="tel"><span>TEL 053.953.7777</span><span>FAX 053.755.5506</span></p>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_b01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/busan.do">편강한의원 부산점</a></p>
                                <p class="addr">부산 부산진구 서면로 74 17층 1702호 (부전동, 아이온시티)</p>
                                <p class="tel"><span>TEL 051.636.7777</span><span>FAX 051.805.7771</span></p>
                            </div>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 18 : 30<br>
                                            09 : 30 - 18 : 00 (동절기 1/2/12월)<br>
                                            10 : 00 - 18 : 00 (서효석 대표원장)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            09 : 30 - 16 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            13 : 00 - 14 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일 · 일요일
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_s01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/seocho.do">편강한의원 서초점</a></p>
                                <p class="addr">서울시 서초구 서운로 1길 21 (서초동, 편강한의원)</p>
                                <p class="tel"><span>TEL 02.518.7777</span><span>FAX 02.581.1570</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_m01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/myeongdong.do">편강한의원 명동점</a></p>
                                <p class="addr">서울특별시 중구 수표로5 1,2층 (충무로2가)</p>
                                <p class="tel"><span>TEL 02.757.1717</span><span>FAX 02.757.1713</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_sb01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/sanbon.do">편강한의원 산본점</a></p>
                                <p class="addr">경기도 군포시 산본로323번길 16-15 5층 (산본동, 광림빌딩)</p>
                                <p class="tel"><span>TEL 031.397.7733</span><span>FAX 031.397.6766</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_a01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/ansan.do">편강한의원 안산점</a></p>
                                <p class="addr">경기도 안산시 단원구 광덕4로 250 (고잔동) 씨티프라자 201호</p>
                                <p class="tel"><span>TEL 031.487.7773</span><span>FAX 031.485.7773</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="4" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_d01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/daegu.do">편강한의원 대구점</a></p>
                                <p class="addr">대구광역시 수성구 달구벌대로 2262(수성동, 편강한의원)</p>
                                <p class="tel"><span>TEL 053.953.7777</span><span>FAX 053.755.5506</span></p>
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="5" style="margin-right: 36px;">
                            <div class="cont01">
                                <p class="title">진료안내</p>
                                <ul class="time">
                                    <li>
                                        <p class="st"><span>평</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 6 : 30<br>
                                            오전 9 : 30 ~ 오후 6 : 00 (동절기 1/2/12월)
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>토</span><span>요</span><span>일</span></p>
                                        <p class="cont">
                                            오전 9 : 30 ~ 오후 4 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>점</span><span>심</span><span>시</span><span>간</span></p>
                                        <p class="cont">
                                            오후 1 : 00 ~ 오후 2 : 00
                                        </p>
                                    </li>
                                    <li>
                                        <p class="st"><span>휴</span><span>진</span></p>
                                        <p class="cont">
                                            공휴일·일요일·매주 수요일<br>
                                            *단, 공휴일이 있는 주에는 수요일 정상 진료
                                        </p>
                                    </li>
                                </ul>
                                <a href="/counsel/reserv.do" class="btn_reserv move_arrow">
                                    진료예약 하기
                                    <div class="btn_arrow">
                                        <span class="arrow"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="cont02">
                                <img src="/static/asset/images/sub/branch_b01_img.jpg" alt="">
                                <p class="title"><a href="/s_branch/busan.do">편강한의원 부산점</a></p>
                                <p class="addr">부산 부산진구 서면로 74 17층 1702호 (부전동, 아이온시티)</p>
                                <p class="tel"><span>TEL 051.636.7777</span><span>FAX 051.805.7771</span></p>
                            </div>
                        </div></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </div>
</aside>























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