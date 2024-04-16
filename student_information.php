<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="student_information1.php" method="post">

<div>
<label for="studentname">STUDENT_NAME:</label>
<input type="text" name="studentname" id="studentname" require>
</div><br>

<div>
<label for="age">STUDENT_AGE:</label>
<input type="text" name="age" id="age">
</div><br>

<div>
 <label for="email">EMAIL_ID:</label>
 <input type="email" name="email" id="email" require>   
</div><br>

<div>
<label for="password">PASSWORD:</label>
 <input type="password" name="password" id="password" require>   
</div><br>

<!-- 
<div>
<label for="address">ADDREES:</label>
<textarea name="address" id="addrses" cols="20" rows="10" ></textarea>
</div><br> -->

<div>
    <input type="submit" name="submit" id="submit" >

</form>
</body>
</html>



