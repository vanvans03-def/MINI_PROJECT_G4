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
<!-- saved from url=(0033)# -->
<html class="js no-touch progressive-image enhance-base-xp no-quicklook no-reduced-motion" xmlns="http://www.w3.org/1999/xhtml" xml:lang="th-TH" lang="th-TH" dir="ltr" prefix="og: http://ogp.me/ns#">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="canonical" href="#" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-globalnav.built.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-localnav.built.css" />
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-globalfooter.built.css" />

  <link rel="ac:pricing-endpoint" href="https://www.apple.com/th/shop/mcm/product-price" />
  <link rel="ac:edupricing-endpoint" href="https://www.apple.com/th-edu/shop/mcm/product-price" />
  <link rel="ac:tradein-endpoint" href="https://www.apple.com/th/shop/mcm/tradein-credit" />

  <meta name="ac:pricing-alias" content="airpods-3rd-gen=APPLE_AIRPODS_3GEN_WITH_MAGSAFE_MAIN-1000147220" />

  <meta name="ac:pricing-alias" content="airpods-pro=AIRPODSPRO_MAIN" />
  <meta name="ac:pricing-alias" content="airpods-max=AIRPODSMAX_MAIN" />
  <meta name="ac:pricing-alias" content="airpods-2nd-gen=APPLE_AIRPODS_MAIN-142740" />

  <title>AirPods - Apple</title>
  <meta name="Description" content="AirPods รุ่นต่างๆ มอบประสบการณ์แบบไร้สายอย่างที่ไม่มีใครเทียบ ตั้งแต่การตั้งค่าที่มหัศจรรย์จนถึงเสียงคุณภาพสูง มาพร้อมการสลักข้อความฟรี" />
  <meta property="og:image" content="https://www.apple.com/v/airpods/q/images/meta/airpods__dh7xkbort402_og.png?202202080116" />
  <meta property="og:title" content="AirPods" />
  <meta property="og:description" content="AirPods รุ่นต่างๆ มอบประสบการณ์แบบไร้สายอย่างที่ไม่มีใครเทียบ ตั้งแต่การตั้งค่าที่มหัศจรรย์จนถึงเสียงคุณภาพสูง มาพร้อมการสลักข้อความฟรี" />
  <meta property="og:url" content="#" />
  <meta property="og:locale" content="th_TH" />
  <meta property="og:site_name" content="Apple (Thailand)" />
  <meta property="og:type" content="website" />
  <meta name="twitter:site" content="@Apple" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="analytics-track" content="airpods - index/tab" />
  <meta property="analytics-s-channel" content="airpods.tab+other" />

  <meta property="analytics-s-bucket-0" content="applestoreww" />
  <meta property="analytics-s-bucket-1" content="applestoreww" />
  <meta property="analytics-s-bucket-2" content="applestoreww" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/fonts" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/overview.built.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/overview.built(1).css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/overview.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/v8.css" />
  <script href="http://localhost/Mini_Project_G4/overview/head.built.js" type="text/javascript" charset="utf-8"></script>
  <link rel="icon" href="http://localhost/Mini_Project_G4/images/icons/apple.png" type="image/icon type">
</head>

<body class="page-overview ac-gn-current-music" data-anim-scroll-group="body">
  <meta name="ac-gn-store-key" content="SFX9YPYY9PPXCU9KH" />
  <aside id="ac-gn-segmentbar" class="ac-gn-segmentbar" lang="th-TH" dir="ltr" data-strings="{ &#39;exit&#39;: &#39;ออก&#39;, &#39;view&#39;: &#39;{%STOREFRONT%} หน้าแรกของร้าน&#39;, &#39;segments&#39;: { &#39;smb&#39;: &#39;หน้าแรกของร้านสำหรับองค์กรธุรกิจ&#39;, &#39;eduInd&#39;: &#39;หน้าแรกของร้านสำหรับการศึกษา&#39;, &#39;other&#39;: &#39;หน้าแรกของร้าน&#39; } }"></aside>
  <input type="checkbox" id="ac-gn-menustate" class="ac-gn-menustate" />
  <nav id="ac-globalnav" class="js no-touch windows no-firefox" role="navigation" aria-label="ทั่วโลก" data-hires="false" data-analytics-region="global nav" lang="th-TH" dir="ltr" data-www-domain="www.apple.com" data-store-locale="th" data-store-root-path="/th" data-store-api="/[storefront]/shop/bag/status" data-search-locale="th_TH" data-search-suggestions-api="/search-services/suggestions/" data-search-defaultlinks-api="/search-services/suggestions/defaultlinks/">
    <div class="ac-gn-content">
      <ul class="ac-gn-header">
        <li class="ac-gn-item ac-gn-menuicon">
          <a href="##ac-gn-menustate" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open">
            <span class="ac-gn-menuanchor-label">Global Nav เปิดเมนู</span>
          </a>
          <a href="##" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close">
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
          <a class="ac-gn-link ac-gn-link-apple" href="Apple.html" data-analytics-title="apple home" id="ac-gn-firstfocus-small">
            <span class="ac-gn-link-text">Apple</span>
          </a>
        </li>
        <li class="ac-gn-item ac-gn-bag ac-gn-bag-small" id="ac-gn-bag-small">
          <div class="ac-gn-bag-wrapper">
            <a class="ac-gn-link ac-gn-link-bag" href="#" data-analytics-title="bag" data-analytics-click="bag" aria-label="ถุง" data-string-badge="ถุงช้อปปิ้งและจำนวนสินค้าในถุง :" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="ac-gn-bagview-content">
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
          <a class="ac-gn-link ac-gn-link-apple" href="index.php" data-analytics-title="apple home" id="ac-gn-firstfocus">
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
          <aside id="ac-gn-searchresults" class="ac-gn-searchresults" data-string-quicklinks="ลิงก์ด่วน" data-string-suggestions="การค้นหาที่แนะนำ" data-string-noresults="">
            <section class="ac-gn-searchresults-section ac-gn-searchresults-section-defaultlinks" data-analytics-region="defaultlinks search">
              <div class="ac-gn-searchresults-section-wrapper">
                <h3 class="ac-gn-searchresults-header ac-gn-searchresults-animated">
                  ลิงก์ด่วน
                </h3>
                <ul class="ac-gn-searchresults-list" id="defaultlinks" role="listbox">
                  <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                    <a href="https://www.apple.com/th/shop/goto/temporary_closures" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="0" data-label="คำถามที่พบบ่อยเกี่ยวกับการแวะมาที่ Apple Store" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">คำถามที่พบบ่อยเกี่ยวกับการแวะมาที่ Apple Store</a>
                  </li>
                  <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                    <a href="#" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="1" data-label="เลือกซื้อจาก Apple Store ออนไลน์" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">เลือกซื้อจาก Apple Store ออนไลน์</a>
                  </li>
                  <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                    <a href="Accessories.htmls" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="2" data-label="อุปกรณ์เสริม" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">อุปกรณ์เสริม</a>
                  </li>
                  <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                    <a href="#" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="3" data-label="AirPods" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">AirPods</a>
                  </li>
                  <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                    <a href="#" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="4" data-label="AirTag" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">AirTag</a>
                  </li>
                </ul>
                <span role="status" class="ac-gn-searchresults-count" aria-live="polite">5 ลิงก์ด่วน</span>
              </div>
            </section>
          </aside>
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

  <script src="http://localhost/Mini_Project_G4/overview/ac-analytics.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://localhost/Mini_Project_G4/overview/auto-init.js" type="text/javascript" charset="utf-8"></script>

  <nav id="chapternav" class="chapternav chapternav-tall theme-light with-paddles" aria-label="ผลิตภัณฑ์ในตระกูล AirPods" data-analytics-activitymap-region-id="chapternav">
    <div class="chapternav-wrapper">
      <ul class="chapternav-items">
        <li class="chapternav-item chapternav-item-airpods-2gen">
          <a class="chapternav-link" href="#" data-analytics-title="airpods">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">AirPods <br />รุ่นที่ 2</span>
          </a>
        </li>
        <li class="chapternav-item chapternav-item-airpods-3gen">
          <a class="chapternav-link" href="#" data-analytics-title="airpods 3rd generation">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">AirPods<br />รุ่นที่ 3</span>
            <span class="chapternav-new">ใหม่</span>
          </a>
        </li>
        <li class="chapternav-item chapternav-item-airpods-pro">
          <a class="chapternav-link" href="#" data-analytics-title="airpods pro">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">AirPods Pro</span>
          </a>
        </li>
        <li class="chapternav-item chapternav-item-airpods-max">
          <a class="chapternav-link" href="#" data-analytics-title="airpods max">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">AirPods Max</span>
          </a>
        </li>
        <li class="chapternav-item chapternav-item-airpods-compare">
          <a class="chapternav-link" href="#" data-analytics-title="compare" aria-label="เปรียบเทียบ AirPods รุ่นต่างๆ">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">เปรียบเทียบ</span>
          </a>
        </li>
        <li class="chapternav-item chapternav-item-apple-music">
          <a class="chapternav-link" href="#" data-analytics-title="apple music">
            <figure class="chapternav-icon"></figure>
            <span class="chapternav-label">Apple Music</span>
          </a>
        </li>
      </ul>
      <div class="chapternav-paddles">
        <button class="chapternav-paddle chapternav-paddle-left" aria-hidden="true" disabled=""></button>
        <button class="chapternav-paddle chapternav-paddle-right" aria-hidden="true" disabled=""></button>
      </div>
    </div>
  </nav>
  <main id="main" class="main" role="main" data-page-type="overview" data-anim-scroll-group="bubble-gum-group">
    <div>
      <h1 class="pagetitle">AirPods</h1>
    </div>

    <div class="ribbon ribbon-blue-to-default ribbon-drop-wrapper apple-music-ribbon" data-analytics-activitymap-region-id="ribbon">
      <div class="ribbon-content-wrapper ribbon-reduced-wrapper ribbon-wrapper">
        <div class="ribbon-content">
          <p>
            ใช้ Apple&nbsp;Music <span class="nowrap">ได้ฟรี</span>นาน
            6&nbsp;เดือน <span class="nowrap">เมื่อซื้อ</span> AirPods<span class="footnote footnote-supglyph"><a href="#" aria-label="Footnote * symbol">*</a></span>
            <a class="ribbon-link more icon icon-copy icon-after icon-chevronright" href="#" rel="nofollow" data-analytics-title="learn more about apple music free trial" aria-label="ดูเพิ่มเติมเกี่ยวกับใช้ Apple Music ฟรี" data-analytics-exit-link="">ดูเพิ่มเติม</a>
          </p>
        </div>
      </div>
    </div>

    <section class="section section-airpods-3rd-gen hero-tile" data-analytics-section-engagement="name:airpods-3rd-gen">
      <div class="section-max-width">
        <div class="section-tile-wrapper tile-rounded">
          <div class="background-wrapper loaded playing" data-inline-media-controller="airpods-3rd-gen-video">
            <picture id="overview-airpods-3rdgen-left-1" class="overview-airpods-3rdgen-left 3rd-gen-left loaded" data-picture-loaded="">
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_small.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_small_2x.png 2x
                  " media="(max-width:734px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_medium.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_medium_2x.png 2x
                  " media="(max-width:1068px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_large.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_large_2x.png 2x
                  " media="(min-width:0px)" />
              <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_left__4rnjhu9z6luu_large.png" onload="__lp(event)" alt="" />
            </picture>
            <picture id="overview-airpods-3rdgen-right-1" class="overview-airpods-3rdgen-right 3rd-gen-right loaded" data-picture-loaded="">
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_small.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_small_2x.png 2x
                  " media="(max-width:734px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_medium.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_medium_2x.png 2x
                  " media="(max-width:1068px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_large.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_large_2x.png 2x
                  " media="(min-width:0px)" />
              <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_3rdgen_right__dlre1ozlzk2u_large.png" onload="__lp(event)" alt="" />
            </picture>
            <div class="video-container loaded playing" data-component-list="InlineMedia">
              <video autoplay muted playsinline loop>
                <source src="http://localhost/Mini_Project_G4/images/airpods/large_2x.mp4" type="video/mp4" />
              </video>

              <div class="inline-media-ui">
                <button class="play-pause-button" data-inline-media-control="PlayPause" data-analytics-click-play="prop3:play airpods 3rd gen video" data-analytics-click-pause="prop3:pause airpods 3rd gen video" data-analytics-title-play="play airpods 3rd gen video" data-analytics-title-pause="pause airpods 3rd gen video" data-aria-playing="หยุดเล่นแอนิเมชั่น AirPods รุ่นที่ 3" data-aria-paused="เล่นแอนิเมชั่น AirPods รุ่นที่ 3" data-analytics-intrapage-link="" aria-label="หยุดเล่นแอนิเมชั่น AirPods รุ่นที่ 3" data-analytics-click="prop3:pause airpods 3rd gen video" data-analytics-title="pause airpods 3rd gen video"></button>
              </div>
            </div>
          </div>
          <div class="content-block has-dynamic-content">
            <span class="violator">ใหม่</span>
            <h2 class="hero-headline typography-hero-tile-headline">
              AirPods
            </h2>
            <p class="hero-subhead typography-intro">รุ่นที่ 3</p>
            <p class="hero-price typography-intro" data-pricing-product="airpods-3rd-gen" data-product-template="${price.display.smart}" data-pricing-loaded="">
              ฿6,790
            </p>
            <ul class="links-inline">
              <li>
                <a href="https://www.apple.com/th/shop/goto/product/MME73" data-analytics-title="buy - airpods 3rd generation" aria-label="ซื้อ AirPods (รุ่นที่ 3)" class="icon-wrapper button button-elevated hero-button"><span class="icon-copy">ซื้อ</span></a>
              </li>
              <li>
                <a href="#" data-analytics-title="learn more - airpods 3rd generation" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods (รุ่นที่ 3)" class="icon-wrapper typography-cta hero-cta"><span class="icon-copy">ดูเพิ่มเติม</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-airpods-pro hero-tile" data-analytics-section-engagement="name:airpods-pro">
      <div class="section-max-width">
        <div class="section-tile-wrapper tile-rounded theme-dark">
          <div class="background-wrapper">
            <div class="scaling-container" data-anim-keyframe='{"start":"t - 100vh","end":"b", "y":["css(--translate-from)","css(--translate-to)"], "breakpointMask":"XLM", "disabledWhen":["no-enhance-base-xp"]}' style="transform: matrix(1, 0, 0, 1, 0, -42.14)">
              <picture id="overview-airpods-pro-left-1" class="overview-airpods-pro-left pro-left loaded" data-picture-loaded="">
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_small.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_small_2x.png 2x
                    " media="(max-width:734px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_medium.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_medium_2x.png 2x
                    " media="(max-width:1068px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_large.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_large_2x.png 2x
                    " media="(min-width:0px)" />
                <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_pro_left__bvanpj0ujnf6_large.png" onload="__lp(event)" alt="" />
              </picture>
              <picture id="overview-airpods-pro-right-1" class="overview-airpods-pro-right pro-right loaded" data-picture-loaded="">
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_small.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_small_2x.png 2x
                    " media="(max-width:734px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_medium.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_medium_2x.png 2x
                    " media="(max-width:1068px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_large.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_large_2x.png 2x
                    " media="(min-width:0px)" />
                <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_pro_right__fm0wwisa76em_large.png" onload="__lp(event)" alt="" />
              </picture>
            </div>
          </div>
          <div class="content-block has-dynamic-content">
            <h2 class="hero-headline typography-hero-tile-headline">
              AirPods Pro
            </h2>
            <p class="hero-price typography-intro" data-pricing-product="airpods-pro" data-product-template="${price.display.smart}" data-pricing-loaded="">
              ฿8,992
            </p>
            <ul class="links-inline">
              <li>
                <a href="https://www.apple.com/th/shop/goto/product/MLWK3" data-analytics-title="buy - airpods pro" aria-label="ซื้อ AirPods Pro" class="icon-wrapper button button-elevated buy"><span class="icon-copy">ซื้อ</span></a>
              </li>
              <li>
                <a href="#" data-analytics-title="learn more - airpods pro" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods Pro" class="icon-wrapper typography-cta learn-more"><span class="icon-copy">ดูเพิ่มเติม</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-airpods-max hero-tile" data-analytics-section-engagement="name:airpods-max">
      <div class="section-max-width">
        <div class="section-tile-wrapper tile-rounded">
          <div class="scaling-container">
            <h2 class="visuallyhidden image-headline">AirPods&nbsp;Max</h2>
            <picture id="overview-airpods-max-logo-1" class="overview-airpods-max-logo max-logo loaded" data-picture-loaded="">
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max_logo__bdgdixidcqcy_medium.jpg,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max_logo__bdgdixidcqcy_medium_2x.jpg 2x
                  " media="(max-width:1068px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max_logo__bdgdixidcqcy_large.jpg,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max_logo__bdgdixidcqcy_large_2x.jpg 2x
                  " media="(min-width:0px)" />
              <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_max_logo__bdgdixidcqcy_large.jpg" onload="__lp(event)" alt="" />
            </picture>
            <picture id="overview-airpods-max-1" class="overview-airpods-max max loaded" data-anim-keyframe='{"start":"t - 100vh","end":"b", "y":["css(--translate-from)","css(--translate-to)"], "breakpointMask":"XLM", "disabledWhen":["no-enhance-base-xp"]}' data-picture-loaded="" style="transform: matrix(1, 0, 0, 1, 0, -17.76)">
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_small.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_small_2x.png 2x
                  " media="(max-width:734px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_medium.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_medium_2x.png 2x
                  " media="(max-width:1068px)" />
              <source srcset="
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_large.png,
                    http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_large_2x.png 2x
                  " media="(min-width:0px)" />
              <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_max__f265q4g4ddym_large.png" onload="__lp(event)" alt="" />
            </picture>
          </div>
          <div class="content-block has-dynamic-content">
            <h2 class="hero-headline typography-hero-max-headline">
              AirPods&nbsp;Max
            </h2>
            <p class="hero-price typography-intro" data-pricing-product="airpods-max" data-product-template="${price.display.smart}" data-pricing-loaded="">
              ฿19,900
            </p>
          </div>
          <ul class="links-inline">
            <li>
              <a href="#" data-analytics-title="buy - airpods max" aria-label="ซื้อ AirPods Max" class="icon-wrapper button button-elevated"><span class="icon-copy">ซื้อ</span></a>
            </li>
            <li>
              <a href="#" data-analytics-title="learn more - airpods max" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods Max" class="icon-wrapper typography-cta"><span class="icon-copy">ดูเพิ่มเติม</span></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section section-airpods-2nd-gen hero-tile" data-analytics-section-engagement="name:airpods-2nd-gen">
      <div class="section-max-width">
        <div class="section-tile-wrapper tile-rounded">
          <div class="background-wrapper">
            <div class="scaling-container" data-anim-keyframe='{"start":"t - 100vh","end":"b", "y":["css(--translate-from)","css(--translate-to)"], "breakpointMask":"XLM", "disabledWhen":["no-enhance-base-xp"]}' style="transform: matrix(1, 0, 0, 1, 0, -20.4)">
              <picture id="overview-airpods-2ndgen-left-1" class="overview-airpods-2ndgen-left 2nd-gen-left loaded" data-picture-loaded="">
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_small.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_small_2x.png 2x
                    " media="(max-width:734px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_medium.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_medium_2x.png 2x
                    " media="(max-width:1068px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_large.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_large_2x.png 2x
                    " media="(min-width:0px)" />
                <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_left__gjpt8k836yy6_large.png" onload="__lp(event)" alt="" />
              </picture>
              <picture id="overview-airpods-2ndgen-right-1" class="overview-airpods-2ndgen-right 2nd-gen-right loaded" data-picture-loaded="">
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_small.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_small_2x.png 2x
                    " media="(max-width:734px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_medium.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_medium_2x.png 2x
                    " media="(max-width:1068px)" />
                <source srcset="
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_large.png,
                      http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_large_2x.png 2x
                    " media="(min-width:0px)" />
                <img src="http://localhost/Mini_Project_G4/images/airpods/airpods_2ndgen_right__gahfggwvcx6q_large.png" onload="__lp(event)" alt="" />
              </picture>
            </div>
          </div>
          <div class="content-block has-dynamic-content">
            <h2 class="hero-headline typography-hero-tile-headline">
              AirPods
            </h2>
            <p class="hero-subhead typography-intro">รุ่นที่ 2</p>
            <p class="hero-price typography-intro" data-pricing-product="airpods-2nd-gen" data-product-template="${price.display.smart}" data-pricing-loaded="">
              ฿4,990
            </p>
            <ul class="links-inline">
              <li>
                <a href="#" data-analytics-title="buy - airpods 2nd generation" aria-label="ซื้อ AirPods รุ่นที่ 2" class="icon-wrapper button button-elevated"><span class="icon-copy">ซื้อ</span></a>
              </li>
              <li>
                <a href="#" data-analytics-title="learn more - airpods 2nd gen" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods รุ่นที่ 2" class="icon-wrapper typography-cta"><span class="icon-copy">ดูเพิ่มเติม</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-connection" data-analytics-section-engagement="name:connection">
      <div class="section-max-width">
        <div class="content-block">
          <h3 class="typography-magical-headline large-centered headline">
            การเชื่อมต่อที่มหัศจรรย์<wbr /><span class="nowrap">กับอุปกรณ์ของคุณ</span>
          </h3>
        </div>
      </div>
      <div id="connection-gallery" class="gallery" data-component-list="ConnectionGallery" data-analytics-gallery-id="connection-gallery" aria-label="แกลเลอรี่คุณสมบัติการเชื่อมต่อที่มหัศจรรย์กับอุปกรณ์ของคุณ">
        <div class="content">
          <ul class="item-container" role="list" style="transform: translate3d(0px, 0px, 0px)">
            <li id="gallery-item-one-tap" class="gallery-item current" data-ac-gallery-item="" role="listitem" style="opacity: 1; transform: translate(0px, 0px)">
              <div class="tile tile-rounded tile-with-overlay tile-one-tap" data-component-list="TileOverlay">
                <div class="tile-content">
                  <div class="tile-header">
                    <h4 class="tile-headline typography-connection-tile-headline">
                      ตั้งค่าด้วยการแตะ<wbr /><span class="nowrap">แค่ครั้งเดียว</span>
                    </h4>
                  </div>
                  <div class="tile-body">
                    <div class="image-container">
                      <picture id="overview-tile-onetap-setup-1" class="overview-tile-onetap-setup tile-image loaded" data-picture-loaded="">
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_small.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_small_2x.jpg 2x
                            " media="(max-width:734px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_medium.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_medium_2x.jpg 2x
                            " media="(max-width:1068px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_large.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_large_2x.jpg 2x
                            " media="(min-width:0px)" />
                        <img src="http://localhost/Mini_Project_G4/images/airpods/tile_onetap_setup__fzj1m8dhjoq6_large.jpg" onload="__lp(event)" alt="" />
                      </picture>
                    </div>
                  </div>
                </div>
                <input type="checkbox" class="tile-overlay-toggle" id="tile-overlay-toggle-one-tap" data-analytics-title="open - one-tap setup" data-analytics-click="prop3:open - one-tap setup" data-analytics-intrapage-link="" />
                <div class="tile-overlay">
                  <label tabindex="0" class="tile-button-wrapper" for="tile-overlay-toggle-one-tap">
                    <span class="tile-button">
                      <svg class="tile-icon-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M17.25,8.51H11.5V2.75A1.5,1.5,0,0,0,10,1.25h0a1.5,1.5,0,0,0-1.5,1.5V8.5H2.75a1.5,1.5,0,0,0,0,3H8.5v5.75a1.5,1.5,0,0,0,1.5,1.5h0a1.5,1.5,0,0,0,1.5-1.5V11.5h5.75a1.5,1.5,0,0,0,0-3Z"></path>
                      </svg>
                    </span>
                    <span class="tile-button-text" role="button" aria-expanded="false" aria-controls="content-toggle-one-tap">
                      <span class="visuallyhidden">ดูเพิ่มเติมการตั้งค่าด้วยการแตะ<wbr /><span class="nowrap">แค่ครั้งเดียว</span></span>
                    </span>
                  </label>
                  <div class="tile-overlay-content" role="group" aria-label="More content about One-tap setup" aria-hidden="true">
                    <div class="tile-overlay-header" id="content-toggle-one-tap">
                      <h4 class="tile-overlay-headline typography-connection-tile-headline">
                        ตั้งค่าด้วยการแตะ<wbr /><span class="nowrap">แค่ครั้งเดียว</span>
                      </h4>
                    </div>
                    <div class="tile-overlay-body">
                      <p class="tile-overlay-copy typography-subsection-copy">
                        เชื่อมต่อกับ iPhone หรือ iPad ของคุณ<wbr /><span class="nowrap">ได้ทันที</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="gallery-item-automatic-switching" class="gallery-item" data-ac-gallery-item="" role="listitem" style="opacity: 1; transform: translate(403px, 0px)">
              <div class="tile tile-rounded tile-with-overlay tile-automatic-switching" data-component-list="TileOverlay">
                <div class="tile-content">
                  <div class="tile-header">
                    <h4 class="tile-headline typography-connection-tile-headline">
                      การสลับอุปกรณ์อัตโนมัติ
                    </h4>
                  </div>
                  <div class="tile-body">
                    <div class="image-container grid-center">
                      <picture id="overview-tile-automatic-switching-1" class="overview-tile-automatic-switching tile-image loaded" data-picture-loaded="">
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_small.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_small_2x.jpg 2x
                            " media="(max-width:734px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_medium.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_medium_2x.jpg 2x
                            " media="(max-width:1068px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_large.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_large_2x.jpg 2x
                            " media="(min-width:0px)" />
                        <img src="http://localhost/Mini_Project_G4/images/airpods/tile_automatic_switching__etjisgj91gk2_large.jpg" onload="__lp(event)" alt="" />
                      </picture>
                    </div>
                  </div>
                </div>
                <input type="checkbox" class="tile-overlay-toggle" id="tile-overlay-toggle-automatic-switching" data-analytics-title="open - automatic switching" data-analytics-click="prop3:open - automatic switching" data-analytics-intrapage-link="" />
                <div class="tile-overlay">
                  <label tabindex="0" class="tile-button-wrapper" for="tile-overlay-toggle-automatic-switching">
                    <span class="tile-button">
                      <svg class="tile-icon-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M17.25,8.51H11.5V2.75A1.5,1.5,0,0,0,10,1.25h0a1.5,1.5,0,0,0-1.5,1.5V8.5H2.75a1.5,1.5,0,0,0,0,3H8.5v5.75a1.5,1.5,0,0,0,1.5,1.5h0a1.5,1.5,0,0,0,1.5-1.5V11.5h5.75a1.5,1.5,0,0,0,0-3Z"></path>
                      </svg>
                    </span>
                    <span class="tile-button-text" role="button" aria-expanded="false" aria-controls="content-toggle-automatic-switching">
                      <span class="visuallyhidden">ดูเพิ่มเติมเกี่ยวกับการสลับอุปกรณ์อัตโนมัติ</span>
                    </span>
                  </label>
                  <div class="tile-overlay-content" role="group" aria-label="More content about Automatic switching" aria-hidden="true">
                    <div class="tile-overlay-header" id="content-toggle-automatic-switching">
                      <h4 class="tile-overlay-headline typography-connection-tile-headline">
                        การสลับอุปกรณ์อัตโนมัติ
                      </h4>
                    </div>
                    <div class="tile-overlay-body">
                      <p class="tile-overlay-copy typography-subsection-copy">
                        การสลับอุปกรณ์อัตโนมัติช่วยให้คุณ<wbr /><span class="nowrap">ฟังเสียง</span>สลับไปมาระหว่าง iPhone, Apple&nbsp;Watch, iPad, Mac
                        และ Apple&nbsp;TV ได้แบบ<wbr /><span class="nowrap">ไม่มีสะดุด<sup class="footnote footnote-number"><a href="#" aria-label="Footnote 1">1</a></sup></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="gallery-item-audio-sharing" class="gallery-item" data-ac-gallery-item="" role="listitem" style="opacity: 1; transform: translate(806px, 0px)">
              <div class="tile tile-rounded tile-with-overlay tile-audio-sharing" data-component-list="TileOverlay">
                <div class="tile-content">
                  <div class="tile-header">
                    <h4 class="tile-headline typography-connection-tile-headline">
                      การแชร์เสียง
                    </h4>
                  </div>
                  <div class="tile-body">
                    <div class="image-container grid-center">
                      <picture id="overview-tile-audio-sharing-1" class="overview-tile-audio-sharing tile-image loaded" data-picture-loaded="">
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_small.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_small_2x.jpg 2x
                            " media="(max-width:734px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_medium.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_medium_2x.jpg 2x
                            " media="(max-width:1068px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_large.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_large_2x.jpg 2x
                            " media="(min-width:0px)" />
                        <img src="http://localhost/Mini_Project_G4/images/airpods/tile_audio_sharing__ord9ku1kssq6_large.jpg" onload="__lp(event)" alt="" />
                      </picture>
                    </div>
                  </div>
                </div>
                <input type="checkbox" class="tile-overlay-toggle" id="tile-overlay-toggle-audio-sharing" data-analytics-title="open - audio sharing" data-analytics-click="prop3:open - audio sharing" data-analytics-intrapage-link="" />
                <div class="tile-overlay">
                  <label tabindex="0" class="tile-button-wrapper" for="tile-overlay-toggle-audio-sharing">
                    <span class="tile-button">
                      <svg class="tile-icon-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M17.25,8.51H11.5V2.75A1.5,1.5,0,0,0,10,1.25h0a1.5,1.5,0,0,0-1.5,1.5V8.5H2.75a1.5,1.5,0,0,0,0,3H8.5v5.75a1.5,1.5,0,0,0,1.5,1.5h0a1.5,1.5,0,0,0,1.5-1.5V11.5h5.75a1.5,1.5,0,0,0,0-3Z"></path>
                      </svg>
                    </span>
                    <span class="tile-button-text" role="button" aria-expanded="false" aria-controls="content-toggle-audio-sharing">
                      <span class="visuallyhidden">ดูเพิ่มเติมเกี่ยวกับการแชร์เสียง</span>
                    </span>
                  </label>
                  <div class="tile-overlay-content" role="group" aria-label="More content about Audio Sharing" aria-hidden="true">
                    <div class="tile-overlay-header" id="content-toggle-audio-sharing">
                      <h4 class="tile-overlay-headline typography-connection-tile-headline">
                        การแชร์เสียง
                      </h4>
                    </div>
                    <div class="tile-overlay-body">
                      <p class="tile-overlay-copy typography-subsection-copy">
                        แชร์เพลง พ็อดคาสท์ หรือเสียงอื่นๆ ระหว่าง AirPods
                        สองคู่ด้วยคุณสมบัติ "การแชร์เสียง"<sup class="footnote footnote-number"><a href="##footnote-3" aria-label="Footnote 2">2</a></sup>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="gallery-item-siri" class="gallery-item" data-ac-gallery-item="" role="listitem" style="opacity: 1; transform: translate(1209px, 0px)">
              <div class="tile tile-rounded tile-with-overlay tile-siri" data-component-list="TileOverlay">
                <div class="tile-content">
                  <div class="tile-header">
                    <h4 class="tile-headline typography-connection-tile-headline">
                      Siri ที่พร้อมใช้งานเสมอ
                    </h4>
                  </div>
                  <div class="tile-body">
                    <div class="copy-block grid-center">
                      <p class="typography-siri-utterance large-10 large-centered siri-utterance">
                        หวัดดี Siri <br class="ag-lg" /><br class="ag-md" /><wbr /><span class="nowrap">เปิดเพลง</span><wbr /><span class="nowrap">สำหรับออก</span><br class="ag-lg" /><br class="ag-md" /><wbr /><span class="nowrap">กำลังกาย</span><wbr /><span class="nowrap">หน่อย</span>
                      </p>
                    </div>
                  </div>
                </div>
                <input type="checkbox" class="tile-overlay-toggle" id="tile-overlay-toggle-siri" data-analytics-title="open - always-on siri" data-analytics-click="prop3:open - always-on siri" data-analytics-intrapage-link="" />
                <div class="tile-overlay">
                  <label tabindex="0" class="tile-button-wrapper" for="tile-overlay-toggle-siri">
                    <span class="tile-button">
                      <svg class="tile-icon-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M17.25,8.51H11.5V2.75A1.5,1.5,0,0,0,10,1.25h0a1.5,1.5,0,0,0-1.5,1.5V8.5H2.75a1.5,1.5,0,0,0,0,3H8.5v5.75a1.5,1.5,0,0,0,1.5,1.5h0a1.5,1.5,0,0,0,1.5-1.5V11.5h5.75a1.5,1.5,0,0,0,0-3Z"></path>
                      </svg>
                    </span>
                    <span class="tile-button-text" role="button" aria-expanded="false" aria-controls="content-toggle-siri">
                      <span class="visuallyhidden">ดูเพิ่มเติมเกี่ยวกับ Siri ที่พร้อมใช้งานเสมอ</span>
                    </span>
                  </label>
                  <div class="tile-overlay-content" role="group" aria-label="More content about Always-on Siri" aria-hidden="true">
                    <div class="tile-overlay-header" id="content-toggle-siri">
                      <h4 class="tile-overlay-headline typography-connection-tile-headline">
                        Siri ที่พร้อมใช้งานเสมอ
                      </h4>
                    </div>
                    <div class="tile-overlay-body">
                      <p class="tile-overlay-copy typography-subsection-copy">
                        เพียงพูดว่า "หวัดดี Siri"
                        แค่นี้ก็สามารถเรียกใช้งานผู้ช่วยคนโปรดของคุณ
                        <wbr /><span class="nowrap">เพื่อควบคุม</span>เพลง
                        สายโทรเข้าออก <wbr /><span class="nowrap">ระดับเสียง</span>
                        เส้นทาง และอีกมากมายได้โดยไม่ต้องกระดิกนิ้วเลยด้วยซ้ำ
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li id="gallery-item-announce-notifications" class="gallery-item" data-ac-gallery-item="" role="listitem" style="opacity: 1; transform: translate(1612px, 0px)">
              <div class="tile tile-rounded tile-with-overlay tile-announce-notifications" data-component-list="TileOverlay">
                <div class="tile-content">
                  <div class="tile-header">
                    <h4 class="tile-headline typography-connection-tile-headline">
                      การอ่านการแจ้งเตือน
                    </h4>
                  </div>
                  <div class="tile-body">
                    <div class="copy-block grid-center">
                      <picture id="overview-tile-announce-notifications-1" class="overview-tile-announce-notifications tile-image loaded" data-picture-loaded="">
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_announce_notifications__f2jmuafd1wey_small.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_announce_notifications__f2jmuafd1wey_small_2x.jpg 2x
                            " media="(max-width:734px)" />
                        <source srcset="
                              http://localhost/Mini_Project_G4/images/airpods/tile_announce_notifications__f2jmuafd1wey_large.jpg,
                              http://localhost/Mini_Project_G4/images/airpods/tile_announce_notifications__f2jmuafd1wey_large_2x.jpg 2x
                            " media="(min-width:0px)" />
                        <img src="http://localhost/Mini_Project_G4/images/airpods/tile_announce_notifications__f2jmuafd1wey_large.jpg" onload="__lp(event)" alt="" />
                      </picture>
                      <p class="typography-eyebrow-reduced">
                        รมิดาเขียนว่า: "กำลังไปที่ร้าน <wbr /><span class="nowrap">จะฝากซื้ออะไรมั้ย"</span>
                      </p>
                    </div>
                  </div>
                </div>
                <input type="checkbox" class="tile-overlay-toggle" id="tile-overlay-toggle-announce-notifications" data-analytics-title="open - announce notifications" data-analytics-click="prop3:open - announce notifications" data-analytics-intrapage-link="" />
                <div class="tile-overlay">
                  <label tabindex="0" class="tile-button-wrapper" for="tile-overlay-toggle-announce-notifications">
                    <span class="tile-button">
                      <svg class="tile-icon-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M17.25,8.51H11.5V2.75A1.5,1.5,0,0,0,10,1.25h0a1.5,1.5,0,0,0-1.5,1.5V8.5H2.75a1.5,1.5,0,0,0,0,3H8.5v5.75a1.5,1.5,0,0,0,1.5,1.5h0a1.5,1.5,0,0,0,1.5-1.5V11.5h5.75a1.5,1.5,0,0,0,0-3Z"></path>
                      </svg>
                    </span>
                    <span class="tile-button-text" role="button" aria-expanded="false" aria-controls="content-toggle-announce-notifications">
                      <span class="visuallyhidden">ดูเพิ่มเติมเกี่ยวกับ การอ่านการแจ้งเตือน</span>
                    </span>
                  </label>
                  <div class="tile-overlay-content" role="group" aria-label="ดูเพิ่มเติมเกี่ยวกับ การอ่านการแจ้งเตือน" aria-hidden="true">
                    <div class="tile-overlay-header" id="content-toggle-announce-notifications">
                      <h4 class="tile-overlay-headline typography-connection-tile-headline">
                        การอ่านการแจ้งเตือน
                      </h4>
                    </div>
                    <div class="tile-overlay-body">
                      <p class="tile-overlay-copy typography-subsection-copy">
                        Siri สามารถอ่านข้อความที่สำคัญ<br class="ag-lg" />หรือการแจ้งเตือนต่างๆ ทันที<wbr /><span class="nowrap">ที่ได้รับ</span>
                        <br class="ag-lg" />เว้นแต่ว่าคุณกำลังติดสายหรือฟังเพลงอยู่
                        และคุณยัง<wbr /><span class="nowrap">ตอบกลับ</span>ข้อความได้เลยโดยไม่ต้องเปิดอุปกรณ์ขึ้นมา<sup class="footnote footnote-number"><a href="##footnote-4" aria-label="Footnote 3">3</a></sup>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div data-analytics-gallery-interaction-type="paddlenav" class="paddlenav paddlenav-framed">
          <ul>
            <li><button aria-label="ก่อนหน้า" class="paddlenav-arrow paddlenav-arrow-previous" disabled="true"></button></li>
            <li><button aria-label="ถัดไป" class="paddlenav-arrow paddlenav-arrow-next"></button></li>
          </ul>
        </div>
      </div>
    </section>


    <section class="section section-compare current-airpods" data-analytics-section-engagement="name:compare">
      <span style="display: none">
        <p>
          <sup class="footnote footnote-number"><a href="##footnote-5" aria-label="Footnote 4">4</a></sup>
          <sup class="footnote footnote-number"><a href="##footnote-6" aria-label="Footnote 5">5</a></sup>
          <sup class="footnote footnote-number"><a href="##footnote-7" aria-label="Footnote 6">6</a></sup>
          <sup class="footnote footnote-number"><a href="##footnote-8" aria-label="Footnote 7">7</a></sup>
        </p>
      </span>
      <link rel="stylesheet" href="http://localhost/Mini_Project_G4/wss/fonts/fonts1" />

      <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/compare.built.css" />

      <div class="viewport-content compare-module-wrapper">
        <div class="wrapper">
          <h2 class="typography-compare-section-headline">
            AirPods รุ่นไหน<wbr /><span class="nowrap">ที่ใช่สำหรับคุณ</span>
          </h2>
          <div class="compare-grid">


            <!-- airpods-2nd-gen -->

            <div class="airpods-2nd-gen device">
              <div class="image-wrap">
                <a href="#" data-analytics-title="learn more - airpods 2nd generation" aria-label="">
                  <figure class="image-airpods-2nd-gen" data-anim-lazy-image=""></figure>
                </a>
              </div>
              <div class="device-content has-dynamic-content">
                <h3 class="typography-compare-device-headline">
                  AirPods
                  <span class="typography-compare-copy subhead">รุ่นที่ 2</span>
                </h3>
                <p class="typography-compare-price pricing" data-pricing-product="airpods-2nd-gen" data-product-template="${price.display.smart}" data-pricing-loaded="">
                  ฿4,990
                </p>
                <ul class="links-stacked">
                  <li>
                    <a href="#" data-analytics-title="buy - airpods 2nd generation" aria-label="ซื้อ AirPods (รุ่นที่ 2)" class="button button-reduced">ซื้อ</a>
                  </li>
                  <li>
                    <a href="#" data-analytics-title="learn more - airpods 2nd generation" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods (รุ่นที่ 2)" class="icon-wrapper typography-compare-copy learn-more"><span class="icon-copy">ดูเพิ่มเติม</span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="airpods-2nd-gen spatial-audio row">
              <span>
                <p aria-hidden="true" class="mdash">—</p>
                <p class="visuallyhidden">ไม่มีระบบเสียงตามตำแหน่ง</p>
              </span>
            </div>
            <div class="airpods-2nd-gen anc-transparency row">
              <span>
                <p aria-hidden="true" class="mdash">—</p>
                <p class="visuallyhidden">
                  ไม่มีการตัดเสียงรบกวนแบบแอ็คทีฟและโหมดฟังเสียงภายนอก
                </p>
              </span>
            </div>
            <div class="airpods-2nd-gen sweat-and-water row">
              <span>
                <p aria-hidden="true" class="mdash">—</p>
                <p class="visuallyhidden">
                  ไม่มีความสามารถในการทนเหงื่อและน้ำ
                </p>
              </span>
            </div>
            <div class="airpods-2nd-gen charging row">
              <div class="feature-wrapper">
                <figure class="image-charging image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>การชาร์จแบบ Lightning</p>
                </span>
              </div>
            </div>
            <div class="airpods-2nd-gen single-charge row">
              <figure class="compare-badge">
                <div class="compare-badge-content">
                  <div class="compare-badge-value typography-compare-badge">
                    5 ชม.
                  </div>
                  <div class="compare-badge-caption typography-compare-copy">
                    <p>
                      ฟังได้นานสูงสุด 5 ชั่วโมง<wbr /><span class="nowrap">ด้วยการชาร์จ</span><wbr /><span class="nowrap">เพียงครั้งเดียว
                        <sup class="footnote footnote-airpods"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-17" aria-label="footnote 17">17</a></sup>
                        <sup class="footnote footnote-airpods-pro"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                        <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                        <sup class="footnote footnote-airpods-max"><a href="##footnote-9" aria-label="footnote 9">9</a></sup>
                        <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup></span>
                    </p>
                  </div>
                </div>
              </figure>
            </div>

            <!-- airpods-3rd-gen -->

            <div class="airpods-3rd-gen device">
              <div class="image-wrap">
                <a href="#" data-analytics-title="learn more - airpods 3rd generation" aria-label="">
                  <figure class="image-airpods-3rd-gen" data-anim-lazy-image=""></figure>
                </a>
              </div>
              <div class="device-content has-dynamic-content">
                <span class="violator-frameless typography-caption new-violator">ใหม่</span>
                <h3 class="typography-compare-device-headline">
                  AirPods
                  <span class="typography-compare-copy subhead">รุ่นที่ 3</span>
                </h3>
                <p class="typography-compare-price pricing" data-pricing-product="airpods-3rd-gen" data-product-template="${price.display.smart}" data-pricing-loaded="">
                  ฿6,790
                </p>
                <ul class="links-stacked">
                  <li>
                    <a href="https://www.apple.com/th/shop/goto/product/MME73" data-analytics-title="buy - airpods 3rd generation" aria-label="ซื้อ AirPods (รุ่นที่ 3)" class="button button-reduced">ซื้อ</a>
                  </li>
                  <li>
                    <a href="#" data-analytics-title="learn more - airpods 3rd generation" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods รุ่นที่ 3" class="icon-wrapper typography-compare-copy learn-more"><span class="icon-copy">ดูเพิ่มเติม</span></a>
                  </li>
                  <li class="compare-quicklook-component typography-compare-copy">
                    <a rel="ar" href="https://www.apple.com/105/media/us/airpods-3rd-generation/2021/3c0b27aa-a5fe-4365-a9ae-83c28d10fa21/ar/airpods_magsafe_charging_ios15.usdz" class="icon icon-after icon-arkit" data-analytics-title="see airpods 3rd generation in ar" data-analytics-click="prop3:see airpods 3rd generation in ar" aria-label="ดู AirPods (รุ่นที่ 3) ในแบบความจริงเสริม" data-analytics-intrapage-link="">
                      <img src="http://localhost/Mini_Project_G4/images/airpods/quicklook_placeholder__blj911n6rvg2_large.jpg" /><span>ดูในแบบ AR</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="airpods-3rd-gen spatial-audio row">
              <div class="feature-wrapper">
                <figure class="image-spatial-audio image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    ระบบเสียงตามตำแหน่ง<br /><wbr /><span class="nowrap">พร้อมการติดตาม</span><wbr /><span class="nowrap">ศีรษะ</span><br /><wbr /><span class="nowrap">แบบไดนามิก
                      <sup class="footnote footnote-airpods"><a href="##footnote-4" aria-label="footnote 4">4</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup></span>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-3rd-gen anc-transparency row">
              <span>
                <p aria-hidden="true" class="mdash">—</p>
                <p class="visuallyhidden">
                  ไม่มีการตัดเสียงรบกวนแบบแอ็คทีฟและโหมดฟังเสียงภายนอก
                </p>
              </span>
            </div>
            <div class="airpods-3rd-gen sweat-and-water row">
              <div class="feature-wrapper">
                <figure class="image-sweat-and-water image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    ทนเหงื่อและน้ำ
                    <sup class="footnote footnote-airpods"><a href="##footnote-5" aria-label="footnote 5">5</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-pro"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-max"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                    <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-10" aria-label="footnote 10">10</a></sup>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-3rd-gen charging row">
              <div class="feature-wrapper">
                <figure class="image-charging image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    การชาร์จแบบ MagSafe, <br />ไร้สาย และ Lightning
                    <sup class="footnote footnote-airpods"><a href="##footnote-6" aria-label="footnote 6">6</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-10" aria-label="footnote 10">10</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                    <sup class="footnote footnote-airpods-pro"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                    <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                    <sup class="footnote footnote-airpods-max"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                    <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-3rd-gen single-charge row">
              <figure class="compare-badge">
                <div class="compare-badge-content">
                  <div class="compare-badge-value typography-compare-badge">
                    6 ชม.
                  </div>
                  <div class="compare-badge-caption typography-compare-copy">
                    <p>
                      ฟังได้นานสูงสุด 6 ชั่วโมง<wbr /><span class="nowrap">ด้วยการชาร์จ</span><wbr /><span class="nowrap">เพียงครั้งเดียว
                        <sup class="footnote footnote-airpods"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-17" aria-label="footnote 17">17</a></sup>
                        <sup class="footnote footnote-airpods-pro"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                        <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                        <sup class="footnote footnote-airpods-max"><a href="##footnote-9" aria-label="footnote 9">9</a></sup>
                        <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup></span>
                    </p>
                  </div>
                </div>
              </figure>
            </div>


            <!-- airpods-pro -->

            <div class="airpods-pro device">
              <div class="image-wrap">
                <a href="#" data-analytics-title="learn more - airpods pro" aria-label="">
                  <figure class="image-airpods-pro" data-anim-lazy-image=""></figure>
                </a>
              </div>
              <div class="device-content has-dynamic-content">
                <h3 class="typography-compare-device-headline">
                  AirPods Pro
                  <span class="typography-compare-copy subhead">&nbsp;</span>
                </h3>
                <p class="typography-compare-price pricing" data-pricing-product="airpods-pro" data-product-template="${price.display.smart}" data-pricing-loaded="">
                  ฿8,992
                </p>
                <ul class="links-stacked">
                  <li>
                    <a href="https://www.apple.com/th/shop/goto/product/MLWK3" data-analytics-title="buy - airpods pro" aria-label="ซื้อ AirPods Pro" class="button button-reduced">ซื้อ</a>
                  </li>
                  <li>
                    <a href="#" data-analytics-title="learn more - airpods pro" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods Pro" class="icon-wrapper typography-compare-copy learn-more"><span class="icon-copy">ดูเพิ่มเติม</span></a>
                  </li>
                  <li class="compare-quicklook-component typography-compare-copy">
                    <a rel="ar" href="https://www.apple.com/105/media/us/airpods-pro/2021/8d0b339b-f0f9-4522-aaa5-e047097ea8ec/ar/airpods_pro_ios15.usdz" class="icon icon-after icon-arkit" data-analytics-title="see airpods pro in ar" data-analytics-click="prop3:see airpods pro in ar" aria-label="ดู AirPods Pro ในแบบความจริงเสริม" data-analytics-intrapage-link="">
                      <img src="http://localhost/Mini_Project_G4/images/airpods/quicklook_placeholder__blj911n6rvg2_large.jpg" /><span>ดูในแบบ AR</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="airpods-pro spatial-audio row">
              <div class="feature-wrapper">
                <figure class="image-spatial-audio image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    ระบบเสียงตามตำแหน่ง<br /><wbr /><span class="nowrap">พร้อมการติดตาม</span><wbr /><span class="nowrap">ศีรษะ</span><br /><wbr /><span class="nowrap">แบบไดนามิก
                      <sup class="footnote footnote-airpods"><a href="##footnote-4" aria-label="footnote 4">4</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup></span>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-pro anc-transparency row">
              <div class="feature-wrapper">
                <div class="inline-icons">
                  <figure class="image-anc image-compare-icon" data-anim-lazy-image=""></figure>
                  <figure class="image-transparency image-compare-icon" data-anim-lazy-image=""></figure>
                </div>
                <span class="typography-compare-copy column">
                  <p>
                    การตัดเสียงรบกวน<wbr /><span class="nowrap">แบบแอ็คทีฟ</span><wbr /><span class="nowrap">และโหมด</span><wbr /><span class="nowrap">ฟังเสียงภายนอก</span>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-pro sweat-and-water row">
              <div class="feature-wrapper">
                <figure class="image-sweat-and-water image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    ทนเหงื่อและน้ำ
                    <sup class="footnote footnote-airpods"><a href="##footnote-5" aria-label="footnote 5">5</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-pro"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-2" aria-label="footnote 2">2</a></sup>
                    <sup class="footnote footnote-airpods-max"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                    <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-10" aria-label="footnote 10">10</a></sup>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-pro charging row">
              <div class="feature-wrapper">
                <figure class="image-charging image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    การชาร์จแบบ MagSafe, <br />ไร้สาย และ Lightning
                    <sup class="footnote footnote-airpods"><a href="##footnote-6" aria-label="footnote 6">6</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                    <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-10" aria-label="footnote 10">10</a></sup>
                    <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                    <sup class="footnote footnote-airpods-pro"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                    <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                    <sup class="footnote footnote-airpods-max"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                    <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-pro single-charge row">
              <figure class="compare-badge">
                <div class="compare-badge-content">
                  <div class="compare-badge-value typography-compare-badge">
                    4.5 ชม.
                  </div>
                  <div class="compare-badge-caption typography-compare-copy">
                    <p>
                      ฟังได้นานสูงสุด 4.5 ชั่วโมง<wbr /><span class="nowrap">ด้วยการชาร์จ</span><wbr /><span class="nowrap">เพียงครั้งเดียว</span>
                      <sup class="footnote footnote-airpods"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-17" aria-label="footnote 17">17</a></sup>
                      <sup class="footnote footnote-airpods-pro"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                      <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                      <sup class="footnote footnote-airpods-max"><a href="##footnote-9" aria-label="footnote 9">9</a></sup>
                      <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup>
                    </p>
                  </div>
                </div>
              </figure>
            </div>


            <!-- airpods-max -->


            <div class="airpods-max device">
              <div class="image-wrap">
                <a href="#" data-analytics-title="learn more - airpods max" aria-label="">
                  <figure class="image-airpods-max" data-anim-lazy-image=""></figure>
                </a>
              </div>
              <div class="device-content has-dynamic-content">
                <h3 class="typography-compare-device-headline">
                  AirPods Max
                  <span class="typography-compare-copy subhead">&nbsp;</span>
                </h3>
                <p class="typography-compare-price pricing" data-pricing-product="airpods-max" data-product-template="${price.display.smart}" data-pricing-loaded="">
                  ฿19,900
                </p>
                <ul class="links-stacked">
                  <li>
                    <a href="#" data-analytics-title="buy - airpods max" aria-label="ซื้อ AirPods Max" class="button button-reduced">ซื้อ</a>
                  </li>
                  <li>
                    <a href="#" data-analytics-title="learn more - airpods max" aria-label="ดูเพิ่มเติมเกี่ยวกับ AirPods Max" class="icon-wrapper typography-compare-copy learn-more"><span class="icon-copy">ดูเพิ่มเติม</span></a>
                  </li>
                  <li class="compare-quicklook-component typography-compare-copy">
                    <a rel="ar" href="https://www.apple.com/105/media/us/airpods-max/2020/996b980b-3131-44f1-af6c-fe72f9b3bfb5/quick-look/airpods_max_green_ios14_rev1.usdz" class="icon icon-after icon-arkit" data-analytics-title="see airpods max in ar" data-analytics-click="prop3:see airpods max in ar" aria-label="ดู AirPods Max ในแบบความจริงเสริม" data-analytics-intrapage-link="">
                      <img src="http://localhost/Mini_Project_G4/images/airpods/quicklook_placeholder__blj911n6rvg2_large.jpg" /><span>ดูในแบบ AR</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="airpods-max spatial-audio row">
              <div class="feature-wrapper">
                <figure class="image-spatial-audio image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>
                    ระบบเสียงตามตำแหน่ง<br /><wbr /><span class="nowrap">พร้อมการติดตาม</span><wbr /><span class="nowrap">ศีรษะ</span><br /><wbr /><span class="nowrap">แบบไดนามิก
                      <sup class="footnote footnote-airpods"><a href="##footnote-4" aria-label="footnote 4">4</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-13" aria-label="footnote 13">13</a></sup>
                      <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max"><a href="##footnote-1" aria-label="footnote 1">1</a></sup>
                      <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-1" aria-label="footnote 1">1</a></sup></span>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-max anc-transparency row">
              <div class="feature-wrapper">
                <div class="inline-icons">
                  <figure class="image-anc image-compare-icon" data-anim-lazy-image=""></figure>
                  <figure class="image-transparency image-compare-icon" data-anim-lazy-image=""></figure>
                </div>
                <span class="typography-compare-copy column">
                  <p>
                    การตัดเสียงรบกวน<wbr /><span class="nowrap">แบบแอ็คทีฟ</span><wbr /><span class="nowrap">และโหมด</span><wbr /><span class="nowrap">ฟังเสียงภายนอก</span>
                  </p>
                </span>
              </div>
            </div>
            <div class="airpods-max sweat-and-water row">
              <span>
                <p aria-hidden="true" class="mdash">—</p>
                <p class="visuallyhidden">
                  ไม่มีความสามารถในการทนเหงื่อและน้ำ
                </p>
              </span>
            </div>
            <div class="airpods-max charging row">
              <div class="feature-wrapper">
                <figure class="image-charging image-compare-icon" data-anim-lazy-image=""></figure>
                <span class="typography-compare-copy column">
                  <p>การชาร์จแบบ Lightning</p>
                </span>
              </div>
            </div>
            <div class="airpods-max single-charge row">
              <figure class="compare-badge">
                <div class="compare-badge-content">
                  <div class="compare-badge-value typography-compare-badge">
                    20 ชม.
                  </div>
                  <div class="compare-badge-caption typography-compare-copy">
                    <p>
                      ฟังได้นานสูงสุด 20 ชั่วโมง<wbr /><span class="nowrap">ด้วยการชาร์จ</span><wbr /><span class="nowrap">เพียงครั้งเดียว
                        <sup class="footnote footnote-airpods"><a href="##footnote-7" aria-label="footnote 7">7</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen"><a href="##footnote-16" aria-label="footnote 16">16</a></sup>
                        <sup class="footnote footnote-airpods-2nd-gen-specs"><a href="##footnote-15" aria-label="footnote 15">15</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen"><a href="##footnote-11" aria-label="footnote 11">11</a></sup>
                        <sup class="footnote footnote-airpods-3rd-gen-specs"><a href="##footnote-17" aria-label="footnote 17">17</a></sup>
                        <sup class="footnote footnote-airpods-pro"><a href="##footnote-8" aria-label="footnote 8">8</a></sup>
                        <sup class="footnote footnote-airpods-pro-specs"><a href="##footnote-14" aria-label="footnote 14">14</a></sup>
                        <sup class="footnote footnote-airpods-max"><a href="##footnote-9" aria-label="footnote 9">9</a></sup>
                        <sup class="footnote footnote-airpods-max-specs"><a href="##footnote-12" aria-label="footnote 12">12</a></sup></span>
                    </p>
                  </div>
                </div>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br><br><br>
  </main>

  <!--/main-->


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Brand",
      "@id": "##brand",
      "name": "AirPods",
      "description": "AirPods รุ่นต่างๆ มอบประสบการณ์แบบไร้สายอย่างที่ไม่มีใครเทียบ ตั้งแต่การตั้งค่าที่มหัศจรรย์จนถึงเสียงคุณภาพสูง มาพร้อมการสลักข้อความฟรี",
      "url": "#",
      "mainEntityOfPage": "#",
      "image": "https://www.apple.com/v/airpods/q/images/meta/airpods__dh7xkbort402_og.png"
    }
  </script>
  <script src="http://localhost/Mini_Project_G4/overview/main.built.js" type="text/javascript" charset="utf-8"></script>
  <span style="visibility: hidden; position: absolute; top: 0px; z-index: -1">&nbsp;</span>
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