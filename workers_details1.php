<?php


include "Employe_details1.php";

$a=$_POST["wid"];
$b=$_POST["wname"];
$c=$_POST["wage"];
$d=$_POST["wemail"];
$e=$_POST["password"];

$sql="INSERT INTO employe_details (Eid,Ename,Eage,E_email,E_PASSWORD) 
     value('$a','$b','$c','$d','$e')";

 $f=mysqli_query($con,$sql);


 
 if($f)
 {
    echo "Student details added succesfully sakthi";
 }
 else
 {
    echo "Student details NOT added";
 }



//  if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
    
//     $conn->close();

?>

