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
    <title>포트폴리오 쓰기</title>
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
            <div class="writeTitle">포트폴리오 쓰기</div>
            <form class="writeForm" action="board_process.php?mode=write1" method="post" enctype="multipart/form-data">
            <input type="hidden" name="userid" value="post">    
            <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
            <input type="hidden" name="name" value="<?= $_SESSION['name'] ?>">
                <p><input class="writeTypeText" type="text" name="title" placeholder="제목을 입력해주세요" required></p>
                <textarea class="writeTextarea" type="text" name="content" placeholder="설명을 입력해주세요"  required></textarea>
                <div class="select">지역 : 
                <select class="select1" name="address" id="address">
                    <option value="서울">서울</option>
                    <option value="경기남부">경기남부</option>
                    <option value="경기북부">경기북부</option>
                    <option value="인천">인천</option>
                    <option value="부산">부산</option>
                    <option value="대구">대구</option>
                    <option value="경북">경북</option>
                    <option value="경남">경남</option>
                    <option value="대전">대전</option>
                    <option value="충북">충북</option>
                    <option value="충남">충남</option>
                    <option value="전북">전북</option>
                    <option value="전남">전남</option>
                    <option value="광주">강원</option>
                    <option value="강원">강원</option>
                    <option value="제주도">제주도</option>
                </select>&nbsp;
                장르 :
                <select class="select1" name="genre" id="genre">
                    <option value="이레즈미">이레즈미</option>
                    <option value="블랙워크">블랙워크</option>
                    <option value="올드스쿨">올드스쿨</option>
                    <option value="뉴스쿨">뉴스쿨</option>
                    <option value="레터링">레터링</option>
                    <option value="미니타투">미니타투</option>
                    <option value="일러스트">일러스트</option>
                    <option value="수채화">수채화</option>
                    <option value="라인워크">라인워크</option>
                    <option value="커버업">커버업</option>
                </select>&nbsp;
                부위 :
                <select class="select1" name="piece" id="piece">
                    <option value="팔">팔</option>
                    <option value="가슴">가슴</option>
                    <option value="어깨">어깨</option>
                    <option value="쇄골">쇄골</option>
                    <option value="옆구리">옆구리</option>
                    <option value="팔꿈치">팔꿈치</option>
                    <option value="골반">골반</option>
                    <option value="배">배</option>
                    <option value="손목">손목</option>
                    <option value="허벅지">허벅지</option>
                    <option value="목">목</option>
                    <option value="종아리">종아리</option>
                    <option value="무릎">무릎</option>
                    <option value="머리">머리</option>
                    <option value="발목">발목</option>
                    <option value="얼굴">얼굴</option>
                    <option value="발">발</option>
                </select>&nbsp;  
                주제 :
                <select class="select1" name="subject" id="subject">
                    <option value="꽃">꽃</option>
                    <option value="고래">고래</option>
                    <option value="장미">장미</option>
                    <option value="나침반">나침반</option>
                    <option value="맹수">맹수</option>
                    <option value="뱀">뱀</option>
                    <option value="인물">인물</option>
                    <option value="커플">커플</option>
                    <option value="용">용</option>
                    <option value="반려동물">반려동물</option>
                    <option value="종교">종교</option>
                    <option value="해골">해골</option>
                    <option value="다크">다크</option>
                    <option value="가족">가족</option>
                </select>&nbsp;
                </div><br>
                <input type="file" name="image">
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