<?php

include "/var/www/html/Project-2.0/php/Connection.php";

$email = $_POST['target_email'];

$sql = "SELECT * FROM  Person WHERE email = '{$email}'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $conn->close();
    echo "{$row['fname']},{$row['lname']},{$row['email']}";
}else{
    $conn->close();
    echo 0;
}

?>
