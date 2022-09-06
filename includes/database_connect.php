<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "pglife";

   //Creating a connection
   $conn = mysqli_connect($host, $username, $passwd, $dbname);

   if($conn){
      print("Connection Established Successfully");
   }else{
      print("Connection Failed ");
   }
?>