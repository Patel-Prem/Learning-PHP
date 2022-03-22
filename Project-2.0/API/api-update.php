<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');  
//Authorization : any authorized user can inser data
// X-Requested-with : the data which to be entered should come from Ajax 

// in $data, Data comes from the request
$data = json_decode(file_get_contents("php://input"), true);

$fname = $data['edit-fname'];
$lname = $data['edit-lname'];
$gender = $data['edit-gender'];
$email = $data['edit-email'];  

include "/var/www/html/Project-2.0/php/Connection.php";

$sql = "UPDATE Person SET fname ='{$fname}', lname = '{$lname}', gender = '{$gender}' WHERE email = '{$email}'";

if( $conn->query($sql) === TRUE){
    echo json_encode(array('message'=>'Record Is Updated Successfully', 'status'=>true));
}else{
    echo json_encode(array('message'=>'Record Is Not Updated', 'status'=>false));
}


?>