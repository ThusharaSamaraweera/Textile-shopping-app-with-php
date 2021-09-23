<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<title>SignUP</title>
 <!-- alert JS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		#signupbtn{
			background-color: #EC7A27
		}
		.form-control{
			margin-top: 5px
		}
		.form-group {
			margin-top: 5px
		}
		.form-check {
			margin-top: 5px;
		}
		#signup{
			margin-top: 20px;
			text-align: center;
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
        .checkEmail {
            font-color: red;
        }
		.red-message {
            color: red;
        }
	</style>
</head>
<body>
	<?php
  session_start();
	include ("db.php");
    $errorMsg="";
	
	if( isset ( $_REQUEST['signupbtn'] ) ){
	
	$firstname	=	$_REQUEST['fname'];
	$lastname	=	$_REQUEST['lname'];
	$email  =	$_REQUEST['email'];
	$password =	$_REQUEST['password'];
	$hash = password_hash($password, PASSWORD_DEFAULT);

    // check email already exists
    $sql	= "SELECT * FROM customer WHERE email = '$email'";

	$result = $link->query($sql);
	$count = $result->num_rows;

  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  $_SESSION['password'] = $hash;

    if($count != 0){
        $errorMsg = 'Email already exists, Please try another Email.';
    }else{
        //send varification mail
        $otp = rand(100000,999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['email'] = $email;
        require "Mail/phpmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;

        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host="smtp.gmail.com";
        $mail->Port= 465;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='ssl';

        //shop account
        $mail->Username='kingsmentextile@gmail.com';
        $mail->Password='Kingsmen@admin';

        //send by shop email
        $mail->SetFrom('kingsmentextile@gmail.com', 'kingsmen');
        $mail->AddAddress($email);

        //HTML body
        $mail->IsHTML(true);
        $mail->Subject="Your verification code";
        $mail->Body="<p>Dear ".$lastname.", </p> <h3>Your verify OTP code is $otp <br></h3>
        <br><br>
        <p>With regrads,</p>
        <b>kingsmen Textile</b>";

        if(!$mail->send()){
            ?>
                <script>
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Register Failed, Invalid Email!',
                  })
                </script>
            <?php
        }else{
            ?>
            <script>
               Swal.fire({
                    icon: 'success',
                    title: '<?php echo "Register Successfully, OTP sent to " . $email ?>',
                    showConfirmButton: false,
                    timer: 1500
                })
                //window.location.replace('verification.php');
            </script>
            <!-- A meta tag that redirects after 5 seconds-->
            <meta http-equiv="refresh" content="2;url=verification.php">
            <?php
        }

    }

    //
	
	// $sql = "INSERT INTO customer (first_name, last_name, email, password) values ('$firstname', '$lastname', '$email', '$hash')";
	// $result	=	$link->query($sql);
	
	// header("location: index.php");
}
	
?>
	
	
<!-- Navbar -->
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
	
<!--signup	-->
<div class="container-md my-5">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-body">
			<div class="container">
				<h2>CREATE ACCOUNT</h2>
			</div>
          <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" class="needs-validation" novalidate>
			<div class="form-group row">
              <label for="fname" class="col-sm-4 col-form-label"> First Name </label>
              <div class="col-sm-8">
                <input
                      type="text"
                      name="fname"
                      id="fname"
                      class="form-control"
                      placeholder="Jhon"
					            required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide your First Name.</div>
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
                      placeholder="Jhon"
					            required
                    />
                    <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide your Last Name.</div>
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
                      placeholder="email@example.com"
					            required
                    />
                    <div class="red-message">
                        <?php echo $errorMsg; ?>
                    </div>
                    <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please provide a valid email.</div>
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-sm-4 col-form-label"> Password </label>
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
            <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                <div class="form-check">
                  <input
                        type="checkbox"
                        name="agreements"
                        id="agreements"
                        class="form-check-input"
						            required
                      />
                  <div class="invalid-feedback">You must accept our term and conditions!</div>
                  <label for="agreements" class="form-check-label"> I agree the terms and conditions. </label>
                </div>
              </div>
            </div>
            <div class="form-group row" id="signup">
              <div class="col-sm">
                <input type="submit" class="btn btn-secondary btn-block" id="signupbtn" name="signupbtn" value="Sign Up">
              </div>
            </div>
            <div class="form-group row" id="have-account">
              <div class="col-sm"><p>Already have an account? <a href="login.php">Login</a></p></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- javaScript	--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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