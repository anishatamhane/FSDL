<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>

<h2>Employee Management System</h2>

<form method="POST" action="insert.php">
    ID: <input type="number" name="emp_id" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    Department: <input type="text" name="department" required><br><br>
    Salary: <input type="number" name="salary" required><br><br>
    Contact: <input type="text" name="contact" required><br><br>

    <input type="submit" value="Insert">
</form>

<br>
<a href="view.php">View Employees</a>

</body>
</html>