<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
</head>
<body>
<section>
        <div class="mainCon">
            <div class="registerTitle">비밀번호 찾기</div>
            <div class="findIdPw">
            <form action="member_process.php?mode=findpw" method="post">
                <p>아이디 : <input type="text"  name="name" placeholder="이름 입력" size="30" required></p>
                <p class="findEmail">이메일 : <input type="text"  name="email" placeholder="이메일 입력" size="30" required></p>
                <div class="findBtn">
                <input type="submit" value="찾기">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
            <br>
            <div class="findMenu">
                <button onclick="location.href='findid.php'">아이디 찾기</button>
            </div>
        </div>
    </section>
</body>
</html>