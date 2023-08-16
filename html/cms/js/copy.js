$(function() {

    $(".hd_pops_reject").click(function () {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        //$("#" + id[1]).css("display", "none");
        var num = $('.fade').slick('slickCurrentSlide');
        $('.fade').slick('slickRemove',num);

        chkSlide();

        //set_cookie(ck_name,1,exp_time,$(location).attr('href'))
        set_cookie('hd_pops',1,exp_time,$(location).attr('href'))
    });

    $('.hd_pops_close').click(function(){
        var num = $('.fade').slick('slickCurrentSlide');
        $('.fade').slick('slickRemove',num);

        chkSlide();
    });

    $("#self_main li").on("click",function(){
        self_problem($(this).attr("rel"));
    });
    $("#self_problem_ft .btn_choice li").on("click",function(){
        self_score_chk($(this).attr("data-score"));
    });
    $("#self_diagnosis .pop_close").on("click",function(){
        //self_show_main();
        $("#self_diagnosis_wrap").css("display","none")
    });
    $("#self_problem_ft .btn_move li").on("click",function(){
        var ac=$(this).attr("rel");
        var tro=$("#self_tro span").attr("data-tro");
        if(ac=="r"){
            self_show_first(tro);
        }else{
            self_show_main();
        }
    });

});

function self_problem(tro){
    self_show_first(tro);
    $("#myBar").width('10%');
    $("#self_"+tro+" div:first").addClass("pro_on");
    switch(tro){
        case'ato':
            var con="아토피";
            break;
        case'rhi':
            var con="비염";
            break;
        case'ast':
            var con="천식";
            break;
    }
    $("#self_diagnosis #self_tro").html("<span data-tro="+tro+">"+con+" 자가진단</span>");
}
function self_score_chk(p){

    var con=$("#self_tro span").attr("data-tro");
    var next=$("#self_"+con+" .pro_on").next();
    $("#self_"+con+" > div").removeClass("pro_on")
    next.addClass("pro_on");
    var score=parseInt(get_cookie("self_score"))+parseInt(p);
    set_cookie("self_score",score,1);
    if(next.length=="0"){
        var score=get_cookie("self_score");
        $.get('/inc/self_finish.do?s='+score+'&c='+con,self_finish);
        self_show_finish();
    }
    else {
        /*프로세스 bar 10%씩 추가해준다 */
        process = process +10;
        $("#myBar").width(process+'%');
        /*프로세스 bar 10%씩 추가해준다  끝*/
    }
}
function self_finish(res){
    $("#myBar").width('100%');
    $("#self_finish").html(res);
}
function self_show_first(tro){
    /*프로세스 bar 초기화 */
    process = 10;
    $("#myBar").width('10%');
    /*프로세스 bar 초기화 끝 */
    set_cookie("self_score",0,1);
    $("#self_main, #self_finish").hide();
    $("#self_"+tro+", #self_problem_wrap, #self_problem_ft .btn_choice, #self_problem_ft").show();
    $("#self_"+tro+" > div").removeClass("pro_on");
    $("#self_"+tro).siblings().children().removeClass("pro_on");
    $("#self_"+tro+" div:first").addClass("pro_on");
    $("#self_finish").html("");
}
function self_show_main(){
    /*프로세스 bar 초기화 */
    $("#myBar").width('10%');
    $(".self_problem").css('display','none');
    /*프로세스 bar 초기화 끝 */
    set_cookie("self_score",0,1);
    $("#self_problem_wrap, #self_finish, #self_problem_ft").hide();
    $("#self_main").show();
    $("#self_finish, #self_tro").html("");
}
function self_show_finish(){
    $("#self_main, #self_problem_wrap, #self_problem_ft .btn_choice").hide();
    $("#self_finish").show();
    set_cookie("self_score",0,1);
}

function layer_open(n,n1)
{
    var pwrap=$("#"+n+"_wrap");
    var lcont=$('#'+n);
    pwrap.fadeIn();
    if(n=='web_layer')
    {
        lcont.css('width',$(window).width()/2+'px');
        lcont.css('height',$(window).height()/1.4+'px');
        $("#webtoon_"+n1).fadeIn();
        $("#web_layer .web_btn_"+n1).addClass("on");
    }
    else if(n=='self_diagnosis') {
        /* 기존의 저장되어 있던 쿠키의 내용을 초기화 한다*/
        self_show_main();
    }
    if(lcont.outerHeight()<$(document).height())
        lcont.css('margin-top','-'+lcont.outerHeight()/2-90+'px');
    else
        lcont.css('top','0px');

    if(lcont.outerWidth()<$(document).width())
        lcont.css('margin-left','-'+lcont.outerWidth()/2+'px');
    else
        lcont.css('left','0px');
}

/// 화면의 중앙에 레이어띄움
function showLayer() {
    /**********************************
     * 화면 축소에서 최대화 했을 때 문제로 주석
     **********************************/
    //화면의 높이와 너비를 구한다.
    // var maskHeight = $(document).height();
    // var maskWidth = $(window).width();

    //마스크의 높이와 너비를 화면 것으로 만들어 전체 화면을 채운다.
    // $('#fade').css({ 'width': maskWidth, 'height': maskHeight });

    $("#hd_pop").css("position", "absolute");
    $("#hd_pop").css("top", Math.max(0, (($(window).height() - $("#hd_pop").outerHeight()) / 2) + $(window).scrollTop() - 100) + "px");
    $("#hd_pop").css("left", Math.max(0, (($(window).width() - $("#hd_pop").outerWidth()) / 2) + $(window).scrollLeft()) + "px");

    $('#fade').show();
    $('#hd_pop').show();
    $(".hd_pops_footer").show();
}

function set_cookie(name,value,expirehours,domain){
    var today=new Date();
    today.setTime(today.getTime()+(60*60*1000*expirehours));
    document.cookie=name+"="+escape(value)+"; path=/; expires="+today.toGMTString()+";";
    if(domain){
        document.cookie+="domain="+domain+";";
    }
}

function get_cookie(name) {
    var find_sw = false;
    var start, end;
    for (i = 0; i <= document.cookie.length; i++) {
        start = i;
        end = start + name.length;
        if (document.cookie.substring(start, end) == name) {
            //document.getElementById(name).style.display = "none";
            if(name != "self_score")
            {
                document.getElementById(name).remove();
            }
            find_sw=true
            break;
        }
    }
    if(find_sw==true)
    {
        start=end+1;
        end=document.cookie.indexOf(";",start);
        if(end<start)end=document.cookie.length;
        chkSlide();
        return unescape(document.cookie.substring(start,end));

    }

}
//슬라이드 여부 체크 슬라이드가 없으면 영역을 날려버린다
function chkSlide()
{
    var box = $(".hd_pops_close");
    if(box.length == 0)
    {
        $("#fade").detach();
        $("#hd_pop").detach();
    }
    $("#fade").detach();
    $("#hd_pop").detach();
}

//툭수문자
function isSpacial(inTxt) {
    return inTxt.replace(/[\{\}\[\]\/?.,;:|\)*~`!^\-_+┼<>@\#$%&\'\"\\\(\=]/gi, '');
}

//번호
function isNumber(inTxt) {
    return inTxt.replace(/[^0-9]/g,"");
}

//핸드폰 번호 형식 000-0000-0000
function isHpType(inTxt) {
    return inTxt.replace(/[^0-9]/g, "").replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,"$1-$2-$3").replace("--", "-")
}

//한글
function isHangul(inTxt) {
    return inTxt.replace(/[^ㄱ-ㅎㅏ-ㅣ가-힣a-zA-Z-|\\u318D\\u119E\\u11A2\\u2022\\u2025a\\u00B7\\uFE55\s]/gi,'');
}

//한글
function notIsSpacial(inTxt) {
    return inTxt.replace(/[^ㄱ-ㅎㅏ-ㅣ가-힣a-zA-Z0-9\s]/gi,'');
}

//한글 방지
function notIsHangul(inTxt) {
    return inTxt.replace( /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/gi, '' );
}

//영문+숫자
function isEngNumber(inTxt) {
    return inTxt.replace(/[^a-zA-Z0-9\s]/gi,'');
}

//이메일
function isEmail(inTxt) {
    return inTxt.replace(/[^a-z0-9.\-_]/gi, '');
}

//이메일 형식
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}
//모바일 한글 방지
function moIsName(inTxt) {
    return inTxt.replace(/[^ㄱ-ㅣ가-힣a-zA-Z|\u318D\u119E\u11A2\u2022\u2025a\u00B7\uFE55]/gi, '' );
}

//줄바꿈 script
function replaceBrTag(str)
{
    if (str == undefined || str == null)
    {
        return "";
    }

    str = str.replace(/\r\n/ig, '<br>');
    str = str.replace(/\\n/ig, '<br>');
    str = str.replace(/\n/ig, '<br>');
    return str;
}

//url 복사
function clip(){

    var url = '';
    var textarea = document.createElement("textarea");
    document.body.appendChild(textarea);
    url = window.document.location.href;
    textarea.value = url;
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);
    alert("URL이 복사되었습니다.")
}

function map_lst(id,x,y,w,h,title)
{
    var container = document.getElementById(id);
    container.style.width = w + 'px';
    container.style.height = h + 'px';

    var options = {
        center: new daum.maps.LatLng(x, y),
        level: 3
    };

    var map = new daum.maps.Map(container, options);

    var mapTypeControl = new daum.maps.MapTypeControl();
    map.addControl(mapTypeControl, daum.maps.ControlPosition.TOPRIGHT);

    var zoomControl = new daum.maps.ZoomControl();
    map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);

    var markerPosition  = new daum.maps.LatLng(x, y);
    var marker = new daum.maps.Marker({
        position: markerPosition
    });
    marker.setMap(map);
    var iwContent = '<div style="padding:5px;width: 148px;text-align: center;"><b>&nbsp;' + title + '</b></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
        iwPosition = new daum.maps.LatLng(x, y); //인포윈도우 표시 위치입니다

    // 인포윈도우를 생성합니다
    var infowindow = new daum.maps.InfoWindow({
        position : iwPosition,
        content : iwContent
    });

    // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
    infowindow.open(map, marker);

}

function PageView(url, urlTi1, urlVa1, urlTi2, urlVa2, mbId)
{
    if(!mbId)
    {
        if(confirm("로그인이 필요한 페이지 입니다.\r\n로그인 하시겠습니까?"))
        {
            location.href="/login/login.do";
        }
    }
    else {
        if(urlTi1 == '')
        {
            location.href=url;
        }
        else {
            location.href=url + "?" + urlTi1 + "=" + urlVa1 + "&" + urlTi2 + "=" + urlVa2;
        }

    }
}

function idChk(mbId)
{
    const exId='admin,administrator,webmaster,sysop,manager,root,su,guest,missyoon,pkmall,wwdoctor';
    const arr = exId.split(",");

    var flag = false;

    for ( var i = 0; i < arr.length; i++ ) {
        if(arr[i].match(mbId))
        {
            flag = true;
            break;
        }
        else {
            flag = false;
        }
    }

    return flag;
}

// 금지단어
var ban = new Array(
    '18아','18놈','18새끼','18년','18뇬','18노','18것','18넘','개년','개놈','개뇬','개새','개색끼','개세끼','개세이','개쉐이','개쉑','개쉽','개시키',
    '개자식','개좆','게색기','게색끼','광뇬','뇬','눈깔','뉘미럴','니귀미','니기미','니미','도촬','되질래','뒈져라','뒈진다','디져라','디진다','디질래','병쉰',
    '병신','뻐큐','뻑큐','뽁큐','삐리넷','새꺄','쉬발','쉬밸','쉬팔','쉽알','스패킹','스팽','시벌','시부랄','시부럴','시부리','시불','시브랄','시팍','시팔',
    '시펄','실밸','십8','십쌔','십창','싶알','쌉년','썅놈','쌔끼','쌩쑈','썅','써벌','썩을년','쎄꺄','쎄엑','쓰바','쓰발','쓰벌','쓰팔','씨8','씨댕','씨바',
    '씨발','씨뱅','씨봉알','씨부랄','씨부럴','씨부렁','씨부리','씨불','씨브랄','씨빠','씨빨','씨뽀랄','씨팍','씨팔','씨펄','씹','아가리','아갈이','엄창','접년',
    '잡놈','재랄','저주글','조까','조빠','조쟁이','조지냐','조진다','조질래','존나','존니','좀물','좁년','좃','좆','좇','쥐랄','쥐롤','쥬디','지랄','지럴','지롤',
    '지미랄','쫍빱','凸','퍽큐','뻑큐','빠큐','ㅅㅂㄹㅁ');
//내용 호출
function wordChk(obj)
{
    // filtering
    var banWord = filterWord(obj);
    if (banWord.length > 0)
    {
        return true;
    }
    return false;
}

// 금지단어 판단
function filterWord(obj)
{
    for (prop in ban)
    {
        if(obj.toLowerCase().indexOf(ban[prop]) != -1)
        {
            return ban[prop];
        }
    }
    return '';
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function kakaoFunction()
{
    //gtag('event','kakaochat', { 'event_category' : 'kakaochat', 'event_action' : 'kakaoclick'});
    window.open('https://pf.kakao.com/_pLxaJq/chat');
    return false;
}

//구글 애즈
function gtag_report_conversion(url,sendTo) {
    var callback = function () {
        if (typeof(url) != 'undefined') {
            window.location = url;
        }
    };
    gtag('event', 'conversion', {
        'send_to': sendTo,
        'event_callback': callback
    });
    return false;
}
