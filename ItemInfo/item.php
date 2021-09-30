<?php
    session_start();
    require('./components/relatedProduct.php');
    require('../connection/db.php');

   
    // id of displaied item
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
    }

    
    if(isset($_REQUEST['qty'])){
        $currentQty = $_REQUEST['qty'];
    }else{
        $currentQty = 1;
    }

    // sql for item which has selected id
    $sql = "SELECT name, category, description, price, qty, img1, img2, img3 FROM item_details WHERE item_id=$id";

    if($result = $link->query($sql)){
        $row = $result->fetch_array();

        $prices = unserialize($row['price']);
        $qty = unserialize($row['qty']);

        $currectCategory = $row['category'];

  
    if(isset($_REQUEST['btnradio'])){
        $size = $_REQUEST['btnradio'];

        if($size == 'S'){
            $unitPrice = $prices[0]['s'];
        }
        if($size == 'M'){
            $unitPrice = $prices[0]['m'];
        }
        if($size == 'L'){
            $unitPrice = $prices[0]['l'];
        }

        $tot_products = $_SESSION['tot_products'] + 1;
        $_SESSION['tot_products'] = $tot_products;

        $itemArr = array($_SESSION['tot_products'],$row['img1'], $id, $row['name'], $size, $unitPrice, $currentQty);
        // var_dump($itemArr);


        array_push($_SESSION['productsList'], $itemArr);
        // var_dump($_SESSION);
    }
    else{
        $btnradioS = 0;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- customize style -->
    <link rel="stylesheet" href="./ItemInfoStyle/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./ItemInfoStyle/product.css?v=<?php echo time(); ?>">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/190828a61a.js" crossorigin="anonymous"></script>


    <title></title>
</head>
<body>    
    <?php
        include("../Header/header.php");
        include("../Home/navbar.php");  
    ?>

    <div class="contanier">
        <div class="item-info-div card">
            <script src="./js/function.js?v=<?php echo time(); ?>"></script>
                    <div class="row">

                        <div class="col col-12 col-sm-12 col-md-6 item-imgs">
                            <div class="row">
                                <div class="col col-3 first-img-column">
                                    <div class="row">
                                        <div class="col col-12">
                                            <input type="image" class="small-images img-fluid" src="../Home<?php echo $row['img1']?>" alt="image" id='image1' style="width: auto;"
                                                onmouseover="largeImage(id)"
                                            > 
                                            <input type="image" class="small-images img-fluid" src="../Home<?php echo $row['img2']?>" alt="image" id='image2' style="width: auto;"
                                                onmouseover="largeImage(id)"
                                            > 
                                            <input type="image" class="small-images img-fluid" src="../Home<?php echo $row['img3']?>" alt="image" id='image3' style="width: auto;"
                                                onmouseover="largeImage(id)"
                                            > 
                                        </div>
                                    </div>
                                </div>

                                <div class="col col-9 second-img-column">
                                    <img class="large-images img-fluid" src="../Home<?php echo $row['img1']?>" alt="image" id="large-img">
                                </div>
                            </div>
                        </div>
            
                        <div class="col col-sm col-md details">
                            <div class="row title">
                                <h2><b><?php echo $row['name']?></b></h2>
                            </div>
                            <div class="row price">
                                <h4>Rs. <?php echo $prices[0]['m']?></h4>
                            </div>

                            <div class="row paragraph">
                                <p style="color:gray"><?php echo $row['description']?></p>
                            </div>

                            <div class="row sizes">
                                <h6>size</h6>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <script>
                                        window.onload = function(){

                                            if(<?php echo $qty[0]['s']?><1){
                                                document.getElementById('qtyS').style.display = 'none';
            
                                            }else{
                              

                                            }

                                            if(<?php echo $qty[0]['m']?><1){
                                                document.getElementById('qtyM').style.display = 'none';
                                            }
                                           


                                            if(<?php echo $qty[0]['l']?><1){
                                                document.getElementById('qtyL').style.display = 'none';
                                            }


                                        }

                                    </script> 
                                    <div id="qtyS"  role="group" class="btn-group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" 
                                            value="S" autocomplete="off" form="addToCard">
                                        <label class="btn btn-outline-primary" for="btnradio1" id="radio1" >S</label>                                                
                                    </div>

                                    <div id="qtyM" >
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                value="M" autocomplete="off" form="addToCard">
                                        <label class="btn btn-outline-primary" for="btnradio2" id="radio2" >M</label>                        
                                    </div>

                                    <div id="qtyL">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" 
                                                value="L" autocomplete="off" form="addToCard">
                                        <label class="btn btn-outline-primary" for="btnradio3" id="radio3">L</label>                        
                                    </div>

                                </div>
                            </div>


                            <div class="row qty-and-add-to-card">

                                <div class="col col-xs-6 col-sm-4 qty">
                                    <i type="button" class="fa fa-minus-circle" aria-hidden="true"
                                        onclick="increaseQty()"
                                    ></i>
                                    
                                    <input class="qtyInput" id="qtyInput" type="number" name="qty"
                                    value=<?php echo $currentQty;?> min="1" max="10" form="addToCard">
                                    
                                    <i type="button" class="fa fa-plus-circle" aria-hidden="true"
                                        onClick="discreaseQty()"
                                    ></i>
                                </div>
                                
                                <div class="col col-xs col-sm add-to-cart">
                                    <form id="addToCard" name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?> >
                                        <input type="hidden" name="id" value=<?php echo $id; ?> >
                                        <button type="submit" class="btn btn-danger" value="addToCard"
                                           
                                        >ADD TO CART</button>                         
                                    </form>
                                </div>
                                </form>
                            </div>
                            
                            <div class="row tags" >
                                <h6>Tags</h6>
                                <span class="badge rounded-pill bg-primary">$tags[0]</span>
                                <span class="badge rounded-pill bg-primary">$tags[1]</span>
                                <span class="badge rounded-pill bg-primary">$tags[2]</span>
                            </div>
                        </div>

                    </div>

        </div>
    </div>

    <?php
            
    }else{
            echo 'error';
    }

    ?>

    <div class="row mx-2">
        <h2 style="text-align: center;">Related Products</h2>
        <?php

            $getRelatedProducts = "SELECT item_id FROM item_details WHERE category='$currectCategory' ORDER BY RAND() LIMIT 4";
            if($result = $link->query($getRelatedProducts)){
                
                while($product = $result->fetch_array()){
                    $itemId = $product['item_id'];

                    $relateditemSQL = "SELECT name, img1, img3, price FROM item_details WHERE item_id=$itemId";
                    $resultRelatedItem = $link->query($relateditemSQL);
                    $item = $resultRelatedItem->fetch_array();

                    $prices = unserialize($row['price']);

        ?>    
                    <div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-product" >
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="../Home<?php echo $item['img1']?>" alt="image" style="width: 20rem;">
                                    <img class="hover-img" src="../Home<?php echo $item['img3']?>" alt="image">
                                </a>
                                <div class="button-head">
                                    <div class="product-action-2">
                                        <a title="Add to cart" href="../ItemInfo/item.php?id=<?php echo $itemId?>">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="../ItemInfo/item.php?id=<?php echo $itemId?>"><?php echo $item['name']?></a></h3>
                                <div class="product-price">
                                    <span>$<?php echo $prices[0]['m']?></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                
        <?php
                }
            }else{
                echo "error";
            }
        ?>   
    </div>


    <section  section class="row shop-services section home">
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


    <?php include('../Home/footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
