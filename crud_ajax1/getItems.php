<?php
include 'db3.php';

$sql = "SELECT * FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["description"]."</td>";
    echo "<td><button class='btn btn-danger'>Delete</button></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>No items found</td></tr>";
}
$conn->close();
?>
