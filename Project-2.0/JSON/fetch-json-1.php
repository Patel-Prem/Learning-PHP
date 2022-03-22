<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>JSON</title>
  </head>
  <body>
    <div class="container bg-dark text-light"> 
        <h3 class="d-flex justify-content-center">JSON Data</h3> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <div class="container text-danger" id="msg"></div>

    <div class="container">
        <form>
            <label for="id"> Enter ID : <label>
            <input type="number" name="id" id="id" class="form-control-sm" >
            <button type="button" id="single" class="btn btn-primary"> Single Record </button>
            <button type="button" id="all" class="btn btn-primary"> All Record </button>
        </form>
    </div>

    <div class="container" id="load-json"></div>

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            // For Single Record  
            $("#single").on("click", function(e){
                var id = $("#id").val();
                if(id != ""){
                    if(id >=1 && id <= 100){
                        $.ajax({
                            url : "https://jsonplaceholder.typicode.com/posts/" + id,
                            type : "GET",
                            success : function(data){
                            var value = data.userId + "<br>" + data.id + "<br>" + data.title + "<br>" + data.body;
                                $("#load-json").html(value);
                            }
                        });
                    }else{
                        $("#msg").text("ID Must Be Between 1 and 100");    
                    }
                }else{
                    $("#msg").text("Pelase, Enter the ID");
                }
            });      

            // For Multiple Records
            $("#all").on("click", function(){

                /*
                $.ajax({
                    url : "https://jsonplaceholder.typicode.com/posts",
                    type : "GET",
                    success : function(data){
                        $.each(data, function(key, value){
                            var data = value.userId + "<br>" + value.id + "<br>" + value.title + "<br>" + value.body + "<hr>";
                            $("#load-json").append(data);
                        });
                    }
                });
                */
                // OR

                $.getJSON(
                    "https://jsonplaceholder.typicode.com/posts",
                    function(data){
                        $.each(data, function(key, value){
                            var record = value.userId + "<br>" + value.id + "<br>" + value.title + "<br>" + value.body + "<hr>";
                            $("#load-json").append(record);
                        });
                    }
                )
            });     
        });
    </script>

  </body>
</html>