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
</head>
<body>
<section>
        <div class="mainCon">
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
                echo "<br><img src='images/$review[image]'></img>";
            }
            ?>
            </div>
            <div class="viewBtn">
                <a href="review.php">목록으로</a>&nbsp;&nbsp;
                <?php if($review['id'] != $_SESSION['id']){
                    } else{
                ?>
                <div class="viewBtn1">
                <a href="reviewUpdate.php?num=<?= $review['num']?>">수정</a>&nbsp;&nbsp;
                <a href="#" onclick="confirmDel('정말로 삭제하시겠습니까?')">삭제</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <footer></footer>
</body>
</html>