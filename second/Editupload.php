<?php
include 'db_open.php';
require_once 'Classes/PHPExcel/IOFactory.php';
require_once 'Classes/PHPExcel.php';
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $expensions= array("jpeg","jpg","png","txt","xls","xlsx");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose an appropriate file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      /*"uploads/".*/
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploadhere/".$file_name);
         echo "Success";
        echo "uploadhere"."/".$file_name;
         $objPHPExcel = PHPExcel_IOFactory::load("uploadhere/".$file_name);
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
         {
              $highestRow = $worksheet->getHighestRow();
              for ($row=2; $row<=$highestRow; $row++)
              {	
                   $internship = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                   $fname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1 , $row)->getValue());
                   $mname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                   $lname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                   $eligibility = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                   $cur_course = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                   $branch = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                   $roll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                   $place_stat = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                   $place_stat_final = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                   $college = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                   $gen = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                   $dob = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                   $tenth = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                   $twelfth = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                   $sem1 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                   $sem2 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                   $sem3 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(17, $row)->getValue());
                   $sem4 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(18, $row)->getValue());
                   $sem5 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(19, $row)->getValue());
                   $sem6 = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(20, $row)->getValue());
                   $cgpa = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(21, $row)->getValue());
                   $cur_arrear= mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(22, $row)->getValue());
                   $his_arrear = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(23, $row)->getValue());
                   $h_d = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(24, $row)->getValue());
                   $job_int = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(25, $row)->getValue());
                   $ten_board = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(26, $row)->getValue());
                   $ten_yop = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(27, $row)->getValue());
                   $twel_board = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(28, $row)->getValue());
                   $twel_yop = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(29, $row)->getValue());
                   $gaps = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(30, $row)->getValue());
                   $ugcourse_pgstud = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(31, $row)->getValue());
                   $ug_bran = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(32, $row)->getValue());
                   $ug_per = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(33, $row)->getValue());
                   $ug_coll = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(34, $row)->getValue());
                   $ug_yop = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(35, $row)->getValue());
                   $perm_addr = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(36, $row)->getValue());
                   $distr = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(37, $row)->getValue());
                   $state = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(38, $row)->getValue());
                   $coun = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(39, $row)->getValue());
                   $pin = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(40, $row)->getValue());
                   $mobile = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(41, $row)->getValue());
                   $email = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(42, $row)->getValue());
                   $gate = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(43, $row)->getValue());
                   $exp = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(44, $row)->getValue());
                   $job_prof = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(45, $row)->getValue());
                   $tot_exp = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(46, $row)->getValue());
                   $sql = "INSERT INTO `praneeth`.`Stud_details`(`internship`, `fname` , `mname`,`lname`,`eligibility`,`cur_course`,`branch`,`roll`,`place_stat`,`place_stat_final`,`college`,`gen`,`dob`,`tenth`,`twelfth`,`sem1`,`sem2`,`sem3`,`sem4`,`sem5`,`sem6`,`cgpa`,`cur_arrear`,`his_arrear`,`h_d`,`job_int`,`ten_board`,`ten_yop`,`twel_board`,`twel_yop`,`gaps`,`ugcourse_pgstud`,`ug_bran`,`ug_per`,`ug_coll`,`ug_yop`,`perm_addr`,`distr`,`state`,`coun`,`pin`,`mobile`,`email`,`gate`,`exp`,`job_prof`,`tot_exp`) VALUES ('$internship', '$fname' , '$mname','$lname','$eligibility','$cur_course','$branch','$roll','$place_stat','$place_stat_final','$college','$gen','$dob','$tenth','$twelfth','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$cgpa','$cur_arrear','$his_arrear','$h_d','$job_int','$ten_board','$ten_yop','$twel_board','$twel_yop','$gaps','$ugcourse_pgstud','$ug_bran','$ug_per','$ug_coll','$ug_yop','$perm_addr','$distr','$state','$coun','$pin','$mobile','$email','$gate','$exp','$job_prof','$tot_exp')";
               mysqli_query($connect, $sql);
                 
              }
             
         }

      }else{
         print_r($errors);
      }
   }
   include 'db_close.php';
?>
<html>
   <body class="hell">
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" class="mine" />
         <input type="submit" style="font-size:x-large;font-family:sans-serif;"/>
      </form>
   </body>
   <style>
   .hell{
    background-image: url("");
   }
   .mine{
   
    margin:200px 100px 150px 300px;
    font-size:x-large;
    font-family:sans-serif;
   }
   </style>
</html>
