<?php
include 'db.php';

$id = $_GET['id'];

$conn->query("DELETE FROM employees WHERE emp_id=$id");

echo "Deleted Successfully <br><a href='view.php'>Back</a>";
?>