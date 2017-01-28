<?php
 	session_start();
 	 if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.php');
    }  
    include 'db_open.php';
    $id = $_SESSION['in'];
    $query = "INSERT INTO `praneeth`.DOT VALUES('$id','$date');";
    $connect->query($query);
    include 'db_close.php';
?>