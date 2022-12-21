<script>
$(document).ready(function(){
	$("#frm1").bValidator();
})
</script>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="#" enctype="multipart/form-data" method="post" id="frm1">
					<input type="text" name="fname" placeholder="First Name..." data-bvalidator="required,alpha">

					<input type="text" name="lname" placeholder="Last Name..." data-bvalidator="required,alpha">

					<div><input type="date" name="dob" placeholder="DOB..." data-bvalidator="required"></div>

					<div style="margin-top:12px;"><input type="text" name="phone" placeholder="Phone Number..." data-bvalidator="required,minlen[10],maxlen[10],digit"></div>

					<input type="email" name="email" placeholder="Email Address" data-bvalidator="required,email" style="margin-top:12px;">

					<input type="password" name="pass" placeholder="Password" data-bvalidator="required,minlen[5],maxlen[15]">

					<input type="password" name="cpass" placeholder="Password Confirmation" data-bvalidator="required,minlen[5],maxlen[15]">

					
					<div style="margin-top:12px;">
						<label>Select Gender :</label> Male : <input type="radio" name="gender" value="male" data-bvalidator="required">Female : <input type="radio" name="gender" value="female">
					</div>
				

					<div style="margin-top:10px;">
						<label>Select Hobbies :</label>
						Teaching : <input type="checkbox" name="chk[]" value="teaching" data-bvalidator="required">
						Reading : <input type="checkbox" name="chk[]" value="reading">
						Sketing : <input type="checkbox" name="chk[]" value="sketing">
						Dancing : <input type="checkbox" name="chk[]" value="dancing">
					</div>

					<input type="file" name="img" placeholder="Photo..." data-bvalidator="required" style="margin-top:10px;">

					<textarea name="address" placeholder="address..." data-bvalidator="required" style="margin-top:15px;"></textarea>

					<div style="margin-top:10px;"><select name="state" placeholder="State..." data-bvalidator="required">
						<option value="">-Select State-</option>
						<?php
						foreach($state as $state1)
						{
						?>
						<option value="<?php echo $state1["state_id"];?>"><?php echo $state1["state_name"];?></option>
						<?php
						}
						?>
					</select></div>

					<div style="margin-top:10px;"><select name="city" placeholder="City..." data-bvalidator="required">
						<option value="">-Select City-</option>
						<?php
						foreach($city as $city1)
						{
						?>
						<option value="<?php echo $city1["city_id"];?>"><?php echo $city1["city_name"];?></option>
						<?php
						}
						?>
					</select></div>
										
					<input type="submit" name="register" value="Register">
				</form>
			</div>
			<div class="register-home">
				<a href="<?php echo $mainurl;?>">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
