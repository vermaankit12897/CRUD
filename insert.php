<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
 crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="POST">
        <!-- ye wala Name jisme N capital h wo database(phpmyadmin)Addree]ss, Mobile, bhi k table m jo name , address , etc jo columns h ya unse shayad row kehte jo nhi h wo name="iske ander likhe jate h ni to error aata h "     -->
        <input type="text" name="Name" placeholder="name"><br>
        <input type="text" name="Address" placeholder="address"><br>
        <input type="number" name="Mobile" placeholder="mobile"><br>
        <input type="submit" name="submitted" placeholder="sbt">
        
        <div>
        <td><a href='fetch.php' class="btn btn-outline-info">See Your Entries</a></td>
        </div>
    </form>
   
</body>
</html>

<!-- PHP -->
<?php
if(isset($_POST['submitted'])){
    $name= $_POST['Name'];
    $add= $_POST['Address'];
    $mob= $_POST['Mobile'];

   // $sql="INSERT INTO `student_id` (`Name`, `Address`, `Mobile`) VALUES ('$name', $add,'$mob');";
     $sql= "INSERT INTO student_id(name,address,mobile) values('$name' , '$add' ,'$mob');";
    $result= mysqli_query($conn, $sql);

    if($conn != NULL){
        header('Location: fetch.php');
    }
}
?>