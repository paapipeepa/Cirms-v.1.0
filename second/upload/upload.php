<DOCtype! html>
<html>
	<body style="background-color:#C8C8C8;">
		<form method="post" enctype="multipart/form-data">
			<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
				<tr> 
					<td width="246">
						<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input name="userfile" type="file" id="userfile"> 
					</td>
					<td width="80">
						<input name="upload" type="submit" class="box" id="upload" value=" Upload ">
					</td>
				</tr>
			</table>
			<select>
				<option>meow1</option>
				<option>meow2</option>
				<option>meow3</option>
				<option>meow4</option>
				<option>meow5</option>
			</select>
		</form>
<?php
	$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }

	if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
		{
			$fileName = $_FILES['userfile']['name'];
			$tmpName  = $_FILES['userfile']['tmp_name'];
			$fileType = $_FILES['userfile']['type'];
			$fileSize = $_FILES['userfile']['size'];

			$fp      = fopen($tmpName, 'r');
			$content = fread($fp, filesize($tmpName));
			$content = addslashes($content);
			fclose($fp);

			if(!get_magic_quotes_gpc())
				{
				    $fileName = addslashes($fileName);
				}
			//include 'library/config.php';
			//include 'library/opendb.php';

			$query = "INSERT INTO `praneeth`.upload (name, size, type, content ) VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

			mysqli_query($connect,$query) or die('Error, query failed'); 

			//include 'library/closedb.php';

			echo "<br>File $fileName uploaded<br>";
		} 
	mysqli_close();
?>
	</body>
</html>
