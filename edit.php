<?php

include 'connection.php';

?>

<?php

$var=$_REQUEST['id'];

$sql="SELECT Sno,Name,Address,Mobile FROM student_id WHERE Sno='$var'";

$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-dark">
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
        </tr>

        <?php
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <form action='' method='POST'>
                <td><input type="text" value=<?php echo $row['Sno'];?>></td>
                <td><input type="text" name="Name" value=<?php echo $row['Name'];?>></td>
                <td><input type="text" name="Address" value=<?php echo $row['Address'];?>></td>
                <td><input type="number" name="Mobile" value=<?php echo $row['Mobile'];?>></td>
                <td><input type="submit" name="sbt" value="Submit" >></td>
            </form>
            <?php
        }
        ?>
    </table>
</body>
</html>

<?php

if(isset($_POST['sbt'])){
    
    $id=$_REQUEST['id'];
    $name=$_REQUEST['Name'];
    $address=$_REQUEST['Address'];
    $mob=$_REQUEST['Mobile'];

    $cmd="UPDATE student_id SET Name='$name', Address='$address', Mobile='$mobile' WHERE Sno='$id'";
    $result=mysqli_query($conn,$cmd);

    if(isset($result)){
        header('Location: fetch.php');
    }
}

?>