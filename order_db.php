<?php 
session_start();
require_once "admin/config/db.php";



$quantity =  $_COOKIE['quantity'];
$item_array = $item_array;

$sql = $conn->prepare("INSERT INTO order_detail ( `user_id`,`cart_id`,`quantity`)VALUES (:user,:cart_id,:quantity)");
$sql->bindParam(":user",$userid); 
$sql->bindParam(":cart_id",$cartid );
$sql->bindParam(":quantity", $quantity);
$sql->execute();
 
if ($sql) {
    $_SESSION['success'] = "Add Product to cart successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  
} else {
    $_SESSION['errorshop'] = "ไม่สำเร็จ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

?>