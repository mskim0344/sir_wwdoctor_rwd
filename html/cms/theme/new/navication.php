
<!-------------------------- 네비게이션 -------------------------->

<style>
.collapse.in{
    -webkit-transition-delay: 4s;
    transition-delay: 5s;
    visibility: visible;
}

</style>
<nav class="navbar fixed-top navbar-expand-xl navbar-white border-bottom " id="mytop">
  <div class="d-xl-flex align-items-center inner">
	<a class="navbar-brand py-0" href="<?php echo G5_URL?>" class="logo"><img src="/cms/pkimg/t_logo.png" class="img-fluid d-block"></a>
	<button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" 
	aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse  justify-content-between beforin" id="navbarResponsive"  >
	  <ul class="navbar-nav ">
		<?php
		$sql = " select *
					from {$g5['menu_table']}
					where me_use = '1'
					  and length(me_code) = '2'
					order by me_order, me_id ";
		$result = sql_query($sql, false);
		$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
		$menu_datas = array();
		for ($i=0; $row=sql_fetch_array($result); $i++) {
			$menu_datas[$i] = $row;

			$sql2 = " select *
						from {$g5['menu_table']}
						where me_use = '1'
						  and length(me_code) = '4'
						  and substring(me_code, 1, 2) = '{$row['me_code']}'
						order by me_order, me_id ";
			$result2 = sql_query($sql2);
			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
				$menu_datas[$i]['sub'][$k] = $row2;
			}
		}
		$i = 0;
		foreach( $menu_datas as $row ){
			if( empty($row) ) continue; 
		?>			
			<?php if($row['sub']['0']) { ?>
				<li class="nav-item dropdown megamenu-li">
					<a class="nav-link dropdown-toggle ks4 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
					<?php echo $row['me_name'] ?>
					</a>
						<!-- 서브 -->
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<?php
							// 하위 분류
							$k = 0;
							foreach( (array) $row['sub'] as $row2 ){

							if( empty($row2) ) continue; 

							?>
							<a class="dropdown-item ks4 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

							<?php
							$k++;
							}   //end foreach $row2

							if($k > 0)
							echo '</ul>'.PHP_EOL;
							?>
			<?php }else{?>
				<li class="nav-item gnbli">
				<a class="nav-link py-0" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
				</li>
			<?php }?>
		</li>

		<?php
		$i++;
		}   //end foreach $row

		if ($i == 0) {  ?>
			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
		<?php } ?>
		<!-- <li class="nav-item dropdown login">
		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			LOGIN
		  </a>
		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
			
			<?php if($is_admin) { ?><a class="dropdown-item" href="<?php echo G5_URL?>/adm">관리자</a><?php } ?>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/new.php">새글</a>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a>
			<?php if($is_member) { ?>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=<?php echo G5_BBS_URL; ?>/register_form.php">정보수정</a>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/logout.php">로그아웃</a>
			<?php }else{ ?>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/login.php">로그인</a>
			<a class="dropdown-item" href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a>
			<?php } ?>
		  </div>
		</li> -->
	  </ul>
	  <ul class="d-xl-flex mx-2 mb-0 mr-lg-0 until px-0 ko">
            <li class="m-2">
                <a href="/cms/bbs/content.php?co_id=company">편강한의원</a>
                <div class="sub bg-white position-absolute rounded" >
                    <ul id="ul_a_color" class="m-3 ko_13">
                        <li><a href="/s_intro/greeting.do">인사말</a></li>
                        <li><a href="/s_intro/history.do">50여년의 역사</a></li>
                        <li><a href="/s_intro/story.do">편강이야기</a></li>
                        <li><a href="/s_intro/steady_seller.do">편강스테디셀러</a></li>
                        <li><a href="/board/newspaper.do">편강뉴스</a></li>
                        <li><a href="/board/contribution.do">사회공헌</a></li>
                        <li><a href="/board/notice.do">공지사항</a></li>
                        <li><a href="/board/award.do">수상경력</a></li>
                        <li><a href="/board/video.do">편강 TV</a></li>
                        <li><a href="/s_branch/seocho.do">지점안내</a></li>
                    </ul>
                </div>
            </li>
            <li class="m-2">
                <a href="/cms/bbs/content.php?co_id=pk_medicine">편강의학</a>
                <div class="sub  bg-white position-absolute rounded" >
                    <ul id="ul_a_color" class="m-3 ko_13">
                        <li><a href="/s_medicine/medical01.do">원인 치유법</a></li>
                        <li><a href="/s_medicine/medical02.do">생명의 원천,폐</a></li>
                        <li><a href="/s_medicine/medical03.do">폐건강 생활습관</a></li>
                        <li><a href="/s_medicine/medical04.do">한의학의 세계화</a></li>
                        <li><a href="/s_medicine/medical05.do">편강한의원 처방</a></li>
                        <li><a href="/s_medicine/medical06.do">학술 논문 등재</a></li>
                    </ul>
                </div>
            </li>
            <li class="m-2">
                <a href="/cms/bbs/board.php?bo_table=review">사례/후기</a>
                <div class="sub  bg-white position-absolute rounded" >
                    <ul id="ul_a_color" class="m-3 ko_13">
                        <li><a href="javascript:PageView('/board/interview.do','','','','','');">치료 인터뷰</a></li>
                        <li><a href="/board/case.do">치료사례</a></li>
                        <li><a href="/board/review.do">치료후기</a></li>
                        <li><a href="/board/star.do">스타와 함께</a></li>
                    </ul>
                </div>
            </li>
            <li class="m-2">
                <a href="/cms/bbs/board.php?bo_table=Reservation">상담/예약</a>
                <div class="sub  bg-white position-absolute rounded" >
                    <ul id="ul_a_color" class="m-3 ko_13">
                        <li><a href="javascript:PageView('/counsel/counsel.do','','','','','');">의료진상담</a></li>
                        <li><a href="/counsel/reserv.do">온라인예약</a></li>
                        <li><a href="/counsel/qna.do">자주하는 질문</a></li>
                    </ul>
                </div>
            </li>
            <li >
				<ul class="m-2 ">
					<?php if ($is_member) {  ?>
						
							<li><a class="white" href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
							
					<?php } else {  ?>
							
							<li><a class="white" href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
					<?php }  ?>
				<ul>
			</li>	
        </ul>
	</div>
  </div>
</nav>
<script>
        // 내비게이션 바 요소 선택
        const mytop = document.getElementById("mytop");

        // 페이지 로드 시, 화면 너비가 400px 이하인 경우 내비게이션 바를 숨김
        if (window.matchMedia("(max-width: 400px)").matches) {
            mytop.style.top = "-60px";
        }

        let prevScrollY = 0; // 이전 스크롤 위치를 저장하는 변수

        // 스크롤 이벤트 리스너 등록
        window.addEventListener("scroll", () => {
            // 현재 스크롤 위치 확인
            const scrollY = window.scrollY;

            // 화면 너비가 400px 이하인 경우 스크롤을 내릴 때 내비게이션 바를 보이고, 올릴 때 숨김
            if (window.matchMedia("(max-width: 400px)").matches) {
                if (scrollY > prevScrollY) {
                    mytop.style.top = "0";
                } else {
                    mytop.style.top = "-60px";
                }
            }

            // 현재 스크롤 위치를 이전 스크롤 위치 변수에 저장
            prevScrollY = scrollY;
        });
    </script>