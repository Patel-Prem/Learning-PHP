<?php

    // echo "==";

    $server_name     = "localhost";  
    $user_name = "phpmyadmin";  
    $password = "root";  
    $db_name = "Images";  

    // Create database connection  
    $conn = new mysqli($server_name, $user_name, $password, $db_name);  

    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }

    $file_extensions = ["png", "jpg", "jpeg"];

    if(isset($_POST['submit'])){

        // echo "====";

        $user_name = $_POST['username'];
        $file_name = basename($_FILES['photo']['name']); 
        $file_tmp = basename($_FILES['image']['tmp_name']); 

        // echo $file_name;
        // $filetype = $_FILES['photo']['type'];
        // echo $filetype;

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        
        // echo $file_type;

        if(in_array($file_type, $file_extensions)){

            // echo "file type matched";

            $image = $_FILES['photo']['tmp_name']; 
            $img_content = addslashes(file_get_contents($image)); 

            // echo "$image <hr>";
            
            $sql = "INSERT INTO details (name, img) VALUES ('$user_name', '$img_content')";

            if($conn->query($sql)){
                echo "<hr> Successful Insertation <hr>";
            }else{
                echo "<hr> Faild to Insert <hr>";
            }
        }else{
            echo "<hr> Only png, jpg and jpeg files are allowd <hr>";
        }
    }


    // for retriving the data

    $file_error = $_FILES['photo']['error'];
    $sql = "SELECT name, img FROM details";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b> Name : </b> {$row['name']} <br>";
?>   
            <img src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" />    
<?php
        echo "<hr>";
        }
    }else{
        echo "No Data Found";
    }

?>