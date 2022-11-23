<?php
//db연결 include 시켜줘야됨

$dns = "mysql:host=localhost;dbname=lim;charset=utf8"; //lim는 데이터베이스 이름 
    $username="root";
    $pw="123456";

    try {
        $db = new PDO($dns, $username, $pw);
        echo '접속성공 축하합니다!';
    } catch (PDOException $th) {
        echo '접속실패 : ' . $th->getMessage();
    }
    function errMsg($msg){
        echo "<script>
            window.alert('$msg');
            history.back(1);
        </script>";
        exit;
    }

//   $host = "localhost";
//   $user = "root";
//   $password = "123456";
//   $dbname = "lim";
//   $dbcon = new mysqli($host, $user, $password, $dbname);

switch($_GET['mode']){

    case 'findid' :
        $name = $_POST['name'];
        $email = $_POST['email'];
        $userEmail = array();
        $pdo = $db -> prepare("SELECT * FROM member WHERE name=:name");
        $pdo -> bindParam("name",$name);
        $pdo -> execute();
        $con = $pdo -> fetch();
    
        $sql = $db -> prepare("SELECT * FROM member WHERE name=:name");
        $sql -> bindParam("name",$name);
        $sql -> execute();
        if(!$con){
            errMsg("가입 이력이 없습니다.");
        } else{
                while($row = $sql -> fetch()){
                        array_push($userEmail, $row['email']);
                }
            }
            if(in_array($email,$userEmail) == false){
                errMsg("이메일을 확인해주세요.");
            } elseif (in_array($email,$userEmail) == true) {
                $stmt = $db -> prepare("SELECT * FROM member WHERE name=:name AND email=:email");
                $stmt -> bindParam("name",$name);
                $stmt -> bindParam("email",$email);
                $stmt -> execute();
                $user = $stmt -> fetch();
                echo "
                    <script>
                    alert('고객님의 아이디는 ".$user['userid']."입니다.');
                    location.href='findid.php';
                    </script>
                ";
            }  
    
    break;

    case 'findpw':
        $userid = $_POST['userid'];
                    $email = $_POST['email'];
        
                    $sql = $db -> prepare("SELECT * FROM member WHERE userid=:userid");
                    $sql -> bindParam("userid",$userid);
                    $sql -> execute();
                    $row = $sql -> fetch();
                    
                    if(!$row){
                        errMsg("없는 아이디입니다.");
                    } elseif($email != $row['email']){
                        errMsg("이메일을 확인해주세요");
                    } else{
                        echo 
                        "<script>
                            location.href='changePw.php?userid=".$row['userid']."';
                        </script>";
                    }
        break;

        case 'changePw':
            $userid = $_POST['userid'];
            $pw1 = $_POST['pw1'];
            $pw2 = $_POST['pw2'];

            $stmt = $db -> prepare("SELECT * FROM member WHERE userid=:userid");
            $stmt -> bindParam("userid",$userid);
            $stmt -> execute();
            $user = $stmt -> fetch();

            $sql = $db -> prepare("UPDATE member set pw=:pw WHERE userid=:userid");
            $sql -> bindParam("pw",$pw1);
            $sql -> bindParam("userid",$userid);
            if(!$pw1 || !$pw2){
                errMsg("비밀번호를 입력해주세요.");
            } elseif($pw1 != $pw2){
                errMsg("비밀번호가 일치하지 않습니다.");
            } elseif($pw1 == $user['pw']){
                errMsg("사용 불가능한 비밀번호 입니다.");
            } 
            $sql -> execute();
            header('location:login.html');
        break;















}




?>