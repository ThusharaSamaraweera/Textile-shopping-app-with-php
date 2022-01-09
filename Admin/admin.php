<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../Home/Image/logo.png" />

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
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-crown me-2"></i>Kingsmen Textile</div>
            <div class="d-grid gap-2 mx-auto my-3">
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text active text-start" type="button" id="dashboard"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="orders"><i
                        class="fas fa-clipboard-check me-2"></i>Orders</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="view_products"><i
                        class="fas fa-shopping-bag me-2"></i>View Products</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="add_products"><i
                        class="fas fa-cart-plus me-2"></i>Add Product</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="categories"><i
                        class="fas fa-layer-group me-2"></i>Categories</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="user_details"><i
                        class="fas fa-users me-2"></i>Users Details</button>
                <button class="btn btn-light my-3 fw-bold bg-transparent second-text text-start" type="button" id="add_admin"><i
                        class="fas fa-user-plus me-2"></i>Add Admin</button>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="../Home/logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>user <?php echo $_SESSION['user_name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="../Home/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">25%</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="mw-100 h-75 mx-4">
            <iframe id="content" src="dashboard.php" frameborder="1" height="90%" width="100%"></iframe>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script src="admin_script.js"></script>
</body>

</html>