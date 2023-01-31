
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
				<li class="active">Co-Ordinators</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

  
  <h2 class="text-center mt-5">List Of Students Who Are Eligible For Placement</h2>

  <hr style="border-color: black; width: 55%; height: 5px; margin: auto; ">

  <div class="container-fluid">

      <h3 class="text-center mt-3">Atmiya Collage</h3>
      <hr style="border-color: black; width: 30%; height: 5px; margin: auto;">

      <table class="table table-borderless table-hover bg-white mt-3">
          <tr class="bg-dark">
              <th class="text-white">id</th>
              <th class="text-white">photo</th>
              <th class="text-white">firstname</th>
              <th class="text-white">lastname</th>
              <th class="text-white">email</th>
              <th class="text-white">mobile</th>
              <th class="text-white">education</th>
              <th class="text-white">university</th>
              <th class="text-white">address</th>
              <th class="text-white">action</th>    
          </tr>

          <tr>
              <td>101</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Parth</td>
              <td>Patel</td>
              <td>parthpatel@gmail.com</td>
              <td>(+91)9998999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>102</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Maulik</td>
              <td>Patel</td>
              <td>Maulikpatel@gmail.com</td>
              <td>(+91)9998949090</td>
              <td>M.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>103</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Piyush</td>
              <td>Kotadiya</td>
              <td>piyushpatel@gmail.com</td>
              <td>(+91)9398999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>
      </table>


      <h3 class="text-center mt-3">B.J.V.M. Collage</h3>
      <hr style="border-color: black; width: 30%; height: 5px; margin: auto;">

      <table class="table table-borderless table-hover bg-white mt-3">
          <tr class="bg-dark">
              <th class="text-white">id</th>
              <th class="text-white">photo</th>
              <th class="text-white">firstname</th>
              <th class="text-white">lastname</th>
              <th class="text-white">email</th>
              <th class="text-white">mobile</th>
              <th class="text-white">education</th>
              <th class="text-white">university</th>
              <th class="text-white">address</th>
              <th class="text-white">action</th>    
          </tr>

          <tr>
              <td>101</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Parth</td>
              <td>Patel</td>
              <td>parthpatel@gmail.com</td>
              <td>(+91)9998999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>102</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Maulik</td>
              <td>Patel</td>
              <td>Maulikpatel@gmail.com</td>
              <td>(+91)9998949090</td>
              <td>M.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>103</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Piyush</td>
              <td>Kotadiya</td>
              <td>piyushpatel@gmail.com</td>
              <td>(+91)9398999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>
      </table>


      <h3 class="text-center mt-3">SEMCOM Collage</h3>
      <hr style="border-color: black; width: 30%; height: 5px; margin: auto;">

      <table class="table table-borderless table-hover bg-white mt-3">
          <tr class="bg-dark">
              <th class="text-white">id</th>
              <th class="text-white">photo</th>
              <th class="text-white">firstname</th>
              <th class="text-white">lastname</th>
              <th class="text-white">email</th>
              <th class="text-white">mobile</th>
              <th class="text-white">education</th>
              <th class="text-white">university</th>
              <th class="text-white">address</th>
              <th class="text-white">action</th>    
          </tr>

          <tr>
              <td>101</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Parth</td>
              <td>Patel</td>
              <td>parthpatel@gmail.com</td>
              <td>(+91)9998999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>102</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Maulik</td>
              <td>Patel</td>
              <td>Maulikpatel@gmail.com</td>
              <td>(+91)9998949090</td>
              <td>M.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>103</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Piyush</td>
              <td>Kotadiya</td>
              <td>piyushpatel@gmail.com</td>
              <td>(+91)9398999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>
      </table>


      <h3 class="text-center mt-3">D.D.I.T. Collage</h3>
      <hr style="border-color: black; width: 30%; height: 5px; margin: auto;">

      <table class="table table-borderless table-hover bg-white mt-3">
          <tr class="bg-dark">
              <th class="text-white">id</th>
              <th class="text-white">photo</th>
              <th class="text-white">firstname</th>
              <th class="text-white">lastname</th>
              <th class="text-white">email</th>
              <th class="text-white">mobile</th>
              <th class="text-white">education</th>
              <th class="text-white">university</th>
              <th class="text-white">address</th>
              <th class="text-white">action</th>    
          </tr>

          <tr>
              <td>101</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Parth</td>
              <td>Patel</td>
              <td>parthpatel@gmail.com</td>
              <td>(+91)9998999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>102</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Maulik</td>
              <td>Patel</td>
              <td>Maulikpatel@gmail.com</td>
              <td>(+91)9998949090</td>
              <td>M.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>103</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Piyush</td>
              <td>Kotadiya</td>
              <td>piyushpatel@gmail.com</td>
              <td>(+91)9398999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>
      </table>

      <h3 class="text-center mt-3">F.H.Shah Collage</h3>
      <hr style="border-color: black; width: 30%; height: 5px; margin: auto;">

      <table class="table table-borderless table-hover bg-white mt-3">
          <tr class="bg-dark">
              <th class="text-white">id</th>
              <th class="text-white">photo</th>
              <th class="text-white">firstname</th>
              <th class="text-white">lastname</th>
              <th class="text-white">email</th>
              <th class="text-white">mobile</th>
              <th class="text-white">education</th>
              <th class="text-white">university</th>
              <th class="text-white">address</th>
              <th class="text-white">action</th>    
          </tr>

          <tr>
              <td>101</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Parth</td>
              <td>Patel</td>
              <td>parthpatel@gmail.com</td>
              <td>(+91)9998999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>102</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Maulik</td>
              <td>Patel</td>
              <td>Maulikpatel@gmail.com</td>
              <td>(+91)9998949090</td>
              <td>M.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>

          <tr>
              <td>103</td>
              <td><img src="<?php echo $baseurl;?>images/men.webp" class="img-fluid rounded-circle" style="width: 95px; height: 75px;"></td>
              <td>Piyush</td>
              <td>Kotadiya</td>
              <td>piyushpatel@gmail.com</td>
              <td>(+91)9398999090</td>
              <td>B.tech</td>
              <td>Saurashtra University</td>
              <td>Rajkot</td>
              <td><a href=""><i class="bi bi-trash text-danger"></i></a> 
                  <a href=""><i class="bi bi-eye text-primary"></i></a>
                  <a href=""><i class="bi bi-pen text-success"></i></a>
              </td>
          </tr>
      </table>
  </div>
