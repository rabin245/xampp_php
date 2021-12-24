<?php
    if(isset($_POST['login'])){
        session_start();
        $con = mysqli_connect("localhost", "root", "",  "wtclass_login");

        $name = $_POST['uname'];
        $pass = $_POST['upass'];

        $query = "SELECT name, password from tb_login where name='$name' and password = '$pass'";
        $res = mysqli_query($con, $query);
        $count = mysqli_num_rows($res);

        if($count==0)
            echo "user name and password mismatch!!";
        else{
            $_SESSION['name'] =$name;
            header('location:welcome.php');
        }
    }
    else{
        echo "illegal access";
    }
?>