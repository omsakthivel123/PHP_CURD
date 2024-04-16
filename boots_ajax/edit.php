<!-- <?php
include "db.php";
$id = "";
$name = "";
$email = "";
$phone = "";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"] == 'GET') {
    if (!isset($_GET['id'])) {
        header("location:SCOTO/boots_ajax/index.php");
        exit;
    }


$id = $_GET['id'];
$sql="SELECT * FROM curd WHERE id = $id";
$result=$con->query($sql);
$row=$result->fetch_assoc();

    while(!$row ) {
        header("location:SCOTO/boots_ajax/index.php");
        exit;   
    }
    $id=$row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];

}

if(isset($_POST['edit'])){
    $id=$_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $sql="UPDATE data set name='$name', email='$email', phone='$phone' where id='$id'";
$result = $con->query($sql);
}


// if(isset($_POST['submit'])){

// $name=$_POST['name'];
// $email=$_POST['email'];
// $phone=$_POST['phone'];

// $sql="INSERT INTO data(name,email,phone)value('$name','$email','$phone')";

// // $query=mysqli_query($con,$sql);

// if(mysqli_query($con,$sql)){
//     echo'<script> location.replace("index.php")</script>';
// }
// else{
//     echo "employee details NOT added";
// }
// } 
?>  -->