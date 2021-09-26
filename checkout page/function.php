<?php
	function getCustomerDetails(){
        include('./db.php');
        $getCustomerDetailssql1 = "SELECT first_name, last_name, email FROM customer WHERE id=$id";
        $resultCustomerDetails1 = $link->query($getCustomerDetailssql1);
        $customerDetails1 = $resultCustomerDetails1->fetch_array();
    
    }

                                  									// document.getElementById('country').value = "<?php echo $customerDetails2['country']; ?>";  
                             

?>