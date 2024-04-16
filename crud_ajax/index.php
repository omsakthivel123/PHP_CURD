<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
   <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
</head>
<body>

    <h1>Student Details</h1><br>
    <br>
   <a href="adduser.php">ADD</a> <br><br>

    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="itemTable">
      <?php
      include "db.php";
    $result = mysqli_query($conn, "SELECT * FROM ajax_curd");

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
               <button type="button" value=<?php echo $id?>>EDIT</button>
               <button><a href='delete.php?del=<?php echo $id?>'>DELETE</a></button>
            </td>
            
        </tr>
    
  </tbody>
    <?php } ?>
    </tbody>
 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   
       
</body>

</html>