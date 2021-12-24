<?php
    $con = mysqli_connect('localhost', 'root', '', 'db_connection_wtclass');
    $id = $_GET['id'];
    $del = "DELETE FROM `tb_connection` WHERE id='$id'";
    $res = mysqli_query($con, $del);
    if($res)
        header("Location: display.php");
    else 
        echo "deletion failed";
?>