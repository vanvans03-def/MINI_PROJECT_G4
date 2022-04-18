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

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>TV และบ้าน - Apple (TH)</title>
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

    <div class="container-fluid my-5"> 
        <div class="my-container2 ">
            <div class="row align-items-start">
            </div>
     
            <br><br><br><div class="row  align-items-center justify-content-center ">
                <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/tv.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> Apple TV 4K</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/tv.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 ">Apple TV HD </p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/appletv+.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> แอป Apple TV</p>
                    </div>
                  </div>
                 
                  <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/appletv+.PNG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> Apple TV</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/home.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 ">แอปบ้าน</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 10rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/tool.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 ">อุปกรณ์เสริม TV</p>
                    </div>
                  </div>
                  
                
                </div>





            </div>

        </div>
        <!--end of button tv-->
        <div class="card border-0" style="width: 100%; text-align: center;">
            <img src="http://127.0.0.1/Mini_Project_G4/images/TV/hero_tv__d8nngabrofue_large.png">
        </div>
        <!--end of Pictures Hero-->
        <div class="card border-0" style="width: 100%; text-align: center;">
            <img src="http://127.0.0.1/Mini_Project_G4/images/TV/hero_homepod_appletv_lockup__ecxlvf764zu6_large-removebg-preview.png">
        </div>
        <!--end of Pictures tv-->

        <div class="container-fluid my-5"> <br /> <br />
            <div class="my-container2 ">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <div class="my-container">
                            <h4 class="text-center fw-bold display-1 mb-5" style="font-size: 59px;">อนาคตมาเคาะประตู
                                <h4 class="text-center fw-bold display-1 mb-5">บ้านคุณแล้ว<br>
                                    <span class="text-muted " style="font-size: 25px;">แค่เชื่อมต่ออุปกรณ์ที่คุณชื่นชอบ
                                        คุณก็เปลี่ยนบ้านให้กลายเป็นบ้านสุดอัจฉริยะที่มาพร้อมความสะดวกสบายและความบันเทิงแบบครบครันได้
                                        ไม่ว่าจะควบคุม แค่เชื่อมต่ออุปกรณ์ที่คุณชื่นชอบ
                                        คุณก็เปลี่ยนบ้านให้กลายเป็นบ้านสุดอัจฉริยะ

                                </h4>
                        </div>
                    </div>
                    <div class="container-fluid my-5"> <br /> <br />
                        <div class="my-container2 ">
                            <div class="row align-items-start"> 
                            <br><br><br>
                            <div class="row  justify-content-center ">
                                
                                <div class="card  border-0 col-md-auto" style="width: 50%;">
                                    <div class="d-flex justify-content-center">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/apple_tv_4k_logo__vyjj7uki3tui_medium.png" style="width: 10rem;"
                                    class="" alt="...">
                                </div>
                                    <h4 class="text-center fw-bold display-1 mb-5" style="font-size: 30px;">
                                        
                                        ความบันเทิงในบ้านที่ชัดกว่าเห็นๆ<br>
                                        <span class="text-center" style="font-size: 25px;">เริ่มต้นที่ ฿6,700&nbsp;<a class="btn btn-primary fs-4 rounded-pill" style="width:70px;" href="tv-shop.php" role="button">ซื้อ</a><br>
                                            <img src="http://127.0.0.1/Mini_Project_G4/images/TV/higher_definition__hfivribdc3ue_large.jpg"
                                                style="width: 100%" class="card-img-center" alt="...">
                                                
                                            <div class="card-body">
                                    </h4>
                                </div>
                                <div class="card  border-0 col-md-auto">
                                    <div class="d-flex justify-content-center">
                                    <img src="http://127.0.0.1/Mini_Project_G4/images/TV/home_icon__9u57pp0qahea_medium.png" style="width: 5rem;"
                                        class="card-img-center:auto;" alt="...">
                                        </div>
                                    <h4 class="text-center fw-bold display-1 mb-5" style="font-size: 30px;">บ้าน<br>
                                        <span class="text-center"
                                            style="font-size: 25px;">บ้านของคุณภายใต้บังคับบัญชาของคุณ<br>
                                        </span></h4>
                                        
                                            <img src="http://127.0.0.1/Mini_Project_G4/images/TV/your_home_at_your_command__b1w2tomy2wia_large.jpg"
                                                style="width: 100%;padding-left: 10rem;" >


                                            </div>
                                        </div>
                                    </div>       
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <video width="100%" height="100%" controls="controls" muted="" playsinline="" autoplay="" loop=""
                    data-inline-media="" data-inline-media-plugins="ViewportSource, PlayPauseButton" preload="none"
                    role="presentation">

                    <source src="http://127.0.0.1/Mini_Project_G4/images/TV/large.mp4" type="video/mp4" />

                </video>
                <!--end of video-->
            </div>
        </div>
    </div>
</body>
<script src=http://127.0.0.1/Mini_Project_G4/main.js"></script>
</body>

</html>