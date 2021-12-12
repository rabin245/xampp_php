<?php
    $connection = mysqli_connect("localhost", "root", "",  "db_connection_wtclass");
    if($connection)
        echo "database connected successfully";
    else
        echo "error while connecting database!!!";
?>