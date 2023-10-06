<?php

include 'connection.php';
$sql = 'SELECT * FROM student_id';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
 crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Sno</th>
            <th>Create Time</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Mobile'];?></td>
                <td><?php echo $row['Sno'];?></td>
                <td><?php echo $row['Time'];?></td>
                <td><a href='edit.php?id=<?php echo $row['Sno']; ?>' class="btn btn-outline-warning">Edit</a>
                   <a href='delete.php?id=<?php echo $row['Sno']; ?>' class="btn btn-outline-danger">Delete</a> </td>
            </tr>
            <?php
        }
        ?>
</table>
<div>
        <td><a href='insert.php' class="btn btn-outline-info">Insert a new data</a></td>
</div>
</body>
</html>