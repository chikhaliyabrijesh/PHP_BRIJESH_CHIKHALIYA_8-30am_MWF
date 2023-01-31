<script type="text/javascript">
$(document).ready(function(){
  $("#frm2").bValidator();
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
      <img src="<?php echo $baseurl;?>images/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/3.jpg" class="d-block w-100" alt="...">
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
				<li class="active">Feedback</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- content start -->
<div class="container">
  <div class="row">
      <div class="col-md-12 ">
          <h3 class="mt-5">Give Your Valuable Feedback</h3>
          <p>please use the form below and please send us an email&nbsp;&nbsp;<a href="mailto:info@everbestcentralplacement.com">info@everbestcentralplacement.com</a> and include your Feedback</p>
          <hr style="width: 100%; background-color:black; height: 5px;">


          <h2 class="mt-3" align="center">Feedback Form&nbsp;<i class="bi bi-journal-text"></i></h2>
          <hr class="border border-2 border-dark w-50 mx-auto">

      <div class="card mt-3 w-50 mx-auto">
          <div class="card-header"></div>
          <div class="card-body">
              <form method="post" id="frm2">
                  <div class="form-group mt-3">
                      <input type="text" name="fname" placeholder="First Name *" class="form-control" data-bvalidator="required,alpha">
                  </div>

                  <div class="form-group mt-3">
                      <input type="text" name="lname" placeholder="Last Name *" class="form-control" data-bvalidator="required,alpha">
                  </div>

                  <div class="form-group mt-3">
                      <input type="text" name="email" placeholder="Email *" class="form-control" data-bvalidator="required,email">
                  </div>

                  <div class="form-group mt-3">
                      <input type="text" name="phone" placeholder="Mobile No. *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
                  </div>

                  <div class="form-group mt-3">
                      <label class="text-success">Provide star</label>
                      1 star : <input type="radio" name="star" value="1star" data-bvalidator="required">
                      2 star : <input type="radio" name="star" value="2star">
                      3 star : <input type="radio" name="star" value="3star">
                      4 star : <input type="radio" name="star" value="4star">
                      5 star : <input type="radio" name="star" value="5star">
                  </div>

                  <div class="form-group mt-3">
                      <textarea  name="comment" placeholder="Comment *"  class="form-control" data-bvalidator="required"></textarea>
                  </div>
                  
                  <div class="row">
                      <div class="form-group col-md-6 mt-3">
                          <input type="submit" name="addfeedback" value="Send Feedback"  required style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:gray; border-radius: 4px; border: none; color:white">
                      </div>

                      <div class="form-group col-md-6 mt-3">
                          <input type="reset" name="reset" value="Reset"  required style="width: 100%; height: auto; margin: auto; padding: 10px; background-color: red; border-radius: 4px; border: none; color:white">
                      </div>
                  </div>  
              </form>
          </div>
      </div>
  </div>
</div>
</div>