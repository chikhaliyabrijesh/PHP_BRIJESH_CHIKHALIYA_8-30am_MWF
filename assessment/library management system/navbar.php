      <!-- navbar start -->
      <nav class="navbar navbar-expand-md p-3 mt-2">
    <a href="#" class="navbar-brand"><img src="<?php echo $baseurl;?>images/logo.png"</a>
    <button type="button" class="navbar-toggler btn btn-lg bg-#575353" data-bs-toggle="collapse" data-bs-target="#btnToggle">
      <i class="bi bi-grid"></i>
    </button>

  <div class="collapse navbar-collapse" id="btnToggle">
    <ul class="navbar-link">
        <li><a href="<?php echo $mainurl;?>"><i class="bi bi-house"></i> Home</a></li>
        <li><a href="<?php $mainurl;?>aboutus"> About Us</a></li>
        <li><a href="<?php $mainurl;?>contactus"> Contact</a></li>
        <li><a href="#">Feedback</a></li>

        <?php
        if(!isset($_SESSION["registerid"]))
        {
        ?>
        

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-check-fill"></i> Account</a>
            <ul class="dropdown-menu" style="background-color:whitesmoke;">
                <li><a href="<?php $mainurl;?>login">Login!</a></li><br>  
                <li><a href="<?php $mainurl;?>register">Create Account</a></li>
            </ul>
        </li>

        <?php
        }
        else
        {
        ?>


        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
            <ul class="dropdown-menu" style="background-color:whitesmoke;">
              <li><a href="<?php $mainurl;?>bookscategory">Computer</a></li><br>
              <li><a href="<?php $mainurl;?>bookscategory">Electronics</a></li><br>
              <li><a href="<?php $mainurl;?>bookscategory">Civil</a></li><br>
              <li><a href="<?php $mainurl;?>bookscategory">Michanical</a></li><br>
              <li><a href="<?php $mainurl;?>bookscategory">Architacture</a></li>
            </ul>
        </li>

        <li class="dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-person-check-fill"></i>Welcome : <?php echo ucfirst($_SESSION["name"]);?></a>
            <ul class="dropdown-menu" style="background-color:whitesmoke;">
                <li><a href="<?php $mainurl;?>addbook"><i class="bi bi-plus"></i>&nbsp;Add Book</a></li><br>  
                <li><a href="<?php $mainurl;?>managebook"><i class="bi bi-trash3"></i>&nbsp;Delete Book</a></li><br>
                <li><a href="#"><i class="bi bi-search"></i>&nbsp;Search Book</a></li><br>
                <li><a href="<?php $mainurl;?>managebook"><i class="bi bi-eye"></i>&nbsp;View Book List</a></li><br>
                <li><a href="<?php $mainurl;?>managebook"><i class="bi bi-pencil-square"></i>&nbsp;Edit Book Record</a></li><br>
                <li><a href="<?php $mainurl;?>changepassword"><i class="bi bi-lock"></i>&nbsp;Change Password</a></li><br>
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

