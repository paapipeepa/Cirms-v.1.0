<!DOCTYPE html>
<html>
	<head>
	<title>List</title>
	</head>
	<body>
	<?php
		$id = $_GET['id'];
        include 'db_open.php';
    	$sql = "SELECT * FROM `praneeth`.Company_Registration WHERE id = '$id'";
		$result = $connect->query($sql);
		$rows = $result->num_rows;
		if ( $rows > 0) {
				echo "<table>";
        		while($row = $result->fetch_assoc()) {

        		echo '<tr>';
        		 echo '<td>'.$row["Rno"].'</td>';
        		 echo '</tr>';
        		//echo "Name: " . $row["Name"]. " - Roll No: " . $row["Rno"].";
        		
    		}
    			echo "</table>";
		} 
		else {
    		echo "0 results";
    		
		}
		$connect->close();
        include 'db_close.php';

		
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