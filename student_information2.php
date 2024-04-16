<?php 

$a=$_POST["studentname"];
$b=$_POST["age"];
$c=$_POST["email"];
$d=$_POST["password"];

$con= mysqli_connect("localhost","root","","school");

//our wish,we can declere eny variable names. ex  $sakthi also we can declare// 

$sql="INSERT INTO student_details (Student_name,Student_age,Student_email,Emil_password) 
     value('$a','$b','$c','$d')";

 $e=mysqli_query($con,$sql);
 
 if($e)
 {
    echo "Student details added succesfully sakthi";
 }
 else
 {
    echo "Student details NOT added";
 }

?>
