<?php
    if(isset($_GET['submit'])){
        $name = $_GET['uname'];
        $address = $_GET['uadd'];
        $contact = $_GET['ucon'];
        // echo $name." ".$a." ".$c;
        $con = mysqli_connect("localhost", "root", "", "db_connection_wtclass");
        $query = "INSERT INTO tb_connection (name,address,contact) VALUES ('$name', '$address', '$contact')";
        $res =  mysqli_query($con, $query);
        if($res)
            echo "data entered successfully!";
        else 
            echo "error while inserting data";
    }
    else
        echo "unauthorized access!! pease submit first to enter this page"; 
        // header('location:form.php')
?>