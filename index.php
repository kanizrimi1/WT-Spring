<?php require 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>

<h2>Student Records</h2>
<a href="add.php">Add New Student</a><br><br>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Registration No</th>
        <th>Department</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['registration_no']}</td>
        <td>{$row['department']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>