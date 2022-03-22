<?php

include "/var/www/html/Project-2.0/php/Connection.php";



$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "INSERT INTO Person (fname, lname, gender, email) VALUES ('$fname', '$lname' , '$gender', '$email')";

if($conn->query($sql) === TRUE){
    $conn->close();
    echo 1;
    
}else{
    $conn->close();
    echo 0;
}
?> 