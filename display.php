<style>
    table, tr, td, th{
        border: 1px solid;
        border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th >Edit</th>
    </tr>
<?php
    $con = mysqli_connect('localhost', 'root', '', 'db_connection_wtclass');
    $query = "SELECT * FROM tb_connection order by id desc";
    $res = mysqli_query($con, $query);
    // if($res)
    //     echo "data is collected.";
    // else
    //     echo 'data is not collected';
    while($row = mysqli_fetch_assoc($res)){
        // echo $row['name'];
        // echo $row['address'];
        // echo $row['contact'];
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['contact']; ?></td>
        <td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
<?php
    }
?>
</table>