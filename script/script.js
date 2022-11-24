
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

//슬라이드쇼
$(document).ready(function () {
	$(".nav > ul > li").mouseover(function () {
		$(this).find(".submenu").stop().slideDown(200);
	});
	$(".nav > ul > li").mouseout(function () {
		$(this).find(".submenu").stop().slideUp(200);
	});

	slide
	var currentIndex = 0;

	setInterval(function () {
		if (currentIndex < 2) {
			currentIndex++;
		} else {
			currentIndex = 0;
		}

		var slidePosition = currentIndex * (-720) + "px";
		$(".slide-cont").animate({ top: slidePosition }, 800);

	}, 3000);



}
);
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


