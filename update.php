<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();
require_once("db.php");

$sql = $db -> prepare("SELECT * FROM member WHERE id=:id");
$sql -> bindParam("id",$_SESSION['id']);
$sql -> execute();
$row = $sql -> fetch();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my page</title>
</head>
<body>
    <section>
        <div class="mainCon">
            <div class="updateTitle">회원정보</div>
            <form action="member_process.php?mode=update" method="post">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <table class="updateTable">
                    <tr>
                        <td>아이디</td>
                        <td><?= $row['id'] ?></td>
                    </tr>
                    <tr>
                        <td>비밀번호</td>
                        <td><input type="password" name="pw1"></td>
                    </tr>
                    <tr>
                        <td>비밀번호 확인</td>
                        <td><input type="password" name="pw2"></td>
                    </tr>
                    <tr>
                        <td>전화번호</td>
                        <td><input type="text" name="phone" placeholder=<?= $row['phone']?>></td>
                    </tr>
                    <tr>
                        <td>이메일</td>
                        <td><?= $row['email'] ?></td>
                    </tr>
                    <tr>
                        <td>회원정보</td>
                        <td><?= $row['type'] ?></td>
                    </tr>
                </table>
                <div class="updateBtn">
                <input type="submit" value="수정">
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
    <footer></footer>
</body>
</html>
