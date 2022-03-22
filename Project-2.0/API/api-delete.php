<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-with');  
//Authorization : any authorized user can inser data
// X-Requested-with : the data which to be entered should come from Ajax 


$data = json_decode(file_get_contents("php://input"), true);
$email = $data['email_id'];  // Data comes from the request

include "/var/www/html/Project-2.0/php/Connection.php";

$sql = "DELETE FROM Person WHERE email = '{$email}'";

if($conn->query($sql) && $conn->affected_rows != 0){
    echo json_encode(array('message'=>'Record Is Deleted', 'status'=>true));
}else{
    echo json_encode(array('message'=>'Record Is Not Deleted', 'status'=>false));   
}


?>