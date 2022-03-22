<?php
    include "Connection.php";


    // echo "update.php";

    if(isset($_POST['save_changes'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        // echo "============ {$email} ==========";
        
        $sql = "UPDATE Person SET fname = '$fname', lname = '$lname', gender = '$gender' WHERE email = '$email'";

        if($conn->query($sql) == TRUE){
            header("Location: ./display.php");   
        }
        else{
            echo "Faild...! {$conn->error}";
        }
    }

    if(isset($_POST['update'])){
        $email = $_POST['update'];
        
        $sql = "SELECT fname, lname from Person WHERE email = '$email'";

        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result -> fetch_assoc()){
                // echo $row['fname'] . "<hr>";
                // echo $row['lname'] . "<hr>";
                $fname = $row['fname'];
                $lname = $row['lname'];
            }
        }
        else{
            echo "No Record Found";
            exit;
        }
    }

    if(isset($_POST['delete'])){
        $email = $_POST['delete'];
        $sql = "DELETE from Person WHERE email = '$email'";
        if($conn->query($sql) == TRUE){
            header("Location: ./display.php");   
        }
        else{
            echo "Faild...! {$conn->error}";
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Data</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container mx-4 my-4 ">
        <form action= "<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <!-- First Name -->
            <div class="mb-3">
                <label for="inputFirstName" class="form-label required">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" name="fname" value="<?php echo $fname ?>">
            </div>
            <!-- Last Name -->
            <div class="mb-3">
                <label for="inputLastName" class="form-label required">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="lname" value="<?php echo $lname ?>">
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
                <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $email ?>" readonly="true">
            </div>
            <!-- Button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn mx-2 btn-success" name="save_changes" value="save changes">Save Changes</button>
            </div>
        </form>
    </div>

  </body>
</html>
