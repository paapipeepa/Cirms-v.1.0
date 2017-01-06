<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CompanyRegistration</title>
	</head>
	<body>
		<?php
//			$id = $_SESSION['inkokadu'];
			$username = "root";
			$password="asdf";
            $server = "localhost";
            $dbname= "praneeth";
			
			$rno   = $_POST["fullname"];
			$rep = $_POST["message"];
			
			$connect=mysqli_connect($server,$username,$password,$dbname);
			if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
			$query = "INSERT INTO `praneeth`.bugreport(`rollno`,`report`) VALUES ('$rno','$rep')";
			$connect->query($query);
			echo $query;
			echo "Thank you for your response :)";
			mysqli_close();
			header('Refresh:0;url=index.php');
		?>
	</body>
</html>
