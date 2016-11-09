<?php
	$username="root";	
	$password="asdf";
	$server = "localhost";
	$dbname= "praneeth";
	$con = new mysqli($server,$username,$password,$dbname);
	if ($con->connect_error) {
    			die("Connection failed: " . $con->connect_error);
	}
	$id = $_GET['id'];
	$query = "select * from `praneeth`.Details WHERE id = $id;";
	$result = $con->query($query);
	$count = $result->num_rows;
	if( $count > 0 ){
    		while($row = $result->fetch_assoc()){
    			header("Content-type: image/jpeg");
    			echo $row['logo'];
    		} 		
	}
?>
