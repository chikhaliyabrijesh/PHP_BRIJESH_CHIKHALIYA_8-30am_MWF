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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center">Search Products</h1>
            <hr>
            
            <div class="col-md-12">
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="search" placeholder="Serach products here" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-2">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" name="search" value="Search" class="btn btn-success">
                            </div>
                        </div>        
                    </div>

                    <div class="form-group col-md-2">
                        <div class="row">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#prod" class="btn btn-sm btn-primary text-white"><i class="bi bi-plus"></i>&nbsp;Create Product</button>

                    <div class="modal fade" id="prod" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content p-5">
                                <h1 align="center"><i class="bi bi-plus-square"></i>&nbsp;Add Products</h1>
                                <hr>
                                <form method="post" enctype="multipart/form-data">
                                    
                                    <div class="form-group col-md-12 mt-3">
                                        <input type="file" name="pimage" placeholder="Product Image *" required class="form-control">
                                    </div>

                                    <div class="form-group col-md-12 mt-3">
                                        <input type="text" name="pname" placeholder="Product Name *" required class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-md-12 mt-3">
                                        <input type="text" name="price" placeholder="Price *" required class="form-control">
                                    </div>  
                                    
                                    <div class="form-group col-md-12 mt-3">
                                        <input type="text" name="category" placeholder="Category *" required class="form-control">
                                    </div>     

                                    <div class="form-group col-md-12 mt-3">
                                        <input type="submit" name="addproduct" value="Add Product" class="btn btn-lg btn-primary" id="btn">    
                                    </div>
                        
                                </form>
                            </div>
                        </div>
                    </div> 
                </div>        
            </div>            


            <div class="col-md-12">
                <table class="table table-striped  table-borderless table-hover mt-3">
        
                    <tr class="bg-dark">
                        <th class="text-white" scope="col">Product_Id</th>
                        <th class="text-white" scope="col">Product_Image</th>
                        <th class="text-white" scope="col">Name</th>
                        <th class="text-white" scope="col">Price</th>
                        <th class="text-white" scope="col">Category</th>
                        <th class="text-white" scope="col">Action</th>    
                    </tr>

                    <?php
                    foreach($shwprod as $row)
                    {
                    ?>

                    <tr>
                        <th scope="row"><?php echo $row["product_id"];?></th>
                        <td><img src="<?php echo $row["product_image"];?>" width="80px" height="80px"></td>
                        <td><?php echo $row["product_name"];?></td>
                        <td><?php echo $row["price"];?></td>
                        <td><?php echo $row["category"];?></td>
                        <td>
                            <a href="<?php echo "./readdata";?>?readdataid=<?php echo $row["product_id"];?>"><button type="button" class="btn btn-sm btn-primary text-white"><i class="bi bi-eye">&nbsp;Read</i></button></a> 
                            <a href=""><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 
                            <a href="<?php echo "./";?>?deleteid=<?php echo $row["product_id"];?>"<button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                        
                </table>
            </div>   
        </div>
    </div>
</div>

</body>
</html>