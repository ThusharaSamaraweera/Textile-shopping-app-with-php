<?php

function item_info($imagesPaths, $productName, $productPrice, $productDescription){
    $element = "
        <div class=\"row\">
            <div class=\"col col-12 col-sm-12 col-md-6 item-imgs\">
                <div class=\"row\">
                    <div class=\"col col-3 first-img-column\">
                        <div class=\"row\">
                            <div class=\"col col-12\">
                                <input type=\"image\" class=\"small-images img-fluid\" src=\"$imagesPaths[0]\" alt=\"image\" id=\'image1\' style=\"width: auto;\"
                                    onclick=\"largeImage(id)\"
                                > 
                                <input type=\"image\" class=\"small-images img-fluid\" src=\"$imagesPaths[1]\" alt=\"image\" id=\'image2\' style=\"width: auto;\"
                                    onclick=\"largeImage(id)\"
                                > 
                                <input type=\"image\" class=\"small-images img-fluid\" src=\"$imagesPaths[2]\" alt=\"image\" id=\'image3\' style=\"width: auto;\"
                                    onclick=\"largeImage(id)\"
                                > 
                            </div>
                        </div>
                    </div>

                    <div class=\"col col-9 second-img-column\">
                        <img class=\"large-images img-fluid\" src=\"$imagesPaths[0]\" alt=\"image\" id=\"large-img\">
                    </div>

                    <script>
                        function largeImage(id){
                            let largeImage = document.getElementById('large-img');
                            let smallImage = document.getElementById(id);
                            largeImage.src = smallImage.src;
                        }
                    </script>
                </div>
            </div>

            <div class=\"col col-sm col-md details\">
                <div class=\"row title\">
                    <h3><b>$productName</b></h3>
                </div>
                <div class=\"row price\">
                    <h4>Rs. $productPrice</h4>
                </div>

                <div class=\"row paragraph\">
                    <p style=\"color:gray\">$productDescription</p>
                </div>

                <div class=\"row sizes\">
                    <h6>size</h6>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                        <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\" checked>
                        <label class=\"btn btn-outline-primary\" for=\"btnradio1\">S</label>

                        <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
                        <label class=\"btn btn-outline-primary\" for=\"btnradio2\">M</label>

                        <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
                        <label class=\"btn btn-outline-primary\" for=\"btnradio3\">XL</label>
                    </div>
                </div>


                <div class=\"row qty-and-add-to-card\">
                    <div class=\"col col-xs-6 col-sm-4 qty\">
                        <i class=\"fa fa-minus-circle\" style=\"font-size: 30px;\" aria-hidden=\"true\"></i>
                        <label class=\"count\"> 1 </label>
                        <i class=\"fa fa-plus-circle\" style=\"font-size: 30px;\" aria-hidden=\"true\"></i>
                    </div>
                    
                    <div class=\"col col-xs col-sm add-to-cart\">
                        <button type=\"button\" class=\"btn btn-danger\">ADD TO CART</button>   
                    </div>
                </div>
            </div>

        </div>
    ";
    echo $element;
}


?>