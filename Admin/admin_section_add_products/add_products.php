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
<div class="container-md my-3">
    <div class="d-flex">
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>