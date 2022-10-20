<?php
session_start();
include_once("header.php");
include_once("navbar.php");

?>

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h1 align="center" style="color:white">Welcome in your profile</h1>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->
<section class="w3l-contact-main" id="contact">
    <div class="contact-infhny py-5">
        <div class="container py-lg-3">
            <h6 class="sub-title">Welcome :  <?php echo $_SESSION["email"]; ?> </h6>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
                    allowfullscreen="">
                </iframe>
            </div>
        </div>
    </div>
   <!-- //contact map -->
 </section>
 <!-- //contact-form -->

<?php

include_once("footer.php");

?>
 
