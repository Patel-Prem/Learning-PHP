<?php

$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$dbname = "ContactDetails";

try{
    //  Making connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connected successfully <br>";
    }

/*
    // Creating database

    $sql = "CREATE DATABASE Contact";
    if ($conn->query($sql) === TRUE){
        echo "Database Created successfully : {$conn->error} <br>";
    }   
    else{
        echo "Error : {$conn->error}";
    }
*/

    
/*
    // Creating Table

    // $sql = "CREATE TABLE users (
    //         fname VARCHAR(64) NOT NULL, 
    //         mname VARCHAR(64) NOT NULL, 
    //         lname VARCHAR(64) NOT NULL, 
    //         email VARCHAR(64), 
    //         pwd BLOB(512) NOT NULL, 
    //         phone INT, 
    //         PRIMARY KEY(email)
    //     );";

    // $sql = "CREATE TABLE usersphone (
    //         email VARCHAR(64),
    //         phone_no INT,
    //         PRIMARY KEY(phone_no),
    //         FOREIGN KEY(email) REFERENCES users(email)
    //         ON UPDATE CASCADE
    //         ON DELETE CASCADE
    //     )";
    // if ($conn->query($sql) === TRUE) {
    //     echo "Table created successfully";
    // } 
    // else {
    //     echo "Error creating table: {$conn->error}";
    // }
*/

/*    
    // Inseting Data into Table
    
    $sql = "INSERT INTO users VALUES ('John','Smith','Doe','p@example.com', AES_ENCRYPT('text','cipherkey'))";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
*/

/*
    // Inserting Data using Prepared statement
    
    $stmt = $conn->prepare("INSERT INTO users  VALUES (?, ?, ?, ?, AES_ENCRYPT(?, 'cipherkey'))");
    $stmt->bind_param("ssssb", $fname, $mname, $lname, $email, $pwd);

    $fname = "John";
    $mname = "smith";
    $lname = "Doe";cipherkey

    $fname = "Mary";
    $mname = "smith";
    $lname = "Moe";
    $email = "mary@example.com";
    $pwd = "text";
    $stmt->execute();

    $fname = "Julie";
    $mname = "smith";
    $lname = "Dooley";
    $email = "julie@example.com";
    $pwd = "text";
    $stmt->execute();
    
    echo "New records created successfully";
*/

/*
    // Retriving the Data
    $sql = "SELECT fname, mname, lname, email, AES_DECRYPT(pwd, 'cipherkey') AS pwd FROM users";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "first name : ".$row[fname]." middle name : ".$row[mname]." last name :".$row[lname]." email : ".$row[email]. "pwd : ".$row[pwd];
            echo "<br>";
        }
    }
*/  

    $conn->close();
}
catch(Exception $e){
    echo "<hr> <b> Exception Occurred </b> <hr>";
    echo $e->getMessage();
    echo "<br>";
    echo $e->getLine();
}
?>