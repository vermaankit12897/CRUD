<?php

$user='root';
$host='localhost';
$password='';
$database='sms';

$conn=mysqli_connect($host,$user,$password,$database);

// check connection
if(!$conn){
    die("connection failed:".mysql1_connect_error());
}else{
    echo "connected to the database";
}
?>