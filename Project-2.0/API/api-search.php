<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


$data = json_decode(file_get_contents("php://input"), true);
$search_value = $_GET['search'];  // Data comes from the request

include "/var/www/html/Project-2.0/php/Connection.php";

$sql = "SELECT * FROM Person WHERE fname LIKE '%{$search_value}%' OR lname LIKE '%{$search_value}%' OR email LIKE '%{$search_value}%'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    $output = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($output);
}else{
    echo json_encode(array('message'=>'No Search Found', 'status'=>false));
}

?>