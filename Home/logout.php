<?php
    session_start();
    unset($_SESSION['user_name']);
    // session_unset();
    header("location:index.php");
?>