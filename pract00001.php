<?php
include 'db.php';
$r = $conn->query("SELECT * FROM employees");

echo "<table border=1>
<tr><th>ID</th><th>Name</th><th>No</th><th>Dept</th><th>Action</th></tr>";

while ($d = $r->fetch_assoc())
    echo "<tr>
    <td>$d[id]</td><td>$d[ename]</td><td>$d[eno]</td><td>$d[department]</td>
    <td><a href='delete.php?id=$d[id]'>Delete</a></td>
    </tr>";

echo "</table>";
?>

<a href="insert.php">Add Employee</a>
