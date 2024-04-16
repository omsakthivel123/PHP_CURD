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
    <button><a href="create.php">ADD</a></button>
</div>
<br>
<br>

    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>MOBILE</th>
      <th>ACTIONS</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "db.php";

   
$result = mysqli_query($con, "SELECT * FROM curd");

$row=mysqli_fetch_all($result,MYSQLI_ASSOC);

        foreach($row as $a){

            $id=$a['id'];
            $name= $a['name'];
            $email= $a['email'];
            $phone=$a['phone'];
            
            ?>

            <tr>
            <th><?php echo $id ?></th>
            <td><?php echo $name?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $phone ?></td>
            <td>
               <button><a href='edit1.php?id=<?php echo $id?>'>EDIT</a></button>
               <button><a href='delete1.php?del=<?php echo $id?>'>DELETE</a></button>
            </td>
            
        </tr>
    
  </tbody>
    <?php } ?>
</body>
</html>