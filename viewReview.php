<?php
include "db.php";
session_start();

// error_reporting( E_ALL );
// ini_set( "display_errors", 1 );

$num = $_GET['num'];
    $sql = $db -> prepare("SELECT * FROM review WHERE num=:num");
    $sql -> bindParam("num",$num);
    $sql -> execute();
    $review = $sql -> fetch();

    $time = DateTime::createFromFormat('Y-m-d H:i:s', $review['r_date']);
    $time = date_format($time, 'Y-m-d');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <script>
        function confirmDel(text) {
            const selValue = confirm(text);
            if(selValue == true){
                location.href="board_process.php?mode=delete&num=<?= $review['num']?>";
            } else if(selValue == false){
                history.back(1);
            }
        }
    </script>
    <title>리뷰 보기</title>
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
        <div class="mainCon" id="v">
            <div class="viewTitle"> 제목 : <?= $review['title'] ?></div>
            <div class="viewInfo">
                <div class="viewName">글쓴이 : <?= $review['name']?></div>
                <div class="viewTime">작성날짜 : <?= $time?></div>
            </div>
            <div class="viewStory">
            <?= $review['content']?>
            <?php
             if(!$review['image']){
              
            } else{
                echo "<br><img src='images/$review[image]' width='250px' height='250px'></img>";
            }
            ?>
            </div>
            <div class="viewBtn">
                <a href="review.php">목록으로</a>&nbsp;&nbsp;
                <?php if($review['id'] != $_SESSION['id']){
                    } else{
                ?>
                <div class="viewBtn1">
                <a class="guull" href="reviewUpdate.php?num=<?= $review['num']?>">수정</a>&nbsp;&nbsp;
                <a class="guull" href="#" onclick="confirmDel('정말로 삭제하시겠습니까?')">삭제</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <footer></footer>
</body>
</html>