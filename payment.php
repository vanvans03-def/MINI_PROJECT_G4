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
                    <a href="#" class="my-nav-link">Mac</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">iPad</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">iPhone</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Watch</a>
                </li>
                <li class="my-nav-item">
                    <a href="TV.html" class="my-nav-link">TV</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Music</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Support</a>
                </li>

                <li class="my-nav-item">
                    <a href="#" class="my-nav-link-search"></a>
                </li>
                <li class="my-nav-item my-nav-item-hidden">
                    <a href="#" class="my-nav-link my-nav-link-bag"></a>
                </li>
                <li class="my-nav-item ">
                    <!--logged information-->
                    <?php if (isset($_SESSION['email'])) : ?>
                        <p class="fs-4 fw-bold text-danger"> <a href="index.php?logout='1'" style="padding-top:5px;color:red;">logout</a> </p>
                    <?php endif ?>
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
                <pre><?php print_r($_COOKIE['userOrder']);
                        $userOrder = json_decode($_COOKIE['userOrder'], true);
                        ?></pre>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-start fw-bold fs-2">Payment - ชำระเงิน</p>
                        </div>

                        <div class="col">
                            <a href="login.php" class="text-end fs-5 cta-linkr"></a>
                        </div>
                        <div class="underline"></div>

                    </div></br>


                    <?php
                    $cartid = $_SESSION['cartid'];
                    echo $_SESSION['orderid'];
                    $orderid = $_SESSION['orderid'];
                    $stmt = $conn->query("SELECT * FROM `order_detail` WHERE `user_id` = $userid AND `id` = $orderid ");
                    $stmt->execute();
                    $data = $stmt->fetch();

                    if ($data) {

                    ?>








                        <div class="col" style="height: 100px;">

                            <div class="row d-flex justify-content-center">
                                <div class="col col-md-auto">
                                    <p class=" text-muted fw-bold display-6 mb-6"> รายการออเดอร์ที่ต้องชำระ</p>
                                </div>
                                <div class="col col-md-auto">
                                    <!-- Button trigger modal -->
                                    <!--      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                            ดูรายการสินค้า
                            </button>-->
                                </div>

                            </div>



                            <p class=" text-center  fw-bold fs-3"> <?php
                                                                    echo $userOrder['item_name'] . " " . "ราคา" . " " . "฿" . number_format($userOrder['item_price'], 2);

                                                                    ?>
                            </p>

                        </div><br><br>
                        <div class="containerRegister">
                            <?php
                            $sql = $conn->query("SELECT * FROM `users_payment` WHERE `user_id` = $userid  ");
                            $sql->execute();
                            $Userpay = $sql->fetch();
                            if (!$Userpay) {
                            ?>
                                <div class="col col-md-auto" style="padding-top: 20px;">
                                    <p class=" text-muted  text-center   fw-bold display-6 mb-6"> นี้คือการซื้อครั้งแรกใช่ไหม 
                                    <button type="button" onclick="document.location='addpayment.php'" value="1" class="text-primary text-center   fw-bold fs-2 btn btn-outline " style="width:150px;">เพิ่มบัญชีตรงนี้สิ</button>
                                  </p>
                                </div>



                            <?php
                            } else {



                                $stmt = $conn->query("SELECT * FROM `users` WHERE `id` = $userid  ");
                                $stmt->execute();
                                $dataUser = $stmt->fetch();

                                if ($dataUser) {
                                }
                            ?>


                                <p class="text-center  fw-bold display-4 mb-4"> รหัสชำระเงินคือ : <span class="  text-danger "><?php echo $data['payment_id']; ?></span></p>
                                <form action="order_db.php" method="post">


                                    <div class="col col-md-auto  " style="padding-left:25px;">
                                        <p class="fs-3 fw-bold text-muted">ชื่อ-นามสกุล</p>
                                        <div class="row  ">

                                            <div class="form-group col">
                                                <input type="text" readonly class="form-control form-control-lg fs-3" value="<?php echo $dataUser['name'] ?>" id="name" name="name">
                                            </div>



                                            <div class="form-group col">
                                                <input type="text" readonly class="form-control form-control-lg fs-3" value="<?php echo $dataUser['Lname'] ?>" id="Lname" name="Lname">
                                            </div>
                                        </div>

                                        </br>
                                        <?php
                                        $stmt = $conn->query("SELECT * FROM `users_address` WHERE `user_id` = $userid  ");
                                        $stmt->execute();
                                        $User = $stmt->fetch();

                                        if ($User) {

                                        ?>
                                            <div class="col col-md-auto ">
                                                <p class="fs-3 fw-bold text-muted ">ประเทศ/ภูมิภาค</p>
                                            </div>

                                            <div class="form-group col">
                                                <input type="text" readonly class="form-control form-control-lg fs-3" value="<?php echo $User['country'] ?>">
                                            </div>



                                            </br>
                                            <p class="fs-3 fw-bold text-muted">ที่อยู่ </p>
                                            <div class="form-group">
                                                <input type="text" readonly class="form-control form-control-lg fs-3" value="<?php echo $User['address_line_1'] ?>" name="address1" id="address1">
                                            </div></br>
                                            <p class="fs-3 fw-bold text-muted">ที่อยู่ เพิ่มเติม </p>
                                            <div class="form-group">
                                                <input readonly type="text" class="form-control form-control-lg fs-3" name="address2" id="address2" value="<?php echo $User['address_line_2'] ?> ">
                                            </div></br>

                                            <p class="fs-3 fw-bold text-muted">เมือง/รหัสไปรษณีย์</p>
                                            <div class="row  ">

                                                <div class="form-group col">
                                                    <input readonly type="text" class="form-control form-control-lg fs-3" id="city" name="city" value="<?php echo $User['city'] ?>">
                                                </div>



                                                <div class="form-group col">
                                                    <input readonly type="text" class="form-control form-control-lg fs-3" id="postcode" name="postcode" value="<?php echo $User['Postcode'] ?>">
                                                </div>
                                            </div>

                                            <br>
                                            <p class="fs-3 fw-bold text-muted">เบอร์โทรที่ติดต่อได้</p>
                                            <div class="form-group">
                                                <input readonly type="tel" class="form-control form-control-lg fs-3" name="telephone" id="telephone" value="<?php echo $User['telephone'] ?>">

                                                <div class="row d-flex justify-content-center" style="padding-top: 30px;">

                                                    <p class="fs-3 fw-bold text-muted">เลือกธนาคารที่จะชำระ : </p>


                                                    <div class="col col-md-auto">
                                                        <input type="radio" class="btn-check" id="bkk" autocomplete="off" name="bank" value="bkk">
                                                        <label class="btn btn-outline-secondary border border-2 rounded-3" for="bkk">
                                                            <img src="http://127.0.0.1/Mini_Project_G4/images/Banklogo/bkk.png" alt="" style="width: 7rem;">
                                                        </label>
                                                    </div>

                                                    <div class="col col-md-auto">
                                                        <input type="radio" class="btn-check" id="scb" autocomplete="off" name="bank" value="scb">
                                                        <label class="btn btn-outline-secondary border border-2 rounded-3" for="scb">
                                                            <img src="http://127.0.0.1/Mini_Project_G4/images/Banklogo/scb.png" alt="" style="width: 7rem;">
                                                        </label>
                                                    </div>

                                                    <div class="col col-md-auto">
                                                        <input type="radio" class="btn-check" id="kasikorn" autocomplete="off" name="bank" value="kasikorn">
                                                        <label class="btn btn-outline-secondary border border-2 rounded-3" for="kasikorn">
                                                            <img src="http://127.0.0.1/Mini_Project_G4/images/Banklogo/kasikorn.png" alt="" style="width: 7rem;">
                                                        </label>
                                                    </div>

                                                    <div class="col col-md-auto">
                                                        <input type="radio" class="btn-check" id="aomsin" autocomplete="off" name="bank" value="aomsin">
                                                        <label class="btn btn-outline-secondary border border-2 rounded-3" for="aomsin">
                                                            <img src="http://127.0.0.1/Mini_Project_G4/images/Banklogo/aomsin.png" alt="" style="width: 7rem;" ">
                                        </label>
                                  </div>

                                  <div class=" col col-md-auto">
                                                            <input type="radio" class="btn-check" id="prompay" autocomplete="off" name="bank" value="prompay">
                                                            <label class="btn btn-outline-secondary border border-2 rounded-3" for="prompay" style="height: 61px;">
                                                                <img src="http://127.0.0.1/Mini_Project_G4/images/Banklogo/prompay.png" alt="" style="width: 7rem;">
                                                            </label>
                                                    </div>
                                                    <div class="mb-3 fs-3 fw-bold text-muted0.
                                 style=" padding-top: 10px;"> <label for="img" class="col-form-label ">อัพโหลดสลิปธนาคาร :</label>
                                                        <input type="file" required="" class="form-control" id="imgInput" name="img">
                                                        <img loading="lazy" width="100%" id="previewImg" alt="">
                                                    </div>
                                                </div>
                                                <br style="padding-top: 20px;">
                                                <button type="submit" name="order_db" class="btn btn-primary btn-lg btn-block "><span class="fs-3">ยืนยันการชำระเงิน</span></button>

                                            </div>




                                    </div>

                                </form>
                        </div>
                </div>

            </div>


<?php }
                                    }
                                } ?>



        </div>


    </div>
    </div>
    </div>
    </div>


    </div>
    <div class="underline " style="padding-top: 20rem;">
    </div>
    </div>



    </div>











    <script src="main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>









</body>

</html>