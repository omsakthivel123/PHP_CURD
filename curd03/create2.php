
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>CREATE NEW MEMBER</h1>
<br>

<form method="post">

<div>
<label for="name">NAME :</label> 
<input type="text" name="name" id="name" >  
</div><br>   

<div>
<label for="">EMAIL :</label>
<input type="email" name="email" id="email" >
</div><br>

<div>
<label for="">PHONE :</label>
<input type="text" name="phone" id="phone">
</div><br>

<div>
    <input type="submit"  name="submit">
  <?php  header("Location: b_f.php");?>
<button><a href="index2.php">CANCEL</a></button>
</form>

</body>
</html>
<?php

