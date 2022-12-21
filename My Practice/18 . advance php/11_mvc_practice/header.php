<?php
$mainurl="http://localhost/advance_php_practice/11_mvc_practice/";
$baseurl="http://localhost/advance_php_practice/11_mvc_practice/assets/";
?>
<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="<?php echo $baseurl;?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo $baseurl;?>js/jquery.min.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo $baseurl;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $baseurl;?>css/gray.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo $baseurl;?>js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="<?php echo $baseurl;?>js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo $baseurl;?>css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="<?php $mainurl;?>login"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="<?php $mainurl;?>create-account"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>			
					</ul>
				</div>
				<div class="header-right">
						<div class="cart box_1">
							<a href="<?php $mainurl;?>checkout-cart">
								<h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>)<img src="<?php echo $baseurl;?>images/bag.png" alt=""></h3>
							</a>	
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->