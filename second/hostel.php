<?php
  session_start();
  if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.php');
    }  

	if($_SERVER['REQUEST_METHOD'] == "POST"){
			include 'db_open.php';
			$hno = $_POST["hname"];
			$rollno = $_SESSION["uname"];
			$rno = $_POST["rno"];
			$que = "INSERT INTO `praneeth`.Hostel VALUES('$rollno','$hno','$rno')";
			$q = "UPDATE `praneeth`.Hostel set Hname = '$hno', Roomno = '$rno' where Rno = '$rollno'";
			$query = "SELECT * FROM `praneeth`.Hostel where Rno = '$rollno'";
			$result = $connect->query($query);
			$nor = $result->num_rows;
			if($nor == 0){
				$connect->query($que);
				echo "Inserted successfully.";
				header('Refresh:2;url=./st.php');
			}
			else{
				$connect->query($q);
				echo "Updated successfully.";
		        header('Refresh:2;url=./st.php');
			}
				
	}		 
	include 'db_close.php';

?>