<?php
include "db.php";


$id = "";
$name = "";
$email = "";
$phone = "";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:SCOTO/index.php");
        exit;
    }


$id = $_GET['id'];
$sql="SELECT * FROM curd WHERE id = $id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

    while(!$row ) {
        header("location:SCOTO/index.php");
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

    $sql="UPDATE curd  set name='$name', email='$email', phone='$phone' where id='$id'";
$result = $con->query($sql);
}


if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO curd(name,email,phone)value('$name','$email','$phone')";

// $query=mysqli_query($con,$sql);

if(mysqli_query($con,$sql)){
    echo'<script> location.replace("index.php")</script>';
}
else{
    echo "employee details NOT added";
}
} 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>CREATE NEW MEMBER</h1>
<br>

<form method="post">

<div>
<input type="hidden" name="id" value="<?php echo $id ?>">
<br>
<label for="name">NAME :</label> 
<input type="text" name="name" id="name" value="<?php echo $name ?>" >  
</div><br>   

<div>
<label for="">EMAIL :</label>
<input type="email" name="email" id="email"  value="<?php echo $email ?>" >
</div><br>

<div>
<label for="">PHONE :</label>
<input type="text" name="phone" id="phone" value="<?php echo $phone ?>" >
</div><br>

<div>
    <input type="submit"  name="edit">
  
<button><a href="index.php">BACK</a></button>
</form>

</body>
</html>
