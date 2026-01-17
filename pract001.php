<!DOCTYPE html>
<html>
<head>
    <title>Marks Evaluation</title>
</head>
<body>

    <h2>Enter Student Details</h2>

    <form method="post" action="process.php">
        <label>Name:</label>
        <input type="text" name="name"><br><br>

        <label>Roll No:</label>
        <input type="text" name="rollno"><br><br>

        <label>Total Marks:</label>
        <input type="number" name="marks"><br><br>

        <input type="submit" value="submit">
    </form>

</body>
</html>


<?php
function showDetails($student) {
    echo "<h2>Student Details</h2>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Roll No: " . $student["rollno"] . "<br>";
    echo "Marks: " . $student["marks"] . "<br>";

    $marks = $student["marks"];

    if ($marks > 700) {
        echo "Marks should be under 700!";
        return; // stop further execution
    } elseif ($marks >= 600) {
        $class = "First Class";
    } elseif ($marks >= 500) {
        $class = "Second Class";
    } elseif ($marks >= 300) {
        $class = "Third Class";
    } else {
        $class = "Not Passed semester exam";
    }

    echo "Result: " . $class;
}

if ($_POST["name"] != "" && $_POST["rollno"] != "" && $_POST["marks"] != "") {
    $student = [
        "name" => $_POST["name"],
        "rollno" => $_POST["rollno"],
        "marks" => $_POST["marks"]
    ];
    showDetails($student);
} else {
    echo "Please enter Name, Roll No, and Marks!";
}
?>
