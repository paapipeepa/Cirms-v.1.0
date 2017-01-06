 <?php
    $username="root"; 
    $password="asdf";
    $server = "localhost";
    $dbname= "praneeth";
    $con = new mysqli($server,$username,$password,$dbname);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $one = $_POST["branch"];
    $two = $_POST["cgpa"];
    $three = $_POST["gender"];
    $four = $_POST["arrear"];

    echo $one;
    echo '<br>';
    echo $two;
    echo '<br>';
    echo $three;
    echo '<br>';
    echo $four;
    $sql1 ="SELECT * FROM `praneeth`.Stud_details WHERE branch='$one' AND cgpa>'$two' AND gender='$three' AND cur_arrear='$four'";
    $sql2 ="SELECT * FROM `praneeth`.Stud_details WHERE cgpa>0.0 AND cur_arrear=0";
    $sql3 ="SELECT * FROM `praneeth`.Stud_details WHERE branch='$one' AND cgpa>'$two' AND gender='$three' AND cur_arrear='$four'";
    $sql1 ="SELECT * FROM `praneeth`.Stud_details WHERE branch='$one' AND cgpa>'$two' AND gender='$three' AND cur_arrear='$four'";
    $sql1 ="SELECT * FROM `praneeth`.Stud_details WHERE branch='$one' AND cgpa>'$two' AND gender='$three' AND cur_arrear='$four'";
    $sql1 ="SELECT * FROM `praneeth`.Stud_details WHERE branch='$one' AND cgpa>'$two' AND gender='$three' AND cur_arrear='$four'";

   // echo $sql2;
    if($one == 'All'){
    	if($two==0.0 && $three='All'){
    		$result=$con->query($sql2);
	
    	}
    	else if($two == '0.0' && $three!='All'){

    	}
    	else if($three='All' && $two !='0.0'){

    	}
    }
    else if($one != 'All'){
	    if($two == '0.0' && $three=='All'){

	    }
	    else if($two=='0.0' && $three!='All'){

	    }
	    else if($three=='All' && $two != '0.0'){

	    }
	}
	  	while($row = $result->fetch_assoc()){
				echo $row["fname"];
		}	

?>