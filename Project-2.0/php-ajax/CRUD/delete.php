<?php

include "/var/www/html/Project-2.0/php/Connection.php";

$email = $_POST['target_email'];


$sql = "DELETE FROM Person WHERE email = '{$email}'";

if($conn->query($sql) === TRUE){
    $conn->close();
    echo 1;
}else{
    $conn->close();
    echo 0;
}
?>
