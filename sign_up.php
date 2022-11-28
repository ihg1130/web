  <!DOCTYPE html>
    <html lang="ko">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
        <script>src="script1.js"</script>
    	<link rel="stylesheet" href="css/style.css">
        <script>
        function checkid() {
            window.open("checkid.php?id=" + document.register.id.value,"IDcheck","left=300, top=300, width=300, height=300, scrollbars=no, resizeable=no");
        }
    </script>
    </head>
   
    <body>
        <section class="scroll s-one" data-section-name="s-one">
            <div class="container">
                <div id="header" class="cf">
                    <div class="wrap2">
                        <div class="logo">
                            <a href="main.html"><img src="images/logo.png" alt="로고"></a>
                        </div>
                        <div class="nav">
                            <ul class="mainmenu">
                                <li><a class="two">SERVICES</a></li>
                                <li><a class="three">PORTFOLIO</a></li>
                                <li><a class="four">ARTIST</a></li>
                                <?php if(!isset($_SESSION['id'])){
                                echo "<li><a href='login.php'>LOGIN</a></li>";
                                }
                                else{
                                echo"<li><a href='logoutProcess.php'>로그아웃</a></li>";
                                }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <form  name="register" action="member_process.php?mode=register" method="POST">
            <input type="hidden" name="userid" value="register">
            <div class="w-50 ml-auto mr-auto mt-5">
            <div class="mb-3 ">
                    <label for="id" class="form-label">아이디<br></label>
                    <input type="id" name="id" class="form-control" placeholder="영어 소문자, 숫자만 가능(4~12자리, 소문자로 시작해야함)"> 
                    <input type="button" class="kkk" value="중복확인" onclick="checkid()">
                </div>
                <div class="mb-3 ">
                    <label for="pw" class="form-label">비밀번호<br></label>
                    <input name="pw" type="pw" class="form-control" placeholder="비밀번호는 숫자/문자/특수문자(*!&) 포함 형태의 8~15자리">
                </div>
                <div class="mb-3 ">
                    <label for="pw_confirm" class="form-label">비밀번호 확인<br></label>
                    <input type="password" name="pw_confirm" class="form-control" placeholder="비밀번호와 비밀번호 확인은 같아야 함">
                </div>
                <div class="mb-3 ">
                    <label for="name" class="form-label">이름<br></label>
                    <input type="name" name="name" class="form-control" placeholder="이름은 한글만 가능(최소 2글자 이상)">
                </div>
                <div class="mb-3 ">
                    <label for="phone" class="form-label">전화번호<br></label>
                    <input type="phone" name="phone" class="form-control" placeholder="예)01012345678">
                </div>
                <div class="mb-3 ">
                    <label for="address" class="form-label">주소<br></label>
                    <input type="address" name="address" class="form-control" placeholder="예)oo시 oo구">
                </div>
                <div class="mb-3 ">
                    <label for="email" class="form-label">이메일<br></label>
                    <input type="emial" name="email" class="form-control" placeholder="예)asd123@naver.com">
                </div>
                <div class="mb-3 ">
                    <label for="tattoo" class="form-label">회원 구별<br></label><br>
                    <input type="radio"  name="type" value="tattooist" checked/>타투이스트
                    <input type="radio"  name="type" value="general"/>일반 회원
                </div><br><br>
                
                <div align="center">
                    <input type="submit" class="kkkk" value="회원가입">
                    <input type="reset" class="kkkk" value="다시입력">
            </div> 
        </div>
        </form>
    </body>
    </html>