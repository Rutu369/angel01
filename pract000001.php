CREATE Database as lab7 in phpMyAdmin

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ename VARCHAR(50),
    eno VARCHAR(20),
    department VARCHAR(50)
);


<?php
$servername = "localhost";
$username = "root";      // Default username
$password = "";          // Default password
$database = "lab7";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<?php
include 'db.php';

if ($_POST) {
    $sql = "INSERT INTO employees (ename, eno, department)
            VALUES ('$_POST[ename]', '$_POST[eno]', '$_POST[department]')";
    $conn->query($sql);
    echo "Employee Inserted";
}
?>

<form method="post">
    Name: <input type="text" name="ename"><br>
    Emp No: <input type="text" name="eno"><br>
    Dept: <input type="text" name="department"><br>
    <input type="submit" value="Insert">
</form>

<a href="display.php">View Employees</a>


<?php
include 'db.php';
$result = $conn->query("SELECT * FROM employees");

echo "<table border=1>
<tr>
<th>ID</th><th>Name</th><th>No</th><th>Dept</th><th>Action</th>
</tr>";

while ($r = $result->fetch_assoc()) {
    echo "<tr>
    <td>$r[id]</td>
    <td>$r[ename]</td>
    <td>$r[eno]</td>
    <td>$r[department]</td>
    <td>
        <a href='delete.php?id=$r[id]'>Delete</a>
    </td>
    </tr>";
}
echo "</table>";
?>

<a href="insert.php">Add Employee</a>


<?php
include 'db.php';
$conn->query("DELETE FROM employees WHERE id=$_GET[id]");
echo "Employee Deleted";
?>
<br>
<a href="display.php">Back</a>
