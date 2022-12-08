<?php
    include "db.php";
    session_start();
    // if(!$_SESSION['id']){
    //     errMsg('로그인 후 작성할 수 있습니다.');
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리뷰쓰기</title>
    <link rel="stylesheet" href="css/write.css">
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
            <div class="writeTitle">리뷰 쓰기</div><br><hr>
            <form class="writeForm" action="board_process.php?mode=write" method="post" enctype="multipart/form-data">
            <input type="hidden" name="userid" value="review">    
            <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
            <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" placeholder="제목을 입력해주세요" required></p>
                <textarea class="writeTextarea" name="content" placeholder="본문을 입력해주세요"  required></textarea>
                <input type="file" name="image">
                <div class="radio">
                <input type="radio" name="heart" id="heart" value="1" checked />추천 &nbsp;
                <input type="radio" name="heart" id="heart" value="0" />비추천
                </div><br>
                <div class="writeBtn">   
                <input type="submit" value="작성" class="sboxbtn">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" class="sboxbtn" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>

</html>