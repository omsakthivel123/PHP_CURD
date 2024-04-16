<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   <!-- WELCOME : <?php echo $_POST["username"]; ?><br>
   EMAIL ID :<?php echo $_POST["email"];?><br>
    PASSWORD IS : <?php echo $_POST["password"];?><br>
    -->
    <table border="4" align="center" cellspacing="7">
          <thead>
                 <tr>
                    <th>STUDENT NAME</th>
                    <th>STUDENT AGE</th>
                    <th>EMAIL_ID</th>
                    <th>PASSWORD</th>
                    <!-- <th>ADDRESS</th> -->
                 </tr>
           </thead>
            <tbody>
                
                    <td><?php echo $_POST["studentname"]; ?>
                
                    <td><?php echo $_POST["age"];?></td>
                
                    <td><?php echo $_POST["email"];?>
                
                    <td><?php echo $_POST["password"];?>

                     <!-- <td><?php echo $_POST["address"]?></td> -->

           </tbody>

    </table>
      
    
</body>
</html>