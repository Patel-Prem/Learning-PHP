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
        
        <!-- DataTable CSS -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

        <!-- DataTable -->
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

        <script>
            // Function for Loading the data
            function loadData(){
                $.ajax({
                    url : "https://data.covid19india.org/data.json",
                    type : "GET",
                    dataType : "JSON",
                    success : function(data){
                        // console.log(data.statewise);   
                        var stateData = data.statewise; 
                        var no = 1;
                        var records = "";
                        $.each(stateData, function(key, value){
                            // console.log("key : " + key  //fetch content and render here+ ", Value " + value.active);
                            records += "<tr>" +
                                        "<td>" +  no++ + "</td>" +
                                        "<td>" +  value.state + "</td>" +
                                        "<td>" +  value.confirmed + "</td>" +
                                        "<td>" +  value.active + "</td>" +
                                        "<td>" +  value.recovered + "</td>" +
                                        "<td>" +  value.deaths + "</td>" +
                                        "<td>" +  value.lastupdatedtime + "</td>" +
                                        "</tr>";
                        });
                        $("#load-data").html(records);   
                        $("#load-table").DataTable(); 
                    }                        
                });
            }

            $(document).ready(function(){
                loadData();
                

            });
        </script>


        <title>Corona Cases - India</title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <div class="container-fluide m-3 border">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center" id="load-table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th> No </th>
                            <th> State </th>
                            <th> Confirmed </th>
                            <th> Active </th>
                            <th> Recovered </th>
                            <th> Deaths </th>
                            <th> Last Updated </th>
                        </tr>
                    </thead>
                    <tbody id="load-data">
                    </tbody>
                </table>
            </div>
        </div>
    </body> 
</html>