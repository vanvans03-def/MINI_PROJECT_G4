<?php 
session_start();
require_once "admin/config/db.php";



$quantity = 1;  
if (isset($_POST['submitbag'])) {
    date_default_timezone_set("Asia/Bangkok");
    $dttm = Date("Y-m-d G:i:s");  
    $userid = $_SESSION['id'];
    $pdid =  $_SESSION['order.id'];
    $quantity = 1;
  

}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

  
$sql = $conn->prepare("INSERT INTO cart_item ( `user_id`,`product_id`,`date`,`quantity`)VALUES (:user,:product_id,:dttm,:quantity)");
$sql->bindParam(":user",$userid); 
$sql->bindParam(":product_id",$pdid );
$sql->bindParam(":dttm", $dttm);
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
 
    </h1>
</body>
</html>