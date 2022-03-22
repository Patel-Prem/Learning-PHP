<?php
// error_reporting(E_ALL);
echo "<b> Error handling Using Custom Function </b> <br> ";

function handleError($err_no, $err_str){
    echo "Error No: {$err_no}, Error Msg: {$err_str}";
    echo "\n";
    echo "Terminagting PHP Script"; 
    die();
}
set_error_handler("handleError");
$file = fopen("newfile.txt", "r");
echo "File successfully opened";
$file.close();
?>