<?php

include "/var/www/html/Project-2.0/php/Connection.php";

$sql = "SELECT * From Person";

$result = $conn->query($sql);

$output = $result->fetch_all(MYSQLI_ASSOC); // Data in associate array form

// echo "<pre>";
// print_r($output);
// echo "</pre>";

echo json_encode($output);

$conn->close();

?>