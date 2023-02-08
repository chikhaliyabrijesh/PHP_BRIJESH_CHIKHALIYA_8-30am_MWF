<script type="text/javascript">
$(document).ready(function(){
  $("#frm2").bValidator();
});
</script>


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
                  <form method="post" id="frm2">

                    <div class="form-group mt-3">
                        <input type="text" name="name" placeholder="Name *" class="form-control" data-bvalidator="required,alpha">
                    </div>

                    <div class="form-group mt-3">
                        <input type="text" name="phone" placeholder="Phone *" class="form-control" data-bvalidator="required,minlen[10],maxlen[10],digit">
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