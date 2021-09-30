<?php
    session_start();
    unset($_SESSION['user_name']);
    $_SESSION['productsList'] = array();
    $_SESSION['tot_products'] = 0;
    header("location:index.php");
?>