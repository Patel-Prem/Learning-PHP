<?php

include "/var/www/html/Project-2.0/php/Connection.php";

// $output = "";
// $page ="";

if(isset($_POST['page_no'])){
    $page = $_POST['page_no'];
}else{
    $page = 1;
}

$limit = 5;
// $total_records = $result->num_rows;
$offset = ($page-1) * $limit;

$sql = "SELECT * FROM  Person ORDER BY fname LIMIT $offset, $limit ";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $output = ' <table class="table table-bordered table-striped table-hover text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Gender </th>
                        <th> Email </th>
                    </tr>
                </thead>
                <tbody>';
    
        while($row = $result->fetch_assoc()){
            $counter++;
            $output .= "<tr> 
                    <td> {$row['fname']} </td>
    
                    <td> {$row['lname']} </td> 
                    
                    <td> {$row['gender']} </td> 
                    
                    <td> {$row['email']} </td>
                </tr>";
        }

        $sql_2 = "SELECT * FROM  Person ORDER BY fname";
        $result_2 = $conn->query($sql_2);

        $total_records = $result_2->num_rows;
        $total_pages = ceil($total_records/$limit);

        $output .= "</tbody>
                    </table>
                    <div id='pagination' class='d-flex justify-content-center'>
                        <ul class='pagination'>";

        for($i = 1; $i <= $total_pages; $i++){
            if($i == $page){
                $active = 'active';
            }else{
                $active = "";
            }
            $output .= "<li class='page-item mx-1 {$active} '>
                            <a class='page-link' id='{$i}' href=''> {$i} </a>
                        </li>";
        }
        $output .= "</ul>   
                    </div>";

    $conn->close();
    echo $output;

   
}
else{
    $conn->close();
    echo "Data Not Found";
}
?>
