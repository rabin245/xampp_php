<?php
    $con = mysqli_connect('localhost', 'root', '', 'db_connection_wtclass');
    $id = $_GET['id'];
    $sel = "SELECT * from tb_connection where id = '$id'";
    $res = mysqli_query($con, $sel);
    $row = mysqli_fetch_assoc($res);
?>

<form action="updating.php" method="GET">
    <input type="hidden" name="uid" value = ""><br>
    name: <input type="text" name="uname" value = "<?php echo $row['name']; ?>"><br>
    address: <input type="text" name="uadd" value = "<?php echo $row['address']; ?>"><br>
    contact: <input type="text" name="ucon" value = "<?php echo $row['contact']; ?>"><br>
    <input type="submit" name="update" value="update">
</form>