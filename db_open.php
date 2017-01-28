<?php
	include 'db_main.php';
    $connect = new mysqli($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }
?>    