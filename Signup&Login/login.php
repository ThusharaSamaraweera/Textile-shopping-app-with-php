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
<link rel="stylesheet" href="formStyle.css">
  </head>

  <body>
	  
	  <?php
	include ("../connection/db.php");
	
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
      ?>
             <script>
                 Swal.fire({
                    icon: 'success',
                    title: 'Successfully logged in',
                    showConfirmButton: false,
                    timer: 1500
                })
             </script>
             <!-- A meta tag that redirects after 5 seconds-->
            <meta http-equiv="refresh" content="2;url=../Home/index.php">
            <?php
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
      <?php 
      include("../Header/header.php");
      ?>
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
    <script type="text/javascript" src="formScript.js"></script>
    
  </body>
</html>