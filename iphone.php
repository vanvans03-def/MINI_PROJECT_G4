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
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
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

  
  
            
           
            
       
   
   
        <br><br><br><div class="container-fluid my-5" >
          
            
        <div class="my-container2" style="width: 150rem;">
      
        <div class="row justify-content-md-left">
            <div class=" col col-md-6">
             
                    <h4 class="text-start fw-bold display-1">ซื้อ iPhone</h4>
         
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
                        <img src="http://127.0.0.1/Mini_Project_G4/images/Another/applestore.png"class="help-store-pic">
                        <h6 class="text-rigth  fw-bold fs-4 display-2 mb-3 text-dark ">
                            &nbsp;แวะไปที่ Apple Store</h6>       
                    </div>
                    <a href="#" class="text-center fs-5 ">ค้นหาร้านที่อยู่ใกล้คุณ</a>
                </div>
            </div>


            <h1 class="text-left fw-bold display-3 mb-5">ผลิตภัณฑ์ล่าสุดของเรา <span class="text-muted"> มาดูว่ามีอะไรใหม่บ้างได้เลย</span></h1>


            <?php 
                    $stmt = $conn->query("SELECT * FROM product");
                    $stmt->execute();
                    $products = $stmt->fetchAll();
                    $img = ("SELECT * FROM product img");
                    if (!$products) {
                        echo "<p><td colspan='6' class='text-center'>No data available</td></p>";
                    } else {
                    foreach($products as $product)  {  
                ?>


            <div class="row">
            <div class="col-12 " style="width: 150rem;">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-3">
                        <div class="card border-0 shadow">
                            <img src="http://127.0.0.1/Mini_Project_G4/admin/uploads/<?php echo $product['img']; ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="fw-bold display-6 mb-3"><?php echo $product['name']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>

            
            <?php }  } ?>
        <!--end card row-->
        <h1 class="text-left fw-bold display-3 mb-5">ความช่วยเหลืออยู่ที่นี่ <span class="text-muted"> ไม่ว่าเมื่อไหร่หรือแบบไหนที่คุณต้องการ</span></h1>
    
    
        <div class="item">
           
        </div>

    
        <div class="row justify-content-md-left">
        <div class="col-md-auto">
              
                    <div class="card border-0 shadow"  style="width: 40rem;">
                       
                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-stack-202109.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-2 textcard">iPhone รุ่นไหนเหมาะกับคุณ</h5>
                              
                            </div>
                        </div>
                    </div>
       
            </div>
          
            <div class="col-md-auto">
                              <div class="card border-0 shadow"  style="width: 40rem;">
                       
                        <img src="http://127.0.0.1/Mini_Project_G4/images/card/iphone-card-50-specialist-help-202108.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h5 class="fw-bold display-6 mb-2 textcard">ช้อปปิ้งแบบตัวต่อตัว</h5>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="col-md-auto">
                              <div class="card border-0 shadow"  style="width: 40rem;">
                       
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
                    items: 4
                   
                }
                
            }
        })
    </script>
</body>

</html>