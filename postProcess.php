<?php
include "db.php";
// include "serviceProcess.php";
session_start();

$address = $_POST['address'];
        $genre = $_POST['genre'];
        $subject = $_POST['subject'];
        $piece = $_POST['piece'];

$sql = $db -> prepare("SELECT * FROM post where address=:address or genre=:genre or subject=:subject or piece=:piece order by num DESC");
$sql -> bindParam("address",$address);
        $sql -> bindParam("genre",$genre);
        $sql -> bindParam("subject",$subject);
        $sql -> bindParam("piece",$piece);
$sql -> execute();

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>포트폴리오</title>
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
            <div class="reviewTitle">포트폴리오 보기</div><br><hr><br>
            <table class="reviewTable">
                <thead>
                    <tr>
                        <td class="reviewTd1">번호</td>
                        <td class="reviewTd5">사진</td>
                        <td class="reviewTd2">제목</td>
                        <td class="reviewTd3">글쓴이</td>
                        <td class="reviewTd4">작성시간</td>
                    </tr>
                </thead>
                <?php
                    while ($post = $sql -> fetch()){
                ?> 
                <?php
                $time = DateTime::createFromFormat('Y-m-d H:i:s', $post['p_date']);
                $time = date_format($time, 'Y-m-d');
                ?>
                    <tbody>
                        <tr>
                            <td class="reviewTd1"><?= $post['num']?></td>
                            <td class="reviewTd5"><img src='images/<?= $post['num']?>.jpg' width='50px'></td>
                            <td class="reviewTd2"><a href="viewpost.php?num=<?= $post['num']?>"><?= $post['title']?></a></td>
                            <td class="reviewTd3"><?= $post['name']?></td>
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
            <div class="writeReview"><a href="writepost.php" id="guull"  >글쓰기</a></div>
        </div>
    </section>
    <footer></footer>
</body>
</html>