<?php
    require_once('./components/item-info.php');

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
    <link rel="stylesheet" href="./ItemInfoStyle/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/190828a61a.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Item</li>
        </ol>
    </nav>

    <div class="contanier item-info-div card">
        <!-- <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 item-imgs">
                <div class="row">
                    <div class="col col-3 first-img-column">
                        <div class="row">
                            <div class="col col-12">
                                <input type="image" class="small-images img-fluid" src="./Image/ProductImages/1/1.1.webp" alt="image" id='image1' style="width: auto;"
                                    onclick="largeImage(id)"
                                > 
                                <input type="image" class="small-images img-fluid" src="./Image/ProductImages/1/1.2.webp" alt="image" id='image2' style="width: auto;"
                                    onclick="largeImage(id)"
                                > 
                                <input type="image" class="small-images img-fluid" src="./Image/ProductImages/1/1.3.webp" alt="image" id='image3' style="width: auto;"
                                    onclick="largeImage(id)"
                                > 
                            </div>
                        </div>
                    </div>

                    <div class="col col-9 second-img-column">
                        <img class="large-images img-fluid" src="./Image/ProductImages/1/1.2.webp" alt="image" id="large-img">
                    </div>

                    <script>
                        function largeImage(id){
                            let largeImage = document.getElementById('large-img');
                            let smallImage = document.getElementById(id);
                            largeImage.src = smallImage.src;
                        }
                    </script>
                </div>
            </div>

            <div class="col col-sm col-md details">
                <div class="row title">
                    <h3><b>EDGE MENS CASUAL STRIPED T-SHIRT</b></h3>
                </div>
                <div class="row price">
                    <h4>Rs. 1,590.00</h4>
                </div>

                <div class="row paragraph">
                    <p style="color:gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ut omnis fugiat, voluptatum consequatur, vitae saepe sed voluptatem mollitia sapiente laborum iusto temporibus impedit aut ipsam aliquid repellat necessitatibus. Aperiam!</p>
                </div>

                <div class="row sizes">
                    <h6>size</h6>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="btn btn-outline-primary" for="btnradio1">S</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">M</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio3">XL</label>
                    </div>
                </div>


                <div class="row qty-and-add-to-card">
                    <div class="col col-xs-6 col-sm-4 qty">
                        <i class="fa fa-minus-circle" style="font-size: 30px;" aria-hidden="true"></i>
                        <label class="count"> 1 </label>
                        <i class="fa fa-plus-circle" style="font-size: 30px;" aria-hidden="true"></i>
                    </div>
                    
                    <div class="col col-xs col-sm add-to-cart">
                        <button type="button" class="btn btn-danger">ADD TO CART</button>   
                    </div>
                </div>
            </div>

        </div> -->
        <?php
            $imagesPaths = array("./Image/ProductImages/1/1.1.webp", 
                "./Image/ProductImages/1/1.2.webp",
                "./Image/ProductImages/1/1.3.webp");

            $productName = "name";
            $productPrice = "price";
            $productDescription = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro facilis soluta voluptatem praesentium excepturi cumque ullam qui at reprehenderit. Quo maiores sit ab. Illum, similique accusantium ratione cum vero animi.";
            item_info($imagesPaths, $productName, $productPrice, $productDescription);
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
