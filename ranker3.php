<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <title>포트폴리오</title>
 <link rel="stylesheet" href="css/nav.css">
</head>
<body>
<section class="scroll s-one" data-section-name="s-one">
        <div class="container">
            <div id="header" class="cf">
                <div class="wrap2">
                    <div class="logo">
                        <a class="one" href="main.php"><img src="images/logo2.png" alt="로고"></a>
                    </div>
                    <div class="nav">
                        <ul class="mainmenu">
                        <li><a href="service1.php" class="two">SERVICES</a></li>
                            <li><a href="post.php" class="three">PORTFOLIO</a></li>
                            <li><a href="ranker1.php" class="four">ARTIST</a></li>
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
        <img src="images/TEAM/3.jpg" alt="팀3" width="300px" height="300px"><br><br>
            <h2 class="text-uppercase">시엔</h2>
                                
                                
                                <br>
                                <p class="item-intro text-muted">시엔 | 강아지타투 고양이타투 블랙앤그레이타투<br>
개 산책시키는 사람<br>
ʜ ᴏ ɴ ɢ ᴅ ᴀ ᴇ , ꜱ ᴇ ᴏ ᴜ ʟ , ᴋ ᴏ ʀ ᴇ ᴀ<br>
블랙앤그레이 : @cien_black<br>
도안 : @cien_drawings<br>
📩 12, 1월 예약 중<br>
pf.kakao.com/_xlUxjAb<br><br>

                                
                                <img src="images/black.PNG" alt="">
                                <p>
</p>
                                
<div class="writeReview"><a href="post.php" id="guull" >둘러보기</a></div>
                                    
                                  
                             
        </div>
    </section>
</body>
</html>