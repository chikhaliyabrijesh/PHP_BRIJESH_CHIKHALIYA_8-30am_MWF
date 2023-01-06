<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</head>
<body>

<div class="comtainer">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 align="center"><i class="bi bi-plus-square"></i>&nbsp;Edit Products</h1>
            <hr>
            <form method="post" enctype="multipart/form-data">
                
                <div class="form-group col-md-12 mt-3">
                    <label>Photo : </label>
                    <img src="<?php echo $editupddata[0]["product_image"];?>" width="80px" height="80px">
                    <input type="file" name="pimage" placeholder="Product Image *" required class="form-control mt-3">
                </div>

                <div class="form-group col-md-12 mt-3">
                    <label>Name : </label>
                    <input type="text" name="pname" value="<?php echo $editupddata[0]["product_name"];?>" placeholder="Product Name *" required class="form-control">
                </div>
                
                <div class="form-group col-md-12 mt-3">
                    <label>Price : </label>
                    <input type="text" name="price" value="<?php echo $editupddata[0]["price"];?>" placeholder="Price *" required class="form-control">
                </div>  
                
                <div class="form-group col-md-12 mt-3">
                    <label>Category : </label>
                    <input type="text" name="category" value="<?php echo $editupddata[0]["category"];?>" placeholder="Category *" required class="form-control">
                </div>     

                <div class="form-group col-md-12 mt-3">
                    <input type="submit" name="updproduct" value="Update Data" class="btn btn-lg btn-primary" id="btn">    
                </div>
    
            </form>
        </div>
    </div>
</div>
    
            
</body>
</html>