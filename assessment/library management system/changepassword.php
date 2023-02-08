<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container mt-5">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>&nbsp;&nbsp;
				<li class="active">Change Password</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- content -->
<div class="container">
  <div class="row">
      <div class="col-md-12 ">
          <h3 class="mt-5">Change Password Of Your Account</h3>
          <hr style="width: 100%; background-color:black; height: 5px;">

          <h2 class="mt-3" align="center">Change Password ?&nbsp;<i class="bi bi-arrow-right-square"></i></h2>
          <hr class="border border-2 border-dark w-50 mx-auto">

          <div class="card mt-3 w-50 mx-auto">
              <div class="card-header"></div>
              <div class="card-body">
                  <form method="post" id="frm5">
                      <div class="form-group  mt-3">
                      <input type="password" name="opass" placeholder="Old Password *" required class="form-control">
                      </div> 
              
                      <div class="form-group mt-3">
                          <input type="password" name="npass" placeholder="New Password *" class="form-control" required>
                      </div>

                      <div class="form-group mt-3">
                          <input type="password" name="cpass" placeholder="Confirm Password *" required class="form-control">
                      </div>
                      
                      <div class="form-group mt-3">
                          <input type="submit" name="chng" value="Change Password" class="btn btn-lg" id="btn">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- //content -->
