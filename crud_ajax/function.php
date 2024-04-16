<?php

require "db.php";


if(isset($_POST['action'])) {
    
    if($_POST['action'] == "insert") {
        insert();
    }
}


function insert() {
    global $conn; 

    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    
    $sql = "INSERT INTO ajax_curd VALUES ('', '$name', '$email', '$phone')";
    
    if(mysqli_query($conn,$sql)){
    echo'successfully';
}
else{
    echo "employee details NOT added";
}
}
?>