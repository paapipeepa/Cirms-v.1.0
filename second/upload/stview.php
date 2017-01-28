<?php
	session_start();
?>
<html>
<head>
<title>Download File From MySQL</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1>STUDY MATERIAL</h1>
<?php
	$value = $_SESSION['in'];       
    include 'db_open.php';

	$query = "SELECT id, name FROM `praneeth`.upload WHERE companyid='$value'";
	$result = $connect->query($query);
	$rows = $result->num_rows;
	if($rows == 0)
		{
			echo "Database is empty <br><br><br><br>";
		} 
	else
		{ 
	       
          while($row = $result->fetch_assoc()){
            echo '<section class="w-section section-imp">';
            echo '<div class="w-container">';
              echo '<div class="w-row">';
                echo '<div class="w-col w-col-6">';
                echo '<a href="download.php?id='.$row["id"].'">'.$row["name"].'';  
				echo '</a>';
				echo '</div>';
			}
			
		}
    include 'db_close.php';
?>
	<a href="../st.php"><button class="button button1">Go Back</button> </a>
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