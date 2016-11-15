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
			$connect = new mysqli($server,$username,$password,$dbname);
			if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
			if(isset($_FILES['file'])){
			      $errors= array();
			      $file_name = $_FILES['file']['name'];
			      $file_size =$_FILES['file']['size'];
			      $file_tmp =$_FILES['file']['tmp_name'];
			      $file_type=$_FILES['file']['type'];
			      $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
			      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

			      $expensions= array("jpeg","jpg","png");

			      if(in_array($file_ext,$expensions)=== false){
			         $errors[]="extension not allowed, please choose an appropriate file.";
			      }

			      if($file_size > 209715222){
			         $errors[]='File size must be excately 20 MB';
			      }
		
   			}  
			$name=$_POST['q12_companyName12'];
			$category=$_POST['q5_category'];
			$email=$_POST['q15_companyEmail'];
			$url=$_POST['q16_companyUrl16'];
			$date = $_POST['q20_date'];
			$contact=$_POST['q14_contactInformation'];
			$branches=$_POST['q13_eligibleBranches'];
			$cgpa=$_POST['q13_cgpa'];
			$cou=$_POST['q13_cou'];
			$description=$_POST['q11_companyDescription'];
			$additional=$_POST['q7_additionalDetails'];
			
			$sqlQuery = "INSERT INTO `praneeth`.Details (`name`, `category`, `email`, `url`,`date`,`contact`, `branches`,`cgpa`,`cou`, `description`, `additional`,`logo`) VALUES ('$name','$category','$email','$url','$date','$contact','$branches','$cgpa','$cou','$description','$additional','$image')";
			$bool = $connect->query($sqlQuery);	
								
			if ($bool === TRUE) {
    			echo "New Company data added to the database";
    			echo "You will be redirected in 3 seconds.....";
    			//header("content-type": image/jpeg);
    			//echo $file_tmp;
    			header('Refresh:3 ;url=/templates/log/login.php');
			} 
			else {
    			echo "Error: " . $sql . "<br>" . $connect->error;
    			echo "<br>";
    			echo "Redirecting to the form";
    			header('Refresh:3;url=/templates/log/j.php');
			}
				
		}
	?>
</body>
</html>