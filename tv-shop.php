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
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/Mini_Project_G4/font.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>ซื้อ Apple TV 4k - Apple (TH) </title>
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
                    <a href="iphone.php" class="my-nav-link">iPhone</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Mac</a>
                </li>
                <li class="my-nav-item">
                    <a href="airpods.php" class="my-nav-link">AirPods</a>
                </li>
                <li class="my-nav-item">
                    <a href="TV.php" class="my-nav-link">TV</a>
                </li>
                <li class="my-nav-item">
                    <a href="#" class="my-nav-link">Music</a>
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
                <li class="y-nav-item " >
                    <a href="index.php?logout='1'" class="buttonLogout text-danger fw-bold fs-3" style="height:25px;">
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

    <div class="container-fluid my-5"> <br /> <br />
        <div class="my-container ">

            <div class="row justify-content-md-left">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4 class="text-center fs-1 fw-bold display-1 mb-5">Apple TV 4K </h4>
                        </div>
                        <div class="col">
                            &nbsp;
                        </div>
                        <div class="col">
                            <h6 class="text-rigth  fs-2 fw-bold display-1 mb-5 text-dark ">
                                &nbsp;เริ่มต้นที่ 6,700฿</h6>
                        </div>
                    </div>
                </div>

            </div>





            <br> <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success fs-2">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']); 
                 
               
                ?>
            </div>
        <?php } ?>
            <?php if (isset($_SESSION['errorshop'])) { ?>
            <div class="alert alert-danger fs-2">
                <?php 
                    echo $_SESSION['errorshop'];
                    unset($_SESSION['errorshop']); 
                 
                ?>
            </div>
        <?php } ?>
        <br>
            <div class="container-fluid my-5">
            
       
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card  border-0">
                            <img id="iphone13-shop" src="http://127.0.0.1/Mini_Project_G4/images/shop/apple-tv-4k-hero-select-202104.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <div class="card-title text-center ">
                                    <div class="row">
                                        <div class="col" style="padding-left: 10%;">
                                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/box.png" style="width: 3rem;">
                                            <p class="fs-5 display-6 mb-2 textcard">จัดส่งฟรี</p>
                                        </div>
                                        <div class="col">
                                            &nbsp;
                                        </div>
                                        <div class="col" style="padding-right: 15%;">
                                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/return.png" style="width: 3rem;">
                                            <p class="fs-5 display-6 mb-2 textcard">ส่งคืนสะดวกและฟรี</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 shop-bg">
                        <div class="card shop-bg border-0">
                            <div class="card-body shop-bg">
                                <p class="text-left fs-2 fw-bold display-4 mb-2">
                                    <span class="text-danger">ใหม่</span>
                                </p>
                                <p class="text-left fw-bold display-3 mb-5">
                                    <span class="text-black">
                                        ซื้อ Apple TV 4K</span>
                                </p>

                                <p class="text-left fs-2 fw-bold display-4 mb-2">
                                    <span class="text-black">
                                        เลือกรุ่น</span>
                                </p>
                                <p class="text-left fs-4 fw-bold display-1 mb-5">
                                    <span class="text-primary">
                                        รุ่นไหนเหมาะกับคุณ</span>
                                </p>

                                <?php
                                $cateID = '1';
                                $active = '';
                                
                                $TV = 'Apple TV 4K';
                                $active = $TV;
                                $stmt = $conn->query("SELECT * FROM product WHERE name = '$active' AND quantity != 0 ");
                                $stmt->execute();
                                $products = $stmt->fetch();
                                $img = ("SELECT * FROM product img");


                                if (!$products) {
                                    echo "<p class=' fs-1 fw-bold text-danger'><td colspan='6' class='text-center' >ยังไม่มีสินค้าในขณะนี้</td></p>";
                                } else {

                                ?>
                                    <form action="shopping_db.php" class="" method="post" enctype="multipart/form-data">



                                      
                                    <input type="hidden" class="btn-check" id="rom" autocomplete="off" name='rom' value="0">
                                    <input type="hidden" class="btn-check" id="color" autocomplete="off" name='color' value="สีดำ">
                                        <p>&nbsp;</p>
                                        <input type="radio" class="btn-check" id="AppleTV4K" autocomplete="off" name='product_name' value="Apple TV 4K">
                                        <label class="btn btn-outline-secondary col-12 border border-2 rounded-3" for="AppleTV4K" style="height: 80px;">
                                            <div class="row" style="padding-top: 10px;">
                                                <div class="col">
                                                    <p class="fs-5 display-1 fw-bold fs-2 mb-2 textcard">Apple TV 4K
                                                    </p>
                                                  
                                                </div>

                                                <div class="col ">
                                                    <p class="fs-5 display-1 fs-2 text-end mb-2 textcard">เริ่มต้นที่
                                                        ฿6,700</p>
                                                </div>
                                            </div>

                            </div>
                            </label>




                            <br>
                        

                                </br> </br>
                                <p class="underline"></p> </br>
                                <!--end of color choice-->
                                <p class="text-left fs-2 fw-bold display-2 mb-2">
                                    <span class="text-black">
                                        เลือกความจุ</span>
                                <div class="container2x2 ">

                                <div class="box2x2 border-0 ">
                                        <input type="radio" class="btn-check" id="rom32"  autocomplete="off" name="rom" value="32">
                                        <label class="btn btn-outline-secondary col-12 border border-2 rounded-3" for="rom32" style="height: 80px;">
                                            <p class="fs-5 display-1 fw-bold fs-2 mb-2 textcard" style="padding-top: 20px;">32Gb</p>
                                        </label><br>
                                    </div>
                                   


                                    <div class="box2x2 border-0 ">
                                    <input type="radio" class="btn-check" id="rom64"  autocomplete="off" name="rom" value="64">
                                        <label class="btn btn-outline-secondary col-12 border border-2 rounded-3" for="rom64" style="height: 80px;">
                                            <p class="fs-5 display-1 fw-bold fs-2 mb-2 textcard" style="padding-top: 20px;">64 Gb</p>
                                        </label><br>
                                    </div>

                                  
                                </div>
                                <p class="underline" ></p> </br>
                            </div>


                          
                            <!--end of select rom-->

                            <div class="d-flex justify-content-end">

                            <form method="post" action="bag.php?action=add">
                                <div class="d-grid gap-2 col-6 justify">
                                    <button class="btn btn-primary" type="submitTV"href="bag.php?action=add" name="shoping">
                                        <p class="fs-5 display-1 fw-bold fs-2 mb-2">
                                            ใส่ลงในถุง
                                        </p>
                                    </button>

                                </div>
                            </form>


                                
                            </div>


                        <?php }   ?>
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


    </div>





    <script src="http://127.0.0.1/Mini_Project_G4/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>









</body>

</html>