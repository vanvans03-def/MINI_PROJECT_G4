<?php 
session_start();
require_once "admin/config/db.php";



if (isset($_POST['submitbag'])) {
    date_default_timezone_set("Asia/Bangkok");
    $dttm = Date("Y-m-d G:i:s");  
    $userid = $_SESSION['id'];
    $pdid =  $_SESSION['order.id'];


    
}else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

//addcart

$userOrder = json_decode($_COOKIE['userOrder'], true);

$sql = $conn->prepare("INSERT INTO cart_item ( `user_id`,`product_id`,`date`,`quantity`)VALUES (:user,:product_id,:dttm,:quantity)");
$sql->bindParam(":user",$userid); 
$sql->bindParam(":product_id",$userOrder['item_id'] );
$sql->bindParam(":dttm", $dttm);
$sql->bindParam(":quantity", $userOrder['item_quantity']);
$sql->execute();
$cartid = $conn->lastInsertId();
$_SESSION['cartid'] = $cartid;
if ($sql) {
    $_SESSION['success'] = "Add Product to cart successfully";
    header('location: order.php');
  
} else {
    $_SESSION['errorshop'] = "ไม่สำเร็จ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}
//add order


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
 <?php 

?>
    </h1>
</body>
</html>