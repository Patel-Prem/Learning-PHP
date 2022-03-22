<?php
    echo "<hr> Data Handling <hr>";

    $first_name = $_REQUEST['first_name'];
    $middle_name = $_REQUEST['middle_name'];
    $last_name = $_REQUEST['last_name'];
    $phone_no= $_REQUEST['phone_no'];
    $op_phone_no= $_REQUEST['op_phone_no'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    //echo "{$first_name} {$middle_name} {$last_name} {$phone_no} {$op_phone_no} {$email} {$password}";

    $servername = 'localhost';
    $username = 'phpmyadmin';
    $pswd = 'root';
    $dbname = 'ContactDetails';

    $conn = new mysqli($servername, $username, $pswd, $dbname);
    if(!$conn->connect_error){
        echo " successfully Connected to Database <hr>";
    }
    else{
        echo "Connection Error : {$conn->connect_error} <br>";          
    }
    
    // $sql= "INSERT INTO users (first_name, middle_name, last_name, email, pswd) VALUES ('$first_name', '$middle_name', '$last_name', '$email', SHA2(AES_ENCRYPT('$password', '$email'), 512)); 
    // INSERT INTO usersphoneno (phone_no_1, phone_no_2, email)
    // VALUES ('$phone_no', '$op_phone_no', '$email');";
    // if($conn->multi_query($sql)){
    //     echo "{$conn->affected_rows} record created successfully";
    // }
    // else {
    //     echo "Error: {$sql} <br> {$conn->error}";
    // }
    

    $sql= "SELECT u.first_name, u.middle_name, u.last_name, upn.phone_no_1, upn.phone_no_2, u.email from users as u INNER JOIN usersphoneno as upn on u.email = upn.email";

    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<b> First Name: </b>'.$row['first_name'].'<b> Middle Name: </b>'.$row['middle_name'].'<b> Last Name: </b>'.$row['last_name'].'<b> Phone No: </b>'.$row['phone_no_1'].'<b> Alternative Phone No : </b>'.$row['phone_no_2'].'<b> Email: </b>'.$row['email'];

            echo "<hr>";
        }
    }
    else{
        echo "<hr> zero record <hr>";
    }
    $conn->close()
?>