<?php

error_reporting( E_ALL );
  ini_set( "display_errors", 1 );

  $username=$_POST['id'];
  $userpass=$_POST['pw'];

  $host = "localhost";
  $user = "root";
  $password = "123456";
  $dbname = "lim";
  $dbcon = new mysqli($host, $user, $password, $dbname);

  
// DB 정보 가져오기 
$sql = "SELECT * FROM member WHERE id ='$username' and pw = '$userpass'";
$result = mysqli_query($dbcon, $sql);

$row = $result->fetch_array(MYSQLI_ASSOC);
// $row=mysqli_fetch_array($result);
// echo $row['id'];
// DB 정보를 가져왔으니 
// 비밀번호 검증 로직을 실행하면 된다.
if ($username==$row['id'] && $userpass==$row['pw']) {
    session_start();
    $_SESSION['username'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['userpass'] = $row['pw'];
    echo "<script>alert('로그인 되었습니다.')</script>";
    echo "<script>location.href='index1.html';</script>";
    exit;
 }
 
 //결과가 존재하지 않으면 로그인 실패
 else{
   echo "<script>alert('아이디 또는 패스워드를 틀렸습니다.');history.back();</script>";
    exit;
 }
?>