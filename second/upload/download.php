<?php
if(isset($_GET['id'])) 
{

	include 'db_open.php';

$id    = $_GET['id'];
$query = "SELECT name, type, size, content FROM `praneeth`.upload WHERE id = '$id'";

$result = mysqli_query($connect,$query) or die('Error, query failed');
list($name, $type, $size, $content) = mysqli_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content; 
include 'db_close.php';
}

?>