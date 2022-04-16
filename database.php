<?php
  $dbhost = "localhost";
  $dbUser = "root";
  $dbPass = "";
  $dbName = "mysite";

  $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
  if($conn){

  }else{
    die("Database connection failed!");
  }
 ?>
