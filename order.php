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

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-start fw-bold fs-2">กรอกที่อยู่เพื่อจัดส่งสินค้า</p>
                        </div>


                        <div class="underline"></div>

                    </div></br>

                    <?php
                    $userOrder = json_decode($_COOKIE['userOrder'], true);

                    foreach ($userOrder as $userOrder) {
                        print $userOrder . "\n";
                    }

                    /*$stmt = $conn->query("SELECT * FROM `order_detail` WHERE `product_id` = $id");
$stmt->execute();
$data = $stmt->fetch();*/
                    ?>
                     <?php
                        //check useraddress 
                        $stmt = $conn->query("SELECT * FROM `users_address` WHERE `user_id` = $userid");
                        $stmt->execute();
                        $checkuser = $stmt->fetch();

                        if ($checkuser) {
                        ?>
                        <form action="" method="GET" >
                        <div class="alert alert-light text-center fw-bold display-1" >
                                <?php
                                echo "คุณมีข้อมูลที่อยู่แล้ว  ";
                                ?>
                                <div class="col " >
                                    <button type="button"name="ConfirmAddress" value ="1"data-bs-toggle="modal"  data-bs-target="#ConfirmAddress" data-bs-whatever="@mdo" class="btn btn-primary   fw-bold fs-4 " style="width:150px;">กดปุ่มนี้เพื่อใช้ที่อยู่เดิม</button>
                                </div>
                                
                                <div class="col">
                                    <button type="button" name="EditAddress"  data-bs-toggle="modal"  data-bs-target="#EditAddress" data-bs-whatever="@mdo" class="btn btn-warning  fw-bold fs-4"style="width:150px;">กดปุ่มเพื่อแก้ไขที่อยู่ใหม่</button>

                                </div>
                            </div>


                            <div class="container-md-auto">
                            <div class="modal fade" id="EditAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                        
                                    </div>


                                    <div class="modal-body">
                                        <form action="insert.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="productname" class="col-form-label">Product Name:</label>
                                                <input type="text" required="" class="form-control" name="productname">
                                            </div>
                                            <div class="mb-3">
                                                <label for="desc" class="col-form-label">Desc</label>
                                                <textarea type="text" style="height:100px;" required="" class="form-control" name="desc"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rom" class="col-form-label">Rom</label>
                                                <input type="number" required="" class="form-control currency currSign" name="rom">
                                            </div>


                                            <div class="mb-3">
                                                <label for="quantity" class="col-form-label">Quantity:</label>
                                                <input type="number" required="" class="form-control" name="quantity">
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="category_id">Category_id</label>
                                                </div>




                                             
                                            </div>






                                            <div class="mb-3">
                                                <label for="price" class="col-form-label">Price</label>
                                                <input type="text"  required="" class="form-control currency currSign" name="price" placeholder="฿39,000.00">
                                            </div>
                                            <div class="mb-3">
                                                <label for="img" class="col-form-label">Image:</label>
                                                <input type="file" required="" class="form-control" id="imgInput" name="img">
                                                <img loading="lazy" width="100%" id="previewImg" alt="">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>l




                        </form>
                        <?php 
                       ?>
                        
                           



                      






                <?php   } else {

                ?>

                    <pre><?php print_r($_COOKIE['userOrder']); ?></pre>
                    <div class="col" style="height: 100px;">
                        <p class="text-center  fw-bold display-6 mb-6">กรอกที่อยู่เพื่อจัดส่งสินค้า</p>
                        <p class="text-center  text-muted fs-4">Apple ID
                            คือบัญชีเดียวเท่านั้นที่คุณต้องการสำหรับการใช้บริการทุกอย่างจาก Apple</p>

                    </div><br>
                    <div class="containerRegister">


                        <?php if (isset($_SESSION['successOrder'])) { ?>
                            <div class="alert alert-success fs-2">
                                <?php
                                echo $_SESSION['successOrder'];
                                unset($_SESSION['successOrder']);
                                //header("refresh:1; url=index.php");

                                ?>
                            </div>
                        <?php } ?>
                        <?php if (isset($_SESSION['error'])) { ?>
                            <div class="alert alert-danger fs-2">
                                <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                                header("refresh:1; url=index.php");
                                ?>
                            </div>
                        <?php } ?>
                       
                    <form action="order_db.php" method="post">
                        <div class="col col-md-auto ">
                            <p class="fs-3 fw-bold text-muted " style="padding-left:25px;">ประเทศ/ภูมิภาค</p>
                        </div>


                        <div class="col col-md-auto  " style="padding-left:25px;">


                            <select class="form-control form-control-lg fs-4 fw-bold text-muted " name="country">
                                <option>--เลือกประเทศ--</option>
                                <option value="ไทย">ไทย</option>

                            </select></br>
                            <p class="fs-3 fw-bold text-muted">ที่อยู่ </p>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg fs-3" name="address1" id="address1" placeholder="กรอกที่อยู่บรรทัดที่ 1 ">
                            </div></br>
                            <p class="fs-3 fw-bold text-muted">ที่อยู่ที่ เพิ่มเติม </p>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg fs-3" name="address2" id="address2" placeholder="กรอกที่อยู่บรรทัดที่ 2 ">
                            </div></br>

                            <p class="fs-3 fw-bold text-muted">เมือง/รหัสไปรษณีย์</p>
                            <div class="row  ">

                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-lg fs-3" id="city" name="city" placeholder="กรุงเทพมหานคร">
                                </div>



                                <div class="form-group col">
                                    <input type="text" class="form-control form-control-lg fs-3" id="postcode" name="postcode" placeholder="11000">
                                </div>
                            </div>

                            <br>
                            <p class="fs-3 fw-bold text-muted">เบอร์โทรที่ติดต่อได้</p>
                            <div class="form-group">
                                <input type="tel" class="form-control form-control-lg fs-3" name="telephone" id="telephone" placeholder="091-xxx-xxxx">
                            </div><br>


                            <button type="submit" name="order_db" class="btn btn-primary btn-lg btn-block "><span class="fs-3">บันทึกข้อมูล</span></button>

                        </div>


                    <?php } ?>

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