!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 변경</title>
</head>
<body>
<section>
        <div class="mainCon">
            <div class="registerTitle">비밀번호 변경</div>
            <div class="changePw">
            <form action="member_process.php?mode=changepw" method="post">
                <input type="hidden" name="userid" value="<?= $_GET['userid']?>">
                <p>비밀번호 : <input type="password"  name="pw1" size="30"></p>
                <p class="findEmail">비밀번호 확인 : <input type="password"  name="pw2" size="30"></p>
                <div class="findBtn">
                <input type="submit" value="변경">&nbsp;&nbsp;&nbsp;
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
            </div>
        </div>
    </section>
</body>
</html>