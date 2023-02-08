<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container mt-5">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
          <li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>&nbsp;&nbsp;
          <li class="active">Admin Login</li>
      </ol>
  </div>
</div>
<!-- //breadcrumbs -->

<!-- content -->
<div class="container">
<div class="row">
<div class="col-md-12 ">

    <h2 class="mt-3" align="center">Admin Login Form&nbsp;<i class="bi bi-arrow-right-square"></i></h2>
    <hr class="border border-2 border-dark w-50 mx-auto">

    <div class="card mt-3 w-50 mx-auto">
        <div class="card-header"></div>
        <div class="card-body">
            <form method="post" id="frm1">
                <div class="form-group  mt-3">
                <input type="text" name="email" placeholder="Email *" required class="form-control">
                </div> 
        
                <div class="form-group mt-3">
                    <input type="password" name="pass" placeholder="Password *" required class="form-control">
                </div>
                
                <div class="form-group mt-3">
                    <input type="submit" name="login" value="Login!" class="btn btn-lg" id="btn" >
                    <a href="#">Forget Password</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- //content -->
