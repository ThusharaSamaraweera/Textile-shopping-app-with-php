<?php
$List = [
    ['1', 'Frocks', 'Rs.1000', '10'],
    ['2', 'Ladies T-shirts', 'Rs.1000', '10'],
    ['3', 'Sarees', 'Rs.1000', '10'],
    ['4', 'Jumpsuits', 'Rs.1000', '10'],
    ['5', 'Crop Tops', 'Rs.1000', '10'],
    ['6', 'Casual Shrits', 'Rs.1000', '10'],
    ['7', 'Casual Trousers', 'Rs.1000', '10'],
    ['8', 'Formal Shirts', 'Rs.1000', '10'],
    ['9', 'Formal Trousers', 'Rs.1000', '10'],
    ['10', 'Short Trousers', 'Rs.1000', '10']
];

$list_loop = 0;

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

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid px-4">

                <div style="width: fit-content;">
                    <select class="form-select" aria-label="Select Category">
                        <option selected>Category</option>
                        <?php while ($category_loop < 10) { ?>
                            <option value='$category_loop + 1'><?php echo $category[$category_loop]; ?></option>
                        <?php $category_loop++;
                        } ?>
                    </select>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Procuct List</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php while ($list_loop < 10) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $List[$list_loop][0]; ?></th>
                                        <td><?php echo $List[$list_loop][1]; ?></td>
                                        <td><?php echo $List[$list_loop][2]; ?></td>
                                        <td><?php echo $List[$list_loop][3]; ?></td>
                                        <td><button type="button" class="btn btn-danger btn-sm"><b>X</b></i></button></td>
                                    </tr>

                                <?php $list_loop++;
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
</body>

</html>