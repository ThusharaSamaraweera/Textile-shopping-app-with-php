<?php
    require_once('./components/item-info.php');
    require_once('./db_connection.php');
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
        <?php
            // $imagesPaths = array("./Image/ProductImages/1/1.1.webp", 
            //     "./Image/ProductImages/1/1.2.webp",
            //     "./Image/ProductImages/1/1.3.webp");

            // $productName = "name";
            // $productPrice = "price";
            // $productDescription = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro facilis soluta voluptatem praesentium excepturi cumque ullam qui at reprehenderit. Quo maiores sit ab. Illum, similique accusantium ratione cum vero animi.";

            $sql = "SELECT name, category, description, price, img_path1, img_path2, img_path3";
            $result = $link->query($sql);


            while($row = $result->fetch_array()){
                item_info($imagesPaths, $productName, $productPrice, $productDescription);
            }
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="./js/function.js"></script>
</body>
</html>
