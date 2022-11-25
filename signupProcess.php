<html>
    <meta charset ="utf-8">
<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
$host = "localhost";
$user = "root";
$password = "123456";
$dbname = "lim";
$dbcon = new mysqli($host, $user, $password, $dbname);
function errMsg($msg){
    echo "<script>
        window.alert('$msg');
        history.back(1);
    </script>";
    exit;
}

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

$sql = "insert into member (id, pw, pw_confirm, name, phone, email, type)";
$sql = $sql. "values('$id', '$pw', '$pw_confirm', '$name', '$phone', '$email', '$type')";
if($dbcon->query($sql)){                                                             
    echo "<script>alert('회원가입이 완료되었습니다.')</script>";
    echo "<script>location.href='fdfd.html';</script>";                              
   }else{                                                                           
    echo '가입 취소 되었습니다.';                                                            
   }
  
  mysqli_close($mysqli);
}
else{
    echo "<script>alert('작성되지 않는 항목이 있습니다.')</script>";
    echo "<script>history.back(1);</script>";       
}
?>
<!-- <script>
<input type="button" value="로그인하러가기" onclick="location='login.php'">
</script> -->
</html>