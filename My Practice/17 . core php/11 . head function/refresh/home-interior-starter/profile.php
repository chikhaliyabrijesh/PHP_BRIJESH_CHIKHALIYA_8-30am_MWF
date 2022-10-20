<?php

require_once("navbar.php");

?>

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h1 class="text-center text-white">Welcome in your profile</h1>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->

<div class="container p-4" >
    <div class="row">
        <div class="col-4 bg-dark text-white">
            <p class="text-center">Welcome To : <?php echo $_SESSION["email"]; ?> </p>
        </div>

        <div class="col-8">
            <h3 class="text-center">Update Your Profile</h3>
            <center>
                <form method="post">
                    <button type="button" name="edit" class="btn btn-primary mx-auto">Click To Edit Your Profile >> </button>
                </form>
            </center>
        </div>
    </div>
</div>


<?php

require_once("footer.php");

?>
 
