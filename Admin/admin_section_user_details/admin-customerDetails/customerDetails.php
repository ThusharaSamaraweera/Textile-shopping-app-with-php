<?php
$Customers = [
    ['1', 'Mike', 'Dane','123@gmail.com', '077 7777 777', '0999','2021/10/29','No 13','Colombo'],
    ['1', 'Mike', 'Dane','123@gmail.com', '077 7777 777', '0999','2021/10/29','No 13','Colombo'],
    ['1', 'Mike', 'Dane','123@gmail.com', '077 7777 777', '0999','2021/10/29','No 13','Colombo'],
    ['1', 'Mike', 'Dane','123@gmail.com', '077 7777 777', '0999','2021/10/29','No 13','Colombo'],
    ['1', 'Mike', 'Dane','123@gmail.com', '077 7777 777', '0999','2021/10/29','No 13','Colombo'],
];

$customer_loop = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-crown me-2"></i>Kingsmen Textile</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-clipboard-check me-2"></i>Orders</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-shopping-bag me-2"></i>View Products</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-cart-plus me-2"></i>Add Product</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-layer-group me-2"></i>Categories</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-users me-2"></i>Users Details</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-user-plus me-2"></i>Add Admin</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-3">Customer Details</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>

            <div class="container-fluid px-4">

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Customer Details</h3>
                    <div class="col" style="overflow:auto;">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone No.</th>
                                    <th scope="col">Postal Code</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Address line 01</th>
                                    <th scope="col">Address line 02</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php while ($customer_loop < 5) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $Customers[$customer_loop][0]; ?></th>
                                        <td><?php echo $Customers[$customer_loop][1]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][2]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][3]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][4]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][5]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][6]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][7]; ?></td>
                                        <td><?php echo $Customers[$customer_loop][8]; ?></td>
                                        
                                        
                                    </tr>

                                <?php $customer_loop++;
                                } ?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>