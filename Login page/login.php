<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	  
   <!-- alert JS -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Style-->
	  <style>
		#loginbtn{
			background-color: #EC7A27;
		}
		.form-control{
			margin-top: 5px;
		}
		.form-group {
			margin-top: 5px;
		}
		.form-check {
			margin-top: 5px;
		}
		#login {
			margin-top: 20px;
		}
		h2 {
			text-align: center;
		}
		.container {
			margin-bottom: 30px;
		}

    #have-account {
      margin-top: 10px;
      text-align: center;
    }
		
	</style>
  </head>

  <body>
	  
	  <?php
	include ("db.php");
	
	if( isset ( $_REQUEST['loginbtn'] ) ){
	
	$lemail  =	$_REQUEST['email'];
	$lpassword =	$_REQUEST['password'];
	
	//echo $lemail." ".$lpassword;
	
	$sql= "SELECT * FROM customer";
	$result	=	$link->query($sql);
	
	$flag = 0;
		
		while($row = $result->fetch_array()){
			$email = $row['email'];
			$hash  = $row['password'];
			
			if ( $lemail == $email and $verify = password_verify($lpassword, $hash)){
				$user_name = $row['last_name'];
				$id = $row['id'];
				$flag = 1;
			}
		}
		
		if($flag == 1){
			session_start();
			$_SESSION['user_name'] = $user_name;
			$_SESSION['id'] = $id;
			header("location: home.php");
		} else{
      ?>
      <script>
       Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Your email or password was incorrect!',
        })
      </script>
      <?php
	}
	}
	?>
	  
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"> <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item"> <a class="nav-link disabled">Disabled</a> </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!-- End Header -->

    <!-- Horizontal forms -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-body">
				<div class="container">
				<h2>Login</h2>
			</div>
              <form action="" method="POST" class="needs-validation" novalidate>
                <div class="form-group row">
                  <label for="email" class="col-sm-4 col-form-label">
                    Email
                  </label>
                  <div class="col-sm-8">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      placeholder="email@example.com"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide a valid email.</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-4 col-form-label">
                    Password
                  </label>
                  <div class="col-sm-8">
                    <input
                      type="password"
                      name="password"
                      id="password"
                      class="form-control"
                      placeholder="Password"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide Password.</div>
                  </div>
                </div>
                
                <div class="form-group row" id="login">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-8">
                    <input type="submit" class="btn btn-secondary btn-block" id="loginbtn" name="loginbtn" value="Login">
                  </div>
                </div>
                <div class="form-group row" id="have-account">
                   <div class="col-sm"><p>Don't have an account? <a href="signup.php">Sign UP Now.</a></p></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- validation JS -->
    <script>
        (function () {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.prototype.slice.call(forms)
            .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                  event.preventDefault()
                  event.stopPropagation()
                }

                form.classList.add('was-validated')
              }, false)
            })
        })()
    </script>
    
  </body>
</html>