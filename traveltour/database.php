<?php
 $host = "localhost";
  $user = "root";
   $pass = ""; 
   $db_name = "shoutit"; 
   $con = new mysqli($host, $user, $pass, $db_name); 

   if (mysqli_connect_errno()) {
        echo "Failed".mysqli_connect_error();
   }
?>