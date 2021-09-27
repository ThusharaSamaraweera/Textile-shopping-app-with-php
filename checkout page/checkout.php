<?php

	$id = 1;
	require_once('./db.php');

	$subTot = 330.00;
	$shipping = $subTot*5/100;
	$tot = $subTot + $shipping;

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="./css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="./css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="./css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="./css/themify-icons.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="./css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="./css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="./css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="./css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/responsive.css">

	
	
</head>
<body>
	<section class="shop checkout section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-12">
					<div class="checkout-form">
						<h2>Make Your Checkout Here</h2>
						<p>Please register in order to checkout more quickly</p>
						<!-- Form -->
						
							
						<script>
							// functions for radio button
							function same(){
								<?php

									$getCustomerDetailssql1 = "SELECT first_name, last_name, email FROM customer WHERE id=$id";
									$resultCustomerDetails1 = $link->query($getCustomerDetailssql1);
									$customerDetails1 = $resultCustomerDetails1->fetch_array();

									$getCustomerDetailssql2 = "SELECT phone_num, country, country, state, address_line_1, address_line_2, postel_code FROM customer_details WHERE id=$id";
									$resultCustomerDetails2 = $link->query($getCustomerDetailssql2);
									$customerDetails2 = $resultCustomerDetails2->fetch_array();


								?>

								// fill details
								document.getElementById('first-name').value = "<?php echo $customerDetails1['first_name']; ?>";
								document.getElementById('last-name').value = "<?php echo $customerDetails1['last_name']; ?>";
								document.getElementById('email').value = "<?php echo $customerDetails1['email']; ?>";
								document.getElementById('country').value = "<?php echo $customerDetails2['country']; ?>";
								document.getElementById('phone-number').value = "<?php echo $customerDetails2['phone_num']; ?>";
								document.getElementById('state').value = "<?php echo $customerDetails2['state']; ?>";
								document.getElementById('address1').value = "<?php echo $customerDetails2['address_line_1']; ?>";
								document.getElementById('address2').value = "<?php echo $customerDetails2['address_line_2']; ?>";
								document.getElementById('postel_code').value = "<?php echo $customerDetails2['postel_code']; ?>";

							};
									
							function change(){
								// remove detiails
								document.getElementById('first-name').value = " ";
								document.getElementById('last-name').value = " ";
								document.getElementById('email').value = " ";
								document.getElementById('country').value = " ";
								document.getElementById('phone-number').value = " ";
								document.getElementById('state').value = " ";
								document.getElementById('address1').value = " ";
								document.getElementById('address2').value = " ";
								document.getElementById('postel_code').value = " ";
							
							};
						</script>
							<div class="row radio-btn">
								<div class="col col-xs-12 col-sm-4 form-check">
									<input class="form-check-radio-input" type="radio" name="flexRadioDefault"
										 id="flexRadioDefault1" onclick="same()">
									<label class="form-check-label" for="flexRadioDefault1">
										Same as user address
									</label>
								</div>

								<div class="col col-xs-12 col-sm-4 form-check">
									<input class="form-check-radio-input" type="radio" name="flexRadioDefault"
									 id="flexRadioDefault2" value="change" onclick="change()" checked>
									<label class="form-check-label" for="flexRadioDefault2">
										Change shipping address
									</label>
								</div>
							</div>


							<form class="needs-validation row form" method="post" action="#" novalidate>
				
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>First Name<span>*</span></label>
										<input type="text" name="name" placeholder="" id="first-name" required class="form-control">
										<div class="invalid-feedback">Please provide first name</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Last Name<span>*</span></label>
										<input type="text" name="name" placeholder="" id="last-name" required class="form-control">
										<div class="invalid-feedback">Please provide last name</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Email Address<span>*</span></label>
										<input type="email" name="email" placeholder="" id="email" required class="form-control">
										<div class="invalid-feedback">Please provide email</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Phone Number<span>*</span></label>
										<input type="number" name="number" placeholder="" id="phone-number" required class="form-control">
										<div class="invalid-feedback">Please provide phone number</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group country-select">
										<label>Country<span>*</span></label>
										<select class="form-select" name="country_name" id="country">
											<option value="AF">Afghanistan</option>
											<option value="LK">Sri Lanka</option>
											<option value="IN">India</option>
											<option value="BD">Bangladesh</option>
											<option value="PK">Pakistan</option>
											<option value="NP">Nepal</option>
										</select>
										<div class="invalid-feedback">Please provide State / Divition / Provice</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>State / Divition / Provice<span>*</span></label>
										<input type="text" name="address" placeholder="" id="state" required class="form-control">
										<div class="invalid-feedback">Please provide State / Divition / Provice</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Address Line 1<span>*</span></label>
										<input type="text" name="address" placeholder="" id="address1" required class="form-control">
										<div class="invalid-feedback">Please provide Address</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Address Line 2<span>*</span></label>
										<input type="text" name="address" placeholder="" id="address2" required class="form-control">
										<div class="invalid-feedback">Please provide Address</div>
									
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Postal Code<span>*</span></label>
										<input type="text" name="post" placeholder="" id="postel_code"  required class="form-control">
										<div class="invalid-feedback">Please provide Postal Code</div>

									</div>
								</div>
								<button type="submit" id="submitButton">submit</button>
						
						</form>
						<!--/ End Form -->
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="order-details">
						<!-- Order Widget -->
						<div class="single-widget">
							<h2>CART  TOTALS</h2>
							<div class="content">
								<ul>
									<li>Sub Total<span>$ <?php echo $subTot ?></span></li>
									<li>(+) Shipping<span>$ <?php echo $shipping ?></span></li>
									<li class="last">Total<span>$ <?php echo $tot ?></span></li>
								</ul>
							</div>
						</div>
						<!--/ End Order Widget -->

						<!-- Payment Method Widget -->
						<div class="single-widget payement">
							<div class="content">
								<img src="./images/payment-method.png" alt="#">
							</div>
						</div>
						<!--/ End Payment Method Widget -->
						<!-- Button Widget -->
						<div class="single-widget get-button">
							<div class="content">
								<div class="button" onclick="submitForm()">
									<a href="#" class="btn">proceed to checkout</a>
								</div>
							</div>
							<button type="submit"  onclick="submitForm()">submit </button>
						</div>
						<!--/ End Button Widget -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="./function.js" ></script>
</body>
</html>