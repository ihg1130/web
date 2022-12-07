<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
//db연결 include 시켜줘야됨
session_start();
include "db.php";

    function errMsg($msg){
        echo "<script>
            window.alert('$msg');
            history.back(1);
        </script>";
        exit;
    }


switch ($_GET['mode']){

    case 'register' :
    $host = "localhost";
    $user = "root";
    $password = "123456";
    $dbname = "lim";
    $dbcon = new mysqli($host, $user, $password, $dbname);

$userid = $_POST['userid'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$pw_confirm=$_POST['pw_confirm'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$type=$_POST['type'];
if(strlen($id)!=0 && strlen($pw)!=0 && strlen($pw_confirm)!=0 && strlen($name)!=0 && strlen($phone)!=0 && strlen($email)!=0 ){
if($pw != $pw_confirm){
    errMsg("비밀번호가 일치하지 않습니다.");
}

$sql = "insert into member (userid, id, pw, pw_confirm, name, phone, email, type)";
$sql = $sql. "values('$userid', '$id', '$pw', '$pw_confirm', '$name', '$phone', '$email', '$type')";
if($dbcon->query($sql)){                                                             
    echo "<script>alert('회원가입이 완료 되었습니다.');
    location.replace('login.php');</script>";                             
   }else{                                                                           
    echo '가입 취소 되었습니다.';                                                            
   }

  mysqli_close($mysqli);
}
else{
    echo "<script>alert('작성되지 않는 항목이 있습니다.')</script>";
    echo "<script>history.back(1);</script>";       
}

    case 'update':
        $id = $_POST['id'];
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];
        $phone = $_POST['phone'];

        $stmt = $db -> prepare("SELECT * FROM member WHERE id=:id");
        $stmt -> bindParam("id",$id);
        $stmt -> execute();
        $user = $stmt -> fetch();

        $sql = $db -> prepare("UPDATE member set pw=:pw, phone=:phone WHERE id=:id");
        $sql -> bindParam("pw",$pw1);
        $sql -> bindParam("phone",$phone);
        $sql -> bindParam("id",$id);
     

        if(!$pw1 || !$pw2){
            errMsg("비밀번호를 입력해주세요.");
        } elseif($pw1 != $pw2){
            errMsg("비밀번호가 일치하지 않습니다.");
        } elseif($pw1 == $user['pw']){
            errMsg("이전 비밀번호와 같습니다.");
        } elseif (!$phone) {
            errMsg("전화번호를 입력해주세요.");
        }

        $sql -> execute();
        session_unset();
        echo "<script>alert('수정 되었습니다. 다시 로그인 해주세요');
        location.replace('main.php');</script>";
    break;

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
                    alert('고객님의 아이디는 ".$user['id']."입니다.');
                    location.href='findid.php';
                    </script>
                ";
            }  
        
        
    break;

    case 'findpw':
                    $id = $_POST['id'];
                    $email = $_POST['email'];
                    
                    $sql = $db -> prepare("SELECT * FROM member WHERE id=:id");
                    $sql -> bindParam("id",$id);
                    $sql -> execute();
                    $row = $sql -> fetch();
                    
                    if(!$row){
                        errMsg("없는 아이디입니다.");
                    } elseif($email != $row['email']){
                        errMsg("이메일을 확인해주세요");
                    } else{
                        echo 
                        "<script>
                        confirm('비밀번호 변경 페이지로 이동 하시겠습니까');
                            location.href='changePw.php?id=".$row['id']."';
                        </script>";
                    }
                
        break;

        case 'changepw':
            $id = $_POST['id'];
            $pw1 = $_POST['pw1'];
            $pw2 = $_POST['pw2'];
            
            $stmt = $db -> prepare("SELECT * FROM member WHERE id=:id");
            $stmt -> bindParam("id",$id);
            $stmt -> execute();
            $user = $stmt -> fetch();
            

            $sql = $db -> prepare("UPDATE member SET pw=:pw WHERE id=:id");
            $sql -> bindParam("pw",$pw1);
            $sql -> bindParam("id",$id);
            if(!$pw1 || !$pw2){
                errMsg("비밀번호를 입력해주세요.");
            } else if($pw1 != $pw2){
                errMsg("비밀번호가 일치하지 않습니다.");
            } else if($pw1 == $user['pw']){
                errMsg("사용 불가능한 비밀번호 입니다.");
            } 
            $sql -> execute(); 

            echo "<script>  alert('비밀번호가 변경 되었습니다.');
            location.href='login.php'; </script>";
        
        break;















}




?>