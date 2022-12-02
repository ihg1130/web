<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();
require_once("db.php");

$sql = $db -> prepare("SELECT * FROM member WHERE id=:id");
$sql -> bindParam("id",$_SESSION['id']);
$sql -> execute();
$row = $sql -> fetch();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my page</title>
    <link rel="stylesheet" href="css/nav.css">
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
        <div class="mainCon">
            <div class="updateTitle">회원정보</div>
            <form action="member_process.php?mode=update" method="post" id="bo">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <table class="updateTable">
                    <tr>
                        <td class="textleft">아이디</td>
                        <td><?= $row['id'] ?></td>
                    </tr>
                    <tr>
                        <td class="textleft">비밀번호</td>
                        <td><input type="password" name="pw1"></td>
                    </tr>
                    <tr>
                        <td class="textleft">비밀번호 확인</td>
                        <td><input type="password" name="pw2"></td>
                    </tr>
                    <tr>
                        <td class="textleft">전화번호</td>
                        <td><input type="text" name="phone" placeholder=<?= $row['phone']?>></td>
                    </tr>
                    <tr>
                        <td class="textleft">이메일</td>
                        <td><?= $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td class="textleft">회원정보</td>
                        <td><?= $row['type'] ?></td>
                        <br>
                    </tr>
                </table>
                <div class="updateBtn" id="upbtn">
                <input type="submit" value="수정" class="btnn">
                <input type="button" value="취소" onclick="history.back(1)" class="btnn">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>
</html>
