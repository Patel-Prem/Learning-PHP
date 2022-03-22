<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
        <title>CRUD - API</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <div class="container-fluide border m-3">
            <!-- Heading -->
            <h3 class="text-center bg-primary text-white m-3">CRUD USING API</h3>

            <!-- Alert Box -->
            <div id="alert-message" class="d-none m-3">
                <div class="alert alert-white alert-dismissible fade show m-3light" role="alert"> 
                    <p id="status" class="d-block m-auto"> 
                        <!-- Data From Ajax -->
                    </p>
                    <button id="alert-close-btn" type="button" class="btn-close" aria-label="Close"></button>
                </div>
            </div>

            <!-- Buttons and Search box -->
            <div class="container-fluide my-3 d-flex justify-content-evenly bg-secondary m-3">
                
                <!-- Add Data Btn -->
                <button id="add-data-btn" type="button" class="btn btn-light my-3 " data-bs-toggle="modal" data-bs-target="#insertDataForm">Add Data</button>
                
                <!-- Show Data Btn -->
                <!-- <button id="show-data-btn" type="button" class="btn btn-light my-3" name="show_data" value="Show Data">Show Data</button> -->
                
                <!-- Hide Data Btn -->
                <!-- <button id="hide-data-btn" type="button" class="btn btn-light my-3 d-none" name="hide_data" value="Show Data">Hide Data</button> -->

                <!-- Live Search -->
                <input type="text" id="search" class="form-control-sm m-3 lead" placeholder="search" autocomplete="off">
            </div>

        </div>

        <!-- Modal - Fill The Form -->
        <div class="modal fade" id="insertDataForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                <!-- Modal Header -->
                    <div class="modal-header justify-content-center">
                        <h5 class="modal-title" id="staticBackdropLabel">Fill The Form</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <!-- MOdal Body -->
                    <div class="modal-body">
                        <form id="insert-data-form">
                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="inputFirstName" class="form-label required">First Name</label>
                                <input type="text" id="fname" class="form-control" name="fname" autocomplete="off" required>
                                <span id="fname-error" class="text-red"></span>
                            </div>
                            
                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="inputLastName" class="form-label required">Last Name</label>
                                <input type="text" id="lname" class="form-control" name="lname" autocomplete="off" required>
                                <span id="lname-error" class="text-red"></span>
                            </div>
                            
                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="inputGender" class="form-label">Gender</label>
                                <div class="d-flex justify-content-evenly">
                                    
                                    <!-- Other -->
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="inputRadioOther" name="gender" value="O" id="gender-other" checked>
                                        <label class="form-check-label" for="finputRadioOther">Other</label>
                                    </div>

                                    <!-- Male -->
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="inputRadioMale" name="gender" value="M" id="gender-male" >
                                        <label class="form-check-label" for="finputRadioMale">Male</label>
                                    </div>
                                    
                                    <!-- Female -->
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="inputRadioFemale" name="gender" value="F" id="gender-female" >
                                        <label class="form-check-label" for="finputRadioFemale">Female</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label required">Email</label>
                                <input type="email" id="email" class="form-control" name="email" autocomplete="off" required>
                                <span id="email-error" class="text-red"></span>
                            </div>
                            
                            <!-- Form Buttons -->
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn mx-2 btn-danger" data-bs-dismiss="modal">Cancel</button>
                                
                                <button id="save-data-btn" type="submit" class="btn mx-2 btn-success" data-bs-dismiss="modal"
                                name="submit" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Footert -->
                    <!-- <div class="modal-footer justify-content-center">
                    </div> -->
                </div>
            </div>
        </div>

        <!-- Listing - Search Table -->
        <div id="search-data-div" class=" container my-3 d-flex justify-content-center d-none">
            <table class="table table-bordered table-striped table-hover text-center">
                <caption class="caption-top">SEARCH RESULT</caption>
                <thead class="bg-dark text-white">
                    <tr>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Gender </th>
                            <th> Email </th>
                            <th> Edit </th>
                            <th> Delete </th>
                    </tr>
                </thead>
                <tbody id="search-data-table">
                    <!-- Data From Ajax Live-Search-->
                </tbody>
            </table>
        </div>

        <!-- Listing - Table -->
        <div id="show-data-div" class=" container my-3 d-flex justify-content-center">
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="bg-dark text-white">
                    <tr>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Gender </th>
                            <th> Email </th>
                            <th> Edit </th>
                            <th> Delete </th>
                    </tr>
                </thead>
                <tbody id="show-data-table">
                    <!-- Data From Ajax-API -->
                </tbody>
            </table>
        </div>

        <!-- Modal - Edit Form -->
        <div class="modal fade" id="editDataForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">

                <!-- Modal Header -->
                    <div class="modal-header justify-content-center">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form id="edit-data-form">
                            
                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="inputFirstName" class="form-label required">First Name</label>
                                <input type='text' id='edit-fname'  class='form-control' name='edit-fname' autocomplete="off">
                            </div>
                            
                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="inputLastName" class="form-label required">Last Name</label>
                                <input type='text' id='edit-lname' class='form-control' name='edit-lname' autocomplete ="off">
                            </div>
                            
                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="inputGender" class="form-label">Gender</label>
                                <div class="d-flex justify-content-evenly">
                                    
                                    <!-- Other -->
                                    <div class="form-check">
                                        <input id="edit-gender-other" type="radio" class="form-check-input" name="edit-gender" value="O" checked>
                                        <label class="form-check-label" for="finputRadioOther">Other</label>
                                    </div>

                                    <!-- Male -->
                                    <div class="form-check">
                                        <input id="edit-gender-male" type="radio" class="form-check-input" name="edit-gender" value="M">
                                        <label class="form-check-label" for="finputRadioMale">Male</label>
                                    </div>
                                    
                                    <!-- Female -->
                                    <div class="form-check">
                                        <input id="edit-gender-female" type="radio" class="form-check-input" name="edit-gender" value="F">
                                        <label class="form-check-label" for="finputRadioFemale">Female</label>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="inputEmail" class="form-label required">Email</label>
                                <input type='email' id='edit-email' class='form-control' name='edit-email' readonly>
                            </div>
                            
                            <!-- Form Buttons -->
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn mx-2 btn-danger" data-bs-dismiss="modal">Cancel</button>
                                
                                <button id="edit-save-data-btn" type="submit" class="btn mx-2 btn-success" data-bs-dismiss="modal"
                                name="edit-save-btn" value="save changes">Save Changes</button>
                            </div>
                        </form>
                    </div>

                    <!-- Modal Footert -->
                    <!-- <div class="modal-footer justify-content-center">
                    </div> -->
                </div>
            </div>
        </div>

        <script>
            // Function For Loading The Table
            function loadData(){
                $("#show-data-table").html("");
                $.ajax({
                    url : "http://localhost/Project-2.0/API/api-fetch-all.php",
                    type : "GET",
                    success :function(data){
                        if(data.status == false){
                            var result = "<tr> <td colspan='6'> " + data.message + "<td></tr>";
                            $("#show-data-table").html(result);
                        }else{
                            // console.log(data);
                            
                            $.each(data, function(key, value){
                                // console.log("key : " + key + ", Value " + value);
                                var result = "<tr>" + 
                                                "<td> " + value.fname + "</td>" + 
                                                "<td> " + value.lname + "</td>" +
                                                "<td> " + value.gender + "</td>" +
                                                "<td> " + value.email + "</td>" +
                                                "<td> <button type='button' class='btn btn-warning edit-data-btn' data-bs-toggle='modal' data-bs-target='#editDataForm' data-edit='" + value.email + "'> Edit </td>" +
                                                "<td> <button type='button' class='btn btn-danger delete-data-btn' data-delete='" + value.email + "'> Delete </td>";
                                            "</tr>"
                                $("#show-data-table").append(result);
                            });
                        }
                    }
                });
            }

            // Function For Printing The Message
            function message(msg, status){
                $("#status").text(msg)
                if(status == true){
                    $("#status").css("color", "green");
                    $("#alert-message").css("background-color", "#DEF1D8");
                }else if(status == false){
                    $("#status").css("color", "red");
                    $("#alert-message").css("background-color", "#EFDCDD");
                }
                $("#alert-message").removeClass("d-none");
                setTimeout(() => {
                    $("#alert-message").addClass("d-none");
                }, 2000);
            }   

            // Function For Serializing the Data
            function fetchData(formName){
                var arr = $(formName).serializeArray();
                // console.log(arr);

                var obj = {};
                for(var a=0; a< arr.length; a++){
                    if(arr[a].value != ""){
                        obj[arr[a].name] = arr[a].value;
                    }
                    else{
                        return false;
                    }
                }
                // console.log(obj);

                var jsonObj = JSON.stringify(obj);
                // console.log(jsonObj);

                return jsonObj;
            }

            // Alert Box close Button, Storing, Retriving 
            $(document).ready(function(){
                            
                // Ajax Function For Retriving The Data using API
                loadData();

                // Alert Box Close Button
                $("#alert-close-btn").on("click", function(){
                    $("#alert-message").addClass("d-none");
                });

                // Ajax For Storing The Data
                $("#save-data-btn").on("click", function(e){
                    $("#staticBackdrop").fadeOut("slow");

                    e.preventDefault();

                    var jsonObj = fetchData("#insert-data-form");

                    if(jsonObj == false){
                        message("Please Fill The Form Completely", false);
                    }else{
                        $.ajax({
                            url : "http://localhost/Project-2.0/API/api-insert.php",
                            type : "POST",
                            data : jsonObj, //Transfering Data In a Form of JSON
                            success :function(data){

                                // console.log(data.status);
                                message(data.message, data.status);
                                if(data.status == true){

                                    loadData();
                                    // $("#show-data-div, #hide-data-btn").removeClass("d-none");
                                    // $("#show-data-btn").addClass("d-none");
                                }
                                $("#insert-data-form").trigger("reset"); 
                            }
                        });
                    }
                    
                    // var fname = $("#fname").val();
                    // var lname = $("#lname").val();
                    // var gender= $("input[name='gender']:checked").val();
                    // var email = $("#email").val();

                    // // if(fname.length != 0 && lname.length != 0 && email.length != 0)
                    // if(fname != "" && lname != "" && email != ""){

                    //     var obj = {first_name : fname, last_name : lname, gender : gender, email_id : email};

                    //     var jsonObj = JSON.stringify(obj);

                    //     $.ajax({
                    //         url : "http://localhost/Project-2.0/API/api-insert.php",
                    //         type : "POST",
                    //         data : jsonObj, //Transfering Data In a Form of JSON
                    //         success :function(data){

                    //             // console.log(data.status);
                    //             message(data.message, data.status);
                    //             if(data.status == true){

                    //                 loadData();
                    //                 // $("#show-data-div, #hide-data-btn").removeClass("d-none");
                    //                 // $("#show-data-btn").addClass("d-none");
                    //             }
                    //             $("#insert-data-form").trigger("reset"); 
                    //         }
                    //     });
                    // }else{
                    //     message("Please Fill The Form Completely", false);
                    // }
                });

                // Ajax Live-Search
                $("#search").on("keyup", function(){
                    $("#search-data-table").html("");
                    var search_term = $("#search").val()
                    console.log("search length" + search_term.length);      
                    
                    if(search_term.length != 0){    
                        $.ajax({
                            url : "http://localhost/Project-2.0/API/api-search.php?search=" + search_term,
                            type : "GET",
                            dataType : "JSON",
                            success : function(data){
                                // console.log("--> " + data);

                                if(data.status == false){
                                    message(data.message, data.status)

                                }else{
                                    message("Data Found", true);
                                    $.each(data, function(key, value){
                                        var result = "<tr>" + 
                                                "<td> " + value.fname + "</td>" + 
                                                "<td> " + value.lname + "</td>" +
                                                "<td> " + value.gender + "</td>" +
                                                "<td> " + value.email + "</td>" +
                                                "<td> <button type='button' class='btn btn-warning edit-data-btn' data-bs-toggle='modal' data-bs-target='#editDataForm' data-edit='" + value.email + "'> Edit </td>" +
                                                "<td> <button type='button' class='btn btn-danger delete-data-btn' data-delete='" + value.email + "'> Delete </td>" +
                                            "</tr>";
                                        $("#search-data-table").append(result);
                                        $("#search-data-div").removeClass("d-none");
                                    });
                                }
                            }
                        });
                    }else{
                        $("#alert-message").addClass("d-none");
                        $("#search-data-div").addClass("d-none");
                    }
                });
            });

            // Ajax Fetching and Filling The Data To Edit
            $(document).on("click", ".edit-data-btn", function(){
                var email = $(this).data("edit");
                var obj = {email_id : email};
                var jsonObj = JSON.stringify(obj);

                // console.log(jsonObj);
                $.ajax({
                    url : "http://localhost/Project-2.0/API/api-fetch-single.php",
                    type : "POST",
                    dataType: "JSON",
                    data : jsonObj,
                    success :function(data){
                        // console.log(data);
                        $("#edit-fname").val(data[0].fname);
                        $("#edit-lname").val(data[0].lname);
                        $("#edit-gender").val(data[0].gender);
                        $("#edit-email").val(data[0].email); // $("#edit-email").val(email);
                    }
                });
            });
            
            // Ajax For Editing The Data
            $("#edit-save-data-btn").on("click", function(e){

                e.preventDefault();

                var jsonObj = fetchData("#edit-data-form");
                if(jsonObj == false){
                    message("Fill The Form Completely", false);
                }else{
                    msg = "Do you really want to Update the Data record?";
                    if(confirm(msg) == true){
                        $.ajax({
                            url : "http://localhost/Project-2.0/API/api-update.php",
                            type : "PUT",
                            data : jsonObj,
                            success : function(data){
                                // console.log(data.status);
                                message(data.message, data.status);
                                if (data.status == true){
                                    loadData();
                                }
                                $("#insert-data-form").trigger("reset"); 
                            }
                        });
                    }
                }
            });

            // Ajax For Deleting The Data
            $(document).on("click", ".delete-data-btn", function(){
                
                var email = $(this).data("delete");
                var msg = "Do you really want to DELETE the record of " + email;
                
                if(confirm(msg) == true){
                    var obj = {email_id : email};
                    var jsonObj = JSON.stringify(obj);

                    $.ajax({
                        url : "http://localhost/Project-2.0/API/api-delete.php",
                        type : "DELETE",
                        dataType: "JSON",
                        data : jsonObj,
                        success : function(data){
                            message(data.message, data.status);
                            if(data.status == true) {
                                loadData();

                                // $("#show-data-div, #hide-data-btn").removeClass("d-none");
                                // $("#show-data-btn").addClass("d-none");
                            }
                        }
                    });
                }
            });
        </script>
    </body>
</html>