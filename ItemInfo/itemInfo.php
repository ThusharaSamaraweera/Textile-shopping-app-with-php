<?php
    require('./components/item-info.php');
    require('./components/relatedProduct.php');
    require('./db_connection.php');


    array = array([
        array([item-id, qty, size, unit, name])
        array([item-id, qty, size])
        array([item-id, qty, size])
    ])

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


    <title>Document</title>
</head>
<body>    

    <div class="contanier">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Item</li>
            </ol>
        </nav>
    </div>

    <div class="contanier">
        <div class="item-info-div card">
            <?php

                // item info function
                $sql = "SELECT name, category, description, price, qty_s, qty_m, qty_l, img_path1, img_path2, img_path3, tags FROM item_details WHERE id='2'";
                if($result = $link->query($sql)){
                    $row = $result->fetch_array();
                    $tags = unserialize($row['tags']);
                    item_info($row['name'], $row['category'], $row['description'], $row['price'], $row['qty_s'], 
                            $row['qty_m'], $row['qty_l'], $row['img_path1'], $row['img_path2'], $row['img_path3'],
                            $tags    );
                }else{
                    echo 'error';
                }
            ?>
        </div>

    </div>

    <div class="row mx-3">
        <?php
            related_product();
            related_product();
            related_product();
            related_product();
            related_product();

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./js/function.js?v=<?php echo time(); ?>"></script>
</body>
</html>
