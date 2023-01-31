<script type="text/javascript">
$(document).ready(function(){
  $("#frm4").bValidator();
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
      <img src="<?php echo $baseurl;?>images/signup1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/signup2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $baseurl;?>images/signup3.jpg" class="d-block w-100" alt="...">
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
				<li class="active">Register</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

  <div class="container mt-4 content">
      <h1 class="text-center">Create Account Here<i class="bi bi-person-fill"></i></h1>
      <hr style="border-color: black; width: 50%; height: 5px; margin: auto;">

      <div class="row">
          <div class="col-md-10">
              <div class="card mt-4">
                  <div class="card-header"></div>
                  <div class="card-body">
                      <form method="post" enctype="multipart/form-data" id="frm4">

                          <div class="form-group mt-2">
                              <label class="text-success">Upload Photo *</label>
                              <input type="file" name="img" class="form-control" data-bvalidator="required">
                          </div>
  
                          <div class="row">
                              <div class="form-group col-md-6 mt-3">
                                  <input type="text" name="fname" placeholder="First Name *" class="form-control" data-bvalidator="required,alpha">
                              </div>
  
                              <div class="form-group col-md-6 mt-3">
                                  <input type="text" name="lname" placeholder="Last Name *" class="form-control" data-bvalidator="required,alpha">
                              </div>
                          </div>
  
                          <div class="row">
                              <div class="col-md-6 form-group mt-3">
                                  <input type="text" name="dob" placeholder="DOB *" class="form-control" data-bvalidator="required">
                              </div>
                      
                              <div class="col-md-6 form-group mt-3">
                              Male : <Input type = "Radio" Name ="gender" value= "Male" data-bvalidator="required">
                              Female : <Input type = "Radio" Name ="gender" value= "Female">
                              </div>
                          </div>
  
                          <div class="form-group mt-3">
                              <input type="text" name="email" placeholder="Email *" class="form-control" data-bvalidator="required,email">
                          </div>
  
                          <div class="row">
                              <div class="form-group col-md-6 mt-3">
                                  <input type="password" name="pass" placeholder="Password *" class="form-control" data-bvalidator="required">
                              </div>
                              
                              <div class="form-group col-md-6 mt-3">
                                  <input type="password" name="cpass" placeholder="Confirm-Password *" class="form-control" data-bvalidator="required">
                              </div>
                          </div>
  
                          <div class="form-group mt-3">
                              <input type="text" name="phone" placeholder="Phone *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
                          </div>
  
                          <div class="row">
                              <div class="col-md-6 form-group mt-3">
                                  <input type="text" name="edu" placeholder="Education *" class="form-control" data-bvalidator="required">
                              </div>
                      
                              <div class="col-md-6 form-group mt-3">
                                  <input type="text" name="uni" placeholder="University *" class="form-control" data-bvalidator="required">
                              </div>
                          </div>
  
                          <div class="form-group  mt-3">
                              <textarea name="address" placeholder="Address *" class="form-control" data-bvalidator="required"></textarea>
                          </div>
  
                          <div class="form-group mt-3">
                                <select name="country" placeholder="Country *" class="form-control" data-bvalidator="required">
                                    <option value="">-select country-</option>
                                    <?php
                                    foreach($country as $country1)
                                    {
                                    ?>
                                    <option value="<?php echo $country1["countryid"];?>"> <?php echo $country1["countryname"];?> </option>
                                    <?php
                                    }
                                    ?>
                              </select>
                          </div>
  
                          <div class="row">
                              <div class="form-group col-md-6 mt-3">
                                    <select name="state" placeholder="state *" class="form-control" data-bvalidator="required">
                                        <option value="">-select state-</option>
                                        <?php
                                        foreach($state as $state1)
                                        {
                                        ?>
                                        <option value="<?php echo $state1["stateid"];?>"> <?php echo $state1["statename"];?> </option>
                                        <?php
                                        }
                                        ?>
                                  </select>
                              </div>
                              
                              <div class="form-group col-md-6 mt-3">
                                    <select name="city" placeholder="city *" class="form-control" data-bvalidator="required">
                                        <option value="">-select city-</option>
                                        <?php
                                        foreach($city as $city1)
                                        {
                                        ?>
                                        <option value="<?php echo $city1["cityid"];?>"> <?php echo $city1["cityname"];?> </option>
                                        <?php
                                        }
                                        ?>
                                  </select>
                              </div>
                          </div>
  
  
                          <div class="row">
                              <div class="form-group col-md-6 mt-3">
                                  <input type="submit" name="register" value="Register!"  required style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
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