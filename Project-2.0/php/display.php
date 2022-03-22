
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="./display.css" /> -->
    <title>Display Data</title>

    <style>
        .required::after{
            content: "*";
            color: red;
        }
    </style>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Info -->
    <div class="m-3">
        <h4 class="text-info text-center">Persons' Details</h4>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add User's Details  
    </button>

<?php

 

        // echo "<hr> {$result->num_rows} <hr>"

?>

    <!-- <label>
       <
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
        
    </label> -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title" id="staticBackdropLabel">Fill The Form</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <form action="./insert.php" method="POST">
                        <!-- First Name -->
                        <div class="mb-3">
                            <label for="inputFirstName" class="form-label required">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" name="fname" required>
                        </div>
                        <!-- Last Name -->
                        <div class="mb-3">
                            <label for="inputLastName" class="form-label required">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" name="lname" required>
                        </div>
                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="inputGender" class="form-label">Gender</label>
                            <div class="d-flex justify-content-evenly">
                                <!-- Other -->
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="inputRadioOther" name="gender" value="O" id="inputRadioOther" checked>
                                    <label class="form-check-label" for="finputRadioOther">Other</label>
                                </div>
                                <!-- Male -->
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="inputRadioMale" name="gender" value="M" id="inputRadioMale">
                                    <label class="form-check-label" for="finputRadioMale">Male</label>
                                </div>
                                <!-- Female -->
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="inputRadioFemale" name="gender" value="F" id="inputRadioFemale">
                                    <label class="form-check-label" for="finputRadioFemale">Female</label>
                                </div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label required">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                        </div>
                        <!-- Button -->
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn mx-2 btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn mx-2 btn-success" name="submit" value="submitted">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer justify-content-center">
                </div> -->
            </div>
        </div>
    </div>
    
    <div class="m-3">
        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="bg-dark text-white">               
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>
                        Gender
                        <!-- <div id="emailHelp" class="form-text">
                            O=Other, M = Male, F = Female
                        </div> -->
                    </th>
                    <th>Email</th>
                    <th>Edit Details</th>
                    <th>Delete Details</th>
                </tr>
            </thead>
            <tbody>

<?php
   include "Connection.php";
   $sql = "SELECT fname, lname, gender, email from Person";

   $result = $conn->query($sql);
    if($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
?>
                <tr>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td>
                        <form action="./update.php" method="POST">
                            <button type="submit" class="btn btn-warning" name="update" value="<?php echo $row['email']?>"> 
                            EDIT
                            </button>
                    </td>
                    <td>

                            <button type="submit" class="btn btn-danger" name="delete" value="<?php echo $row['email']?>"> 
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
<?php
        }
?>  
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
    }
    else{
       echo "<hr> <b> Data Not Found <b> <hr>"; 
    }
    $conn->close();
?>    