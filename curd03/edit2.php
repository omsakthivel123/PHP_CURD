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

<form method="post" action="b_f.php">

<div>
<input type="hidden" name="id" value="<?php echo $id ?>">
<br>
<label for="name">NAME :</label> 
<input type="text" name="name" id="name" value="<?php echo $name ?>" >  
</div><br>   

<div>
<label for="">EMAIL :</label>
<input type="email" name="email" id="email"  value="<?php echo $email ?>" >
</div><br>

<div>
<label for="">PHONE :</label>
<input type="text" name="phone" id="phone" value="<?php echo $phone ?>" >
</div><br>

<div>
    <input type="submit"  name="edit2" >
<button><a href="index.php">BACK</a></button>
</form>


</body>
</html>