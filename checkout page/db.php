<?php
    $host = "localhost:3308";
    $user = "root";
    $pwd1 = "1234";


    $db = "textile_shop";

    $link = new mysqli($host, $user, $pwd1, $db);

    //     $sql = "SELECT name,img1 FROM item_details WHERE item_id=2";
    // $result = $link->query($sql);

    // if($result){
    //     $row = $result->fetch_array();
    //     echo $row[1];
    // }else{
    //     echo "error";
    // }

?>