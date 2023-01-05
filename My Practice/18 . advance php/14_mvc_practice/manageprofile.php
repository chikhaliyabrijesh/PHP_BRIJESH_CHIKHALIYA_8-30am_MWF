
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Manage Profile</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- Manage Profile -->

        <div class="container">
        <div class="register">
		<div class="container">
			<h2>Manage Profile</h2>
			<div class="login-form-grids">
				<h5>profile information</h5>
				<form action="#" enctype="multipart/form-data" method="post" id="frm1">

					<img src="<?php echo $shwprof[0]["photo"];?>" style="width:150px; height:150px" class="rounded-circle">

                    <input type="file" name="img" placeholder="Photo..." data-bvalidator="required" style="margin-top:10px;">

					<input type="text" name="fname" value="<?php echo $shwprof[0]["first_name"];?>" placeholder="First Name..." data-bvalidator="required,alpha" style="margin-top:10px;">

					<input type="text" name="lname" value="<?php echo $shwprof[0]["last_name"];?>" placeholder="Last Name..." data-bvalidator="required,alpha" style="margin-top:10px;">

					<div><input type="date" name="dob" value="<?php echo $shwprof[0]["dob"];?>" placeholder="DOB..." data-bvalidator="required" style="margin-top:10px;"></div>

					<div style="margin-top:12px;"><input type="text" name="phone" value="<?php echo $shwprof[0]["phone"];?>" placeholder="Phone Number..." data-bvalidator="required,minlen[10],maxlen[10],digit"></div>

					<input type="email" name="email" value="<?php echo $shwprof[0]["email"];?>" placeholder="Email Address" data-bvalidator="required,email" style="margin-top:12px;">

					
					<!-- <div style="margin-top:12px;">
						<label>Select Gender :</label> Male : <input type="radio" name="gender" value="male" data-bvalidator="required">Female : <input type="radio" name="gender" value="female">
					</div> -->
				

					<!-- <div style="margin-top:10px;">
						<label>Select Hobbies :</label>
						Teaching : <input type="checkbox" name="chk[]" value="teaching" data-bvalidator="required">
						Reading : <input type="checkbox" name="chk[]" value="reading">
						Sketing : <input type="checkbox" name="chk[]" value="sketing">
						Dancing : <input type="checkbox" name="chk[]" value="dancing">
					</div> -->

					<textarea name="address" placeholder="address..." data-bvalidator="required" style="margin-top:15px;"><?php echo $shwprof[0]["address"];?></textarea>

					<div style="margin-top:10px;"><select name="state" placeholder="State..." data-bvalidator="required">
						<option value="">-Select State-</option>
						<?php
						foreach($state as $state1)
						{
							if($shwprof[0]["state_id"]==$state1["state_id"])
							{
						?>

						<option value="<?php echo $shwprof[0]["state_id"];?>" selected="selected"><?php echo $shwprof[0]["state_name"];?></option>

						<?php
							}
							else
							{
						?>

						<option value="<?php echo $state1["state_id"];?>"><?php echo $state1["state_name"];?></option>

						<?php
							}
						}
						?>

					</select></div>

					<div style="margin-top:10px;"><select name="city" placeholder="City..." data-bvalidator="required">
						<option value="">-Select City-</option>
						<?php
						foreach($city as $city1)
						{
							if($shwprof[0]["city_id"]==$city1["city_id"])
							{
						?>

						<option value="<?php echo $shwprof[0]["city_id"];?>"><?php echo $shwprof[0]["city_name"];?></option>

						<?php
							}
							else
							{
						?>

						<option value="<?php echo $city1["city_id"];?>"><?php echo $city1["city_name"];?></option>

						<?php
							}
						}
						?>
					</select></div>
										
					<input type="submit" name="upd" value="Update Profile">
				</form>
			</div>
			<div class="register-home">
				<a href="<?php echo $mainurl;?>">Home</a>
			</div>
		</div>
	</div>
        </div>


		</div>
	</div>
<!-- //login -->
