<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pagination</title>
</head>
<body>

<!-- <h3> Hello </h3> -->

<?php

    $conn =  new mysqli ("localhost", "phpmyadmin", "root", "test");

    if($conn->connect_error){
        echo "<b> Error : {$conn->Connect_error} <b>";
    }
    
    
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    // echo "Page : {$page}";   

    $limit = 3;
    
    $sql_1 = "SELECT * From alphabet";
    $result = $conn->query($sql_1);
    $total_page = ceil($result->num_rows/$limit);


    $offset = ($page-1) * $limit;

    $sql_2 = "SELECT * From alphabet LIMIT $offset, $limit";
    $result = $conn->query($sql_2);


    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b> ID </b> : {$row['id']}  <b> ALPHABET : </b> {$row['alphabet']}";
            echo "<br>";
        }
    }else{
        echo "No record Found";
    }

    for($page = 1; $page<= $total_page; $page++) {  
        echo '<a href = "pagination.php?page=' . $page . '">' . $page . ' </a>';  
    }  

?>

