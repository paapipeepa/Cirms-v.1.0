<?php
	include '../db_main.php';
	$connect = new mysqli($server,$username,$password,$dbname);
	if ($connect->connect_error) {
    			die("Connection failed: ");
	}
	$id = $_GET['id'];
	$query = "select * from `praneeth`.Details WHERE id = $id;";
	$result = $connect->query($query);
	$q = "select * from `praneeth`.img";
	$ko = $connect->query($q);
	$count = $result->num_rows;
	if( $count > 0 ){
    		while($row = $result->fetch_assoc()){
    			header("Content-type: image/jpeg");
    			if(empty($row['logo'])){
    				while($r = $ko->fetch_assoc()){
    					echo $r['logo'];
    				}
    			}
    			else{
    				echo $row['logo'];
    			}
    		} 		
	}

?>
