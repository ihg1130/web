<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
    <link rel="stylesheet" href="css/nav.css">
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
            <div class="registerTitle" style="font-size: 35px;  font-weight: bold;">비밀번호 변경</div><br><hr><br><br>
            <div class="changePw">
            <form action="member_process.php?mode=changepw" method="post">
                <input type="hidden" name="id" value="<?= $_GET['id']?>">
                <p>새 비밀번호 입력 : <input type="pw1"  name="pw1" class="qqqq"></p><br>
                <p class="findEmail">새 비밀번호 확인 : <input type="pw2" class="qqqq" name="pw2"></p><br><br>
                <div class="findBtn">
                <input type="submit" value="변경" class="sboxbtn">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" class="sboxbtn" onclick="history.back(1)">
                </div>
            </form>
            </div>
        </div>
    </section>
</body>
</html>
