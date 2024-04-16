<?php

$con=mysqli_connect("localhost","root","","employee");   
 

// $sql="INSERT INTO curd(name,email,phone) 
//      value('$a','$b','$c','$d')";

//  $e=mysqli_query($con,$sql);
 
 if($con->connect_error)
 {
    die ("Connection failed".$con->connect_error);
 }
 else
 {
 echo "";
}
?>