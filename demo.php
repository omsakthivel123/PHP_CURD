<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Function to fetch data from server
            function fetchData() {
                $.ajax({
                    url: 'backend.php',
                    type: 'GET',
                    success: function(data) {
                        $('#records').html(data);
                    }
                });
            }
            
            // Fetch data on page load
            fetchData();
            
            // Handle form submission
            $('#form').submit(function(event){
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: 'backend.php',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#message').html(response);
                        fetchData(); // Refresh data after insertion
                        $('#form')[0].reset(); // Reset form fields
                    }
                });
            });
            
            // Delete record
            $(document).on('click', '.delete', function(){
                var id = $(this).data('id');
                $.ajax({
                    url: 'backend.php',
                    type: 'POST',
                    data: {id: id, action: 'delete'},
                    success: function(response) {
                        $('#message').html(response);
                        fetchData(); // Refresh data after deletion
                    }
                });
            });
        });
    </script>
</head>
<body>
    <h2>CRUD Application</h2>
    <div id="message"></div>
    <form id="form">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="submit" value="Submit">
    </form>
    <div id="records"></div>
</body>
</html>












<?php
include "db2.php";

if(isset($_POST['submit'])){
  
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO curd2(name,email,phone)value('$name','$email','$phone')";


if(mysqli_query($con,$sql)){

   
    $result = mysqli_query($con, "SELECT * FROM curd2");
    
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
    
            foreach($row as $a){
    
                $id=$a['id'];
                $name1= $a['name'];
                $email1= $a['email'];
                $phone1=$a['phone'];
                 } 
    
}
else{
    echo "employee details NOT added";
}
} 
?>

