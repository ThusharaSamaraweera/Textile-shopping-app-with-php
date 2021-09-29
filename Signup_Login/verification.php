<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("../Header/head.html");
    ?>
   <!-- alert JS -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- css -->
   <style>
       .container {
           margin-top:10%;
       }
       #Verify {
            background-color: #EC7A27;
            margin-top: 10px;
       }
       #cancel {
          margin-top: 10px; 
       }
       .form-group {
			margin-top: 5px;
		}
        header {
            color: #EC7A27;
            background-color: black;
            text-align: center;
        }
   </style>
</head>
<body>
    <?php
    include("../Header/header.php");
    ?>
    <header>
        <h1>Account Verification</h1>
    </header>
<?php 
    session_start();
    include ("../connection/db.php");
    if(isset($_REQUEST["verify"])){
        $otp = $_SESSION['otp'];
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];
        $password = $_SESSION['password'];
        $email = $_SESSION['email'];
        $otp_code = $_REQUEST['otp_code'];

        if($otp != $otp_code){
            ?>
           <script>
               Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid OTP code!',
                })
           </script>
           <?php
        }else{
            $sql = "INSERT INTO customer (first_name, last_name, email, password, user_type) values ('$firstname', '$lastname', '$email', '$password', 'c')";
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
            <meta http-equiv="refresh" content="2;url=login.php">
             <?php
        }

    }

?>



<!-- verification form -->
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verify Your Account</div>
                    <div class="card-body">
                        <form action="#" method="POST" class="needs-validation" novalidate>
                            <div class="form-group row">
                                <label for="otp_code" class="col-md-4 col-form-label text-md-right">OTP Code</label>
                                <div class="col-md-6">
                                    <input 
                                    type="text" 
                                    id="otp" 
                                    class="form-control" 
                                    name="otp_code" 
                                    required 
                                    autofocus
                                    autocomplete="off" >
                                    <div class="invalid-feedback">Please provide your OTP.</div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="button" class="btn btn-secondary btn-block" id="cancel" value="Cancel" name="cancel" onclick="javascript:window.location='../Home/index.php';">
                                <input type="submit" class="btn btn-secondary btn-block" id="Verify" value="Verify" name="verify">
                            </div>
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