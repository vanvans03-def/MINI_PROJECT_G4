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
    if (isset($_POST['shoping'])) {
   $name = $_POST["porduct_name"];
    $descirp = $_POST["color"];
    $rom = $_POST["rom"];
    $color = array("สีเขียวอัลไพน์","สีเชียร์ร่าบลู","สีมิดไนท์","สีทอง","สีขาว");
   
    
    $dttm = Date("Y-m-d G:i:s");
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
    $_SESSION['error'] = "ขออภัยสินค้าหมด";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

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
}



    //order
/*
    $sql = $conn->prepare("SELECT * FROM `product`( `name`, `descrip`,`rom`, `quantity`, `category_id`, `price`, `img`) VALUES (:name,:descrip,:rom,:quantity,:category_id,:price,:img) ");      
    $sql->bindParam(":name", $name);
    $sql->bindParam(":descrip", $descirp);
    $sql->bindParam(":rom", $rom);
    $sql->bindParam(":quantity", $quantity);
    $sql->bindParam(":category_id", $category_id);
    $sql->bindParam(":price", $price);
    $sql->bindParam(":img", $fileNew);
    $sql->execute();
*/

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
   
</h1>
</body>
</html>
