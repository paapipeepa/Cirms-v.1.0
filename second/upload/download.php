<?php
if(isset($_GET['id'])) 
{

	$username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }

$id    = $_GET['id'];
$query = "SELECT name, type, size, content FROM `praneeth`.upload WHERE id = '$id'";

$result = mysqli_query($connect,$query) or die('Error, query failed');
list($name, $type, $size, $content) = mysqli_fetch_array($result);

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content; 
//exit;
mysqli_close();
}

?>