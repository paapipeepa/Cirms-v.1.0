<?php session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CompanyRegistration</title>
	</head>
	<body>
		<?php
			$id = $_SESSION['inkokadu'];
			$username = "root";
			$password="asdf";
            $server = "localhost";
            $dbname= "praneeth";
			$name  = $_POST["q15_name15"];
			$rno   = $_POST["q19_rollNumber19"];
			$email = $_POST["q30_email30"];
			$pno   = $_POST["q31_phoneNumber"];
			$connect=mysqli_connect($sever,$username,$password,$database);
			if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
			$query = "INSERT INTO `praneeth`.Company_Registration(`Name`,`Rno`,`Email`,`Pno`,`id`) VALUES ('$name','$rno','$email','$pno','$id')";
			$q = "SELECT Details.cgpa FROM `praneeth`.Stud_details, `praneeth`.Details WHERE roll = '$rno' AND Details.cgpa <=Stud_details.cgpa AND cur_course = cou";
			$b = mysqli_query($connect,$q);
			if($b == TRUE){
				$bool = mysqli_query($connect,$query);
				if($bool == TRUE){
					echo "Successfully Registered";
					header('Refresh:2 ;url=../st.php');
				}
				else{
					echo "You are already registered";
					header('Refresh:2;url=../st.php');
				}
			}
			else{
				echo "You are not eligible. Please check the eligibility criteria and try again.";
			}
			mysql_close();
		?>
	</body>
</html>