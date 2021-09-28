<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      include("../../Header/head.html");
?>

    <!-- fontawesome -->
  <script src="https://kit.fontawesome.com/a704e7bb80.js" crossorigin="anonymous"></script>

<!-- alert JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- style -->
 <link rel="stylesheet" href="../Signup&Login/formStyle.css">
</head>
<body>
<?php
  session_start();
	include ("../../connection/db.php");
    $errorMsgEmail = $errorMsgPwd = $errorMsgCpwd = "";
	
	if( isset ( $_REQUEST['signupbtn'] ) ){
	
	$firstname	=	$_REQUEST['fname'];
	$lastname	=	$_REQUEST['lname'];
	$email  =	$_REQUEST['email'];
	$password =	$_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
	$hash = password_hash($password, PASSWORD_DEFAULT);

    // check email already exists
    $sql	= "SELECT * FROM customer WHERE email = '$email'";

	$result = $link->query($sql);
	$count = $result->num_rows;


    if($count != 0){
        $errorMsgEmail = 'Email already exists, Please try another Email.';
    }
    else{
        $sql = "INSERT INTO customer (first_name, last_name, email, password, user_type) values ('$firstname', '$lastname', '$email', '$hash', 'a')";
        $result	=	$link->query($sql);
        ?>
         <script>
             Swal.fire({
                icon: 'success',
                title: 'Verfiy account done, you may login now',
                showConfirmButton: false,
                timer: 1500
            })
             //  window.location.replace("login.php");
         </script>
         <!-- A meta tag that redirects after 5 seconds-->
        <meta http-equiv="refresh" content="2;">
         <?php
    }
}
	
?>

<div class="container-md my-3">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <div class="card">
        <div class="card-body">
			<div class="container">
				<h2>Add Admin</h2>
			</div>
          <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" class="needs-validation" novalidate>
			<div class="form-group row">
              <label for="fname" class="col-sm-4 col-form-label text-md-left"> First Name </label>
              <div class="col-sm-8">
                <input
                      type="text"
                      name="fname"
                      id="fname"                     
                      class="form-control"
                      placeholder="First Name"
					            required
                    />                   
                  <div class="invalid-feedback">Please provide your First Name.</div>
                  <p id="validateName"></p>
              </div>
            </div>
			<div class="form-group row">
              <label for="lname" class="col-sm-4 col-form-label"> Last Name </label>
              <div class="col-sm-8">
                <input
                      type="text"
                      name="lname"
                      id="lname"
                      class="form-control"
                      placeholder="Last Name"
					            required
                    />                  
                  <div class="invalid-feedback">Please provide your Last Name.</div>
                  <p id="validateName"></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="email" class="col-sm-4 col-form-label"> Email </label>
              <div class="col-sm-8">
                <input
                      type="email"
                      name="email"
                      id="email"
                      class="form-control"
                      onkeydown = 'checkEmail()'
                      placeholder="email@example.com"
					            required
                      autocomplete="off" 
                    />                    
                    <div class="red-message">
                        <?php echo $errorMsgEmail; ?>
                    </div>                    
                  <div class="invalid-feedback">Please provide a valid email.</div>
                  <p id="validateEmail"></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-4 col-form-label"> Password</label>
              <div class="col-sm-8">
                <input
                      type="password"
                      name="password"
                      id="password"
                      class="form-control"
                      onkeyup = 'checkConfirm()'
                      onkeydown = 'checkLength()'
                      placeholder="Password (Min 6 characters)"
					            required
                    />                   
                  <div class="invalid-feedback">Please provide Password.</div>
                  <p id="lenthPassword"></p>
              </div>
            </div>
            <div class="form-group row">
              <label for="cpassword" class="col-sm-4 col-form-label">Confirm Password</label>
              <div class="col-sm-8">
                <input
                      type="password"
                      name="cpassword"
                      id="cpassword"
                      onkeyup = 'checkConfirm()'
                      class="form-control"
                      placeholder="Confirm Password"
					            required
                    />                   
                  <div class="invalid-feedback">Please provide Password.</div>
                  <p id="alertPassword"></p>
              </div>
            </div>
            <div class="form-group row" id="signup">
              <div class="col-sm">
                <input type="submit" class="btn btn-secondary btn-block" id="signupbtn" name="signupbtn" value="ADD">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- bootstrap javaScript	--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- script -->
<script type="text/javascript" src="../Signup&Login/formScript.js"></script>
</body>
</html>