
//100% 주기
$(document).ready(function () {
	screenCheck();
	$('.logo .one').click(function () {
		$.scrollify.move('#s-one');
	});
	$('.mainmenu .two').click(function () {
		$.scrollify.move('#s-two');
	});
	$('.mainmenu .three').click(function () {
		$.scrollify.move('#s-three');
	});
	$('.mainmenu .four').click(function () {
		$.scrollify.move('#s-four');
	});
});

$(window).on('resize', function () {
	screenCheck();
});

function applyScroll() {
	$.scrollify({
		section: '.scroll',
		sectionName: 'section-name',
		//standardScrollElements: 'section',
		easing: 'easeOutExpo',
		scrollSpeed: 1100,
		offset: 0,
		scrollbars: true,
		setHeights: true,
		overflowScroll: true,
		updateHash: false,
		touchScroll: true,
	});
}

function screenCheck() {
	var deviceAgent = navigator.userAgent.toLowerCase();
	var agentID = deviceAgent.match(/(iphone|ipod|ipad)/);
	if (agentID || $(window).width() <= 1024) {
		// its mobile screen
		$.scrollify.destroy();
		$('section').removeClass('scroll').removeAttr('style');
		$.scrollify.disable();
	} else {
		// its desktop
		$('section').addClass('scroll');
		applyScroll();
		$.scrollify.enable();
	}
}

//login.html
let sf = document.getElementById("searchForm");
sf.addEventListener("submit", function (e) {
	let msgEle = document.getElementById("id");
	let msgEle2 = document.getElementById("pw");
	if (msgEle.value.length == 0) {
		alert('아이디 또는 비밀번호를 입력하지 않았습니다');
		e.preventDefault();
	}
	else if (msgEle2.value.length == 0) {
		alert('아이디 또는 비밀번호를 입력하지 않았습니다');
		e.preventDefault();
	}
});


// 초기화 버튼 이미지 클릭시
function resetForm1(){
  document.login_form.id.value="";
  document.login_form.pw.value="";
  // 첫번째 입력 요소로 이동
  document.login_form.id.focus();
}

function resetForm() {
document.join_form.id.value="";
document.join_form.pw.value="";
document.join_form.pwcf.value="";
document.join_form.birth.value="";
document.join_form.email.value="";
document.join_form.phone.value="";
document.join_form.name.value="";
// 첫번째 입력 요소로 이동
document.join_form.name.focus();
}

function submitFormRegist() {
	const expNameText = /[가-힣]+$/;
  const expPwText = /^(?=.*[a-zA-Z])(?=.*[~.!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;
  const expIDText = /^(?=.*[a-z])(?=.*[0-9]).{1,16}$/;
  const expPhoneText = /^\d{3}-\d{3,4}-\d{4}$/;
  const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;
  


//이름 유효성 검사
if(document.register.name.value==""){
	window.alert("이름을 입력해주세요.");
	document.register.name.focus();
	event.preventDefault();
	return false; 
}
else if(document.register.name.value.length > 4){
	window.alert("이름을 다시 입력해주세요.");
	document.register.name.focus();
	document.register.name.value="";
	event.preventDefault();
	return false; 
}
else if(!expNameText.test(document.register.name.value)){
	window.alert("한글로 입력할 수 있습니다.");
	document.register.name.focus();
	document.register.name.value="";
	event.preventDefault();
	return false;
 }

  // 아이디 유효성 검사
  if(document.register.id.value==""){
      window.alert("아이디를 입력해주세요.");
      document.register.id.focus();
      event.preventDefault();
      return false; 
  }
  else if(!expIDText.test(document.register.id.value)){
	  window.alert("소문자와 숫자로 입력해주세요.");
	  document.register.id.focus();
	  document.register.id.value="";
	  event.preventDefault();
	  return false;
  }
  else if(document.register.id.value.length > 16 || document.register.id.value.length < 4){
	window.alert("아이디는 5자 이상 15자 이하로 입력해주세요.");
	document.register.id.focus();
	document.register.id.value="";
	event.preventDefault();
	return false;
}

  // 비밀번호 유효성 검사
  if(document.register.pw.value==""){
    window.alert("비밀번호를 입력해주세요.");
    document.register.pw.focus();
    event.preventDefault();
    return false; 
  }
  else if(document.register.pw.value.length > 16 || document.register.pw.value.length < 7){
    window.alert("비밀번호는 8자 이상 15자 이하로 입력해주세요.");
    document.register.pw.focus();
    document.register.pw.value="";
    event.preventDefault();
    return false;
  }
  else if(!expPwText.test(document.register.pw.value)){
    window.alert("영어,숫자,특수문자를 포함하여 비밀번호를 입력해주세요.");
    document.register.pw.focus();
    document.register.pw.value="";
    event.preventDefault();
    return false;
  }  
  // 전화 유효성 검사
  if(document.register.phone.value==""){
    window.alert("전화번호를 입력해주세요.");
    document.register.phone.focus();
    event.preventDefault();
    return false; 
  } 
  else if(!expPhoneText.test(document.register.phone.value)){
    window.alert("예시)000-0000-0000 로 입력해주세요.");
    document.register.phone.focus();
    document.register.phone.value="";
    event.preventDefault();
    return false;
  }
  if(document.register.email.value==""){
    window.alert("이메일을 입력해주세요.");
    document.register.email.focus();
    event.preventDefault();
    return false; 
  } 
  else if(!expEmailText.test(document.register.email.value)){
    window.alert("이메일 규격에 맞게 입력해주세요. example@example.com");
    document.register.email.focus();
    document.register.email.value="";
    event.preventDefault();
    return false;
  }

}
function submitForm(){
  if(document.login_form.id.value==""){
    window.alert("아이디를 입력해주세요.");
    document.login_form.id.focus();
    document.login_form.id.value="";
    event.preventDefault();
    return false; 
  }
  if(document.login_form.pw.value==""){
    window.alert("패스워드를 입력해주세요.");
    document.login_form.pw.focus();
    document.login_form.pw.value="";
    event.preventDefault();
    return false; 
  }
}

  


