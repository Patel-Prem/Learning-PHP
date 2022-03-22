<?php

$json_file = "data.json";

$json_data = file_get_contents($json_file);

$arr = json_decode($json_data, true);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Show-JSON-data</title>
    </head>
<body>
    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="bg-dark text-light">
            <tr> 
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email ID</th>
            </tr>
        </thead>
        <tbody>
<?php
        foreach($arr as list("fname" => $fname, "lname" => $lname, "gender" => $gender, "email" => $email)){
?>
            <tr> 
                <td> <?php echo $fname ?> </td>
                <td> <?php echo $lname ?> </td>
                <td> <?php echo $gender ?> </td>
                <td> <?php echo $email ?> </td>
            </tr>
<?php
        }
?>
        </tbody>
    </table>
</body>
</htmkl>