<?php
include 'db.php';
$conn->query("DELETE FROM employees WHERE id=$_GET[id]");
echo "Employee Deleted";
?>

<br>
<a href="display.php">Back</a>
