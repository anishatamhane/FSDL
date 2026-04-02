<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM employees WHERE emp_id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Department: <input type="text" name="department" value="<?php echo $row['department']; ?>"><br>
    Salary: <input type="number" name="salary" value="<?php echo $row['salary']; ?>"><br>
    Contact: <input type="text" name="contact" value="<?php echo $row['contact']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $dept = $_POST['department'];
    $salary = $_POST['salary'];
    $contact = $_POST['contact'];

    $conn->query("UPDATE employees SET 
        name='$name',
        department='$dept',
        salary='$salary',
        contact='$contact'
        WHERE emp_id=$id");

    echo "Updated Successfully <br><a href='view.php'>Back</a>";
}
?>