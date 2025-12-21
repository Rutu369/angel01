<?php
$conn = new mysqli("localhost", "root", "", "pract01");
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
?>
