<?php

// for thushara
$host	=	"localhost:3308";
$user	=	"root";
$passwd	=	"1234";
$db		=	"textile_shop";
// $port	=	"3308";

$link = new MySQLi($host, $user, $passwd, $db);

// $arr = array('s'=> 1100, 'm'=> 1300, 'l'=> 1500);
// $seArr = serialize($arr);

// $sql = "update item_details set price='$seArr' where item_id=103";
// $resut = $link->query($sql);
// if($resut){
//     echo "su";
// }else{
//     echo "er";
// }

?>