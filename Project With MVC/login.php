<script type="text/javascript">
$(document).ready(function(){
  $("#frm3").bValidator();
});
</script>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $baseurl;?>images/login1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/login2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/login3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- slider end -->

<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container mt-5">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>&nbsp;&nbsp;
				<li class="active">Login</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- content -->
<div class="container">
  <div class="row">
      <div class="col-md-12 ">
          <h3 class="mt-5">Login with Your Account</h3>
          <hr style="width: 100%; background-color:black; height: 5px;">

          <h2 class="mt-3" align="center">Login Form&nbsp;<i class="bi bi-arrow-right-square"></i></h2>
          <hr class="border border-2 border-dark w-50 mx-auto">

          <div class="card mt-3 w-50 mx-auto">
              <div class="card-header"></div>
              <div class="card-body">
                  <form method="post" id="frm3">
                      <div class="form-group  mt-3">
                      <input type="text" name="email" placeholder="Email *" class="form-control" data-bvalidator="required,email">
                      </div> 
              
                      <div class="form-group mt-3">
                          <input type="password" name="pass" placeholder="Password *" class="form-control" data-bvalidator="required">
                      </div>
                      
                      <div class="form-group mt-3">
                          <input type="submit" name="login" value="Login!" class="btn btn-lg" id="btn">
                          <a href="<?php $mainurl;?>forgetpassword">Forget Password</a>
                      </div>

                      <div class="form-group mt-3">
                          <b> Don't have an account ?</b> <a href="<?php $mainurl;?>register">Create Account</a>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- //content -->
