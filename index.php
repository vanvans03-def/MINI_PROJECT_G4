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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>

    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/Mini_Project_G4/font.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">

</head>

<body>
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

    <!--noti msg-->
    <?php if (isset($_SESSION['success'])) : ?>

        <script>
            var session = '<?php echo $_SESSION['success']; ?>';
            alert(session);
        </script>
        <?php unset($_SESSION['success']); ?>
    <?php endif ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <script>
                var session = '<?php echo $_SESSION['error']; ?>';
                alert(session);
            </script>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif ?>


    <section class="hero iphone-13-pro">
        <div class="my-container">
            <div class="my-title">
                <h2 class="my-title-heading fw-bold">iPhone 13 Pro</h2>
                <h3 class="my-title-sub-heading fs-2 text-ligth">Pro cameras. Pro display. Pro performance.</h3>
                <p class="my-title-price">From ฿3,890/mo.</p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link">Learn more</a>
                <a href="#" class="cta-link">Buy</a>
            </div>
        </div>
    </section>

    <section class="hero iphone-13">
        <div class="my-container">
            <div class="my-title my-title-dark">
                <h2 class="my-title-heading fw-bold ">iPhone 13 </h2>
                <h3 class="my-title-sub-heading  fs-2">Just the right amount of everything.</h3>
                <p class="my-title-price">From ฿2,590.00/mo</p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link cta-link-darker">Learn more</a>
                <a href="#" class="cta-link cta-link-darker">Buy</a>
            </div>
        </div>
    </section>

    <section class="hero watch">
        <div class="my-container">
            <div class="my-title my-title-dark">
                <h2 class="my-title-heading-watch"></h2>
                <h3 class="my-title-sub-heading  fs-2">With the new always-On Retina display. <br>
                    You've never seen a watch like this.</h3>
                <p class="my-title-price">From ฿2,590.00/mo</p>
            </div>
            <div class="cta">
                <a href="#" class="cta-link cta-link-darker">Learn more</a>
                <a href="#" class="cta-link cta-link-darker">Buy</a>
            </div>
        </div>
    </section>

    <script src="main.js"></script>
</body>

</html>