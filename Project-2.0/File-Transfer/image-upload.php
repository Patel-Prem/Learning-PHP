<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Image</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div class="container">
        <form action="./image-store.php" method="POST" enctype="multipart/form-data">
        <div class="form-group mb-3">
            <label for="inputName">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group mb-3">
            <label for="inputFile">File</label>
            <input type="file" name="image" class="form-control" placeholder="Upload Photo">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
        <button type="submit" name="retrieve" class="btn btn-success">Retrieve All Images</button>
        </form>  
    </div>
  </body>
</html>
