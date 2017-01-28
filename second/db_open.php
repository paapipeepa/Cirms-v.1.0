<?php
	/*$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    */
    include '../db_main.php';
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }
?>    