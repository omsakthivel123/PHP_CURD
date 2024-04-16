<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("database.php");
     $id =$_GET['id'];
     $sql = "SELECT * FROM Student_details WHERE id= $id";
    $result = $conn->query($sql);
    
    if($result==true)
    {
        $row = mysqli_fetch_assoc($result);


    // print_r($row) ;
    }
    foreach ($result as $row) 
    {
        $id= $row['id'];
        $name = $row['NAME'];
        $email = $row['Email_id'];
        $MOB = $row['Mobile_number'];
        $dpart = $row['Department'];

    }
    ?>
    
     <form action="data.php" method="POST">
        <h1>Edit Student Details</h1>
        <input type="hidden" name="upid" value="<?php echo  $row['id'];?>">
        <label>Name : </label>
        <input type="text" name="name" id="n" required  value="<?php echo  $row['NAME'];?>">
        <label>Email Id </label>
        <input type="email" name="email" id="e" value="<?php echo $row['Email_id'];?>" required>
        <label>Mobile Number</label>
        <input type="text" name="mn" id="m" value="<?php echo $row['Mobile_number'];?>"   required>
        <label>Department</label>
        <input type="text" name="dpart" id="d"  value="<?php echo $row['Department'];?>" required>
        <button type="submit" name="update">uptate</button>
      
    </form>

</body>
</html>