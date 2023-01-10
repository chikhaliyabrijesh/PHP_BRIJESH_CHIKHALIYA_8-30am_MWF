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
    <h3 class="bg-dark p-2 mt-2 text-white text-center w-25 mx-auto">SHOW PRODUCT</h3>
    <table class="table table-striped  table-borderless table-hover mt-3">

        <tr class="bg-dark">
            <th class="text-white" scope="col">Product_Id</th>
            <th class="text-white" scope="col">Product_Image</th>
            <th class="text-white" scope="col">Name</th>
            <th class="text-white" scope="col">Price</th>
            <th class="text-white" scope="col">Category</th>
            <th class="text-white" scope="col">Action</th>    
        </tr>

        <tr>
            <td><?php echo $readdata[0]["product_id"];?></td>
            <td><img src="<?php echo $readdata[0]["product_image"];?>" width="80px" height="80px"></td>
            <td><?php echo $readdata[0]["product_name"];?></td>
            <td><?php echo $readdata[0]["price"];?></td>
            <td><?php echo $readdata[0]["category"];?></td>
            <td>
                <a href="<?php echo "./editdata";?>?editdataid=<?php echo $readdata[0]["product_id"];?>"><button type="button" class="btn btn-sm btn-info text-white"><i class="bi bi-pencil-square">&nbsp;Edit</i></button></a> 
                <a href="<?php echo "./";?>?deleteid=<?php echo $readdata[0]["product_id"];?>"<button type="button" class="btn btn-sm btn-danger text-white"><i class="bi bi-trash">&nbsp;Delete</i></button></a>
            </td>
        </tr>
     
    </table>
</div>   
</body>
</html>