<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_table";

$con= mysqli_connect($servername,$username,$password,$dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  else{
    "connected sakthi !)";
  }

  

?>