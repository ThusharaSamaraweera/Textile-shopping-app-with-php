<?php
session_start();

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <div class="col-lg-4 col-md-6">

                        <div class="order-details">
                            <!-- Order Widget -->
                            <div class="single-widget">
                                <h2>CART TOTALS</h2>
                                <div class="content">
                                    <ul>
                                        <li>Sub Total<span>$ <?php echo $_SESSION['sub_tot'] ?></span></li>
                                        <li>(+) Shipping<span>$ <?php echo $_SESSION['shipping'] ?></span></li>
                                        <li class="last" id="total">Total<span>$ <?php echo $_SESSION['tot_payment'] ?></span></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ End Order Widget -->

                            <!-- Button Widget -->
                            <div class="single-widget get-button">
                                <div class="content">
                                    <div id="paypal-payment-button">

                                    </div>
                                    <script src="https://www.paypal.com/sdk/js?client-id=AU0F_FjwxSmwHcD4od1wbRIN23Ep-npNbs7tx-trMzBizw8SnNpyKU82Gw_EXU6N0OWsLpJcirYdwBAq"></script>

                                    <script>
                                        paypal.Buttons({
                                            style: {
                                                color: 'blue',
                                                shape: 'pill'
                                            },
                                            createOrder: function(data, actions) {
                                                return actions.order.create({
                                                    purchase_units: [{
                                                        amount: {
                                                            value: <?php echo ($_SESSION['tot'] / 200.00 ); ?>
                                                        }
                                                    }]
                                                });
                                            },
                                            onApprove: function(data, actions) {
                                                return actions.order.capture().then(function(details) {
                                                    window.location.replace("./success.php")
                                                })
                                            },
                                            onCancel: function(data) {
                                                window.location.replace("./Oncancel.php")
                                            }
                                        }).render('#paypal-payment-button');
                                    </script>

                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>

                </div>
            </div>
        </div>
    </section>
</body>

</html>