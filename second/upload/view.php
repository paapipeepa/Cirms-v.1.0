<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
	$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }


	$query = "SELECT id, name FROM `praneeth`.upload";
	$result = mysqli_query($connect,$query) or die('Error, query failed');
	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result) == 0)
		{
			echo "Database is empty <br><br><br><br>";
		} 
	else
		{
			while(list($id, $name) = mysqli_fetch_array($result))
			{
				/*?>
				<a href="download.php?id=<?php=$id;?>">
					<?php $name; ?>
				</a> <br>
				<?php */ 
	            $count = $result->num_rows;
               if( $count > 0 ){
	              while($row = $result->fetch_assoc()){
	                echo '<section class="w-section section-imp">';
	                echo '<div class="w-container">';
	                  echo '<div class="w-row">';
	                    echo '<div class="w-col w-col-6">';
	                    echo '<div class="photo-item-spc"><img  src="display.php?id='.$row["id"].'">';
				}
		}
	mysqli_close();
?>
</body>
</html>