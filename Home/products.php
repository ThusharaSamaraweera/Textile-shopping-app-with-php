<?php
    
	include ("../connection/db.php");

    $category = array('Men Top Wear', 'Women BLOUSES & SHIRTS');

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
        <div class="container-fluid mt-5">

            <div class="row text-center" style="margin: 4em 0;">
                <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>G E N T E L M E N &nbsp &nbsp C O L L E C T I O N</b></h3>
                <div class="col">
                    <button type="button" class="btn btn-outline-dark mb-1">CASUAL SHIRTS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">FORMAL SHIRTS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">CASUAL TROUSERS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">FORMAL TROUSERS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">SHORT</button>
                    <button type="button" class="btn btn-outline-dark mb-1">JEANS</button>
                </div>

            </div>

            <div class="row text-center">
                <div class="col">
                <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>L A I D I E S' &nbsp &nbsp C O L L E C T I O N</b></h3>
                    <button type="button" class="btn btn-outline-dark mb-1">CASUAL SHIRTS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">FORMAL SHIRTS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">CASUAL TROUSERS</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Jumpsuits</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Croptops</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Casual Shirts</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Casual Trousers</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Formal Shirts</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Formal Trousers</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Short Trousers</button>
                </div>

            </div>
        </div>
        <!--Buttons ends-->

        <!--collection starts-->
        <div class="container">

            <?php
                // get gentelmen categories
                $categoriesOfGentelmenSQL = "SELECT DISTINCT category FROM item_details";
                $resultCategoriesOfGentelmen = $link->query($categoriesOfGentelmenSQL);
                
                
                while($gentelmanCategory = $resultCategoriesOfGentelmen->fetch_array()){
                    $category = $gentelmanCategory['category'];

            ?>


                    <div class="row my-5 align-items-center justify-content-center">

                        <h1 class="colletion-topic"><?php echo $category ?></h1>
                        <?php 
                        
                        // getting item from db
                        $getProductsSql = "SELECT item_id,name, price, img1 FROM item_details WHERE category='$category' ";
                        $result = $link->query($getProductsSql);

                        while ($row = $result->fetch_array()) { 
                            
                            $prices = unserialize($row['price']);
                            $mediumPrice = $prices[0]['m'];
                        ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 pb-2">

                                <div class="card mx-auto d-block img-fluid item-div" style="height: 30rem; width:15rem;">
                                    <img src=<?php echo $row['img1']; ?> class="card-img-top" alt="img">
                                    <div class="card-body text-center">
                                        <h5 class="card-title "><?php echo $row['name']; ?></h5>
                                        <h6 class="text-muted">Rs. <?php echo $mediumPrice; ?></h6>
                                        <a href="./../ItemInfo/itemInfo.php?id=<?php echo $row['item_id']?>" class="btn btn-warning"><i class="bi bi-cart4 mx-1"></i>Buy Now</a>
                                    </div>
                                </div>

                            </div>
                        <?php 
                        } 
                        ?>
                    </div>

                <?php

                }

                ?>

        <!-- collection ends-->


        <footer class="footer">
            <?php
            include("footer.php");
            ?>
        </footer>
    </div>
    <!-- Latest compiled and minified javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>