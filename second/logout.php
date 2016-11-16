<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
 	<?php
		session_unset();
		session_destroy();
	//	echo "Log out successful";
		echo "<img src='../images/logout.png'></img>";
		//header('Refresh:0;url=../index.php');
	?>
	<a href="../">Go to the Main page</a>
</body>
</html>