<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include "db.php";
    session_start();

    switch($_GET['mode']){
        case 'write':
            // if(!$_SESSION['userid']){
            //     errMsg("로그인 해주세요");
            // }

            
            $title = $_POST['title'];
            $content = $_POST['content'];

            $sql = $db -> prepare("INSERT INTO review
            (title, content, r_date)
            VALUE
            (:title, :content, now())");

           
            $sql -> bindParam("title",$title);
            $sql -> bindParam("content",$content);

            $sql -> execute();
            header("location:writeReview.php");
        break;
    }
?>