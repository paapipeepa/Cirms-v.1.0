<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CompanyRegistration</title>
	</head>
	<body>
		<?php
			$username = "root";
			$password = "yashwanth";
			$database = "Yash";
			$name  = $_POST["q15_name15"];
			$rno   = $_POST["q19_rollNumber19"];
			$email = $_POST["q30_email30"];
			$pno   = $_POST["q31_phoneNumber"];
			$connect=mysqli_connect("localhost",$username,$password,$database);
			if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
			//@mysql_select_db($database) or die( "Unable to select database");
			$query = "INSERT INTO `Yash`.Company_Registration (`Name`,`Rno`,`Email`,`Pno`) VALUES ('$name','$rno','$email','$pno')";
			$bool = mysqli_query($connect,$query);
			mysql_close();
		?>
	</body>
</html>