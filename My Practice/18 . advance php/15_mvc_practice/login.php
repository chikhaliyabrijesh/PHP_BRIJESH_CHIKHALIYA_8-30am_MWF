
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo $mainurl;?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Login Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container">
			<h2>Login Form</h2>
		
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form method="post">
					<input type="email" name="email" placeholder="Email Address" required=" " >
					<input type="password" name="pass" placeholder="Password" required=" " >
					<div class="forgot">
						<a href="<?php $mainurl;?>forgetpassword">Forgot Password?</a>
					</div>
					<input type="submit" name="login" value="Login">
				</form>
			</div>
			<h4>For New People</h4>
			<p><a href="<?php $mainurl;?>register">Register Here</a> (Or) go back to <a href="<?php echo $mainurl;?>">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
