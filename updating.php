<?php
    if(isset($_GET['update'])){
        // echo "success";
        $name = $_GET['uname'];
        $address = $_GET['uadd'];
        $contact = $_GET['ucon'];
        $id = $_GET['uid'];
        // echo " $id, $name, $address, $contact";

        $con = mysqli_connect("localhost", "root", "", "db_connection_wtclass");
        // $query = "INSERT INTO tb_connection (name,address,contact) VALUES ('$name', '$address', '$contact')";
        // $query = "UPDATE 'tb_connection' SET 'name'='$name', `address`='$address', `contact`='$contact' WHERE id = '$id'";
        // $query = "UPDATE 'tb_connection' SET name ='$name', address ='$address', contact='$contact' WHERE id = '$id'";
        $query = "UPDATE `tb_connection` SET `name`='$name',`address`='$address',`contact`='$contact' WHERE `id` = '$id'";
        // echo $id;
        $res =  mysqli_query($con, $query);

        if($res)
        {
            // echo " success";
            // echo '<script type="text/javascript">
            //         window.open("display.php");
            //     </script>';
            header("Location: display.php");
        }
        else    
            echo "update failed";
    }
    else
        echo "unsuccessful";
