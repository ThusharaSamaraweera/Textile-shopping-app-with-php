<?php

    function related_product($ProductID){
        // require('../../connection/db.php');

        // get name, img path , price 
        // include("./connection/db.php");
        $sql = "SELECT name, category, price FROM item_details WHERE id=$ProductID";
        $result = $link->query($sql);

        $element = "
            <div class=\"col col-lg-3 col-md-3 col-sm-3 col-xs-4\">
                <div class=\"single-product\">
                    <div class=\"product-img\">
                        <a href=\"product-details.html\">
                            <img class=\"default-img\" src=\"./Image/ProductImages/1/1.1.jpg\" alt=\"#\">
                            <img class=\"hover-img\" src=\"./Image/ProductImages/1/1.1.jpg\" alt=\"#\">
                        </a>
                        <div class=\"button-head\">
                            <div class=\"product-action-2\">
                                <a title=\"Add to cart\" href=\"#\">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"product-content\">
                        <h3><a href=\"product-details.html\">Awesome Pink Show</a></h3>
                        <div class=\"product-price\">
                            <span>$29.00</span>
                        </div>
                    </div>
                </div>
            </div> 
        ";

        echo $element;
    }


?>