<html>  
<head>  
<title> Pagination </title>  
</head>  
<body>  
  
<?php  

// $str = 'GFG, A computer Science Portal For Geeks';
// echo $str. "<br>";
// echo base64_encode($str). "<br>";
// echo base64_decode(base64_encode($str)). "<br>";
  
// $str = '';
// echo base64_encode($str). "<br>";
  
// $str = 1;
// echo base64_encode($str). "<br>";
  
// $str = '@#$';
// echo base64_encode($str). "<br>";

// echo "=========";

// // $string_to_encode = "\x67";
  
// // // Encoding string
// // echo utf8_encode($string_to_encode);

// echo base_convert("10", 10,16);

echo "1";

$results_per_page = 3;

$conn = new mysqli("localhost", "phpmyadmin", "root", "test");

echo "2";

if($conn->$connect_error){
    echo "ERROR : {$conn->connect_error}";
}


$sql = "SELECT id, alphabet from alphabet";
$result = $conn->query($sql);

$total_result = $result->num_rows;

// echo $total_result;

$no_of_page = ceil(($total_result)/$record_per_page);

echo "3";

if (!isset($_GET['page']) ) {  
    echo "4";
    $page = 1;  
} else {  
    echo "5";   
    $page = $_GET['page'];  
} 


$result_start = ($page-1) * $results_per_page;  

$sql = "SELECT * from alphabet LIMIT" . $result_start . ',' . $record_per_page;
$result = $conn->query($sql);

echo "6";

if($result->num_rows){
    while($row = $result->fetch_assoc()){
        echo  $row['id'] . ' : ' . $row['alphabet'] . '<br>';
    }
}else{
    echo "no record found";
}

echo "7";

for($page = 1; $page <= $no_of_page; $page++){
    echo '<a href = "test.php?page=' . $page . '">' . $page . ' </a>';  
}
$conn->close();
?>