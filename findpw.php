<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <title>비밀번호 찾기</title>
</head>
<body>
<section class="scroll s-one" data-section-name="s-one">
        <div class="container">
            <div id="header" class="cf">
                <div class="wrap2">
                    <div class="logo">
                        <a class="one" href="main.php"><img src="images/logo2.png" alt="로고"></a>
                    </div>
                    <div class="nav">
                        <ul class="mainmenu">
                        <li><a href="service1.php" class="two">SERVICES</a></li>
                            <li><a href="post.php" class="three">PORTFOLIO</a></li>
                            <li><a href="ranker1.php" class="four">ARTIST</a></li>
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
        <div class="mainCon">
            <div class="registerTitle" style="font-size: 35px; font-weight: bold;">비밀번호 찾기</div><br><hr><br><br>
            <div class="findIdPw">
            <form action="member_process.php?mode=findpw" method="post">
                <p>아이디 : <input type="text"  name="id" class="qqqq" placeholder="아이디 입력"  required></p><br>
                <p class="findEmail">이메일 : <input type="text" class="qqqq" name="email" placeholder="example@example.com" required></p><br><br>
                <div class="findBtn">
                <input type="submit" value="찾기" class="sboxbtn">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" class="sboxbtn" onclick="history.back(1)">
                
            </div>
            </form>
            </div>
            <br>
            <div class="findMenu">
                <button onclick="location.href='findid.php'">아이디 찾기</button>
            </div>
        </div>
    </section>
</body>
</html>