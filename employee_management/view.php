<?php
include 'db.php';

$result = $conn->query("SELECT * FROM employees");

echo "<h2>Employee Records</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['emp_id']." ".
         $row['name']." ".
         $row['department']." ".
         $row['salary']." ".
         $row['contact']." 
         <a href='delete.php?id=".$row['emp_id']."'>Delete</a>
         <a href='update.php?id=".$row['emp_id']."'>Update</a><br>";
}
?>