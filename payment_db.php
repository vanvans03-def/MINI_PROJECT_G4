<?php 
session_start();
require_once "admin/config/db.php";
if (isset($_SESSION['email'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  
}

$userid = $_SESSION["id"];
$paymentid =  $_SESSION['payment_id'];
$orderid = $_SESSION['orderid'];
$status = "ชำระเงินแล้ว(รอยืนยัน)";

if(isset($_POST['addUserPay'])){

    $type = $_POST['type'];
    $provider = $_POST['provider'];
    $account = $_POST['account_no'];
    $expiry = $_POST['expiry'];
   
 

$sql = $conn->prepare("INSERT INTO users_payment ( `user_id`,`Payment_type`,`Provider`,`Account_no`,`expiry`)VALUES (:id,:Payment_type,:provider,:Account_no,:expiry)");
$sql->bindParam(":id",$userid );
$sql->bindParam(":Payment_type", $type);
$sql->bindParam(":provider",$provider );
$sql->bindParam(":Account_no",$account );
$sql->bindParam(":expiry",$expiry );
$sql->execute();
if ($sql) {
    $_SESSION['success'] = "Recrod address successfully";
    header('location: payment.php');

} else {
    $_SESSION['error'] = "บันทึกข้อมูลบัญชีไม่สำเร็จ";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

}


if(isset($_POST['payment'])){

 $provider = $_POST['bank'];
 $img = $_FILES['img'];





 $allow = array('jpg', 'jpeg', 'png');
 $extension = explode('.', $img['name']);
 $fileActExt = strtolower(end($extension));
 $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
 $filePath = 'paymentImg/'.$fileNew;

 
 if (in_array($fileActExt, $allow)) {
        if ($img['size'] > 0 && $img['error'] == 0) {
            if (move_uploaded_file($img['tmp_name'], $filePath)) {
            
                $sql = $conn->prepare("INSERT INTO `payment_details`( `payment_id`, `order_id`,`status`,`provider`, `img`) VALUES (:payment_id,:order_id,:status,:provider,:img) ");      
                $sql->bindParam(":payment_id", $paymentid);
                $sql->bindParam(":order_id", $orderid);
                $sql->bindParam(":status", $status);
                $sql->bindParam(":provider", $provider);
                $sql->bindParam(":img", $fileNew);
                $sql->execute();
                
                if ($sql) {
                    $_SESSION['success'] = "Data has been inserted successfully";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                } else {
                    $_SESSION['errorpay'] = "มีบางอย่างผิดพลาดเช่นการเลือกธนาคารหรืออัพรูปซ้ำ";
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    
                }

            }
        }
    }
}
