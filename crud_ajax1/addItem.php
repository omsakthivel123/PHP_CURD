<?php
include 'db3.php';

$name = $_POST['name'];
$description = $_POST['description'];

$sql = "INSERT INTO items (name, description) VALUES ('$name', '$description')";
if ($conn->query($sql) === TRUE) {
  echo "Item added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
