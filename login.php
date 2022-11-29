<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
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
                        <a href="main.html"><img src="images/logo.png" alt="로고"></a>
                    </div>
                    <div class="nav">
                        <ul class="mainmenu">
                            <li><a class="two">SERVICES</a></li>
                            <li><a class="three">PORTFOLIO</a></li>
                            <li><a class="four">ARTIST</a></li>
                            <?php if(!isset($_SESSION['id'])){
                                echo "<li><a href='login.php'>LOGIN</a></li>";
                                }
                                else{
                                echo"<li><a href='logoutProcess.php'>로그아웃</a></li>";
                                }
                                ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="loginbox">
        <h2>로그인</h2>
        <form method="POST" action="loginProcess.php" id="searchForm">
            <!--작성하지 않아도 문제는 없음-->
            <fieldset>
                <legend>로그인 구역</legend>
                <label for="loginid">아이디</label>
                <input type="text" name="id" id="id" placeholder="아이디를 입력해 주세요">
                <label for="pw">비밀번호</label>
                <input type="text" name="pw" id="pw" placeholder="비밀번호를 입력해 주세요">
                <label for="type">회원 구별</label><br>
                <input type="radio" name="type" id="type" value="tattooist" checked /><a>타투이스트</a>&nbsp;
                <input type="radio" name="type" id="type" value="noraml" /><a>일반 회원</a>
                <ul>
                    <li><a href="findid.php">아이디찾기</a></li>
                    <li><a href="findpw.php">비밀번호찾기</a></li>
                    <li><a href="sign_up.php">회원가입</a></li>
                </ul>
                <!--데이터를 서버로 전송-->
                <button type="submit">로그인</button>
            </fieldset>
        </form>
    </div>
<script>
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

</script>

  
</body>

</html>