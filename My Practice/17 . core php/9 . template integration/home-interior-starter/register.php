<?php

include_once("header.php");
include_once("navbar.php");

?>

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Create Your Account</h2>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->
 <section class="w3l-contact-main" id="contact">
   <div class="contact-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
           <form action="https://sendmail.w3layouts.com/submitForm" method="post">
             <div class="form-top1">
               <h6 class="title-big text-center mb-2">Create Account Here</h6>
               <h3 class="hny-title">Don't have an account ?<br>Create Account</h3>
               <div class="form-top">

                 <div class="form-top-left">

                   <input type="text" name="w3lName" id="w3lName" placeholder="Name" required="">
                   <input type="number" name="w3lPhone" placeholder="Your phone number" required="">
                   <input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required="">
                 </div>
                 <div class="form-top-righ">
                   <textarea name="w3lMessage" id="w3lMessage" placeholder="Message*" required=""></textarea>
                 </div>
               </div>
               <div class="text-lg-right text-center">
                 <button type="submit" class="btn btn-style btn-primary">Submit</button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
   <!-- contact map -->
   <div class="map">
     <iframe
       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
       allowfullscreen=""></iframe>
   </div>
   <!-- //contact map -->
 </section>
 <!-- //contact-form -->

<?php

include_once("footer.php");

?>
 
