<?php
include 'db.php';

$id = $_POST['emp_id'];
$name = $_POST['name'];
$dept = $_POST['department'];
$salary = $_POST['salary'];
$contact = $_POST['contact'];

// Basic validation
if (empty($name) || empty($dept)) {
    echo "Fields cannot be empty!";
    exit();
}

$sql = "INSERT INTO employees VALUES ('$id','$name','$dept','$salary','$contact')";

if ($conn->query($sql)) {
    echo "Inserted Successfully <br><a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}
?>