<?php

$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "employee");

$delete=$_GET['del'];

$sql="delete from student_table1  where Id='$delete'";

if(mysqli_query($con,$sql)){
    echo'<script> location.replace("task1.php")</script>';
}
else{
    echo "Student details NOT added";
}
?>

