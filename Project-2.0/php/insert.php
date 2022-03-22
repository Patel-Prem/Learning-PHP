<?php

include "Connection.php";
session_start();

if(isset($_SERVER['REQUEST_METHOD']) == "POST"){


    $fname = $_POST['fname'];
    // echo "<br>";
    $lname = $_POST['lname'];
    // echo "<br>";
    $gender = $_POST['gender'];
    // echo "<br>";
    $email = $_POST['email'];

    $sql = "INSERT INTO Person (fname, lname, gender, email) VALUES ('$fname', '$lname' , '$gender', '$email')";
    if($conn->query($sql) === TRUE){
        $_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        header("Location: ./display.php");      
    }
}
?>