<?php

$category = ['Frocks', 'Ladies T-shirts', 'Sarees', 'Jumpsuits', 'Crop Tops', 'Casual Shrits', 'Casual Trousers', 'Formal Shirts', 'Formal Trousers', 'Short Trousers'];
$category_loop = 0;

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
                    <h2 class="fs-2 m-0">Add Product</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>user name
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">

                <div class="mx-2 my-2 bg-white py-3 px-3">
                    <form>
                        <div class="form-group">
                            <label class="mb-2">Product Title</label>
                            <input type="text" class="form-control mb-3">
                            <label class="mb-2">Product Description</label>
                            <input type="text" class="form-control mb-3" style="height:100px;">
                            <label class="mb-2">Product Price</label>
                            <input type="text" class="form-control mb-3">
                            <label class="mb-2">Product Quatity</label>
                            <input type="text" class="form-control mb-3" placeholder="small">
                            <input type="text" class="form-control mb-3" placeholder="medium">
                            <input type="text" class="form-control mb-3" placeholder="large">
                            
                            <label class="mb-2">Category</label>
                            <div style="width: fit-content;" class="mb-4">
                                <select class="form-select" aria-label="Select Category">
                                    <?php while ($category_loop < 10) { ?>
                                        <option value='$category_loop + 1'><?php echo $category[$category_loop]; ?></option>
                                    <?php $category_loop++;
                                    } ?>
                                </select>
                            </div>

                            <label class="mb-2">Product Image</label>
                            <input type="file" class="form-control mb-3">



                        </div>

                        <button type="submit" class="btn btn-secondary mt-3">Publish</button>
                    </form>
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