<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <title>아이디 찾기</title>
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
        <div class="mainCon" >
            <div class="registerTitle">아이디 찾기</div><br>
            <div class="findIdPw">
            <form action="member_process.php?mode=findid" method="post">
                <p>이&nbsp;&nbsp; 름 : <input type="text"  name="name" placeholder="이름 입력" size="30" required></p>
                <p class="findEmail">이메일 : <input type="text"  name="email" placeholder="이메일 입력" size="30" required></p>
                <div class="findBtn">
                    <br>
                <input type="submit" value="찾기" >&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소"  onclick="history.back(1)">
                </div>
            </form>
            </div>
            <br>
            <div class="findMenu">
                <button onclick="location.href='findpw.php'">비밀번호 찾기</button>
            </div>
        </div>
    </section>
</body>
</html>