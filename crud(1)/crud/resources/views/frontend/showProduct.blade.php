<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProdect</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col-md-12  mt-5">
            <table class="table">
                <tr>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th colspan="2">Action</th>
                </tr>
                 @foreach ($products as $data) 
                <tr>
                    <td>{{ $data->id  }}</td>
                    <td>{{ $data->pdes  }}</td>
                    <td>{{ $data->cat  }}</td>
                    <td>{{ $data->scat  }}</td>
                    <td>{{ $data->price  }}</td>
                    <td>{{ $data->status  }}</td>
                    <td ><a href="{{ route('editproduct',$data->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
                    <td ><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach 
                
            </table>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>