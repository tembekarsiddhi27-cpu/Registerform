<?php
session_start();

if(isset($_POST['submit'])){

    $user = [
        "id" => time(),
        "name" => $_POST['name'],
        "email" => $_POST['email']
    ];

    $_SESSION['users'][] = $user;

    header("Location: read.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>

<body>

<h2>Create User</h2>

<form method="POST">

Name:
<input type="text" name="name" required>
<br><br>

Email:
<input type="email" name="email" required>
<br><br>

<button name="submit">Add User</button>

</form>

<br>

<a href="read.php">View Users</a>

</body>
</html>
