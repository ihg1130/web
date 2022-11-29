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
</head>
<body>
<section>
        <div class="mainCon">
            <div class="writeTitle">리뷰 수정</div>
            <form class="writeForm" action="board_process.php?mode=update" method="post" enctype= "multipart/form-data">
                <input type="hidden" name="userid" value="review">
                <input type="hidden" name="num" value="<?= $review['num']?>">
                <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" size="50" value="<?= $review['title']?>" required></p>
                <textarea class="writeTextarea" name="content" required><?= $review['content']?></textarea>
                <?php if(!$review['image']){
                    } else{ ?>
                        <?= $review['image']?><br>
                <?php } ?>
                <input type="file" name="image" value="<?=$review['image']?>">
                <div class="imageExp">jpg, jpeg, gif, png 파일만 사용가능 </div>
                <div class="writeBtn">
                <input type="submit" value="작성">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>
</html>