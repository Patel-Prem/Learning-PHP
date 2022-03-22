<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Display</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <?php

            $server = "localhost";
            $username ="phpmyadmin";
            $password = "root";
            $dbname = "ContactDetails";

            $conn = new mysqli($server, $username, $password, $dbname);

            $sql = "SELECT u.first_name, u.middle_name, u.last_name, upn.phone_no_1, upn.phone_no_2, u.email FROM users AS u INNER JOIN usersphoneno AS upn ON u.email = upn.email" ;

            $result = $conn->query($sql);

            if($result-> num_rows > 0){
        ?>

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Alternative Phone No</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
        <?php
            while($row = $result->fetch_assoc()){
        ?>      <tr>
                    <td> <?php echo $row['first_name']; ?> </td>
                    <td> <?php echo $row['middle_name']; ?> </td>
                    <td> <?php echo $row['last_name']; ?> </td>
                    <td> <?php echo $row['phone_no_1']; ?> </td>
                    <td> <?php echo $row['phone_no_2']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                </tr>

        <?php
            }
        }else{
            echo "DATA NOT FOUND...";
        }
        $conn->close();
        ?>
            </tbody>
        </table>
    </body>
</html>