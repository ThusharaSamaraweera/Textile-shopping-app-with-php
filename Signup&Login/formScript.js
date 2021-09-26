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

  //check email

  var checkEmail = function() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(document.getElementById('email').value.match(mailformat)){
      document.getElementById('validateEmail').style.color = 'green';
      document.getElementById('validateEmail').innerHTML = 
      '<span><i class="fas fa-check-circle"></i> Valid Email</span>';
    }
    else{
      document.getElementById('validateEmail').style.color = 'red';
      document.getElementById('validateEmail').innerHTML = 
      '<span>Inalid Email !</span>';
    }
  }

  //check password lenth
  var checkLength = function() {
    if(document.getElementById('password').value.length < 5){
      document.getElementById('lenthPassword').style.color = 'red';
      document.getElementById('lenthPassword').innerHTML = 
      '<span>Password should contain atleast 6 characters</span>';
    }else {
      document.getElementById('lenthPassword').style.color = 'green';
      document.getElementById('lenthPassword').innerHTML = 
      '<span>Looks Good</span>';
    }
  }

  //check confirm password
  var checkConfirm = function() {
    if(document.getElementById('password').value == document.getElementById('cpassword').value){
      document.getElementById('alertPassword').style.color = 'green';
      document.getElementById('alertPassword').innerHTML = 
      '<span><i class="fas fa-check-circle"></i>Match !</span>';
    } else {
      document.getElementById('alertPassword').style.color = 'red';
      document.getElementById('alertPassword').innerHTML = 
      '<span>Not matching !</span>';
    }
  }