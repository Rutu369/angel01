<?php
function showDetails($student) {
    echo "<h2>Student Details</h2>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Roll No: " . $student["rollno"] . "<br>";
    echo "Marks: " . $student["marks"] . "<br>";

    $marks = $student["marks"];

    if ($marks > 700) {
        echo "Marks should be under 700!";
        return; 
    } elseif ($marks >= 600) {
        $class = "First Class";
    } elseif ($marks >= 500) {
        $class = "Second Class";
    } elseif ($marks >= 300) {
        $class = "Third Class";
    } else {
        $class = "Failed semester exam";
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
