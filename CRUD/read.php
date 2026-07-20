<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Read Users</title>
</head>

<body>

<h2>User List</h2>

<a href="create.php">Add New User</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>


<?php

if(!empty($_SESSION['users'])){

foreach($_SESSION['users'] as $user){

?>

<tr>

<td><?php echo $user['id']; ?></td>

<td><?php echo $user['name']; ?></td>

<td><?php echo $user['email']; ?></td>

<td>

<a href="update.php?id=<?php echo $user['id']; ?>">
Edit
</a>


<a href="delete.php?id=<?php echo $user['id']; ?>">
Delete
</a>

</td>

</tr>


<?php

}

}

else{

echo "<tr><td colspan='4'>No Users Found</td></tr>";

}

?>

</table>

</body>
</html>
