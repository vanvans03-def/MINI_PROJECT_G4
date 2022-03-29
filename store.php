<?php 
    session_start();

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
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <title>Store</title>
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
                        <a href="#" class="my-nav-link">iPad</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">iPhone</a>
                    </li>
                    <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Watch</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="airpods.html" class="my-nav-link">AirPods</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="TV.html" class="my-nav-link">TV</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">Music</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="accessories.html" class="my-nav-link">Accessories</a>
                    </li>
                        <a href="#" class="my-nav-link">Support</a>
                    </li>

                    <li class="my-nav-item nav-item dropdown">
                        <a href="#" class="my-nav-link-search"></a>
                    </li>
                    <li class="my-nav-item my-nav-item-hidden ">
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

    <div class="container-fluid my-5"> <br /> <br />
        <div class="my-container2 ">
        <div class="row justify-content-md-left">
            <div class="col-md-auto">
                <div class="my-container">
                    <h4 class="text-left fw-bold display-1 mb-5">ร้านของเรา
                        <span class="text-muted">คือที่ที่ดีที่สุดในการซื้อผลิตภัณฑ์ที่คุณรัก</span>
                    </h4>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="my-container">
                    <div class="box">
                        <img src="http://127.0.0.1/Mini_Project_G4/images/icons/store-chat-specialist-icon_AV1.jfif" class="help-store-pic">
                        <h6 class="text-rigth  fs-4 fw-bold display-2 mb-3 text-dark ">
                            &nbsp;หากต้องการตัวช่วยกรุณากดปุ่มด้านล่าง</h6>       
                    </div>
                    <a href="#" class="text-center fs-5 ">Learn more</a>
                    <div class="box">
                        <img src="http://127.0.0.1/Mini_Project_G4/images/Another/download.jfif" class="help-store-pic">
                        <h6 class="text-rigth  fw-bold fs-4 display-2 mb-3 text-dark ">
                            &nbsp;แวะไปที่ Apple Store</h6>       
                    </div>
                    <a href="#" class="text-center fs-5 ">ค้นหาร้านที่อยู่ใกล้คุณ</a>
                </div>
            </div>

            </div>
            
           
            <br><br><br><div class="row  align-items-center justify-content-center ">
                <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-mac-nav-202110.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> Mac</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-iphone-nav-202109.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> iPhoe</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-ipad-nav-202108.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> iPad</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-watch-nav-202110.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> Apple Watch</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                  <a href="airpods.html" >
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-airpods-nav-202110.png" class="card-img-top" alt="...">
                  </a>
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> AirPods</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-airtags-nav-202108.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 ">AirTag</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <a href="TV.html" >
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-appletv-nav-202108.png" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        
                        <p class="text-center fw-bold fs-4 "> Apple TV</p>
                  
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-accessories-nav-202109.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> อุปกรณ์เสริม</p>
                    </div>
                  </div>
                  <div class="card border-0" style="width: 15rem;">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-13-holiday-giftcards-asc-nav-202111.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-center fw-bold fs-4 "> บัตรของขวัญ Apple Store</p>
                    </div>
                  </div>
                
                </div>

            </div>
            </div>
        </div>
        <!--end of box header-->
       
   
   
        <br><br><br><div class="container-fluid my-5" >
          
            
        <div class="my-container2" style="width: 150rem;">
            <h1 class="text-left fw-bold display-3 mb-5">ผลิตภัณฑ์ล่าสุดของเรา <span class="text-muted"> มาดูว่ามีอะไรใหม่บ้างได้เลย</span></h1>
            <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card border-0 shadow">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-unity-202201.jfif" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">เวลาแห่งอนาคต</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card border-0 shadow">
                            <a href="iphone-13-pro.php" >
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-pro-202109.jfif"     alt="" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">โปรสมชื่อ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                        <a href="airpods.html" >
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-airpodsmagsafe-202110.png"alt="" class="card-img-top">
                        </a>
                            
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">จังหวะใหม่แห่งความมหัศจรรย์</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-watch-s7-202109.jfif"  alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">จัดเต็มแบบเต็มจอ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-iphone-202109.jfif"  alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">พลังพิเศษในมือคุณ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 shadow">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-40-mac-202110.jfif" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3">พลังสุดแรงเพื่อมือโปร</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
       
        <!--end card row-->
        <h1 class="text-left fw-bold display-3 mb-5">ความช่วยเหลืออยู่ที่นี่ <span class="text-muted"> ไม่ว่าเมื่อไหร่หรือแบบไหนที่คุณต้องการ</span></h1>
    
    
        <div class="item">
           
        </div>

    
        <div class="row justify-content-md-left">
           
            <div class="col-md-auto">
                <div class="my-container2">
                    <div class="card border-0 shadow"  style="width: 57rem;">
                       
                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-50-specialist-202108_GEO_TH.jfif" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-2 textcard">ช้อปปิ้งแบบตัวต่อตัวกับ Specailist ออนไลน์หรือภายในร้าน</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-auto">
                <div class="my-container2">
                    <div class="card border-0 shadow"  style="width: 50rem;">
                       
                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-25-apps-202108.jfif" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-3">ทำความรู้จักอุปกรณ์เครื่องใหม่ของคุณด้วยเซสชั่นส่วนบุคคล</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 shadow"  style="width: 50rem;">
                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/store-card-25-genius-202108.jfif" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-3">รับบริการและความช่วยเหลือจากผู้เชี่ยวชาญที่ Genius Bar</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

   
            
        </div>
    </div>


<!--end of middle  card-->

<div class="my-container2" >
    <br><br><br>
    <h1 class="text-left fw-bold display-3 mb-5">อุปกรณ์เสริม  <span class="text-muted"> สิ่งที่ขาดไม่ได้ที่จับคู่กับอุปกรณ์โปรดของคุณได้อย่างลงตัว</span></h1>
    <div class="row" >
        <div class="col-12 m-auto"  >
        <div class="owl-carousel owl-theme">
            <div class="item mb-4 ">
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/output-onlinepngtools.png" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">เลือกดูอุปกรณ์เสริมทั้งหมด<h2>  &nbsp;</h2></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MM283.jfif"     alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">เคสซิลิโคนสำหรับ iPhone 13 พร้อม MagSage สีชมพูชอร์ค</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/ML673ref.jfif"alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">สายแบบ Braided Solo Loop สีอิงลิชลาเวนเดอร์ 45 มม. ขนาด 4</h5>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="item" >
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MM0Q3.jfif"  alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">เคสหนังแบบกระเป๋าสตางค์สำหรับ iPhone พร้อม MagSafe</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" >
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MM0H3.jfif" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">เคสหนังสำหรับ iPhone 13 mini พร้อม MagSafe</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--end of accessories  card-->
<br><br><br>
<h1 class="text-left fw-bold display-3 mb-5">เสียงดังฟังชัด <span class="text-muted"> ด้วยตัวเลือกเพื่อเสียงคุณภาพสูงแบบเต็มอิ่มที่ยากจะหาใครเทียบ</span></h1>

<div class="row justify-content-md-left" >
           
    <div class="row" >
        
        <div class="col-12 m-auto"  >
        <div class="owl-carousel owl-theme">
            <div class="item mb-4 " >
                <div class="card border-0 shadow">
                     
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/output-onlinepngtools2.png" alt="" class="card-img-top" >
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">ใช้ Apple Music ได้ฟรี 6 เดือน</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MME73.jfif"     alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">AirPods (รุ่นที่3)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MK2J3.jfif"alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                           
                            <h5 class="fw-bold display-6 mb-3">Beats Fit Pro หูฟังไร้สายที่แท้จริง</h5>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="item" >
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/MWP22.jfif"  alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">AirPods Pro</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" >
                <div class="card border-0 shadow">
                    <img src="http://127.0.0.1/Mini_Project_G4/images/card/airpods-max-select-silver-202011.jfif" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <h5 class="fw-bold display-6 mb-3">Airpods Max - สีเงิน</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</div>
<!--end of airpod card-->
    </div>
</div>
    
    
    
    
   




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
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
                    items: 3
                }
            }
        })
    </script>
</body>

</html>