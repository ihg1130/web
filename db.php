<?php
    $dns = "mysql:host=localhost;dbname=lim;charset=utf8";
    $username="root";
    $pw="123456";

    try {
        $db = new PDO($dns, $username, $pw);
        
    } catch (PDOException $th) {
        echo '접속실패 : ' . $th->getMessage();
    }
?>