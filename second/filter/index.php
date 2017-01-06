<?php
session_start();
if(isset($_SESSION['uname'])){
  if($_SESSION['uname'] != 'cirms_admin'){
  header('Refresh:0;url=../index.php');
  }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Filter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="jquery.sumoselect.js"></script>
    <link href="sumoselect.css" rel="stylesheet" />

    <script type="text/javascript">
        $(document).ready(function () {
            window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 3, captionFormatAllSelected: "Yeah, OK, so everything." });
            window.test = $('.testsel').SumoSelect({okCancelInMulti:true, captionFormatAllSelected: "Yeah, OK, so everything." });
            window.testSelAll = $('.testSelAll').SumoSelect({okCancelInMulti:true, selectAll:true });
            window.testSelAlld = $('.SlectBox-grp').SumoSelect({okCancelInMulti:true, selectAll:true });

            window.testSelAll2 = $('.testSelAll2').SumoSelect({selectAll:true });
           

            window.Search = $('.search-box').SumoSelect({ csvDispCount: 3, search: true, searchText:'Enter here.' });
            window.searchSelAll = $('.search-box-sel-all').SumoSelect({ csvDispCount: 3, selectAll:true, search: true, searchText:'Enter here.', okCancelInMulti:true });
            window.searchSelAll = $('.search-box-open-up').SumoSelect({ csvDispCount: 3, selectAll:true, search: false, searchText:'Enter here.', up:true });

            window.groups_eg_g = $('.groups_eg_g').SumoSelect({selectAll:true, search:true });
        });
    </script>
    <style type="text/css">
        body{font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color:#444;font-size:13px;}
        p,div,ul,li{padding:0px; margin:0px;}
    </style>
</head>
<body>
<div class="he">
<form action="f.php" method="post">
    <h1>Filter based on the category</h1>
    <h4>Branch</h4>
	 <select  placeholder="Select Branch" class="search-box" name="branch">
      <option class="hemant" value="CSE">CSE</option>
      <option class="hemant" value="ECE">ECE</option>
      <option value="EEE">EEE</option>
      <option value="MEC">MEC</option>
      <option value="BCA">BCA</option>
      <option value="All">ALL</option>
    </select>

    <h4>CGPA</h4>
    <select  placeholder="CGPA" class="search-box" name="cgpa">
      <option class="hemant" selected value="6.0">>6.0</option>
      <option class="hemant" value="7.0">>7.0</option>
      <option value="8.0">>8.0</option>
      <option value="9.0">>9.0</option>
      <option value="0.0">NONE</option>
    </select>

    <h4>Gender</h4>
    <select  placeholder="Gender" class="search-box" name="gender">
      <option class="hemant" value="Male">Male</option>
      <option class="hemant" value="Female">Female</option>
      <option class="hemant" value="All">All</option>
    </select>
    <h4>Current Arrears</h4>
     <select  placeholder="Current arrears" class="search-box" name="arrear">
      <option class="hemant" value="0">0</option>
      <option class="hemant" value="3">3</option>
      <option class="hemant" value="2">2</option>
      <option class="hemant" value="1">1</option>
    </select>
<!--
    <h4>Tenth Percentage</h4>
     <select  placeholder="Tenth Percentage" class="search-box" name="tp">
      <option class="hemant" value="4">>60%</option>
      <option class="hemant" value="3">>70%</option>
      <option class="hemant" value="2">>80%</option>
      <option class="hemant" value="1">>90%</option>
       <option value="0">NONE</option>

    </select>

    <h4>Twelth Percentage</h4>
     <select  placeholder="Twelth Percentage" class="search-box" name="twp">
       <option class="hemant" value="4">>60%</option>
      <option class="hemant" value="3">>70%</option>
      <option class="hemant" value="2">>80%</option>
      <option class="hemant" value="1">>90%</option>
            <option value="0">NONE</option>

    </select>

    <h4>Ug Percentage</h4>
      <select  placeholder="Ug Percentage" class="search-box" name="up">
      <option class="hemant" value="4">>60%</option>
      <option class="hemant" value="3">>70%</option>
      <option class="hemant" value="2">>80%</option>
      <option class="hemant" value="1">>90%</option>
            <option value="0">NONE</option>

    </select>
    -->
    <br>
    <br>
    <input type="submit" class="search-box">
</form>    
</div>
</body>

<style>
  .he{
    text-align: center;
  }
</style>

</html>
