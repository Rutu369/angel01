<?php
include 'db.php';
if ($_POST) {
    $conn->query("INSERT INTO employees (ename, eno, department)
    VALUES ('$_POST[ename]','$_POST[eno]','$_POST[department]')");
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
