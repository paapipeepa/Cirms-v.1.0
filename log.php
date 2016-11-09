<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Entries</title>
</head>
<body>
	<?php
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			$username="root";	
			$password="asdf";
			$server = "localhost";
			$dbname= "praneeth";
			$uname="cirms_admin";
			$upass="@mm@123";
			$connect = new MySQLi($server,$username,$password,$dbname);
			
			if($connect->connect_errno){
				echo "Connection failed";
			}
			$mail=$_POST['uname'];
			$pwd=$_POST['psw'];		
			if($mail == $uname){					
				$sqlQuery = "SELECT * FROM `praneeth`.login WHERE user='$uname' AND pass= '$upass';";
				$sql = $connect->query($sqlQuery);
				$rows = $sql->num_rows;
				if($rows > 0){
					echo "Login succesful";
					$_SESSION['uname']=$mail;
					header('Refresh:0 ;url=./second/login.php');
				}
			}
			else{
				$sqlQueryOne = "SELECT * FROM `praneeth`.login WHERE user='$mail' AND pass='$pwd';";
				$sql = $connect->query($sqlQueryOne);
				$row = $sql->num_rows;
				
				if($row > 0){
					echo "Login succesful.";
					$_SESSION['uname'] = $mail;
					header('Refresh:0,url=./second/st.php');
				}
				else{
					echo "Login failed";
					echo "<br>";
					echo "You are being redirecting to main page....";
					header('Refresh:3 ;url=index.html');
				}
				
			}
			
		}
	?>
</body>
</html>