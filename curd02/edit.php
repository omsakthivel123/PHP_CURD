<?php
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, "employee");
$edit = $_GET['edit'];
$sql = "SELECT * FROM student_table1 WHERE Id =  '$edit' ";


$run = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($run)) {

    $uid = $row['Id'];
    $name = $row['Student_name'];
    $email = $row['Student_email'];
    $mobile = $row['Student_number'];

}
?>

<?php


$con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"employee");

if(isset($_POST['submit'])){
    
    // $edit=$_GET['edit'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

$sql="INSERT INTO student_table1(Student_name,Student_email,Student_number) 
     value('$name','$email','$mobile')";



if(mysqli_query($con,$sql)){
    echo'<script> location.replace("task1.php")</script>';
}
else{
    echo "Student details NOT added";
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
    
<h1>STUDENT DETAILS..</h1>
<br>

<form action="task01.php" method="post">

<div>
    <label for="name">NAME :</label> 
    <input type="text" name="name" id="name" value="<?php echo $name ?>">  
</div><br>   

<div>
    <label for="">EMAIL :</label>
    <input type="email" name="email" id="email" value="<?php echo $email ?>">
</div><br>

<div>
    <label for="">MOBILE :</label>
    <input type="text" name="mobile" id="mobile" value="<?php echo $mobile ?>">
</div><br>

<div>
    <input type="submit" name="submit" value="EDIT">
</div>
</form>

</body>
</html>
