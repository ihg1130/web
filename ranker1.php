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
        <img src="images/TEAM/1.jpg" alt="팀1" width="300px" height="300px"><br><br>
            <h2 class="text-uppercase">백설</h2>
                                
                                
                                <br>
                                <p class="item-intro text-muted">백설타투🍎나비타투.추상화타투.동양화타투.블랙워크<br>
[𝐷𝑒𝑠𝑖𝑔𝑛]-> @tattooist_snowwhite2<br>
🇺🇸𝑆𝐹(𝐷𝑒𝑐). 𝐿𝑉(𝐽𝑎𝑛, 𝐹𝑒𝑏 2023)<br>
🥲𝘔𝘺 𝐷𝑀 𝘩𝘢𝘴 𝘢𝘯 𝘦𝘳𝘳𝘰𝘳<br>
━━ 𝐷𝑀 (x) ━‼️ 𝘰𝘯𝘭𝘺 𝘦𝘮𝘢𝘪𝘭 ‼️👇🏻<br>
한국예약 내년 3월부터가능합니다.<br>
pf.kakao.com/_zvIIK</p><br>
                                
                                <img src="images/white.PNG" alt="">
                                <p>
</p>
                                
<div class="writeReview"><a href="post.php" id="guull" >둘러보기</a></div>
                                    
                                  
                             
        </div>
    </section>
</body>
</html>