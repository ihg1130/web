<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="generator" content="Rhymix">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>타투컨벤션 - 맞춤검색</title>
	<link rel="stylesheet" href="css/nav.css">
	<script>
		function checkOnlyOne(element) {
  
  const checkboxes 
      = document.getElementsByName("address");
  
  checkboxes.forEach((cb) => {
    cb.checked = false;
  })
  
  element.checked = true;
}
function checkOnlyOne1(element) {
  
  const checkboxes 
      = document.getElementsByName("genre");
  
  checkboxes.forEach((cb) => {
    cb.checked = false;
  })
  
  element.checked = true;
}
function checkOnlyOne2(element) {
  
  const checkboxes 
      = document.getElementsByName("subject");
  
  checkboxes.forEach((cb) => {
    cb.checked = false;
  })
  
  element.checked = true;
}
function checkOnlyOne3(element) {
  
  const checkboxes 
      = document.getElementsByName("piece");
  
  checkboxes.forEach((cb) => {
    cb.checked = false;
  })
  
  element.checked = true;
}
	</script>
</head>
<body>
<section class="scroll s-one" data-section-name="s-one">
        <div class="container">
            <div id="header" class="cf">
                <div class="wrap2">
                    <div class="logo">
                        <a class="one" href="main.php"><img src="images/logo.png" alt="로고"></a>
                    </div>
                    <div class="nav">
                        <ul class="mainmenu">
                            <li><a class="two">SERVICES</a></li>
                            <li><a class="three">PORTFOLIO</a></li>
                            <li><a class="four">ARTIST</a></li>
                            <?php if(!isset($_SESSION['id'])){
                                echo "<li><a class='five' href='login.php'>LOGIN</a></li>";
                                }
                                else{
                                echo"<li><a class='five' href='logoutProcess.php'>LOGOUT</a></li>";
                                echo"<li><a class='five' href='update.php'>MY PAGE</a></li>";
                                }
                                ?></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="main">
	<div class="body3">
		<div class="content clearfix" id="content">
			<div class="tool_header_wrap">
				<a href="#" class="act_btn_back" onclick="history.go(-1);return false;" alt="뒤로가기"><span><i
							class="xi-angle-left"></i></span></a>
				<span class="bh_title">맞춤검색</span>
			</div>
			<form  name="post" action="postProcess.php" method="POST">
            <input type="hidden" name="userid" value="post">
				    <div class="bh bh_view">
							<p class="bh fs-18 fw-b mb-5">지역</p>
							<ul>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="경기남부">
									<label for="category_1-4">경기남부</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="경기북부">
									<label for="category_1-5">경기북부</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="인천">
									<label for="category_1-6">인천</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="부산">
									<label for="category_1-7">부산</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="대구">
									<label for="category_1-8">대구</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="대전">
									<label for="category_1-9">대전</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="전북">
									<label for="category_1-10">전북</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="전남">
									<label for="category_1-11">전남</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="충북">
									<label for="category_1-12">충북</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="충남">
									<label for="category_1-13">충남</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="경북">
									<label for="category_1-14">경북</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="경남">
									<label for="category_1-15">경남</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="광주">
									<label for="category_1-17">광주</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="강원">
									<label for="category_1-18">강원</label>
								</li>
								<li>
									<input class="category_1" type="checkbox" name="address" id="addreess" onclick='checkOnlyOne(this)'
										value="제주도">
									<label for="category_1-20">제주도</label>
								</li>
							</ul>
						
					</div>
					<div class="bh row_group">
						
							<p class="bh fs-18 fw-b mb-5">장르</p>
							<ul>
							<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="없음">
									<label for="category_2-0">없음</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="이레즈미">
									<label for="category_2-0">이레즈미</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="블랙워크">
									<label for="category_2-1">블랙워크</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="올드스쿨">
									<label for="category_2-2">올드스쿨</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="뉴스쿨">
									<label for="category_2-3">뉴스쿨</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="레터링">
									<label for="category_2-4">레터링</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="미니타투">
									<label for="category_2-5">미니타투</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="일러스트">
									<label for="category_2-6">일러스트</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="수채화">
									<label for="category_2-7">수채화</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="라인워크">
									<label for="category_2-8">라인워크</label>
								</li>
								<li>
									<input class="category_2" type="checkbox" name="genre" id="genre" onclick='checkOnlyOne1(this)'
										value="커버업">
									<label for="category_2-11">커버업</label>
								</li>
							</ul>
					</div>
					<div class="bh row_group">
						
							<p class="bh fs-18 fw-b mb-5">주제</p>
							<ul>
							<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="없음">
									<label for="category_3-0">없음</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="꽃">
									<label for="category_3-0">꽃</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="고래">
									<label for="category_3-1">고래</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="장미">
									<label for="category_3-2">장미</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="맹수">
									<label for="category_3-3">맹수</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="나침반">
									<label for="category_3-4">나침반</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="뱀">
									<label for="category_3-5">뱀</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="인물">
									<label for="category_3-6">인물</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="커플">
									<label for="category_3-7">커플</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="용">
									<label for="category_3-8">용</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="반려동물">
									<label for="category_3-9">반려동물</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="종교">
									<label for="category_3-10">종교</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="해골">
									<label for="category_3-13">해골</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="다크">
									<label for="category_3-15">다크</label>
								</li>
								<li>
									<input class="category_3" type="checkbox" name="subject" id="subject" onclick='checkOnlyOne2(this)'
										value="가족">
									<label for="category_3-16">가족</label>
								</li>
							</ul>
						
					</div>
					<div class="bh row_group">
						
							<p class="bh fs-18 fw-b mb-5">부위</p>
							<ul>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="쇄골">
									<label for="category_4-0">쇄골</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="팔">
									<label for="category_4-1">팔</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="가슴">
									<label for="category_4-2">가슴</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="어깨">
									<label for="category_4-4">어깨</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="옆구리">
									<label for="category_4-6">옆구리</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="팔꿈치">
									<label for="category_4-7">팔꿈치</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="골반">
									<label for="category_4-8">골반</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="배">
									<label for="category_4-10">배</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="손목">
									<label for="category_4-11">손목</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="다리">
									<label for="category_4-13">다리</label>
								</li>
								
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="허벅지">
									<label for="category_4-16">허벅지</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="목">
									<label for="category_4-17">목</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="종아리">
									<label for="category_4-18">종아리</label>
								</li>
								
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="무릎">
									<label for="category_4-20">무릎</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="머리">
									<label for="category_4-21">머리</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="발목">
									<label for="category_4-22">발목</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="얼굴">
									<label for="category_4-23">얼굴</label>
								</li>
								<li>
									<input class="category_4" type="checkbox" name="piece" id="piece" onclick='checkOnlyOne3(this)'
										value="발">
									<label for="category_4-24">발</label>
								</li>
								
							</ul>
						
					</div>
					
					<button type="submit" class="fixed_m_btn fs-18 bh_color_white bh_bg_color_main">
						적용하기
					</button>
				
			</form>
		</div>
	</div>

	<footer class="footer3">
		<div class="bh_wrap">
			<nav class="footer_menu" id="footer_menu">
				<ul>
					<li>
						<a href="main.php"><span>이용약관</span></a>
					</li>
					<li>
						<a href="main.php"><span>개인정보취급방침</span></a>
					</li>
				</ul>
			</nav>
			<div class="bh_row ai-c">
				<div class="copyright col">
					<p>
						<span>회사명</span> : 타투라이프 <span>대표</span> : 타투라이프 <span>전화</span> : 010-9999-8888 <span>카톡</span>
						: hsm8887

					</p>
					<p>
						<span>주소</span> : 광주광역시 북구
					</p>
					<p>
						Copyright © 2022<span> 타투라이프</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="./script/script.js"></script>
</body>

</html>