<?php 
session_start();
require_once "admin/config/db.php";



if (isset($_POST['submitbag'])) {
    date_default_timezone_set("Asia/Bangkok");
    $dttm = Date("Y-m-d G:i:s");  
    $userid = $_SESSION['id'];
    $pdid =  $_SESSION['order.id'];


}else{
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$quan  =1 ;
//addcart
$sql = $conn->prepare("INSERT INTO cart_item ( `user_id`,`product_id`,`date`,`quantity`)VALUES (:user,:product_id,:dttm,:quantity)");
$sql->bindParam(":user",$userid); 
$sql->bindParam(":product_id",$pdid );
$sql->bindParam(":dttm", $dttm);
$sql->bindParam(":quantity", $quan);
$sql->execute();
 
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