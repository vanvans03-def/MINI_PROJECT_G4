<?php 
session_start();
require_once "admin/config/db.php";

?>

<?php   
/*
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';*/
  $name = '';
     
  
  $cart = array('');

    if (isset($_POST['shoping'])) {
   $name = $_POST["porduct_name"];
    $descirp = $_POST["color"];
    $rom = $_POST["rom"];
    $color = array("สีเขียวอัลไพน์","สีเชียร์ร่าบลู","สีมิดไนท์","สีทอง","สีขาว");

   

    }


$stmt = $conn->query("SELECT * FROM product  WHERE name = '$name' AND descrip = '$color[$descirp]' AND rom = '$rom' ");
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

/*
//cart seesion
if($_POST=='shopping' && !empty($data['product_id'])){
    if(isset($_SESSION['cart'] [$data['product_id']])){
        $_SESSION['cart'][$data['product_id']]++;
    }else{
        $_SESSION['cart'][$data['product_id']]=1;
    }
}

if($shop=='remove' && !empty($data['product_id'])){
    if(isset($_SESSION['cart'] [$data['product_id']])){
        unset($_SESSION['cart'][$data['product_id']]);
    
    }
}*/

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> 

<?php echo $_SESSION['id'];
echo  $pd_id. "<br>";
echo $dttm. "<br>";
echo $quantity. "<br>";
  ?>
</h1>
</body>
</html>
