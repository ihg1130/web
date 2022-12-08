<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="css/style.css">
	<title>타투라이프</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

</head>

<body>


	<section class="scroll s-one" data-section-name="s-one">
		<div class="container">
			<div id="header" class="cf">
				<div class="wrap">
					<div class="logo">
						<a class="one" href="main.php"><img src="images/logo2.png" alt="로고"></a>
					</div>
					<div class="nav">
						<ul class="mainmenu">
						<li><a href="service1.php" class="two">SERVICES</a></li>
                            <li><a href="post.php" class="three">PORTFOLIO</a></li>
                            <li><a href="ranker1.php" class="four">ARTIST</a></li>
							<?php if (!isset($_SESSION['id'])) {
	                            echo "<li><a class='five' href='login.php'>LOGIN</a></li>";
                            } else {
	                            echo "<li><a class='five' href='logoutProcess.php'>LOGOUT</a></li>";
	                            echo "<li><a class='five' href='update.php'>MY PAGE</a></li>";
                            }
                            ?>
						</ul>
						</ul>
					</div>
				</div>
				<div id="slide">
					<div class="slide-cont">
						<!-- <a href="#"><img src="images/jj.jpg" alt="메인이미지1"></a>
						<a href="#"><img src="images/ka.jpg" alt="메인이미지2"></a>
						<a href="#"><img src="images/yy.jpg" alt="메인이미지3"></a> -->
						<img onmouseover="m1(this)" onmouseout="m2(this)" onclick="m3(this)" src="images/20.jpg"
							alt="갈색초록색변경" />
					</div>
				</div>
				<div id="sliden">Well Come To Tattoo Life</div>
			</div>
	</section>

	<section class="scroll s-two" data-section-name="s-two">
		<div class="container">
			<div id="contents" class="cf">
				<div class="cont1">
					<h1><a>SERVICES</a></h1>
					<p>&nbsp;</p>
					<p style="font-size:18px;">타투라이프의 다양 서비스를 만나보세요</p>
					<div class="cf" id="tb">
						<a href="service1.php"><img src="images/상세검색.jpg" alt="상세검색"></a>
						<a href="service1.php" class="text1">상세검색</a>
						<a href="review.php"><img src="images/yky.jpg" alt="테마검색"></a>
						<a href="review.php" class="text2">타투 리뷰보기</a>
						<a href="https://www.modoodoc.com/hospitals/?search_query=%EB%AC%B8%EC%8B%A0%EC%A0%9C%EA%B1%B0"><img src="images/피부과.jpg" alt="병원리뷰"></a>
						<a href="https://www.modoodoc.com/hospitals/?search_query=%EB%AC%B8%EC%8B%A0%EC%A0%9C%EA%B1%B0" class="text3">병원리뷰</a>
						<a href="https://open.kakao.com/o/sYAQpgRe"><img src="images/1k.jpg" alt="광고문의"></a>
						<a href="https://open.kakao.com/o/sYAQpgRe" class="text4">광고문의</a>
					</div>
				</div>
	</section>

	<section class="scroll s-three" data-section-name="s-three">
		<div class="container">
			<div class="row">
				<div class="cont2">
					<h1><a>PORTFOLIO</a></h1>
					<p>&nbsp;</p>
					<p style="font-size:18px;">인기있는 도안을 만나보세요</p>
					<ul class="cf">
						<li><a href="viewpost.php?num=1"><img src="images/1.jpg" alt="포폴1"></a></li>
						<li><a href="viewpost.php?num=2"><img src="images/2.jpg" alt="포폴2"></a></li>
						<li><a href="viewpost.php?num=3"><img src="images/3.jpg" alt="포폴3"></a></li>
						<li><a href="viewpost.php?num=4"><img src="images/4.jpg" alt="포폴4"></a></li>
						<li><a href="viewpost.php?num=5"><img src="images/5.jpg" alt="포폴5"></a></li>
						<li><a href="viewpost.php?num=6"><img src="images/6.jpg" alt="포폴6"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="scroll s-four" data-section-name="s-four">
		<div class="container">
			<div class="row">
				<div class="cont3">
					<h1><a>ARTIST</a></h1>
					<p>&nbsp;</p>
					<p style="font-size:18px;">2022년 11월 추천 타투 아티스트를 만나보세요</p>
					<ul class="cf">
						<li><img src="./images/gold.png" alt="gold" width="50px" height="50px">
							<br>
							<p></p>
							<a href="ranker1.php"><img src="images/TEAM/1.jpg" alt="팀1" width="350px" height="350px"></a>
						</li>
						<li><img src="./images/silver.png" alt="silver" width="50px" height="50px">

							<br>
							<p></p><a href="ranker2.php"><img src="images/TEAM/2.jpg" alt="팀2" width="350px" height="350px"></a>
						</li>
						<li><img src="./images/bronze.png" alt="bronze " width="50px" height="50px">

							<br>
							<p></p><a href="ranker3.php"><img src="images/TEAM/3.jpg" alt="팀3" width="350px" height="350px"></a>
						</li>
					</ul>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<p id="j" style="font-size:15px;">최근 한달간의 자료를 바탕으로 제작된 통계입니다.</p>
				</div>
			</div>

			<div id="footer">
				<div class="ab">
					<p>
						[61099]광주광역시 북구 하서로 85
						<BR>
						TELL: 062-519-7114 FAX: 062-519-7039
						<BR>
						COPYRIGHT 2022 BY KOREA POLYTECHNICS. ALL RIGHTS RESERVED.
					</p>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"
		integrity="sha512-UyX8JsMsNRW1cYl8BoxpcamonpwU2y7mSTsN0Z52plp7oKo1u92Xqfpv6lOlTyH3yiMXK+gU1jw0DVCsPTfKew=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		function m1(leaf) {
			leaf.setAttribute('src', 'images/jj.jpg');
		}

		function m2(leaf) {
			leaf.setAttribute('src', 'images/20.jpg');
		}
		function m3(leaf) {
			leaf.setAttribute('src', 'images/ka.jpg');
		}
	</script>
	<script src="./script/script.js"></script>
</body>

</html>