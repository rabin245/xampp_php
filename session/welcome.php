<?php
    session_start();
    if($_SESSION['name']){
        echo "Welcome ".$_SESSION['name'];
    }else{
        echo "failed";
        header('location:index.php');
    }
?>

<a href="logout.php">log out</a>