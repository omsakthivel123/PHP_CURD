<?php
require "db.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// $action=$_POST['action'];
    if ($_POST['action'] == 'Insert') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $insert_query = "INSERT INTO student (name, email, phone) VALUES ('$name', '$email', '$phone')";
        
        if (mysqli_query($con, $insert_query)) {
         $id = mysqli_insert_id($con);
            
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phone</td>
                    <td><button class='btn btn-danger edit'>Edit</button></td>
                    <td><button class='btn btn-danger delete'>DELETE</button></td>
                  </tr>";
        } else {
            echo "Failed to insert data into the database: " . mysqli_error($con);
        }
    }
    
    
   
   elseif ($_POST['action'] == "update") {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];

      $sql = "UPDATE student SET name='$name', email='$email', phone='$phone' WHERE id=$id";
      if (mysqli_query($con, $sql)) {
          echo "<td>" . $id . "</td>";
          echo "<td>" . $name . "</td>";
          echo "<td>" . $email . "</td>";
          echo "<td>" . $phone . "</td>";
          echo "<td><button class='btn btn-danger edit'>Edit</button></td>";
          echo "<td><button class='btn btn-danger delete'>DELETE</button></td>";
      } else {
          echo "Error updating record: " . mysqli_error($con);
      }
  
   }
    


    
    elseif ($_POST['action'] == 'delete') {
        $id = $_POST['uid'];
        
        // Perform the SQL query to delete data from the database
        $delete_query = "DELETE FROM student WHERE id='$id'";
        if (mysqli_query($con, $delete_query)) {
            echo "Record deleted successfully";
        } else {
            echo "Failed to delete record: " . mysqli_error($con);
        }
     
}
}
?>












