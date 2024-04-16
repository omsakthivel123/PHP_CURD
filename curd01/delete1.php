<?php

include "db.php";

// if(isset($_GET['del'])){
  
$delete=$_GET['del'];

$sql="delete from curd  where id='$delete'";

if(mysqli_query($con,$sql)){
    echo'<script> location.replace("index.php")</script>';
}
else{
    echo "Student details NOT added";
}
// }












?>