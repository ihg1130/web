<?php
    $host = "localhost";
    $user = "root";
    $password = "123456";
    $dbname = "lim";
    $dbcon = new mysqli($host, $user, $password, $dbname);
  
    
  // DB 정보 가져오기 
  $sql = "SELECT * FROM member_t";
  $result = mysqli_query($dbcon, $sql);
  
  $row = $result->fetch_array(MYSQLI_ASSOC);
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="mainCon">
            <div class="updateTitle">회원정보</div>
            <form action="changepw.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <table class="updateTable">
                    <tr>
                        <td>아이디</td>
                        <td><?= $row['id'] ?></td>
                    </tr>
                    <tr>
                        <td>비밀번호</td>
                        <td>*****</td>
                    </tr>
                    <tr>
                        <td>전화번호</td>
                        <td><?= $row['phone'] ?></td>
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
                <input type="submit" value="비밀번호 변경">
                <input type="button" value="취소" onclick="history.back(1)">
                </div>
            </form>
        </div>
    </section>
</body>
</html>
