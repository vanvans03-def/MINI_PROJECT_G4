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
    <title>Apple_test</title>
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/MyStyles.css">
    <link rel="stylesheet" href="http://127.0.0.1/Mini_Project_G4/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css">

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
                        <a href="TV.html" class="my-nav-link">TV</a>
                    </li>
                    <li class="my-nav-item">
                        <a href="#" class="my-nav-link">Music</a>
                    </li>
                    <li class="my-nav-item">
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
    <!--noti msg-->
    <?php if (isset($_SESSION['success'])) : ?>

            <script>
                var session = '<?php echo $_SESSION['success']; ?>';
                alert(session);
            </script>
    <?php unset($_SESSION['success']);?>
<?php endif ?>

<?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
            <script>
                var session = '<?php echo $_SESSION['error']; ?>';
                alert(session);
            </script>
            </div>
            <?php unset($_SESSION['error']);?>
<?php endif ?>


    <section class="hero iphone-13-pro">
        <div class="my-container">
            <div class="my-title">
                <h2 class="my-title-heading">iPhone 13 Pro</h2>
                <h3 class="my-title-sub-heading">Pro cameras. Pro display. Pro performance.</h3>
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
                <h2 class="my-title-heading">iPhone 13 </h2>
                <h3 class="my-title-sub-heading">Just the right amount of everything.</h3>
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
                <h3 class="my-title-sub-heading">With the new always-On Retina display. <br>
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