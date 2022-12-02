<?php
include "db.php";
session_start();

$sql = $db -> prepare("SELECT * FROM post order by num DESC");
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
</head>
<body>
<section>
        <div class="mainCon">
            <div class="reviewTitle">포트폴리오 보기</div>
            <table class="reviewTable">
                <thead>
                    <tr>
                        <td class="reviewTd1">번호</td>
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
            <div class="writeReview"><a href="writepost.php">글쓰기</a></div>
        </div>
    </section>
    <footer></footer>
</body>
</html>