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
    <style>
.writeTitle{
    width: 35%;
    margin: auto;
    margin-top: 30px;
    text-align: center;
    font-size: 30px;
}

.writeForm{
    width: 40%;
    margin: auto;
    margin-top: 60px;
    text-align: left;
}

.writeTypeText{
    width: 95%;
    height:50px;
    resize: none;
    font-size: 20px;
}

.writeTextarea{
    width: 95%;
    height: 300px;
    resize: none;
    font-size: 20px;
}

.select1{
    text-align:center;
}

.radio{
    margin-left :600px;
}
.imageExp{
    color:red;
    font-size:12px;
}
.writeBtn{
    width: 95%;
    margin-top: 20px;
    text-align: center;
}

.writeBtn input[type=submit], .writeBtn input[type=button]{
   font-size: 16px;
}
    </style>
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
                <input type="submit" value="수정">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>
</html>