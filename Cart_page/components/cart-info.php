<?php

function cart_rows($image_path, $item_name, $size, $unit_prize, $quantity){
    
    $item_total = $unit_prize*$quantity;
    $row = "
    <tr>
        <td class=\"image\" data-title=\"No\">
        <img src=\"$image_path\" alt=\"#\" style=\"width:100px; height:120px;\">
        </td>
        
        <td class=\"product-des\" data-title=\"Description\">
            <p class=\"product-name\"><a href=\"#\">$item_name</a></p>
        </td>

        <td class=\"size\" data-title=\"Size\"><span>$size</span></td>

        <td class=\"price\" data-title=\"Price\">
            <span>$unit_prize</span>
        </td>

        <td class=\"input-number\" data-min=\"1\" data-max=\"100\" data-title=\"Quantity\">
            <form  method=\"POST\">
                <div class=\"qty\">
                    <i type=\"button\" class=\"fa fa-minus-circle\" aria-hidden=\"true\"
                        onclick=\"increaseQty()\"
                    ></i>
                    
                    <input class=\"qtyInput\" id=\"qtyInput\" type=\"number\" value=\"1\" min=\"1\" max=\"10\" >
                    
                    <i type=\"button\" class=\"fa fa-plus-circle\" aria-hidden=\"true\"
                        onClick=\"discreaseQty()\"
                    ></i>
                </div>            
            </form>


        </td>

        <td class=\"total-amount\" data-title=\"Total\"><span>Rs..$item_total</span></td>
        
        <td class=\"action\" data-title=\"Remove\"><a href=\"#\"><i class=\"ti-trash remove-icon\"></i></a></td>
    </tr>
    ";
    echo $row;
}

function items_total_ammount($items){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    echo $total;

}

function shipping($items, $shipping_percent){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    $shipping_fee = ($total*$shipping_percent)/100;
    echo $shipping_fee;
}

function payment($items, $shipping_percent){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    $shipping_fee = ($total*$shipping_percent)/100;
    $payment_ammount = $total + $shipping_fee;
    echo $payment_ammount;
}

function row_info($items){
    for($i = 0; $i < sizeof($items); $i++){
        cart_rows($items[$i][0], $items[$i][2], $items[$i][3], $items[$i][4], $items[$i][5]);
    }
    
}



?>