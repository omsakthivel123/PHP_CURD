<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php 
$emailEr ="";
$passEr="";

if(isset($_GET["emailEr"]))
{
    $emailEr =$_GET["emailEr"];
}
else if(isset($_GET["passEr"]))
{
    $passEr = $_GET["passEr"];
}

?>

<body>
<form action="Adddata.php" method="POST" enctype="multipart/form-data">

    <h1>SKV College Login Page</h1>
    <label>Email Id  :</label>
    <input type="email" name="email" id="email" > <br>
    <p><span style="color:red"><?php echo $emailEr  ?> </span></p>
    <label> Password : </label>
    <input type="text" name="password"  id="pass"><br><br>
    <span style="color:red"><?php echo $passEr ?> </span>
    <button type="submit" name="login">Login</button>
    <a href="Register.php">Register Page</a>




</form>

</body>
</html>