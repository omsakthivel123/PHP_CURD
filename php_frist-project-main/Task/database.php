<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "SKV_College";

     
    $conn = new mysqli($server, $username, $password, $database);
    
    if($conn ->connect_error)
    {
        die("Connection Failed". $conn ->connect_error);
    }
   // database Section
    // $sql = "CREATE DATABASE SKV_College";
    // $result = $conn -> query($sql);

    // create table
    // $sql1 = "CREATE TABLE Student_Details (
    //     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //     NAME VARCHAR(20) NOT NULL,
    //     Mobile_number INT(10) NOT NULL ,
    //     Email_id VARCHAR(50) NOT NULL ,
    //     Department VARCHAR(50) NOt NULL,
    //     Password VARCHAR(50) NOT NULL)";
    //     $result = $conn->query($sql1);
    


    ?>
</body>
</html>