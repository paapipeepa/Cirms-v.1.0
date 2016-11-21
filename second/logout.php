<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
 	<?php
		session_unset();
		session_destroy();
		echo "<img src='../images/logout.png'></img>";
		header('Refresh:4;url=../index.php');
	?>
	
</body>
</html>