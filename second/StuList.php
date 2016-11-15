<!DOCTYPE html>
<html>
	<head>
	<title>List</title>
	</head>
	<body>
	<?php
		$username = "root";
		$password="asdf";
        $server = "localhost";
        $dbname= "praneeth";
      	$id = $_GET['id'];
        $connect=new MYSQLi($sever,$username,$password,$database);
        if ($connect->connect_error) {
    			die("Connection failed: " . $connect->connect_error);
			} 
		$sql = "SELECT 	Name, Rno FROM `praneeth`.Company_Registration WHERE id = '$id'";
		$result = $connect->query($sql);
		$rows = $result->num_rows;
		if ( $rows > 0) {
				echo "<table>";
        		while($row = $result->fetch_assoc()) {

        		echo '<tr>';
        		 echo '<td>'.$row["Name"].'</td>'.'<td>'.$row["Rno"].'</td>';
        		 echo '</tr>';
        		//echo "Name: " . $row["Name"]. " - Roll No: " . $row["Rno"].";
        		
    		}
    			echo "</table>";
		} 
		else {
    		echo "0 results";
    		
		}
		$connect->close();
		
	?>
			<a href="<?php echo "stdisplay.php?id='$id'"; ?>"> <button class="button button4">Go Back</button> </a>

	<style>
          .button4 {
            background-color: #008cba;
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 16px; 
            margin: 0px 20px;
            cursor: pointer;
          }
    </style>
	</body>
</html>