<?php
session_start();
require_once "admin/config/db.php";


$_SESSION['order.id'];
$userid = $_SESSION['id'];
$pd_id = $_SESSION['order.id'];

$quantity = 1;

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}







if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header('location: login.php');
}





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/js/bootstrap.js">


    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/Mini_Project_G4/font.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <!-- Bootstrap CSS -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>ชำระเงิน-Apple (TH)</title>
    <link rel="icon" href="http://127.0.0.1/Mini_Project_G4/images/icons/apple.png" type="image/icon type">
    <style>
        .currSign:before {
            content: '฿';
        }
    </style>

</head>
<header>
        <div class="my-container">
            <nav class="my-nav">
                <ul class="my-nav-list my-nav-list-mobile">
                    <li class="my-nav-item">
                        <div class="mobile-menu">
                            <span class="line line-top"></span>
                            <span class="line line-bottom"></span>
                        </div>
                    </li>
                    <li class="my-nav-item">
                        <a href="index.php" class="my-nav-link my-nav-link-apple"></a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link my-nav-link-bag"></a>
                    </li>
                </ul>
                <!-- /.nav-list nav-list-mobile -->
                <ul class="my-nav-list my-nav-list-larger">
                    <li class="my-nav-item my-nav-item-hidden">
                        <a href="index.php" class="my-nav-link my-nav-link-apple"></a>
                    </li>
                    <li class="my-nav-item">
                        <a href="store.php" class="my-nav-link">Store</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="login.php" class="my-nav-link">Mac</a>
                    </li>
                    <li class="my-nav-item">
                        <a  class="my-nav-link">iPad</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="iphone.php" class="my-nav-link">iPhone</a>
                    </li>
                    <li class="my-nav-item">
                        <a  class="my-nav-link">Watch</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="airpods.php" class="my-nav-link">AirPods</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="TV.php" class="my-nav-link">TV</a>
                    </li>
                    <li class="my-nav-item">
                        <a  class="my-nav-link">Music</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="accessories.php" class="my-nav-link">Accessories</a>
                    </li>
                    <a href="mybag.php" class="my-nav-link">Mybag</a>
                    </li>

                    <li class="my-nav-item nav-item dropdown">
                        <a href="#" class="my-nav-link-search"></a>
                    </li>
                    <li class="my-nav-item my-nav-item-hidden ">
                        <a href="#" class="my-nav-link my-nav-link-bag"></a>
                    </li>
                    <li class="y-nav-item" style="padding-bottom:10px;">
                        <a href="index.php?logout='1'" class="buttonLogout" style="height:25px;" >
                            ออกจากระบบ
                            <!--logged information-->
                            <?php if (isset($_SESSION['email'])) : ?>
                                <p class="fs-4 fw-bold text-danger"></p>
                            <?php endif ?>
                        </a>
                    </li>


                </ul>
                <!-- /.nav-list nav-list-larger -->
            </nav>
        </div>
    </header>

<body>

    <div class="container-fluid my-5"> <br> <br>
        <div class="my-container ">

            <div class="row justify-content-md-left">
                
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-start fw-bold fs-2">กระเป๋าสินค้าของฉัน/รอยืนยัน</p>
                        </div>

                        <div class="col">
                            <a href="login.php" class="text-end fs-5 cta-linkr"></a>
                        </div>
                        <div class="underline"></div>

                    </div></br>

                    <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success fs-2">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']); 
                 
                
                    ?>
                </div>
            <?php } ?>
                <?php if (isset($_SESSION['errorpay'])) { ?>
                <div class="alert alert-danger fw-bold fs-3">
                    <?php 
                        echo $_SESSION['errorpay'];
                        unset($_SESSION['errorpay']); 
                    
                    ?>
                </div>
            <?php } ?>

                        



        </div>
        <table class="table fs-3">

<thead class="thead-dark">
    <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Payment ID</th>
        <th scope="col">Productname</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total</th>
        <th scope="col">Status</th>
    </tr>
</thead>
<tbody>
  <?php 
        $id = $_SESSION['id'];
        $stmt = $conn->query("SELECT product.`rom`,product.`descrip`,order_detail.`id`,order_detail.`order_id`,order_detail.`user_id`,order_detail.`payment_id`,order_detail.`total`,order_item.`order_id`,order_item.`cart_id`,order_item.`quantity`,cart_item.`cart_id`,cart_item.`user_id`,cart_item.`product_id`,cart_item.`quantity`,product.`name` ,payment_details.status
        FROM order_detail 
        JOIN order_item
        ON order_detail.`order_id` = order_item.`order_id` 
        JOIN cart_item 
        ON order_item.`cart_id` = cart_item.`cart_id`
        JOIN product
        ON cart_item.`product_id` = product.`product_id`
        JOIN payment_details
        ON order_detail.`payment_id` = payment_details.`payment_id` WHERE order_detail.`user_id` = '$id' ORDER BY order_detail.`order_id` DESC ");
        $stmt->execute();
        $datas = $stmt->fetchAll();

    


        if (!$datas) {
            echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
        } else {
        foreach($datas as $data)  {  
    
        
    ?>






<tr>
<th scope="row"><?php echo $data['order_id']; ?></th>
<td class="text-danger fw-bold"><?php echo $data['payment_id']; ?></td>
<td><?php echo $data['name']." ";
     if($data['rom'] > 0 && $data['rom'] != 1024 ){ 
        echo "ความจุ"." ".$data['rom']." "."GB"." ".$data['descrip'];; 
        }elseif($data['rom'] == 1024){
            echo "ความจุ"." "."1"." "."TB"." ".$data['descrip'];;
        } ?></td>                                        
<td><?php echo $data['quantity']; ?></td>
<td><?php echo "฿" . number_format( $data['total'], 2,'.',);  ?></td>
<td><?php echo $data['status']; ?></td>

</tr>
<?php } 
} ?>







</tbody>
</table>

    </div>
    
    </div>
 

    <div class="underline " style="padding-top: 20rem;">
    








    <script src="main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>



 <script>
                            let imgInput = document.getElementById('imgInput');
                            let previewImg = document.getElementById('previewImg');

                            imgInput.onchange = evt => {
                                const [file] = imgInput.files;
                                if (file) {
                                    previewImg.src = URL.createObjectURL(file)
                                }
                            }
                        </script>





</body>

</html>