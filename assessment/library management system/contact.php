<script type="text/javascript">
$(document).ready(function(){
  $("#frm3").bValidator();
});
</script>


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
            <h4>Our Address of Library</h4>
            <hr style=" border-color: black; height: 5px">
            <p><i class="bi bi-geo-alt-fill"></i>&nbsp;&nbsp; 104 Tagore apartment B   1st floor,<br>
            opp Arihant Nr Tata motors showroom,<br>
            Virani chowk, Tagor road, Rajkot (Gujarat)- 360002.
            </p>

            <p><i class="bi bi-telephone-fill"></i>&nbsp;&nbsp;(+91) 72288 44111 , (+91) 91042 36679 , (+91) 70465 95620
            </p>

            <p></p><i class="bi bi-envelope-fill"></i> <a href="mailto:info@lmsapp.com">info@lmsapp.com</a></p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.7887438818516!2d70.79046271426832!3d22.285990949047424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb6f0456fea9%3A0x65d89544902ce948!2sEverbest%20Job%20Placement!5e0!3m2!1sen!2sin!4v1662270385406!5m2!1sen!2sin" width="450" height="325" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
        </div>

        <div class="col-md-6">
            <h4>Contact With Us</h4>
            <hr style=" border-color: black; height: 5px">
            
            <form method="post" id="frm3">

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