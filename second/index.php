<?php session_start();
          echo "Session Expired";
          echo "Redirecting.....";
          header('Refresh:0;url=../one/index.html');
?>
