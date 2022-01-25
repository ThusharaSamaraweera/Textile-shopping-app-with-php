<?php
    session_start();
    require('../connection/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div>
        
    </div>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Payment Done Successfully...!',
        showConfirmButton: false,
        timer: 1500
    });
    </script>
    <?php

        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['order-customer-details'][2];
        $first_name = $_SESSION['order-customer-details'][0];
        $last_name = $_SESSION['order-customer-details'][1];
        $phone_num = $_SESSION['order-customer-details'][4];
        $country = $_SESSION['order-customer-details'][3];
        $state = $_SESSION['order-customer-details'][5];
        $address_line_1 = $_SESSION['order-customer-details'][6];
        $address_line_2 = $_SESSION['order-customer-details'][7];
        $postel_code = $_SESSION['order-customer-details'][8];

        $storeCustomerDetailsSQL = "INSERT INTO order_customer(sign_up_id, email, first_name, last_name, phone_num,
            country, state, address_line_1, address_line_2, postel_code)
            VALUES($user_id, '$first_name', '$last_name', $phone_num, '$country', '$state', '$address_line_1', 
            '$address_line_2', $postel_code)";

        $resultStoreCustomerDetailsSQL = mysqli_query($link, $storeCustomerDetailsSQL);

        // if($resultStoreCustomerDetailsSQL){
        //     echo 'hi';
        // }else{
        //     echo 'hii';

        // }        

        unset($_SESSION['order-customer-details']);
        unset($_SESSION['sub_tot']);
        unset($_SESSION['shipping']);
        unset($_SESSION['tot_payment']);
        unset($_SESSION['productsList']);
        unset($_SESSION['tot_products']);
        // var_dump($_SESSION);
        

    ?>

    <meta http-equiv="refresh" content="1;url=../Home/index.php">

</body>
</html>
