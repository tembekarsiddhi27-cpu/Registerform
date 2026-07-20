<?php

session_start();


$id = $_GET['id'];


foreach($_SESSION['users'] as $key=>$user){

    if($user['id']==$id){

        $index=$key;
        break;
    }

}



if(isset($_POST['update'])){


$_SESSION['users'][$index]['name']=$_POST['name'];

$_SESSION['users'][$index]['email']=$_POST['email'];


header("Location: read.php");

exit();

}



$user=$_SESSION['users'][$index];

?>


<!DOCTYPE html>

<html>

<head>

<title>Update User</title>

</head>


<body>


<h2>Update User</h2>


<form method="POST">


Name:

<input type="text" name="name" value="<?php echo $user['name']; ?>">

<br><br>


Email:

<input type="email" name="email" value="<?php echo $user['email']; ?>">


<br><br>


<button name="update">
Update
</button>


</form>


</body>

</html>
