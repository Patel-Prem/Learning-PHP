<?php

include "/var/www/html/Project-2.0/php/Connection.php";

$search_pattern = $_POST['search'];

// echo "live-search.php";

$sql = "SELECT * FROM Person WHERE fname LIKE '%{$search_pattern}%' OR lname LIKE '%{$search_pattern}%' OR email LIKE '%{$search_pattern}%'";


// echo $sql;

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $output .= "<tr> 
                    <td> {$row['fname']} </td>

                    <td> {$row['lname']} </td> 
                    
                    <td> {$row['gender']} </td> 
                    
                    <td> {$row['email']} </td>
                    
                    <td> <button class= 'btn btn-warning edit-data-btn' type='button' data-bs-toggle='modal' data-bs-target='#editDataForm' data-edit-email='{$row['email']}' value='edit'> Edit </button> </td>

                    <td> <button class= 'btn btn-danger delete-data-btn' type='button' data-delete-email='{$row['email']}' value='delete'> Delete </button> </td>
                </tr>";
    }
    $conn->close();
    echo $output;
}
else{
    echo 0;
}

?>