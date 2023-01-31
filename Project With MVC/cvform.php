<script type="text/javascript">
$(document).ready(function(){
  $("#frm1").bValidator();
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
				<li class="active">CV Form</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
    
<div class="container bg-white mt-4 p-3">
    <div class="row">
        <div class="col-md-12">
            <h4 class="mt-5">Apply Here To Uploading Your CV</h4>
            <p>To apply, please use the form below or if you find it more suitable please send us an email&nbsp;&nbsp;<a href="mailto:info@everbestcentralplacement.com">info@everbestcentralplacement.com</a> and include your CV.</p>   
            <hr style="border-color: black; width: 100%; height: 5px; margin: auto; ">
        </div>

        <div class="col-md-12 p-3 mt-3">
            <form method="post" enctype="multipart/form-data" id="frm1">
                <div class="row">
                    <div class=" col-md-6 form-group mt-2">
                        <label>Photo :</label>
                        <input type="file" name="img" class="form-control" data-bvalidator="required">
                    </div>

                    <div class="col-md-6 form-group mt-2">
                        <label>Date Of Birth :</label>
                        <input type="text" name="dob" placeholder="DOB *"
                         class="form-control" data-bvalidator="required">
                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Name :</label>
                        <input type="text" name="name" placeholder="Full Name *"
                         class="form-control" data-bvalidator="required,alpha">
                    </div>
                    
                    <div class="col-md-6 form-group mt-2">
                        <label>Email :</label>
                        <input type="text" name="email" placeholder="Email *"
                         class="form-control" data-bvalidator="required,email">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Phone :</label>
                        <input type="text" name="phone" placeholder="(+91)9712xxxx75 *"
                         class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
                    </div>
            
                    <div class="col-md-6 form-group mt-4">
                        <label>Gender :</label>
                        Male : <input type="Radio" name="gender" value="Male" data-bvalidator="required">
                        Female : <input type="Radio" name="gender" value="Female">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Education :</label>
                        <input type="text" name="edu" placeholder="Education *"
                        class="form-control" data-bvalidator="required">
                    </div>

                    <div class="col-md-6 form-group mt-2">
                        <label>Skill :</label> 
                        <input type="text" name="skill" placeholder="Your Skills *"
                        class="form-control" data-bvalidator="required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Department :</label>
                        <input type="text" name="dept" placeholder="Department *"
                        class="form-control" data-bvalidator="required">
                    </div>

                    <div class="col-md-6 form-group mt-2">
                        <label>Experience :</label>
                        <input type="text" name="experience" placeholder="Experience *"
                        class="form-control" data-bvalidator="required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Location :</label> 
                        <input type="text" name="location" placeholder="Location *"
                         class="form-control" data-bvalidator="required">
                    </div>
            
                    <div class="col-md-6 form-group mt-2">
                        <label>Job Time :</label>
                        <input type="text" name="time" placeholder="Job Time *"
                         class="form-control" data-bvalidator="required">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>Expected Salary :</label>
                        <input type="text" name="salary" placeholder="Expected Salary *"
                         class="form-control" data-bvalidator="required">
                    </div>

                    <div class="col-md-6 form-group mt-2">
                        <label>Country :</label>
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
                </div>

                <div class="row">
                    <div class="col-md-6 form-group mt-2">
                        <label>State :</label>
                        <select name="state" placeholder="State *" class="form-control" data-bvalidator="required">
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
            
                    <div class="col-md-6 form-group mt-2">
                        <label>City :</label>
                        <select name="city" placeholder="City *" class="form-control" data-bvalidator="required">
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
                    <div class="col-md-6 form-group mt-4">
                        <input type="submit" name="submit" value="Submit Your CV"
                        class="btn btn-lg" id="btn">
                    </div>

                    <div class="col-md-6 form-group mt-4">
                        <input type="reset" name="reset" value="Reset"
                        class="btn btn-lg bg-danger" id="btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

