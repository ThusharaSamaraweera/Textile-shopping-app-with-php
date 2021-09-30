<?php
    session_start();
    require('./components/cart-info.php');


    $shipping_percent = 5;

    // $items = array(
    //     array("images/Men/Formal Shirt/5.1.webp", 1, "Blue bodyfit shirt", "M", 1750.00, 5),
    //     array("images/Men/Formal Shirt/5.1.webp", 2, "Blue bodyfit shirt", "M", 1750.00, 2),
    //     array("images/Men/Formal Shirt/5.1.webp", 3, "Blue bodyfit shirt", "M", 1750.00, 2),
    //     array("images/Men/Formal Shirt/5.1.webp", 4, "aBlue bodyfit shirt", "M", 1750.00, 2),
    // );
    if(isset($_REQUEST['delete'])){
        echo $_REQUEST['orderID'];
        for($x = 0; $x<sizeof($items); $x++){
            if($items[$x][0] == $_REQUEST['orderID']){
                unset($items[$x]);
+
                break;
            }
        
        // var_dump($items);

        }
    }else{
        $items = $_SESSION['productsList'];
    }
    // $_SESSION['productsList'] = $items;
    var_dump($items);

    
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name='copyright' content=''>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Cart</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">



</head>

<body class="js">

    <!-- Preloader -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- End Preloader -->

    <?php
        include("../Header/header.php");
        include("../Home/navbar.php");  
    ?>

    <!-- Shopping Cart -->
    <div class="shopping-cart section">
        <div class="container">
            <div class="row">
            <!-- <section> -->
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-center">SIZE</th>
                                <th class="text-center">UNIT PRICE</th>
                                <th class="text-center">QUANTITY</th>
                                <th class="text-center">TOTAL</th>
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                                <th class="text-center">update</th>
                            </tr>
                        </thead>
                        <!--/ Cart body -->
                        <tbody>
                            <?php
                            for($i=0; $i<sizeof($items); $i++){
                                $row_total = $items[$i][5]*$items[$i][6];
                               
                            ?>
                            <tr>
                                <td class="image" data-title="No">
                                <img src="../Home<?php echo $items[$i][1]?>" alt="#" style="width:100px; height:120px;">
                                </td>
                                
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#"><?php echo $items[$i][3]?></a></p>
                                </td>

                                <td class="size" data-title="Size"><span><?php echo $items[$i][4]?></span></td>

                                <td class="price" data-title="Price">
                                    <span>Rs.<?php echo $items[$i][5]?></span>
                                </td>
                                <script>
                                    
                                    function increaseQty(){
                                        document.getElementById("qtyInput<?php echo $items[$i][0];?>").stepDown();
                                    }

                                    function discreaseQty(){
                                        document.getElementById('qtyInput<?php echo $items[$i][0];?>').stepUp();
                                    }
                                </script>

                                <td class="input-number" data-min="1" data-max="100" data-title="Quantity">
                                    <form  method="POST">
                                        <div class="qty">
                                            <i type="button" class="fa fa-minus-circle" aria-hidden="true"
                                                onclick="increaseQty()" style="font-size: 1.5em;" 
                                            ></i>
                                            
                                            <input class="qtyInput" id="qtyInput<?php echo $items[$i][0];?>" type="number" value=<?php echo $items[$i][6]?> min="1" max="10" 
                                                style="width: 2em; text-align: center;"
                                            >
                                            
                                            <i type="button" class="fa fa-plus-circle" aria-hidden="true"
                                                onClick="discreaseQty()" style="font-size: 1.5em;" 
                                            ></i>
                                        </div>            
                                    </form>
                                </td>

                                <td class="total-amount" data-title="Total"><span>Rs.<?php echo $row_total?></span></td>
                                
                                <td class="action" data-title="Remove">
                                    <form id="cartForm" name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?> >
                                        <input name="delete" type="hidden" value="delete">
                                        <input name="orderID" type="hidden" value=<?php echo $items[$i][0]; ?>>
                                        <button type="submit">
                                            <i class="ti-trash remove-icon"></i></a>
                                            

                                        </button>
                                    </form>
                                </td>

                                <td class="action" data-title="Remove">
                                    <form id="cartForm" name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']; ?> >

                                        <button type="submit">
                                            update
                                            <input name="update" type="hidden" value="update">
                                            <input name="orderID" type="hidden" value=<?php echo $i; ?>>
                                        </button>
                                    </form>

                                </td>
                            </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                        <!--/ End cart body -->
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            <!-- <section>     -->
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <div class="left">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Cart Subtotal<span>Rs.<?php items_total_ammount($items) ?></span></li>
                                        <li>Shipping<span>Rs.<?php shipping($items, $shipping_percent) ?></span></li>
                                        <li class="last">You Pay<span>Rs.<?php payment($items, $shipping_percent) ?></span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="../checkoutPage/checkout.php" class="btn">Checkout</a>
                                        <a href="../Home/products.php" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Shopping Cart -->



        <!-- Start Shop Services Area  -->
        <section class="shop-services section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Free shiping</h4>
                            <p>Orders over $100</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Free Return</h4>
                            <p>Within 30 days returns</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Sucure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Best Peice</h4>
                            <p>Guaranteed price</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Newsletter -->

        <!-- Start Shop Newsletter  -->
        <section class="shop-newsletter section">
            <div class="container">
                <div class="inner-top">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <!-- Start Newsletter Inner -->
                            <div class="inner">
                                <h4>Newsletter</h4>
                                <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                                <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                    <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                            <!-- End Newsletter Inner -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Newsletter -->



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
                                <div class="product-gallery">
                                    <div class="quickview-slider-active">
                                        <div class="single-slider">
                                            <img src="images/modal1.jpg" alt="#">
                                        </div>
                                        <div class="single-slider">
                                            <img src="images/modal2.jpg" alt="#">
                                        </div>
                                        <div class="single-slider">
                                            <img src="images/modal3.jpg" alt="#">
                                        </div>
                                        <div class="single-slider">
                                            <img src="images/modal4.jpg" alt="#">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
                                    <div class="size">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Size</h5>
                                                <select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <h5 class="title">Color</h5>
                                                <select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <!-- Input Order -->
                                        <div class="input-group">
                                            <div class="button minus">
                                                <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
                                            </div>
                                            <input type="text" name="quant[1]" class="input-number" data-min="1" data-max="1000" value="1">
                                            <div class="button plus">
                                                <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
                                            </div>
                                        </div>
                                        <!--/ End Input Order -->
                                    </div>
                                    <div class="add-to-cart">
                                        <a href="#" class="btn">Add to cart</a>
                                        <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                        <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                    </div>
                                    <div class="default-social">
                                        <h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->


        <script src="./customFunction.js"></script>
                            
        <!-- Jquery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Color JS -->
        <script src="js/colors.js"></script>
        <!-- Slicknav JS -->
        <script src="js/slicknav.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="js/owl-carousel.js"></script>
        <!-- Magnific Popup JS -->
        <script src="js/magnific-popup.js"></script>
        <!-- Fancybox JS -->
        <script src="js/facnybox.min.js"></script>
        <!-- Waypoints JS -->
        <script src="js/waypoints.min.js"></script>
        <!-- Countdown JS -->
        <script src="js/finalcountdown.min.js"></script>
        <!-- Nice Select JS -->
        <script src="js/nicesellect.js"></script>
        <!-- Ytplayer JS -->
        <script src="js/ytplayer.min.js"></script>
        <!-- Flex Slider JS -->
        <script src="js/flex-slider.js"></script>
        <!-- ScrollUp JS -->
        <script src="js/scrollup.js"></script>
        <!-- Onepage Nav JS -->
        <script src="js/onepage-nav.min.js"></script>
        <!-- Easing JS -->
        <script src="js/easing.js"></script>
        <!-- Active JS -->
        <script src="js/active.js"></script>
</body>

</html>