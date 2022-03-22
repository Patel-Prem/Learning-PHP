


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <button type="submit" name="submit">
    </form>
</body>
</html>


<?php

if(isset($_GET['submit'])){
    $url = "https://www.amazon.in/s?k=php+books&crid=1T4OVX697FXKF&sprefix=php+books%2Caps%2C294&ref=nb_sb_noss";

    // imgaes : 
    // https://m.media-amazon.com/images/I/71GrLKDeGRL._AC_UY218_.jpg"
    // https://m.media-amazon.com/images/I/610FEoTkvrL._AC_UY218_.jpg"

    $img_regex = "!https://m.media-amazon.com/images/I/[^\s]*._AC_UY218_.jpg!";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    // echo "$result";

    preg_match_all($img_regex, $result, $matches);

    $imgs = array_values(array_unique($matches[0]));

    // echo "<pre>";
    // print_r($imgs);
    // echo "</pre>";


    $counter = 0;
    foreach($imgs as $i){
        $counter++;
        echo "<b> (image : $counter) </b> <br><br> <img src = $i >";
        echo "<hr>";
    }
    curl_close($ch);

}else{
    echo "Click the Button";
}


?>