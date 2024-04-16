<?php

include "db2.php";

if(isset($_POST['submit'])){
  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO curd2(name,email,phone)value('$name','$email','$phone')";

if(mysqli_query($con,$sql)){
  //  header("Location: index2.php");
   
}
else{
    echo "employee details NOT added";
}
} 
?>



<?php
include "db2.php";


$id = "";
$name = "";
$email = "";
$phone = "";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:index2.php");
        exit;
    }


$id = $_GET['id'];
$sql="SELECT * FROM curd2 WHERE id = $id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

    while(!$row ) {
        header("location:index2.php");
        exit;   
    }
    $id=$row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];

}

if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql="UPDATE curd2  set name='$name', email='$email', phone='$phone' where id='$id'";
$result = $con->query($sql);
}


if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO curd2(name,email,phone)value('$name','$email','$phone')";

// $query=mysqli_query($con,$sql);

if(mysqli_query($con,$sql)){
     header("Location: index2.php");
   
}
else{
    echo "employee details NOT added";
}
} 
?>


