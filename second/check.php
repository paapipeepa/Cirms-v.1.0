<?php session_start();
   if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.php');
    }  
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CompanyRegistration</title>
	</head>
	<body>
		<?php
			$id = $_GET['id'];
			$username = "root";
			$password="asdf";
            $server = "localhost";
            $dbname= "praneeth";
            $u=$_SESSION["uname"];
            $connect=mysqli_connect($sever,$username,$password,$database);
			if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
            $query = "select * from `praneeth`.Stud_details WHERE roll = '$u'";
            $query2 = "select * from `praneeth`.Details where id='$id'";
            $bool=mysqli_query($connect,$query);
            while($row = $bool->fetch_assoc()){
            $roll = $row['roll'];
            $email = $row['email'];
            $cgpa = $row['cgpa'];
        	}
            $bor = mysqli_query($connect,$query2);
           // $q = "SELECT Details.cgpa FROM `praneeth`.Stud_details, `praneeth`.Details WHERE roll = '$u' AND Details.cgpa <=Stud_details.cgpa AND id='$id'";
            while($row = $bor->fetch_assoc()){
            $cgpa2 = $row['cgpa'];
        	}
		//	$b = mysqli_query($connect,$q);
			if($cgpa2 <= $cgpa){
				$qu = "SELECT * FROM `praneeth`.Company_Registration where Rno = '$roll' and Email='$email' and id='$id'";
				$b = mysqli_query($connect,$qu);
				$r = $b->num_rows;
				if($r>0){
					echo "Already Registered";
					header('Refresh:2 ;url=st.php');

				}
				else{
				 $quer = "INSERT INTO `praneeth`.Company_Registration(`Rno`,`Email`,`id`) VALUES ('$roll','$email','$id')";

            	 $c = mysqli_query($connect,$quer);
            	 echo "Succesfully registered";
				 header('Refresh:2 ;url=st.php');
            	}	
			}
			else{
				echo "Not Eligilible CGPA Criteria";
				header('Refresh:2 ;url=st.php');
				
			}
           

