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

<div>
    <button><a href="task01.php">ADD</a></button>
</div>
<br>
<br>

<table>
   <thead>
   <tr>
      <th>#</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>MOBILE</th>
   </tr>
   </thead>

<tbody>
<?php

$con = mysqli_connect("localhost", "root", "", "employee");

$result = mysqli_query($con, "SELECT * FROM student_table1");

$row=mysqli_fetch_all($result,MYSQLI_ASSOC);


foreach($row as $a){

$uid=$a['Id'];
$name= $a['Student_name'];
$email= $a['Student_email'];
$mobile=$a['Student_number'];


?>
 <tr>
     <td><?php echo $uid ?></td>
    <td><?php echo $name ?></td>
     <td><?php echo $email ?></td>
     <td><?php echo $mobile ?></td>
     <td>
        <button><a href='edit.php?edit=<?php echo $uid?>'>EDIT</a></button>
        <button><a href='delete.php?del=<?php echo $uid?>'>DELETE</a></button>
     </td>
     
 </tr>

 <?php 
 }
?>


</tbody>
</table>
</body>
</html>

