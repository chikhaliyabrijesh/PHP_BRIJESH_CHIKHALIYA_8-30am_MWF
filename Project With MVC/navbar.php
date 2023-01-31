<!-- navbar start -->
<nav class="navbar navbar-expand-md p-3 mt-2">
    <a href="<?php echo $mainurl;?>" class="navbar-brand">EVERBEST CENTRAL PLACEMENT</a>
    <button type="button" class="navbar-toggler btn btn-lg bg-#575353" data-bs-toggle="collapse" data-bs-target="#btnToggle">
      <i class="bi bi-grid"></i>
  </button>
  <div class="collapse navbar-collapse" id="btnToggle">
    <ul class="navbar-link">
        <li><a href="<?php echo $mainurl;?>"><i class="bi bi-house"></i> Home</a></li>
        <li><a href="<?php $mainurl;?>aboutus"> About Us</a></li>
        <li><a href="<?php $mainurl;?>contactus"> Contact</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Company</a>
          <ul class="dropdown-menu" style="background-color:#575353;">
            <li><a href="<?php $mainurl;?>procedure">Place & Procedure</a></li>
            <li><a href="<?php $mainurl;?>coordinators">Co-ordinators</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Student</a>
          <ul class="dropdown-menu" style="background-color:#575353;">
            <li><a href="<?php $mainurl;?>companylist">Company's List</a></li>
            <li><a href="<?php $mainurl;?>information">Eligibility Info.</a></li>
            <li><a href="<?php $mainurl;?>tutorial">Tutorials</a></li>  
            <li><a href="<?php $mainurl;?>cvform">Upload Your CV</a></li>
          </ul>
        </li>
        <li><a href="<?php $mainurl;?>feedback">Feedback</a></li>


        <?php
        if(!isset($_SESSION["registerid"]))
        {
        ?>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-check-fill"></i> Account</a>
          <ul class="dropdown-menu" style="background-color:#575353;">
            <li><a href="<?php $mainurl;?>register"><i class="bi bi-person"></i>&nbsp;Create Account</a></li><br>
            <li><a href="<?php $mainurl;?>login"><i class="bi bi-box-arrow-right"></i>&nbsp;Login!</a></li>
          </ul>
        </li>

        <?php
        }
        else
        {
        ?>

        <li class="dropdown">

          <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-check-fill"></i>Welcome : <?php echo ucfirst($_SESSION["fname"]);?></a>

          <ul class="dropdown-menu" style="background-color:#575353; width:200px;">

            <li><a href="<?php $mainurl;?>manageprofile?updateprofileid=<?php echo $shwprof[0]["registerid"];?>"><i class="bi bi-person-circle"></i>&nbsp;Manage Profile</a></li><br>

            <li><a href="<?php $mainurl;?>"><i class="bi bi-bell"></i>&nbsp;Manage Notifications</a></li><br> 

            <li><a href="<?php $mainurl;?>changepassword"><i class="bi bi-lock"></i>&nbsp;Change Password</a></li><br>

            <li><a href="<?php $mainurl;?>manageprofile?deleteprofileid=<?php echo $shwprof[0]["registerid"];?>" onclick="return confirm('Are You Sure To Delete Your Account ?')"><i class="bi bi-trash3"></i>&nbsp;Delete Account</a></li><br>
            
            <li><a href="<?php $mainurl;?>?logout-here" onclick="return confirm('Are You Sure To Logout ?')"><i class="bi bi-power"></i>&nbsp;Logout</a></li>

          </ul>

        </li>

        <?php
        }
        ?>



    </ul>
  </div>    
</nav>
<!-- navbar end -->
