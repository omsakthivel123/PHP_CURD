<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
     $i = 1;
     foreach($result as $row) 
     {
     ?> 

<body>
    
<form action="<?php echo base_url('Student_con/edited')?>" method="POST" enctype="multipart/form-data">
     <h1>Student Registration </h1>
     <input type="hidden" name="id" value="<?php echo $row->id?>"><br>
     <label>Name</label>
     <input type="text" name="name" value="<?php echo $row->name?>"><br>
     <label>Mobile Number</label>
     <input type="text" name="mob" value="<?php echo $row->number?>"><br>
     <label>DOB</label>
     <input type="date" name="dob"value="<?php echo $row->dob?>"><br>
     <label>Email</label>
     <input type="text" name="email" value="<?php echo $row->email?>"><br>
     <lebel>blood gruop</lebel>
     <input type="text" name="bg" value="<?php echo $row->bloodgroup?>"><br>
     <lebel>Department</lebel>
     <input type="text" name="dept" value="<?php echo $row->department?>"><br>
     <lebel>Address</lebel>
     <input type="text" name="add" value="<?php echo $row->address?>"><br>
     <button type="submit" name="submit">submit</button>
     <?php
        $i++;
    }
    ?>
</form>
</body>
</html>