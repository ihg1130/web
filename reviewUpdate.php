<?php
    include "db.php";
    session_start();

    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );
    
    $num = $_GET['num'];

    $sql = $db -> prepare("SELECT * FROM review WHERE num=:num");
    $sql -> bindParam("num",$num);
    $sql -> execute();
    $review = $sql -> fetch();

    // if($review['id'] != $_SESSION['id']){
    //     errMsg('수정 권한이 없습니다.');
    // }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리뷰 수정</title>
    <link rel="stylesheet" href="css/write.css">
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
            <div class="writeTitle">리뷰 수정</div>
            <form class="writeForm" action="board_process.php?mode=update" method="post" enctype= "multipart/form-data">
                <input type="hidden" name="userid" value="review">
                <input type="hidden" name="num" value="<?= $review['num']?>">
                <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" size="50" value="<?= $review['title']?>" required></p>
                <textarea class="writeTextarea" name="content" required><?= $review['content']?></textarea><br>
                <?php if(!$review['image']){
                    } else{ ?>
                    현재 파일: <?= $review['image']?><br>
                <?php } ?><br>
                <input type="file" name="image" value="<?=$review['image']?>">
                <div class="imageExp">jpg, jpeg, gif, png 파일만 사용가능 </div>
                <div class="radio">
                <input type="radio" name="heart" id="heart" value="1" checked />추천 &nbsp;
                <input type="radio" name="heart" id="heart" value="0" />비추천
                </div><br>
                <div class="writeBtn">
                <input type="submit" class="sboxbtn" value="수정">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" class="sboxbtn" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>
</html>