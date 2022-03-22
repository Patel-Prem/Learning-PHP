<?php 

if(isset($_POST['submit']) && ($_SERVER['REQUEST_METHOD'] == "POST")){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $error_email = $error_fname = $error_gender = $error_lname = "";
    $regex_name = "/^[a-zA-Z]*$/i";
    if(empty($fname)){
        $error_fname = "First Name is required"; 
    }else{
        if(!preg_match($regex_name, $fname)){
            $error_fname = "First Name Containes only letters (space, digits and any special characters are not allowed)."; 
        }else{
            $fname = cleanInput($fname);       
        }
    }

    if(empty($lname)){
        $error_lname = "Last Name is required"; 
    }else{
        if(!preg_match($regex_name, $lname)){
            $error_lname = "Last Name Containes only letters (space, digits and any special characters are not allowed)."; 
        }else{
            $lname = cleanInput($lname);       
        }
    }

    if(empty($email)){
        $error_email = "Email is required"; 
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_email = "Please, Enter Valid Email (space are not allowed)."; 
        }
        $email = cleanInput($email);
    }
    if(empty($gender)){
        $error_gender = "Select gender."; 
    }else{
        $gender = cleanInput($gender);
    }
}

function cleanInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
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

    <title>Validation - PHP</title>

    <style>
        .error{
            color: red;
        }
    </style>
  </head>
  <body>

    <form id="form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
        <div class="input-control m-3">    
            <label>First Name</label>
            <input type="text" class="form-control m-3" id="fname" name="fname">
            <div class="error m-3">
                <?php echo $error_fname; ?>            
            </div>
        </div>

        <div class="input-control m-3">    
            <label>Last Name</label>
            <input type="text" class="form-control m-3" id="lname" name="lname">
            <div class="error m-3">
                <?php echo $error_lname; ?>
            </div>
        </div>

        <div class="input-control m-3">
            <label>Email address</label>
            <input type="text" class="form-control m-3" id="email" name="email">
            <div class="error m-3">
                <?php echo $error_email; ?>
            </div>
        </div>
        
        <div class="input-control m-3">
            <label>Gender</label>
            <br>
            <input type="radio" class="m-3" id="gender-male" name="gender" value="male"> <label>Male</label>
            <input type="radio" class="m-3" id="gender-female" name="gender" value="female"> <label>Female</label>
            <input type="radio" class="m-3" id="gender-other" name="gender" value="other"> <label>Other</label>
            <div class="error m-3">
                <?php echo $error_gender; ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-3" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>