<?php 
session_start();
require_once "admin/config/db.php";

$userid = $_SESSION["id"];
//get cart id 
$cartid = $_SESSION['cartid'];
$userOrder = $_COOKIE['userOrder'];
$userOrder = json_decode($_COOKIE['userOrder'], true);
if (isset($_POST['order_db'])) {
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];
    $telephone = $_POST['telephone'];





//order item
$sql = $conn->prepare("INSERT INTO order_item ( `cart_id`,`quantity`)VALUES (:cart_id,:quantity)");

$sql->bindParam(":cart_id",$cartid );
$sql->bindParam(":quantity", $userOrder['item_quantity']);
$sql->execute();
$orderid = $conn->lastInsertId();


$payment_id = rand(100000,999999);
//check payment
$stmt = $conn->query("SELECT * FROM order_detail WHERE 'payment_id' = '$payment_id' ");
$stmt->execute();
$checkpay = $stmt->fetch();
if($checkpay){
    if($checkpay['paymeny_id'] == $payment_id){
        $payment_id = rand(100000,999999);
    }
}else{
    //order detail
        $sql = $conn->prepare("INSERT INTO order_detail (`id`, `user_id`,`payment_id`,`total`)VALUES (:id,:user,:payment_id,:total)");
        $sql->bindParam(":id",$orderid);
        $sql->bindParam(":user",$userid); 
        $sql->bindParam(":payment_id",$payment_id );
        $sql->bindParam(":total", $userOrder['item_price']);
        $sql->execute();
        
        if ($sql) {
                      //user address
                    $stmt = $conn->prepare("INSERT INTO users_address (`user_id`,`address_line_1`, `address_line_2`,`city`,`Postcode`,`country`,`telephone`)VALUES (:user_id,:address1,:address2,:city,:postcode,:country,:telephone)");
                    $stmt->bindParam(":user_id",$userid);
                    $stmt->bindParam(":address1",$address1);
                    $stmt->bindParam(":address2",$address2);
                    $stmt->bindParam(":city",$city);
                    $stmt->bindParam(":postcode",$postcode);
                    $stmt->bindParam(":country",$country); 
                    $stmt->bindParam(":telephone",$telephone );
                    $stmt->execute();
                        if ($stmt) {
                            $_SESSION['successOrder'] = "Recrod address successfully";
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                        
                        } else {
                            $_SESSION['error'] = "บันทึกที่อยู่ไม่สำเร็จ";
                            header('Location: ' . $_SERVER['HTTP_REFERER']);

                        }


   
    } else {
            $_SESSION['errorshop'] = "ไม่สำเร็จ";
            header('Location: ' . $_SERVER['HTTP_REFERER']);

        }

    }
}

?>