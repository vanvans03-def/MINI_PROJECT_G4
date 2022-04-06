<?php 
session_start();
require_once "admin/config/db.php";

$userid = $_SESSION["id"];
//get cart id 
$stmt = $conn->query("SELECT * FROM `cart_item` WHERE `user_id` = $userid");
$stmt->execute();
$data = $stmt->fetch();




//order 

$userOrder = json_decode($_COOKIE['userOrder'], true);
$sql = $conn->prepare("INSERT INTO order_detail ( `user_id`,`cart_id`,`quantity`)VALUES (:user,:cart_id,:quantity)");
$sql->bindParam(":user",$userid); 
$sql->bindParam(":cart_id",$data['cart_id'] );
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