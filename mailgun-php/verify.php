<?php
 session_start();
 ?>
 <?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'db_open.php';
    $uname= $_SESSION["ui"];
    $oldpsw = $_POST['oldpsw'];
    $newpsw = $_POST['newpsw'];
    $confpsw =$_POST['confpsw'];
   $Str1 ="SELECT * FROM `praneeth`.login where user='$uname'";
   $sql = $connect->query($Str1);
    $rows = $sql->num_rows;

    if ($rows > 0) {
        
        while($row = $sql->fetch_assoc()) {
            $a = $row["pass"];
            //echo $a;
        }
        if($a==$oldpsw){
            if($newpsw==$confpsw){
                include '../use.php';
                $newpsw = md5($salt.$newpsw);
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
    include 'db_close.php';
?>