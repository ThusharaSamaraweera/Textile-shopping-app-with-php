<?php
// session_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    
    <!--toggle button-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link px-4 text-warning" href="../Home/index.php"><b><i class="bi bi-house mx-1"></i>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4 text-warning" href="../Home/products.php"><b><i class="bi bi-bag mx-1"></i>Products</b></a>
        </li>
        <?php
        include("../connection/db.php");

        if(!isset($_SESSION['user_name'])) {
          ?>
          <li class="nav-item">
          <a class="nav-link px-4 text-warning" href="../Signup&Login/signup.php"><b><i class="bi bi-person mx-1"></i>Sign-Up</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-4 text-warning" href="../Signup&Login/login.php"><b><i class="bi bi-box-arrow-in-right mx-1"></i>Log-in</b></a>
        </li>
          <?php
        }else{
            $user = $_SESSION['user_name'];
            ?>
            <li class="nav-item">
              <a class="nav-link px-4 text-warning" href="../Cart page/cart.php"><b><i class="bi bi-cart-plus mx-1"></i>Cart</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-4 text-warning" href="#"><b><i class="bi bi-person-circle mx-1"></i><?php echo $user;?></b></a>
            </li>
            <li class="nav-item" id=logout>
                <a class="nav-link px-4 text-warning" href="logout.php"><b><i class="bi bi-box-arrow-left mx-1"></i>Log-out</b></a>
            </li>
            <?php
        }
        ?>
        
      </ul>

    </div>
  </div>
</nav>
