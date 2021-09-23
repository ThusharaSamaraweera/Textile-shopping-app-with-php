<?php
$Frocks = [
    ['High Neck Maxi', 'products/Frocks/1.jpg','Rs. 3000'],
    ['Wrap Neck Maxi', 'products/Frocks/2.jpg','Rs. 2,975'],
    ['V-Cut Neck Mini', 'products/Frocks/3.jpg','Rs. 2,450'],
    ['V-Cut Neck Maxi', 'products/Frocks/4.jpg','Rs. 3,250'],
    ['Bell Sleeve Midi', 'products/Frocks/5.jpg','Rs. 2,700'],
    ['One-Sholder Midi', 'products/Frocks/6.jpg','Rs. 2,260']
];

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Kingsmen Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="styl.css" type="text/css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Carattere:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div>
        <?php
        include("header.php");
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
            <div class="row text-center">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark mb-1">Frocks</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Ladies T-Shirts</button>
                    <button type="button" class="btn btn-outline-dark mb-1">Sarees</button>
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

        <!--Frocks collection-->
        <div class="container">

            <div class="row my-5 align-items-center justify-content-center">

                <?php foreach ($Frocks as $Frock) { ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-2">

                        <div class="card mx-auto d-block img-fluid" style="height: 100%; width:15rem;">
                            <img src=<?php echo $Frock[1]; ?> class="card-img-top" alt="A frock">
                            <div class="card-body text-center">
                                <h5 class="card-title "><?php echo $Frock[0]; ?></h5>
                                <h6 class="text-muted"><?php echo $Frock[2]; ?></h6>
                                <a href="#" class="btn btn-warning mt-2">Buy Now</a>
                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>
        <!--Frocks collection ends-->

        <footer class="footer">
            <?php
            include("footer.php");
            ?>
        </footer>
    </div>
</body>

</html>