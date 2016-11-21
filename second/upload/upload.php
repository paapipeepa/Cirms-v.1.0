<?php
session_start();
if(isset($_SESSION['uname'])){
  if($_SESSION['uname'] != 'cirms_admin')
  {
    header('Refresh:0;url=../st.php');
  } 
}
else header('Refresh:0;url=../../index.php');
?>
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
		</form>
		<a href="../login.php"><button class="button button1">Go Back</button> </a>
<?php
	$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
    $value = $_SESSION['in'];
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
		
			$query = "INSERT INTO `praneeth`.upload (name, size, type, content,companyid) VALUES ('$fileName', '$fileSize', '$fileType', '$content','$value')";
			mysqli_query($connect,$query) or die('Error, query failed'); 
			echo "<br>File $fileName uploaded<br>";
		} 
	mysqli_close();
?>
	</body>
	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</html>
