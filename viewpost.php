<?php
include "db.php";
session_start();

// error_reporting( E_ALL );
// ini_set( "display_errors", 1 );

$num = $_GET['num'];
    $sql = $db -> prepare("SELECT * FROM post WHERE num=:num");
    $sql -> bindParam("num",$num);
    $sql -> execute();
    $post = $sql -> fetch();

    $time = DateTime::createFromFormat('Y-m-d H:i:s', $post['p_date']);
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
                location.href="board_process.php?mode=delete1&num=<?= $post['num']?>";
            } else if(selValue == false){
                history.back(1);
            }
        }
    </script>
    <script type="text/javascript">
 function div_show() {
  document.getElementById("test_div").style.display = "block";
 }
 
 function div_hide() {
  document.getElementById("test_div").style.display = "none";
 }
</script>
    <title>포트폴리오 보기</title>
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
<section class="scroll s-one" data-section-name="s-one">
        <div class="container">
            <div id="header" class="cf">
                <div class="wrap2">
                    <div class="logo">
                        <a class="one" href="main.php"><img src="images/logo.png" alt="로고"></a>
                    </div>
                    <div class="nav">
                        <ul class="mainmenu">
                            <li><a class="two">SERVICES</a></li>
                            <li><a class="three">PORTFOLIO</a></li>
                            <li><a class="four">ARTIST</a></li>
                            <?php if(!isset($_SESSION['id'])){
                                echo "<li><a class='five' href='login.php'>LOGIN</a></li>";
                                }
                                else{
                                echo"<li><a class='five' href='logoutProcess.php'>LOGOUT</a></li>";
                                echo"<li><a class='five' href='update.php'>MY PAGE</a></li>";
                                }
                                ?></ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="main">
        <div class="mainCon">
            <div class="viewTitle"> 제목 : <?= $post['title'] ?></div>
            <div class="viewInfo">
                <div class="viewName">글쓴이 : <?= $post['name']?></div>
                <div class="viewTime">작성날짜 : <?= $time?></div>
            </div>
            <div class="viewStory">
            <!-- <?= $post['content']?> -->
            <?php
             if(!$post['image']){
              
            } else{
                echo "<br><img src='images/$post[image]'></img>";
            }
            ?><br><br>
        <input type="button" value="상세설명" onclick="div_show();"/>
        <input type="button" value="감추기" onclick="div_hide();"/>
        <div id="test_div"><?= $post['content']?></div>
            <!-- <?= $post['content']?></div> -->
            </div>
            <div class="viewBtn">
                <a href="post.php">목록으로</a>&nbsp;&nbsp;
                <?php if($post['id'] != $_SESSION['id']){
                    } else{
                ?>
                <div class="viewBtn1">
                <a href="postUpdate.php?num=<?= $post['num']?>">수정</a>&nbsp;&nbsp;
                <a href="#" onclick="confirmDel('정말로 삭제하시겠습니까?')">삭제</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <footer></footer>
</body>
</html>