<?php
	session_start();
	$id = $_SESSION['user_id'];
	require_once('../connection/db.php');

	$subTot = $_SESSION['sub_tot'];
	$shipping = $_SESSION['shipping'];
	$tot = $_SESSION['tot_payment'];


	if(isset($_REQUEST['submit'])){

		$firstName = $_REQUEST['first-name'];
		$lasttName = $_REQUEST['last-name'];
		$email = $_REQUEST['email'];
		$country = $_REQUEST['country_name'];
		$number = $_REQUEST['phone-number'];
		$state = $_REQUEST['state'];
		$address1 = $_REQUEST['address1'];
		$address2 = $_REQUEST['address2'];
		$postel_code = $_REQUEST['postel_code'];
		$_REQUEST['submit'] = null;

		$_SESSION['order-customer-details'] = array($firstName, $lasttName, $email, $country, $number
					, $state, $address1, $address2, $postel_code);
			
		ob_start();
		header('Location:paymentOptions.php');
		ob_end_flush();
	}	
	
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	    <link rel="shortcut icon" href="../Home/Image/logo.png" />

	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
	<title>Kingsmen Textile</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="./css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.css">
	
	<link rel="stylesheet" href="./style.css">

</head>
<body>
	<?php include('../Header/header.php'); ?>
	<?php include('../Home/navbar.php'); ?>

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

									$getCustomerDetailssql2 = "SELECT phone_num, country, country, state, address_line_1, address_line_2, postel_code FROM customer_details WHERE sign_up_id=$id";
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


						<form class="needs-validation row form" method="post" action=<?php echo $_SERVER['PHP_SELF']; ?> 
								novalidate id="checkoutForm">
				
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>First Name<span>*</span></label>
										<input type="text" name="first-name" placeholder="" id="first-name" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide first name</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Last Name<span>*</span></label>
										<input type="text" name="last-name" placeholder="" id="last-name" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide last name</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Email Address<span>*</span></label>
										<input type="email" name="email" placeholder="" id="email" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide email</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Phone Number<span>*</span></label>
										<input type="tel" name="phone-number" placeholder="" id="phone-number" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide phone number</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group country-select">
										<label>Country<span>*</span></label>
										<select class="form-select" name="country_name" id="country" form="checkoutForm">
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
										<input type="text" name="state" placeholder="" id="state" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide State / Divition / Provice</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Address Line 1<span>*</span></label>
										<input type="text" name="address1" placeholder="" id="address1" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide Address</div>

									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Address Line 2<span>*</span></label>
										<input type="text" name="address2" placeholder="" id="address2" 
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide Address</div>
									
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Postal Code<span>*</span></label>
										<input type="text" name="postel_code" placeholder="" id="postel_code"  
										required class="form-control" form="checkoutForm">
										<div class="invalid-feedback">Please provide Postal Code</div>

									</div>
								</div>
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
									<li>Sub Total<span>RS. <?php echo $subTot ?></span></li>
									<li>(+) Shipping<span>RS. <?php echo $shipping ?></span></li>
									<li class="last" id="total">Total<span >RS. <?php echo $tot ?></span></li>
								</ul>
							</div>
						</div>
						<!--/ End Order Widget -->

						<!-- Button Widget -->
						
						<div class="single-widget get-button">
							<div class="content">

								<input type="hidden" value="submit" name="submit" form="checkoutForm">
								<button type="submit" class="btn animate" form="checkoutForm">Payment Options</button>								
							</div>
						</div>
						<!--/ End Button Widget -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('../Home/footer.php'); ?>

	<script type="text/javascript" src="./function.js" ></script>
    

</body>
</html>