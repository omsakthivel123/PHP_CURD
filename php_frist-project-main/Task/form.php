<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <form action="" method="POST">
        <h1>Add Student Details</h1>
        <label>Name : </label>
        <input type="text" name="name" id="name"  required>
        <label>Email Id </label>
        <input type="email" name="email" id="email" required>
        <label>Mobile Number</label>
        <input type="number" name="mn" id="mn"    required>
        <label>Department</label>
        <input type="text" name="dpart" id="depart" required>
        <label>Password </label>
        <input type="text" name="pass" id="pass" required>
        <button type="submit" name="submit">Submit</button>
        <input type="hidden" name="Delete">
    </form>
    <br>
    <br>
    
    <?php
    //mysql data visible all time 
    include("data.php");
    $sqldata = mysqli_query($conn,"SELECT * FROM Student_details");

    echo "<table border='5'>
    <Tr>
    <th>id</th>
    <th>Name</th>
    <th>Mobile Number</th>
    <th>Email</th>
    <th>Department</th>";

    while($row = mysqli_fetch_array($sqldata))
    {
        echo "<tr>";
        $id=$row["id"];
        echo "<td>".$row['id'].'</td>';
        echo "<td>".$row['NAME'].'</td>';
        echo "<td>".$row['Mobile_number'].'</td>';
        echo "<td>".$row['Email_id'].'</td>';
        echo "<td>".$row['Department'].'</td>';
        echo '<td><a href ="delete.php?id='.$id.'">Edit</a></td>';
        echo '<td><a href ="Adddata.php?id='.$id.'">Delete</a></td>';

    }
    
    echo "</table>";
    
     
    if(isset($_GET['id']))
     {
        $id = $_GET['id'];
        $delete=mysqli_query($conn,"DELETE FROM student_details WHERE id='".$id."'");
     }

     
    mysqli_close($conn);
    

    

    