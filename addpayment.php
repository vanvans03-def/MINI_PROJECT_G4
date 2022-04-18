<?php
session_start();
require_once "admin/config/db.php";



$userid = $_SESSION['id'];


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
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/Mini_Project_G4/font.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>ที่อยู่เพื่อจัดส่ง-Apple (TH)</title>
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
                            <p class="text-start fw-bold fs-2">เพิ่มข้อมูลบัญชีเพื่อซื้อสินค้า</p>
                        </div>


                        <div class="underline"></div>

                    </div></br>




                    <div class="col" style="height: 100px;">
                        <p class="text-center  fw-bold display-6 mb-6">เพิ่มบัญชีเพื่อการซื้อสินค้า</p>
                        <p class="text-center  text-muted fs-4">Apple ID
                            คือบัญชีเดียวเท่านั้นที่คุณต้องการสำหรับการใช้บริการทุกอย่างจาก Apple</p>

                    </div><br>
                    <div class="containerRegister">



                        <form action="payment_db.php" method="post">
                            <div class="col col-md-auto ">
                                <p class="fs-3 fw-bold text-muted " style="padding-left:25px;">ประเภทบัญชี</p>
                            </div>


                            <div class="col col-md-auto  " style="padding-left:25px;">

                                <div class="form-group " >

                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="type" id="flexRadioDefault1"value="Debit" checked>
                                        <label class="form-check-label fs-5 fw-bold  " for="flexRadioDefault1" >
                                            บัตรเดบิต
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"  name="type" id="flexRadioDefault2" value="Credit">
                                        <label class="form-check-label fs-5 fw-bold  " for="flexRadioDefault2">
                                            บัตรเครดิต
                                        </label>
                                    </div>


                                </div></br>

                                
                                <p class="fs-3 fw-bold text-muted">ธนาคาร </p>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg fs-3" name="provider" id="provider" value="">
                                </div></br>
                                <p class="fs-3 fw-bold text-muted">เลขหน้าบัตร</p>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg fs-3" name="account_no" id="account_no" value="">
                                </div></br>

                                <p class="fs-3 fw-bold text-muted">วันหมดอายุบัตร</p>
                           


                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg fs-3" name="expiry" id="expiry" value="" placeholder="09/22">
                                    </div><br>
                    
                                    <div class="form-group">

                                    <button type="submit" name="addUserPay" class="btn btn-primary btn-lg btn-block "><span class="fs-3">บันทึกข้อมูล</span></button>

                        
                            </div>
                        </form>





                    </div>
                </div>

            </div>






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