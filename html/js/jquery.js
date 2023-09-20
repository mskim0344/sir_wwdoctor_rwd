$(window).scroll(function() {
    // 현재 스크롤 위치 확인
    var scrollY = $(window).scrollTop();

    // 스크롤을 내릴 때, 배경색과 텍스트 색을 변경
    if (scrollY > 100) {
        $("body").addClass('scroll');
        // $("#navi").css({
        //     "background-color": "white",
        //     "color": "#111",
        //     // opacity: "0.5"
        // });
        // $(".white").css({
        //     "color": "#111"
        // });
    } else { // 스크롤을 올릴 때, 다시 초기 색상으로 변경
        $("body").removeClass('scroll');
        // $("#navi").css({
        //     "background-color": "transparent",
        //     "color": "#efebe4"
        // });
        // $(".white").css({
        //     "color": "#efebe4"
        // });
    }
});