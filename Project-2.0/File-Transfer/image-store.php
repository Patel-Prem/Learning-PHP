<?php

$conn = new mysqli("localhost", "phpmyadmin", "root", "Images");
if($conn->connect_error){
    die("connection failed {$conn->connect_error}");
}
else{
    if(isset($_POST['submit'])){

        if($_POST['username'] != "" && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE){

            $allowed_extensions = ["png", "jpg", "jpeg"];
    
            $username = $_POST['username'];
            $file_name = $_FILES['image']['name']; 
            $file_tmp = $_FILES['image']['tmp_name']; 
            $file_error = $_FILES['image']['error'];
        
            // echo "tmp location : {$file_tmp} <br>";
            // print_r($_FILES); 
            
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            if(in_array($file_extension, $allowed_extensions)){

                $new_file_name = uniqid().$file_name;

                $destination = "/var/www/html/Project-2.0/File-Transfer/Upload-Images/".$new_file_name;
                if(move_uploaded_file($file_tmp, $destination)){
                    $sql = "INSERT INTO ImageUpload (username, imgpath, uploadtime) VALUES ('$username', '$new_file_name', CURRENT_TIMESTAMP())";

                    if($conn->query($sql)){
                        echo "File Is Stored Successfully Into Database";
                    }else{
                        echo "File Is Not Stored Into Database";
                    }
                }else{
                    echo "File Is Not Moved <br>";
                }

            }else{
                echo "Only jpeg, jpg or png files are allowed <br>";
            }

        }else{
            echo "All the Fields are required to fill";
        }
    }
    
    elseif(isset($_POST['retrieve'])){
        $sql = "SELECT * FROM ImageUpload";
        $result = $conn->query($sql);

        $data = "";
        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data .= "ID : {$row['id']}  <br> Username : {$row['username']} <br> Image : <img src = '/Project-2.0/File-Transfer/Upload-Images/".$row['imgpath']."'> <hr>";
                            // "Imgpath : {$row['imgpath']} <hr>";
            }
            echo $data;
        }else{
            echo "Record Not Found";
        }
    }
    else{
        echo "Please, Open image-upload.php";
    }
}





?>