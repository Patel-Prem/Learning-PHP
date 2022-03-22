<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="./Form-to-json.php" method="POST">
        <label>First Name</label>
        <input type="text" name="fname" autocomplete="off" required>
        <br>
        <br>
        <label>Last Name</label>
        <input type="text" name="lname" autocomplete="off" required>
        <br>
        <br>
        <label>E-mail</label>
        <input type="email" name="email" autocomplete="off" required>
        <br>
        <br>
        <label>Gender</label>
        <input type="radio" name="gender" value ="M" required> Male
        <input type="radio" name="gender" value ="F" > Female
        <input type="radio" name="gender" value ="O" > Other
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

</body>
</html>