<?php
	$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }
?>    