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
<!-- saved from url=(0048)https://www.apple.com/th-en/shop/accessories/all -->
<html class="th js en en-th seg-consumer apac no-supports-applepay no-supports-apw svg no-touch no-ie no-oldie no-ios supports-animation supports-columns supports-backdrop-filter no-supports-ar as-keyboarduser" lang="en-TH">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=1024" />
  <title>
    Accessories - Apple
  </title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="format-detection" content="telephone=no" />
  <meta property="og:site_name" content="Apple (TH)" />
  <meta name="twitter:site" content="@apple" />
  <meta property="og:title" content="Apple Accessories for Apple Watch, iPhone, iPad, iPod and Mac" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:image" content="https://as-images.apple.com/is/og-default?wid=1200&amp;hei=630&amp;fmt=jpeg&amp;qlt=95&amp;.v=1525370171638" />
  <meta property="og:description" content="Shop Apple accessories for Apple Watch, iPhone, iPad, iPod and Mac. Search by product line or browse by category. Buy now with fast, free shipping." />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="en_TH" />
  <meta property="og:url" content="https://www.apple.com/th-en/shop/accessories/all" />
  <meta name="description" content="Shop Apple accessories for Apple Watch, iPhone, iPad, iPod and Mac. Search by product line or browse by category. Buy now with fast, free shipping." />
  <link rel="stylesheet" type="text/css" href="http://localhost/Mini_Project_G4/overview/ac-globalnav.built.css" />
  <link rel="canonical" href="https://www.apple.com/th-en/shop/accessories/all" />
  <script>
    document.cookie =
      "as_sfa=Mnx0aC1lbnx0aC1lbnx8ZW5fVEh8Y29uc3VtZXJ8aW50ZXJuZXR8MHwwfDE; path=/; domain=apple.com; expires=Fri, 23-Sep-2022 08:18:35 GMT; Secure;";
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": "1",
        "name": "All Accessories"
      }]
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MN663?wid=710&hei=465&fmt=png-alpha&.v=1646083589004",
      "url": "https://www.apple.com/th-en/shop/product/MN663FE/A/iphone-13-pro-silicone-case-with-magsafe-lemon-zest",
      "name": "iPhone 13 Pro Silicone Case with MagSafe - Lemon Zest",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 1790.0,
        "availability": "http://schema.org/InStock",
        "sku": "MN663FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MN6H3?wid=266&hei=291&fmt=png-alpha&.v=1645509721263",
      "url": "https://www.apple.com/th-en/shop/product/MN6H3FE/A/iphone-se-silicone-case-productred",
      "name": "iPhone SE Silicone Case - (PRODUCT)RED",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 1290.0,
        "availability": "http://schema.org/InStock",
        "sku": "MN6H3FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-single-select-202104?wid=266&hei=291&fmt=png-alpha&.v=1617761671000",
      "url": "https://www.apple.com/th-en/shop/product/MX532TH/A/1-pack",
      "name": "AirTag",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 990.0,
        "availability": "http://schema.org/InStock",
        "sku": "MX532TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MN1L3ref?wid=266&hei=291&fmt=png-alpha&.v=1645079879837",
      "url": "https://www.apple.com/th-en/shop/product/MN1L3FE/A/45mm-flamingo-braided-solo-loop-size-4",
      "name": "45mm Flamingo Braided Solo Loop - Size 4",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 3100.0,
        "availability": "http://schema.org/InStock",
        "sku": "MN1L3FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNA73?wid=266&hei=291&fmt=png-alpha&.v=1645642309453",
      "url": "https://www.apple.com/th-en/shop/product/MNA73FE/A/smart-folio-for-ipad-air-5th-generation-marine-blue",
      "name": "Smart Folio for iPad Air (5th generation) - Marine Blue",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 2990.0,
        "availability": "http://schema.org/InStock",
        "sku": "MNA73FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MME73?wid=266&hei=291&fmt=png-alpha&.v=1632861342000",
      "url": "https://www.apple.com/th-en/shop/product/MME73ZA/A/airpods-3rd-generation",
      "name": "AirPods (3rd generation)",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 6790.0,
        "availability": "http://schema.org/InStock",
        "sku": "MME73ZA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MWP22?wid=266&hei=291&fmt=png-alpha&.v=1591634795000",
      "url": "https://www.apple.com/th-en/shop/product/MLWK3ZA/A/airpods-pro",
      "name": "AirPods Pro",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 8992.0,
        "availability": "http://schema.org/InStock",
        "sku": "MLWK3ZA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-silver-202011?wid=266&hei=291&fmt=png-alpha&.v=1604021221000",
      "url": "https://www.apple.com/th-en/shop/product/MGYJ3ZA/A/silver",
      "name": "AirPods Max - Silver",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 19900.0,
        "availability": "http://schema.org/InStock",
        "sku": "MGYJ3ZA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MV7N2?wid=266&hei=291&fmt=png-alpha&.v=1551489688005",
      "url": "https://www.apple.com/th-en/shop/product/MV7N2ZA/A/airpods-with-charging-case",
      "name": "AirPods (2nd generation)",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 4990.0,
        "availability": "http://schema.org/InStock",
        "sku": "MV7N2ZA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2J3?wid=266&hei=291&fmt=png-alpha&.v=1634663503000",
      "url": "https://www.apple.com/th-en/shop/product/MK2J3PA/A/beats-fit-pro-true-wireless-earbuds-sage-gray",
      "name": "Beats Fit Pro True Wireless Earbuds — Sage Gray",
      "brand": {
        "@type": "Organization",
        "name": "Beats by Dr. Dre"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 7300.0,
        "availability": "http://schema.org/InStock",
        "sku": "MK2J3PA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MJ503?wid=266&hei=291&fmt=png-alpha&.v=1621538312000",
      "url": "https://www.apple.com/th-en/shop/product/MJ503PA/A/beats-studio-buds-true-wireless-noise-cancelling-earphones-beats-red",
      "name": "Beats Studio Buds – True Wireless Noise Cancelling Earphones – Beats Red",
      "brand": {
        "@type": "Organization",
        "name": "Beats by Dr. Dre"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 5500.0,
        "availability": "http://schema.org/InStock",
        "sku": "MJ503PA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYMG2?wid=266&hei=291&fmt=png-alpha&.v=1601053195000",
      "url": "https://www.apple.com/th-en/shop/product/MYMG2PA/A/beats-flex-all-day-wireless-earphones-flame-blue",
      "name": "Beats Flex – All-Day Wireless Earphones - Flame Blue",
      "brand": {
        "@type": "Organization",
        "name": "Beats by Dr. Dre"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 2500.0,
        "availability": "http://schema.org/InStock",
        "sku": "MYMG2PA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MXJ92?wid=266&hei=291&fmt=png-alpha&.v=1580420175341",
      "url": "https://www.apple.com/th-en/shop/product/MXJ92PA/A/beats-studio3-wireless-over‑ear-headphones-shadow-gray",
      "name": "Beats Studio3 Wireless Headphones – The Beats Skyline Collection - Shadow Grey",
      "brand": {
        "@type": "Organization",
        "name": "Beats by Dr. Dre"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 12500.0,
        "availability": "http://schema.org/InStock",
        "sku": "MXJ92PA/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-single-select-202104?wid=266&hei=291&fmt=png-alpha&.v=1617761671000",
      "url": "https://www.apple.com/th-en/shop/product/MX532TH/A/1-pack",
      "name": "AirTag",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 990.0,
        "availability": "http://schema.org/InStock",
        "sku": "MX532TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-4pack-select-202104?wid=266&hei=291&fmt=png-alpha&.v=1617761669000",
      "url": "https://www.apple.com/th-en/shop/product/MX542TH/A/4-pack",
      "name": "AirTag 4 pack",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 3390.0,
        "availability": "http://schema.org/InStock",
        "sku": "MX542TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX4A2?wid=266&hei=291&fmt=png-alpha&.v=1618028917000",
      "url": "https://www.apple.com/th-en/shop/product/MX4A2FE/A/airtag-leather-loop-saddle-brown",
      "name": "AirTag Leather Loop - Saddle Brown",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 1590.0,
        "availability": "http://schema.org/InStock",
        "sku": "MX4A2FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MLYY3?wid=266&hei=291&fmt=png-alpha&.v=1629909390000",
      "url": "https://www.apple.com/th-en/shop/product/MLYY3FE/A/airtag-loop-pink-citrus",
      "name": "AirTag Loop - Pink Citrus",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 1190.0,
        "availability": "http://schema.org/InStock",
        "sku": "MLYY3FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMFC3?wid=266&hei=291&fmt=png-alpha&.v=1629917938000",
      "url": "https://www.apple.com/th-en/shop/product/MMFC3FE/A/airtag-leather-key-ring-wisteria",
      "name": "AirTag Leather Key Ring - Wisteria",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 1390.0,
        "availability": "http://schema.org/InStock",
        "sku": "MMFC3FE/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNG03?wid=266&hei=291&fmt=png-alpha&.v=1645830300886",
      "url": "https://www.apple.com/th-en/shop/product/MNG03TH/A/airtag-hermès-luggage-tag-noir",
      "name": "AirTag Hermès Luggage Tag - Noir",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 14690.0,
        "availability": "http://schema.org/InStock",
        "sku": "MNG03TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFX3?wid=266&hei=291&fmt=png-alpha&.v=1646952281032",
      "url": "https://www.apple.com/th-en/shop/product/MNFX3TH/A/airtag-hermès-key-ring-léopard",
      "name": "AirTag Hermès Key Ring - Béton",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 11690.0,
        "availability": "http://schema.org/InStock",
        "sku": "MNFX3TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFT3?wid=266&hei=291&fmt=png-alpha&.v=1645831859617",
      "url": "https://www.apple.com/th-en/shop/product/MNFT3TH/A/airtag-hermès-bag-charm-rose-sakura",
      "name": "AirTag Hermès Bag Charm - Rose Sakura",
      "brand": {
        "@type": "Organization",
        "name": "Apple"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 9990.0,
        "availability": "http://schema.org/InStock",
        "sku": "MNFT3TH/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPY2?wid=266&hei=291&fmt=png-alpha&.v=1623251254000",
      "url": "https://www.apple.com/th-en/shop/product/HNPY2ZM/A/belkin-secure-holder-with-strap-for-airtag-blue",
      "name": "Belkin Secure Holder with Strap for AirTag - Blue",
      "brand": {
        "@type": "Organization",
        "name": "Belkin"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 490.0,
        "availability": "http://schema.org/InStock",
        "sku": "HNPY2ZM/A"
      }
    }
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "image": "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPT2?wid=266&hei=291&fmt=png-alpha&.v=1618944996000",
      "url": "https://www.apple.com/th-en/shop/product/HNPT2ZM/A/belkin-secure-holder-with-key-ring-for-airtag-pink",
      "name": "Belkin Secure Holder with Key Ring for AirTag – Pink",
      "brand": {
        "@type": "Organization",
        "name": "Belkin"
      },
      "offers": {
        "@type": "Offer",
        "priceCurrency": "THB",
        "price": 490.0,
        "availability": "http://schema.org/InStock",
        "sku": "HNPT2ZM/A"
      }
    }
  </script>

  <script type="application/json" id="metrics">
    {
      "config": {
        "asMetrics": {
          "dataMule": "v1",
          "graffitiEnabled": false,
          "enableSendBeacon": ["userInteraction"]
        },
        "omniture": {
          "account": ["applestoreww"],
          "trackingServer": "securemetrics.apple.com",
          "linkInternalFilters": [
            "javascript:",
            "store.apple.com",
            "secure.store.apple.com",
            "secure1.store.apple.com",
            "secure2.store.apple.com",
            "epp.apple.com",
            "secure1.epp.apple.com",
            "storeint.apple.com",
            "secure1.storeint.apple.com",
            "www.apple.com",
            "#"
          ],
          "internalDomains": [
            "store.apple.com",
            "secure.store.apple.com",
            "secure1.store.apple.com",
            "epp.apple.com",
            "storeint.apple.com",
            "downloads.apple.com",
            "downloads.apple.com",
            "www.apple.com"
          ]
        },
        "global": {
          "cookieDomain": "apple.com"
        }
      },
      "data": {
        "node": "standard/home/shop_accessories/all_accessories",
        "currency": "THB",
        "area": "shop"
      }
    }
  </script>

  <script>
    if (
      /(iPhone|iPod).*OS ([6-9]|[1-9][0-9]).*AppleWebKit.*Mobile.*Safari/.test(
        navigator.userAgent
      )
    ) {
      var headNode = document.getElementsByTagName("head")[0];
      var sbNode = document.createElement("meta");
      var url = decodeURI("https://www.apple.com/th-en/shop/accessories/all");
      var ses = "; " + document.cookie;
      var sesParts = ses.split("; s_vi=");
      ses = sesParts.length == 2 ? sesParts.pop().split(";").shift() : "";
      if (ses !== "") {
        url += url.indexOf("?") >= 0 ? "&" : "?";
        url += "ses=" + encodeURI(ses);
      }
      sbNode.name = "apple-itunes-app";
      sbNode.content = "app-id=375380948, app-argument=" + url;
      headNode.appendChild(sbNode);
    } else if (
      /(iPad).*OS ([6-9]|[1-9][0-9]).*AppleWebKit.*Mobile.*Safari/.test(
        navigator.userAgent
      )
    ) {
      var headNode = document.getElementsByTagName("head")[0];
      var sbNode = document.createElement("meta");
      var url = decodeURI("https://www.apple.com/th-en/shop/accessories/all");
      var ses = "; " + document.cookie;
      var sesParts = ses.split("; s_vi=");
      ses = sesParts.length == 2 ? sesParts.pop().split(";").shift() : "";
      if (ses !== "") {
        url += url.indexOf("?") >= 0 ? "&" : "?";
        url += "ses=" + encodeURI(ses);
      }
      sbNode.name = "apple-itunes-app";
      sbNode.content = "app-id=375380948, app-argument=" + url;
      headNode.appendChild(sbNode);
    }
  </script>

  <script>
    window.asUnsupportedBrowserUrl =
      "https://www.apple.com/th-en/shop/unsupported";
  </script>

  <script>
    //replace nojs class with js on html element
    (function(html) {
      html.className = html.className.replace(/\bnojs\b/, "js");
    })(document.documentElement);
  </script>

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/accessories.css" media="screen, print" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/accessories(1).css" media="screen, print" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/as-all-accessories.css" media="screen, print" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/external.css" media="" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/overview/globalelements.css" media="" />

  <link rel="stylesheet" href="http://localhost/Mini_Project_G4/wss/fonts/fontsAccess" media="" />

  <script>
    window.irOn = true;
  </script>

  <script>
    window.ECHO_CONFIG = {
      metadata: {
        environment: "",
        sf: "th-en",
        segment: "Consumer",
        locale: "en-th",
        referer: document.referrer,
      },
      config: {
        app: "com.apple.www.Store",
        delaySendingPageViewDataMS: 500,
        nonEssentialEventSampleRatePct: 1.0,
        performanceMeasurePollingIntervalMS: 1000,
        performanceMeasuresToReport: "".split(","),
        resourceDisallowedResourceList: "securemetrics.apple.com".split(","),
        resourcePollingIntervalMS: 2000,
        sendErrors: true,
        sendPageViewData: true,
        sendResourceData: true,
        url: "https://xp.apple.com/report/2/xp_aos_clientperf",
      },
    };
  </script>

  <script src="http://localhost/Mini_Project_G4/overview/echo-nomodule.min.js" nomodule=""></script>
  <script src="http://localhost/Mini_Project_G4/overview/unsupportedBrowser.min.js" nomodule=""></script>
  <script src="http://localhost/Mini_Project_G4/overview/echo.min.js" type="module" async=""></script>
  <script src="http://localhost/Mini_Project_G4/overview/external.js"></script>
  <script src="http://localhost/Mini_Project_G4/overview/react.production.min.js"></script>
  <script src="http://localhost/Mini_Project_G4/overview/react-dom.production.min.js"></script>
  <script src="http://localhost/Mini_Project_G4/overview/globalelements.js"></script>
  <script src="http://localhost/Mini_Project_G4/overview/accessories.js"></script>

  <script>
    window.dynamicFootnotesConfig = {
      dynamicSymbols: [
        "<sup>※</sup>",
        "<sup>※※</sup>",
        "<sup>±</sup>",
        "<sup>±±</sup>",
        "<sup>†</sup>",
        "<sup>††</sup>",
        "<sup>‡</sup>",
        "<sup>‡‡</sup>",
        "<sup>¶</sup>",
        "<sup>¶¶</sup>",
      ],
      selector: "div.footnotes",
      footnoteElementType: "p",
      footnoteElementDataAttr: "data-dynamic-footnote",
      placeholderRegex: /{footnote\.(.*?)}/g,
      placeholderIdFindFn: function(str) {
        return str.split(".")[1].split("}")[0];
      },
      symbolCache: {},
      nextSymbolIndex: 0,
    };
  </script>

  <script>
    window.dynamicHashConfig = {
      // should match something like '__hash__'
      placeholderRegex: /__hash__/g,
    };

    window.dcpConfig = {
      mzoneUrl: "/th-en/shop/personalization",
      mzoneParamPrefix: "mz",
      moduleBaseUrl: "/th-en/shop/content-module",
      timeoutMS: 2000,
      enabled: true,
      mzoneIdList: [],
      mzoneMap: {},
      dataAttr: "data-mzone",
      dynamicDataAttr: "data-mzone-dynamic-content",
      acStatusConfigGetter: function() {
        var acConfig = window.acSetup;

        if (!acConfig) {
          return false;
        }

        return {
          merchantIdentifier: acConfig.merchantIdentifier || "",
          signature: acConfig.signature || "",
          signedFields: acConfig.signedFields || null,
        };
      },
      analytics: {
        attributesToAddToModules: [{
            key: "role",
            value: "listitem",
            type: "string",
          },
          {
            key: "data-rule-id",
            value: "ruleId",
            type: "moduleProperty",
          },
          {
            key: "data-module-id",
            value: "moduleId",
            type: "moduleProperty",
          },
        ],
        selectorsToIgnore: [
          ".dcp-module-hook",
          "style",
          "script",
          "noscript",
        ],
      },
    };
  </script>

  <script>
    window.atServerDomain = "securemvt.apple.com";
    window.astexEndpoint = "https://www.apple.com/th-en/shop/experience-meta";
    window.astexLocalStorageKey = "as_tex";
  </script>
  <script src="http://localhost/Mini_Project_G4/overview/at.js"></script>

  <script>
    window.chatConfig = {
      chat: {
        page: [{
            name: "WEB_CHAT_COUNTRY",
            value: "th",
          },
          {
            name: "WEB_CHAT_LANGUAGE",
            value: "en",
          },
          {
            name: "WEB_CHAT_ORDERNUMBER",
            value: null,
          },
          {
            name: "WEB_CHAT_GEO",
            value: "apac",
          },
          {
            name: "WEB_CHAT_SEGMENT",
            value: "consumer",
          },
          {
            name: "WEB_CHAT_SECTION",
            value: "product selection",
          },
          {
            name: "WEB_CHAT_SUBSECTION",
            value: "all_accessories",
          },
          {
            name: "WEB_CHAT_REFER",
            value: null,
          },
          {
            name: "WEB_CHAT_APP",
            value: "AOS",
          },
          {
            name: "WEB_CHAT_PAGE",
            value: "AOS: home/shop_accessories/all_accessories",
          },
          {
            name: "url",
            value: "https://contactretail.apple.com",
          },
        ],
      },
    };
  </script>

  <script></script>

  <script>
    if (!/dssid2/.test(document.cookie) || !/as_dc/.test(document.cookie)) {
      Event.onDomReady(function() {
        var ie = document.createElement("IMG");
        ie.src = "/th-en/shop/dc";
        ie.width = ie.height = 1;
        ie.style.display = "none";
        ie.alt = "";
        document.body.appendChild(ie);
      });
    }
  </script>
</head>

<body class="as-theme-light-heroimage pd-aalp">
  <script>
    window.as = window.as || {};
    window.as.isFlex = true;
  </script>
  <div class="metrics">
    <noscript>
      <img src="https://securemetrics.apple.com/b/ss/applestoreww/1/H.8--NS/0?pageName=No-Script:AOS%3A+home%2Fshop_accessories%2Fall_accessories" height="1" width="1" alt="" />
    </noscript>

    <script></script>

    <script>
      window.asMetrics.initialize({
        isHomePage: false,
        encryptedStoreId: "wJ9TFCX4297KHFC42",
        evarDataNodesEnabled: true,

        computedPageName: "AOS: home/shop_accessories/all_accessories",
        serverName: "m9488571",
        hier1: "home/shop_accessories/all_accessories",
        characterSetForCountry: "UTF-8",
        currencyCode: "THB",

        computedChannel: "AOS: Accessory",
        crossSegmentTrackingVariable: "AOS: TH-EN Consumer: home/shop_accessories/all_accessories",
        storeSegmentVariable: "AOS: TH-EN Consumer",

        storeFrontId: "800935",

        eventType: "event4",

        searchTerm: "",
        computedCustomStoreName: "AOS: Thailand Consumer (English)",

        langAttribute: "en-th",
      });
    </script>
  </div>

  <script>
    if (!/dssid2/.test(document.cookie) || !/as_dc/.test(document.cookie)) {
      Event.onDomReady(function() {
        var ie = document.createElement("IMG");
        ie.src = "/th-en/shop/dc";
        ie.width = ie.height = 1;
        ie.style.display = "none";
        ie.alt = "";
        document.body.appendChild(ie);
      });
    }
  </script>

  <div id="page">
    <meta name="ac-gn-store-key" content="SJHJUH4YFCTTPD4F4" />
    <meta name="ac-gn-segmentbar-redirect" content="true" />

    <aside id="ac-gn-segmentbar" class="ac-gn-segmentbar" lang="en-GB" dir="ltr" data-strings="{ &#39;exit&#39;: &#39;Exit&#39;, &#39;view&#39;: &#39;{%STOREFRONT%} Store Home&#39;, &#39;segments&#39;: { &#39;smb&#39;: &#39;Business Store Home&#39;, &#39;eduInd&#39;: &#39;Education Store Home&#39;, &#39;other&#39;: &#39;Store Home&#39; } }">
    </aside>
    <input type="checkbox" id="ac-gn-menustate" class="ac-gn-menustate" />
    <nav id="ac-globalnav" class="js no-touch windows no-firefox" role="navigation" aria-label="Global" data-hires="false" data-analytics-region="global nav" lang="en-GB" dir="ltr" data-www-domain="www.apple.com" data-store-locale="th-en" data-store-root-path="/uk" data-store-api="https://www.apple.com/th-en/shop/bag/status" data-search-locale="th_TH" data-search-suggestions-api="/search-services/suggestions/" data-search-defaultlinks-api="/search-services/suggestions/defaultlinks/">
      <div class="ac-gn-content">
        <ul class="ac-gn-header">
          <li class="ac-gn-item ac-gn-menuicon">
            <a href="https://www.apple.com/th-en/shop/accessories/all#ac-gn-menustate" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-open" id="ac-gn-menuanchor-open">
              <span class="ac-gn-menuanchor-label">Global Nav Open Menu</span>
            </a>
            <a href="https://www.apple.com/th-en/shop/accessories/all#" role="button" class="ac-gn-menuanchor ac-gn-menuanchor-close" id="ac-gn-menuanchor-close">
              <span class="ac-gn-menuanchor-label">Global Nav Close Menu</span>
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
            <a class="ac-gn-link ac-gn-link-apple" href="https://www.apple.com/th/" data-analytics-title="apple home" id="ac-gn-firstfocus-small" data-feature-name="Globalnav" data-display-name="apple home">
              <span class="ac-gn-link-text">Apple</span>
            </a>
          </li>
          <li class="ac-gn-item ac-gn-bag ac-gn-bag-small" id="ac-gn-bag-small">
            <div class="ac-gn-bag-wrapper">
              <a class="ac-gn-link ac-gn-link-bag" href="https://www.apple.com/th-en/shop/bag" data-analytics-title="bag" data-analytics-click="bag" aria-label="Shopping Bag" data-string-badge="Shopping Bag with item count :" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="ac-gn-bagview-content">
                <span class="ac-gn-link-text">Shopping Bag</span>
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
            <a id="ac-gn-link-search-small" class="ac-gn-link" href="https://www.apple.com/uk/search" data-analytics-title="search" data-analytics-intrapage-link="" aria-label="Search apple.com" role="button" aria-haspopup="true">
              <div class="ac-gn-search-placeholder-bar">
                <div class="ac-gn-search-placeholder-input">
                  <div class="ac-gn-search-placeholder-input-text" aria-hidden="true">
                    <div class="ac-gn-link-search ac-gn-search-placeholder-input-icon"></div>
                    <span class="ac-gn-search-placeholder">Search apple.com</span>
                  </div>
                </div>
                <div class="ac-gn-searchview-close ac-gn-searchview-close-small ac-gn-search-placeholder-searchview-close">
                  <span class="ac-gn-searchview-close-cancel" aria-hidden="true">Cancel</span>
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
            <a class="ac-gn-link ac-gn-link-accessories" href="Accessories.php" data-analytics-title="accessories">
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
            <a href="index.php?logout='1'" class="ac-gn-bagview-button2 ac-gn-bagview-nav-link-signOut ">
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


        <aside id="ac-gn-searchresults" class="ac-gn-searchresults" data-string-quicklinks="Quick Links" data-string-suggestions="Suggested Searches" data-string-noresults="">
          <section class="ac-gn-searchresults-section ac-gn-searchresults-section-defaultlinks" data-analytics-region="defaultlinks search">
            <div class="ac-gn-searchresults-section-wrapper">
              <h3 class="ac-gn-searchresults-header ac-gn-searchresults-animated">
                Quick Links
              </h3>
              <ul class="ac-gn-searchresults-list" id="defaultlinks" role="listbox">
                <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                  <a href="https://www.apple.com/th/shop/goto/temporary_closures" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="0" data-label="คำถามที่พบบ่อยเกี่ยวกับการแวะมาที่ Apple Store" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">คำถามที่พบบ่อยเกี่ยวกับการแวะมาที่
                    Apple Store</a>
                </li>
                <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                  <a href="https://www.apple.com/th/shop/goto/shop" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="1" data-label="เลือกซื้อจาก Apple Store ออนไลน์" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">เลือกซื้อจาก
                    Apple Store ออนไลน์</a>
                </li>
                <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                  <a href="https://www.apple.com/th/shop/goto/accessories/apple_accessories" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="2" data-label="อุปกรณ์เสริม" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">อุปกรณ์เสริม</a>
                </li>
                <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                  <a href="https://www.apple.com/th/airpods/" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="3" data-label="AirPods" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">AirPods</a>
                </li>
                <li class="ac-gn-searchresults-item ac-gn-searchresults-animated" role="presentation">
                  <a href="https://www.apple.com/th/airtag/" role="option" class="ac-gn-searchresults-link ac-gn-searchresults-link-defaultlinks" data-query="no keyword" data-section="defaultlinks" data-items="5" data-index="4" data-label="AirTag" data-analytics-click="eVar23: {data-query} | {data-section} | {data-items} | {data-label} | {data-index}, events:event50">AirTag</a>
                </li>
              </ul>
              <span role="status" class="ac-gn-searchresults-count" aria-live="polite">5 Quick Links</span>
            </div>
          </section>
        </aside>
      </div>
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
  <div class="as-localnav-placeholder"></div>
  <div class="as-localnav-curtain"></div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new as.LocalNav("body", {
        stickyClass: "is-sticking",
        maxElement: "#ac-globalnav",
        exploreElement: "#localnav-disclosure",

        isSticky: true,
      });
    });
  </script>

  <div role="main" class="rf-accessories">
    <div id="notification-portal"></div>
    <div id="root">
      <div class="rc-viewport-wrapper"></div>
    </div>

    <div data-react-gallery="" data-bootstrap="main2-gallery" class="as-navtuck dd-header">
      <div class="rf-dcm-gallery" data-analytics-section="gallery">
        <div class="rc-inline-gallery" role="group" aria-label="Gallery">
          <div class="rc-gallery-dotnav dotnav">
            <ul class="" role="tablist">
              <li role="presentation">
                <button id="80edd790-ada6-11ec-b91b-b362ff845f5c-tab-item-0" type="button" role="tab" aria-controls="80edd790-ada6-11ec-b91b-b362ff845f5c-gallery-item-0" aria-selected="true" aria-label="Shop MagSafe" tabindex="0" class="rc-gallery-dotnav-item dotnav-item current" data-autom="gallery-dot-nav-0"></button>
              </li>
              <li role="presentation">
                <button id="80edd790-ada6-11ec-b91b-b362ff845f5c-tab-item-1" type="button" role="tab" aria-controls="80edd790-ada6-11ec-b9E1b-b362ff845f5c-gallery-item-1" aria-selected="false" aria-label="Shop the latest bands." tabindex="-1" class="rc-gallery-dotnav-item dotnav-item" data-autom="gallery-dot-nav-1"></button>
              </li>
              <li role="presentation">
                <button id="80edd790-ada6-11ec-b91b-b362ff845f5c-tab-item-2" type="button" role="tab" aria-controls="80edd790-ada6-11ec-b91b-b362ff845f5c-gallery-item-2" aria-selected="false" aria-label="Buy AirPods" tabindex="-1" class="rc-gallery-dotnav-item dotnav-item" data-autom="gallery-dot-nav-2"></button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script>
      window["main2-gallery"] = {
        props: {
          fade: true,
          dotnavProps: {
            bar: false,
          },
          metrics: {
            slot: "Landind Page",
            feature: "Carousel",
          },
          a11y: {
            items: [
              `Shop MagSafe`,
              `Shop the latest bands.`,
              `Buy AirPods`,
            ],
          },
        },
        items: [
          `<div class="">
<div>
	<div class="dd-acc-header dd-fill-tertiary">
  <div class="dd-l-plate">
    <div class="row">
      <div class="column large-4 small-12">
        <div class="dd-info">
          <h2 class="t-headline">มิกซ์แอนด์แมทช์ กับ MagSafe</h2>
          <p class="t-intro">ติดเข้ากับเคสและกระเป๋าสตางค์ MagSafe หรือที่ชาร์จแบบไร้สาย</p>
        </div>
      </div>
      <div class="column large-8 small-12">
        <div class="dd-background">
          <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/magsafe-202203_GEO_TH?wid=1440&amp;hei=480&amp;fmt=jpeg&amp;qlt=95&amp;.v=1645590252673" alt="" width="1440" height="480" data-scale-params-2="wid=2880&amp;hei=960&amp;fmt=jpeg&amp;qlt=95&amp;.v=1645590252673" data-scale-initial="1" class="dd-hero ir" />

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>`,
          `<div class="">
<div>
	<div class="dd-acc-header dd-fill-tertiary">
  <div class="dd-l-plate">
    <div class="row">
      <div class="column large-4 small-12">
        <div class="dd-info">
          <h2 class="t-headline dd-compact-right-large-25">
          สีสันใหม่ๆ พร้อมเบ่งบาน
          </h2>
          <p class="t-intro">
            <a href="/th-en/shop/watch/bands" data-slot-name="main2" data-feature-name="Astro Link" data-display-name="AOS: home/shop_watch/bands" class="more">Shop the latest bands.</a>
          </p>
        </div>
      </div>
      <div class="column large-8 small-12">
        <div class="dd-background">
          <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-bands-202203?wid=1440&amp;hei=480&amp;fmt=jpeg&amp;qlt=95&amp;.v=1645048944020" alt="" width="1440" height="480" data-scale-params-2="wid=2880&amp;hei=960&amp;fmt=jpeg&amp;qlt=95&amp;.v=1645048944020" data-scale-initial="1" class="dd-hero ir" />

        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>`,
          `<div class="">
<div>
	<div class="dd-acc-header dd-fill-backgroundfooter">
  <div class="dd-l-plate">
    <div class="row">
      <div class="column large-4 small-12">
         <div class="dd-info">
             <p class="t-eyebrow">ใหม่</p>
             <h2 class="t-headline">
             นี่แหละ จังหวะใหม่แห่งความมหัศจรรย์
          	 </h2>
             <p class="t-intro">
             ระบบเสียงตามตำแหน่งพร้อมการติดตามศีรษะแบบไดนามิกในดีไซน์ใหม่หมด
			 </p>
             <p class="t-intro">
				<a href="/th-en/shop/product/MME73ZA/A/airpods-3rd-generation" data-slot-name="main2" data-feature-name="Astro Link" data-display-name="AOS: " data-part-number="APPLE_AIRPODS_3GEN_WITH_MAGSAFE_MAIN-1000147220" class="more">Buy AirPods</a>
			 </p>
           </div>
		</div>
        <div class="column large-7 small-12">
		<div class="dd-background">    
             <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-header-accessories-202110?wid=1440&amp;hei=480&amp;fmt=jpeg&amp;qlt=95&amp;.v=1632954329000" alt="" width="1440" height="480" data-scale-params-2="wid=2880&amp;hei=960&amp;fmt=jpeg&amp;qlt=95&amp;.v=1632954329000" data-scale-initial="1" class="dd-hero ir" />
 
        </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>`,
        ],
      };
    </script>
    <script>
      window.pageLevelData = window.pageLevelData || {};
      window.pageLevelData.searchBox = {
        header: `<span>Find the accessories you’re looking for.</span>`,
        placeholderText: "Search accessories",
        searchBox: {
          formAttrsAction: "/th-en/search",
          param: "src=alp",
          src: "alp",
          searchResetValue: "Reset",
        },
        suggestions: {
          params: {
            src: "aos_alp",
            locale: "en_TH",
          },
          url: "/search-services/suggestions/",
          suggestionsText: "Suggested Searches",
          quickLinksText: ``,
        },
      };
    </script>

    <br><br><br>
    <div id="alp-category-browser" class="rf-categorybrowser-container">

    </div>
  </div>
  <script>
    window.pageLevelData = window.pageLevelData || {};
    window.pageLevelData.categoryBrowserSection = {
      categoryViewTitle: {
        categoryHeaderBody: "Discover the perfect accessories.",
        categoryHeaderTitle: "Shop by Category",
      },
      subDepartments: null,
      categoryDisplayRows: 0,
      tabLinks: {
        items: [{
            index: 0,
            value: {
              url: "category-product-browser-tabs-0",
              text: "เลือกดูตามผลิตภัณฑ์",
              dataVar: {},
              omnitureData: {
                slotName: "main4",
                featureName: "category product browser",
                linkText: "tabs-0 : tab-link : เลือกดูตามผลิตภัณฑ์",
                commitCodeId: 0,
              },
              newTab: false,
              link: "category-product-browser-tabs-0",
            },
            last: false,
            position: 1,
            first: true,
            even: true,
          },
          {
            index: 1,
            value: {
              url: "category-product-browser-tabs-1",
              text: "เลือกดูตามหมวดหมู่",
              dataVar: {},
              omnitureData: {
                slotName: "main4",
                featureName: "category product browser",
                linkText: "tabs-1 : tab-link : เลือกดูตามหมวดหมู่",
                commitCodeId: 0,
              },
              newTab: false,
              link: "category-product-browser-tabs-1",
            },
            last: true,
            position: 2,
            first: false,
            even: false,
          },
        ],
        size: 2,
      },
      tabContents: {
        items: [{
            index: 0,
            value: {
              showList: {
                items: [{
                    index: 0,
                    value: {
                      link: {
                        url: "/th-en/shop/mac/accessories",
                        text: "Mac",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "Mac",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/mac/accessories",
                      },
                      name: "Mac",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-product-mac?wid=75&hei=75&fmt=png-alpha&.v=1544482382615",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1544482382615",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-product-mac",
                        originalImageName: "icon-product-mac",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 1,
                    first: true,
                    even: true,
                  },
                  {
                    index: 1,
                    value: {
                      link: {
                        url: "/th-en/shop/ipad/accessories",
                        text: "iPad",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "iPad",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/ipad/accessories",
                      },
                      name: "iPad",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-product-ipad?wid=75&hei=75&fmt=png-alpha&.v=1544482382704",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1544482382704",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-product-ipad",
                        originalImageName: "icon-product-ipad",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 2,
                    first: false,
                    even: false,
                  },
                  {
                    index: 2,
                    value: {
                      link: {
                        url: "/th-en/shop/iphone/accessories",
                        text: "iPhone",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "iPhone",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/iphone/accessories",
                      },
                      name: "iPhone",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-product-iphone?wid=75&hei=75&fmt=png-alpha&.v=1544482382650",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1544482382650",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-product-iphone",
                        originalImageName: "icon-product-iphone",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 3,
                    first: false,
                    even: true,
                  },
                  {
                    index: 3,
                    value: {
                      link: {
                        url: "/th-en/shop/watch/accessories",
                        text: "Watch",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "Watch",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/watch/accessories",
                      },
                      name: "Watch",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-product-watch?wid=75&hei=75&fmt=png-alpha&.v=1544482383418",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1544482383418",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-product-watch",
                        originalImageName: "icon-product-watch",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 4,
                    first: false,
                    even: false,
                  },
                  {
                    index: 4,
                    value: {
                      link: {
                        url: "/th-en/shop/smart-home/accessories",
                        text: "TV & Home",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "TV & Home",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/smart-home/accessories",
                      },
                      name: "TV & Home",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-product-tv?wid=75&hei=75&fmt=png-alpha&.v=1544482382741",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1544482382741",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-product-tv",
                        originalImageName: "icon-product-tv",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: true,
                    position: 5,
                    first: false,
                    even: true,
                  },
                ],
                size: 5,
              },
              hideList: null,
              seeAllLink: null,
              itemDisplayRows: "5",
              panelId: "category-product-browser-tabs-0",
            },
            last: false,
            position: 1,
            first: true,
            even: true,
          },
          {
            index: 1,
            value: {
              showList: {
                items: [{
                    index: 0,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/made-by-apple",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Made by Apple",
                          analyticsTitle: "category=Made by Apple",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/made-by-apple",
                      },
                      name: "Made by Apple",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/category-icon-made-by-apple?wid=75&hei=75&fmt=png-alpha&.v=1526595684706",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1526595684706",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "category-icon-made-by-apple",
                        originalImageName: "category-icon-made-by-apple",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 1,
                    first: true,
                    even: true,
                  },
                  {
                    index: 1,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/whats-new",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=What’s New",
                          analyticsTitle: "category=What’s New",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/whats-new",
                      },
                      name: "What’s New",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/category-icon-whats-new?wid=75&hei=75&fmt=png-alpha&.v=1523297510490",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297510490",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "category-icon-whats-new",
                        originalImageName: "category-icon-whats-new",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 2,
                    first: false,
                    even: false,
                  },
                  {
                    index: 2,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/cases-protection",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Cases & Protection",
                          analyticsTitle: "category=Cases & Protection",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/cases-protection",
                      },
                      name: "Cases & Protection",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-cases-protection?wid=75&hei=75&fmt=png-alpha&.v=1523297977190",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297977190",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-cases-protection",
                        originalImageName: "icon-category-cases-protection",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 3,
                    first: false,
                    even: true,
                  },
                  {
                    index: 3,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/headphones-speakers",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Headphones & Speakers",
                          analyticsTitle: "category=Headphones & Speakers",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/headphones-speakers",
                      },
                      name: "Headphones & Speakers",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-audio-music?wid=75&hei=75&fmt=png-alpha&.v=1470069181201",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1470069181201",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-audio-music",
                        originalImageName: "icon-category-audio-music",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 4,
                    first: false,
                    even: false,
                  },
                  {
                    index: 4,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/bands",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Apple Watch Bands",
                          analyticsTitle: "category=Apple Watch Bands",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/bands",
                      },
                      name: "Apple Watch Bands",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-watch-bands?wid=75&hei=75&fmt=png-alpha&.v=1523304942327",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523304942327",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-watch-bands",
                        originalImageName: "icon-category-watch-bands",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: true,
                    position: 5,
                    first: false,
                    even: true,
                  },
                ],
                size: 5,
              },
              hideList: {
                items: [{
                    index: 0,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/accessibility",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Accessibility",
                          analyticsTitle: "category=Accessibility",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/accessibility",
                      },
                      name: "Accessibility",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-accessibility?wid=75&hei=75&fmt=png-alpha&.v=1527702785574",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1527702785574",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-accessibility",
                        originalImageName: "icon-category-accessibility",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 1,
                    first: true,
                    even: true,
                  },
                  {
                    index: 1,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/airtag",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=AirTag and Accessories ",
                          analyticsTitle: "category=AirTag and Accessories ",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/airtag",
                      },
                      name: "AirTag and Accessories ",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-category-icon-202104?wid=75&hei=75&fmt=png-alpha&.v=1617294008000",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1617294008000",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "airtag-category-icon-202104",
                        originalImageName: "airtag-category-icon-202104",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 2,
                    first: false,
                    even: false,
                  },
                  {
                    index: 2,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/creativity",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Creativity",
                          analyticsTitle: "category=Creativity",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/creativity",
                      },
                      name: "Creativity",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-creativity?wid=75&hei=75&fmt=png-alpha&.v=1527702805294",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1527702805294",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-creativity",
                        originalImageName: "icon-category-creativity",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 3,
                    first: false,
                    even: true,
                  },
                  {
                    index: 3,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/displays-mounts",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Displays & Mounts",
                          analyticsTitle: "category=Displays & Mounts",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/displays-mounts",
                      },
                      name: "Displays & Mounts",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-displays-mounts?wid=75&hei=75&fmt=png-alpha&.v=1523297979069",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297979069",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-displays-mounts",
                        originalImageName: "icon-category-displays-mounts",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 4,
                    first: false,
                    even: false,
                  },
                  {
                    index: 4,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/toys-games",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Gaming & Toys",
                          analyticsTitle: "category=Gaming & Toys",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/toys-games",
                      },
                      name: "Gaming & Toys",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-toys-games?wid=75&hei=75&fmt=png-alpha&.v=1617639588000",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1617639588000",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-toys-games",
                        originalImageName: "icon-category-toys-games",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 5,
                    first: false,
                    even: true,
                  },
                  {
                    index: 5,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/health-fitness",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Health & Fitness",
                          analyticsTitle: "category=Health & Fitness",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/health-fitness",
                      },
                      name: "Health & Fitness",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-health-fitness?wid=75&hei=75&fmt=png-alpha&.v=1523304990065",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523304990065",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-health-fitness",
                        originalImageName: "icon-category-health-fitness",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 6,
                    first: false,
                    even: false,
                  },
                  {
                    index: 6,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/homekit",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=HomeKit",
                          analyticsTitle: "category=HomeKit",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/homekit",
                      },
                      name: "HomeKit",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-home-automation?wid=75&hei=75&fmt=png-alpha&.v=1532970289358",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1532970289358",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-home-automation",
                        originalImageName: "icon-category-home-automation",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 7,
                    first: false,
                    even: true,
                  },
                  {
                    index: 7,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/magsafe",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=MagSafe",
                          analyticsTitle: "category=MagSafe",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/magsafe",
                      },
                      name: "MagSafe",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/category-icon-magsafe?wid=75&hei=75&fmt=png-alpha&.v=1607183862000",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1607183862000",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "category-icon-magsafe",
                        originalImageName: "category-icon-magsafe",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 8,
                    first: false,
                    even: false,
                  },
                  {
                    index: 8,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/mice-keyboards",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Mice & Keyboards",
                          analyticsTitle: "category=Mice & Keyboards",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/mice-keyboards",
                      },
                      name: "Mice & Keyboards",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-mice-keyboards?wid=75&hei=75&fmt=png-alpha&.v=1626390698000",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1626390698000",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-mice-keyboards",
                        originalImageName: "icon-category-mice-keyboards",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 9,
                    first: false,
                    even: true,
                  },
                  {
                    index: 9,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/mesh-wifi-networking",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Mesh Wi-Fi Networking",
                          analyticsTitle: "category=Mesh Wi-Fi Networking",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/mesh-wifi-networking",
                      },
                      name: "Mesh Wi-Fi Networking",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-networking?wid=75&hei=75&fmt=png-alpha&.v=1523297978089",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297978089",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-networking",
                        originalImageName: "icon-category-networking",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 10,
                    first: false,
                    even: false,
                  },
                  {
                    index: 10,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/power-cables",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Power & Cables",
                          analyticsTitle: "category=Power & Cables",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/power-cables",
                      },
                      name: "Power & Cables",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-power-cables?wid=75&hei=75&fmt=png-alpha&.v=1523297979162",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297979162",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-power-cables",
                        originalImageName: "icon-category-power-cables",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 11,
                    first: false,
                    even: true,
                  },
                  {
                    index: 11,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/software",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Software",
                          analyticsTitle: "category=Software",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/software",
                      },
                      name: "Software",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-software?wid=75&hei=75&fmt=png-alpha&.v=1523297979878",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297979878",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-software",
                        originalImageName: "icon-category-software",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 12,
                    first: false,
                    even: false,
                  },
                  {
                    index: 12,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/storage",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Storage",
                          analyticsTitle: "category=Storage",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/storage",
                      },
                      name: "Storage",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/icon-category-storage?wid=75&hei=75&fmt=png-alpha&.v=1523297980031",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1523297980031",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "icon-category-storage",
                        originalImageName: "icon-category-storage",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: false,
                    position: 13,
                    first: false,
                    even: true,
                  },
                  {
                    index: 13,
                    value: {
                      link: {
                        url: "/th-en/shop/accessories/all/wireless-chargers",
                        dataVar: {},
                        omnitureData: {
                          slotName: "main4",
                          linkText: "category=Wireless Chargers",
                          analyticsTitle: "category=Wireless Chargers",
                          commitCodeId: 0,
                        },
                        newTab: false,
                        link: "/th-en/shop/accessories/all/wireless-chargers",
                      },
                      name: "Wireless Chargers",
                      image: {
                        scaleFactor: "DEFAULT",
                        srcSet: {
                          src: "https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/category-icon-wireless-charger?wid=75&hei=75&fmt=png-alpha&.v=1564436071132",
                          scaleParams2: "wid=150&hei=150&fmt=png-alpha&.v=1564436071132",
                        },
                        attrs: "",
                        alt: "",
                        width: "75",
                        height: "75",
                        imageName: "category-icon-wireless-charger",
                        originalImageName: "category-icon-wireless-charger",
                        noImage: false,
                        deferSrc: false,
                      },
                      isCurrent: false,
                    },
                    last: true,
                    position: 14,
                    first: false,
                    even: false,
                  },
                ],
                size: 14,
              },
              seeAllLink: {
                url: "see-all-link",
                text: "See all categories",
                dataVar: {},
                omnitureData: {
                  slotName: "main4",
                  featureName: "category product browser",
                  linkText: "tabs-1 : see-all-link : See all categories",
                  commitCodeId: 0,
                },
                newTab: false,
                link: "see-all-link",
              },
              itemDisplayRows: "5",
              panelId: "category-product-browser-tabs-1",
            },
            last: true,
            position: 2,
            first: false,
            even: false,
          },
        ],
        size: 2,
      },
      hideTabLinks: false,
      categoriesData: null,
    };
  </script>

  <style>
    .rs-browser-container-no-js {
      display: none;
    }

    .nojs .rs-browser-container-no-js {
      display: block;
      margin: 0 auto;
      max-width: 980px;
      text-align: center;
    }
  </style>

  <div class="rs-browser-container-no-js">
    <div>
      <ul class="row">
        <li class="rs-browser-list large-6 column">
          <a href="#" data-slot-name="main4" data-feature-name="category product browser" data-display-name="tabs-0 : tab-link : เลือกดูตามผลิตภัณฑ์" class="rs-browser-itemlink">Browse by
            Product</a>
        </li>
        <li class="rs-browser-list large-6 column">
          <a href="#" data-slot-name="main4" data-feature-name="category product browser" data-display-name="tabs-1 : tab-link : เลือกดูตามหมวดหมู่" class="rs-browser-itemlink">Browse by
            Category</a>
        </li>
      </ul>
    </div>

    <div class="row">
      <div role="tabpanel" class="large-6 column" id="category-product-browser-tabs-0">
        <ul>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="Mac">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-product-mac" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1544482382615" data-scale-initial="1" />
              </div>
              <span>Mac</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="iPad">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-product-ipad" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1544482382704" data-scale-initial="1" />
              </div>
              <span>iPad</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="iPhone">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-product-iphone" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1544482382650" data-scale-initial="1" />
              </div>
              <span>iPhone</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="Watch">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-product-watch" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1544482383418" data-scale-initial="1" />
              </div>
              <span>Watch</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="TV &amp; Home">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-product-tv" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1544482382741" data-scale-initial="1" />
              </div>
              <span>TV &amp; Home</span>
            </a>
          </li>
        </ul>
      </div>
      <div role="tabpanel" class="large-6 column" id="category-product-browser-tabs-1">
        <ul>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="category=Made by Apple" data-analytics-title="category=Made by Apple">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/category-icon-made-by-apple" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1526595684706" data-scale-initial="1" />
              </div>
              <span>Made by Apple</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="category=What’s New" data-analytics-title="category=What’s New">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/category-icon-whats-new" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297510490" data-scale-initial="1" />
              </div>
              <span>What’s New</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="category=Cases &amp; Protection" data-analytics-title="category=Cases &amp; Protection">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-cases-protection" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297977190" data-scale-initial="1" />
              </div>
              <span>Cases &amp; Protection</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="category=Headphones &amp; Speakers" data-analytics-title="category=Headphones &amp; Speakers">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-audio-music" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1470069181201" data-scale-initial="1" />
              </div>
              <span>Headphones &amp; Speakers</span>
            </a>
          </li>
          <li>
            <a href="#" data-slot-name="main4" data-display-name="category=Apple Watch Bands" data-analytics-title="category=Apple Watch Bands">
              <div>
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-watch-bands" class="ir" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523304942327" data-scale-initial="1" />
              </div>
              <span>Apple Watch Bands</span>
            </a>
          </li>

          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Accessibility" data-analytics-title="category=Accessibility" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-accessibility" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1527702785574" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Accessibility</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=AirTag and Accessories " data-analytics-title="category=AirTag and Accessories " class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/airtag-category-icon-202104" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1617294008000" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">AirTag and Accessories
              </span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Creativity" data-analytics-title="category=Creativity" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-creativity" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1527702805294" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Creativity</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Displays &amp; Mounts" data-analytics-title="category=Displays &amp; Mounts" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-displays-mounts" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297979069" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Displays &amp; Mounts</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Gaming &amp; Toys" data-analytics-title="category=Gaming &amp; Toys" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-toys-games" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1617639588000" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Gaming &amp; Toys</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Health &amp; Fitness" data-analytics-title="category=Health &amp; Fitness" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-health-fitness" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523304990065" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Health &amp; Fitness</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=HomeKit" data-analytics-title="category=HomeKit" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-home-automation" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1532970289358" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">HomeKit</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=MagSafe" data-analytics-title="category=MagSafe" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/category-icon-magsafe" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1607183862000" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">MagSafe</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Mice &amp; Keyboards" data-analytics-title="category=Mice &amp; Keyboards" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-mice-keyboards" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1626390698000" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Mice &amp; Keyboards</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Mesh Wi-Fi Networking" data-analytics-title="category=Mesh Wi-Fi Networking" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-networking" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297978089" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Mesh Wi-Fi Networking</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Power &amp; Cables" data-analytics-title="category=Power &amp; Cables" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-power-cables" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297979162" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Power &amp; Cables</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Software" data-analytics-title="category=Software" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-software" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297979878" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Software</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Storage" data-analytics-title="category=Storage" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/icon-category-storage" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1523297980031" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Storage</span>
            </a>
          </li>
          <li class="as-browser-item">
            <a href="#" data-slot-name="main4" data-display-name="category=Wireless Chargers" data-analytics-title="category=Wireless Chargers" class="as-browser-itemlink">
              <div class="as-browser-itemiconwrapper">
                <img src="http://localhost/Mini_Project_G4/images/access/category-icon-wireless-charger" class="ir as-browser-itemicon" alt="" width="75" height="75" data-scale-params-2="wid=150&amp;hei=150&amp;fmt=png-alpha&amp;.v=1564436071132" data-scale-initial="1" />
              </div>
              <span class="as-browser-itemname">Wireless Chargers</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="as-l-fullwidth as-pinwheel as-pinwheel15 as-pinwheel-isfooterlinkpresent" data-template="PW15_LR1S4-flex">
    <div class="as-l-container">
      <div class="as-pinwheel-header">
        <h2 class="as-pinwheel-title">อุปกรณ์เสริม Apple ที่แนะนำ</h2>
      </div>
    </div>

    <div class="row as-pinwheel-row as-pinwheel-row-1">
      <div class="column large-12 as-pinwheel15-marketingtilewrapper">
        <div class="row as-pinwheel15-section as-pinwheel15-tile1">
          <div class="tile large">
            <div class="marketing-tile">

            </div>
          </div>
        </div>
      </div>
    </div>


    <div>
      <ul class="rf-pinwheel-tiles">
        <li class="rf-pinwheel-item column large-4" data-autom="pinwheel15-tile3">
          <div class="as-pinwheel15-section as-pinwheel15-smalltile as-pinwheel15-smalltileleft as-pinwheel15-tile3 as-util-relatedlink relatedlink" data-position="2" data-relatedlink="pl_main6_MN6H3">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main6_MN6H3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main6_MN6H3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MN6H3_FV103" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645215450810" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MN6H3FE/A/iphone-se-silicone-case-productred?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main6" data-feature-name="PW15_LR1S4-react" data-display-name="iPhone SE Silicone Case - (PRODUCT)RED" data-part-number="MN6H3" class="as-pinwheel-tilelink" data-relatedlink="pl_main6_MN6H3" data-trigger-stoppropagation="" data-evar11="MN6H3|pinwheel">iPhone&nbsp;SE Silicone Case</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿1,290.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN6G3_SW_COLOR" class="ir" alt="Chalk Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645158888588" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN6F3_SW_COLOR" class="ir" alt="Abyss Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645158888597" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN6E3_SW_COLOR" class="ir" alt="Midnight" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645158888577" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN6H3_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645158889005" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="rf-pinwheel-item column large-8" data-autom="pinwheel15-tile2">
          <div class="as-pinwheel15-section as-pinwheel15-largetile as-pinwheel15-largetileright as-pinwheel15-tile2 as-util-relatedlink relatedlink" data-position="1" data-relatedlink="pl_main6_MN663">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main6_MN663" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main6_MN663&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MN663_FV401" class="ir as-pinwheel-tileheroimage" alt="" width="710" height="465" data-scale-params-2="wid=1420&amp;hei=930&amp;fmt=png-alpha&amp;.v=1645215016082" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MN663FE/A/iphone-13-pro-silicone-case-with-magsafe-lemon-zest?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main6" data-feature-name="PW15_LR1S4-react" data-display-name="iPhone 13 Pro Silicone Case with MagSafe - Lemon Zest" data-part-number="MN663" class="as-pinwheel-tilelink" data-relatedlink="pl_main6_MN663" data-trigger-stoppropagation="" data-evar11="MN663|pinwheel">iPhone 13 Pro Silicone Case with
                      MagSafe</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿1,790.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN663_SW_COLOR" class="ir" alt="Lemon Zest" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645232602096" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN653_SW_COLOR" class="ir" alt="Blue Fog" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645232601954" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN673_SW_COLOR" class="ir" alt="Eucalyptus" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645232601875" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN683_SW_COLOR" class="ir" alt="Nectarine" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645232602059" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2F3_SW_COLOR" class="ir" alt="Clover" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023671000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2H3_SW_COLOR" class="ir" alt="Chalk Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023672000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2J3_SW_COLOR" class="ir" alt="Abyss Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023673000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2K3_SW_COLOR" class="ir" alt="Midnight" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023674000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2D3_SW_COLOR" class="ir" alt="Marigold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023670000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2E3_SW_COLOR" class="ir" alt="Pink Pomelo" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023671000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2G3_SW_COLOR" class="ir" alt="Blue Jay" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023672000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM2L3_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630023673000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="rf-pinwheel-item column large-4" data-autom="pinwheel15-tile4">
          <div class="as-pinwheel15-section column as-pinwheel15-smalltile as-pinwheel15-smalltileleft as-pinwheel15-tile4 as-util-relatedlink relatedlink" data-position="3" data-relatedlink="pl_main6_MX532">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main6_MX532" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main6_MX532&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/airtag-single-select-202104" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1617761671000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/buy-airtag/airtag/1-pack?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main6" data-feature-name="PW15_LR1S4-react" data-display-name="AirTag" data-part-number="MX532" class="as-pinwheel-tilelink" data-relatedlink="pl_main6_MX532" data-trigger-stoppropagation="" data-evar11="MX532|pinwheel">AirTag</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿990.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>
        </li>
        <li class="rf-pinwheel-item column large-4" data-autom="pinwheel15-tile5">
          <div class="as-pinwheel15-section column as-pinwheel15-smalltile as-pinwheel15-tile5 as-util-relatedlink relatedlink" data-position="4" data-relatedlink="pl_main6_MN1L3">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main6_MN1L3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main6_MN1L3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MN1L3ref_FV531" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645138458828" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MN1L3FE/A/45mm-flamingo-braided-solo-loop-size-4?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main6" data-feature-name="PW15_LR1S4-react" data-display-name="45mm Flamingo Braided Solo Loop - Size 4" data-part-number="MN1L3" class="as-pinwheel-tilelink" data-relatedlink="pl_main6_MN1L3" data-trigger-stoppropagation="" data-evar11="MN1L3|pinwheel">Braided Solo Loop</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿3,100.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN0F3ref_SW_COLOR" class="ir" alt="Flamingo" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645035459376" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN023ref_SW_COLOR" class="ir" alt="Bright Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645035460405" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/ML4Q3ref_SW_COLOR" class="ir" alt="Abyss Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629943585000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MN0X3ref_SW_COLOR" class="ir" alt="Starlight" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645035459378" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJJ63ref_SW_COLOR" class="ir" alt="Electric Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617215848000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MY6K2ref_SW_COLOR" class="ir" alt="Inverness Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1612187295000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MY752ref_SW_COLOR" class="ir" alt="Charcoal" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1611115856000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MY6V2ref_SW_COLOR" class="ir" alt="Atlantic Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1611115362000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MY692ref_SW_COLOR" class="ir" alt="Pink Punch" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1611115798000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJHW3ref_SW_COLOR" class="ir" alt="Pistachio" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617215844000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/ML563ref_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629943587000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="rf-pinwheel-item column large-4" data-autom="pinwheel15-tile6">
          <div class="as-pinwheel15-section column as-pinwheel15-smalltile as-pinwheel15-smalltileright as-pinwheel15-tile6 as-util-relatedlink relatedlink" data-position="5" data-relatedlink="pl_main6_MNA73">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main6_MNA73" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main6_MNA73&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MNA73_FV102" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645214428592" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="#" data-slot-name="main6" data-feature-name="PW15_LR1S4-react" data-display-name="Smart Folio for iPad Air - Marine Blue" data-part-number="MNA73" class="as-pinwheel-tilelink" data-relatedlink="pl_main6_MNA73" data-trigger-stoppropagation="" data-evar11="MNA73|pinwheel">Smart Folio for iPad&nbsp;Air</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿2,990.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNA73_SW_COLOR" class="ir" alt="Marine Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154299730" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNA43_SW_COLOR" class="ir" alt="Dark Cherry" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154298745" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJM23_SW_COLOR" class="ir" alt="Electric Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154298746" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MH0A3_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154298023" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNA63_SW_COLOR" class="ir" alt="English Lavender" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154298746" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MH083_SW_COLOR" class="ir" alt="Cyprus Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1598908025000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MH073_SW_COLOR" class="ir" alt="Deep Navy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1598908026000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJM53_SW_COLOR" class="ir" alt="Mallard Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617478214000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MH093_SW_COLOR" class="ir" alt="Pink Citrus" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1598908025000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MH0D3_SW_COLOR" class="ir" alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645154298746" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="as-l-fullwidth as-pinwheel as-pinwheel14 as-pinwheel14-8tiles as-pinwheel-isfooterlinkpresent" data-template="PW14_Carousel">
    <div class="as-l-container">
      <div class="as-pinwheel-header">
        <h2 class="as-pinwheel-title">หูฟังไร้สาย</h2>
      </div>
    </div>

    <div class="row as-pinwheel-row as-pinwheel-row-1">
      <div class="column large-12 small-12 as-pinwheel14-marketingtilewrapper">
        <div class="as-pinwheel14-section"></div>
      </div>
    </div>

    <div data-react-gallery="" data-bootstrap="main9-pinwheel14">

      <script>
        var itemsArray = [];
        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MME73" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MME73']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MME73?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1632861342000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1632861342000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MME73ZA/A/airpods-3rd-generation?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods (3rd gen) with MagSafe Charging Case"   data-part-number="MME73" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MME73" data-trigger-stoppropagation  data-evar11="MME73|pinwheel">AirPods (3rd generation)</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿6,790.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MLWK3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MLWK3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MWP22?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1591634795000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1591634795000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MLWK3ZA/A/airpods-pro?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods Pro (2021)"   data-part-number="MLWK3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MLWK3" data-trigger-stoppropagation  data-evar11="MLWK3|pinwheel">AirPods Pro</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿8,992.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MGYJ3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MGYJ3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-silver-202011?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1604021221000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1604021221000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/buy-airpods/airpods-max/silver?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods Max - Silver"   data-part-number="MGYJ3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MGYJ3" data-trigger-stoppropagation  data-evar11="MGYJ3|pinwheel">AirPods Max - Silver</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿19,900.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-spacegray-202011_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1604622935000" class="ir " alt="Space Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1604622935000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-silver-202011_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1603846873000" class="ir " alt="Silver" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-green-202011_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1603846873000" class="ir " alt="Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-pink-202011_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1603846873000" class="ir " alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airpods-max-select-skyblue-202011_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1603846875000" class="ir " alt="Sky Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846875000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MV7N2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MV7N2']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MV7N2?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1551489688005" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1551489688005" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MV7N2ZA/A/airpods-with-charging-case?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods with Charging Case"   data-part-number="MV7N2" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MV7N2" data-trigger-stoppropagation  data-evar11="MV7N2|pinwheel">AirPods (2nd generation)</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿4,990.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MK2J3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MK2J3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2J3?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1634663503000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1634663503000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MK2J3PA/A/beats-fit-pro-true-wireless-earbuds-sage-gray?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Fit Pro True Wireless Earbuds — Sage Gray"   data-part-number="MK2J3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MK2J3" data-trigger-stoppropagation  data-evar11="MK2J3|pinwheel">Beats Fit Pro True Wireless Earbuds — Sage Gray</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿7,300.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2F3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1634663467000" class="ir " alt="Beats Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663467000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2G3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1634663475000" class="ir " alt="Beats White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663475000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2H3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1634663485000" class="ir " alt="Stone Purple" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663485000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK2J3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1634663495000" class="ir " alt="Sage Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663495000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MJ503" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MJ503']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MJ503?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1621538312000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1621538312000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MJ503PA/A/beats-studio-buds-true-wireless-noise-cancelling-earphones-beats-red?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Studio Buds – True Wireless Noise Cancelling Earphones – Beats Red"   data-part-number="MJ503" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MJ503" data-trigger-stoppropagation  data-evar11="MJ503|pinwheel">Beats Studio Buds – True Wireless Noise Cancelling Earphones – Beats Red</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿5,500.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MJ4Y3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1621538155000" class="ir " alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621538155000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MJ4X3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1621876596000" class="ir " alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621876596000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MJ503_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1621538271000" class="ir " alt="Beats Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621538271000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MYMG2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MYMG2']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYMG2?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1601053195000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1601053195000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MYMG2PA/A/beats-flex-all-day-wireless-earphones-flame-blue?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Flex All-Day Wireless Earphones - Flame Blue"   data-part-number="MYMG2" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MYMG2" data-trigger-stoppropagation  data-evar11="MYMG2|pinwheel">Beats Flex – All-Day Wireless Earphones - Flame Blue</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿2,500.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYMG2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1601053189000" class="ir " alt="Flame Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053189000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYMC2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1601053162000" class="ir " alt="Beats Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053162000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYME2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1601053183000" class="ir " alt="Smoke Grey" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053183000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MYMD2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1601053170000" class="ir " alt="Yuzu Yellow" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053170000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main9_MXJ92" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main9_MXJ92']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MXJ92?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1580420175341" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1580420175341" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MXJ92PA/A/beats-studio3-wireless-over%E2%80%91ear-headphones-shadow-gray?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Studio3 Wireless Headphones - The Beats Skyline Collection - Shadow Gray"   data-part-number="MXJ92" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MXJ92" data-trigger-stoppropagation  data-evar11="MXJ92|pinwheel">Beats Studio3 Wireless Headphones – The Beats Skyline Collection - Shadow Grey</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿12,500.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX402_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420160599" class="ir " alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420160599" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX3Y2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420153802" class="ir " alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420153802" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX3X2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420152489" class="ir " alt="Matte Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420152489" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX422_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420166207" class="ir " alt="Black &amp; Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420166207" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX412_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420163197" class="ir " alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420163197" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MXJA2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420174001" class="ir " alt="Midnight Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420174001" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MXJ92_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1580420171709" class="ir " alt="Shadow Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420171709" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        window["main9-pinwheel14"] = {
          props: {
            multiItemSlideView: true,
            itemsPerSlide: 3,
            metrics: {
              slot: "Landind Page",
              feature: "Gallery 3",
            },
            a11y: {
              label: "Wireless Headphones",
              previous: "Previous Wireless Headphones",
              next: "Next Wireless Headphones",
            },
          },
          items: itemsArray,
        };
      </script>

      <style>
        .rs-pinwheel-14-container-no-js {
          display: none;
        }

        .nojs .rs-pinwheel-14-container-no-js {
          display: block;
        }

        .rs-pinwheel-14-nojs-wrapper {
          display: flex;
          flex-wrap: wrap;
        }
      </style>

      <div class="as-l-container rs-pinwheel-14-container-no-js">
        <div class="rs-pinwheel-14-nojs-wrapper">
          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MME73" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MME73&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MME73" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1632861342000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MME73ZA/A/airpods-3rd-generation?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods (3rd gen) with MagSafe Charging Case" data-part-number="MME73" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MME73" data-trigger-stoppropagation="" data-evar11="MME73|pinwheel">AirPods (3rd&nbsp;generation)</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿6,790.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MLWK3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MLWK3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MWP22" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1591634795000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="#" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods Pro (2021)" data-part-number="MLWK3" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MLWK3" data-trigger-stoppropagation="" data-evar11="MLWK3|pinwheel">AirPods Pro</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿8,992.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MGYJ3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MGYJ3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-silver-202011" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1604021221000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="#" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods Max - Silver" data-part-number="MGYJ3" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MGYJ3" data-trigger-stoppropagation="" data-evar11="MGYJ3|pinwheel">AirPods Max - Silver</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿19,900.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-spacegray-202011_SW_COLOR" class="ir" alt="Space Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1604622935000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-silver-202011_SW_COLOR" class="ir" alt="Silver" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-green-202011_SW_COLOR" class="ir" alt="Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-pink-202011_SW_COLOR" class="ir" alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846873000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/airpods-max-select-skyblue-202011_SW_COLOR" class="ir" alt="Sky Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1603846875000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MV7N2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MV7N2&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MV7N2" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1551489688005" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="#" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="AirPods with Charging Case" data-part-number="MV7N2" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MV7N2" data-trigger-stoppropagation="" data-evar11="MV7N2|pinwheel">AirPods (2nd&nbsp;generation)</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿4,990.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MK2J3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MK2J3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MK2J3" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1634663503000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="#" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Fit Pro True Wireless Earbuds — Sage Gray" data-part-number="MK2J3" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MK2J3" data-trigger-stoppropagation="" data-evar11="MK2J3|pinwheel">Beats Fit Pro True&nbsp;Wireless Earbuds — Sage
                      Gray</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿7,300.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK2F3_SW_COLOR" class="ir" alt="Beats Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663467000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK2G3_SW_COLOR" class="ir" alt="Beats White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663475000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK2H3_SW_COLOR" class="ir" alt="Stone Purple" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663485000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK2J3_SW_COLOR" class="ir" alt="Sage Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1634663495000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MJ503" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MJ503&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MJ503" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1621538312000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MJ503PA/A/beats-studio-buds-true-wireless-noise-cancelling-earphones-beats-red?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Studio Buds – True Wireless Noise Cancelling Earphones – Beats Red" data-part-number="MJ503" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MJ503" data-trigger-stoppropagation="" data-evar11="MJ503|pinwheel">Beats Studio Buds – True Wireless
                      Noise Cancelling
                      Earphones – Beats Red</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿5,500.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJ4Y3_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621538155000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJ4X3_SW_COLOR" class="ir" alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621876596000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MJ503_SW_COLOR" class="ir" alt="Beats Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1621538271000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MYMG2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MYMG2&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MYMG2" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1601053195000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MYMG2PA/A/beats-flex-all-day-wireless-earphones-flame-blue?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Flex All-Day Wireless Earphones - Flame Blue" data-part-number="MYMG2" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MYMG2" data-trigger-stoppropagation="" data-evar11="MYMG2|pinwheel">Beats Flex – All-Day Wireless Earphones - Flame
                      Blue</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿2,500.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MYMG2_SW_COLOR" class="ir" alt="Flame Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053189000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MYMC2_SW_COLOR" class="ir" alt="Beats Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053162000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MYME2_SW_COLOR" class="ir" alt="Smoke Grey" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053183000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MYMD2_SW_COLOR" class="ir" alt="Yuzu Yellow" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1601053170000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main9_MXJ92" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main9_MXJ92&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MXJ92" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1580420175341" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MXJ92PA/A/beats-studio3-wireless-over%E2%80%91ear-headphones-shadow-gray?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main9" data-feature-name="PW14_Carousel-react" data-display-name="Beats Studio3 Wireless Headphones - The Beats Skyline Collection - Shadow Gray" data-part-number="MXJ92" class="as-pinwheel-tilelink" data-relatedlink="pl_main9_MXJ92" data-trigger-stoppropagation="" data-evar11="MXJ92|pinwheel">Beats Studio3 Wireless Headphones –
                      The Beats Skyline
                      Collection - Shadow&nbsp;Grey</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿12,500.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX402_SW_COLOR" class="ir" alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420160599" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX3Y2_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420153802" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX3X2_SW_COLOR" class="ir" alt="Matte Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420152489" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX422_SW_COLOR" class="ir" alt="Black &amp; Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420166207" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX412_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420163197" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MXJA2_SW_COLOR" class="ir" alt="Midnight Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420174001" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MXJ92_SW_COLOR" class="ir" alt="Shadow Gray" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1580420171709" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="as-l-fullwidth as-pinwheel as-pinwheel14 as-pinwheel14-10tiles as-pinwheel-isfooterlinkpresent" data-template="PW14_Carousel">
      <div class="as-l-container">
        <div class="as-pinwheel-header">
          <h2 class="as-pinwheel-title">AirTag</h2>
        </div>
      </div>

      <div class="row as-pinwheel-row as-pinwheel-row-1">
        <div class="column large-12 small-12 as-pinwheel14-marketingtilewrapper">
          <div class="as-pinwheel14-section"></div>
        </div>
      </div>

      

      <script>
        var itemsArray = [];
        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MX532" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MX532']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-single-select-202104?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1617761671000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1617761671000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/buy-airtag/airtag/1-pack?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag"   data-part-number="MX532" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX532" data-trigger-stoppropagation  data-evar11="MX532|pinwheel">AirTag</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿990.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MX542" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MX542']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/airtag-4pack-select-202104?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1617761669000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1617761669000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/buy-airtag/airtag/4-pack?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag 4 pack bundle"   data-part-number="MX542" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX542" data-trigger-stoppropagation  data-evar11="MX542|pinwheel">AirTag 4 pack</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿3,390.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MX4A2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MX4A2']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX4A2?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1618028917000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1618028917000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MX4A2FE/A/airtag-leather-loop-saddle-brown?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Leather Loop - Saddle Brown"   data-part-number="MX4A2" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX4A2" data-trigger-stoppropagation  data-evar11="MX4A2|pinwheel">AirTag Leather Loop - Saddle Brown</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿1,590.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX4A2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617325223000" class="ir " alt="Saddle Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617325223000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MM043_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1624640863000" class="ir " alt="Baltic Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640863000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MM013_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1624644587000" class="ir " alt="Forest Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624644587000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MM023_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1624640862000" class="ir " alt="California Poppy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640862000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK0V3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617325202000" class="ir " alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617325202000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MLYY3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MLYY3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MLYY3?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1629909390000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1629909390000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MLYY3FE/A/airtag-loop-pink-citrus?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Polyurethane Loop - Pink Citrus"   data-part-number="MLYY3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MLYY3" data-trigger-stoppropagation  data-evar11="MLYY3|pinwheel">AirTag Loop - Pink Citrus</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿1,190.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK0X3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617237422000" class="ir " alt="Electric Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237422000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX4F2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617237446000" class="ir " alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237446000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK0W3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617237422000" class="ir " alt="Sunflower" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237422000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MHJ03_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617237423000" class="ir " alt="Deep Navy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237423000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MLYY3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630362854000" class="ir " alt="Pink Citrus" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630362854000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MMFC3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MMFC3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMFC3?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1629917938000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1629917938000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MMFC3FE/A/airtag-leather-key-ring-wisteria?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Leather Key Ring - Wisteria"   data-part-number="MMFC3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MMFC3" data-trigger-stoppropagation  data-evar11="MMFC3|pinwheel">AirTag Leather Key Ring - Wisteria</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿1,390.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMF93_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1629917920000" class="ir " alt="Midnight" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917920000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMFA3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1629917923000" class="ir " alt="Golden Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917923000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMFC3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1629917929000" class="ir " alt="Wisteria" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917929000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX4M2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617324900000" class="ir " alt="Saddle Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MHJ23_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617324900000" class="ir " alt="Baltic Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MM073_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1624640858000" class="ir " alt="Forest Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640858000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MM083_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1624640857000" class="ir " alt="California Poppy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640857000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MK103_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617324900000" class="ir " alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MNG03" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MNG03']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNG03?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1645830300886" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645830300886" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt new">New</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MNG03TH/A/airtag-herm%C3%A8s-luggage-tag-noir?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Luggage Tag - Noir"   data-part-number="MNG03" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNG03" data-trigger-stoppropagation  data-evar11="MNG03|pinwheel">AirTag Hermès Luggage Tag - Noir</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿14,690.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMNC3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630042107000" class="ir " alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630042107000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNG03_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645215727370" class="ir " alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215727370" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MNFX3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MNFX3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFX3?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1646952281032" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1646952281032" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt new">New</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MNFX3TH/A/airtag-herm%C3%A8s-key-ring-l%C3%A9opard?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Key Ring - Béton"   data-part-number="MNFX3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNFX3" data-trigger-stoppropagation  data-evar11="MNFX3|pinwheel">AirTag Hermès Key Ring - Béton</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿11,690.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFW3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645215538391" class="ir " alt="Rose Sakura" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538391" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFX3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645215538255" class="ir " alt="Béton" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538255" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN73_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630041070000" class="ir " alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041070000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX882_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1618441806000" class="ir " alt="Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441806000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX872_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1618441806000" class="ir " alt="Fauve" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441806000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFV3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645215538530" class="ir " alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538530" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFU3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645215538664" class="ir " alt="Bleu Lin" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538664" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN93_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630041071000" class="ir " alt="Bleu Saphir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041071000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMNA3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630041071000" class="ir " alt="Jaune d’or" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041071000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN83_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630041070000" class="ir " alt="Piment" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041070000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_MNFT3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_MNFT3']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFT3?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1645831859617" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645831859617" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader ">

							<div class="violator-wrapper">
								<span class="violator-frameless as-violator-alt new">New</span>
							</div>
			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/MNFT3TH/A/airtag-herm%C3%A8s-bag-charm-rose-sakura?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Bag Charm – Rose Sakura"   data-part-number="MNFT3" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNFT3" data-trigger-stoppropagation  data-evar11="MNFT3|pinwheel">AirTag Hermès Bag Charm - Rose Sakura</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿9,990.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFT3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645216372366" class="ir " alt="Rose Sakura" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372366" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMPC3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630040212000" class="ir " alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX852_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1618441805000" class="ir " alt="Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441805000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MX842_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1618441805000" class="ir " alt="Fauve" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441805000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFR3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645216372230" class="ir " alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372230" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MNFQ3_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1645216372374" class="ir " alt="Bleu Lin" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372374" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN63_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630040212000" class="ir " alt="Bleu Saphir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN43_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630040212000" class="ir " alt="Jaune d’or" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MMN53_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1630040212000" class="ir " alt="Piment" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_HNPY2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_HNPY2']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPY2?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1623251254000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1623251254000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/HNPY2ZM/A/belkin-secure-holder-with-strap-for-airtag-blue?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="Belkin Secure Holder with Strap for AirTag - Blue"   data-part-number="HNPY2" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_HNPY2" data-trigger-stoppropagation  data-evar11="HNPY2|pinwheel">Belkin Secure Holder with Strap for AirTag - Blue</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿490.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPX2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617232479000" class="ir " alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232479000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPY2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617232768000" class="ir " alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232768000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPW2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617232252000" class="ir " alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232252000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPV2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617231685000" class="ir " alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617231685000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        itemsArray.push(`<div class="as-pinwheel14-section">        <div class="as-pinwheel-tile">
                
<div data-relatedlink="pl_main12_HNPT2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink='pl_main12_HNPT2']">
	<div class="as-pinwheel-tilehero">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPT2?wid=266&amp;hei=291&amp;fmt=png-alpha&amp;.v=1618944996000" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1618944996000" data-scale-initial="1"   />
	</div>

	

	  	<div class="as-pinwheel-infosection">

			<div class="as-pinwheel-tileheader as-pinwheel-noviolator">

			</div>

	    <h3 class="as-pinwheel-tiletitle" >
						

<a href="/th-en/shop/product/HNPT2ZM/A/belkin-secure-holder-with-key-ring-for-airtag-pink?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733"   data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="Belkin Secure Holder with Key Ring for AirTag - Pink"   data-part-number="HNPT2" 
  class="as-pinwheel-tilelink" data-relatedlink="pl_main12_HNPT2" data-trigger-stoppropagation  data-evar11="HNPT2|pinwheel">Belkin Secure Holder with Key Ring for AirTag – Pink</a>
	    </h3>

	  <div class="as-pinwheel-info">
	      <div class="as-pinwheel-price">
	        <span class="as-pinwheel-pricecurrent">
	          ฿490.00
	        </span>
					<div class="as-price-savings">
							<span></span>
					</div>
	      </div>
	  </div>
  </div>

	<div class="as-pinwheel-colorsection">
	  <div class="as-pinwheel-colorgallery">
	    

<div class="a11y">Available colors:</div>
<ul class="color-gallery">
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPT2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617230678000" class="ir " alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPU2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617230678000" class="ir " alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPS2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617230679000" class="ir " alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230679000" data-scale-initial="1"   />
		</li>
		<li class="as-pinwheel-colorimage">
<img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/HNPR2_SW_COLOR?wid=16&amp;hei=16&amp;fmt=png-alpha&amp;.v=1617230678000" class="ir " alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1"   />
		</li>
	<li class="as-producttile-moretext">+</li>
</ul>

	  </div>
	</div>

  
</div>

        </div>
</div>`);

        window["main12-pinwheel14"] = {
          props: {
            multiItemSlideView: true,
            itemsPerSlide: 3,
            metrics: {
              slot: "Landind Page",
              feature: "Gallery 3",
            },
            a11y: {
              label: "AirTag",
              previous: "Previous AirTag",
              next: "Next AirTag",
            },
          },
          items: itemsArray,
        };
      </script>

      <style>
        .rs-pinwheel-14-container-no-js {
          display: none;
        }

        .nojs .rs-pinwheel-14-container-no-js {
          display: block;
        }

        .rs-pinwheel-14-nojs-wrapper {
          display: flex;
          flex-wrap: wrap;
        }
      </style>

      <div class="as-l-container rs-pinwheel-14-container-no-js">
        <div class="rs-pinwheel-14-nojs-wrapper">
          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MX532" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MX532&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/airtag-single-select-202104" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1617761671000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/buy-airtag/airtag/1-pack?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag" data-part-number="MX532" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX532" data-trigger-stoppropagation="" data-evar11="MX532|pinwheel">AirTag</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿990.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MX542" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MX542&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/airtag-4pack-select-202104" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1617761669000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt freeengraving">Free Engraving</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/buy-airtag/airtag/4-pack?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag 4 pack bundle" data-part-number="MX542" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX542" data-trigger-stoppropagation="" data-evar11="MX542|pinwheel">AirTag 4 pack</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿3,390.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection"></div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MX4A2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MX4A2&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MX4A2" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1618028917000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MX4A2FE/A/airtag-leather-loop-saddle-brown?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Leather Loop - Saddle Brown" data-part-number="MX4A2" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MX4A2" data-trigger-stoppropagation="" data-evar11="MX4A2|pinwheel">AirTag Leather Loop - Saddle Brown</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿1,590.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX4A2_SW_COLOR" class="ir" alt="Saddle Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617325223000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM043_SW_COLOR" class="ir" alt="Baltic Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640863000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM013_SW_COLOR" class="ir" alt="Forest Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624644587000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM023_SW_COLOR" class="ir" alt="California Poppy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640862000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK0V3_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617325202000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MLYY3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MLYY3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MLYY3" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1629909390000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MLYY3FE/A/airtag-loop-pink-citrus?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Polyurethane Loop - Pink Citrus" data-part-number="MLYY3" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MLYY3" data-trigger-stoppropagation="" data-evar11="MLYY3|pinwheel">AirTag Loop - Pink&nbsp;Citrus</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿1,190.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK0X3_SW_COLOR" class="ir" alt="Electric Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237422000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX4F2_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237446000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK0W3_SW_COLOR" class="ir" alt="Sunflower" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237422000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MHJ03_SW_COLOR" class="ir" alt="Deep Navy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617237423000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MLYY3_SW_COLOR" class="ir" alt="Pink Citrus" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630362854000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MMFC3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MMFC3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MMFC3" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1629917938000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MMFC3FE/A/airtag-leather-key-ring-wisteria?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Leather Key Ring - Wisteria" data-part-number="MMFC3" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MMFC3" data-trigger-stoppropagation="" data-evar11="MMFC3|pinwheel">AirTag Leather Key Ring - Wisteria</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿1,390.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMF93_SW_COLOR" class="ir" alt="Midnight" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917920000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMFA3_SW_COLOR" class="ir" alt="Golden Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917923000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMFC3_SW_COLOR" class="ir" alt="Wisteria" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1629917929000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX4M2_SW_COLOR" class="ir" alt="Saddle Brown" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MHJ23_SW_COLOR" class="ir" alt="Baltic Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM073_SW_COLOR" class="ir" alt="Forest Green" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640858000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MM083_SW_COLOR" class="ir" alt="California Poppy" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1624640857000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MK103_SW_COLOR" class="ir" alt="Red" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617324900000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MNG03" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MNG03&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MNG03" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645830300886" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MNG03TH/A/airtag-herm%C3%A8s-luggage-tag-noir?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Luggage Tag - Noir" data-part-number="MNG03" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNG03" data-trigger-stoppropagation="" data-evar11="MNG03|pinwheel">AirTag Hermès Luggage Tag - Noir</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿14,690.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMNC3_SW_COLOR" class="ir" alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630042107000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNG03_SW_COLOR" class="ir" alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215727370" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MNFX3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MNFX3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MNFX3" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1646952281032" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MNFX3TH/A/airtag-herm%C3%A8s-key-ring-l%C3%A9opard?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Key Ring - Béton" data-part-number="MNFX3" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNFX3" data-trigger-stoppropagation="" data-evar11="MNFX3|pinwheel">AirTag Hermès Key Ring - Béton</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿11,690.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFW3_SW_COLOR" class="ir" alt="Rose Sakura" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538391" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFX3_SW_COLOR" class="ir" alt="Béton" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538255" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN73_SW_COLOR" class="ir" alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041070000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX882_SW_COLOR" class="ir" alt="Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441806000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX872_SW_COLOR" class="ir" alt="Fauve" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441806000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFV3_SW_COLOR" class="ir" alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538530" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFU3_SW_COLOR" class="ir" alt="Bleu Lin" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645215538664" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN93_SW_COLOR" class="ir" alt="Bleu Saphir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041071000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMNA3_SW_COLOR" class="ir" alt="Jaune d’or" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041071000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN83_SW_COLOR" class="ir" alt="Piment" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630041070000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_MNFT3" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_MNFT3&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/MNFT3" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1645831859617" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader">
                    <div class="violator-wrapper">
                      <span class="violator-frameless as-violator-alt new">New</span>
                    </div>
                  </div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/MNFT3TH/A/airtag-herm%C3%A8s-bag-charm-rose-sakura?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="AirTag Hermès Bag Charm – Rose Sakura" data-part-number="MNFT3" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_MNFT3" data-trigger-stoppropagation="" data-evar11="MNFT3|pinwheel">AirTag Hermès Bag Charm - Rose Sakura</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿9,990.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFT3_SW_COLOR" class="ir" alt="Rose Sakura" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372366" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMPC3_SW_COLOR" class="ir" alt="Gold" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX852_SW_COLOR" class="ir" alt="Orange" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441805000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MX842_SW_COLOR" class="ir" alt="Fauve" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1618441805000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFR3_SW_COLOR" class="ir" alt="Noir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372230" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MNFQ3_SW_COLOR" class="ir" alt="Bleu Lin" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1645216372374" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN63_SW_COLOR" class="ir" alt="Bleu Saphir" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN43_SW_COLOR" class="ir" alt="Jaune d’or" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/MMN53_SW_COLOR" class="ir" alt="Piment" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1630040212000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_HNPY2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_HNPY2&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/HNPY2" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1623251254000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/HNPY2ZM/A/belkin-secure-holder-with-strap-for-airtag-blue?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="Belkin Secure Holder with Strap for AirTag - Blue" data-part-number="HNPY2" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_HNPY2" data-trigger-stoppropagation="" data-evar11="HNPY2|pinwheel">Belkin Secure Holder with Strap for AirTag - Blue</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿490.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPX2_SW_COLOR" class="ir" alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232479000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPY2_SW_COLOR" class="ir" alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232768000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPW2_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617232252000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPV2_SW_COLOR" class="ir" alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617231685000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="as-pinwheel14-section">
            <div class="as-pinwheel-tile">
              <div data-relatedlink="pl_main12_HNPT2" class="as-util-relatedlink" data-trigger-click="click [data-relatedlink=&#39;pl_main12_HNPT2&#39;]">
                <div class="as-pinwheel-tilehero">
                  <img src="http://localhost/Mini_Project_G4/images/access/HNPT2" class="ir as-pinwheel-tileheroimage" alt="" width="266" height="291" data-scale-params-2="wid=532&amp;hei=582&amp;fmt=png-alpha&amp;.v=1618944996000" data-scale-initial="1" />
                </div>

                <div class="as-pinwheel-infosection">
                  <div class="as-pinwheel-tileheader as-pinwheel-noviolator"></div>

                  <h3 class="as-pinwheel-tiletitle">
                    <a href="https://www.apple.com/th-en/shop/product/HNPT2ZM/A/belkin-secure-holder-with-key-ring-for-airtag-pink?fnode=f9be513227cad54bef5352872d311aa4764c3d71434dfdae946c825681168018ea9634124f3aca27318e4f415949ed0b6c0ccd0daf7f72c467b239b5a52def5ec6ec1269f3b4d4a48e626e1b6673eb7656a7066c67446f3a82954dfffe922733" data-slot-name="main12" data-feature-name="PW14_Carousel-react" data-display-name="Belkin Secure Holder with Key Ring for AirTag - Pink" data-part-number="HNPT2" class="as-pinwheel-tilelink" data-relatedlink="pl_main12_HNPT2" data-trigger-stoppropagation="" data-evar11="HNPT2|pinwheel">Belkin Secure Holder with Key Ring
                      for AirTag –
                      Pink</a>
                  </h3>

                  <div class="as-pinwheel-info">
                    <div class="as-pinwheel-price">
                      <span class="as-pinwheel-pricecurrent">
                        ฿490.00
                      </span>
                      <div class="as-price-savings">
                        <span></span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="as-pinwheel-colorsection">
                  <div class="as-pinwheel-colorgallery">
                    <div class="a11y">Available colors:</div>
                    <ul class="color-gallery">
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPT2_SW_COLOR" class="ir" alt="Pink" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPU2_SW_COLOR" class="ir" alt="Blue" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPS2_SW_COLOR" class="ir" alt="White" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230679000" data-scale-initial="1" />
                      </li>
                      <li class="as-pinwheel-colorimage">
                        <img src="http://localhost/Mini_Project_G4/images/access/HNPR2_SW_COLOR" class="ir" alt="Black" width="16" height="16" data-scale-params-2="wid=32&amp;hei=32&amp;fmt=png-alpha&amp;.v=1617230678000" data-scale-initial="1" />
                      </li>
                      <li class="as-producttile-moretext">+</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="as-footnotes buystrip buystrip-background js flexbox">
        <div class="buystrip-content">
          <section class="buystrip-items">
            <section class="buystrip-item">
              <div class="buystrip-item-content superlink">
                <a href="#" data-slot-name="main22" data-feature-name="Astro Link" data-display-name="AOS: campaigns/shipping_and_returns" class="block">
                  <figure class="buystrip-item-icon">
                    <img src="http://localhost/Mini_Project_G4/images/access/icon-apple-store-grey-2017" alt="" width="36" height="56" data-scale-params-2="wid=72&amp;hei=112&amp;fmt=png-alpha&amp;.v=1586396517314" data-scale-initial="1" class="“icon_shipping” ir" />
                  </figure>
                  <h3 class="buystrip-item-title">
                    รับสินค้าด้วยตัวเองที่ Apple Store
                  </h3>
                  <p class="buystrip-item-copy">

                    ซื้อออนไลน์และรับสินค้าที่มีจำหน่ายได้เลย
                  </p>
                  <span class="block-link buystrip-item-cta more">Learn&nbsp;more<span class="a11y"> รับสินค้าด้วยตัวเองที่ Apple Store</span></span>
                </a>
              </div>
            </section>

            <section class="buystrip-item">
              <div class="buystrip-item-content superlink">
                <a href="#" data-slot-name="main22" data-feature-name="Astro Link" data-display-name="AOS: campaigns/shipping_and_returns" class="block">
                  <figure class="buystrip-item-icon">
                    <img src="http://localhost/Mini_Project_G4/images/access/icon-shipping-grey-2017" alt="" width="44" height="56" data-scale-params-2="wid=89&amp;hei=112&amp;fmt=png-alpha&amp;.v=1624381070000" data-scale-initial="1" class="icon_shipping ir" />
                  </figure>
                  <h3 class="buystrip-item-title">
                    จัดส่งฟรี
                  </h3>
                  <p class="buystrip-item-copy pd-util-compact-large-10 pd-util-compact-small-5">

                    รับบริการจัดส่งฟรีถึงบ้านคุณ

                  </p>
                  <span class="block-link buystrip-item-cta more">Learn&nbsp;more<span class="a11y">จัดส่งฟรี</span></span>
                </a>
              </div>
            </section>

            <section class="buystrip-item">
              <div class="buystrip-item-content superlink">
                <a href="#" class="block">
                  <figure class="buystrip-item-icon">
                    <img src="http://localhost/Mini_Project_G4/images/access/icon-financing-grey-2017_GEO_TH" alt="" width="40" height="56" data-scale-params-2="wid=80&amp;hei=112&amp;fmt=png-alpha&amp;.v=1621555794000" data-scale-initial="1" class="icon-financing ir" />
                  </figure>
                  <h3 class="buystrip-item-title">
                    บริการด้านการเงิน
                  </h3>
                  <p class="buystrip-item-copy pd-util-compact-large-5 pd-util-compact-small-5">

                    มีบริการผ่อนชำระ 0%

                  </p>
                  <span class="block-link buystrip-item-cta more">Learn&nbsp;more<span class="a11y">บริการด้านการเงิน</span></span>
                </a>
              </div>
            </section>
          </section>
        </div>
      </div>
      <br><br>
      <script>
        window.GLOBAL_ASSETS = {
          open: "Open",
          close: "Close",
          top: "Top",
          right: "Right",
          bottom: "Bottom",
          left: "Left",
          next: "Next",
          previous: "Previous",
          selected: "Selected",
          show: "Show",
          hide: "Hide",
          play: "Play",
          pause: "Pause",
          mute: "",
          unmute: "Unmute",
          loading: "Loading",
          fullscreen: "Show fullscreen",
          pip: "Show picture-in-picture",
          airplay: "Show AirPlay",
          captions: "Show captions",
          showMore: "Show more",
          showLess: "Show less",
          more: "More",
          less: "Less",
          item: "Item",
          image: "Image",
          video: "Video",
          edit: "Edit",
          change: "Change",
          update: "Update",
          add: "Add",
          remove: "Remove",
          save: "Save",
          cancel: "Cancel",
          submit: "Submit",
          reset: "Reset",
          opensNewWindow: "(Opens in a new window)",
          search: "Search",
        };

        window.pageLevelData = window.pageLevelData || {};
      </script>
    </div>

    <script>
      dciddstr =
        "90ed928ffccc617d04529b52c0b6f313c94d9838182d9327093ff7e59ca8e970aeeb78a1cc11484db4582a2c02807afd7f706e2f3644d371487c868dfc82241fb38a910d2805f0e170df0f1f8aeab270caa83b05d287ca2fb9630adfe19762c27d939e83a9218cd0989987240a54bd455c39778c7fc51e462ea542173ab547c47916bf147d3a3bd0e1cdfd32dbeede120a90f453c10cb248d008c3ee3261cdc5bc673d22350e9fa7e8659ad10ad8e079a0ba84703f4a9e39186822a73f03a41784a4dea773e503028e997f7f794c269af524c9e454a6c2d8d363e04af30e0f16701e014c252ced07fb32e4037cb4db4ec6026ba26563ff2054029eee52a8f05e5a936c2e6791d506bd974adcdf018edf6b6c8d663d7c2e4b64c0b5dee9701219aa4ad550b4458857f42bf1c44100ba03da2f36b3d2ce2e939ecc4a5716039bac3a0a304d7ad9d3b4ceceb04583797f605dfd5d06b868385509c1229ee1df0d1d2ee6a175247e05a2c81b2f004ee1a83e73dfcf39d06743e016d472e321c0bb71352e6567c645170e3c434f9a9fa09b4201706d4e28ea282ac7d292209d29b8894be0d5cefd054497bf7c0a0bcfc5ea08de03af3c76ed9e8fd7bee15cbd9ecb3c2bb8f1a0b387a110dd6bf35ceb50f298c0155aaf599ccd8ad0eb959c18eadeb59f1e3b11e75ed00327e1dd25f37128fb4a4db7b08113efdd8f2b06a7eeb4ee28946db4942c8259e7b3e04a4c7990a9cb2f6223d3e788db70f1635d9a5556c6d597ebe4a279a2aa1c1b42fd596a9551c4f826195406b07853cae62c2985ec0a7b219b6152865946d6e24bd915c9d038a685c3131dcb65fdc9300f35e67560f16f43903e2cc879b1fca52930b6bd1bd10c920c968b5e415406a8f552fef3cfcf18fc6f28a7dfac8bc393a3452a54c31958a16208c7dd18aa88a8299cbe93861512ad0b05a07ba11e4fc77e138d01f453adacf7f899fc";
    </script>

    <div id="portal"></div>

    <div id="ac-gn-viewport-emitter" data-viewport-emitter-dispatch="" data-viewport-emitter-state='{"viewport":"large","orientation":"landscape","retina":false}'></div>
    <img src="http://localhost/Mini_Project_G4/images/access/dc" height="1" width="1" alt="" style="display: none" /><img src="http://localhost/Mini_Project_G4/images/access/dc" height="1" width="1" alt="" style="display: none" />
</body>

</html>