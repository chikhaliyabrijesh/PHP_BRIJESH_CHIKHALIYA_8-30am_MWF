<div class="comtainer">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 align="center"><i class="bi bi-plus-square"></i>&nbsp;Edit Products</h1>
            <hr>
            <form method="post" enctype="multipart/form-data">
                
                <div class="form-group col-md-12 mt-3">
                    <label>Book Name : </label>
                    <input type="text" name="bname" value="<?php echo $editupddata[0]["bookname"];?>" placeholder="Book Name *" required class="form-control">
                </div>

                <div class="form-group col-md-12 mt-3">
                    <label>Category : </label>
                    <input type="text" name="category" value="<?php echo $editupddata[0]["categoryid"];?>" placeholder="Category *" required class="form-control">
                </div>

                <div class="form-group col-md-12 mt-3">
                    <label>Auther : </label>
                    <input type="text" name="auther" value="<?php echo $editupddata[0]["autherid"];?>" placeholder="Auther *" required class="form-control">
                </div>

                <div class="form-group col-md-12 mt-3">
                    <label>Quantity : </label>
                    <input type="text" name="qty" value="<?php echo $editupddata[0]["quantity"];?>" placeholder="Quantity *" required class="form-control">
                </div>
                
                <div class="form-group col-md-12 mt-3">
                    <label>Price : </label>
                    <input type="text" name="price" value="<?php echo $editupddata[0]["price"];?>" placeholder="Price *" required class="form-control">
                </div>  
                
                <div class="form-group col-md-12 mt-3">
                    <input type="submit" name="updproduct" value="Update Data" class="btn btn-lg btn-primary" id="btn">    
                </div>
    
            </form>
        </div>
    </div>
</div>