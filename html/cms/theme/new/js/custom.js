/*

http://ety.kr

*/

/*

$(function() {

	// navbar
	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";

	$(window).on("load resize", function() {
	  if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
		  function() {
			const $this = $(this);
			$this.addClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "true");
			$this.find($dropdownMenu).addClass(showClass);
		  },
		  function() {
			const $this = $(this);
			$this.removeClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "false");
			$this.find($dropdownMenu).removeClass(showClass);
		  }
		);
	  } else {
		$dropdown.off("mouseenter mouseleave");
	  }
	});

});
*/



	$(window).scroll(function (){
		if($(window).width() >= 1200){		
			if( $(window).scrollTop() > 80  ){
				//햄버거버튼이 없고 스크롤이 80넘었을때만 적용
				$('body').addClass('scrolldown');
				$('.navbar-brand img').attr('src','/cms/pkimg/t_logo_on.png')
			}else{
				$('body').removeClass('scrolldown')
				$('.navbar-brand img').attr('src','/cms/pkimg/t_logo.png')
			}
		}else{

			$('.navbar-brand img').attr('src','/cms/pkimg/t_logo_on.png')
			//로고 검정으로 교환
		}
	})

if($(window).width() < 1200 ){
	$('.navbar-brand img').attr('src','/cms/pkimg/t_logo_on.png')
}


$(window).resize(function(){

	if($(window).width() < 1200 ){
		$('.navbar-brand img').attr('src','/cms/pkimg/t_logo_on.png')
	}

})

// 햄버거버튼 클릭시 html태그에 openall클래스 토글처리
$("button.navbar-toggler").click(function(){
	$("html").toggleClass("openall")
})

$(".sendmail").click(function(){
	var surl = $("#send_url").val();
	var ety_name = $("input[name=ety_name]").val();
	var ety_phone = $("input[name=ety_phone]").val();
	var ety_email = $("input[name=ety_email]").val();
	var ety_content = $("#ety_content").val();

	if(ety_name == '')
	{
		alert('담당자를 입력해주세요.');
		return false;
	}
	if(ety_phone == '')
	{
		alert('연락처를 입력해주세요.');
		return false;
	}
	if(ety_email == '')
	{
		alert('이메일을 입력해주세요.');
		return false;
	}
	if(ety_content == '')
	{
		alert('문의내용을 입력해주세요.');
		return false;
	}


	if($("input:checkbox[name=agree]").is(":checked") != true) {
		alert('이용약관에 동의하셔야 합니다.');
		return false;
	}

	var url = surl + "/contact.php";
	var params = "ety_name=" + ety_name + "&ety_phone=" + ety_phone + "&ety_email=" + ety_email + "&ety_content=" + ety_content;

	$.ajax({      
		type:"POST",  
		url:url,
		data:params,
		success:function(data){	
			alert('문의가 등록되었습니다. 최대한 빠르게 연락드리겠습니다.')
			location.reload();
		}
	});


	

});

$("#familysite .tbtn").click(function(){
	$(this).next().toggle()	
})

