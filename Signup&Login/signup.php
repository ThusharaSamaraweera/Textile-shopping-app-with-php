<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- fontawesome -->
  <script src="https://kit.fontawesome.com/a704e7bb80.js" crossorigin="anonymous"></script>
<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<title>SignUP</title>
 <!-- alert JS -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- style -->
  <link rel="stylesheet" href="formStyle.css">
</head>
<body>
	<?php
  session_start();
	include ("../connection/db.php");
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

  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;
  $_SESSION['password'] = $hash;

    if($count != 0){
        $errorMsgEmail = 'Email already exists, Please try another Email.';
    }
    // if(strlen($password)<6){
    //   $errorMsgPwd = 'Password should contain atleast 6 characters.';
    // }
    else{
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
            <!-- A meta tag that redirects after 2 seconds-->
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
	
	
<!-- Header -->
<?php 
include("../Header/header.php");
?>

	
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
              <label for="fname" class="col-sm-4 col-form-label text-md-left"> First Name </label>
              <div class="col-sm-8">
                <input
                      type="text"
                      name="fname"
                      id="fname"                     
                      class="form-control"
                      placeholder="Jhon"
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
                      placeholder="Jhon"
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

<!-- bootstrap javaScript	--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- script -->
<script type="text/javascript" src="formScript.js"></script>
</body>
</html>