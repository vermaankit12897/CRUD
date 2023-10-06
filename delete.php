<?php

include 'connection.php';

$var=$_REQUEST['id'];

$sql="DELETE FROM student_id WHERE Sno='$var'";

$info=mysqli_query($conn,$sql);

if(isset($info)){
    header('Location: fetch.php');
}

?>