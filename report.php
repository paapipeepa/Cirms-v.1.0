<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CompanyRegistration</title>
	</head>
	<body>
		<?php
			include 'db_open.php';
			$rno   = $_POST["fullname"];
			$rep = $_POST["message"];
			$query = "INSERT INTO `praneeth`.bugreport(`rollno`,`report`) VALUES ('$rno','$rep')";
			$connect->query($query);
			echo $query;
			echo "Thank you for your response :)";
			include 'db_close.php';
			header('Refresh:0;url=index.php');
		?>
	</body>
</html>
