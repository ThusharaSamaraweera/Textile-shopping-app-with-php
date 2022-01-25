<?php
    session_start();
	include ("../connection/db.php");

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="./Image/logo.png" />
    <title>Kingsmen Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- External CSS -->
    <link rel="stylesheet" href="styl.css?v=<?php echo time(); ?>" type="text/css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Carattere:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400,300,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/190828a61a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <?php
            include("../Header/header.php");
            include("../Home/navbar.php");
        ?>

        <!--slider-->
        <div id="product_page_slider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#product_page_slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#product_page_slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#product_page_slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Banner/1.png" class="d-block w-100" alt="slider1">
                </div>
                <div class="carousel-item">
                    <img src="Banner/2.png" class="d-block w-100" alt="slider2">
                </div>
                <div class="carousel-item">
                    <img src="Banner/3.jpg" class="d-block w-100" alt="slider3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#product_page_slider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#product_page_slider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--slider end-->
        
        <!--Buttons-->
        <div class="container-fluid mt-5" id="categories-btns">            

            <div class="row text-center" style="margin: 4em 0;">
                <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>G E N T E L M E N &nbsp &nbsp C O L L E C T I O N</b></h3>

                <div class="col">
                    <?php
                        $categoriesSQL = "SELECT DISTINCT category FROM item_details WHERE collection='men' ";
                        $resultCategories= $link->query($categoriesSQL);
                        while($oneCategory = $resultCategories->fetch_array()){
                            $IoneCategory = $oneCategory['category'];

                    ?>
                        <a href=<?php echo "#".$IoneCategory ?>>
                            <button type="button" class="btn btn-outline-dark mb-1"                                
                            ><?php echo $IoneCategory ?></button>
                        </a>

                    <?php  
                    }
                    ?>
                </div>

            </div>

            <div class="row text-center">
                <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>L A I D I E S' &nbsp &nbsp C O L L E C T I O N</b></h3>

                <div class="col">
                    <?php
                        $categoriesSQL = "SELECT DISTINCT category FROM item_details WHERE collection='women' ";
                        $resultCategories= $link->query($categoriesSQL);
                        while($oneCategory = $resultCategories->fetch_array()){
                            $IoneCategory = $oneCategory['category'];

                    ?>
                        <a href=<?php echo "#".$IoneCategory ?>>
                            <button type="button" class="btn btn-outline-dark mb-1"                                
                            ><?php echo $IoneCategory ?></button>
                        </a>
                    <?php  
                    }
                    ?>
                </div>

            </div>
        </div>
        <!--Buttons ends-->

        <!--collection starts-->
        <div class="container">

            <?php
                //get collection
                $collectionSQL = "SELECT DISTINCT collection FROM item_details";
                $resultCollection = $link->query($collectionSQL);

                while($collection = $resultCollection->fetch_array()){

                $ICollection = $collection['collection'];
                echo "<div class='collection-header mt-3'>$ICollection</div>";

                // get gentelmen categories
                $categoriesSQL = "SELECT DISTINCT category FROM item_details WHERE collection='$ICollection' ";
                $resultCategories = $link->query($categoriesSQL);
                
                
                while($oneCategory = $resultCategories->fetch_array()){
                    $category = $oneCategory['category'];

            ?>


                    <div class="row my-5 align-items-center justify-content-center" id=<?php echo $category ?> >

                        <h1 class="category-topic"><?php echo $category ?></h1>
                        <?php 
                        
                        // getting item from db
                        $getProductsSql = "SELECT item_id,name, price, img1 FROM item_details WHERE category='$category' AND collection='$ICollection'";
                        $result = $link->query($getProductsSql);

                        while ($row = $result->fetch_array()) { 
                            
                            $prices = unserialize($row['price']);
                            $mediumPrice = $prices['m'];
                        ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pb-2">

                                <div class="card mx-auto d-block img-fluid item-div" style="height: 30rem; width:15rem;">
                                    <img src=<?php echo $row['img1']; ?> class="card-img-top" alt="img">
                                    <div class="card-body text-center">
                                        <h5 class="card-title "><?php echo $row['name']; ?></h5>
                                        <h6 class="text-muted">Rs. <?php echo $mediumPrice; ?></h6>
                                        <a href="./../ItemInfo/item.php?id=<?php echo $row['item_id']?>" class="btn btn-warning"><i class="bi bi-cart4 mx-1"></i>Buy Now</a>
                                    </div>
                                </div>

                            </div>
                        <?php 
                        } 
                        ?>
                    </div>

                <?php

                }

            }

                ?>

        <!-- collection ends-->

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

        <a href="#categories-btns">
            <div class="fixed-div re">
                <i class="fa fa-chevron-circle-up" style="font-size: 1.5em;"></i>
            </div>
        </a>

        
    </div>
    <footer class="footer">
        <?php
            include("footer.php");
        ?>
    </footer>

    <!-- Latest compiled and minified javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>