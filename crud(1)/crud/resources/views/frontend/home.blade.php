<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProdect</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" >

    <style>
        a{
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row text-center">
            <h1 class=" mt-5">This Is Home Page</h1>
        <div class="col-md-6 m-auto">
            <button class="btn btn-info mt-5"><a href="{{Route('addProduct')}}">Add Product Page</a></button>
        </div>
        <div class="col-md-6 ">
            <button class="btn btn-info mt-5"><a href="{{Route('showProduct')}}">Manage Product</a></button>
        </div>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>