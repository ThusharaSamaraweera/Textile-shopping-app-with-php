<?php
$categories = [
    ['1', 'Frocks', '10'],
    ['2', 'Ladies T-shirts', '10'],
    ['3', 'Sarees', '10'],
    ['4', 'Jumpsuits', '10'],
    ['5', 'Crop Tops', '10'],
    ['6', 'Casual Shrits', '10'],
    ['7', 'Casual Trousers', '10'],
    ['8', 'Formal Shirts', '10'],
    ['9', 'Formal Trousers', '10'],
    ['10', 'Short Trousers', '10']
];

$loop = 0;
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

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container-fluid px-4">
                
                <div class="mx-2 my-2 bg-white py-3 px-3">
                <form>
                    <div class="form-group">
                        <label class="mb-2">Title</label>
                        <input type="email" class="form-control " placeholder="Category name">
                        <small class="form-text text-muted" style="font-size: 12px;">Add the new category name here.</small>
                    </div>
                    
                    <button type="submit" class="btn btn-secondary mt-3">Add Category</button>
                </form>
                </div>
            

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Procuct Categories</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php while ($loop < 10) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $categories[$loop][0]; ?></th>
                                        <td><?php echo $categories[$loop][1]; ?></td>
                                        <td><?php echo $categories[$loop][2]; ?></td>
                                        <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                    </tr>

                                <?php $loop++;
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