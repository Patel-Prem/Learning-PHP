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

    <script>
        $(document).ready(function(){
            $("#btn1").click(function(){
                $("#p1").load("text-file.txt");
            });

            $("#btn2").click(function(){
                $("#p2").load("text-file.txt");
            });

            $("#btn3").click(function(){
                $("#p3").load("text-file.txt");
            });
        });
    </script>


    <div class="container-fluide border m-3 d-flex justify-content-space-between align-items-center">
        <div class="button m-3 border">
            <button id="btn1" class="btn btn-primary d-block m-3">btn 1</button>
            <button id="btn2" class="btn btn-primary d-block m-3">btn 2</button>
            <button id="btn3" class="btn btn-primary d-block m-3">btn 3</button>
        </div>

        <div class="container m-3 border">

            <p class="border m-3" id="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus perferendis atque alias iusto officiis voluptas totam itaque quam id explicabo minima iste beatae similique, enim illo veniam, et cum sit!
            Suscipit, ea numquam, voluptates nemo doloremque maxime consequuntur cupiditate eos magni accusantium corrupti quasi error distinctio rem fugiat recusandae temporibus cum sit necessitatibus placeat, ipsa harum cumque? Sunt, iusto eaque.</p>

            <p class="border m-3" id="p2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus perferendis atque alias iusto officiis voluptas totam itaque quam id explicabo minima iste beatae similique, enim illo veniam, et cum sit!
            Suscipit, ea numquam, voluptates nemo doloremque maxime consequuntur cupiditate eos magni accusantium corrupti quasi error distinctio rem fugiat recusandae temporibus cum sit necessitatibus placeat, ipsa harum cumque? Sunt, iusto eaque.</p>

            <p class="border m-3" id="p3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus perferendis atque alias iusto officiis voluptas totam itaque quam id explicabo minima iste beatae similique, enim illo veniam, et cum sit!
            Suscipit, ea numquam, voluptates nemo doloremque maxime consequuntur cupiditate eos magni accusantium corrupti quasi error distinctio rem fugiat recusandae temporibus cum sit necessitatibus placeat, ipsa harum cumque? Sunt, iusto eaque.</p>

        </div>
    </div>


  </body>
  </html>