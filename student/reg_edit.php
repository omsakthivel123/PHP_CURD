<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
 
<body>
        <form action="<?php echo base_url('Student_con/update')?>" method="post" enctype="multipart/form-data">
        <h1>SKV School and College</h1>
            <table>  
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Date Of Birth</th>
                    <th>Email_id</th>
                    <th>Blood Group</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>Add Students </th>
                    <th>Edit Details</th>
                    <th>Delete Details</th>
                    
                </tr>
    <?php 
    $i = 1;
    foreach($result as $row) 
    {
    ?>
                <tbody>
                    <tr>
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->number;?></td>
                        <td><?php echo $row->dob;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><?php echo $row->bloodgroup;?></td>
                        <td><?php echo $row->department;?></td>
                        <td><?php echo $row->address;?></td>
                       <td><a href="<?php echo base_url('Student_con/register/reg.php')?>">Add</a></td> 
                       <?php  echo "<td><a href='update?id=".$row->id."'>Edit</a></td>"?></td>
                       <?php  echo "<td><a href='delete?id=".$row->id."'>Delete</a></td>"?></td>
                    </tr>
                    <?php
        $i++;
    }
    ?>
                </tbody>
            </table>
        </form>
   
</body>
</html>
