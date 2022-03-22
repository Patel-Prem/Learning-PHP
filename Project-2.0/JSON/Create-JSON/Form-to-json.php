<?php

if($_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['email'] != '' && $_POST['gender'] != ''){

    $file_name = "/home/prem/Documents/JSON/Form-json-data.json";
    $file_data = json_decode(file_get_contents($file_name), true);
    
    // print_r ($file_data);


    $form_data = array(
        "fname" => $_POST['fname'],
        "lname" => $_POST['lname'],
        "gender" => $_POST['gender'],
        "email" => $_POST['email']
    );

    // print_r ($form_data);

    $file_data[] = $form_data;
    
    // print_r ($file_data);
    
    $json_data = json_encode($file_data, JSON_PRETTY_PRINT);
    
    // print_r ($json_data);

    // $file_obj = fopen($file_name, "w");

    // if(fwrite($file_obj, $json_data)){
    //     echo "{$file_name} Is Updated Successfully";    
    // }else{
    //     echo "{$file_name} Is Not Updated";
    // }

    // if(file_exists($file_name)){
    //     echo "YES";
    // }

    if(file_put_contents($file_name, $json_data)){
        echo "{$file_name} Is Updated Successfully";
    }else{
        echo "{$file_name} Is Not Updated";
    }

}else{
    echo "All Fields Are Required To Fill";
}

?>