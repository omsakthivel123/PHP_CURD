<?php


// $a=$_POST["name"];
// $b=$_POST["email"];
// $c=$_POST["mobile"];


// $con= mysqli_connect("localhost","root","","employee");

// //our wish,we can declere eny variable names. ex  $sakthi also we can declare// 

// $sql="INSERT INTO student_table1 (Student_name,Student_email	,Student_number) 
//      value('$a','$b','$c')";

//  $e=mysqli_query($con,$sql);
 
//  if($e){
//     echo'<script> location.replace("task1.php")</script>';
// }
// else{
//     echo "Student details NOT added";
// }


 $con= mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"employee");

if(isset($_POST['submit'])){


    
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
<input type="text" name="name" id="name" re>  
</div><br>   

<div>
<label for="">EMAIL :</label>
<input type="email" name="email" id="email" require>
</div><br>

<div>
<label for="">MOBILE :</label>
<input type="text" name="mobile" id="mobile">
</div><br>

<div>
    <input type="submit"  name="submit">
</div>
</form>

</body>
</html>