<?php

use LDAP\Result;

session_start();
require_once "admin/config/db.php";


/*
if (isset($_POST['shoping'])) {
    $name = $_POST["porduct_name"];
    $rom = $_POST["rom"];
    
$stmt = $conn->query("SELECT * FROM product  WHERE name = '$name'  AND rom = '$rom' AND quantity !=0 ");
$stmt->execute();
$data = $stmt->fetch();
if (!$data) {
    echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
}

    $_SESSION['order.id'] = $data['product_id'];
  
if ($data) {
    $_SESSION['success'] = "Add Product to cart successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  
} else {
    $_SESSION['errorshop'] = "ขออภัยสินค้าหมด";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

$sql = $conn->prepare("INSERT INTO cart_item ( `user_id`,`product_id`,`date`,`quantity`)VALUES (:user,:product_id,:dttm,:quantity)");
$sql->bindParam(":user", $_SESSION['id']);
$sql->bindParam(":product_id",  $_SESSION['order.id']);
$sql->bindParam(":dttm", $dttm);
$sql->bindParam(":quantity", $quantity);
$sql->execute();

if ($sql) {
    $_SESSION['success'] = "Data has been inserted successfully";
   
} else {
    $_SESSION['error'] = "Data has not been inserted successfully";
  
}




}




*/
?>

<?php   


 if (isset($_POST['shoping'])) {
    $name = $_POST["product_name"];
    $descirp = $_POST["color"];
    $rom = $_POST["rom"];

    $stmt = $conn->query("SELECT * FROM product WHERE `name` = '$name' AND `quantity` > 0 AND `rom` = $rom AND `descrip` = '$descirp'");
    $stmt->execute();
    $data = $stmt->fetch();
    if (!$data) {
        echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
    }
    
        $_SESSION['order.id'] = $data['product_id'];
      
    if ($data) {
        $_SESSION['success'] = "Add Product to cart successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      
    } else {
        $_SESSION['errorshop'] = "ขออภัยสินค้าหมด";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    }
    
    $sql = $conn->prepare("INSERT INTO cart_item ( `user_id`,`product_id`,`date`,`quantity`)VALUES (:user,:product_id,:dttm,:quantity)");
    $sql->bindParam(":user", $_SESSION['id']);
    $sql->bindParam(":product_id",  $_SESSION['order.id']);
    $sql->bindParam(":dttm", $dttm);
    $sql->bindParam(":quantity", $quantity);
    $sql->execute();
    
    if ($sql) {
        $_SESSION['success'] = "Data has been inserted successfully";
       
    } else {
        $_SESSION['error'] = "Data has not been inserted successfully";
      
    }
    
}





$astmt = $conn->query("SELECT * FROM product  " );
    $astmt->execute();
    $result = array();
    while ($row = $astmt->fetch(PDO::FETCH_ASSOC)) {
        $result[] = $row['descrip'];
    }
    echo '<pre>', print_r($result), '</pre>';
?>
