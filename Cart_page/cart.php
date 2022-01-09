<?php
    session_start();
    require('./components/cart-info.php');


    $shipping_percent = 5;

    $items = $_SESSION['productsList'];
    $tot_products = $_SESSION['tot_products'];
    if(isset($_REQUEST['delete'])){
        echo $_REQUEST['orderID'];
        for($x = 0; $x<sizeof($items); $x++){
            if($items[$x][0] == $_REQUEST['orderID']){

                array_splice($items, $x, 1);
                $tot_products = $tot_products - 1;    
                break;
            }

        }
        $_SESSION['productsList'] = $items;
        $_SESSION['tot_products'] = $tot_products;
    }


    
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<link rel="shortcut icon" href="../Home/Image/logo.png" />

    <!-- Meta Tag -->
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name='copyright' content=''>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
	<title>Kingsmen Textile</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/font-awesome.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" href="./css/themify-icons.css">

    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="./cart_style.css">
    <link rel="stylesheet" href="css/responsive.css">



</head>

<body class="js">

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
                                    <p class="product-name"><a href="#"><?php echo $items[$i][3]; ?></a></p>
                                </td>

                                <td class="size" data-title="Size"><span><?php echo $items[$i][4]; ?></span></td>

                                <td class="price" data-title="Price" id="price<?php echo $items[$i][0]; ?>">
                                    <span>Rs.<?php echo $items[$i][5]; ?></span>
                                </td>


                                <td class="input-number" data-min="1" data-max="100" data-title="Quantity" >
                                    <form  method="POST">
                                        <div class="qty">
                                            <i type="button" class="fa fa-minus-circle" aria-hidden="true"
                                                onclick="increaseQty(<?php echo $items[$i][0];?>)" style="font-size: 1.5em;" 
                                            ></i>
                                            
                                            <input class="qtyInput" id="qtyInput<?php echo $items[$i][0];?>" type="number"
                                             value=<?php echo $items[$i][6]; ?>
                                             min="1" max="10" style="width: 3em; text-align: center;"
                                            >
                                            
                                            <i type="button" class="fa fa-plus-circle" aria-hidden="true"
                                                onClick="discreaseQty(<?php echo $items[$i][0];?>)" style="font-size: 1.5em;" 
                                            ></i>
                                        </div>            
                                    </form>
                                </td>

                                <td class="total-amount" id="tot<?php echo $items[$i][0]; ?>" data-title="Total">
                                    Rs.<?php echo $row_total?>
                                </td>
                                
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
                                <script>
                                    function tot(qty, _id){
                                        var price = document.getElementById('price'+_id)
                                        var tot = qty*price;
                                        document.getElementById('tot' + _id).innerHTML = tot;
                                    }

                                    function increaseQty(_id){
                                        document.getElementById('qtyInput'+_id).stepDown();
                                        // function tot(qty, _id);
                                    }

                                    function discreaseQty(_id){
                                        document.getElementById('qtyInput'+_id).stepUp();
                                        // function tot(qty, _id);

                                    }
                                </script>
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
                                        <li>Cart Subtotal<span>Rs.<?php echo items_total_ammount($items) ?></span></li>
                                        <li>Shipping<span>Rs.<?php echo shipping($items, $shipping_percent) ?></span></li>
                                        <li class="last">You Pay<span>Rs.
                                            <?php echo payment($items, $shipping_percent)   ?>
                                            </span>
                                        </li>
                                        <?php
                                            $_SESSION['tot_payment'] = payment($items, $shipping_percent);
                                            $_SESSION['sub_tot'] = items_total_ammount($items);
                                            $_SESSION['shipping'] = shipping($items, $shipping_percent);

                                        ?>
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


        <?php
            include('../Home/footer.php');
        ?>


        <script src="./customFunction.js"></script>
                            
        <!-- Jquery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>