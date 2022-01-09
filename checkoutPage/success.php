<?php
    session_start();


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
    <meta http-equiv="refresh" content="1;url=../Home/index.php">

</body>
</html>
