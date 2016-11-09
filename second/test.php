<?php
	$username="root";	
	$password="asdf";
	$server = "localhost";
	$dbname= "praneeth";
	$con = new mysqli($server,$username,$password,$dbname);
	if ($con->connect_error) {
    	die("Connection failed: " . $con->connect_error);
	}
	$query = "select * from `praneeth`.Details";
	$result = $con->query($query);
	while ($row = $result->fetch_assoc()) {
  		echo '<img width="500" src="display.php?id='.$row["id"].'">';
	}
?>	