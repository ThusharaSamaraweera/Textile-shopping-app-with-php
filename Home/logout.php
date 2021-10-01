<?php
    session_start();
    unset($_SESSION['user_name']);
    $_SESSION['productsList'] = array();
    $_SESSION['tot_products'] = 0;
    $_SESSION['sub_tot'] = 0;
    $_SESSION['shipping'] = 0;
    $_SESSION['tot_payment'] = 0;
    $_SESSION['order-customer-details'] = array();
    $_SESSION['user_id'] = null;

    header("location:index.php");
?>