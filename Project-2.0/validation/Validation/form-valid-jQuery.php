<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>]

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        <script src="./validation-jQuery.js"></script>

        <style> 
            .error{
                color: red;
            }
        </style>

        <title>Validation Using jQuery</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <div class="container mt-3">
            <form id="form" action="./display.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="first_name">First Name:</label>
                    <input type="first_name" class="form-control" id="fname" placeholder="Enter First Name" name="first_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="last_name">Last Name:</label>
                    <input type="last_name" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pswd1" placeholder="Enter password" name="pswd1">
                </div>
                <div class="mb-3">
                    <label for="pwd">Re-enter Password:</label>
                    <input type="password" class="form-control" id="pswd2" placeholder="Re-Enter Password" name="pswd2">
                </div>
                <button type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>