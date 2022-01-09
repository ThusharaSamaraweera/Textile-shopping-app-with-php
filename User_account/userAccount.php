<?php
	session_start();
	$id = $_SESSION['user_id'];
	require_once('../connection/db.php');

	if(isset($_REQUEST['submit'])){

		$firstName = $_REQUEST['first-name'];
		$lasttName = $_REQUEST['last-name'];
		$country = $_REQUEST['country_name'];
		$number = $_REQUEST['phone-number'];
		$state = $_REQUEST['state'];
		$address1 = $_REQUEST['address1'];
		$address2 = $_REQUEST['address2'];
		$postel_code = $_REQUEST['postel_code'];
		$_REQUEST['submit'] = null;

        $updateDetailsSQL1 = "UPDATE customer SET first_name= '$firstName' , last_name = '$lasttName' WHERE id = $id";
        $resultUpdateDetails = $link->query($updateDetailsSQL1);


        $checkSQL = "SELECT phone_num FROM customer_details WHERE sign_up_id=$id ";
        $resultCheck  = $link->query($checkSQL);
        if($check = $resultCheck->fetch_array()){
            $updateDetailsSQL2 = "UPDATE customer_details SET phone_num = $number, country = '$country', 
            state = '$state', address_line_1 = '$address1', address_line_2 = '$address2', postel_code = $postel_code WHERE sign_up_id=$id";
            $resultUpdateDetails2 = mysqli_query($link, $updateDetailsSQL2);


        }else{
            $insertDetailsSQL = "INSERT INTO customer_details (sign_up_id, phone_num, country, state, address_line_1, address_line_2, postel_code) 
                        VALUES ($id, $number, '$country', '$state', '$address1', '$address2', $postel_code)";
            $resultInsertDetails = mysqli_query($link, $insertDetailsSQL);


        }   
        
        ?>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type='text/JavaScript'>
            Swal.fire({
                icon: 'success',
                title: 'Saved Details Successfully...!',
                showConfirmButton: false,
                timer: 1500
            });
    
        </script>

        <meta http-equiv="refresh" content="2;url=../Home/index.php">     
    <?php


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.css">

	<!-- Themify Icons -->
    <link rel="stylesheet" href="../css/themify-icons.css">

	
	<!--  StyleSheet -->
	<link rel="stylesheet" href="../checkoutPage/style.css">

	
	
</head>
<body>
	<?php include('../Header/header.php'); ?>
	<?php include('../Home/navbar.php'); ?>
	<section class="shop checkout section">
		<div class="container">
			<div class="row"> 
                <div class="checkout-form">
                    <p>Please register in order to checkout more quickly</p>
                    <!-- Form -->                            

                        <form class=" row form" method="post" action=<?php echo $_SERVER['PHP_SELF']; ?> 
                            novalidate id="userDetailsForm">
            
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>First Name<span>*</span></label>
                                    <input type="text" name="first-name" placeholder="" id="first-name" 
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide first name</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Last Name<span>*</span></label>
                                    <input type="text" name="last-name" placeholder="" id="last-name" 
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide last name</div>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Phone Number<span>*</span></label>
                                    <input type="tel" name="phone-number" placeholder="" id="phone-number" 
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide phone number</div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group country-select">
                                    <label>Country<span>*</span></label>
                                    <select class="form-select" name="country_name" id="country" form="userDetailsForm"
                                    >
                                        <option value="AF">Afghanistan</option>
                                        <option value="LK" selected>Sri Lanka</option>
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
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide State / Divition / Provice</div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Address Line 1<span>*</span></label>
                                    <input type="text" name="address1" placeholder="" id="address1" 
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide Address</div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Address Line 2<span>*</span></label>
                                    <input type="text" name="address2" placeholder="" id="address2" 
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide Address</div>
                                
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Postal Code<span>*</span></label>
                                    <input type="text" name="postel_code" placeholder="" id="postel_code"  
                                    required class="form-control" form="userDetailsForm">
                                    <div class="invalid-feedback">Please provide Postal Code</div>

                                </div>
                            </div>
                    </form>
                    <!--/ End Form -->
                </div>
				

                <div class="single-widget get-button">
                    <div class="content">
                            <input type="hidden" value="submit" name="submit" form="userDetailsForm">
                            <button type="submit" class="btn animate" form="userDetailsForm">Save Changes</button>								
                    </div>
                </div>
			</div>
		</div>
	</section>
	<?php include('../Home/footer.php'); ?>

	<script type="text/javascript" src="./function.js" ></script>
    

</body>
</html>