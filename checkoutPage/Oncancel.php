<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancel</title>

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<main id="cart-main">

    <div class="site-title text-center">
        <div><img src="./assets/cancel.png" alt=""></div>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Payment Cancel !',
                showConfirmButton: false,
                timer: 1500
            });


        </script>
        <meta http-equiv="refresh" content="1;url=paymentOptions.php">

    </div>

</main>

</body>
</html>

