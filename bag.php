<?php
ob_start();
session_start();
require_once "admin/config/db.php";


$pd_id = '';
if(isset($_SESSION['order.id'])){
    $pd_id = $_SESSION['order.id'];
}

$_COOKIE['userOrder'] = '';


$quantity = 1;

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}


if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM cart_item WHERE product_id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "<script>alert('Data has been deleted successfully');</script>";
        $_SESSION['success'] = "Data has been deleted succesfully";
        header("refresh:1; url=index.php");
    }
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
    <title>?????????-Apple (TH)</title>
    <link rel="icon" href="http://127.0.0.1/Mini_Project_G4/images/icons/apple.png" type="image/icon type">
    <style>
        .currSign:before {
            content: '???';
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
                        ??????????????????????????????
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
    <?php

    /*  foreach($_SESSION["cart_item"] as $item){
            $item_price = $item["quantity"]* $item["price"];
  */

    ?>
    <div class="container-fluid my-5"> <br> <br>
        <div class="my-container ">

            <div class="row justify-content-md-left">
                <h1>
                    <?php

                    $stmt = $conn->query("SELECT * FROM product  WHERE product_id = '$pd_id' ");
                    $stmt->execute();
                    $data = $stmt->fetch();
                    if (!$data) {

                        echo "<div  class='text-center fw-bold alert alert-warning fs-1'><td>?????????????????????????????????????????????????????????????????????????????????</td></div>";
                    }
                    if ($data) {
                        /*if(isset ($_POST_['shoping'])){
                        if (isset($_SESSION['shop_cart'])) {
                            $item_array_id = array_column($_SESSION['shop_cart'], $pd_id);
                            if (!in_array($_SESSION['order.id'], $item_array_id)) {
                                $count = count($_SESSION["shop_cart"]);
                                $item_array = array(
                                    'item_id' => $pd_id,
                                    'item_name' => $data['name'],
                                    'item_price' => $data['price'],
                                    'item_quantity' =>  $quantity


                                );
                                $_SESSION["shop_cart"][$count] = $item_array;
                            } else {
                                echo '<script>alert("???????????????????????????")</script>';
                                echo '<script>window.location="iphone-13-pro.php"</script>';
                            }
                        } else {

                            $item_array = array(
                                'item_id' => $pd_id,
                                'item_name' => $data['name'],
                                'item_price' => $data['price'],
                                'item_quantity' => $quantity

                            );
                            $_SESSION["shop_cart"][0] = $item_array;
                          } 
                         }*/

                    ?>
                </h1>

                <?php

                        $item_array = array(
                            'item_id' => $pd_id,
                            'item_name' => $data['name'],
                            'item_price' => $data['price'],
                            'item_quantity' => $quantity

                        );
                        if (isset($_GET['quantity'])) {

                            $k = $_GET['quantity'];
                            $quantity = $quantity + $k - 1;
                            $item_array = array(
                                'item_id' => $pd_id,
                                'item_name' => $data['name'],
                                'item_price' => $quantity * $data['price'],
                                'item_quantity' =>  $quantity


                            );
                        }
                        $userOrder = "";
                        setcookie('userOrder', json_encode($item_array), time() + 3600);
                        $userOrder = json_decode($_COOKIE['userOrder'], true);




                ?>
                <pre><?php // print_r( ($_COOKIE['userOrder'] ));  
                        ?></pre>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p class="text-center fw-bold display-3 mb-5 ">
                                ????????????????????????????????????????????????????????????????????????????????????????????????????????????&nbsp;<span class=""> <?php
                                                                                            echo "???" . number_format($quantity * $data['price'], 2); ?></span> </p>
                            <p class="text-center fs-2 fw-bold  text-muted display-3 mb-5">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>


                            <div class="d-grid gap-2 col-6 mx-auto" style="width: 30rem; height: 1rem;">
                                <form action="cart_db.php" class="" method="post" enctype="multipart/form-data">
                                    <div class="col text-end " style="padding-top: 1rem;">
                                        <button type="submit" class="btn btn-primary mb-3 fs-2 btn-rounded " name="submitbag" style="width: 30rem; height: 5rem;">????????????????????????</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>


    </div>
    <?php


                        if (isset($_SESSION["cart_item"])) {
                            $total_quantity = 0;
                            $total_price = 0;
                        }
    ?>


    <br><br><br>

    <div class="my-container ">
        <p class="underline"></p>
        <br><br>
        <div class="row">
            <div class="col-sm-auto">
                <div class="card  border-0" style="width: 20rem;">
                    <img id="pd_img" src="http://127.0.0.1/Mini_Project_G4/admin/uploads/<?php echo $data['img']; ?>" alt="" class="card-img-top">

                </div>
            </div>


            <div class="col-sm-9">
                <div class="card  border-0">
                    <div class="card-body">



                        <div class="card border-0 ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col col-md-auto">

                                        <p class="text-left display-1 fw-bold fs-1 mb-2 textcard "> <?php echo $data['name']; ?>
                                            <?php if ($data['rom'] > 0 && $data['rom'] != 1024) {
                                                echo "??????????????????" . " " . $data['rom'] . " " . "GB";
                                            } elseif ($data['rom'] == 1024) {
                                                echo "??????????????????" . " " . "1" . " " . "TB";
                                            }


                                            ?> <?php echo $data['descrip'] ?>
                                        </p>

                                    </div>


                                    <!-- GET YOUR SELECT VALUES USING PHP -->

                                    <div class="col ">
                                        <form action="" method="GET">


                                            <select type="submit" class="text-start fw-bold fs-2" name="quantity">
                                                <?php
                                                if (isset($_GET['quantity'])) {

                                                    echo " <option class='btn-primary'>$quantity</option>";
                                                }
                                                ?>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>

                                            </select>
                                            <div class="col" style="padding-top: 10px;">
                                                <button type="submit" name="subquan" class="btn btn-success fs-3">Add</button>
                                            </div>

                                        </form>
                                    </div>


                                    <div class="col ">
                                        <p class="fs-5   fw-bold fs-2 text-end md-auto" ">
                                                <?php

                                                //$quantity = $_POST['quantity'];

                                                echo "???" . number_format($quantity * $data['price'], 2); ?></p>
                                            
                                            <div class=" col text-end">
                                            <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $data['product_id']; ?>" class="cta fs-3 cta-link" style="padding-bottom: 50px;">Delete</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br><br>
                        <p class="underline"></p>


                        <p class="text-left fs-3 fw-bold ">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/apple-black-logo.png" style="width: 2rem;padding-bottom: 7px;">
                            <span>??????????????? AppleCare+ ?????????????????? iPhone 13 Pro ?????????????????? ???8,290.00</span>
                        </p>

                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Apple</span>

                        </p>
                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;??????????????????????????????????????????????????????????????????????????????????????? Apple ????????????????????????????????????????????????????????? Apple</span>
                        </p>
                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;?????????????????????????????????????????????????????? iPhone ?????????????????????????????????????????????</span>
                        </p>

                        <p class="text-left fs-4 text-muted">
                            <span>&nbsp;&bull;&nbsp;????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</span>
                        </p>

                        <p class="text-left fs-4 cta-link">
                            <link>&nbsp;&nbsp;?????????????????????????????????</link>
                        </p>
                        <p class="text-rigth fs-4 cta-link">
                            <link>&nbsp;&nbsp;&nbsp;&nbsp;???????????????</link>
                        </p>
                        <p></p>
                        <p class="underline"></p>
                        <br>
                        <p class="text-left fs-3 fw-bold ">
                            <img src="http://127.0.0.1/Mini_Project_G4/images/icons/gift-card.png" style="width: 2rem;padding-bottom: 7px;">
                            <span>????????????????????????????????????????????????????????????????????????????????????????????????????????????</span>
                        </p>
                        <p class="text-rigth fs-4 cta-link">
                            <link>???????????????</link>
                        </p>
                        <p></p>

                        <p class="underline"></p>

                        <!-- <p class="text-left fs-3 fw-bold ">

                            <span> ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</span>
                        </p>


                        <div class="form-group ">
                            <p class="text-left fs-4 text-muted fw-bold">
                                <span>PostCode</span>
                            </p>

                            <input type="" class="form-group mx-xs-3 mb-3 fs-4" style="width:25rem;" id="" placeholder="????????????????????????????????????????????????">
                        </div>
                        <button type="submit" class="btn btn btn-outline-primary mb-2 fs-4">Confirm identity</button>

                        <p></p>
                        <br>
 -->

                        <br>
                        <div class="row  text-start  ">
                            <div class="col box">

                                <img src="http://127.0.0.1/Mini_Project_G4/images/icons/box.png" style="width: 3rem;">
                                <p class="fs-4  mb-2 textcard text-muted" style="padding-left: 10px;">&nbsp;&nbsp;????????????????????????????????????????????????????????????</p>
                            </div>
                            <div class="col col-md-auto">
                                &nbsp;
                            </div>
                            <div class="col box">
                                <img src="http://127.0.0.1/Mini_Project_G4/images/icons/return.png" style="width: 3rem;">
                                <p class="fs-4 mb-2 textcard text-muted" style="padding-left: 10px;">&nbsp;&nbsp;???????????????????????????????????????????????? Apple
                                    Store ?????????????????????</p>
                            </div>
                        </div>
                        <br><br> <br>







                    </div>
                </div>

            </div>
            <br>
            <p class="underline"></p>


            <div class="row d-flex flex-row-reverse">
                <div class="col-sm-auto">
                    <div class="card  border-0" style="width: 20rem;">


                    </div>
                </div>


                <div class="col-sm-9">
                    <div class="card  border-0">
                        <div class="card-body">



                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col ">

                                            <p class="text-left  display-2 text-muted fs-2 mb-2 "> ??????????????????
                                            </p>
                                        </div>

                                        <div class="col ">

                                            <p class="fs-2 display-1 text-muted text-end mb-2  "><?php echo "???" . number_format($quantity * $data['price'], 2); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col ">

                                            <p class="text-left fs-2 display-1 text-muted  mb-2 "> ???????????????????????????
                                            </p>
                                        </div>

                                        <div class="col ">
                                            <p class="fs-2 display-1 text-muted text-end mb-2  "> ?????????</p>
                                        </div>
                                    </div>

                                    <p class="underline" style="padding-bottom: 3rem;"></p>

                                    <div class="row">
                                        <div class="col ">

                                            <p class="text-left fs-1 display-1 fw-bold  mb-2 "> ???????????????????????????????????????????????????
                                            </p>
                                        </div>

                                        <div class="col ">
                                            <p class="fs-1 display-1 text-mutedfs-2 1 fw-bold text-end mb-2  "> <?php echo "???" . number_format($quantity * $data['price'], 2); ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col ">


                                        </div>

                                        <div class="col ">
                                            <p class="fs-5 display-1 text-muted text-end mb-2  "> ????????? VAT ???????????????
                                                <span calss="">
                                                    <?php

                                                    $vat =  $quantity * $data['price'] * 7 / 100;
                                                    echo "???" . number_format($vat, 2);
                                                    ?>
                                                </span>
                                            </p>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col ">


                                        </div>
                                        <form action="cart_db.php" class="" method="post" enctype="multipart/form-data">
                                            <div class="col text-end " style="padding-top: 1rem;">
                                                <button type="submit" class="btn btn-primary mb-2 fs-4 btn-rounded " name="submitbag" style="width: 40rem; height: 7rem;">???????????????????????????????????????????????????????????????</button>
                                            </div>
                                        <?php }  /*}*/
                                        ?>
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
    </div>

    </div>












    <script src="main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>




    <script>
        let x = document.querySelectorAll(".currency");
        for (let i = 0, len = x.length; i < len; i++) {
            let num = Number(x[i].innerHTML)
                .toLocaleString('en');
            x[i].innerHTML = num;
            x[i].classList.add("currSign");
        }
    </script>




</body>

</html>