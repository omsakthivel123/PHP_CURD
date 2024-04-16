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
   
        <form action="<?php echo base_url('')?>" method="post" enctype="multipart/form-data">
            <table>  
                <tr>

                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Date Of Birth</th>
                    <th>Email_id</th>
                    <th>Blood Group</th>
                    <th>Department</th>
                    <th>Address</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                
                <tbody>
                    <tr>
                    <?php 
    $i = 1;
    foreach($result as $row) 
    {
    ?>
                        <td><?php echo $row->name;?></td>
                        <td><?php echo $row->number;?></td>
                        <td><?php echo $row->dob;?></td>
                        <td><?php echo $row->email;?></td>
                        <td><?php echo $row->bloodgroup;?></td>
                        <td><?php echo $row->department;?></td>
                        <td><?php echo $row->address;?></td>
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
