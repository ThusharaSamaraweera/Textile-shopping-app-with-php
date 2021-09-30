<?php

function items_total_ammount($items){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    return $total;

}

function shipping($items, $shipping_percent){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    $shipping_fee = ($total*$shipping_percent)/100;
    return $shipping_fee;
}

function payment($items, $shipping_percent){
    $total = 0;
    for($i = 0; $i < sizeof($items); $i++){
        $total = $total + ($items[$i][5]*$items[$i][6]);
    }
    $shipping_fee = ($total*$shipping_percent)/100;
    $payment_ammount = $total + $shipping_fee;
    return $payment_ammount;
}

?>