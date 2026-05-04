<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Registration No: <input type="text" name="reg" required><br><br>
    Department: <input type="text" name="dept" required><br><br>
    <button type="submit" name="submit">Add Student</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reg = $_POST['reg'];
    $dept = $_POST['dept'];

    $sql = "INSERT INTO students (name, email, registration_no, department)
            VALUES ('$name', '$email', '$reg', '$dept')";

    if ($conn->query($sql)) {
    header("Location: index.php");
    exit();

    } else {
        echo "Error: " . $conn->error;
    }
}
?>

</body>
</html>