<script type="text/javascript">
$(document).ready(function(){
  $("#frm").bValidator();
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
				<li class="active">Contact Us</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

  <div class="container bg-white p-5 mt-4">
      <div class="row">
          <div class="col-md-12">
              <h3>Contact Us</h3>
              <hr style="border-color: black; height: 5px">                
          </div>

          <div class="row">
              <div class="col-md-6">
                  <h4>EverBest Central Placement</h4>
                  <hr style=" border-color: black; height: 5px">
                  <p><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp; 104 Tagore apartment B   1st floor,<br>
                  opp Arihant Nr Tata motors showroom,<br>
                  Virani chowk, Tagor road, Rajkot (Gujarat)- 360002.
                  </p>

                  <p><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;(+91) 72288 44111 , (+91) 91042 36679 , (+91) 70465 95620
                  </p>

                  <p></p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@everbestplacement.com">info@everbestcentralplacement.com</a></p>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.7887438818516!2d70.79046271426832!3d22.285990949047424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb6f0456fea9%3A0x65d89544902ce948!2sEverbest%20Job%20Placement!5e0!3m2!1sen!2sin!4v1662270385406!5m2!1sen!2sin" width="450" height="325" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
              </div>

              <div class="col-md-6">
                  <h4>Contact With Us</h4>
                  <hr style=" border-color: black; height: 5px">
                  
                  <form method="post" id="frm">

                      <div class="form-group mt-2">
                          <label>First Name : </label>
                          <input type="text" name="fname" placeholder="First Name *" class="form-control" data-bvalidator="required,alpha">
                      </div>
      
                      <div class="form-group mt-2">
                          <label>Last Name : </label>
                          <input type="text" name="lname" placeholder="Last Name *" class="form-control" data-bvalidator="required,alpha">
                      </div>
      
                      <div class="form-group mt-2">
                          <label>Email : </label>
                          <input type="text" name="email" placeholder="Email *" class="form-control" data-bvalidator="required,email">
                      </div>
      
                      <div class="form-group mt-2">
                          <label>Mobile : </label>
                          <input type="text" name="phone" placeholder="Mobile No. *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
                      </div>
      
                      <div class="form-group mt-2">
                          <label>Subject : </label>
                          <input type="text" name="subject" placeholder="Subject *" class="form-control" data-bvalidator="required">
                      </div>
      
                      <div class="form-group mt-2">
                          <label>Message : </label>
                          <textarea name="message" placeholder="Message *" class="form-control" data-bvalidator="required"></textarea>
                      </div>
      
                      <div class="row">
                          <div class="form-group col-md-6 mt-3">
                              <input type="submit" name="addcontact" value="Add Contact" style="width: 100%; height: auto; margin: auto; padding: 10px; background-color:#575353; border-radius: 4px; border: none; color:white">
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

