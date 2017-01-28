 <?php
 	session_start();
 	 if(empty($_SESSION['uname'])){
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../index.php');
    }  
    include 'db_open.php';
    $id = $_SESSION['in'];
    $temp = $_SESSION['uname'];
    $qe = "SELECT * FROM `praneeth`.DOT where id='$id'";
    $result = $connect->query($qe);
	while($row = $result->fetch_assoc()){
		$dot = $row["date"];
	}
	
	$q = "SELECT * FROM `praneeth`.Details where id='$id'";
	$res = $connect->query($q);
	while($row = $res->fetch_assoc()){
		$cname = $row["name"];
	}
    $query = "SELECT * FROM `praneeth`.Hostel where Rno = '$temp'";
    $str = "INSERT INTO `praneeth`.Bus VALUES('$temp','$dot','$cname')";
    $result = $connect->query($query);
    $nor = $result->num_rows;
    if($nor > 0){
    	$connect->query($str);
    	echo "Inserted Successfully";
    }
    else{
    	echo "Please update your hostel details";
    	header('Refresh:2;url=./stdisplay.php');

    }
    include 'db_close.php';

    
?>