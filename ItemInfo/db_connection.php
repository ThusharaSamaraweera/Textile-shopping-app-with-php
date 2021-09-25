<?php
    $host = "localhost:3308";
    $user = "root";
    $pwd1 = "1234";
    $db = "shop";

    // $db = "textile_shop";

    $link = new mysqli($host, $user, $pwd1, $db);

    // $sql = "SELECT name,img_path1 FROM item_details WHERE id=2";
    // $result = $link->query($sql);

    // if($result){
    //     $row = $result->fetch_array();
    //     echo $row[1];
    // }else{
    //     echo "error";
    // }


    
    // $tags = array('category1', 'category2', 'category3');

    // $serializeTags = serialize($tags);

    // $sql = "UPDATE item_details SET tags='$serializeTags' WHERE id=2";
    // $result = $link->query($sql);
    // if($result){
    //     echo "successfull";
    // }else{
    //     echo "error";
    // }


    // $sql = "select tags, name from item_details where id=2";
    // $result = $link->query($sql);
    // if($result){
    //     $row = $result->fetch_array();
    //     $tags_unserialize = unserialize($row['tags']);
    //     echo $tags_unserialize[1];
    // }else{
    //     echo "error";
    // }

    
    // $qty[] = array("s_qty"=>"100", "m_qty"=>"100", "l_qty"=>"50");

    // $serializeQty = serialize($qty);

    // $sql = "UPDATE item_details SET qty='$serializeQty' WHERE item_id=4";
    // $result = $link->query($sql);
    // if($result){
    //     echo "successfull";
    // }else{
    //     echo "error";
    // }

    // $qty[] = array("s_price"=>"1100.00", "m_price"=>"1400", "l_price"=>"1550");

    // $serializePrice = serialize($qty);

    // $sql = "UPDATE item_details SET price='$serializePrice' WHERE item_id=4";
    // $result = $link->query($sql);
    // if($result){
    //     echo "successfull";
    // }else{
    //     echo "error";
    // }
    
?>