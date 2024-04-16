<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php

$nameerr = "";
$MOBErr = "";
$emlerr = "";
$d = "";
$passR = "";
$same = "";


if(isset($_GET["nameerr"])) 
{
    $nameerr = $_GET["nameerr"];
}
if(isset($_GET["mblerr"]))
{
    $MOBErr =$_GET["mblerr"];
}
if(isset($_GET["emlerr"]))
{
    $emlerr =$_GET["emlerr"];
}
if(isset($_GET["derr"]))
{
    $d = $_GET["derr"];
}
if(isset($_GET["perr"]))
{
    $passR = $_GET["perr"];
}
if(isset($_GET["perr1"]))
{
    $same  = $_GET["perr1"];
}
?>

    <!--Form Data Add Form-->
    <form action="data.php"  method="POST" enctype="multipart/form-data">
        <h1>SKV College Registration Form</h1>
        <label>Name : </label>
        <input type="text" name="name" id="name" ><br>
        <p><span  style ="color:red" ><?php echo $nameerr ;?></span></p>
        <label>Mobile Number :</label>
        <input type="text" name="mn" id="mn" maxlength="10" ><br>
        <p><span style="color:Red" ><?php echo $MOBErr?></span></p> 
        <label>Email Id :</label>
        <input type="text" name="email" id="email" ><br>
        <p><span style="color:Red" ><?php echo $emlerr?></span></p>
        <label>Department :</label>
        <input type="text" name="dpart" id="dpart" ><br>
        <p><span style="color:Red"><?php echo $d?></span></p> 
        <lable>Create Password : </lable>
        <input type="text" name="pass" id="pass" ><br>
        <p><span style="color:Red" ><?php echo $passR?></span></p> 
        <label>Confirm Password :</label>
        <input type="text" name="pass1" id="pass1" ><br>
        <p><span style="color:Red" ><?php echo $same?></span></p>    
        <button type="submit" name="register" >Update</button>
        <a href="Login.php">Login Page</a>
    </form>

     <!-- <h1> Successfully Register </h1> --> 

  
   
 
</body>

</html>
