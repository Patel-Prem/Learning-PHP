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
        
        <title>Display Data</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- <div class="container my-3">
            <select id="limit">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div> -->

        <!-- Listing - Table -->
        <div id="show-data-div" class=" container my-3">

        </div>

        <script>

            function loadData(page){
                $.ajax({
                    url :  "./load.php",
                    type : "POST",
                    data : {page_no : page},
                    success : function(data){
                        $("#show-data-div").html(data);
                    }
                });
            }

            $(document).ready(function(){
                loadData();

                $(document).on("click", "#pagination a", function(e){
                    e.preventDefault();
                    var page = $(this).attr("id");
                    
                    loadData(page);
                });
            });
        </script>
    </body>
</html>