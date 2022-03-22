<?php

include "/var/www/html/Project-2.0/php/Connection.php";

$sql = "SELECT * From Person";

$result = $conn->query($sql);

$output = $result->fetch_all(MYSQLI_ASSOC); // Data in associate array form

$conn->close();

// echo "<pre>";
// print_r($output);
// echo "</pre>";

$json_data = json_encode($output, JSON_PRETTY_PRINT);
// echo $json_data;

$file_name = "/home/prem/Documents/JSON/DB-json-data.json";


if(file_put_contents($file_name, $json_data)){
    echo "{$file_name} Is Updated Successfully";

}
else{
    echo "{$file_name} Is Not Updated";
}
?>