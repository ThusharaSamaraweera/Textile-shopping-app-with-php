<?php
session_start();
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

	<!-- Font Awesome -->

	
	<!-- StyleSheet -->
	<link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
        include('../Header/header.php');
        include('../Home/navbar.php');
    ?>
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

                                    <script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>
                                    <script src="paypal.js"></script>
                                    <!-- <script>
                                        paypal.Buttons({
                                            style: {
                                                color: 'blue',
                                                shape: 'pill'
                                            },
                                            createOrder: function(data, actions) {
                                                return actions.order.create({
                                                    purchase_units: [{
                                                        amount: {
                                                            value: '<?php echo ($_SESSION['tot'] / 200.00 ); ?>'
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
                                    </script> -->
                                    <div id="paypal-payment-button">
                                        
                                    </div>
                                </div>
                            </div>
                            <!--/ End Button Widget -->
                        </div>
                            
                </div>
            </div>
        </div>
    </section>


    <?php
        include('../Home/footer.php');
    ?>

</body>

</html>