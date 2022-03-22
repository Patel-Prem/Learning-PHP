<?php

  $server = 'localhost';
  $username = 'phpmyadmin';
  $password = 'root';
  $dbname = 'PersonDetails';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
   die("Faild: {$conn->connect_error}") ;
  }
?>
