<?php
session_start();

if(!isset($_SESSION['users'])){
    $_SESSION['users'] = [];
}

header("Location: read.php");
exit();
?>
