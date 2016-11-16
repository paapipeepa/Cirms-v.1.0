<?php
 session_start();
 ?>
 <?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username="root";   
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $connect = new MySQLi($server,$username,$password,$dbname);
            
    if($connect->connect_errno){
        echo "Connection failed";
    }
    $uname= $_SESSION["ui"];
    $oldpsw = $_POST['oldpsw'];
    $newpsw = $_POST['newpsw'];
    $confpsw =$_POST['confpsw'];
   $Str1 ="SELECT * FROM `praneeth`.login where user='$uname'";
   $sql = $connect->query($Str1);
    echo $Str1;
    $rows = $sql->num_rows;

    if ($rows > 0) {
        echo "hello";
        while($row = $sql->fetch_assoc()) {
            $a = $row["pass"];
            echo $a;
        }
        if($a==$oldpsw){
            if($newpsw==$confpsw){
                $str2="update `praneeth`.login set pass='$newpsw' where user='$uname';";
                $sql = $connect->query($str2);
                echo "Successfully Changed your Password, please Login again";
                header('Refresh:4 ;url=../index.php');
            }
        }
        else{
            echo "Fail";
        }
    
    }
}

?>