<?php
require "config/constants.php";
session_start();
if (!isset($_SESSION["uid"])) {
  header("location:index.php");
}

include "db.php";

$query     = 'SELECT product_id,
                     product_cat,
                     product_title,
                     product_price,
                     product_qty,
                     product_desc,
                     product_image,
                     product_keywords,
                     brand_id,
                     brand_title
              FROM products
                   JOIN brands b ON b.brand_id = products.product_brand
              WHERE product_id = 4
              LIMIT 1';

$run_query = mysqli_query($con, $query);
$item      = mysqli_fetch_array($run_query);

?>

<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Modern Swivel Accent Chair</title>
  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.">
  <meta name="keywords" content="">
  <link rel="canonical" href="3-modern-swivel-accent-chair.html">
  <link rel="alternate" href="3-modern-swivel-accent-chair.html" hreflang="en-us">
  <link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/fr/accueil/3-modern-swivel-accent-chair.html" hreflang="fr-fr">
  <link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/de/startseite/3-modern-swivel-accent-chair.html" hreflang="de-de">
  <link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/it/home/3-modern-swivel-accent-chair.html" hreflang="it-it">
  <link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/es/inicio/3-modern-swivel-accent-chair.html" hreflang="es-es">
  <link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/pl/strona-glowna/3-modern-swivel-accent-chair.html" hreflang="pl-pl">
  <meta property="og:title" content="Modern Swivel Accent Chair" />
  <meta property="og:description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur." />
  <meta property="og:url" content="https://rubiktheme.com/demo/rb_davici_demo/en/home/3-13-modern-swivel-accent-chair.html" />
  <meta property="og:site_name" content="Davici - Furniture Store" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/vnd.microsoft.icon" href="https://rubiktheme.com/demo/rb_davici_demo/img/favicon.ico?1614158735">
  <link rel="shortcut icon" type="image/x-icon" href="https://rubiktheme.com/demo/rb_davici_demo/img/favicon.ico?1614158735">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500,600&amp;subset=latin%2Clatin-ext" type="text/css" media="all">
  <link rel="stylesheet" href="./themes/rb_davici/assets/cache/theme-02aa9739.css" type="text/css" media="all">
  <script type="text/javascript">
    var RB_Meta = {
      "v": "1.0.0"
    };
    var active = "1";
    var cancel_rating_txt = "Cancel Rating";
    var collections = ["<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/8-armen-living-jaguar-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/69-home_default\/armen-living-jaguar-chair.jpg' alt='Armen Living Jaguar Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/8-armen-living-jaguar-chair.html' title='Armen Living Jaguar Chair'>Armen Living Jaguar Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/12-armen-living-crimson-faux-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/88-home_default\/armen-living-crimson-faux-chair.jpg' alt='Armen Living Crimson Faux Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/12-armen-living-crimson-faux-chair.html' title='Armen Living Crimson Faux Chair'>Armen Living Crimson Faux Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/13-carronade-pendant-large.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/94-home_default\/carronade-pendant-large.jpg' alt='Carronade pendant large'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/13-carronade-pendant-large.html' title='Carronade pendant large'>Carronade pendant large<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/14-modern-fabric-arm-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/100-home_default\/modern-fabric-arm-chair.jpg' alt='Modern Fabric Arm Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/14-modern-fabric-arm-chair.html' title='Modern Fabric Arm Chair'>Modern Fabric Arm Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/bed-bath\/2-armen-living-summer-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/30-home_default\/armen-living-summer-chair.jpg' alt='Armen Living Summer Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/bed-bath\/2-armen-living-summer-chair.html' title='Armen Living Summer Chair'>Armen Living Summer Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/9-stone-clock-wall-clock.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/71-home_default\/stone-clock-wall-clock.jpg' alt='Stone Clock Wall clock'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/9-stone-clock-wall-clock.html' title='Stone Clock Wall clock'>Stone Clock Wall clock<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/20-modern-fabric-club-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/140-home_default\/modern-fabric-club-chair.jpg' alt='Modern Fabric Club Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/20-modern-fabric-club-chair.html' title='Modern Fabric Club Chair'>Modern Fabric Club Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/4-cache-pendant-xl.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/42-home_default\/cache-pendant-xl.jpg' alt='Cache pendant xl'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/4-cache-pendant-xl.html' title='Cache pendant xl'>Cache pendant xl<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/5-wooden-starburst-wall-clock-non.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/48-home_default\/wooden-starburst-wall-clock-non.jpg' alt='Wooden Starburst Wall Clock-Non'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/5-wooden-starburst-wall-clock-non.html' title='Wooden Starburst Wall Clock-Non'>Wooden Starburst Wall Clock-Non<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>", "<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/18-folding-tables-chairs.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/124-home_default\/folding-tables-chairs.jpg' alt='Folding Tables & Chairs'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/18-folding-tables-chairs.html' title='Folding Tables & Chairs'>Folding Tables & Chairs<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>"];
    var isLogged = false;
    var popup = "\n<!-- begin module:rbthemefunction\/views\/templates\/rb-popup.tpl -->\n<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-popup.tpl --><div\n\tclass=\"rb-popup-container\"\n\tstyle=\"width:800px;\n\theight:450px;\tbackground-image: url('#\/demo\/rb_davici_demo\/modules\/rbthemefunction\/\/views\/img\/imgbg_1.jpg');\tbackground-position: center\"\n>\n\t<div class=\"rb-popup-flex\">\n\t\t<div id=\"rb_newsletter_popup\" class=\"rb-block\">\n\t\t\t<div class=\"rb-block-content\">\n\t\t\t\t<form action=\"\" method=\"POST\">\n\t\t\t\t\t<div class=\"rb-popup-text\">\n    \t\t\t\t\t<h2>Don't miss out!<\/h2>\n<p>Be the first to know about new arrivals, exclusive sales, seasonal inspiration &amp; more.<\/p>\n                    <\/div>\n\n                    \t                    <div class=\"rb-relative-input relative\">\n\t                    \t<span class=\"rb-your-email\">\n\t\t\t\t\t\t\t\t<input class=\"inputNew\" id=\"rb-newsletter-popup\" type=\"email\" name=\"email\" required=\"\" value=\"\" placeholder=\"your@email.com\" \/>\n\t\t\t\t\t\t\t<\/span>\n\t                    \t<button class=\"rb-send-email\">\n\t                    \t\t<i class=\"material-icons\">trending_flat<\/i>\n\t\t\t\t\t\t\t\tSubscribe\n\t                    \t<\/button>\n\t                    <\/div>\n\n\t                    <div class=\"rb-email-alert\">\n\t                    \t<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-ajax-loading.tpl --><div class=\"cssload-container rb-ajax-loading\">\n\t<div class=\"cssload-double-torus\"><\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-ajax-loading.tpl -->\t                    \t<p class=\"rb-email rb-email-success alert alert-success\"><\/p>\n\t                    \t<p class=\"rb-email rb-email-error alert alert-danger\"><\/p>\n\t                    <\/div>\n                    \t\t\t\t<\/form>\n\t\t\t<\/div>\n\t\t<\/div>\n\t<\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-popup.tpl -->\n<!-- end module:rbthemefunction\/views\/templates\/rb-popup.tpl -->\n";
    var prestashop = {
      "cart": {
        "products": [],
        "totals": {
          "total": {
            "type": "total",
            "label": "Total",
            "amount": 0,
            "value": "\u20ac0.00"
          },
          "total_including_tax": {
            "type": "total",
            "label": "Total (tax incl.)",
            "amount": 0,
            "value": "\u20ac0.00"
          },
          "total_excluding_tax": {
            "type": "total",
            "label": "Total (tax excl.)",
            "amount": 0,
            "value": "\u20ac0.00"
          }
        },
        "subtotals": {
          "products": {
            "type": "products",
            "label": "Subtotal",
            "amount": 0,
            "value": "\u20ac0.00"
          },
          "discounts": null,
          "shipping": {
            "type": "shipping",
            "label": "Shipping",
            "amount": 0,
            "value": ""
          },
          "tax": {
            "type": "tax",
            "label": "Taxes",
            "amount": 0,
            "value": "\u20ac0.00"
          }
        },
        "products_count": 0,
        "summary_string": "0 items",
        "vouchers": {
          "allowed": 0,
          "added": []
        },
        "discounts": [],
        "minimalPurchase": 0,
        "minimalPurchaseRequired": ""
      },
      "currency": {
        "id": 2,
        "name": "Euro",
        "iso_code": "EUR",
        "iso_code_num": "978",
        "sign": "\u20ac"
      },
      "customer": {
        "lastname": null,
        "firstname": null,
        "email": null,
        "birthday": null,
        "newsletter": null,
        "newsletter_date_add": null,
        "optin": null,
        "website": null,
        "company": null,
        "siret": null,
        "ape": null,
        "is_logged": false,
        "gender": {
          "type": null,
          "name": null
        },
        "addresses": []
      },
      "language": {
        "name": "English (English)",
        "iso_code": "en",
        "locale": "en-US",
        "language_code": "en-us",
        "is_rtl": "0",
        "date_format_lite": "m\/d\/Y",
        "date_format_full": "m\/d\/Y H:i:s",
        "id": 1
      },
      "page": {
        "title": "",
        "canonical": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-modern-swivel-accent-chair.html",
        "meta": {
          "title": "Modern Swivel Accent Chair",
          "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.",
          "keywords": null,
          "robots": "index"
        },
        "page_name": "product",
        "body_classes": {
          "lang-en": true,
          "lang-rtl": false,
          "country-US": true,
          "currency-EUR": true,
          "layout-full-width": true,
          "page-product": true,
          "tax-display-disabled": true,
          "product-id-3": true,
          "product-Modern Swivel Accent Chair": true,
          "product-id-category-2": true,
          "product-id-manufacturer-2": true,
          "product-id-supplier-0": true,
          "product-available-for-order": true
        },
        "admin_notifications": []
      },
      "shop": {
        "name": "Davici - Furniture Store",
        "logo": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/davici-furniture-store-logo-1614158703.jpg",
        "stores_icon": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/logo_stores.png",
        "favicon": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/favicon.ico"
      },
      "urls": {
        "base_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/",
        "current_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-13-modern-swivel-accent-chair.html",
        "shop_domain_url": "https:\/\/rubiktheme.com",
        "img_ps_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/",
        "img_cat_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/c\/",
        "img_lang_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/l\/",
        "img_prod_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/",
        "img_menu_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/m\/",
        "img_sup_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/su\/",
        "img_ship_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/s\/",
        "img_store_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/st\/",
        "img_col_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/co\/",
        "img_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/img\/",
        "css_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/css\/",
        "js_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/js\/",
        "pic_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/upload\/",
        "pages": {
          "address": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/address",
          "addresses": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/addresses",
          "authentication": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login",
          "cart": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/cart",
          "category": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=category",
          "cms": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=cms",
          "contact": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/contact-us",
          "discount": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/discount",
          "guest_tracking": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/guest-tracking",
          "history": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-history",
          "identity": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/identity",
          "index": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
          "my_account": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/my-account",
          "order_confirmation": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-confirmation",
          "order_detail": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=order-detail",
          "order_follow": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-follow",
          "order": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order",
          "order_return": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=order-return",
          "order_slip": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/credit-slip",
          "pagenotfound": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/page-not-found",
          "password": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/password-recovery",
          "pdf_invoice": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-invoice",
          "pdf_order_return": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-order-return",
          "pdf_order_slip": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-order-slip",
          "prices_drop": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/prices-drop",
          "product": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=product",
          "search": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/search",
          "sitemap": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/sitemap",
          "stores": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/stores",
          "supplier": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/supplier",
          "register": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login?create_account=1",
          "order_login": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order?login=1"
        },
        "alternative_langs": {
          "en-us": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-modern-swivel-accent-chair.html",
          "fr-fr": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/fr\/accueil\/3-modern-swivel-accent-chair.html",
          "de-de": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/de\/startseite\/3-modern-swivel-accent-chair.html",
          "it-it": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/it\/home\/3-modern-swivel-accent-chair.html",
          "es-es": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/es\/inicio\/3-modern-swivel-accent-chair.html",
          "pl-pl": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/pl\/strona-glowna\/3-modern-swivel-accent-chair.html"
        },
        "theme_assets": "\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/",
        "actions": {
          "logout": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/?mylogout="
        },
        "no_picture_image": {
          "bySize": {
            "cart_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-cart_default.jpg",
              "width": 200,
              "height": 200
            },
            "small_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-small_default.jpg",
              "width": 200,
              "height": 200
            },
            "medium_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-medium_default.jpg",
              "width": 330,
              "height": 330
            },
            "home_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-home_default.jpg",
              "width": 700,
              "height": 700
            },
            "large_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-large_default.jpg",
              "width": 800,
              "height": 800
            },
            "thickbox_default": {
              "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-thickbox_default.jpg",
              "width": 1100,
              "height": 1422
            }
          },
          "small": {
            "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-cart_default.jpg",
            "width": 200,
            "height": 200
          },
          "medium": {
            "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-home_default.jpg",
            "width": 700,
            "height": 700
          },
          "large": {
            "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-thickbox_default.jpg",
            "width": 1100,
            "height": 1422
          },
          "legend": ""
        }
      },
      "configuration": {
        "display_taxes_label": false,
        "display_prices_tax_incl": false,
        "is_catalog": false,
        "show_prices": true,
        "opt_in": {
          "partner": true
        },
        "quantity_discount": {
          "type": "discount",
          "label": "Unit discount"
        },
        "voucher_enabled": 0,
        "return_enabled": 0
      },
      "field_required": [],
      "breadcrumb": {
        "links": [{
          "title": "Home",
          "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/"
        }, {
          "title": "Modern Swivel Accent Chair",
          "url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-13-modern-swivel-accent-chair.html#\/dimension-40x60cm"
        }],
        "count": 2
      },
      "link": {
        "protocol_link": "https:\/\/",
        "protocol_content": "https:\/\/"
      },
      "time": 1650933497,
      "static_token": "bf0ba928fbfcc103ff31ff1e6c6b511b",
      "token": "77e6199ecda09e345a34ac9ffee8bfac",
      "debug": true
    };
    var psemailsubscription_subscription = "3-13-modern-swivel-accent-chair.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/module\/ps_emailsubscription\/subscription";
    var psr_icon_color = "#F19D76";
    var rbFrontendConfig = {
      "isEditMode": "",
      "stretchedSectionContainer": "",
      "is_rtl": "",
      "rb_day": "Days"
    };
    var rb_days = "Days";
    var rb_facebook = {
      "general_appid": "1671479023110588",
      "general_pageid": "2005509456220113",
      "chat_state": "0",
      "chat_color": "",
      "chat_delay": "12",
      "login_state": "0",
      "login_redirect": "no_redirect",
      "comments_state": "1",
      "comments_tab": "1",
      "comments_width": "",
      "comments_number": "",
      "comments_admins": "",
      "product_page_url": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-13-modern-swivel-accent-chair.html",
      "login_destination": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/my-account",
      "phrases": {
        "login": "Log in"
      }
    };
    var rb_height = "450";
    var rb_hours = "Hours";
    var rb_minutes = "Minutes";
    var rb_modal = "\n<!-- begin module:rbthemefunction\/views\/templates\/rb-modal.tpl -->\n<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-modal.tpl --><div class=\"modal-content\">\n\t<div class=\"modal-header\">\n\t\t<h5 class=\"modal-title text-xs-center\">\n\t\t\tDelete selected item ?\n\t\t<\/h5>\n\t<\/div>\n\n\t<div class=\"modal-footer\">\n\t\t<button type=\"button\" class=\"rb-modal-no rb-modal-accept btn btn-primary\" data-dismiss=\"modal\">\n\t\t\tCancel\n\t\t<\/button>\n\n\t\t<button type=\"button\" class=\"rb-modal-yes rb-modal-accept btn btn-primary\">\n\t\t\tOK\n\t\t<\/button>\n\t<\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-modal.tpl -->\n<!-- end module:rbthemefunction\/views\/templates\/rb-modal.tpl -->\n";
    var rb_seconds = "Seconds";
    var rb_slick = {
      "active": "1",
      "slideshow": "4",
      "slidesToScroll": "1",
      "autoplay": "0",
      "autospeed": ""
    };
    var rb_text = "You must be logged. <a href=\"3-13-modern-swivel-accent-chair.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login\">Sign in<\/a>";
    var rb_view = "1";
    var rb_width = "800";
    var rb_zoom = {
      "active": "1",
      "type": "2",
      "scroll": "1"
    };
    var text1 = "No Product";
    var text2 = "You Can Not Delete Default Wishlist";
    var token = "bf0ba928fbfcc103ff31ff1e6c6b511b";
    var url_ajax = "3-13-modern-swivel-accent-chair.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/module\/rbthemefunction\/ajax";
    var url_compare = "3-13-modern-swivel-accent-chair.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/compare";
    var url_wishlist = "3-13-modern-swivel-accent-chair.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wishlist";
  </script>

  <!-- end modules/rbthememenu/views/templates/hook/header.tpl -->
  <meta name="generator" content="Powered by Rubiktheme1.0.0 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Module for PrestaShop." />
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://rubiktheme.com/demo/rb_davici_demo/36-thickbox_default/modern-swivel-accent-chair.jpg">
  <meta property="product:pretax_price:amount" content="25.1">
  <meta property="product:pretax_price:currency" content="EUR">
  <meta property="product:price:amount" content="25.1">
  <meta property="product:price:currency" content="EUR">
  <meta property="product:weight:value" content="0.300000">
  <meta property="product:weight:units" content="kg">

  <style>
    .item-product {
      display: inline-block;
      height: 35px;
      margin-right: 5px;
      padding-top: 5px;
      width: 35px;
    }
  </style>
</head>

<body id="product" class="lang-en country-us currency-eur layout-full-width page-product tax-display-disabled product-id-3 product-modern-swivel-accent-chair product-id-category-2 product-id-manufacturer-2 product-id-supplier-0 product-available-for-order home-1">
  <!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-loading.tpl -->
  <div class="rb-loading" style="background: #f1f1f1">
    <div id="loadFacebookG">
      <div id="blockG_1" class="facebook_blockG"></div>
      <div id="blockG_2" class="facebook_blockG"></div>
      <div id="blockG_3" class="facebook_blockG"></div>
    </div>
  </div>
  <!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-loading.tpl -->

  <main>
    <?php include_once('./common/nav-bar.php'); ?>

    <aside id="notifications">
      <div class="container"></div>
    </aside>

    <section id="wrapper">
      <nav data-depth="2" class="breadcrumb hidden-sm-down">
        <div class="container">
          <ol>
            <li>
              <a href="../index.html"><span>Home</span></a>
            </li>
            <li>
              <span><?= $item['product_title'] ?></span>
            </li>
          </ol>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <div id="content-wrapper" class="col-lg-12 col-xs-12 js-content-wrapper">
            <section id="main">
              <meta content="3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm">
              <div class="row product-container js-product-container">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                  <section class="page-content" id="content">
                    <ul class="product-flags">
                      <li class="product-flag new">New product</li>
                    </ul>
                    <div class="images-container js-images-container">
                      <div class="product-cover product-img-slick">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="./product_images/<?= $item['product_image'] ?>" data-src="../../36-large_default/modern-swivel-accent-chair.jpg" data-zoom="./product_images/<?= $item['product_image'] ?>" src="../../36-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../36-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="../../37-medium_default/modern-swivel-accent-chair.jpg" data-src="../../37-large_default/modern-swivel-accent-chair.jpg" data-zoom="../../37-medium_default/modern-swivel-accent-chair.jpg" src="../../37-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../37-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="../../38-medium_default/modern-swivel-accent-chair.jpg" data-src="../../38-large_default/modern-swivel-accent-chair.jpg" data-zoom="../../38-medium_default/modern-swivel-accent-chair.jpg" src="../../38-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../38-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="../../39-medium_default/modern-swivel-accent-chair.jpg" data-src="../../39-large_default/modern-swivel-accent-chair.jpg" data-zoom="../../39-medium_default/modern-swivel-accent-chair.jpg" src="../../39-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../39-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="../../40-medium_default/modern-swivel-accent-chair.jpg" data-src="../../40-large_default/modern-swivel-accent-chair.jpg" data-zoom="../../40-medium_default/modern-swivel-accent-chair.jpg" src="../../40-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../40-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                        <img class="images-zoom js-qv-product-cover" data-zoom-image="../../41-medium_default/modern-swivel-accent-chair.jpg" data-src="../../41-large_default/modern-swivel-accent-chair.jpg" data-zoom="../../41-medium_default/modern-swivel-accent-chair.jpg" src="../../41-large_default/modern-swivel-accent-chair.jpg" style="width:100%" data-rb-image="../../41-large_default/modern-swivel-accent-chair.jpg" loading="lazy">
                      </div>
                      <div id="rb_gallery" class="product-img-slick">
                        <a class="thumb-container" href="javascript:void(0)" data-image="./product_images/<?= $item['product_image'] ?>" data-zoom-image="../../36-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_1" src="../../36-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                        <a class="thumb-container" href="javascript:void(0)" data-image="../../37-medium_default/modern-swivel-accent-chair.jpg" data-zoom-image="../../37-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_2" src="../../37-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                        <a class="thumb-container" href="javascript:void(0)" data-image="../../38-medium_default/modern-swivel-accent-chair.jpg" data-zoom-image="../../38-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_3" src="../../38-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                        <a class="thumb-container" href="javascript:void(0)" data-image="../../39-medium_default/modern-swivel-accent-chair.jpg" data-zoom-image="../../39-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_4" src="../../39-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                        <a class="thumb-container" href="javascript:void(0)" data-image="../../40-medium_default/modern-swivel-accent-chair.jpg" data-zoom-image="../../40-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_5" src="../../40-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                        <a class="thumb-container" href="javascript:void(0)" data-image="../../41-medium_default/modern-swivel-accent-chair.jpg" data-zoom-image="../../41-large_default/modern-swivel-accent-chair.jpg">
                          <img class="img img-thumb" id="rb_img_6" src="../../41-small_default/modern-swivel-accent-chair.jpg" />
                        </a>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="detail-padding-left col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                  <!-- begin modules/rbthemefunction/views/templates/hook/rb-next-prev.tpl -->
                  <div class="product-button-next-prev">
                    <div class="product-button-prev">
                      <a class="btn btn-default button button-prev" href="../bed-bath/2-armen-living-summer-chair.html" title="Armen Living Summer Chair">
                        <i class="fa fa-angle-left"></i>
                      </a>

                      <div class="button-hover">
                        <img class="img-fluid" src="../../30-home_default/armen-living-summer-chair.jpg" title="Armen Living Summer Chair">
                        <h5>Armen Living Summer Chair</h5>
                      </div>
                    </div>

                    <div class="product-button-next">
                      <a class="btn btn-default button button-prev" href="4-cache-pendant-xl.html" title="Cache pendant xl">
                        <i class="fa fa-angle-right"></i>
                      </a>

                      <div class="button-hover">
                        <img class="img-fluid" src="../../42-home_default/cache-pendant-xl.jpg" title="Cache pendant xl">
                        <h5>Cache pendant xl</h5>
                      </div>
                    </div>
                  </div>
                  <!-- end modules/rbthemefunction/views/templates/hook/rb-next-prev.tpl -->

                  <h1 class="h1 product-detail-name"><?= $item['product_title'] ?></h1>
                  <div class="product-prices js-product-prices">
                    <div class="product-price h5 ">
                      <div class="current-price">
                        <span class='current-price-value' content="25.1">
                          <?= $item['product_price'] ?>
                        </span>
                      </div>
                    </div>
                    <div class="tax-shipping-delivery-label">
                    </div>
                    <div class="product-attributes-label">
                      <div class="product-manufacturer">
                        <label class="label">Brand:</label>
                        <span>
                          <a href="../brand/2-graphic-corner.html"><?= $item['brand_title'] ?></a>
                        </span>
                      </div>
                      <div class="product-quantities">
                        <label class="label">In stock:</label>
                        <span data-stock="<?= $item['product_qty'] ?>" data-allow-oosp="0">
                          <?= $item['product_qty'] ?>
                          Item<?= $item['product_qty'] ? 's' : '' ?>
                        </span>
                      </div>
                    </div>

                    <div id="product-availability"></div>
                  </div>

                  <div class="product-information">
                    <div id="product-description-short-3" class="product-description">
                      <p><?= $item['product_desc'] ?></p>
                    </div>
                    <div class="product-actions js-product-actions">
                      <!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemefunction/views/templates/rb-ajax-loading.tpl -->
                      <div class="cssload-container rb-ajax-loading">
                        <div class="cssload-double-torus"></div>
                      </div>
                      <!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemefunction/views/templates/rb-ajax-loading.tpl -->
                    </div>

                    <!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl -->
                    <div class="block-reassurance">
                      <ul>
                        <li>
                          <div class="block-reassurance-item">
                            <span class="item-product">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" class="svg replaced-svg" data-img-url="/demo/prestashop_demo_module/modules/blockreassurance/views/img/reassurance/pack2/security.svg" style="width:35px;height: 35px;">
                                <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
                                <title>pack2_security</title>
                                <desc>Created with Sketch.</desc>
                                <g id="pack2_security" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <path d="M26.115688,27.7186584 L26.115688,16.8806233 L26.1175074,16.8101129 C26.422874,10.8969727 29.5805327,7.70698547 35.2102124,7.70698547 C40.8497547,7.70698547 43.9637933,10.9118721 44.162563,16.8806233 L44.162563,27.7186584 L48.2378661,27.7186584 L48.2385412,17.047783 C47.9356398,8.45240836 43.7592608,4.375 35.2734375,4.375 C26.7897161,4.375 22.5192031,8.45604204 22.0405579,17.0372705 L22.0405579,27.7186584 L26.115688,27.7186584 Z M28.850063,27.7186584 L41.4283638,27.7186584 L41.4289513,16.9263024 C41.2790015,12.4407741 39.3362648,10.4413605 35.2102124,10.4413605 C31.0848959,10.4413605 29.0906312,12.4453631 28.850063,16.916623 L28.850063,27.7186584 L28.850063,27.7186584 Z M19.3061829,27.7186584 L19.3061829,16.9996332 L19.3082042,16.9253153 C19.8552849,6.87583419 25.3180769,1.640625 35.2734375,1.640625 C45.2387751,1.640625 50.6166915,6.89109709 50.9720681,16.9996332 L50.9720681,27.7186584 L56.875,27.7186584 C58.3851536,27.7186584 59.609375,28.9428798 59.609375,30.4530334 L59.609375,65.9999084 C59.609375,67.5100621 58.3851536,68.7342834 56.875,68.7342834 L13.125,68.7342834 C11.6148464,68.7342834 10.390625,67.5100621 10.390625,65.9999084 L10.390625,30.4530334 C10.390625,28.9428798 11.6148464,27.7186584 13.125,27.7186584 L19.3061829,27.7186584 Z M13.671875,30.9999084 L13.671875,65.4530334 L56.328125,65.4530334 L56.328125,30.9999084 L13.671875,30.9999084 Z M35,58.8905334 C29.2614163,58.8905334 24.609375,54.2384922 24.609375,48.4999084 C24.609375,42.7613247 29.2614163,38.1092834 35,38.1092834 C40.7385837,38.1092834 45.390625,42.7613247 45.390625,48.4999084 C45.390625,54.2384922 40.7385837,58.8905334 35,58.8905334 Z M35,56.1799356 C39.2415619,56.1799356 42.6800272,52.7414703 42.6800272,48.4999084 C42.6800272,44.2583466 39.2415619,40.8198813 35,40.8198813 C30.7584381,40.8198813 27.3199728,44.2583466 27.3199728,48.4999084 C27.3199728,52.7414703 30.7584381,56.1799356 35,56.1799356 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
                                  <path d="M29.8994316,54.1473519 C28.6522442,52.7925101 27.890625,50.9837316 27.890625,48.9970675 C27.890625,44.7960948 31.2961863,41.3905334 35.4971591,41.3905334 C37.4838232,41.3905334 39.2926016,42.1521526 40.6474434,43.39934 C41.8946308,44.7541818 42.65625,46.5629603 42.65625,48.5496244 C42.65625,52.7505971 39.2506887,56.1561584 35.0497159,56.1561584 C33.0630518,56.1561584 31.2542734,55.3945393 29.8994316,54.1473519 L29.8994316,54.1473519 Z M30.4703395,49.6235125 L31.1836295,50.3767977 C31.7480625,50.9722223 32.3390935,51.5829784 32.924255,52.174315 C33.1225287,52.3917596 33.4185689,52.5136928 33.7328431,52.5073566 C33.7768372,52.4980054 33.8254322,52.5086612 33.8704262,52.4990975 C34.071098,52.4540434 34.2518209,52.348396 34.3832214,52.1993265 C36.2117392,50.0641368 38.0389238,47.9292303 39.8421767,45.7784257 C40.0159592,45.5928682 40.1060492,45.3546002 40.0930399,45.1149476 C40.0592462,44.899232 39.9357683,44.7069238 39.7483167,44.5780653 C39.5552693,44.4432647 39.3074798,44.3895268 39.0630582,44.429454 C38.8186367,44.4693811 38.5990846,44.599461 38.4558899,44.7891881 C38.2520531,45.0232879 38.029905,45.2794034 37.8258095,45.5122863 C37.7326265,45.616351 37.6439697,45.7417105 37.5284663,45.8489298 L33.6673353,50.3521923 C33.6104088,50.3007014 33.5792745,50.2656672 33.522746,50.2144096 C33.3170919,50.0056666 33.1377024,49.8123258 32.931715,49.6036536 C32.5204067,49.1861674 32.1044328,48.74837 31.6707942,48.3356304 C31.5230814,48.1677015 31.3034254,48.0668983 31.0649762,48.0576121 C30.8265269,48.048326 30.5910095,48.1314029 30.4154119,48.2867409 C30.0314365,48.5950665 29.9608984,49.1153155 30.2538349,49.478441 C30.3358289,49.5134355 30.4092923,49.5626605 30.4703395,49.6235125 L30.4703395,49.6235125 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                              </svg>
                            </span>
                            <div>
                              <span style="color:#000000;">Security policy</span>
                              <p style="color:#000000;">(edit with the Customer Reassurance module)</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block-reassurance-item">
                            <span class="item-product">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" class="svg replaced-svg" data-img-url="/demo/prestashop_demo_module/modules/blockreassurance/views/img/reassurance/pack2/carrier.svg" style="width:35px;height: 35px;">
                                <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
                                <title>pack2_carrier</title>
                                <desc>Created with Sketch.</desc>
                                <g id="pack2_carrier" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <path d="M28.984375,45.3503662 L33.3155515,45.3503662 C33.8624265,44.2566162 34.7426471,43.2190318 36.5119485,43.2190318 C38.28125,43.2190318 39.3581772,44.2566162 39.7083456,45.3503662 L53.046875,45.3503662 L53.046875,21.8347412 L47.4494485,21.8347412 L47.4494485,33.8008906 C47.4494485,34.5012754 46.8733443,35.0690494 46.1626838,35.0690494 C45.8197983,35.0690494 45.4910937,34.9341768 45.2495163,34.6943626 L43.5138893,32.9714037 L41.6590074,31.1715233 L39.8744401,32.9584673 L38.0619353,34.7320645 C37.5576198,35.2255284 36.7428907,35.2226429 36.2421869,34.7256195 C36.0028693,34.488061 35.8685662,34.1668819 35.8685662,33.8321242 L35.8685662,21.8347412 L28.984375,21.8347412 L28.984375,45.3503662 Z M55.8455882,27.3472412 L64.0340909,27.3472412 L70,38.362298 L70,48.1662753 L65.2193963,48.1662753 C64.7238954,49.7045521 63.2637171,50.8191162 61.5395221,50.8191162 C59.815327,50.8191162 58.3551487,49.7045521 57.8596478,48.1662753 L40.2239919,48.1662753 C39.728491,49.7045521 38.2683127,50.8191162 36.5441176,50.8191162 C34.8199226,50.8191162 33.3597443,49.7045521 32.8642434,48.1662753 L26.25,48.1662753 L26.25,22.2722412 C26.25,20.520463 27.6902605,19.1003662 29.4669118,19.1003662 L52.6286765,19.1003662 C54.4053278,19.1003662 55.8455882,20.520463 55.8455882,22.2722412 L55.8455882,27.3472412 Z M38.28125,21.8347412 L38.28125,30.5847412 L41.6184924,27.4653396 L44.84375,30.5238742 L44.84375,21.8347412 L38.28125,21.8347412 Z M58.2495787,45.3503662 C58.5911942,44.2566162 60.1242065,43.110328 61.5209675,43.110328 C62.9177284,43.110328 64.3857193,44.2566162 64.7923563,45.3503662 L67.265625,45.3503662 L67.265625,39.2426972 L62.3681798,30.0378662 L55.78125,30.0378662 L55.78125,45.3503662 L57.8346968,45.3503662 L58.2495787,45.3503662 Z M36.640625,48.0847412 C37.2446864,48.0847412 37.734375,47.5950527 37.734375,46.9909912 C37.734375,46.3869298 37.2446864,45.8972412 36.640625,45.8972412 C36.0365636,45.8972412 35.546875,46.3869298 35.546875,46.9909912 C35.546875,47.5950527 36.0365636,48.0847412 36.640625,48.0847412 Z M61.5234375,48.0847412 C62.1274989,48.0847412 62.6171875,47.5950527 62.6171875,46.9909912 C62.6171875,46.3869298 62.1274989,45.8972412 61.5234375,45.8972412 C60.9193761,45.8972412 60.4296875,46.3869298 60.4296875,46.9909912 C60.4296875,47.5950527 60.9193761,48.0847412 61.5234375,48.0847412 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
                                  <path d="M20.3910556,36.5241223 L1.25412602,36.5241223 C0.911800873,36.5201533 0.585605642,36.3780215 0.34961853,36.1300047 C0.113631419,35.8819879 -0.0121199988,35.5491345 0.000922140458,35.2070349 C-0.0135552202,34.4984918 0.545738573,33.9106874 1.25412602,33.8899475 C2.1858736,33.8580058 19.4912498,33.8580058 20.3910556,33.8899475 C20.7332622,33.8940983 21.0592811,34.0363097 21.2951207,34.2843061 C21.5309604,34.5323024 21.6566198,34.8650517 21.6435799,35.2070349 C21.6566198,35.5490181 21.5309604,35.8817674 21.2951207,36.1297637 C21.0592811,36.3777601 20.7332622,36.5199715 20.3910556,36.5241223 Z M20.3910556,31.0553723 L6.72287602,31.0553723 C6.38055087,31.0514033 6.05435564,30.9092715 5.81836853,30.6612547 C5.58238142,30.4132379 5.45663,30.0803845 5.46967214,29.7382849 C5.45519478,29.0297418 6.01448857,28.4419374 6.72287602,28.4211975 C7.6546236,28.3892558 19.4912498,28.3892558 20.3910556,28.4211975 C20.7332622,28.4253483 21.0592811,28.5675597 21.2951207,28.8155561 C21.5309604,29.0635524 21.6566198,29.3963017 21.6435799,29.7382849 C21.6566198,30.0802681 21.5309604,30.4130174 21.2951207,30.6610137 C21.0592811,30.9090101 20.7332622,31.0512215 20.3910556,31.0553723 Z M20.3910556,41.9928723 L12.191626,41.9928723 C11.8493009,41.9889033 11.5231056,41.8467715 11.2871185,41.5987547 C11.0511314,41.3507379 10.92538,41.0178845 10.9384221,40.6757849 C10.9239448,39.9672418 11.4832386,39.3794374 12.191626,39.3586975 C13.1233736,39.3267558 19.4912498,39.3267558 20.3910556,39.3586975 C20.7332622,39.3628483 21.0592811,39.5050597 21.2951207,39.7530561 C21.5309604,40.0010524 21.6566198,40.3338017 21.6435799,40.6757849 C21.6566198,41.0177681 21.5309604,41.3505174 21.2951207,41.5985137 C21.0592811,41.8465101 20.7332622,41.9887215 20.3910556,41.9928723 Z M38.828125,22.3816162 L44.84375,22.3816162 L44.84375,30.5238742 L41.6184924,27.4653396 L38.828125,30.5847412 L38.828125,22.3816162 Z M58.2495787,45.3503662 L56.328125,45.3503662 L56.328125,30.5847412 L62.3681798,30.5847412 L67.265625,39.2426972 L67.265625,45.3503662 L64.7923563,45.3503662 C64.3857193,44.2566162 62.9177284,43.110328 61.5209675,43.110328 C60.1242065,43.110328 58.5911942,44.2566162 58.2495787,45.3503662 Z M55.611389,9.43773704 L56.4712859,10.1136559 L55.1194483,11.8334498 L54.2595513,11.157531 C54.1211905,11.048773 53.9819698,10.9412727 53.8419023,10.8350369 L52.9704544,10.1740773 L54.2923737,8.43118151 L55.1638215,9.09214114 C55.3139264,9.20598992 55.4631203,9.32119103 55.611389,9.43773704 Z M50.9938867,6.36784966 L51.9485039,6.9016991 L50.880805,8.81093334 L49.9261879,8.2770839 C49.7728136,8.19131258 49.6187325,8.1068933 49.4639606,8.02383229 L48.5002245,7.50662666 L49.5346357,5.57915433 L50.4983719,6.09635996 C50.6642894,6.18540245 50.8294668,6.27590128 50.9938867,6.36784966 Z M46.3496234,4.23012061 L47.3759416,4.60822125 L46.6197403,6.66085757 L45.5934221,6.28275692 C45.4284472,6.22197935 45.2629565,6.16263123 45.0969684,6.10471759 L44.0642704,5.7444067 L44.7848922,3.67901073 L45.8175902,4.03932162 C45.9954718,4.10138497 46.1728229,4.16498641 46.3496234,4.23012061 Z M41.4701209,2.85057013 L42.5424457,3.06599625 L42.1115935,5.21064601 L41.0392686,4.99521989 C40.8666721,4.96054589 40.6937772,4.92735534 40.5206044,4.89565138 L39.4447358,4.6986846 L39.8386694,2.54694749 L40.9145379,2.74391427 C41.1000354,2.77787458 41.2852369,2.81342763 41.4701209,2.85057013 Z M36.4008037,2.23566666 L37.4935313,2.28294824 L37.3989681,4.46840335 L36.3062406,4.42112178 C36.1305771,4.41352094 35.9548511,4.40742325 35.7790833,4.40282944 L34.6857067,4.37425327 L34.742859,2.1875 L35.8362356,2.21607617 C36.0244771,2.22099599 36.212674,2.22752641 36.4008037,2.23566666 Z M31.2894206,2.41120489 L32.3763218,2.28899683 L32.6207379,4.46279926 L31.5338367,4.58500732 C31.3588818,4.60467875 31.1841015,4.62585256 31.0095164,4.64852703 L29.9248759,4.78939621 L29.6431376,2.62011528 L30.7277781,2.47924611 C30.9147924,2.45495735 31.1020139,2.43227636 31.2894206,2.41120489 Z M26.3339629,3.35806707 L27.3893052,3.07076605 L27.9639072,5.18145048 L26.908565,5.4687515 C26.7386618,5.51500507 26.5691559,5.56272909 26.4000661,5.61191984 L25.3498541,5.91744218 L24.7388094,3.81701826 L25.7890214,3.51149592 C25.9702318,3.45877912 26.1518857,3.40763485 26.3339629,3.35806707 Z M21.5339165,5.07731169 L22.5316199,4.62911879 L23.4280058,6.6245257 L22.4303023,7.0727186 C22.2698967,7.14477676 22.1100861,7.21824146 21.9508871,7.29310756 L20.9611194,7.7585631 L20.0302083,5.7790276 L21.019976,5.31357206 C21.1906402,5.23331428 21.3619596,5.15455896 21.5339165,5.07731169 Z M17.0552505,7.52778385 L17.9707427,6.92931658 L19.1676772,8.760301 L18.252185,9.35876828 C18.1049352,9.45502706 17.958443,9.55260817 17.8127218,9.65150585 L16.9077148,10.2657138 L15.679299,8.45569973 L16.584306,7.84149182 C16.7404621,7.73551216 16.8974486,7.63094069 17.0552505,7.52778385 Z M13.0087298,10.647391 L13.8208282,9.91473475 L15.2861407,11.5389317 L14.4740422,12.2715879 C14.3469937,12.3862081 14.2207713,12.5019787 14.0954125,12.6188685 L14.0843002,12.6292351 L13.2847144,13.375527 L11.7921307,11.7763552 L12.5917165,11.0300634 L12.6035753,11.0190005 C12.7377276,10.8939111 12.8727827,10.7700393 13.0087298,10.647391 Z M9.50225073,14.3349873 L10.1926162,13.486645 L11.8893007,14.8673759 L11.1989353,15.7157182 C11.0879734,15.8520715 10.9782548,15.9892965 10.869786,16.1273804 L10.1941426,16.9874938 L8.47391578,15.6362071 L9.14955916,14.7760936 C9.26578939,14.6281292 9.38335573,14.4810891 9.50225073,14.3349873 Z M6.60450988,18.5249466 L7.15445925,17.579513 L9.04532651,18.6794117 L8.49537714,19.6248454 C8.40688807,19.7769695 8.31974541,19.9298209 8.23395551,20.083384 L7.70051823,21.0382315 L5.79082325,19.9713569 L6.32426053,19.0165094 C6.41622904,18.8518867 6.50964779,18.6880267 6.60450988,18.5249466 Z M4.81956521,47.9608949 L4.38827502,46.9557691 L6.39852658,46.0931887 L6.82981677,47.0983145 C6.89917552,47.2599557 6.96994927,47.4210213 7.042133,47.5814946 L7.49081812,48.5789768 L5.49585374,49.4763471 L5.04716861,48.4788649 C4.96978721,48.3068365 4.8939176,48.1341738 4.81956521,47.9608949 Z M7.19333287,52.4789508 L6.61039091,51.5534954 L8.46130175,50.3876115 L9.04424371,51.3130669 C9.13796289,51.4618517 9.2330135,51.609895 9.32938983,51.757183 L9.92826004,52.6724117 L8.09780269,53.8701521 L7.49893248,52.9549234 C7.39564525,52.7970738 7.29377659,52.6384112 7.19333287,52.4789508 Z M10.2429764,56.5749757 L9.52391747,55.7508136 L11.1722418,54.3126956 L11.8913007,55.1368578 C12.0069686,55.2694325 12.1238649,55.401144 12.2419841,55.5319812 L12.9749172,56.3438298 L11.3512198,57.8096959 L10.6182868,56.9978472 C10.49188,56.8578301 10.3667743,56.7168689 10.2429764,56.5749757 Z M13.8750375,60.1455381 L13.0383684,59.441071 L14.4473026,57.7677328 L15.2839717,58.4721999 C15.4189585,58.5858574 15.5548364,58.6982743 15.6915931,58.8094437 L16.5403018,59.4993587 L15.1604718,61.196776 L14.3117631,60.506861 C14.1652374,60.3877503 14.0196576,60.2673068 13.8750375,60.1455381 Z M18.0126907,63.1115781 L17.0767304,62.5456563 L18.208574,60.6737358 L19.1445343,61.2396576 C19.295319,61.3308286 19.446851,61.4206598 19.5991148,61.5091447 L20.5447787,62.058698 L19.4456722,63.9500259 L18.5000083,63.4004726 C18.3367788,63.3056151 18.174334,63.2093146 18.0126907,63.1115781 Z M22.5766017,65.4032767 L21.5637215,64.9905263 L22.3892223,62.9647661 L23.4021024,63.3775164 C23.565096,63.4439366 23.7286511,63.5089386 23.8927496,63.5725171 L24.9126278,63.9676596 L24.1223427,66.0074159 L23.1024645,65.6122734 C22.9265902,65.5441324 22.7512961,65.474465 22.5766017,65.4032767 Z M27.4125106,66.9486652 L26.3480215,66.6973642 L26.8506235,64.5683862 L27.9151125,64.8196872 C28.0863453,64.8601112 28.2579254,64.8990623 28.4298326,64.9365367 L29.4984858,65.1694947 L29.0325698,67.3068011 L27.9639166,67.0738431 C27.779759,67.0336982 27.5959499,66.9919709 27.4125106,66.9486652 Z M32.4557025,67.7328074 L31.3651746,67.6489152 L31.532959,65.4678593 L32.6234869,65.5517516 C32.7988849,65.5652446 32.9743971,65.5772356 33.1500026,65.5877235 L34.2418072,65.6529303 L34.1113935,67.8365394 L33.019589,67.7713326 C32.8315199,67.7601003 32.6435503,67.7472582 32.4557025,67.7328074 Z M37.5683396,67.7289673 L36.4779419,67.8145354 L36.3068056,65.63374 L37.3972033,65.5481718 C37.5727549,65.5343956 37.7481827,65.5191129 37.9234658,65.502325 L39.0122336,65.3980476 L39.2207885,67.5755832 L38.1320207,67.6798606 C37.9442729,67.6978423 37.7563718,67.7142116 37.5683396,67.7289673 Z M42.5579871,66.9486574 L41.4935642,67.2002384 L40.9904021,65.0713927 L42.0548249,64.8198117 C42.2261526,64.7793176 42.3971301,64.7373443 42.5677382,64.6938951 L43.627656,64.4239632 L44.1675198,66.5437989 L43.107602,66.8137308 C42.9247835,66.8602897 42.7415716,66.9052663 42.5579871,66.9486574 Z M47.4151556,65.3918844 L46.4028678,65.8060854 L45.5744658,63.7815098 L46.5867536,63.3673088 C46.7496513,63.3006554 46.9119931,63.2325777 47.0737619,63.1630807 L48.0786994,62.7313521 L48.9421566,64.7412272 L47.937219,65.1729558 C47.763805,65.2474557 47.5897778,65.3204337 47.4151556,65.3918844 Z M51.9718092,63.0955693 L51.0366129,63.6627526 L49.9022463,61.7923599 L50.8374426,61.2251766 C50.9877997,61.1339872 51.1374311,61.0414561 51.2863227,60.9475891 L52.2115523,60.3642888 L53.378153,62.214748 L52.4529234,62.7980483 C52.2933427,62.8986541 52.1329662,62.9978299 51.9718092,63.0955693 Z M56.1192497,60.1146289 L55.2832563,60.8198976 L53.8727188,59.1479106 L54.7087123,58.4426419 C54.8431876,58.3291946 54.9768104,58.2145067 55.1095693,58.0985838 L55.9334416,57.3791927 L57.3722238,59.0269373 L56.5483515,59.7463284 C56.406246,59.8704125 56.263208,59.9931815 56.1192497,60.1146289 Z M59.7503732,56.5416173 L59.0319866,57.3663656 L57.3824901,55.9295923 L58.1008768,55.104844 C58.2165866,54.9720026 58.3310721,54.8382605 58.4443266,54.7036298 L59.1484184,53.8666448 L60.8223884,55.2748283 L60.1182966,56.1118133 C59.9969675,56.2560426 59.8743239,56.399315 59.7503732,56.5416173 Z M65.5606353,23.0975995 L65.9575648,24.1167835 L63.9191968,24.9106425 L63.5222673,23.8914585 C63.4584521,23.7276022 63.3932082,23.5642801 63.3265401,23.4015093 L62.9119842,22.3893668 L64.9362692,21.5602549 L65.3508251,22.5723975 C65.4222906,22.7468812 65.492229,22.9219548 65.5606353,23.0975995 Z M63.2734902,18.1896983 L63.8247778,19.1343523 L61.93547,20.2369275 L61.3841824,19.2922736 C61.2955151,19.1403386 61.2054953,18.9891133 61.1141288,18.8386123 L60.5465375,17.9036635 L62.416435,16.7684809 L62.9840263,17.7034297 C63.0819585,17.8647458 63.1784486,18.0268406 63.2734902,18.1896983 Z M59.7506688,13.364156 L60.4852922,14.1744754 L58.8646534,15.6437222 L58.13003,14.8334028 C58.0118606,14.7030572 57.8924844,14.5736173 57.7719077,14.4450942 L57.023562,13.6474304 L58.6188897,12.1507388 L59.3672355,12.9484027 C59.4963278,13.0860025 59.6241413,13.2245911 59.7506688,13.364156 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                              </svg>
                            </span>
                            <div>
                              <span style="color:#000000;">Delivery policy</span>
                              <p style="color:#000000;">(edit with the Customer Reassurance module)</p>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="block-reassurance-item">
                            <span class="item-product">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 70 70" version="1.1" class="svg replaced-svg" data-img-url="/demo/prestashop_demo_module/modules/blockreassurance/views/img/reassurance/pack2/parcel.svg" style="width:35px;height: 35px;">
                                <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
                                <title>pack2_parcel</title>
                                <desc>Created with Sketch.</desc>
                                <g id="pack2_parcel" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <path d="M19.6875,35.6408493 C23.8323243,34.5517156 28.5551351,34.9084354 31.4267056,36.516514 C32.7151791,37.2380588 34.1821369,37.5270916 36.6900435,37.6835808 C36.9319823,37.6986773 37.1133791,37.7090555 37.5709959,37.7344997 C38.830563,37.8045336 39.4051314,37.8451772 40.1030671,37.9267598 C42.2407406,38.1766351 43.6532133,39.4015314 44.2362553,41.431302 L52.3894279,39.6901459 C54.9252702,39.1580916 56.8486068,39.6189939 57.9519146,41.198553 C59.0194043,42.7268329 59.0194043,44.438328 57.9878121,46.1216837 L57.7885153,46.4468969 L57.4302075,46.5776573 C49.5462217,49.4548285 44.1432676,51.3538628 41.2084581,52.2787524 C38.0872708,53.2623781 35.491893,53.2767157 33.4512595,52.2514796 L19.6835142,47.9329411 C19.6426596,48.3477843 19.2927713,48.671875 18.8671875,48.671875 L12.8515625,48.671875 C12.3985164,48.671875 12.03125,48.3046086 12.03125,47.8515625 L12.03125,35.2734375 C12.03125,34.8203914 12.3985164,34.453125 12.8515625,34.453125 L18.8671875,34.453125 C19.3202336,34.453125 19.6875,34.8203914 19.6875,35.2734375 L19.6875,35.6408493 L19.6875,35.6408493 Z M19.6875,37.9138259 L19.6875,45.6416023 L34.2868583,50.2209935 L34.3728522,50.2658553 C35.8399624,51.0312268 37.8892512,51.0312268 40.5509566,50.1924044 C43.3981174,49.2951368 48.6515105,47.4503535 56.2988674,44.6618553 C56.7055208,43.8428613 56.6503809,43.1552838 56.1585743,42.451185 C55.6404831,41.7094557 54.6030044,41.4608376 52.8424479,41.8302192 L44.5606045,43.5988601 C44.4824247,45.9237816 42.6727722,47.1949387 39.5736694,47.1949387 L34.0398979,47.1949387 C33.4358365,47.1949387 32.9461479,46.7052501 32.9461479,46.1011887 C32.9461479,45.4971272 33.4358365,45.0074387 34.0398979,45.0074387 L39.5736694,45.0074387 C41.5439289,45.0074387 42.3414536,44.5674087 42.3738457,43.4868845 L42.2978415,42.864374 C42.0824737,41.1004092 41.3231979,40.2717762 39.8490966,40.0994667 C39.2100464,40.0247673 38.6646555,39.9861876 37.4495551,39.9186262 C36.9868661,39.8929 36.8024226,39.8823475 36.5538122,39.8668346 C33.7406487,39.691298 32.0100165,39.3503136 30.3578861,38.4251211 C27.8915018,37.0439467 23.4364973,36.7754949 19.6875,37.9138259 L19.6875,37.9138259 Z M14.21875,36.640625 L14.21875,46.484375 L17.5,46.484375 L17.5,36.640625 L14.21875,36.640625 Z M23.7890625,35.0320309 L23.7890625,15.859375 C23.7890625,15.4063289 24.1563289,15.0390625 24.609375,15.0390625 L54.6875,15.0390625 C55.1405461,15.0390625 55.5078125,15.4063289 55.5078125,15.859375 L55.5078125,39.6044716 C55.0077348,39.4956284 53.9127655,39.4579926 53.3203125,39.4893487 L53.3203125,17.2265625 L44.0234375,17.2265625 L44.0234375,26.796875 C44.0234375,27.5146254 43.1667739,27.8862587 42.642667,27.3958737 L39.6887534,24.63202 L36.6461289,27.403332 C36.1193641,27.8831249 35.2734375,27.5093933 35.2734375,26.796875 L35.2734375,17.2265625 L25.9765625,17.2265625 L25.9765625,35.0318591 C25.436617,35.009025 24.3411112,35.0089417 23.7890625,35.0320309 Z M37.4609375,17.2265625 L37.4609375,23.84375 L39.2447729,22.0823504 C39.4977136,21.832591 39.8852125,21.8354065 40.1350425,22.0888189 L41.8359375,23.8141038 L41.8359375,17.2265625 L37.4609375,17.2265625 Z" id="color" fill="#F19D76" fill-rule="nonzero"></path>
                                  <path d="M67.9813127,35.4493932 C67.7891087,35.4436712 66.911277,35.4858071 65.3478176,35.575801 C64.6245677,35.5909574 64.0207506,35.0274752 63.9859478,34.3049042 C63.9511451,33.5823333 64.4980124,32.9634282 65.219371,32.9090049 C66.1511186,32.8444417 67.0828661,32.8125 67.9500506,32.8125 C68.2886972,32.8180574 68.6116031,32.9564456 68.8491768,33.1978398 C69.1115439,33.4742813 69.2505862,33.845306 69.2345166,34.2260922 C69.2498845,34.560302 69.1217281,34.8851549 68.8823174,35.1188531 C68.6429067,35.3525512 68.315054,35.4728263 67.9813127,35.4493932 Z M2.39496536,35.4467736 C1.66755809,35.4379531 1.08502839,34.8411226 1.09384886,34.1137154 C1.10266933,33.3863081 1.69949984,32.8037784 2.42690711,32.8125989 C3.32603333,32.8125989 4.22583915,32.8452202 5.09302362,32.9091037 C5.44568442,32.9168687 5.7796502,33.0692496 6.01663862,33.330528 C6.25362703,33.5918065 6.37280159,33.9390103 6.3462275,34.2907542 C6.32511604,35.0166193 5.72323354,35.5899996 4.99719837,35.5758998 L2.39496536,35.4467736 Z M36.4274108,2.34719672 L36.4274108,5.07787633 C36.4234418,5.42020148 36.28131,5.74639671 36.0332932,5.98238382 C35.7852764,6.21837094 35.452423,6.34412235 35.1103234,6.33108021 C34.4017803,6.34555757 33.8139758,5.78626378 33.793236,5.07787633 C33.7612942,4.14612876 33.7612942,3.24700254 33.793236,2.34719672 C33.7973868,2.00499019 33.9395982,1.6789713 34.1875945,1.44313164 C34.4355909,1.20729198 34.7683402,1.08163257 35.1103234,1.09467245 C35.4523066,1.08163257 35.7850559,1.20729198 36.0330522,1.44313164 C36.2810486,1.6789713 36.4232599,2.00499019 36.4274108,2.34719672 Z M35.0783816,68.9991749 C34.727899,69.0030358 34.3906447,68.8655118 34.142801,68.6176681 C33.8949574,68.3698244 33.7574333,68.0325701 33.7612942,67.6820875 C33.7293525,66.8142234 33.7293525,65.9150972 33.7612942,65.0152914 C33.7585202,64.6680184 33.8974538,64.3346256 34.1460163,64.0920912 C34.3945787,63.8495568 34.7312813,63.7188484 35.0783816,63.7301457 L35.1103234,63.7301457 C35.825437,63.7299354 36.410068,64.300388 36.4274108,65.0152914 L36.4274108,67.7140292 C36.4225048,68.0645185 36.2767192,68.3982785 36.0229253,68.640054 C35.7691313,68.8818295 35.4286966,69.0112647 35.0783816,68.9991749 Z M63.3834571,51.8037392 C63.2198646,51.7026818 62.438572,51.3002567 61.0395796,50.596464 C60.4056486,50.2479649 60.1644687,49.4580664 60.4956141,48.8149002 C60.8267596,48.171734 61.6098131,47.9091802 62.2617396,48.2227275 C63.1009382,48.632688 63.9238262,49.0708994 64.6748299,49.5044916 C64.9653278,49.6786278 65.1757784,49.9599284 65.2608262,50.2877688 C65.349822,50.6583577 65.2847238,51.0491956 65.080414,51.3709314 C64.9266181,51.6680495 64.653205,51.8853022 64.3290201,51.9679854 C64.0048353,52.0506685 63.660769,51.9909035 63.3834571,51.8037392 Z M6.58532398,19.0082969 C5.95978103,18.6369545 5.75371077,17.8288193 6.12505316,17.2032763 C6.49639554,16.5777334 7.30453078,16.3716631 7.93007372,16.7430055 C8.70873986,17.1925686 9.47168389,17.6707225 10.1907459,18.1596394 C10.4922767,18.3426945 10.705309,18.6416431 10.7799078,18.9864111 C10.8545066,19.3311791 10.7841128,19.6914537 10.5852271,19.9827858 C10.2040115,20.6008477 9.39607579,20.7964683 8.77436076,20.42124 L6.58532398,19.0082969 Z M52.6080747,7.35944514 L51.2427349,9.72428305 C51.0681351,10.0187609 50.7819477,10.2301883 50.4491653,10.3105507 C50.1163829,10.3909132 49.7652477,10.3333904 49.4755018,10.1510458 C48.8546468,9.80931197 48.6252401,9.03104712 48.9614726,8.40719567 C49.399684,7.58430773 49.8492471,6.80564159 50.3268124,6.04235776 C50.5015104,5.74807362 50.7876785,5.53683867 51.1203695,5.4565937 C51.4530604,5.37634873 51.8040595,5.43389915 52.0937057,5.61618361 C52.3963918,5.77588234 52.6217314,6.05108123 52.7185827,6.37932254 C52.815434,6.70756385 52.7755832,7.06101018 52.6080747,7.35944514 Z M18.1137921,64.4072369 C17.8083348,64.2353392 17.585026,63.9476128 17.494309,63.609052 C17.4035919,63.2704912 17.4531197,62.9096585 17.6317047,62.608062 C18.0379743,61.8404988 18.4875375,61.0618327 18.9651027,60.2985489 C19.1363368,59.9964146 19.4233533,59.7771547 19.7598819,59.691395 C20.0964105,59.6056353 20.4533577,59.6607899 20.7483067,59.8441238 L20.775969,59.8600947 C21.3953808,60.2174693 21.6164598,61.0038113 21.2740274,61.6316071 L19.9246584,63.9687827 C19.7451652,64.2698623 19.4520311,64.4860142 19.1113513,64.5685009 C18.7706716,64.6509877 18.4111289,64.5928645 18.1137921,64.4072369 Z M51.2244244,63.6680905 C51.1332778,63.4987759 50.6578711,62.7596193 49.7982045,61.4506207 C49.4234538,60.8318462 49.609535,60.0271841 50.2178985,59.6357585 C50.8262619,59.244333 51.6356831,59.4084815 52.0434944,60.0059846 C52.5652815,60.7806201 53.0588176,61.5715663 53.4924098,62.3225701 C53.6569203,62.6186254 53.6985255,62.9674642 53.6082589,63.2939062 C53.5000371,63.6593435 53.2482415,63.96527 52.9104361,64.1417464 C52.6286859,64.3221602 52.2832768,64.3736001 51.9611829,64.2831134 C51.639089,64.1926266 51.3710013,63.9688355 51.2244244,63.6680905 Z M18.4335193,6.86733775 C18.0774545,6.23297434 18.30306,5.43007356 18.9374234,5.07400868 C19.5717868,4.71794379 20.3746876,4.94354933 20.7307525,5.57791274 C21.1803156,6.35657888 21.6019676,7.15214426 21.9802351,7.93508979 C22.1498408,8.24438548 22.184858,8.60979878 22.0770784,8.945676 C21.9692988,9.28155322 21.7281988,9.55836333 21.4102926,9.71122143 C20.7711192,10.0558709 19.9736161,9.82131552 19.6228093,9.18550075 L18.4335193,6.86733775 Z M64.1148165,19.7905116 L61.7499786,21.1558514 C61.4515318,21.3235767 61.0979726,21.3635846 60.7695933,21.2667893 C60.4412141,21.169994 60.1658835,20.9446102 60.0061285,20.6418222 C59.6393192,20.0354445 59.8297796,19.2467441 60.4328912,18.8745891 C61.2238374,18.381053 62.0025035,17.9314899 62.7977291,17.5092493 C63.0961641,17.3417408 63.4496104,17.30189 63.7778517,17.3987413 C64.106093,17.4955926 64.3812919,17.7209322 64.5409906,18.0236183 C64.7232751,18.3132645 64.7808255,18.6642635 64.7005805,18.9969545 C64.6203356,19.3296455 64.4091006,19.6158136 64.1148165,19.7905116 Z M5.71799563,51.9482071 C5.53941068,51.6466107 5.48988283,51.285778 5.58059992,50.9472172 C5.671317,50.6086564 5.89462576,50.32093 6.20008307,50.1490323 C6.93570454,49.6874379 7.71437068,49.2378748 8.50959626,48.8156343 C8.80895645,48.6395953 9.16714992,48.593219 9.5014721,48.6872132 C9.83579428,48.7812074 10.1173424,49.0074462 10.2811087,49.3136926 L10.2970796,49.3413549 C10.6548186,49.9605564 10.4531076,50.7520879 9.84265451,51.1245589 L7.50547896,52.4739278 C7.19949344,52.6449238 6.83755591,52.6855498 6.50127521,52.5866455 C6.16499451,52.4877413 5.88268301,52.2576338 5.71799563,51.9482071 Z M53.59375,39.5724919 C53.3794745,39.603906 53.1602778,39.6431529 52.9363029,39.6901459 L44.7831303,41.431302 C44.2000883,39.4015314 42.7876156,38.1766351 40.6499421,37.9267598 C39.9520064,37.8451772 39.377438,37.8045336 38.1178709,37.7344997 C37.6602541,37.7090555 37.4788573,37.6986773 37.2369185,37.6835808 C34.7290119,37.5270916 33.2620541,37.2380588 31.9735806,36.516514 C30.5880387,35.740611 28.7715108,35.2560359 26.796875,35.0846367 L26.796875,17.5 L53.59375,17.5 L53.59375,39.5724919 L53.59375,39.5724919 Z" id="fill" fill="#F19D76" fill-rule="nonzero" opacity="0.3"></path>
                                </g>
                              </svg>
                            </span>
                            <div>
                              <span style="color:#000000;">Return policy</span>
                              <p style="color:#000000;">(edit with the Customer Reassurance module)</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl -->
                  </div>
                </div>

                <div class="col-xs-12">

                  <div class="product-tabs tabs">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active js-product-nav-active" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">
                          Description
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-details" role="tab" aria-controls="product-details">
                          Product Details
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#extra-0" role="tab" aria-controls="extra-0">Facebook Comments</a>
                      </li>
                      <li class="nav-item" id="rb_li_review">
                        <a class="nav-link" data-toggle="tab" href="#rb_review" role="tab" aria-controls="rb_review">
                          Review
                          <!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
                          <span class="rb-number-review">(0)</span>
                          <!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content" id="tab-content">
                      <div class="tab-pane fade in active js-product-tab-active" id="description" role="tabpanel">

                        <div class="product-description">
                          <table class="table table-striped table-borderless h-font text-uppercase" style="height:157px;" width="1217">
                            <tbody>
                              <tr class="background-odd">
                                <td></td>
                                <td>inches</td>
                                <td>cm</td>
                              </tr>
                              <tr class="background-odd">
                                <td>Height</td>
                                <td>34.6</td>
                                <td>88</td>
                              </tr>
                              <tr>
                                <td>Width</td>
                                <td>71.7 x 89.4</td>
                                <td>182 x 227</td>
                              </tr>
                              <tr class="background-odd">
                                <td>Depth</td>
                                <td>35.8</td>
                                <td>91</td>
                              </tr>
                              <tr>
                                <td>Internal</td>
                                <td>57.1 x 68.1</td>
                                <td>145 x 173</td>
                              </tr>
                              <tr class="background-odd">
                                <td>Seat Height</td>
                                <td>19.7</td>
                                <td>50</td>
                              </tr>
                              <tr>
                                <td>Seat Depth</td>
                                <td>22.4</td>
                                <td>57</td>
                              </tr>
                              <tr class="background-odd">
                                <td>Arm Height</td>
                                <td>26</td>
                                <td>66</td>
                              </tr>
                            </tbody>
                          </table>
                          <p>Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel. Cras condimentum tincidunt urna, sed vehicula ipsum dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare.</p>
                          <ul>
                            <li>Aenean auctor sem ac ex efficitur</li>
                            <li>Non mattis odio bibendum</li>
                            <li>Sed vitae enim at tortor finibus</li>
                            <li>Integer facilisis eleifend vehicula</li>
                            <li>In hac habitasse platea dictumst</li>
                          </ul>
                          <p>Sed molestie orci sem, at semper est molestie ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada.</p>
                        </div>

                      </div>


                      <div class="js-product-details tab-pane fade" id="product-details" data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;2&quot;,&quot;id_supplier&quot;:&quot;0&quot;,&quot;reference&quot;:&quot;demo_6&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;delivery_in_stock&quot;:null,&quot;delivery_out_stock&quot;:null,&quot;id_category_default&quot;:&quot;2&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:&quot;0.000000&quot;,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;low_stock_threshold&quot;:null,&quot;low_stock_alert&quot;:&quot;0&quot;,&quot;price&quot;:&quot;\u20ac25.10&quot;,&quot;unity&quot;:null,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.000000&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;301-category&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;13&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2021-02-22 21:19:59&quot;,&quot;date_upd&quot;:&quot;2021-09-13 09:01:46&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:null,&quot;meta_keywords&quot;:null,&quot;meta_title&quot;:null,&quot;link_rewrite&quot;:&quot;modern-swivel-accent-chair&quot;,&quot;name&quot;:&quot;Modern Swivel Accent Chair&quot;,&quot;description&quot;:&quot;&lt;table class=\&quot;table table-striped table-borderless h-font text-uppercase\&quot; style=\&quot;height:157px;\&quot; width=\&quot;1217\&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr class=\&quot;background-odd\&quot;&gt;\r\n&lt;td&gt;&lt;\/td&gt;\r\n&lt;td&gt;inches&lt;\/td&gt;\r\n&lt;td&gt;cm&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr class=\&quot;background-odd\&quot;&gt;\r\n&lt;td&gt;Height&lt;\/td&gt;\r\n&lt;td&gt;34.6&lt;\/td&gt;\r\n&lt;td&gt;88&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;Width&lt;\/td&gt;\r\n&lt;td&gt;71.7 x 89.4&lt;\/td&gt;\r\n&lt;td&gt;182 x 227&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr class=\&quot;background-odd\&quot;&gt;\r\n&lt;td&gt;Depth&lt;\/td&gt;\r\n&lt;td&gt;35.8&lt;\/td&gt;\r\n&lt;td&gt;91&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;Internal&lt;\/td&gt;\r\n&lt;td&gt;57.1 x 68.1&lt;\/td&gt;\r\n&lt;td&gt;145 x 173&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr class=\&quot;background-odd\&quot;&gt;\r\n&lt;td&gt;Seat Height&lt;\/td&gt;\r\n&lt;td&gt;19.7&lt;\/td&gt;\r\n&lt;td&gt;50&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;Seat Depth&lt;\/td&gt;\r\n&lt;td&gt;22.4&lt;\/td&gt;\r\n&lt;td&gt;57&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;tr class=\&quot;background-odd\&quot;&gt;\r\n&lt;td&gt;Arm Height&lt;\/td&gt;\r\n&lt;td&gt;26&lt;\/td&gt;\r\n&lt;td&gt;66&lt;\/td&gt;\r\n&lt;\/tr&gt;\r\n&lt;\/tbody&gt;\r\n&lt;\/table&gt;\r\n&lt;p&gt;Curabitur egestas malesuada volutpat. Nunc vel vestibulum odio, ac pellentesque lacus. Pellentesque dapibus nunc nec est imperdiet, a malesuada sem rutrum. Sed quam odio, porta a finibus quis, sagittis aliquet leo. Nunc ornare metus urna, eu luctus velit placerat ut. Cras at porttitor lectus. Ut dapibus aliquam nibh, in imperdiet libero tincidunt sit amet. Morbi sodales fermentum nibh nec facilisis. Morbi pharetra varius velit, eget varius libero finibus quis. Quisque auctor varius lectus, lacinia rhoncus velit posuere vel. Cras condimentum tincidunt urna, sed vehicula ipsum dapibus et. Pellentesque pharetra ultrices varius. Sed viverra nec purus ut ornare.&lt;\/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;Aenean auctor sem ac ex efficitur&lt;\/li&gt;\r\n&lt;li&gt;Non mattis odio bibendum&lt;\/li&gt;\r\n&lt;li&gt;Sed vitae enim at tortor finibus&lt;\/li&gt;\r\n&lt;li&gt;Integer facilisis eleifend vehicula&lt;\/li&gt;\r\n&lt;li&gt;In hac habitasse platea dictumst&lt;\/li&gt;\r\n&lt;\/ul&gt;\r\n&lt;p&gt;Sed molestie orci sem, at semper est molestie ac. Suspendisse cursus feugiat erat, eu posuere massa. Nullam posuere nibh non eros lobortis tempus. Maecenas dignissim elementum massa, vel accumsan urna elementum in. Suspendisse at dui euismod, rhoncus eros non, imperdiet ipsum. Vestibulum vehicula vel turpis et vestibulum. Ut porta et ex maximus malesuada.&lt;\/p&gt;&quot;,&quot;description_short&quot;:&quot;&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&lt;\/p&gt;&quot;,&quot;available_now&quot;:null,&quot;available_later&quot;:null,&quot;id&quot;:3,&quot;id_product&quot;:&quot;3&quot;,&quot;out_of_stock&quot;:&quot;2&quot;,&quot;new&quot;:&quot;1&quot;,&quot;id_product_attribute&quot;:13,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[{&quot;title&quot;:&quot;Facebook Comments&quot;,&quot;content&quot;:&quot;&lt;div id=\&quot;fcbc\&quot;&gt;&lt;fb:comments href=https://rubiktheme.com/" https:////rubiktheme.com//demo//rb_davici_demo//en//home//3-13-modern-swivel-accent-chair.html/" colorscheme=\&quot;light\&quot; width=\&quot;\&quot;&gt;&lt;\/fb:comments&gt;&lt;\/div&gt;&quot;,&quot;attr&quot;:{&quot;id&quot;:&quot;&quot;,&quot;class&quot;:&quot;&quot;},&quot;moduleName&quot;:&quot;rbthemefunction&quot;}],&quot;allow_oosp&quot;:0,&quot;quantity&quot;:900,&quot;id_image&quot;:&quot;3-36&quot;,&quot;category&quot;:&quot;home&quot;,&quot;category_name&quot;:&quot;Home&quot;,&quot;link&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-modern-swivel-accent-chair.html&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:25.1,&quot;price_without_reduction&quot;:25.1,&quot;reduction&quot;:0,&quot;specific_prices&quot;:[],&quot;quantity_all_versions&quot;:1500,&quot;features&quot;:[{&quot;name&quot;:&quot;Composition&quot;,&quot;value&quot;:&quot;Matt paper&quot;,&quot;id_feature&quot;:&quot;1&quot;,&quot;position&quot;:&quot;0&quot;}],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;3&quot;:{&quot;id_attribute&quot;:&quot;19&quot;,&quot;id_attribute_group&quot;:&quot;3&quot;,&quot;name&quot;:&quot;40x60cm&quot;,&quot;group&quot;:&quot;Dimension&quot;,&quot;reference&quot;:&quot;demo_6&quot;,&quot;ean13&quot;:null,&quot;isbn&quot;:null,&quot;upc&quot;:null,&quot;mpn&quot;:null}},&quot;rate&quot;:0,&quot;tax_name&quot;:&quot;&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:&quot;&quot;,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;Items&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0,&quot;images&quot;:[{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;36&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/37-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;37&quot;,&quot;cover&quot;:null,&quot;position&quot;:&quot;2&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/38-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;38&quot;,&quot;cover&quot;:null,&quot;position&quot;:&quot;3&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/39-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;39&quot;,&quot;cover&quot;:null,&quot;position&quot;:&quot;4&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/40-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;40&quot;,&quot;cover&quot;:null,&quot;position&quot;:&quot;5&quot;,&quot;associatedVariants&quot;:[]},{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/41-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;41&quot;,&quot;cover&quot;:null,&quot;position&quot;:&quot;6&quot;,&quot;associatedVariants&quot;:[]}],&quot;cover&quot;:{&quot;bySize&quot;:{&quot;cart_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;small_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-small_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-medium_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:330,&quot;height&quot;:330},&quot;home_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-large_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:800,&quot;height&quot;:800},&quot;thickbox_default&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422}},&quot;small&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-cart_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:200,&quot;height&quot;:200},&quot;medium&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-home_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:700,&quot;height&quot;:700},&quot;large&quot;:{&quot;url&quot;:&quot;https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-thickbox_default\/modern-swivel-accent-chair.jpg&quot;,&quot;width&quot;:1100,&quot;height&quot;:1422},&quot;legend&quot;:null,&quot;id_image&quot;:&quot;36&quot;,&quot;cover&quot;:&quot;1&quot;,&quot;position&quot;:&quot;1&quot;,&quot;associatedVariants&quot;:[]},&quot;has_discount&quot;:false,&quot;discount_type&quot;:null,&quot;discount_percentage&quot;:null,&quot;discount_percentage_absolute&quot;:null,&quot;discount_amount&quot;:null,&quot;discount_amount_to_display&quot;:null,&quot;price_amount&quot;:25.1,&quot;unit_price_full&quot;:&quot;&quot;,&quot;show_availability&quot;:true,&quot;availability_date&quot;:null,&quot;availability_message&quot;:&quot;&quot;,&quot;availability&quot;:&quot;available&quot;}" role="tabpanel">
                        <div class="product-manufacturer">
                          <a href="../brand/2-graphic-corner.html">
                            <img src="../../img/m/2.jpg" class="img img-thumbnail manufacturer-logo" alt="Graphic Corner" loading="lazy" width="98" height="50">
                          </a>
                        </div>
                        <div class="product-reference">
                          <label class="label">Reference </label>
                          <span>demo_6</span>
                        </div>
                        <div class="product-quantities">
                          <label class="label">In stock</label>
                          <span data-stock="<?= $item['product_qty'] ?>" data-allow-oosp="0">
                            <?= $item['product_qty'] ?> Items
                          </span>
                        </div>
                        <div class="product-out-of-stock"></div>
                        <section class="product-features">
                          <p class="h6">Data sheet</p>
                          <dl class="data-sheet">
                            <dt class="name">Composition</dt>
                            <dd class="value">Matt paper</dd>
                          </dl>
                        </section>
                      </div>
                      <div class="tab-pane fade in " id="extra-0" role="tabpanel" id="" class="">
                        <div id="fcbc">
                          <fb:comments href="3-13-modern-swivel-accent-chair.html" colorscheme="light" width=""></fb:comments>
                        </div>
                      </div>
                      <div class="tab-pane fade in" id="rb_review" role="tabpanel">
                        <!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
                        <div class="product_reviews_block_tab">
                          <div class="rb-review-list">
                            <p class="alert alert-info">No comment at this time.</p>
                            <a href="../login.html" class="btn-primary">
                              You Must Login To Review
                            </a>
                          </div>
                        </div>
                        <!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <section class="product-accessories clearfix mt-3">
                <p class="h5 products-section-title">You might also like</p>
                <div class="products featured-products-slick">

                  <?php
                  $limit = 4;
                  if (isset($_POST["setPage"])) {
                    $page_number = $_POST["pageNumber"];
                    $start = ($page_number * $limit) - $limit;
                  } else {
                    $start = 0;
                  }
                  $product_query = "SELECT * FROM products LIMIT $start,$limit";
                  $run_query = mysqli_query($con, $product_query);
                  if (mysqli_num_rows($run_query) > 0) {
                    while ($row = mysqli_fetch_array($run_query)) {
                      $pro_id    = $row['product_id'];
                      $pro_cat   = $row['product_cat'];
                      $pro_brand = $row['product_brand'];
                      $pro_title = $row['product_title'];
                      $pro_price = $row['product_price'];
                      $pro_image = $row['product_image'];
                      include('./product-card.php');
                    }
                  }
                  ?>
                </div>
              </section>

              <footer class="page-footer">
                <!-- Footer content -->
              </footer>

              <div class="page-loading-overlay main-product-details-loading"></div>
            </section>
          </div>
        </div>
      </div>
    </section>
    <?php include_once('./common/footer.php') ?>
  </main>

  <script type="text/javascript" src="./themes/rb_davici/assets/cache/bottom-eff46e38.js"></script>
</body>

</html>
