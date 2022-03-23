<?php 
session_start();
include('server.php');

?>
<!doctype html>
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
    <title>ถุง-Apple (TH)</title>
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

    <div class="container-fluid my-5"> <br> <br>
        <div class="my-container ">

            <div class="row justify-content-md-left">

                <div class="container">
                    
                        <div class="col">
                            <p class="text-start fw-bold display-4 mb-5">ลงชื่อเข้าใช้เพื่อชำระเงินได้รวดเร็วกว่า</p>
                        </div><br>
    


                    <div class="col" style="height: 100px;">
                        <p class="text-center  fw-bold display-6 mb-6"> ลงชื่อเข้าใช้ Apple Store</p>
                    </div>
                   

                    <div class="d-flex justify-content-center ">
                        
                    <form action="login_db.php" method="post">
                                            <?php if (isset($_SESSION['error'])) : ?>
                                    <div class="error" >
                                        <h1 class="text-danger border border-danger">
                                            <?php 
                                                echo $_SESSION['error'];
                                                unset($_SESSION['error']);
                                            ?>
                                        </h1>
                                    </div>
                                <?php endif ?>
                            <div class="form-group" style="width: 350px; ">
                              <label for="exampleInputEmail1"><span class="fs-3 fw-bold">  Email address</span></label>
                              <input style="height: auto;"type="email" class="form-control fs-3" name = "email" id="email" aria-describedby="emailHelp" placeholder="AppleID">
                              <small id="emailHelp " class="form-text text-muted fs-4 text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1"><span class="fs-3 fw-bold">  Password</span></label>
                              <input type="password" class="form-control fs-3" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label fs-4 text-muted"  for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" name="login_user" class="btn btn-primary">Submit</button>
                            <div class="col" >
                                <a class=" cta-link fs-4" href="#"> ลืม Apple ID หรือรหัสผ่านหรือไม่? </a>
                                <a class="fs-4 text-muted" href="register.php">ไม่มี Apple ID ใช่ไหม? <span class="cta-link fs-4">สร้างของคุณเองตอนนี้</span></a>
                            </div>
        
        
                        
                      </form>
                    </div>
                
                </div>

            </div>
            <div class="underline "style="padding-top: 20rem;">
            </div>
        </div>



    </div>
   










    <script src="main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>









</body>

</html>