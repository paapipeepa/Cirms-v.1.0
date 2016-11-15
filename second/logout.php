<?php session_start();?>
<!DOCTYPE html>
<html>
<body>
 	<?php
		session_unset();
		session_destroy();
		echo "Log out successful";
		header('Refresh:0;url=../index.php');
	?>
</body>
</html>