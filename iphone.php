<?php
session_start();
require_once "admin/config/db.php";
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>ซื้อ iPhone</title>
    <link rel="icon" href="http://127.0.0.1/Mini_Project_G4/images/icons/apple.png" type="image/icon type">


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
                        <a href="bag.php" class="my-nav-link my-nav-link-bag"></a>
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









    <br><br><br>
    <div class="container-fluid my-5">


        <div class="my-container2" style="width: 150rem;">

            <div class="row justify-content-md-left">
                <div class=" col col-md-6">

                    <h4 class="text-start fw-bold display-1">ซื้อ iPhone</h4>

                </div>
                <div class="col col-md-auto">
                    <div class="my-container">
                        <div class="box">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/store-chat-specialist-icon_AV1.jfif" class="help-store-pic">
                            <h6 class="text-rigth  fs-4 fw-bold display-2 mb-3 text-dark ">
                                &nbsp;หากต้องการตัวช่วยกรุณากดปุ่มด้านล่าง</h6>
                        </div>
                        <a href="#" class="text-center fs-5 ">Learn more</a>
                        <div class="box">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/Another/applestore.png" class="help-store-pic">
                            <h6 class="text-rigth  fw-bold fs-4 display-2 mb-3 text-dark ">
                                &nbsp;แวะไปที่ Apple Store</h6>
                        </div>
                        <a href="#" class="text-center fs-5 ">ค้นหาร้านที่อยู่ใกล้คุณ</a>
                    </div>
                </div>


                <p class="text-left fw-bold display-4 mb-5">ทุกรุ่น เลือกแบบที่ใช่ได้เลย</p>




                <div class="row">

                    <div class="col-12 " style="width: 150rem;">
                        <div class="owl-carousel owl-theme">

                            <div class="item mb-3">
                                <div class="card border-0 shadow">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone/iphone-card-40-iphone13pro-202203.jpg" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5 class="fw-bold display-6 mb-3">iPhone 13 Pro
                                                <a class="btn btn-primary fs-4 rounded-pill" style="width:50px;" href="iphone-13-pro.php" role="button">ซื้อ</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="card border-0 shadow">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone/iphone-card-40-iphone13-202203.jpg" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5 class="fw-bold display-6 mb-3">iPhone 13
                                                <a class="btn btn-primary fs-4 rounded-pill" style="width:50px;" href="iphone-13.php" role="button">ซื้อ</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ">
                                <div class="card border-0 shadow">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone/iphone-card-40-iphonese-202203.jpg" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5 class="fw-bold display-6 mb-3">iPhone SE
                                                <a class="btn btn-primary fs-4 rounded-pill" style="width:50px;" href="iphone-se.php" role="button">ซื้อ</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="item ">
                                <div class="card border-0 shadow">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone/iphone-card-40-iphone12purple-202109.jpg" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5 class="fw-bold display-6 mb-3">iPhone 12
                                                <a class="btn btn-primary fs-4 rounded-pill" style="width:50px;" href="iphone-12.php" role="button">ซื้อ</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item ">
                                <div class="card border-0 shadow">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/shop/iphone/iphone-card-40-iphone-11-202108.jpg" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <h5 class="fw-bold display-6 mb-3">iPhone 11
                                                <a class="btn btn-primary fs-4 rounded-pill" style="width:50px;" href="iphone-11.php" role="button">ซื้อ</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>

                <p class="text-left fw-bold display-4 mb-5">คำแนะนำในการช้อปปิ้ง ตัดสินใจไม่ได้ใช้มั้ย เริ่มต้นได้ที่นี่</p>

                <div class="item">

                </div>


                <div class="row justify-content-md-left">
                    <div class="col-md-auto">

                        <div class="card border-0 shadow" style="width: 40rem;">

                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-stack-202109.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-2 textcard">iPhone รุ่นไหนเหมาะกับคุณ</h5>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-auto">
                        <div class="card border-0 shadow" style="width: 40rem;">

                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-specialist-help-202108.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-2 textcard">ช้อปปิ้งแบบตัวต่อตัว</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-auto">
                        <div class="card border-0 shadow" style="width: 40rem;">

                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-whyswitch-202109_GEO_TH_LANG_TH.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-2 textcard">ทำให้การเปลี่ยนมาใช้ง่ายกว่าที่คุณคิด</h5>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>


            <!--end of middle  card-->
            </br> </br> </br>
            <p class="text-left fw-bold display-4 mb-5">วิธีประหยัด <span class="text-muted">หาวิธีที่เหมาะกับคุณที่สุด</span></p>


            <div class="row justify-content-md-left">
                <div class="col-md-auto">

                    <div class="card border-0 shadow" style="width: 40rem;">

                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-monthly-payments-202108.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-2 textcard">จ่ายดอกเบี้ย 0% นานสุด 10 เดือน</h5>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-auto">
                    <div class="card border-0 shadow" style="width: 40rem;">

                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-tradein-202109.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-2 textcard">นำอุปกรณ์ของคุณมาแลกส่วนลด</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>







        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 15,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4

                    }

                }
            })
        </script>
</body>

</html>