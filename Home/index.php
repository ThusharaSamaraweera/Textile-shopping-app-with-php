<?php
    include('./collectiontype.php');

    $products = array();
    $_SESSION['products'] = $products;

?>  

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="./Image/logo.png" />
    <title>Kingsmen Textile</title>
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
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body>
    <div>
        <?php
        include("../Header/header.php");     
        include("navbar.php");   
        ?>

        <!--banner-->
        <div id="bannerImage">
            <div class="container">
                <center>
                    <div id="bannerContent" class="text-warning">
                        <h1>Kingsmen Textile</h1>
                        <h4>Choose Your Royal Style Today!</h4>
                        <a href="products.php" class="btn btn-warning text-light"><b>Shop Now</b></a>
                    </div>
                </center>
            </div>
        </div>
        <!--banner ended-->

        <!--collection header-->
        <div class=" bg-light bg-gradient pt-5 pb-2 collection-header" style="width: 100%;">
            <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>L A I D I E S' &nbsp &nbsp C O L L E C T I O N</b></h3>
            <h4 class="text-warning text-center" style="font-family:'Carattere', sans-serif !important;">Ladies Dresses Collection From World's Best Brands...</h4>
        </div>
        <!--collection header ends-->

        <!--Ladies collection category-->
        <div class="container">

            <div class="row my-5 align-items-center justify-content-center ">

                <?php foreach ($ladies_collections as $collection) { ?>

                    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3 pb-2 cat">

                        <div class="card mx-auto d-block img-fluid" style="height: 100%; width:100%;">
                            <img src=<?php echo $collection[1]; ?> class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title "><?php echo $collection[0]; ?></h5>
                                <a href="#" class="btn btn-warning mt-2">Buy Now</a>
                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>
        <!--Ladies collection category ends-->

        <!--collection header-->
        <div class=" bg-light bg-gradient pt-5 pb-2 collection-header" style="width: 100%;">
            <h3 class="text-warning text-center" style="font-family:'Bitter', sans-serif !important;"><b>G E N T E L M E N &nbsp &nbsp C O L L E C T I O N</b></h3>
            <h4 class="text-warning text-center" style="font-family:'Carattere', sans-serif !important;">Men's Suits Collection From World's Best Brands...</h4>
        </div>
        <!--collection header ends-->

        <!--gens collection category-->
        <div class="container">

            <div class="row my-5 align-items-center justify-content-center">

                <?php 
                    // get categoriese of gentelmen
                    $categoriesOfGentelmenSQL = "SELECT DISTINCT category FROM item_details";
                    $resultCategoriesOfGentelmen = $link->query($categoriesOfGentelmenSQL);

                    while($gentelmanCategory = $resultCategoriesOfGentelmen->fetch_array()){
                        $category = $gentelmanCategory['category'];

                        // get randomly img of category 
                        $categoryImgSQL = "SELECT img1 FROM item_details WHERE category='$category' ORDER by rand() LIMIT 1";
                        $resultCategoryImg = $link->query($categoryImgSQL);
                            $categoryImg = $resultCategoryImg->fetch_array();
                       
                        
                ?>

                    <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3 col-xl-3 pb-2 cat">

                        <div class="card mx-auto d-block img-fluid " style="height: 100%; width:100%;">
                            <img src=<?php echo $categoryImg['img1']; ?> class="card-img-top" alt="image">
                            <div class="card-body text-center">
                                <h5 class="card-title "><?php echo $gentelmanCategory['category']; ?></h5>
                                <a href="#" class="btn btn-warning mt-2">Buy Now</a>
                            </div>
                        </div>

                    </div>

                <?php 
                    } 
                ?>

            </div>

        </div>
        <!--gens collection category ends-->

        <footer>
            <?php
            include("footer.php");
            ?>
        </footer>

    </div>
    <!-- Latest compiled and minified javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>