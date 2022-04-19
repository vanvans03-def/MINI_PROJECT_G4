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
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/Mini_Project_G4/font.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>สร้าง Apple ID ของคุณ</title>
    <link rel="icon" href="http://127.0.0.1/Mini_Project_G4/images/icons/apple.png" type="image/icon type">

</head>

<body>

    <div class="container-fluid my-5"> <br> <br>
        <div class="my-container ">

            <div class="row justify-content-md-left">

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-start fw-bold fs-2">Apple ID</p>
                        </div>

                        <div class="col">
                            <a href="login.php" class="text-end fs-5 cta-linkr">ลงชื่อเข้าใช้</a>
                        </div>
                        <div class="underline"></div>

                    </div></br>



                    <div class="col" style="height: 100px;">
                        <p class="text-center  fw-bold display-6 mb-6"> สร้าง Apple ID ของคุณเอง</p>
                        <p class="text-center  text-muted fs-4">Apple ID
                            คือบัญชีเดียวเท่านั้นที่คุณต้องการสำหรับการใช้บริการทุกอย่างจาก Apple</p>
                        <a class="fs-4 text-center text-muted" href="#">มี Apple ID แล้วใช่ไหม? <span class="cta-link fs-4">ค้นหาได้ที่นี้</span></a>
                    </div><br>
                    <div class="containerRegister">

                        <form action="register_db.php" method="post">
                            <?php if (isset($_SESSION['error'])) : ?>
                                <div class="error">
                                    <h1 class="text-danger border border-danger">
                                        <?php
                                        echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        ?>
                                    </h1>
                                </div>
                            <?php endif ?>

                            <div class="col col-md-auto "style="padding-left:25px;">
                                    <div class="row">

                                    
                                            <div class="form-group  col">
                                                <input type="text" class="form-control form-control-lg fs-3" id="Frist_name" name="Frist_name" placeholder="ชื่อ">
                                            </div>
                                    

                                            <div class="form-group  col">
                                                <input type="text" class="form-control form-control-lg fs-3" id="Last_name" name="Last_name" placeholder="นามสกุล">
                                            </div>
                                    

                                    </div>
                            </div>

                          
                            <div class="col col-md-auto ">
                                <p class="fs-3 fw-bold text-muted " style="padding-left:25px;">ประเทศ/ภูมิภาค</p>
                            </div>


                            <div class="col col-md-auto  " style="padding-left:25px;">


                                <select class="form-control form-control-lg fs-4 fw-bold text-muted ">
                                    <option>--เลือกประเทศ--</option>
                                    <option>ไทย</option>
                                </select></br>

                                <div class="underline" style="padding-top:30px;"></div><br><br>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg fs-3" name="email" id="email" placeholder="email@example.com">
                                </div><br>
                                <div class="form-group ">
                                    <input type="password" class="form-control form-control-lg fs-3" name="password" id="password" placeholder="รหัสผ่าน">
                                </div><br>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg fs-3" id="password2" name="password2" placeholder="ยืนยันรหัสผ่าน">
                                </div> <br>
                                <div class="form-group">
                                    <input type="telephone" class="form-control form-control-lg fs-3" id="telephone" name="telephone" placeholder="หมายเลขโทรศัพท์">
                                </div> <br>
                                <div class="col col-md-auto">

                                    <button type="submit" name="regis_user" class="btn btn-primary btn-lg btn-block "><span class="fs-3">Register</span></button>

                                </div>




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