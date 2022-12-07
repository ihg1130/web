<?php
include "db.php";
session_start();

$sql = $db -> prepare("SELECT * FROM review order by num DESC");
$sql -> execute();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>리뷰 보기</title>
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
            <div class="reviewTitle">리뷰 보기</div>
            <table class="reviewTable">
                <thead>
                    <tr>
                        <td class="reviewTd1">번호</td>
                        <td class="reviewTd2">제목</td>
                        <td class="reviewTd3">글쓴이</td>
                        <td class="reviewTd4">작성시간</td>
                    </tr>
                </thead>
                <?php
                    while ($review = $sql -> fetch()){
                
                
                $time = DateTime::createFromFormat('Y-m-d H:i:s', $review['r_date']);
                $time = date_format($time, 'Y-m-d');
                ?>
                    <tbody>
                        <tr>
                            <td class="reviewTd1"><?= $review['num']?></td>
                            <td class="reviewTd2"><a href="viewReview.php?num=<?= $review['num']?>"><?= $review['title']?></a></td>
                            <td class="reviewTd3"><?= $review['name']?></td>
                            <td class="reviewTd4"><?= $time?></td>
                        </tr>
                    </tbody>
                <?php } ?>
                    <tfoot>
                    <tr>
                            <td class="reviewTd1"></td>
                            <td class="reviewTd2"></td>
                            <td class="reviewTd3"></td>
                            <td class="reviewTd4"></td>
                        </tr>
                    </tfoot>
            </table>
            <div class="writeReview"><a href="writeReview.php" id="guull">글작성</a></div>
        </div>
    </section>
    <footer></footer>
</body>
</html>