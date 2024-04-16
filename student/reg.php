<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

<form action="<?php echo base_url('Student_con/register')?>" method="post" enctype="multipart/form-data">
    <h1>Student Registration Form </h1>
    <label>Name</label>
    <input type="text" name="name" id="name"><br>
    <label>Mobile Number</label>
    <input type="text" name="mob" id="mob"><br>
    <span style="color:red"><?php echo form_error('name') ?></span>
    <label>DOB</label>
    <input type="date" name="dob" id="dob"><br>
    <label>Email</label>
    <input type="text" name="email" id="email"><br>
    <span style="color:red"><?php echo form_error('email') ?></span>
    <lebel>blood gruop</lebel>
    <input type="text" name="bg" id="bg"><br>
    <lebel>Department</lebel>
    <input type="text" name="dept"><br>
    <!-- <select name="Department" name="dept"><br>
    <option>Select</option>
    <option>Computer Science Engineering</option>
    <option>Mechanical Engineering</option>
    <option>Electrical and Electronics Engineering</option>
    <option>Civil Engineering</option>
    <option>Electronics & Communication Engineering</option> -->
    <span style="color:red"><?php echo form_error('dept') ?></span>
    <lebel>Address</lebel>
    <input type="text" name="add" id="add"><br>
    <lebel>Create Password</lebel>
    <input type="password" name="pass"><br>
    <button type="submit" name="update">Submit</button>
  
</body>
</html>