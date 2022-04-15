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
<!-- saved from url=(0025)https://www.apple.com/th/ -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="th-TH" lang="th-TH" prefix="og: http://ogp.me/ns#" class="js no-touch progressive-image no-reduced-motion no-edge no-ie css-mask inline-video desktop no-retina no-safari no-old-safari chrome no-ios no-android no-firefox no-fallback no-aow windows enhanced-layout no-tablet" data-layout-name="evergreen-avail">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="canonical" href="https://www.apple.com/th/" />

  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-globalnav.built.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-localnav.built.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-globalfooter.built.css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/wss/fonts/fonts" type="text/css" media="all" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/main.built.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/evergreen-avail.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/v8.css" />
  <script src="http://localhost/Mini_Project_G4/overview/head.built.js" type="text/javascript" charset="utf-8"></script>

  <title>Apple - (Thailand)</title>
  <meta property="analytics-track" content="Apple - Index/Tab" />
  <meta property="analytics-s-channel" content="homepage" />

  <meta property="analytics-s-bucket-0" content="applestoreww" />
  <meta property="analytics-s-bucket-1" content="applestoreww" />
  <meta property="analytics-s-bucket-2" content="applestoreww" />

  <meta name="Description" content="พบกับโลกนวัตกรรมของ Apple และเลือกซื้อทุกสิ่งตั้งแต่ iPhone, iPad, Apple Watch, Mac และ Apple TV พร้อมสำรวจอุปกรณ์เสริม ความบันเทิง และบริการช่วยเหลือด้านอุปกรณ์จากผู้เชี่ยวชาญ" />
  <meta property="og:title" content="Apple (Thailand)" />
  <meta property="og:description" content="พบกับโลกนวัตกรรมของ Apple และเลือกซื้อทุกสิ่งตั้งแต่ iPhone, iPad, Apple Watch, Mac และ Apple TV พร้อมสำรวจอุปกรณ์เสริม ความบันเทิง และบริการช่วยเหลือด้านอุปกรณ์จากผู้เชี่ยวชาญ" />
  <meta property="og:url" content="https://www.apple.com/th/" />
  <meta property="og:locale" content="th_TH" />
  <meta property="og:image" content="https://www.apple.com/ac/structured-data/images/open_graph_logo.png?201809240301" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Apple (Thailand)" />
</head>

<body class="page-home ac-nav-overlap body-with-ribbon" data-anim-scroll-group="body">
  <h1 class="visuallyhidden">Apple</h1>

  <meta name="ac-gn-store-key" content="SFX9YPYY9PPXCU9KH" />
  <aside id="ac-gn-segmentbar" class="ac-gn-segmentbar" lang="th-TH" dir="ltr" data-strings="{ &#39;exit&#39;: &#39;ออก&#39;, &#39;view&#39;: &#39;{%STOREFRONT%} หน้าแรกของร้าน&#39;, &#39;segments&#39;: { &#39;smb&#39;: &#39;หน้าแรกของร้านสำหรับองค์กรธุรกิจ&#39;, &#39;eduInd&#39;: &#39;หน้าแรกของร้านสำหรับการศึกษา&#39;, &#39;other&#39;: &#39;หน้าแรกของร้าน&#39; } }">
  </aside>
  <input type="checkbox" id="ac-gn-menustate" class="ac-gn-menustate" />
  <nav id="ac-globalnav" class="js no-touch windows no-firefox" role="navigation" aria-label="ทั่วโลก" data-hires="false" data-analytics-region="global nav" lang="th-TH" dir="ltr" data-www-domain="www.apple.com" data-store-locale="th" data-store-root-path="/th" data-store-api="/[storefront]/shop/bag/status" data-search-locale="th_TH" data-search-suggestions-api="/search-services/suggestions/" data-search-defaultlinks-api="/search-services/suggestions/defaultlinks/">
    <div class="ac-gn-content">
      <ul class="ac-gn-header">
        <li class="ac-gn-item ac-gn-menuicon">
          <a href="https://www.apple.com/th/#ac-gn-menustate" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open">
            <span class="ac-gn-menuanchor-label">Global Nav เปิดเมนู</span>
          </a>
          <a href="https://www.apple.com/th/#" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close">
            <span class="ac-gn-menuanchor-label">Global Nav ปิดเมนู</span>
          </a>
          <label class="ac-gn-menuicon-label" for="ac-gn-menustate" aria-hidden="true">
            <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-top">
              <span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-top"></span>
            </span>
            <span class="ac-gn-menuicon-bread ac-gn-menuicon-bread-bottom">
              <span class="ac-gn-menuicon-bread-crust ac-gn-menuicon-bread-crust-bottom"></span>
            </span>
          </label>
        </li>
        <li class="ac-gn-item ac-gn-apple">
          <a class="ac-gn-link ac-gn-link-apple" href="https://www.apple.com/th/" data-analytics-title="apple home" id="ac-gn-firstfocus-small">
            <span class="ac-gn-link-text">Apple</span>
          </a>
        </li>
        <li class="ac-gn-item ac-gn-bag ac-gn-bag-small" id="ac-gn-bag-small">
          <div class="ac-gn-bag-wrapper">
            <a class="ac-gn-link ac-gn-link-bag" href="https://www.apple.com/th/shop/goto/bag" data-analytics-title="bag" data-analytics-click="bag" aria-label="ถุง" data-string-badge="ถุงช้อปปิ้งและจำนวนสินค้าในถุง :" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="ac-gn-bagview-content">
              <span class="ac-gn-link-text">ถุง</span>
            </a>
            <span class="ac-gn-bag-badge" aria-hidden="true" data-analytics-title="bag" data-analytics-click="bag">
              <span class="ac-gn-bag-badge-separator"></span>
              <span class="ac-gn-bag-badge-number"></span>
              <span class="ac-gn-bag-badge-unit">+</span>
            </span>
          </div>
          <span class="ac-gn-bagview-caret ac-gn-bagview-caret-large"></span>
        </li>
      </ul>
      <div class="ac-gn-search-placeholder-container" role="search">
        <div class="ac-gn-search ac-gn-search-small">
          <a id="ac-gn-link-search-small" class="ac-gn-link" href="https://www.apple.com/th/search" data-analytics-title="search" data-analytics-intrapage-link="" aria-label="ค้นหาใน apple.com" role="button" aria-haspopup="true">
            <div class="ac-gn-search-placeholder-bar">
              <div class="ac-gn-search-placeholder-input">
                <div class="ac-gn-search-placeholder-input-text" aria-hidden="true">
                  <div class="ac-gn-link-search ac-gn-search-placeholder-input-icon"></div>
                  <span class="ac-gn-search-placeholder">ค้นหาใน apple.com</span>
                </div>
              </div>
              <div class="ac-gn-searchview-close ac-gn-searchview-close-small ac-gn-search-placeholder-searchview-close">
                <span class="ac-gn-searchview-close-cancel" aria-hidden="true">ยกเลิก</span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <!-- Start navbar apple -->

      <ul class="ac-gn-list">
        <li class="ac-gn-item ac-gn-apple">
          <a class="ac-gn-link ac-gn-link-apple" href="Apple.php" data-analytics-title="apple home" id="ac-gn-firstfocus">
            <span class="ac-gn-link-text">Apple</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-store">
          <a class="ac-gn-link ac-gn-link-store" href="store.php" data-analytics-title="store">
            <span class="ac-gn-link-text">Store</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-mac">
          <a class="ac-gn-link ac-gn-link-mac" href="#" data-analytics-title="mac">
            <span class="ac-gn-link-text">Mac</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-ipad">
          <a class="ac-gn-link ac-gn-link-ipad" href="#" data-analytics-title="ipad">
            <span class="ac-gn-link-text">iPad</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-iphone">
          <a class="ac-gn-link ac-gn-link-iphone" href="#" data-analytics-title="iphone">
            <span class="ac-gn-link-text">iPhone</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-watch">
          <a class="ac-gn-link ac-gn-link-watch" href="#" data-analytics-title="watch">
            <span class="ac-gn-link-text">Watch</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-airpods">
          <a class="ac-gn-link ac-gn-link-airpods" href="AirPods.php" data-analytics-title="airpods">
            <span class="ac-gn-link-text">AirPods</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-tvhome">
          <a class="ac-gn-link ac-gn-link-tvhome" href="#" data-analytics-title="tv and home">
            <span class="ac-gn-link-text">TV และบ้าน</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-accessories">
          <a class="ac-gn-link ac-gn-link-accessories" href="Accessories.html" data-analytics-title="accessories">
            <span class="ac-gn-link-text">อุปกรณ์เสริม</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-support">
          <a class="ac-gn-link ac-gn-link-support" href="#" data-analytics-title="support">
            <span class="ac-gn-link-text">บริการช่วยเหลือ</span>
          </a>
        </li>

        <li class="ac-gn-item ac-gn-item-menu ac-gn-search" role="search">
          <a id="ac-gn-link-search" class="ac-gn-link ac-gn-link-search" href="https://www.apple.com/th/search" data-analytics-title="search" data-analytics-intrapage-link="" aria-label="ค้นหาใน apple.com" role="button" aria-haspopup="true"></a>
        </li>

        <li class="ac-gn-item ac-gn-bag" id="ac-gn-bag">
          <div class="ac-gn-bag-wrapper">
            <a class="ac-gn-link ac-gn-link-bag" href="#" data-analytics-title="bag" data-analytics-click="bag" aria-label="ถุง" data-string-badge="ถุงช้อปปิ้งและจำนวนสินค้าในถุง : {%BAGITEMCOUNT%}" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="ac-gn-bagview-content">
              <span class="ac-gn-link-text">ถุง</span>
            </a>
            <span class="ac-gn-bag-badge" aria-hidden="true" data-analytics-title="bag" data-analytics-click="bag">
              <span class="ac-gn-bag-badge-separator"></span>
              <span class="ac-gn-bag-badge-number"></span>
              <span class="ac-gn-bag-badge-unit">+</span>
            </span>
          </div>
          <span class="ac-gn-bagview-caret ac-gn-bagview-caret-large"></span>
        </li>

        <li class="ac-gn-bagview-nav-item-signOut">
          <a href="index.php?logout='1'" class="ac-gn-bagview-button2 ac-gn-bagview-nav-link-signOut">
            ออกจากระบบ
            <!--logged information-->
            <?php if (isset($_SESSION['email'])) : ?>
              <p class="fs-4 fw-bold text-danger"></p>
            <?php endif ?>
          </a>
        </li>
      </ul>

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

      <!-- End navbar apple -->

      <aside id="ac-gn-searchview" class="ac-gn-searchview" role="search" data-analytics-region="search">
        <div class="ac-gn-searchview-content">
          <div class="ac-gn-searchview-bar">
            <div class="ac-gn-searchview-bar-wrapper">
              <form id="ac-gn-searchform" class="ac-gn-searchform" action="https://www.apple.com/th/search" method="get">
                <div class="ac-gn-searchform-wrapper">
                  <input id="ac-gn-searchform-input" class="ac-gn-searchform-input" type="text" aria-label="ค้นหาใน apple.com" placeholder="ค้นหาใน apple.com" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="true" aria-owns="quicklinks suggestions" />
                  <input id="ac-gn-searchform-src" type="hidden" name="src" value="globalnav" />
                  <button id="ac-gn-searchform-submit" class="ac-gn-searchform-submit" type="submit" disabled="" aria-label="ส่งการค้นหา"></button>
                  <button id="ac-gn-searchform-reset" class="ac-gn-searchform-reset" type="reset" disabled="" aria-label="ล้างการค้นหา">
                    <span class="ac-gn-searchform-reset-background"></span>
                  </button>
                </div>
              </form>
              <button id="ac-gn-searchview-close-small" class="ac-gn-searchview-close ac-gn-searchview-close-small" aria-label="ยกเลิกการค้นหา">
                <span class="ac-gn-searchview-close-cancel" aria-hidden="true">
                  ยกเลิก
                </span>
              </button>
            </div>
          </div>
          <aside id="ac-gn-searchresults" class="ac-gn-searchresults" data-string-quicklinks="ลิงก์ด่วน" data-string-suggestions="การค้นหาที่แนะนำ" data-string-noresults=""></aside>
        </div>
        <button id="ac-gn-searchview-close" class="ac-gn-searchview-close" aria-label="ยกเลิกการค้นหา">
          <span class="ac-gn-searchview-close-wrapper">
            <span class="ac-gn-searchview-close-left"></span>
            <span class="ac-gn-searchview-close-right"></span>
          </span>
        </button>
      </aside>
      <aside class="ac-gn-bagview" data-analytics-region="bag">
        <div class="ac-gn-bagview-scrim">
          <span class="ac-gn-bagview-caret ac-gn-bagview-caret-small"></span>
        </div>
        <div class="ac-gn-bagview-content" id="ac-gn-bagview-content"></div>
      </aside>
    </div>
  </nav>
  <div class="ac-gn-blur"></div>
  <div id="ac-gn-curtain" class="ac-gn-curtain"></div>
  <div id="ac-gn-placeholder" class="ac-nav-placeholder"></div>

  <script type="text/javascript" src="http://localhost/Mini_Project_G4/overview/ac-globalnav.built.js"></script>
  <div id="ac-gn-viewport-emitter" data-viewport-emitter-dispatch="" data-viewport-emitter-state='{"viewport":"large","orientation":"landscape","retina":false}'></div>

  <script src="http://localhost/Mini_Project_G4/overview/ac-analytics.js" type="text/javascript" charset="utf-8">
  </script>

  <main class="main" role="main">
    <section class="nonandroid homepage-section collection-module" data-module-template="ribbon" hidden="">
      <div data-unit-id="shop-online" data-analytics-activitymap-region-id="ribbon-shop-online">
        <div class="module-content">
          <div class="ribbon-shop-online">
            <div class="section-content section-content-shop-online">
              <span class="shop-ribbon-copy">
                <a href="https://www.apple.com/th/shop/goto/shop" target="_self" data-analytics-title="shop online - control">เลือกซื้อสินค้าออนไลน์</a>
                <wbr /><span class="nowrap">แล้วรับ</span>ความช่วยเหลือ<wbr />
                <span class="nowrap">จาก Specialist</span> <wbr /><span class="nowrap">พร้อมบริการจัดส่งฟรีและอีกมากมาย</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="homepage-section collection-module" data-module-template="heroes" data-analytics-activitymap-region-id="hero" data-analytics-region="hero">
      <div data-unit-id="iphone-13-pro-avail" data-analytics-section-engagement="name:hero-iphone-13-pro-avail">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="#" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>

            <a class="unit-link ab-key-features" href="#" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1 ">&nbsp;</a>

            <div class="unit-copy-wrapper">
              <h2 class="headline">iPhone 13 Pro</h2>
              <h3 class="subhead" role="presentation">
                วันนี้มาในสีเขียวอัลไพน์
              </h3>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="#" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about iPhone 13 Pro" aria-label="ดูเพ่ิมเติมเกี่ยวกับ iPhone 13 Pro">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="#" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy iPhone 13 Pro" aria-label="ซื้อ iPhone 13 Pro">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-iphone-13-pro-avail-hero-iphone13pro-preorder"></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="iphone-se" data-analytics-section-engagement="name:hero-iphone-se">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="https://www.apple.com/th/iphone-se/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <span class="violator-frameless">ใหม่</span>
              <h2 class="logo-image logo-image-iphone-se-logo-hero-iphonese headline">
                <span class="visuallyhidden">iPhone SE</span>
              </h2>
              <h3 class="subhead" role="presentation">
                <wbr /><span class="nowrap">รักทั้งความแรง</span> <wbr /><span class="nowrap">รักทั้งความคุ้มค่า</span>
              </h3>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/iphone-se/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about iPhone SE" aria-label="ดูเพิ่มเติมเกี่ยวกับ iPhone SE">ดูเพิ่มเติม</a>

                <a class="icon icon-after icon-chevronright" aria-label="ซื้อ iPhone SE" data-analytics-title="Buy iPhone SE" href="https://www.apple.com/th/shop/goto/buy_iphone/iphone_se" target="_self" rel="follow" data-analytics-region="buy">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-iphone-se-hero-iphonese-preorder"></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="ipad-air" data-analytics-section-engagement="name:hero-ipad-air">
        <div class="module-content">
          <div class="unit-wrapper theme-dark">
            <a class="unit-link" href="https://www.apple.com/th/ipad-air/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h2 class="logo-image logo-image-ipad-air-hero-logo-ipadair headline">
                <span class="visuallyhidden">iPad Air</span>
              </h2>
              <h3 class="subhead" role="presentation">สดใสสุดพลัง</h3>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/ipad-air/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about iPad Air" aria-label="ดูเพิ่มเติมเกี่ยวกับ iPad Air">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/shop/goto/buy_ipad/ipad_air" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy iPad Air" aria-label="ซื้อ iPad Air">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-ipad-air-hero-ipadair"></figure>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="homepage-section collection-module" data-module-template="promos" data-analytics-region="promo">
      <div data-unit-id="studio-display" data-analytics-section-engagement="name:promo-studio-display">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="https://www.apple.com/th/studio-display/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h4 class="headline">Studio Display</h4>
              <h5 class="subhead" role="presentation">ตรึงตา ตรึงใจ</h5>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/studio-display/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about Studio Display" aria-label="ดูเพิ่มเติมเกี่ยวกับ Studio Display">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="#" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy Studio Display" aria-label="ซื้อ Studio Display">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-studio-display-promo-studiodisplay" data-anim-lazy-image=""></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="mac-studio" data-analytics-section-engagement="name:promo-mac-studio">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="https://www.apple.com/th/mac-studio/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h4 class="headline">Mac Studio</h4>
              <h5 class="subhead" role="presentation">
                ขุมพลังสำหรับการสร้างสรรค์
              </h5>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/mac-studio/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about Mac Studio" aria-label="ดูเพิ่มเติมเกี่ยวกับ Mac Studio">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/shop/goto/buy_mac/mac_studio" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy Mac Studio" aria-label="ซื้อ Mac Studio">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-mac-studio-promo-macstudio" data-anim-lazy-image=""></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="iphone-13-avail" data-analytics-section-engagement="name:promo-iphone-13-avail">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="https://www.apple.com/th/iphone-13/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <a class="unit-link ab-key-features" href="https://www.apple.com/th/iphone-13/key-features/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>

            <div class="unit-copy-wrapper">
              <h4 class="headline">iPhone 13</h4>
              <h5 class="subhead" role="presentation">วันนี้มาในสีเขียว</h5>
              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/iphone-13/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about iPhone 13" aria-label="ดูเพ่ิมเติมเกี่ยวกับ iPhone 13">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/shop/goto/buy_iphone/iphone_13" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy iPhone 13" aria-label="ซื้อ iPhone 13">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-iphone-13-avail-promo-iphone13-preorder"></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="watch-series-7" data-analytics-section-engagement="name:promo-watch-series-7">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" href="https://www.apple.com/th/apple-watch-series-7/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h4 class="logo-image logo-image-watch-series-7-promo-logo-watch-lte headline">
                <span class="visuallyhidden">Apple Watch Series 7</span>
              </h4>
              <h5 class="subhead" role="presentation">
                ขอแนะนำจอภาพที่ใหญ่ที่สุด<wbr /><span class="nowrap">เท่าที่เราเคยมีมา</span>
              </h5>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/apple-watch-series-7/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about Apple Watch Series 7" aria-label="ดูเพิ่มเติมเกี่ยวกับ Apple Watch Series 7">ดูเพิ่มเติม</a>
                <a class="icon icon-after icon-chevronright" href="https://www.apple.com/th/shop/goto/buy_watch/apple_watch_series_7" target="_self" rel="follow" data-analytics-region="buy" data-analytics-title="Buy Apple Watch Series 7" aria-label="ซื้อ Apple Watch Series 7">ซื้อ</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-watch-series-7-promo-watch-lte" data-anim-lazy-image=""></figure>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="arcade-redesign" data-analytics-section-engagement="name:promo-arcade-redesign">
        <div class="module-content">
          <div class="unit-wrapper">
            <a class="unit-link" data-rid-store='{"288":"arc-0-apl_hp-lrn_tle-apl-avl-190919"}' href="https://www.apple.com/th/apple-arcade/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h4 class="logo-image logo-image-arcade-logo headline">
                <span class="visuallyhidden">Apple Arcade</span>
              </h4>
              <h5 class="subhead" role="presentation">
                ได้เวลาสนุก<wbr /><span class="nowrap">ของคอเกม</span>
              </h5>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" data-rid-store='{"288":"arc-0-apl_hp-lrn_tle-apl-avl-190919"}' href="https://www.apple.com/th/apple-arcade/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about Apple Arcade" aria-label="ดูเพิ่มเติมเกี่ยวกับ Apple Arcade">ดูเพิ่มเติม</a>
                <a class="try-button-arcade-redesign" href="itms-apps://?action=arcade&amp;itscg=10000&amp;itsct=arc-0-apl_hp-hro_tle-apl-ref-210402" target="_self" data-apply-action="itms-apps://?action=arcade&amp;itscg=10000&amp;itsct=arc-0-apl_hp-hro_tle-apl-ref-210402" data-analytics-title="Try Apple Arcade free" data-analytics-click="prop3: try it free modal" data-analytics-region="learn more" data-analytics-intrapage-link="" aria-label="ลองใช้ Apple Arcade ฟรี">ลองใช้ฟรี</a>
                <a href="https://www.apple.com/th/#footnote-1" class="footnote">*</a><span class="icon icon-after icon-external"></span>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-arcade-redesign-tile" data-anim-lazy-image=""></figure>
            </div>
          </div>

          <div class="module-modal modal-notify-content" data-modal-content="" data-modal-close-label="Close">
            <div class="modal-notify-wrapper">
              <figure class="logo-image-arcade-crossy-road-castle-modal-logo" aria-label="Apple Arcade"></figure>
              <h2 class="notify-headline typography-headline large-8 large-centered small-10">
                <wbr /><span class="nowrap">อัพเกรด</span>เพื่อ<wbr /><span class="nowrap">เริ่มต้น</span><wbr /><span class="nowrap">ทดลอง</span>ใช้<wbr /><span class="nowrap">บริการฟรี</span>
              </h2>
              <ul class="links-stacked compact">
                <li class="link">
                  <a href="https://support.apple.com/th-th/ios/update" data-analytics-title="get the latest ios" data-analytics-region="learn more" class="icon-wrapper icon icon-after icon-external"><span class="icon-copy">ดาวน์โหลด iOS ล่าสุด</span></a>
                </li>
                <li class="link">
                  <a href="https://support.apple.com/th-th/ios/update" data-analytics-title="get the latest ipados" data-analytics-region="learn more" class="icon-wrapper icon icon-after icon-external"><span class="icon-copy">ดาวน์โหลด iPadOS ล่าสุด</span></a>
                </li>
                <li class="link">
                  <a href="https://www.apple.com/th/macos/how-to-upgrade/" data-analytics-title="get the latest macos" data-analytics-region="learn more" class="icon-wrapper icon icon-after icon-chevronright"><span class="icon-copy">ดาวน์โหลด macOS ล่าสุด</span></a>
                </li>
                <li class="link">
                  <a href="https://support.apple.com/th-th/HT202716" data-analytics-title="get the latest tvos" data-analytics-region="learn more" class="icon-wrapper icon icon-after icon-external"><span class="icon-copy">ดาวน์โหลด tvOS ล่าสุด</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div data-unit-id="tv-plus-device-offer" data-analytics-section-engagement="name:promo-tv-plus-device-offer">
        <div class="module-content">
          <div class="unit-wrapper theme-dark background" data-rid-store='{"289":"atv-0-apl_hp-pmo_lrn-apl-bnd-200204"}'>
            <a class="unit-link" href="https://www.apple.com/th/apple-tv-plus/" target="_self" rel="follow" data-analytics-region="learn more" aria-hidden="true" tabindex="-1">&nbsp;</a>
            <div class="unit-copy-wrapper">
              <h4 class="logo-image logo-image-tv-plus-device-offer-logo headline">
                <span class="visuallyhidden">Apple TV plus</span>
              </h4>
              <h5 class="subhead" role="presentation">
                ใช้ Apple&nbsp;TV+ ได้ฟรีนาน 3&nbsp;เดือน
                <br />เมื่อซื้ออุปกรณ์ Apple
              </h5>

              <div class="cta-links">
                <a class="icon icon-after icon-chevronright" data-rid-store='{"289":"atv-0-apl_hp-pmo_lrn-apl-bnd-200204"}' href="https://www.apple.com/th/apple-tv-plus/" target="_self" rel="follow" data-analytics-region="learn more" data-analytics-title="Learn more about Apple TV Plus" aria-label="ดูเพิ่มเติมเกี่ยวกับ Apple TV Plus">ดูเพิ่มเติม</a>

                <a class="icon icon-after icon-external" data-analytics-exit-link="" href="https://tv.apple.com/th/channel/tvs.sbd.4000?itscg=10000&amp;itsct=atv-0-apl_hp-pmo_stm-apl-avl-191111" target="_self" rel="nofollow" data-analytics-region="learn more" data-analytics-title="Try Apple TV+ free" aria-label="Try Apple TV+ free">ลองใช้ฟรี</a>
              </div>
            </div>
            <div class="unit-image-wrapper">
              <figure class="unit-image unit-image-tv-plus-device-offer-tile" data-anim-lazy-image=""></figure>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <br><br><br>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@id": "https://www.apple.com/th/#webpage",
      "@type": "WebPage",
      "url": "https://www.apple.com/th/",
      "name": "Apple (Thailand)"
    }
  </script>

  <script src="http://localhost/Mini_Project_G4/overview/main.built.js" type="text/javascript" charset="utf-8"></script>
  <span style="
        visibility: hidden;
        position: absolute;
        top: 0px;
        bottom: 0px;
        z-index: -1;
      ">&nbsp;<iframe style="
          position: absolute;
          top: 0px;
          left: 0px;
          width: 100%;
          height: 100%;
        " src="http://localhost/Mini_Project_G4/overview/saved_resource.html"></iframe></span>

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/modal.css" />
  <script src="http://localhost/Mini_Project_G4/overview/autofilms.built.js" type="text/javascript"></script>

  <script src="http://localhost/Mini_Project_G4/overview/data-relay.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://localhost/Mini_Project_G4/overview/auto-relay.js" type="text/javascript" charset="utf-8"></script>

  <div id="viewport-emitter" data-viewport-emitter-dispatch="" data-viewport-emitter-state='{"viewport":"xlarge","orientation":"landscape","retina":false}'></div>
</body>
<div cssdimensionstracker="true" style="
      position: fixed;
      top: 0px;
      width: 100%;
      height: 100vh;
      pointer-events: none;
      visibility: hidden;
      z-index: -1;
    "></div>

</html>