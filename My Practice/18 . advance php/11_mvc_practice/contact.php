<script type="text/javascript">
	$(document).ready(function(){
		$("#frm").bValidator();
	})
</script>

<!-- contact-page -->
<div class="contact">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="<?php echo $mainurl;?>" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Contact
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="<?php echo $mainurl;?>">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<div class="contact-info">
			<h2>FIND US HERE</h2>
		</div>
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
		</div>
		<div class="contact-form">
			<div class="contact-info">
				<h3>CONTACT FORM</h3>
			</div>
			<form method="post" id="frm">
				<div class="contact-left">
					<input type="text" name="fname" placeholder="First_Name *" data-bvalidator="required,alpha">
					<input type="text" name="lname" placeholder="Last_Name *" data-bvalidator="required,alpha">
					<input type="text" name="email" placeholder="E-mail *" data-bvalidator="required,email">
					<input type="text" name="mobile" placeholder="mobile *" data-bvalidator="required,minlen[10],maxlen[10],digit ">  
				</div>
				<div class="contact-right">
					<textarea name="message" placeholder="Message" data-bvalidator="required"></textarea>
				</div>
				<div class="clearfix"></div>
				<input type="submit" name="addcontact" value="SEND">
			</form>
		</div>
	</div>
</div>
<!-- //contact-page -->

