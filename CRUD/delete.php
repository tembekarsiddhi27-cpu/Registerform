<?php

session_start();


$id=$_GET['id'];


foreach($_SESSION['users'] as $key=>$user){

    if($user['id']==$id){

        unset($_SESSION['users'][$key]);

    }

}


$_SESSION['users']=array_values($_SESSION['users']);


header("Location: read.php");

exit();

?>
