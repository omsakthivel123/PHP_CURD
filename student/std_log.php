<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    <form action="<?php echo base_url('Student_con/login')?>" method="POST">
    <h1>Student Login Page</h1>
    <label>Username</label>
    <input type="text" name="user" id="user"><br>
    <lebel>Password</lebel>
    <input type="text" name="pass" id="pass"><br><br>
    <span style="color:red"><?php echo (isset($error))?$error:''?></span><br><br>
    <button type="submit" name="save">Submit</button>
    <a href="<?php echo base_url('Student_con/register/reg.php')?>">Register</a>

 </form>
<?php 
?>
</body>
</html>