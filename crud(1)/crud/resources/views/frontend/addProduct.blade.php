<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProdect</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" >
</head>
<body>

    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <form action="{{Route('productStor')}}" method="POST">                 
                @csrf
                <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" id="pname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pdes">Product Description</label>
                    <input type="text" name="pdes" id="pdes"class="form-control">
                </div>
                <div class="form-group">
                    <label for="cat">Product Category</label>
                    <input type="text" name="cat" id="cat"class="form-control">
                </div>
                <div class="form-group">
                    <label for="scat">Product Sub Category</label>
                    <input type="text" name="scat" id="scat"class="form-control">
                </div>
                 <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" name="price" id="price"class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Product Status</label>
                    <select name="status" class="form-control">
                        <option value="0">-----Select status -----</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>