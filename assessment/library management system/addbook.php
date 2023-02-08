<script type="text/javascript">
$(document).ready(function(){
  $("#frm").bValidator();
});
</script>

<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container mt-5">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>&nbsp;&nbsp;
				<li class="active">Add Book</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<div class="container mt-4 content">
      <h1 class="text-center">Add Book Here<i class="bi bi-person-fill"></i></h1>
      <hr style="border-color: black; width: 50%; height: 5px; margin: auto;">

      <div class="row">
          <div class="col-md-10">
              <div class="card mt-4">
                  <div class="card-header"></div>
                  <div class="card-body">
                      
                    <form method="post" id="frm">

                    <div class="form-group mt-2">
                        <label>Book Name : </label>
                        <input type="text" name="bname" placeholder="Book Name *" class="form-control" data-bvalidator="required,alpha">
                    </div>

                    <div class="form-group mt-2">
                        <label>Category Name : </label>
                        <select name="cname" placeholder="Category *" class="form-control" data-bvalidator="required">
                            <option value="">-select category-</option>
                            <?php
                            foreach($category as $category1)
                            {
                            ?>
                            <option value="<?php echo $category1["categoryid"];?>"> <?php echo $category1["categoryname"];?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label>Auther Name : </label>
                        <select name="aname" placeholder="Auther *" class="form-control" data-bvalidator="required">
                            <option value="">-select auther-</option>
                            <?php
                            foreach($auther as $auther1)
                            {
                            ?>
                            <option value="<?php echo $auther1["autherid"];?>"> <?php echo $auther1["authername"];?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label>Quantity : </label>
                        <input type="text" name="qty" placeholder="Quantity *" class="form-control" data-bvalidator="required">
                    </div>

                    <div class="form-group mt-2">
                        <label>Price : </label>
                        <input type="text" name="price" placeholder="price *" class="form-control" data-bvalidator="required">
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-3">
                            <input type="submit" name="addbook" value="Add Book" style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
                        </div>

                        <div class="form-group col-md-6 mt-3">
                            <input type="reset" name="reset" value="Reset" style="width: 100%; height: auto; margin: auto; padding: 10px; background-color: red; border-radius: 4px; border: none; color:white">
                        </div>
                    </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>



