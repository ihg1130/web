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

//   $host = "localhost";
//   $user = "root";
//   $password = "123456";
//   $dbname = "lim";
//   $dbcon = new mysqli($host, $user, $password, $dbname);

switch ($_GET['mode']){

    case 'update':
        $id = $_POST['id'];
        $pw1 = $_POST['pw1'];
        $pw2 = $_POST['pw2'];
        $tel = $_POST['tel'];

        $stmt = $db -> prepare("SELECT * FROM register WHERE id=:id");
        $stmt -> bindParam("id",$id);
        $stmt -> execute();
        $user = $stmt -> fetch();

        $sql = $db -> prepare("UPDATE register set pw=:pw, tel=:tel WHERE id=:id");
        $sql -> bindParam("pw",$pw1);
        $sql -> bindParam("tel",$tel);
        $sql -> bindParam("id",$id);

        if(!$pw1 || !$pw2){
            errMsg("비밀번호를 입력해주세요.");
        } elseif($pw1 != $pw2){
            errMsg("비밀번호가 일치하지 않습니다.");
        } elseif($pw1 == $user['pw']){
            errMsg("이전 비밀번호와 같습니다.");
        } elseif (!$tel) {
            errMsg("전화번호를 입력해주세요.");
        }

        $sql -> execute();
        session_unset();
        header('location:../main.php');
    break;

    case 'findid' :
        $name = $_POST['name'];
        $email = $_POST['email'];
        $type=$_POST['type'];
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
                    $type=$_POST['type'];
                    
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
            $type=$_POST['type'];
            
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
            location.href='login.html'; </script>";
        
        break;















}




?>