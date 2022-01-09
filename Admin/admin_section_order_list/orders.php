<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <?php
    include("../../connection/db.php");

    $sql = "SELECT * 
            FROM customer c, item_details i, order_details o
            WHERE c.id = o.order_customer_id AND
            o.item_id = i.item_id
            ";
    $result	=	$link->query($sql);

    ?>
    <h1>Orders</h1>
    <div class="row my-3">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date & Time</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="dropdown">
                                    <a role="button" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none;  color: inherit;">State</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#"></a>Incomplete</li>
                                        <li><a class="dropdown-item" href="#">Complete</a></li>
                                        <li><a class="dropdown-item" href="#">Cancel</a></li>
                                    </ul>
                                    </th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_array()){
                                    $id = $row['order_id'];
                                    $customerID = $row['order_customer_id'];
                                    $itemID = $row['item_id'];
                                    $date = $row['time'];
                                    $quantity = $row['qty'];
                                    $state  =	$row['state'];
                                    $customer_name = $row['last_name'];
                                    $price = $row['price'];
                                    $amount = (int)$price * $quantity;

                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $id; ?></th>
                                        <td><?php echo $customer_name; ?></td>
                                        <td><?php echo $amount; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $quantity; ?></td>
                                        <td><?php echo $state; ?></td>
                                        <td>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#"></a>Incomplete</li>
                                            <li><a class="dropdown-item" href="#">Complete</a></li>
                                            <li><a class="dropdown-item" href="#">Cancel</a></li>
                                        </ul>

                                        </td>
                                    </tr>
                                    <?php                                                                                        
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
</body>
</html>