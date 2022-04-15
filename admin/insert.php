<?php 

session_start();
require_once "config/db.php";
if (isset($_SESSION['email'])) {
    $_SESSION['error'] = "มีบ้างอย่างผิดพลาด";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
if (isset($_POST['submit'])) {
   
    $productname = $_POST['productname'];
    $desc = $_POST['desc'];
    $rom = $_POST['rom'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $img = $_FILES['img'];
  
        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode('.', $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'uploads/'.$fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {
                   
                    $sql = $conn->prepare("INSERT INTO `product`( `name`, `descrip`,`rom`, `quantity`, `category_id`, `price`, `img`) VALUES (:name,:descrip,:rom,:quantity,:category_id,:price,:img) ");      
                    $sql->bindParam(":name", $productname);
                    $sql->bindParam(":descrip", $desc);
                    $sql->bindParam(":rom", $rom);
                    $sql->bindParam(":quantity", $quantity);
                    $sql->bindParam(":category_id", $category_id);
                    $sql->bindParam(":price", $price);
                    $sql->bindParam(":img", $fileNew);
                    $sql->execute();


                    if ($sql) {
                        $_SESSION['success'] = "Data has been inserted successfully";
                        header("location: index.php");
                    } else {
                        $_SESSION['error'] = "Data has not been inserted successfully";
                        header("location: index.php");
                    }
                }
            }
        }
}
if (isset($_POST['addcate'])) {
    $cateID = $_POST['cateID'];
    $CateName = $_POST['CateName'];

    $sql = $conn->prepare("INSERT INTO `product_category`( `category_id`,`name`) VALUES (:cateId,:name)");      
                    $sql->bindParam(":cateId", $cateID);
                    $sql->bindParam(":name", $CateName);
                    $sql->execute();
                    if ($sql) {
                        $_SESSION['success'] = "Data has been inserted successfully";
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    } else {
                        $_SESSION['error'] = "Data has not been inserted successfully";
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    }
                }



?>