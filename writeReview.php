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
            <div class="writeTitle">리뷰 쓰기</div>
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
                <input type="submit" value="작성">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>

</html>