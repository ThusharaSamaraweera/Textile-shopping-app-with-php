<?php
    session_start();
        $items = array(
            array("images/Men/Formal Shirt/5.1.webp", 1, "Blue bodyfit shirt", "M", 1750, 5),
            array("images/Men/Formal Shirt/5.1.webp", 1, "Blue bodyfit shirt", "M", 1750, 2),
            array("images/Men/Formal Shirt/5.1.webp", 1, "Blue bodyfit shirt", "M", 1750, 2),
            array("images/Men/Formal Shirt/5.1.webp", 1, "Blue bodyfit shirt", "M", 1750, 2),
        );

    $_SESSION['productList'] = $items;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./cart.php">link</a>
</body>
</html>

