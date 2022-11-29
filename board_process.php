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

            $id = $_POST['id'];
            $userid = $_POST['userid'];
            $name = $_POST['name'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            if($_FILES['image']['name']){
                $imageFullName = strtolower($_FILES['image']['name']);
                $imageNameSlice = explode(".",$imageFullName);
                $imageName = $imageNameSlice[0];
                $imageType = $imageNameSlice[1];
                $image_ext = array('jpg','jpeg','gif','png');
                if(array_search($imageType,$image_ext) === false){
                    errMsg('jpg, jpeg, gif, png 확장자만 가능합니다.');
                }
                $dates = date("mdhis",time());
                $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
                $dir = "images/";
                move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);
                chmod($dir.$newImage,0777);
             }

            $sql = $db -> prepare("INSERT INTO review
            (id, userid, name, title, content, r_date, image)
            VALUE
            (:id, :userid, :name, :title, :content, now(), :image)");

            $sql -> bindParam("id", $id);
            $sql -> bindParam("userid",$userid);
            $sql -> bindParam("name",$name);
            $sql -> bindParam("title",$title);
            $sql -> bindParam("content",$content);
            $sql -> bindParam("image",$newImage);

            $sql -> execute();
            header("location:review.php");
        break;

     case 'update' :
        $num = $_POST['num'];
        $newTitle = $_POST['title'];
        $newcontent = $_POST['content'];

        $sql = $db -> prepare("UPDATE review SET title=:title, content=:content WHERE num=:num ");
        $sql -> bindParam("title",$newTitle);
        $sql -> bindParam("content",$newcontent);
        $sql -> bindParam("num",$num);
        $sql -> execute();

        echo "<script>alert('수정 되었습니다.');
    location.replace('review.php');</script>";
    break;

    case 'delete':
        $num = $_GET['num'];

        $sql = $db -> prepare("DELETE FROM review WHERE num=:num");
        $sql -> bindParam("num",$num);
        $sql -> execute();

        echo "<script>alert('삭제 되었습니다.');
        location.replace('review.php');</script>";
    break;
    }
?>