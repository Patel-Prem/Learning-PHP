<?php

include "/var/www/html/Project-2.0/php/Connection.php";


$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "UPDATE Person SET fname = '{$fname}', lname = '{$lname}', gender = '{$gender}' WHERE email ='{$email}'";

if($conn->query($sql) === TRUE){
    if($conn->affected_rows > 0){
        $conn->close();
        echo 1;
    }else{
        $conn->close();
        echo 0;
    }
}else{
    $conn->close();
    echo 0;
}
?>