<?php
require "config/constants.php";
session_start();
if (!isset($_SESSION["uid"])) {
	header("location:index.php");
}

include "db.php";
?>

<!-- begin index.tpl -->
<!DOCTYPE html>
<html lang="en-US">
<!-- Mirrored from rubiktheme.com/demo/rb_davici_demo/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 00:37:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8" />

	<meta http-equiv="x-ua-compatible" content="ie=edge" />

	<title>Davici - Furniture Store</title>

	<meta name="description" content="Shop powered by PrestaShop" />
	<meta name="keywords" content="" />

	<link rel="alternate" href="index.html" hreflang="en-us" />
	<link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/fr/" hreflang="fr-fr" />
	<link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/de/" hreflang="de-de" />
	<link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/it/" hreflang="it-it" />
	<link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/es/" hreflang="es-es" />
	<link rel="alternate" href="https://rubiktheme.com/demo/rb_davici_demo/pl/" hreflang="pl-pl" />

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Davici - Furniture Store",
			"url": "https://rubiktheme.com/demo/rb_davici_demo/en/",
			"logo": {
				"@type": "ImageObject",
				"url": "https://rubiktheme.com/demo/rb_davici_demo/img/davici-furniture-store-logo-1614158703.jpg"
			}
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebPage",
			"isPartOf": {
				"@type": "WebSite",
				"url": "https://rubiktheme.com/demo/rb_davici_demo/en/",
				"name": "Davici - Furniture Store"
			},
			"name": "Davici - Furniture Store",
			"url": "https://rubiktheme.com/demo/rb_davici_demo/en/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "https://rubiktheme.com/demo/rb_davici_demo/en/",
			"image": {
				"@type": "ImageObject",
				"url": "https://rubiktheme.com/demo/rb_davici_demo/img/davici-furniture-store-logo-1614158703.jpg"
			},
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://rubiktheme.com/demo/rb_davici_demo/en/search?search_query={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>

	<meta property="og:title" content="Davici - Furniture Store" />
	<meta property="og:description" content="Shop powered by PrestaShop" />
	<meta property="og:url" content="https://rubiktheme.com/demo/rb_davici_demo/en/" />
	<meta property="og:site_name" content="Davici - Furniture Store" />
	<meta property="og:type" content="website" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" type="image/vnd.microsoft.icon" href="https://rubiktheme.com/demo/rb_davici_demo/img/favicon.ico?1614158735" />
	<link rel="shortcut icon" type="image/x-icon" href="https://rubiktheme.com/demo/rb_davici_demo/img/favicon.ico?1614158735" />

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,regular,500,600&amp;subset=latin%2Clatin-ext" type="text/css" media="all" />
	<link rel="stylesheet" href="./css/theme.css" type="text/css" media="all" />

	<script type="text/javascript">
		var RB_Meta = {
			v: "1.0.0"
		};
		var active = "1";
		var cancel_rating_txt = "Cancel Rating";
		var collections = [
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/outdoor\/1-design-living-room-sofa.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/24-home_default\/design-living-room-sofa.jpg' alt='Design Living Room Sofa'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/outdoor\/1-design-living-room-sofa.html' title='Design Living Room Sofa'>Design Living Room Sofa<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/bed-bath\/2-armen-living-summer-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/30-home_default\/armen-living-summer-chair.jpg' alt='Armen Living Summer Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/bed-bath\/2-armen-living-summer-chair.html' title='Armen Living Summer Chair'>Armen Living Summer Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/17-lyngby-porcelaen-vase-porcelain.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/143-home_default\/lyngby-porcelaen-vase-porcelain.jpg' alt='Lyngby Porcel\u00e6n Vase Porcelain'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/17-lyngby-porcelaen-vase-porcelain.html' title='Lyngby Porcel\u00e6n Vase Porcelain'>Lyngby Porcel\u00e6n Vase Porcelain<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/19-plastic-chair-with-wooden-legs.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/130-home_default\/plastic-chair-with-wooden-legs.jpg' alt='Plastic Chair with Wooden Legs'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/19-plastic-chair-with-wooden-legs.html' title='Plastic Chair with Wooden Legs'>Plastic Chair with Wooden Legs<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-modern-swivel-accent-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/36-home_default\/modern-swivel-accent-chair.jpg' alt='Modern Swivel Accent Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/3-modern-swivel-accent-chair.html' title='Modern Swivel Accent Chair'>Modern Swivel Accent Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/5-wooden-starburst-wall-clock-non.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/48-home_default\/wooden-starburst-wall-clock-non.jpg' alt='Wooden Starburst Wall Clock-Non'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/5-wooden-starburst-wall-clock-non.html' title='Wooden Starburst Wall Clock-Non'>Wooden Starburst Wall Clock-Non<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/20-modern-fabric-club-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/140-home_default\/modern-fabric-club-chair.jpg' alt='Modern Fabric Club Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/20-modern-fabric-club-chair.html' title='Modern Fabric Club Chair'>Modern Fabric Club Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/8-armen-living-jaguar-chair.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/69-home_default\/armen-living-jaguar-chair.jpg' alt='Armen Living Jaguar Chair'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/8-armen-living-jaguar-chair.html' title='Armen Living Jaguar Chair'>Armen Living Jaguar Chair<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/11-norm-06-lamp-medium-white.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/82-home_default\/norm-06-lamp-medium-white.jpg' alt='Norm 06 Lamp Medium White'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wall-lamp\/11-norm-06-lamp-medium-white.html' title='Norm 06 Lamp Medium White'>Norm 06 Lamp Medium White<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
			"<a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/18-folding-tables-chairs.html' class='sale-popup-img'><img src='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/124-home_default\/folding-tables-chairs.jpg' alt='Folding Tables & Chairs'\/><\/a><div class='sale-popup-content'><h3><a href='https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/home\/18-folding-tables-chairs.html' title='Folding Tables & Chairs'>Folding Tables & Chairs<\/a><\/h3><span class='sale-popup-timeago'><\/span><\/div><span class='button-close'><i class='material-icons'>close<\/i><\/span>",
		];
		var isLogged = false;
		var popup =
			'\n<!-- begin module:rbthemefunction\/views\/templates\/rb-popup.tpl -->\n<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-popup.tpl --><div\n\tclass="rb-popup-container"\n\tstyle="width:800px;\n\theight:450px;\tbackground-image: url(\'#\/demo\/rb_davici_demo\/modules\/rbthemefunction\/\/views\/img\/imgbg_1.jpg\');\tbackground-position: center"\n>\n\t<div class="rb-popup-flex">\n\t\t<div id="rb_newsletter_popup" class="rb-block">\n\t\t\t<div class="rb-block-content">\n\t\t\t\t<form action="" method="POST">\n\t\t\t\t\t<div class="rb-popup-text">\n    \t\t\t\t\t<h2>Don\'t miss out!<\/h2>\n<p>Be the first to know about new arrivals, exclusive sales, seasonal inspiration &amp; more.<\/p>\n                    <\/div>\n\n                    \t                    <div class="rb-relative-input relative">\n\t                    \t<span class="rb-your-email">\n\t\t\t\t\t\t\t\t<input class="inputNew" id="rb-newsletter-popup" type="email" name="email" required="" value="" placeholder="your@email.com" \/>\n\t\t\t\t\t\t\t<\/span>\n\t                    \t<button class="rb-send-email">\n\t                    \t\t<i class="material-icons">trending_flat<\/i>\n\t\t\t\t\t\t\t\tSubscribe\n\t                    \t<\/button>\n\t                    <\/div>\n\n\t                    <div class="rb-email-alert">\n\t                    \t<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-ajax-loading.tpl --><div class="cssload-container rb-ajax-loading">\n\t<div class="cssload-double-torus"><\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-ajax-loading.tpl -->\t                    \t<p class="rb-email rb-email-success alert alert-success"><\/p>\n\t                    \t<p class="rb-email rb-email-error alert alert-danger"><\/p>\n\t                    <\/div>\n                    \t\t\t\t<\/form>\n\t\t\t<\/div>\n\t\t<\/div>\n\t<\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-popup.tpl -->\n<!-- end module:rbthemefunction\/views\/templates\/rb-popup.tpl -->\n';
		var prestashop = {
			cart: {
				products: [],
				totals: {
					total: {
						type: "total",
						label: "Total",
						amount: 0,
						value: "$0.00"
					},
					total_including_tax: {
						type: "total",
						label: "Total (tax incl.)",
						amount: 0,
						value: "$0.00",
					},
					total_excluding_tax: {
						type: "total",
						label: "Total (tax excl.)",
						amount: 0,
						value: "$0.00",
					},
				},
				subtotals: {
					products: {
						type: "products",
						label: "Subtotal",
						amount: 0,
						value: "$0.00",
					},
					discounts: null,
					shipping: {
						type: "shipping",
						label: "Shipping",
						amount: 0,
						value: "",
					},
					tax: {
						type: "tax",
						label: "Taxes",
						amount: 0,
						value: "$0.00"
					},
				},
				products_count: 0,
				summary_string: "0 items",
				vouchers: {
					allowed: 0,
					added: []
				},
				discounts: [],
				minimalPurchase: 0,
				minimalPurchaseRequired: "",
			},
			currency: {
				id: 1,
				name: "US Dollar",
				iso_code: "USD",
				iso_code_num: "840",
				sign: "$",
			},
			customer: {
				lastname: null,
				firstname: null,
				email: null,
				birthday: null,
				newsletter: null,
				newsletter_date_add: null,
				optin: null,
				website: null,
				company: null,
				siret: null,
				ape: null,
				is_logged: false,
				gender: {
					type: null,
					name: null
				},
				addresses: [],
			},
			language: {
				name: "English (English)",
				iso_code: "en",
				locale: "en-US",
				language_code: "en-us",
				is_rtl: "0",
				date_format_lite: "m\/d\/Y",
				date_format_full: "m\/d\/Y H:i:s",
				id: 1,
			},
			page: {
				title: "",
				canonical: null,
				meta: {
					title: "Davici - Furniture Store",
					description: "Shop powered by PrestaShop",
					keywords: "",
					robots: "index",
				},
				page_name: "index",
				body_classes: {
					"lang-en": true,
					"lang-rtl": false,
					"country-US": true,
					"currency-USD": true,
					"layout-full-width": true,
					"page-index": true,
					"tax-display-disabled": true,
				},
				admin_notifications: [],
			},
			shop: {
				name: "Davici - Furniture Store",
				logo: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/davici-furniture-store-logo-1614158703.jpg",
				stores_icon: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/logo_stores.png",
				favicon: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/favicon.ico",
			},
			urls: {
				base_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/",
				current_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
				shop_domain_url: "https:\/\/rubiktheme.com",
				img_ps_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/",
				img_cat_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/c\/",
				img_lang_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/l\/",
				img_prod_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/",
				img_manu_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/m\/",
				img_sup_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/su\/",
				img_ship_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/s\/",
				img_store_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/st\/",
				img_col_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/co\/",
				img_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/img\/",
				css_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/css\/",
				js_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/js\/",
				pic_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/upload\/",
				pages: {
					address: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/address",
					addresses: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/addresses",
					authentication: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login",
					cart: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/cart",
					category: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=category",
					cms: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=cms",
					contact: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/contact-us",
					discount: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/discount",
					guest_tracking: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/guest-tracking",
					history: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-history",
					identity: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/identity",
					index: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
					my_account: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/my-account",
					order_confirmation: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-confirmation",
					order_detail: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=order-detail",
					order_follow: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order-follow",
					order: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order",
					order_return: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=order-return",
					order_slip: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/credit-slip",
					pagenotfound: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/page-not-found",
					password: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/password-recovery",
					pdf_invoice: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-invoice",
					pdf_order_return: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-order-return",
					pdf_order_slip: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=pdf-order-slip",
					prices_drop: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/prices-drop",
					product: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/index.php?controller=product",
					search: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/search",
					sitemap: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/sitemap",
					stores: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/stores",
					supplier: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/supplier",
					register: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login?create_account=1",
					order_login: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/order?login=1",
				},
				alternative_langs: {
					"en-us": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
					"fr-fr": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/fr\/",
					"de-de": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/de\/",
					"it-it": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/it\/",
					"es-es": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/es\/",
					"pl-pl": "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/pl\/",
				},
				theme_assets: "\/demo\/rb_davici_demo\/themes\/rb_davici\/assets\/",
				actions: {
					logout: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/?mylogout=",
				},
				no_picture_image: {
					bySize: {
						cart_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-cart_default.jpg",
							width: 200,
							height: 200,
						},
						small_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-small_default.jpg",
							width: 200,
							height: 200,
						},
						medium_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-medium_default.jpg",
							width: 330,
							height: 330,
						},
						home_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-home_default.jpg",
							width: 700,
							height: 700,
						},
						large_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-large_default.jpg",
							width: 800,
							height: 800,
						},
						thickbox_default: {
							url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-thickbox_default.jpg",
							width: 1100,
							height: 1422,
						},
					},
					small: {
						url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-cart_default.jpg",
						width: 200,
						height: 200,
					},
					medium: {
						url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-home_default.jpg",
						width: 700,
						height: 700,
					},
					large: {
						url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/img\/p\/en-default-thickbox_default.jpg",
						width: 1100,
						height: 1422,
					},
					legend: "",
				},
			},
			configuration: {
				display_taxes_label: false,
				display_prices_tax_incl: false,
				is_catalog: false,
				show_prices: true,
				opt_in: {
					partner: true
				},
				quantity_discount: {
					type: "discount",
					label: "Unit discount"
				},
				voucher_enabled: 0,
				return_enabled: 0,
			},
			field_required: [],
			breadcrumb: {
				links: [{
					title: "Home",
					url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
				}, ],
				count: 1,
			},
			link: {
				protocol_link: "https:\/\/",
				protocol_content: "https:\/\/"
			},
			time: 1650933421,
			static_token: "bf0ba928fbfcc103ff31ff1e6c6b511b",
			token: "77e6199ecda09e345a34ac9ffee8bfac",
			debug: true,
		};
		var psemailsubscription_subscription =
			"index.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/module\/ps_emailsubscription\/subscription";
		var psr_icon_color = "#F19D76";
		var rbFrontendConfig = {
			isEditMode: "",
			stretchedSectionContainer: "",
			is_rtl: "",
			rb_day: "Days",
		};
		var rb_days = "Days";
		var rb_facebook = {
			general_appid: "1671479023110588",
			general_pageid: "2005509456220113",
			chat_state: "0",
			chat_color: "",
			chat_delay: "12",
			login_state: "0",
			login_redirect: "no_redirect",
			comments_state: "1",
			comments_tab: "1",
			comments_width: "",
			comments_number: "",
			comments_admins: "",
			product_page_url: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/",
			login_destination: "https:\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/my-account",
			phrases: {
				login: "Log in"
			},
		};
		var rb_height = "450";
		var rb_hours = "Hours";
		var rb_minutes = "Minutes";
		var rb_modal =
			'\n<!-- begin module:rbthemefunction\/views\/templates\/rb-modal.tpl -->\n<!-- begin \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-modal.tpl --><div class="modal-content">\n\t<div class="modal-header">\n\t\t<h5 class="modal-title text-xs-center">\n\t\t\tDelete selected item ?\n\t\t<\/h5>\n\t<\/div>\n\n\t<div class="modal-footer">\n\t\t<button type="button" class="rb-modal-no rb-modal-accept btn btn-primary" data-dismiss="modal">\n\t\t\tCancel\n\t\t<\/button>\n\n\t\t<button type="button" class="rb-modal-yes rb-modal-accept btn btn-primary">\n\t\t\tOK\n\t\t<\/button>\n\t<\/div>\n<\/div><!-- end \/var\/www\/html\/demo\/rb_davici_demo\/modules\/rbthemefunction\/views\/templates\/rb-modal.tpl -->\n<!-- end module:rbthemefunction\/views\/templates\/rb-modal.tpl -->\n';
		var rb_seconds = "Seconds";
		var rb_slick = {
			active: "1",
			slideshow: "4",
			slidesToScroll: "1",
			autoplay: "0",
			autospeed: "",
		};
		var rb_text =
			'You must be logged. <a href="index.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/login">Sign in<\/a>';
		var rb_view = "1";
		var rb_width = "800";
		var rb_zoom = {
			active: "1",
			type: "2",
			scroll: "1"
		};
		var text1 = "No Product";
		var text2 = "You Can Not Delete Default Wishlist";
		var token = "bf0ba928fbfcc103ff31ff1e6c6b511b";
		var url_ajax =
			"index.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/module\/rbthemefunction\/ajax";
		var url_compare =
			"index.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/compare";
		var url_wishlist =
			"index.html\/\/rubiktheme.com\/demo\/rb_davici_demo\/en\/wishlist";
	</script>

	<!-- begin modules/rbthememenu/views/templates/hook/header.tpl -->
	<style>
		.rb_megamenu .rb_menus_li h4,
		.rb_megamenu .rb_menus_li h5,
		.rb_megamenu .rb_menus_li h6,
		.rb_megamenu .rb_menus_li h1,
		.rb_megamenu .rb_menus_li h2,
		.rb_megamenu .rb_menus_li h3,
		.rb_megamenu .rb_menus_li h4 *:not(i),
		.rb_megamenu .rb_menus_li h5 *:not(i),
		.rb_megamenu .rb_menus_li h6 *:not(i),
		.rb_megamenu .rb_menus_li h1 *:not(i),
		.rb_megamenu .rb_menus_li h2 *:not(i),
		.rb_megamenu .rb_menus_li h3 *:not(i),
		.rb_megamenu .rb_menus_li>a {
			font-family: inherit;
		}

		.rb_megamenu *:not(.fa):not(i) {
			font-family: inherit;
		}

		.rb_block * {
			font-size: 14px;
		}

		@media (min-width: 768px) {

			/*layout 1*/

			.layout_layout1 .rb_megamenu_content {
				background: linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
				background: -webkit-linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
				background: -o-linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
			}

			/*end layout 1*/

			/*layout 2*/

			#header .layout_layout2:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout2 .ybc-menu-vertical-button,
			.layout_layout2 .rb_extra_item * {
				color: #000000;
			}

			.layout_layout2 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #000000;
			}

			/*layout 3*/
			.rb_megamenu.layout_layout3,
			.layout_layout3 .rb_tab_li_content {
				background-color: #333333;
			}

			#header .layout_layout3:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout3 .ybc-menu-vertical-button,
			.layout_layout3 .rb_extra_item * {
				color: #ffffff;
			}

			.layout_layout3 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #ffffff;
			}

			.layout_layout3 .rb_menus_li:hover>a,
			.layout_layout3 .rb_menus_li.active>a,
			.layout_layout3 .rb_extra_item button[type="submit"]:hover i,
			#header .layout_layout3 .rb_menus_li:hover>a,
			#header .layout_layout3 .rb_menus_li.active>a,
			.layout_layout3:hover .ybc-menu-vertical-button,
			.layout_layout3:hover .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				color: #ffffff;
			}

			.layout_layout3:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			#header .layout_layout3:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout3.ybc_vertical_menu:hover,
			.layout_layout3 .rb_tabs_li.open .rb_columns_contents_ul,
			.layout_layout3 .rb_tabs_li.open .rb_tab_li_content {
				background-color: #000000;
			}

			.layout_layout3 .rb_tabs_li.open.rb_tabs_has_content .rb_tab_li_content .rb_tab_name::before {
				border-right-color: #000000;
			}

			.layout_layout3.rb_megamenu .rb_columns_ul,
			.ybc_vertical_menu.layout_layout3 .rb_menus_ul.rb_mn_submenu_full_height .rb_menus_li:hover a::before,
			.layout_layout3.ybc_vertical_menu .rb_menus_ul {
				background-color: #000000;
				border-color: #000000;
			}

			#header .layout_layout3 .rb_block_content a,
			#header .layout_layout3 .rb_block_content p,
			.layout_layout3.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout3.ybc_vertical_menu .rb_menus_li>a {
				color: #dcdcdc;
			}

			.layout_layout3 .rb_columns_ul h1,
			.layout_layout3 .rb_columns_ul h2,
			.layout_layout3 .rb_columns_ul h3,
			.layout_layout3 .rb_columns_ul h4,
			.layout_layout3 .rb_columns_ul h5,
			.layout_layout3 .rb_columns_ul h6,
			.layout_layout3 .rb_columns_ul .rb_block>h1 a,
			.layout_layout3 .rb_columns_ul .rb_block>h2 a,
			.layout_layout3 .rb_columns_ul .rb_block>h3 a,
			.layout_layout3 .rb_columns_ul .rb_block>h4 a,
			.layout_layout3 .rb_columns_ul .rb_block>h5 a,
			.layout_layout3 .rb_columns_ul .rb_block>h6 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h1 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h2 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h3 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h4 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h5 a,
			#header .layout_layout3 .rb_columns_ul .rb_block>h6 a,
			.layout_layout3 .rb_columns_ul .h1,
			.layout_layout3 .rb_columns_ul .h2,
			.layout_layout3 .rb_columns_ul .h3,
			.layout_layout3.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout3.ybc_vertical_menu .rb_menus_li:hover>a,
			.layout_layout3 .rb_columns_ul .h4,
			.layout_layout3 .rb_columns_ul .h5,
			.layout_layout3 .rb_columns_ul .h6 {
				color: #ec4249;
			}

			.layout_layout3 li:hover>a,
			.layout_layout3 li>a:hover,
			.layout_layout3 .rb_tabs_li.open .rb_tab_toggle_title,
			.layout_layout3 .rb_tabs_li.open .rb_tab_toggle_title a,
			.layout_layout3 .rb_tabs_li:hover .rb_tab_toggle_title,
			.layout_layout3 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout3 .rb_tabs_li.open .rb_tab_toggle_title,
			#header .layout_layout3 .rb_tabs_li.open .rb_tab_toggle_title a,
			#header .layout_layout3 .rb_tabs_li:hover .rb_tab_toggle_title,
			#header .layout_layout3 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout3 li:hover>a,
			#header .layout_layout3 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout3 li>a:hover,
			.layout_layout3.ybc_vertical_menu .rb_menus_li>a,
			.layout_layout3 .has-sub .rb_categories li>a:hover,
			#header .layout_layout3 .has-sub .rb_categories li>a:hover {
				color: #fc4444;
			}

			/*layout 4*/

			.rb_megamenu.layout_layout4 {
				background-color: #ffffff;
			}

			.rb_megamenu.layout_layout4:not(.ybc_vertical_menu) .rb_menus_ul {
				background: #ffffff;
			}

			#header .layout_layout4:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout4 .ybc-menu-vertical-button,
			.layout_layout4 .rb_extra_item * {
				color: #333333;
			}

			.layout_layout4 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #333333;
			}

			.layout_layout4 .rb_menus_li:hover>a,
			.layout_layout4 .rb_menus_li.active>a,
			#header .layout_layout4 .rb_menus_li:hover>a,
			.layout_layout4:hover .ybc-menu-vertical-button,
			#header .layout_layout4 .rb_menus_li.active>a {
				color: #ffffff;
			}

			.layout_layout4:hover .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #ffffff;
			}

			.layout_layout4:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.layout_layout4:not(.ybc_vertical_menu) .rb_menus_li.active>a,
			.layout_layout4:not(.ybc_vertical_menu) .rb_menus_li:hover>span,
			.layout_layout4:not(.ybc_vertical_menu) .rb_menus_li.active>span,
			#header .layout_layout4:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			#header .layout_layout4:not(.ybc_vertical_menu) .rb_menus_li.active>a,
			.layout_layout4:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			#header .layout_layout4:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout4.ybc_vertical_menu:hover,
			#header .layout_layout4 .rb_menus_li:hover>span,
			#header .layout_layout4 .rb_menus_li.active>span {
				background-color: #ec4249;
			}

			.layout_layout4 .rb_megamenu_content {
				border-bottom-color: #ec4249;
			}

			.layout_layout4.rb_megamenu .rb_columns_ul,
			.ybc_vertical_menu.layout_layout4 .rb_menus_ul .rb_menus_li:hover a::before,
			.layout_layout4.ybc_vertical_menu .rb_menus_ul {
				background-color: #ffffff;
			}

			#header .layout_layout4 .rb_block_content a,
			.layout_layout4.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout4.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout4 .rb_block_content p {
				color: #666666;
			}

			.layout_layout4 .rb_columns_ul h1,
			.layout_layout4 .rb_columns_ul h2,
			.layout_layout4 .rb_columns_ul h3,
			.layout_layout4 .rb_columns_ul h4,
			.layout_layout4 .rb_columns_ul h5,
			.layout_layout4 .rb_columns_ul h6,
			.layout_layout4 .rb_columns_ul .rb_block>h1 a,
			.layout_layout4 .rb_columns_ul .rb_block>h2 a,
			.layout_layout4 .rb_columns_ul .rb_block>h3 a,
			.layout_layout4 .rb_columns_ul .rb_block>h4 a,
			.layout_layout4 .rb_columns_ul .rb_block>h5 a,
			.layout_layout4 .rb_columns_ul .rb_block>h6 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h1 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h2 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h3 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h4 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h5 a,
			#header .layout_layout4 .rb_columns_ul .rb_block>h6 a,
			.layout_layout4 .rb_columns_ul .h1,
			.layout_layout4 .rb_columns_ul .h2,
			.layout_layout4 .rb_columns_ul .h3,
			.layout_layout4 .rb_columns_ul .h4,
			.layout_layout4 .rb_columns_ul .h5,
			.layout_layout4 .rb_columns_ul .h6 {
				color: #414141;
			}

			.layout_layout4 li:hover>a,
			.layout_layout4 li>a:hover,
			.layout_layout4 .rb_tabs_li.open .rb_tab_toggle_title,
			.layout_layout4 .rb_tabs_li.open .rb_tab_toggle_title a,
			.layout_layout4 .rb_tabs_li:hover .rb_tab_toggle_title,
			.layout_layout4 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout4 .rb_tabs_li.open .rb_tab_toggle_title,
			#header .layout_layout4 .rb_tabs_li.open .rb_tab_toggle_title a,
			#header .layout_layout4 .rb_tabs_li:hover .rb_tab_toggle_title,
			#header .layout_layout4 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout4 li:hover>a,
			.layout_layout4.ybc_vertical_menu .rb_menus_li>a,
			.layout_layout4.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout4.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout4 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout4 li>a:hover {
				color: #ec4249;
			}

			/* end layout 4*/

			/* Layout 5*/
			.rb_megamenu.layout_layout5 {
				background-color: #f6f6f6;
			}

			.rb_megamenu.layout_layout5:not(.ybc_vertical_menu) .rb_menus_ul {
				background: #f6f6f6;
			}

			#header .layout_layout5:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout5 .ybc-menu-vertical-button,
			.layout_layout5 .rb_extra_item * {
				color: #333333;
			}

			.layout_layout5 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #333333;
			}

			.layout_layout5 .rb_menus_li:hover>a,
			.layout_layout5 .rb_menus_li.active>a,
			.layout_layout5 .rb_extra_item button[type="submit"]:hover i,
			#header .layout_layout5 .rb_menus_li:hover>a,
			#header .layout_layout5 .rb_menus_li.active>a,
			.layout_layout5:hover .ybc-menu-vertical-button {
				color: #ec4249;
			}

			.layout_layout5:hover .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #ec4249;
			}

			.layout_layout5 .rb_menus_li>a:before {
				background-color: #ec4249;
			}

			.layout_layout5.rb_megamenu .rb_columns_ul,
			.ybc_vertical_menu.layout_layout5 .rb_menus_ul .rb_menus_li:hover a::before,
			.layout_layout5.ybc_vertical_menu .rb_menus_ul {
				background-color: #ffffff;
			}

			#header .layout_layout5 .rb_block_content a,
			.layout_layout5.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout5.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout5 .rb_block_content p {
				color: #333333;
			}

			.layout_layout5 .rb_columns_ul h1,
			.layout_layout5 .rb_columns_ul h2,
			.layout_layout5 .rb_columns_ul h3,
			.layout_layout5 .rb_columns_ul h4,
			.layout_layout5 .rb_columns_ul h5,
			.layout_layout5 .rb_columns_ul h6,
			.layout_layout5 .rb_columns_ul .rb_block>h1 a,
			.layout_layout5 .rb_columns_ul .rb_block>h2 a,
			.layout_layout5 .rb_columns_ul .rb_block>h3 a,
			.layout_layout5 .rb_columns_ul .rb_block>h4 a,
			.layout_layout5 .rb_columns_ul .rb_block>h5 a,
			.layout_layout5 .rb_columns_ul .rb_block>h6 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h1 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h2 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h3 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h4 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h5 a,
			#header .layout_layout5 .rb_columns_ul .rb_block>h6 a,
			.layout_layout5 .rb_columns_ul .h1,
			.layout_layout5 .rb_columns_ul .h2,
			.layout_layout5 .rb_columns_ul .h3,
			.layout_layout5 .rb_columns_ul .h4,
			.layout_layout5 .rb_columns_ul .h5,
			.layout_layout5 .rb_columns_ul .h6 {
				color: #414141;
			}

			.layout_layout5 li:hover>a,
			.layout_layout5 li>a:hover,
			.layout_layout5 .rb_tabs_li.open .rb_tab_toggle_title,
			.layout_layout5 .rb_tabs_li.open .rb_tab_toggle_title a,
			.layout_layout5 .rb_tabs_li:hover .rb_tab_toggle_title,
			.layout_layout5 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout5 .rb_tabs_li.open .rb_tab_toggle_title,
			#header .layout_layout5 .rb_tabs_li.open .rb_tab_toggle_title a,
			#header .layout_layout5 .rb_tabs_li:hover .rb_tab_toggle_title,
			#header .layout_layout5 .rb_tabs_li:hover .rb_tab_toggle_title a,
			.layout_layout5.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout5 li:hover>a,
			.layout_layout5.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout5.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout5 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout5 li>a:hover {
				color: #ec4249;
			}

			/*end layout 5*/
		}

		@media (max-width: 767px) {

			.ybc-menu-vertical-button,
			.transition_floating .close_menu,
			.transition_full .close_menu {
				color: #ffffff;
			}

			.transition_floating .close_menu *,
			.transition_full .close_menu *,
			.ybc-menu-vertical-button .icon-bar {
				color: #ffffff;
			}

			.close_menu .icon-bar,
			.ybc-menu-vertical-button .icon-bar {
				background-color: #ffffff;
			}

			.rb_menus_back_icon {
				border-color: #ffffff;
			}

			/*------------------------------------------------------*/

			.layout_layout3 .rb_menus_li:hover>a,
			#header .layout_layout3 .rb_menus_li:hover>a {
				color: #ffffff;
			}

			.layout_layout3 .rb_has_sub.rb_menus_li:hover .arrow::before {
				border-color: #ffffff;
			}

			.layout_layout3 .rb_menus_li:hover>a,
			#header .layout_layout3 .rb_menus_li:hover>a {
				background-color: #000000;
			}

			.layout_layout3 li:hover>a,
			.layout_layout3 li>a:hover,
			#header .layout_layout3 li:hover>a,
			#header .layout_layout3 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout3 li>a:hover,
			.layout_layout3 .has-sub .rb_categories li>a:hover,
			#header .layout_layout3 .has-sub .rb_categories li>a:hover {
				color: #fc4444;
			}

			/*------------------------------------------------------*/

			.layout_layout4 .rb_menus_li:hover>a,
			#header .layout_layout4 .rb_menus_li:hover>a {
				color: #ffffff;
			}

			.layout_layout4 .rb_has_sub.rb_menus_li:hover .arrow::before {
				border-color: #ffffff;
			}

			.layout_layout4 .rb_menus_li:hover>a,
			#header .layout_layout4 .rb_menus_li:hover>a {
				background-color: #ec4249;
			}

			.layout_layout4 li:hover>a,
			.layout_layout4 li>a:hover,
			#header .layout_layout4 li:hover>a,
			#header .layout_layout4 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout4 li>a:hover {
				color: #ec4249;
			}

			/*------------------------------------------------------*/

			.layout_layout5 .rb_menus_li:hover>a,
			#header .layout_layout5 .rb_menus_li:hover>a {
				color: #ec4249;
			}

			.layout_layout5 .rb_has_sub.rb_menus_li:hover .arrow::before {
				border-color: #ec4249;
			}

			.layout_layout5 li:hover>a,
			.layout_layout5 li>a:hover,
			#header .layout_layout5 li:hover>a,
			#header .layout_layout5 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout5 li>a:hover {
				color: #ec4249;
			}

			/*------------------------------------------------------*/
		}
	</style>

	<!-- end modules/rbthememenu/views/templates/hook/header.tpl -->
	<meta name="generator" content="Powered by Rubikthem1.0.0 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Module for PrestaShop." />

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://rubiktheme.com/demo/rb_davici_demo/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://rubiktheme.com/demo/rb_davici_demo/en/search?controller=search&s={s}",
				"query-input": "required name=s"
			}
		}
	</script>
</head>

<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled home-1">
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
			<div class="">
				<div class="row">
					<div id="content-wrapper" class="col-lg-12 col-xs-12 js-content-wrapper">
						<section id="main">
							<section id="content" class="page-home">
								<!-- begin module:rbthemedream/views/templates/hook/rb_content.tpl -->
								<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/hook/rb_content.tpl -->

								<!-- begin module:rbthemedream/views/templates/front/front.tpl -->
								<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/front/front.tpl -->
								<div id="rb" class="rb">
									<div id="rb-inner">
										<div id="rb-section-wrap">
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section rb-element rb-element-hagrcgw rb-top-section rb-section-full_width rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-6dcr4vm col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-a90c7s0 rb-widget-prestashop-widget-Rbthemeslider" data-element_type="prestashop-widget-Rbthemeslider">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-slider.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-slider.tpl -->
																			<link id="rb-skin-v6" rel="stylesheet" href="./modules/rbthemeslider/views/css/rbthemeslider/skins/v6/skine209.css?v=1.0.0" />
																			<script>
																				document.addEventListener(
																					"DOMContentLoaded",
																					function() {
																						if (
																							typeof jQuery.fn.RbSlider ==
																							"undefined"
																						) {
																							if (
																								window._RbSlider &&
																								window._RbSlider.showNotice
																							) {
																								window._RbSlider.showNotice(
																									"rbthemeslider_1",
																									"jquery"
																								);
																							}
																						} else {
																							jQuery(
																								"#rbthemeslider_1 .fancybox > img"
																							).unwrap();
																							jQuery(
																								"#rbthemeslider_1"
																							).RbSlider({
																								createdWith: "1.0.0",
																								sliderVersion: "1.0.0",
																								autoStart: false,
																								pauseOnHover: "disabled",
																								skin: "v6",
																								navStartStop: false,
																								showCircleTimer: false,
																								skinsPath: "https://rubiktheme.com/demo/rb_davici_demo/modules/rbthemeslider/views/css/rbthemeslider/skins/",
																								hideWelcomeMessage: true,
																							});
																						}
																					}
																				);
																			</script>
																			<div id="rbthemeslider_1" class="rb-wp-container fitvidsignore" style="
                                            max-width: 100%;
                                            width: 1920px;
                                            height: 1080px;
                                            margin: 0 auto;
                                            margin-bottom: 0px;
                                          ">
																				<div class="rb-slide" data-rb="kenburnsscale:1.2;">
																					<img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/slider5-2c905.jpg?v=1635081398" class="rb-bg" alt="Slide background" />
																					<p style="
                                                top: 270px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 3px;
                                                line-height: 65px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 275px;
                                                left: 270px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 20px;
                                                color: #000000;
                                                line-height: 30px;
                                                font-family: Poppins;
                                              " class="rb-l">
																						Davici Furniture <br />2021
																					</p>
																					<p style="
                                                top: 370px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 500;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 14px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						NEW ARRIVAL
																					</p>
																					<p style="
                                                top: 400px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 47px;
                                                height: 2px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 430px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 300;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 89px;
                                                line-height: 100px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						Chair <br />Collection
																					</p>
																					<a class="rb-l" href="#" target="_self"><span style="
                                                  top: 680px;
                                                  left: 253px;
                                                  text-align: center;
                                                  font-weight: 400;
                                                  font-style: normal;
                                                  text-decoration: none;
                                                  opacity: 1;
                                                  mix-blend-mode: normal;
                                                  background: #ff6f00;
                                                  color: #fff;
                                                  border-radius: 3px;
                                                  line-height: 50px;
                                                  font-family: Poppins;
                                                  width: 150px;
                                                  font-size: 18px;
                                                " class="">Shop now</span></a>
																				</div>
																				<div class="rb-slide" data-rb="kenburnsscale:1.2;">
																					<img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/slider5-39b0d.jpg?v=1635081399" class="rb-bg" alt="Slide background" title="Slide #1 copy" />
																					<p style="
                                                top: 270px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 3px;
                                                line-height: 65px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 275px;
                                                left: 270px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 20px;
                                                color: #000000;
                                                line-height: 30px;
                                                font-family: Poppins;
                                              " class="rb-l">
																						Davici Furniture <br />2021
																					</p>
																					<p style="
                                                top: 370px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 500;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 14px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						NEW ARRIVAL
																					</p>
																					<p style="
                                                top: 400px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 47px;
                                                height: 2px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 430px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 300;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 89px;
                                                line-height: 100px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						New <br />Collection
																					</p>
																					<a class="rb-l" href="#" target="_self">
																						<span style="
                                                  top: 680px;
                                                  left: 253px;
                                                  text-align: center;
                                                  font-weight: 400;
                                                  font-style: normal;
                                                  text-decoration: none;
                                                  opacity: 1;
                                                  mix-blend-mode: normal;
                                                  font-size: 18px;
                                                  background: #ff6f00;
                                                  color: #fff;
                                                  border-radius: 3px;
                                                  line-height: 50px;
                                                  font-family: Poppins;
                                                  width: 150px;
                                                " class="">Shop now</span>
																					</a>
																				</div>
																				<div class="rb-slide" data-rb="kenburnsscale:1.2;">
																					<img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/slider5-1feb7.jpg?v=1635380194" class="rb-bg" alt="Slide background" title="Slide #1 copy copy" />
																					<p style="
                                                top: 270px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 3px;
                                                line-height: 65px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 275px;
                                                left: 270px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 20px;
                                                color: #000000;
                                                line-height: 30px;
                                                font-family: Poppins;
                                              " class="rb-l">
																						Davici Furniture <br />2021
																					</p>
																					<p style="
                                                top: 370px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 500;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 14px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						NEW ARRIVAL
																					</p>
																					<p style="
                                                top: 400px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 400;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 0px;
                                                width: 47px;
                                                height: 2px;
                                                background: #000000;
                                              " class="rb-l">
																						Line
																					</p>
																					<p style="
                                                top: 430px;
                                                left: 253px;
                                                text-align: initial;
                                                font-weight: 300;
                                                font-style: normal;
                                                text-decoration: none;
                                                opacity: 1;
                                                mix-blend-mode: normal;
                                                font-size: 89px;
                                                line-height: 100px;
                                                font-family: Poppins;
                                                color: #000000;
                                              " class="rb-l">
																						Spring <br />Collection
																					</p>
																					<a class="rb-l" href="#" target="_self"><span style="
                                                  top: 680px;
                                                  left: 253px;
                                                  text-align: center;
                                                  font-weight: 400;
                                                  font-style: normal;
                                                  text-decoration: none;
                                                  opacity: 1;
                                                  mix-blend-mode: normal;
                                                  font-size: 18px;
                                                  background: #ff6f00;
                                                  color: #fff;
                                                  border-radius: 3px;
                                                  line-height: 50px;
                                                  font-family: Poppins;
                                                  width: 150px;
                                                " class="">Shop now</span></a>
																				</div>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-slider.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-slider.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-category rb-section rb-element rb-element-iy4z42s rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="box-title style-1 rb-column rb-element rb-element-a9jrh9x col-md-4 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-eanyq86 rb-widget-heading" data-element_type="heading">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-heading-title rb-size-default none">
																				<span>
																					<h2>
																						Shop <br />by categories
																					</h2>
																				</span>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-g8p01ak rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper">
																					<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512 512" width="512">
																						<g>
																							<path d="m492 235.999h-21.519v-118.759c0-64.647-52.593-117.24-117.24-117.24h-194.482c-64.647 0-117.24 52.593-117.24 117.24v118.759h-21.519c-11.046 0-20 8.954-20 20v155.999c0 11.046 8.954 20 20 20h88.606l-26.358 50.787c-5.088 9.804-1.265 21.876 8.539 26.964 9.761 5.067 21.854 1.307 26.965-8.539l35.92-69.213h204.656l35.92 69.213c5.112 9.85 17.205 13.604 26.965 8.539 9.804-5.088 13.627-17.16 8.539-26.964l-26.358-50.787h88.606c11.046 0 20-8.954 20-20v-155.999c0-11.046-8.954-20-20-20zm-410.481-118.759c0-42.59 34.649-77.24 77.24-77.24h194.482c42.591 0 77.24 34.65 77.24 77.24v118.759h-18.481c-11.046 0-20 8.954-20 20v56h-272v-56c0-11.046-8.954-20-20-20h-18.481zm390.481 274.758c-52.382 0-377.882 0-432 0v-116h40v56c0 11.046 8.954 20 20 20h312c11.046 0 20-8.954 20-20v-56h40z"></path>
																						</g>
																					</svg>
																				</div>
																				<div class="rb-text-editor">
																					200 +<br />Unique products
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-w7knvyb rb-widget-button" data-element_type="button">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-button.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-button.tpl -->
																			<div class="rb-button-wrapper">
																				<a href="#" class="rb-button-link rb-button btn rb-size-small btn-secondary btn-traditional">
																					<span class="rb-button-content-wrapper">
																						<span class="rb-align-icon-right rb-button-icon">
																							<i class="fa fa-caret-right"></i>
																						</span>

																						<span class="rb-button-text">All categories</span>
																					</span>
																				</a>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-button.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-button.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-r8rzwei col-md-8 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-et23v20 rb-widget-image-carousel" data-element_type="image-carousel">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-image-carousel-wrapper rb-slick-slider">
																				<div class="rb-image-carousel slick-arrows-inside" data-slider_options='{"responsive":[{"breakpoint":480,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"slidesToShow":3,"slidesToScroll":1,"autoplaySpeed":5000,"autoplay":false,"infinite":true,"pauseOnHover":false,"arrows":true,"dots":false}'>
																					<div>
																						<div class="slick-slide-inner">
																							<a href="#"><img class="slick-slide-image" data-lazy="./cdn.shopify.com/s/files/1/0550/8336/8541/files/12015.jpg?v=1636000765" />
																								<div class="rb-image-loading"></div>
																							</a>
																							<div>Dining chair</div>
																						</div>
																					</div>
																					<div>
																						<div class="slick-slide-inner">
																							<a href="#"><img class="slick-slide-image" data-lazy="./cdn.shopify.com/s/files/1/0550/8336/8541/files/22015.jpg?v=1636000765" />
																								<div class="rb-image-loading"></div>
																							</a>
																							<div>Sofas</div>
																						</div>
																					</div>
																					<div>
																						<div class="slick-slide-inner">
																							<a href="#"><img class="slick-slide-image" data-lazy="./cdn.shopify.com/s/files/1/0550/8336/8541/files/32015.jpg?v=1636000765" />
																								<div class="rb-image-loading"></div>
																							</a>
																							<div>Table</div>
																						</div>
																					</div>
																					<div>
																						<div class="slick-slide-inner">
																							<a href="#"><img class="slick-slide-image" data-lazy="./cdn.shopify.com/s/files/1/0550/8336/8541/files/42015.jpg?v=1636000765" />
																								<div class="rb-image-loading"></div>
																							</a>
																							<div>Wall Lamp</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-banner rb-section rb-element rb-element-5d7d0l8 rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="center style-1 rb-column rb-element rb-element-oo11k2e col-md-6 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-st6va0f rb-widget-banner" data-element_type="banner">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-dd-banner">
																				<figure class="rb-dd-banner-img">
																					<span class="rb-dd-banner-overlay"></span><img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/banner1-h1602d.jpg?v=1636000484" alt="" />
																				</figure>
																				<div class="rb-dd-banner-content">
																					<span class="rb-dd-banner-subtitle rb-dd-banner-description">30% off all order</span>
																					<h4 class="rb-dd-banner-title">
																						Living Room
																					</h4>
																					<div>
																						<span class="rb-button-link rb-button btn btn-primary"><span class="rb-button-text">Shop now</span></span>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="center style-1 rb-column rb-element rb-element-jxlsrlu col-md-6 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-057fikm rb-widget-banner" data-element_type="banner">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-dd-banner">
																				<figure class="rb-dd-banner-img">
																					<span class="rb-dd-banner-overlay"></span><img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/banner2-h1602d.jpg?v=1636000484" alt="" />
																				</figure>
																				<div class="rb-dd-banner-content">
																					<span class="rb-dd-banner-subtitle rb-dd-banner-description">30% off all order</span>
																					<h4 class="rb-dd-banner-title">
																						Dining Room
																					</h4>
																					<div>
																						<span class="rb-button-link rb-button btn btn-primary"><span class="rb-button-text">Shop now</span></span>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-tabproduct rb-section rb-element rb-element-cgasvrp rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-30pdy9j col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-bde8xmg rb-widget-heading" data-element_type="heading">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<h2 class="rb-heading-title rb-size-default none">
																				<span>Hot Products</span>
																			</h2>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-8apq3o0 rb-widget-prestashop-widget-ProductsListTabs" data-element_type="prestashop-widget-ProductsListTabs">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-product-tab.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-product-tab.tpl -->
																			<div class="tabs rb-products-tabs">
																				<ul class="nav nav-tabs">
																					<li class="nav-item">
																						<a class="nav-link active" data-toggle="tab" href="#ie-353a2e55-ptab-1">
																							Latest Products
																						</a>
																					</li>
																					<li class="nav-item">
																						<a class="nav-link" data-toggle="tab" href="#ie-353a2e55-ptab-2">
																							Top Rating
																						</a>
																					</li>
																					<li class="nav-item">
																						<a class="nav-link" data-toggle="tab" href="#ie-353a2e55-ptab-3">
																							Best Sellers
																						</a>
																					</li>
																				</ul>

																				<div id="products" class="tab-content">
																					<div class="rb-products-list tab-pane active" id="ie-353a2e55-ptab-1">
																						<div class="products rb-products-carousel slick-products-carousel products-grid slick-arrows-middle" data-slider_options='{"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":991,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":568,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"dots":false,"infinite":false,"slidesToShow":4,"slidesToScroll":4,"rows":2,"autoplay":false,"arrows":false}'>

																							<?php
																							$limit = 9;
																							if (isset($_POST["setPage"])) {
																								$pageno = $_POST["pageNumber"];
																								$start = ($pageno * $limit) - $limit;
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
																									echo "
			
																									<div class='product'>
																									<article class='product-miniature js-product-miniature' data-id-product='1' data-id-product-attribute='1'>
																										<div class='thumbnail-container'>
																											<div class='product-image'>
																												<a href='outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white' class='thumbnail product-thumbnail'>
																													<img alt='Design Living Room Sofa' class='img-fluid rb-image image-cover' src='product_images/$pro_image' data-full-size-image-url='./24-thickbox_default/design-living-room-sofa.jpg' loading='lazy' />

																													<div class='product-hover'>
																														<img class='img-fluid rb-image image-hover' src='./166-home_default/design-living-room-sofa.jpg' title='Design Living Room Sofa' width='700' height='700' loading='lazy' />
																													</div>
																												</a>

																												<ul class='product-flags'>
																													<li class='product-flag discount'>
																														-20%
																													</li>
																													<li class='product-flag new'>
																														New product
																													</li>
																													<span class='sr-only'>Price</span>
																												</ul>

																												<div class='product-quickview hidden-sm-down'>
																													<a class='rb-quick-view rb-btn-product' href='#' data-link-action='quickview'>
																														<i class='icon-search'></i>
																														<span class='icon-title'>Quick view</span>
																													</a>
																												</div>

																												<div class='product-quick-view' style='display: none'>
																													<a class='quick-view rb-btn-product' href='#' data-link-action='quickview'>
																														<i class='icon-search search'></i>
																														<span class='icon-title'>Quick view</span>
																													</a>
																												</div>

																												<div class='rb-ajax-loading'>
																													<div class='cssload-container'>
																														<div class='cssload-speeding-wheel'></div>
																													</div>
																												</div>
																												<div class='functional-buttons clearfix'>
																													<div class='product-compare'>
																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																														<a href='compare.html' data-id_product='1' title='Product Comparison' class='rb-compare-link rb-btn-product' rel='nofollow'>
																															<i class='icon-random'></i>
																															<span class='icon-title'>Add
																																Compare</span>
																														</a>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													</div>

																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																													<div class='rb-wishlist'>
																														<a class='rb-wishlist-link rb-btn-product' href='#' data-id-wishlist='' data-id-product='1' data-id-product-attribute='1' data-id_wishlist_product='0' title='Add to Wishlist'>
																															<i class='icon-btn-product icon-wishlist icon-heart'></i>
																															<span class='icon-title'>Add to
																																Wishlist</span>
																														</a>
																													</div>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																													<div class='product-add-cart'>
																														<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																														<form action='https://rubiktheme.com/demo/rb_davici_demo/en/cart' method='post' class='add-to-cart-or-refresh'>
																															<input type='hidden' name='token' value='bf0ba928fbfcc103ff31ff1e6c6b511b' />
																															<input type='hidden' name='id_product' value='1' class='product_page_product_id' />
																															<input type='hidden' name='qty' value='1' />

																															<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																															<div class='product-add-to-cart-rb'>
																																<div class='product-quantity'>
																																	<div class='add'>
																																		<button class='btn rb-btn-product add-to-cart' title='Add to cart' data-button-action='add-to-cart' type='submit'>
																																			Add To
																																			Cart
																																		</button>

																																		<span class='product-availability hidden'>
																																		</span>
																																	</div>
																																</div>

																																<p class='product-minimal-quantity hidden'></p>
																															</div>
																															<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														</form>
																														<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													</div>
																												</div>
																												<!-- end functional-buttons -->

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->
																												<div class='rb-product-countdown' data-expired='EXPIRED TIME'>
																													<h2 class='rb-counttitle'>
																														End in :
																													</h2>
																													<ul class='rb-product-clock' data-time='2023-03-31 00:00:00'>
																														<li>
																															<span class='rb-days'></span>
																															<span>d</span>
																														</li>

																														<li>
																															<span class='rb-hours'></span>
																															<span>h</span>
																														</li>

																														<li>
																															<span class='rb-minutes'></span>
																															<span>m</span>
																														</li>

																														<li>
																															<span class='rb-seconds'></span>
																															<span>s</span>
																														</li>
																													</ul>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->

																												<div class='highlighted-informations hidden-sm-down'>
																													<div class='variant-links'>
																														<a href='outdoor/1-3-design-living-room-sofa.html#/2-size-m/8-color-white' title='White' aria-label='White'>
																															<span class='color' style='
																																		background-color: #ffffff;
																																	'></span>
																														</a>
																														<a href='outdoor/1-2-design-living-room-sofa.html#/1-size-s/11-color-black' title='Black' aria-label='Black'>
																															<span class='color' style='
																																		background-color: #434a54;
																																	'></span>
																														</a>
																														<span class='js-count count'></span>
																													</div>
																												</div>
																												<!-- end highlighted-informations -->
																											</div>
																											<!-- end product-image -->

																											<div class='product-meta'>
																												<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																												<div class='star_content clearfix' itemprop='reviewRating' itemscope itemtype='https://schema.org/Rating'>
																													<div class='star'></div>
																													<div class='star'></div>
																													<div class='star'></div>
																													<div class='star'></div>
																													<div class='star'></div>
																													<meta itemprop='worstRating' content='0' />
																													<meta itemprop='ratingValue' content='0' />
																													<meta itemprop='bestRating' content='5' />
																												</div>

																												<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																												<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																												<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																												<div class='product-list-reviews' data-id='1' data-url='module/productcomments/CommentGrade.json'>
																													<div class='grade-stars small-stars'></div>
																													<div class='comments-nb'></div>
																												</div>

																												<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																												<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																												<h3 class='h3 product-title'>
																													<a href='outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white' content='outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white'>
																													$pro_title</a>
																												</h3>

																												<div class='product-price-and-shipping'>
																													<span class='sr-only'>Regular price</span>
																													<span class='regular-price'>$23.90</span>
																													<span class='discount-percentage discount-product'>-20%</span>

																													<span class='price' aria-label='Price'>
																													$pro_price
																													</span>
																												</div>
																											</div>
																											<!-- end product-meta -->
																										</div>
																										<!-- end thumbnail-container -->
																									</article>
																								</div>
			";
																								}
																							}
																							?>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Design Living Room Sofa" class="img-fluid rb-image image-cover" src="./24-home_default/design-living-room-sofa.jpg" data-full-size-image-url="./24-thickbox_default/design-living-room-sofa.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./166-home_default/design-living-room-sofa.jpg" title="Design Living Room Sofa" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag discount">
																													-20%
																												</li>
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="1" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="1" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->
																											<div class="rb-product-countdown" data-expired="EXPIRED TIME">
																												<h2 class="rb-counttitle">
																													End in :
																												</h2>
																												<ul class="rb-product-clock" data-time="2023-03-31 00:00:00">
																													<li>
																														<span class="rb-days"></span>
																														<span>d</span>
																													</li>

																													<li>
																														<span class="rb-hours"></span>
																														<span>h</span>
																													</li>

																													<li>
																														<span class="rb-minutes"></span>
																														<span>m</span>
																													</li>

																													<li>
																														<span class="rb-seconds"></span>
																														<span>s</span>
																													</li>
																												</ul>
																											</div>
																											<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="outdoor/1-3-design-living-room-sofa.html#/2-size-m/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="outdoor/1-2-design-living-room-sofa.html#/1-size-s/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="1" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white" content="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white">Design Living Room
																													Sofa</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="sr-only">Regular price</span>
																												<span class="regular-price">$23.90</span>
																												<span class="discount-percentage discount-product">-20%</span>

																												<span class="price" aria-label="Price">
																													$19.12
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Summer Chair" class="img-fluid rb-image image-cover" src="./30-home_default/armen-living-summer-chair.jpg" data-full-size-image-url="./30-thickbox_default/armen-living-summer-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./31-home_default/armen-living-summer-chair.jpg" title="Armen Living Summer Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag discount">
																													-20%
																												</li>
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="2" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="2" data-id-product-attribute="9" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="2" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->
																											<div class="rb-product-countdown" data-expired="EXPIRED TIME">
																												<h2 class="rb-counttitle">
																													End in :
																												</h2>
																												<ul class="rb-product-clock" data-time="2022-04-30 00:00:00">
																													<li>
																														<span class="rb-days"></span>
																														<span>d</span>
																													</li>

																													<li>
																														<span class="rb-hours"></span>
																														<span>h</span>
																													</li>

																													<li>
																														<span class="rb-minutes"></span>
																														<span>m</span>
																													</li>

																													<li>
																														<span class="rb-seconds"></span>
																														<span>s</span>
																													</li>
																												</ul>
																											</div>
																											<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="bed-bath/2-93-armen-living-summer-chair.html#/9-color-off_white" title="Off White" aria-label="Off White">
																														<span class="color" style="
                                                                  background-color: #faebd7;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-94-armen-living-summer-chair.html#/10-color-red" title="Red" aria-label="Red">
																														<span class="color" style="
                                                                  background-color: #e84c3d;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-95-armen-living-summer-chair.html#/14-color-blue" title="Blue" aria-label="Blue">
																														<span class="color" style="
                                                                  background-color: #5d9cec;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-96-armen-living-summer-chair.html#/15-color-green" title="Green" aria-label="Green">
																														<span class="color" style="
                                                                  background-color: #a0d468;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="2" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s" content="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s">Armen Living Summer
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="sr-only">Regular price</span>
																												<span class="regular-price">$35.90</span>
																												<span class="discount-percentage discount-product">-20%</span>

																												<span class="price" aria-label="Price">
																													$28.72
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="13">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Modern Swivel Accent Chair" class="img-fluid rb-image image-cover" src="./36-home_default/modern-swivel-accent-chair.jpg" data-full-size-image-url="./36-thickbox_default/modern-swivel-accent-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./37-home_default/modern-swivel-accent-chair.jpg" title="Modern Swivel Accent Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="3" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="3" data-id-product-attribute="13" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="3" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="3" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm" content="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm">Modern Swivel
																													Accent Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$29.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="4" data-id-product-attribute="16">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/4-16-cache-pendant-xl.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Cache pendant xl" class="img-fluid rb-image image-cover" src="./42-home_default/cache-pendant-xl.jpg" data-full-size-image-url="./42-thickbox_default/cache-pendant-xl.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./43-home_default/cache-pendant-xl.jpg" title="Cache pendant xl" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="4" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="4" data-id-product-attribute="16" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="4" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="4" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/4-16-cache-pendant-xl.html#/19-dimension-40x60cm" content="home/4-16-cache-pendant-xl.html#/19-dimension-40x60cm">Cache pendant xl</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$29.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="19">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Wooden Starburst Wall..." class="img-fluid rb-image image-cover" src="./48-home_default/wooden-starburst-wall-clock-non.jpg" data-full-size-image-url="./48-thickbox_default/wooden-starburst-wall-clock-non.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./49-home_default/wooden-starburst-wall-clock-non.jpg" title="Wooden Starburst Wall Clock-Non" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="5" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="5" data-id-product-attribute="19" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="5" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="5" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm" content="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm">Wooden Starburst
																													Wall Clock-Non</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$29.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/6-modern-sofa-couch-with-wood.html" class="thumbnail product-thumbnail">
																												<img alt="Modern Sofa Couch with Wood" class="img-fluid rb-image image-cover" src="./54-home_default/modern-sofa-couch-with-wood.jpg" data-full-size-image-url="./54-thickbox_default/modern-sofa-couch-with-wood.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./55-home_default/modern-sofa-couch-with-wood.jpg" title="Modern Sofa Couch with Wood" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="6" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="6" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="6" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="6" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/6-modern-sofa-couch-with-wood.html" content="wall-lamp/6-modern-sofa-couch-with-wood.html">Modern Sofa Couch
																													with Wood</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/7-cph-20-round-table.html" class="thumbnail product-thumbnail">
																												<img alt="CPH 20 round table" class="img-fluid rb-image image-cover" src="./60-home_default/cph-20-round-table.jpg" data-full-size-image-url="./60-thickbox_default/cph-20-round-table.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./61-home_default/cph-20-round-table.jpg" title="CPH 20 round table" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="7" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="7" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="7" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="7" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/7-cph-20-round-table.html" content="wall-lamp/7-cph-20-round-table.html">CPH 20 round
																													table</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/8-armen-living-jaguar-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Jaguar Chair" class="img-fluid rb-image image-cover" src="./69-home_default/armen-living-jaguar-chair.jpg" data-full-size-image-url="./69-thickbox_default/armen-living-jaguar-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./65-home_default/armen-living-jaguar-chair.jpg" title="Armen Living Jaguar Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="8" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="8" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="8" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="8" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/8-armen-living-jaguar-chair.html" content="wall-lamp/8-armen-living-jaguar-chair.html">Armen Living Jaguar
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="22">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Stone Clock Wall clock" class="img-fluid rb-image image-cover" src="./71-home_default/stone-clock-wall-clock.jpg" data-full-size-image-url="./71-thickbox_default/stone-clock-wall-clock.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./72-home_default/stone-clock-wall-clock.jpg" title="Stone Clock Wall clock" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="9" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="9" data-id-product-attribute="22" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="9" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/9-23-stone-clock-wall-clock.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="9" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" content="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white">Stone Clock Wall
																													clock</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="24">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Modern clock" class="img-fluid rb-image image-cover" src="./76-home_default/modern-clock.jpg" data-full-size-image-url="./76-thickbox_default/modern-clock.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./77-home_default/modern-clock.jpg" title="Modern clock" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="10" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="10" data-id-product-attribute="24" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="10" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/10-25-modern-clock.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="10" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" content="wall-lamp/10-24-modern-clock.html#/8-color-white">Modern clock</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="11" data-id-product-attribute="26">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Norm 06 Lamp Medium White" class="img-fluid rb-image image-cover" src="./82-home_default/norm-06-lamp-medium-white.jpg" data-full-size-image-url="./82-thickbox_default/norm-06-lamp-medium-white.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./83-home_default/norm-06-lamp-medium-white.jpg" title="Norm 06 Lamp Medium White" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="11" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="11" data-id-product-attribute="26" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="11" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/11-27-norm-06-lamp-medium-white.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="11" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" content="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white">Norm 06 Lamp Medium
																													White</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/12-armen-living-crimson-faux-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Crimson Faux..." class="img-fluid rb-image image-cover" src="./88-home_default/armen-living-crimson-faux-chair.jpg" data-full-size-image-url="./88-thickbox_default/armen-living-crimson-faux-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./89-home_default/armen-living-crimson-faux-chair.jpg" title="Armen Living Crimson Faux Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="12" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="12" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="12" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="12" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/12-armen-living-crimson-faux-chair.html" content="home/12-armen-living-crimson-faux-chair.html">Armen Living
																													Crimson Faux
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$9.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>
																						</div>
																					</div>
																					<div class="rb-products-list tab-pane" id="ie-353a2e55-ptab-2">
																						<div class="products rb-products-carousel slick-products-carousel products-grid slick-arrows-middle" data-slider_options='{"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":991,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":568,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"dots":false,"infinite":false,"slidesToShow":4,"slidesToScroll":4,"rows":2,"autoplay":false,"arrows":false}'>
																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="21" data-id-product-attribute="68">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/21-68-sugar-bowl.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																												<img alt="Sugar Bowl" class="img-fluid rb-image image-cover" src="./161-home_default/sugar-bowl.jpg" data-full-size-image-url="./161-thickbox_default/sugar-bowl.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./157-home_default/sugar-bowl.jpg" title="Sugar Bowl" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="21" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="21" data-id-product-attribute="68" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="21" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="21" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/21-68-sugar-bowl.html#/22-paper_type-ruled" content="home/21-68-sugar-bowl.html#/22-paper_type-ruled">Sugar Bowl</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$12.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="20" data-id-product-attribute="64">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/20-64-modern-fabric-club-chair.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																												<img alt="Modern Fabric Club Chair" class="img-fluid rb-image image-cover" src="./140-home_default/modern-fabric-club-chair.jpg" data-full-size-image-url="./140-thickbox_default/modern-fabric-club-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./139-home_default/modern-fabric-club-chair.jpg" title="Modern Fabric Club Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="20" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="20" data-id-product-attribute="64" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="20" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="20" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/20-64-modern-fabric-club-chair.html#/22-paper_type-ruled" content="home/20-64-modern-fabric-club-chair.html#/22-paper_type-ruled">Modern Fabric Club
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$12.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="19" data-id-product-attribute="51">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/19-51-plastic-chair-with-wooden-legs.html#/1-size-s/10-color-red/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Plastic Chair with Wooden Legs" class="img-fluid rb-image image-cover" src="./130-home_default/plastic-chair-with-wooden-legs.jpg" data-full-size-image-url="./130-thickbox_default/plastic-chair-with-wooden-legs.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./131-home_default/plastic-chair-with-wooden-legs.jpg" title="Plastic Chair with Wooden Legs" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="19" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="19" data-id-product-attribute="51" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="19" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit" disabled>
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="home/19-51-plastic-chair-with-wooden-legs.html#/1-size-s/10-color-red/19-dimension-40x60cm" title="Red" aria-label="Red">
																														<span class="color" style="
                                                                  background-color: #e84c3d;
                                                                "></span>
																													</a>
																													<a href="home/19-52-plastic-chair-with-wooden-legs.html#/2-size-m/14-color-blue/20-dimension-60x90cm" title="Blue" aria-label="Blue">
																														<span class="color" style="
                                                                  background-color: #5d9cec;
                                                                "></span>
																													</a>
																													<a href="home/19-53-plastic-chair-with-wooden-legs.html#/1-size-s/15-color-green/21-dimension-80x120cm" title="Green" aria-label="Green">
																														<span class="color" style="
                                                                  background-color: #a0d468;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="19" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/19-51-plastic-chair-with-wooden-legs.html#/1-size-s/10-color-red/19-dimension-40x60cm" content="home/19-51-plastic-chair-with-wooden-legs.html#/1-size-s/10-color-red/19-dimension-40x60cm">Plastic Chair with
																													Wooden Legs</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$13.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="36">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																												<img alt="Folding Tables &amp; Chairs" class="img-fluid rb-image image-cover" src="./124-home_default/folding-tables-chairs.jpg" data-full-size-image-url="./124-thickbox_default/folding-tables-chairs.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./125-home_default/folding-tables-chairs.jpg" title="Folding Tables &amp; Chairs" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="18" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="18" data-id-product-attribute="36" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="18" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="home/18-97-folding-tables-chairs.html#/10-color-red" title="Red" aria-label="Red">
																														<span class="color" style="
                                                                  background-color: #e84c3d;
                                                                "></span>
																													</a>
																													<a href="home/18-69-folding-tables-chairs.html#/1-size-s/13-color-orange" title="Orange" aria-label="Orange">
																														<span class="color" style="
                                                                  background-color: #f39c11;
                                                                "></span>
																													</a>
																													<a href="home/18-70-folding-tables-chairs.html#/1-size-s/14-color-blue" title="Blue" aria-label="Blue">
																														<span class="color" style="
                                                                  background-color: #5d9cec;
                                                                "></span>
																													</a>
																													<a href="home/18-71-folding-tables-chairs.html#/1-size-s/15-color-green" title="Green" aria-label="Green">
																														<span class="color" style="
                                                                  background-color: #a0d468;
                                                                "></span>
																													</a>
																													<a href="home/18-72-folding-tables-chairs.html#/1-size-s/16-color-yellow" title="Yellow" aria-label="Yellow">
																														<span class="color" style="
                                                                  background-color: #f1c40f;
                                                                "></span>
																													</a>
																													<a href="home/18-73-folding-tables-chairs.html#/1-size-s/17-color-brown" title="Brown" aria-label="Brown">
																														<span class="color" style="
                                                                  background-color: #964b00;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="18" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled" content="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled">Folding Tables
																													&amp; Chairs</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$12.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="17" data-id-product-attribute="32">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/17-32-lyngby-porcelaen-vase-porcelain.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																												<img alt="Lyngby Porcelæn Vase Porcelain" class="img-fluid rb-image image-cover" src="./143-home_default/lyngby-porcelaen-vase-porcelain.jpg" data-full-size-image-url="./143-thickbox_default/lyngby-porcelaen-vase-porcelain.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./144-home_default/lyngby-porcelaen-vase-porcelain.jpg" title="Lyngby Porcelæn Vase Porcelain" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="17" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="17" data-id-product-attribute="32" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="17" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="17" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/17-32-lyngby-porcelaen-vase-porcelain.html#/22-paper_type-ruled" content="home/17-32-lyngby-porcelaen-vase-porcelain.html#/22-paper_type-ruled">Lyngby Porcelæn
																													Vase Porcelain</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$12.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="16" data-id-product-attribute="28">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/16-28-table-clock-for-living-room.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																												<img alt="Table Clock for Living Room" class="img-fluid rb-image image-cover" src="./149-home_default/table-clock-for-living-room.jpg" data-full-size-image-url="./149-thickbox_default/table-clock-for-living-room.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./150-home_default/table-clock-for-living-room.jpg" title="Table Clock for Living Room" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="16" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="16" data-id-product-attribute="28" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="16" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="16" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/16-28-table-clock-for-living-room.html#/22-paper_type-ruled" content="home/16-28-table-clock-for-living-room.html#/22-paper_type-ruled">Table Clock for
																													Living Room</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$12.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="15" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/15-globe-electric-belmont-desk-lamp.html" class="thumbnail product-thumbnail">
																												<img alt="Globe Electric Belmont Desk..." class="img-fluid rb-image image-cover" src="./106-home_default/globe-electric-belmont-desk-lamp.jpg" data-full-size-image-url="./106-thickbox_default/globe-electric-belmont-desk-lamp.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./107-home_default/globe-electric-belmont-desk-lamp.jpg" title="Globe Electric Belmont Desk Lamp" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<li class="product-flag pack">
																													Pack
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="15" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="15" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="15" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="15" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/15-globe-electric-belmont-desk-lamp.html" content="wall-lamp/15-globe-electric-belmont-desk-lamp.html">Globe Electric
																													Belmont Desk Lamp</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$35.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="14" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/14-modern-fabric-arm-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Modern Fabric Arm Chair" class="img-fluid rb-image image-cover" src="./100-home_default/modern-fabric-arm-chair.jpg" data-full-size-image-url="./100-thickbox_default/modern-fabric-arm-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./101-home_default/modern-fabric-arm-chair.jpg" title="Modern Fabric Arm Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="14" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="14" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="14" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="14" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/14-modern-fabric-arm-chair.html" content="home/14-modern-fabric-arm-chair.html">Modern Fabric Arm
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$9.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="13" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/13-carronade-pendant-large.html" class="thumbnail product-thumbnail">
																												<img alt="Carronade pendant large" class="img-fluid rb-image image-cover" src="./94-home_default/carronade-pendant-large.jpg" data-full-size-image-url="./94-thickbox_default/carronade-pendant-large.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./95-home_default/carronade-pendant-large.jpg" title="Carronade pendant large" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="13" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="13" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="13" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="13" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/13-carronade-pendant-large.html" content="home/13-carronade-pendant-large.html">Carronade pendant
																													large</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$9.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="11" data-id-product-attribute="26">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Norm 06 Lamp Medium White" class="img-fluid rb-image image-cover" src="./82-home_default/norm-06-lamp-medium-white.jpg" data-full-size-image-url="./82-thickbox_default/norm-06-lamp-medium-white.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./83-home_default/norm-06-lamp-medium-white.jpg" title="Norm 06 Lamp Medium White" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="11" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="11" data-id-product-attribute="26" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="11" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/11-27-norm-06-lamp-medium-white.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="11" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" content="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white">Norm 06 Lamp Medium
																													White</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/12-armen-living-crimson-faux-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Crimson Faux..." class="img-fluid rb-image image-cover" src="./88-home_default/armen-living-crimson-faux-chair.jpg" data-full-size-image-url="./88-thickbox_default/armen-living-crimson-faux-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./89-home_default/armen-living-crimson-faux-chair.jpg" title="Armen Living Crimson Faux Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="12" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="12" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="12" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="12" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/12-armen-living-crimson-faux-chair.html" content="home/12-armen-living-crimson-faux-chair.html">Armen Living
																													Crimson Faux
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$9.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="24">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Modern clock" class="img-fluid rb-image image-cover" src="./76-home_default/modern-clock.jpg" data-full-size-image-url="./76-thickbox_default/modern-clock.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./77-home_default/modern-clock.jpg" title="Modern clock" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="10" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="10" data-id-product-attribute="24" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="10" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/10-25-modern-clock.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="10" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" content="wall-lamp/10-24-modern-clock.html#/8-color-white">Modern clock</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>
																						</div>
																					</div>
																					<div class="rb-products-list tab-pane" id="ie-353a2e55-ptab-3">
																						<div class="products rb-products-carousel slick-products-carousel products-grid slick-arrows-middle" data-slider_options='{"responsive":[{"breakpoint":1199,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":991,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":568,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"dots":false,"infinite":false,"slidesToShow":4,"slidesToScroll":4,"rows":2,"autoplay":false,"arrows":false}'>
																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="7" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/7-cph-20-round-table.html" class="thumbnail product-thumbnail">
																												<img alt="CPH 20 round table" class="img-fluid rb-image image-cover" src="./60-home_default/cph-20-round-table.jpg" data-full-size-image-url="./60-thickbox_default/cph-20-round-table.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./61-home_default/cph-20-round-table.jpg" title="CPH 20 round table" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="7" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="7" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="7" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="7" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/7-cph-20-round-table.html" content="wall-lamp/7-cph-20-round-table.html">CPH 20 round
																													table</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="6" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/6-modern-sofa-couch-with-wood.html" class="thumbnail product-thumbnail">
																												<img alt="Modern Sofa Couch with Wood" class="img-fluid rb-image image-cover" src="./54-home_default/modern-sofa-couch-with-wood.jpg" data-full-size-image-url="./54-thickbox_default/modern-sofa-couch-with-wood.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./55-home_default/modern-sofa-couch-with-wood.jpg" title="Modern Sofa Couch with Wood" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="6" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="6" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="6" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="6" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/6-modern-sofa-couch-with-wood.html" content="wall-lamp/6-modern-sofa-couch-with-wood.html">Modern Sofa Couch
																													with Wood</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="8" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/8-armen-living-jaguar-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Jaguar Chair" class="img-fluid rb-image image-cover" src="./69-home_default/armen-living-jaguar-chair.jpg" data-full-size-image-url="./69-thickbox_default/armen-living-jaguar-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./65-home_default/armen-living-jaguar-chair.jpg" title="Armen Living Jaguar Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="8" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="8" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="8" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="8" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/8-armen-living-jaguar-chair.html" content="wall-lamp/8-armen-living-jaguar-chair.html">Armen Living Jaguar
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$11.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="10" data-id-product-attribute="24">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Modern clock" class="img-fluid rb-image image-cover" src="./76-home_default/modern-clock.jpg" data-full-size-image-url="./76-thickbox_default/modern-clock.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./77-home_default/modern-clock.jpg" title="Modern clock" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="10" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="10" data-id-product-attribute="24" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="10" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/10-25-modern-clock.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="10" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/10-24-modern-clock.html#/8-color-white" content="wall-lamp/10-24-modern-clock.html#/8-color-white">Modern clock</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="9" data-id-product-attribute="22">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Stone Clock Wall clock" class="img-fluid rb-image image-cover" src="./71-home_default/stone-clock-wall-clock.jpg" data-full-size-image-url="./71-thickbox_default/stone-clock-wall-clock.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./72-home_default/stone-clock-wall-clock.jpg" title="Stone Clock Wall clock" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="9" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="9" data-id-product-attribute="22" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="9" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/9-23-stone-clock-wall-clock.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="9" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white" content="wall-lamp/9-22-stone-clock-wall-clock.html#/8-color-white">Stone Clock Wall
																													clock</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="11" data-id-product-attribute="26">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Norm 06 Lamp Medium White" class="img-fluid rb-image image-cover" src="./82-home_default/norm-06-lamp-medium-white.jpg" data-full-size-image-url="./82-thickbox_default/norm-06-lamp-medium-white.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./83-home_default/norm-06-lamp-medium-white.jpg" title="Norm 06 Lamp Medium White" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="11" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="11" data-id-product-attribute="26" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="11" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="wall-lamp/11-27-norm-06-lamp-medium-white.html#/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="11" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white" content="wall-lamp/11-26-norm-06-lamp-medium-white.html#/8-color-white">Norm 06 Lamp Medium
																													White</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$18.90
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="15" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="wall-lamp/15-globe-electric-belmont-desk-lamp.html" class="thumbnail product-thumbnail">
																												<img alt="Globe Electric Belmont Desk..." class="img-fluid rb-image image-cover" src="./106-home_default/globe-electric-belmont-desk-lamp.jpg" data-full-size-image-url="./106-thickbox_default/globe-electric-belmont-desk-lamp.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./107-home_default/globe-electric-belmont-desk-lamp.jpg" title="Globe Electric Belmont Desk Lamp" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<li class="product-flag pack">
																													Pack
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="15" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="15" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="15" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="15" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="wall-lamp/15-globe-electric-belmont-desk-lamp.html" content="wall-lamp/15-globe-electric-belmont-desk-lamp.html">Globe Electric
																													Belmont Desk Lamp</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$35.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white" class="thumbnail product-thumbnail">
																												<img alt="Design Living Room Sofa" class="img-fluid rb-image image-cover" src="./24-home_default/design-living-room-sofa.jpg" data-full-size-image-url="./24-thickbox_default/design-living-room-sofa.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./166-home_default/design-living-room-sofa.jpg" title="Design Living Room Sofa" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag discount">
																													-20%
																												</li>
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="1" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="1" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->
																											<div class="rb-product-countdown" data-expired="EXPIRED TIME">
																												<h2 class="rb-counttitle">
																													End in :
																												</h2>
																												<ul class="rb-product-clock" data-time="2023-03-31 00:00:00">
																													<li>
																														<span class="rb-days"></span>
																														<span>d</span>
																													</li>

																													<li>
																														<span class="rb-hours"></span>
																														<span>h</span>
																													</li>

																													<li>
																														<span class="rb-minutes"></span>
																														<span>m</span>
																													</li>

																													<li>
																														<span class="rb-seconds"></span>
																														<span>s</span>
																													</li>
																												</ul>
																											</div>
																											<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="outdoor/1-3-design-living-room-sofa.html#/2-size-m/8-color-white" title="White" aria-label="White">
																														<span class="color" style="
                                                                  background-color: #ffffff;
                                                                "></span>
																													</a>
																													<a href="outdoor/1-2-design-living-room-sofa.html#/1-size-s/11-color-black" title="Black" aria-label="Black">
																														<span class="color" style="
                                                                  background-color: #434a54;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="1" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white" content="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white">Design Living Room
																													Sofa</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="sr-only">Regular price</span>
																												<span class="regular-price">$23.90</span>
																												<span class="discount-percentage discount-product">-20%</span>

																												<span class="price" aria-label="Price">
																													$19.12
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="2" data-id-product-attribute="9">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Summer Chair" class="img-fluid rb-image image-cover" src="./30-home_default/armen-living-summer-chair.jpg" data-full-size-image-url="./30-thickbox_default/armen-living-summer-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./31-home_default/armen-living-summer-chair.jpg" title="Armen Living Summer Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag discount">
																													-20%
																												</li>
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="2" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="2" data-id-product-attribute="9" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="2" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->
																											<div class="rb-product-countdown" data-expired="EXPIRED TIME">
																												<h2 class="rb-counttitle">
																													End in :
																												</h2>
																												<ul class="rb-product-clock" data-time="2022-04-30 00:00:00">
																													<li>
																														<span class="rb-days"></span>
																														<span>d</span>
																													</li>

																													<li>
																														<span class="rb-hours"></span>
																														<span>h</span>
																													</li>

																													<li>
																														<span class="rb-minutes"></span>
																														<span>m</span>
																													</li>

																													<li>
																														<span class="rb-seconds"></span>
																														<span>s</span>
																													</li>
																												</ul>
																											</div>
																											<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-countdown.tpl -->

																											<div class="highlighted-informations hidden-sm-down">
																												<div class="variant-links">
																													<a href="bed-bath/2-93-armen-living-summer-chair.html#/9-color-off_white" title="Off White" aria-label="Off White">
																														<span class="color" style="
                                                                  background-color: #faebd7;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-94-armen-living-summer-chair.html#/10-color-red" title="Red" aria-label="Red">
																														<span class="color" style="
                                                                  background-color: #e84c3d;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-95-armen-living-summer-chair.html#/14-color-blue" title="Blue" aria-label="Blue">
																														<span class="color" style="
                                                                  background-color: #5d9cec;
                                                                "></span>
																													</a>
																													<a href="bed-bath/2-96-armen-living-summer-chair.html#/15-color-green" title="Green" aria-label="Green">
																														<span class="color" style="
                                                                  background-color: #a0d468;
                                                                "></span>
																													</a>
																													<span class="js-count count"></span>
																												</div>
																											</div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="2" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s" content="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s">Armen Living Summer
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="sr-only">Regular price</span>
																												<span class="regular-price">$35.90</span>
																												<span class="discount-percentage discount-product">-20%</span>

																												<span class="price" aria-label="Price">
																													$28.72
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="3" data-id-product-attribute="13">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Modern Swivel Accent Chair" class="img-fluid rb-image image-cover" src="./36-home_default/modern-swivel-accent-chair.jpg" data-full-size-image-url="./36-thickbox_default/modern-swivel-accent-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./37-home_default/modern-swivel-accent-chair.jpg" title="Modern Swivel Accent Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="3" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="3" data-id-product-attribute="13" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="3" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="3" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm" content="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm">Modern Swivel
																													Accent Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$29.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="5" data-id-product-attribute="19">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm" class="thumbnail product-thumbnail">
																												<img alt="Wooden Starburst Wall..." class="img-fluid rb-image image-cover" src="./48-home_default/wooden-starburst-wall-clock-non.jpg" data-full-size-image-url="./48-thickbox_default/wooden-starburst-wall-clock-non.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./49-home_default/wooden-starburst-wall-clock-non.jpg" title="Wooden Starburst Wall Clock-Non" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="5" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="5" data-id-product-attribute="19" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="5" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="5" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm" content="home/5-19-wooden-starburst-wall-clock-non.html#/19-dimension-40x60cm">Wooden Starburst
																													Wall Clock-Non</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$29.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>

																							<div class="product">
																								<article class="product-miniature js-product-miniature" data-id-product="12" data-id-product-attribute="0">
																									<div class="thumbnail-container">
																										<div class="product-image">
																											<a href="home/12-armen-living-crimson-faux-chair.html" class="thumbnail product-thumbnail">
																												<img alt="Armen Living Crimson Faux..." class="img-fluid rb-image image-cover" src="./88-home_default/armen-living-crimson-faux-chair.jpg" data-full-size-image-url="./88-thickbox_default/armen-living-crimson-faux-chair.jpg" loading="lazy" />

																												<div class="product-hover">
																													<img class="img-fluid rb-image image-hover" src="./89-home_default/armen-living-crimson-faux-chair.jpg" title="Armen Living Crimson Faux Chair" width="700" height="700" loading="lazy" />
																												</div>
																											</a>

																											<ul class="product-flags">
																												<li class="product-flag new">
																													New product
																												</li>
																												<span class="sr-only">Price</span>
																											</ul>

																											<div class="product-quickview hidden-sm-down">
																												<a class="rb-quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="product-quick-view" style="display: none">
																												<a class="quick-view rb-btn-product" href="#" data-link-action="quickview">
																													<i class="icon-search search"></i>
																													<span class="icon-title">Quick view</span>
																												</a>
																											</div>

																											<div class="rb-ajax-loading">
																												<div class="cssload-container">
																													<div class="cssload-speeding-wheel"></div>
																												</div>
																											</div>
																											<div class="functional-buttons clearfix">
																												<div class="product-compare">
																													<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																													<a href="compare.html" data-id_product="12" title="Product Comparison" class="rb-compare-link rb-btn-product" rel="nofollow">
																														<i class="icon-random"></i>
																														<span class="icon-title">Add
																															Compare</span>
																													</a>
																													<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-compare.tpl -->
																												</div>

																												<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->
																												<div class="rb-wishlist">
																													<a class="rb-wishlist-link rb-btn-product" href="#" data-id-wishlist="" data-id-product="12" data-id-product-attribute="0" data-id_wishlist_product="0" title="Add to Wishlist">
																														<i class="icon-btn-product icon-wishlist icon-heart"></i>
																														<span class="icon-title">Add to
																															Wishlist</span>
																													</a>
																												</div>
																												<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-wishlist.tpl -->

																												<div class="product-add-cart">
																													<!-- begin modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																													<form action="https://rubiktheme.com/demo/rb_davici_demo/en/cart" method="post" class="add-to-cart-or-refresh">
																														<input type="hidden" name="token" value="bf0ba928fbfcc103ff31ff1e6c6b511b" />
																														<input type="hidden" name="id_product" value="12" class="product_page_product_id" />
																														<input type="hidden" name="qty" value="1" />

																														<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																														<div class="product-add-to-cart-rb">
																															<div class="product-quantity">
																																<div class="add">
																																	<button class="btn rb-btn-product add-to-cart" title="Add to cart" data-button-action="add-to-cart" type="submit">
																																		Add To
																																		Cart
																																	</button>

																																	<span class="product-availability hidden">
																																	</span>
																																</div>
																															</div>

																															<p class="product-minimal-quantity hidden"></p>
																														</div>
																														<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemefunction/views/templates/hook/rb-cart.tpl -->
																													</form>
																													<!-- end modules/rbthemefunction/views/templates/hook/rb-add-to-cart.tpl -->
																												</div>
																											</div>
																											<!-- end functional-buttons -->

																											<div class="highlighted-informations no-variants hidden-sm-down"></div>
																											<!-- end highlighted-informations -->
																										</div>
																										<!-- end product-image -->

																										<div class="product-meta">
																											<!-- begin modules/rbthemefunction/views/templates/hook/rb-review.tpl -->
																											<div class="star_content clearfix" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<div class="star"></div>
																												<meta itemprop="worstRating" content="0" />
																												<meta itemprop="ratingValue" content="0" />
																												<meta itemprop="bestRating" content="5" />
																											</div>

																											<!-- end modules/rbthemefunction/views/templates/hook/rb-review.tpl -->

																											<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- begin /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<div class="product-list-reviews" data-id="12" data-url="module/productcomments/CommentGrade.json">
																												<div class="grade-stars small-stars"></div>
																												<div class="comments-nb"></div>
																											</div>

																											<!-- end /var/www/html/demo/rb_davici_demo/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
																											<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

																											<h3 class="h3 product-title">
																												<a href="home/12-armen-living-crimson-faux-chair.html" content="home/12-armen-living-crimson-faux-chair.html">Armen Living
																													Crimson Faux
																													Chair</a>
																											</h3>

																											<div class="product-price-and-shipping">
																												<span class="price" aria-label="Price">
																													$9.00
																												</span>
																											</div>
																										</div>
																										<!-- end product-meta -->
																									</div>
																									<!-- end thumbnail-container -->
																								</article>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-product-tab.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-product-tab.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-hotspot no-margin-bottom rb-section rb-element rb-element-5dc9dgr rb-top-section rb-section-stretched rb-section-full_width rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-rgsvlju col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-9venxzm rb-widget-image-hotspots" data-element_type="image-hotspots">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-image-hotspot.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-image-hotspot.tpl -->
																			<div class="rb-image-hotspots-wrapper">
																				<div class="rb-hotspot-image">
																					<img src="./cdn.shopify.com/s/files/1/0550/8336/8541/files/bg2-h151f2.jpg?v=1636000550" alt="" />
																				</div>

																				<div class="rb-image-hotspots">
																					<div class="rb-hotspot" style="top: 20%; left: 20%" data-toggle="tooltip" data-html="true">
																						<div class="row rb-hotspot-product">
																							<div class="thumbnail-container">
																								<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white">
																									<img src="./24-small_default/design-living-room-sofa.jpg" class="img-fluid" width="200" height="200" /></a>
																							</div>
																							<div class="product-description">
																								<div class="product-title">
																									Design Living Room Sofa
																								</div>
																								<span class="product-price-hotspot">$19.12</span>
																							</div>
																						</div>
																						<a href="outdoor/1-1-design-living-room-sofa.html#/1-size-s/8-color-white" target="_blank" rel="noopener noreferrer"><span class="rb-hotspot-text">#1</span></a>
																					</div>
																					<div class="rb-hotspot" style="top: 68%; left: 8%" data-toggle="tooltip" data-html="true">
																						<div class="row rb-hotspot-product">
																							<div class="thumbnail-container">
																								<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm">
																									<img src="./36-small_default/modern-swivel-accent-chair.jpg" class="img-fluid" width="200" height="200" /></a>
																							</div>
																							<div class="product-description">
																								<div class="product-title">
																									Modern Swivel Accent Chair
																								</div>
																								<span class="product-price-hotspot">$29.00</span>
																							</div>
																						</div>
																						<a href="home/3-13-modern-swivel-accent-chair.html#/19-dimension-40x60cm" target="_blank" rel="noopener noreferrer"><span class="rb-hotspot-text">#2</span></a>
																					</div>
																					<div class="rb-hotspot" style="top: 48%; left: 40%" data-toggle="tooltip" data-html="true">
																						<div class="row rb-hotspot-product">
																							<div class="thumbnail-container">
																								<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s">
																									<img src="./30-small_default/armen-living-summer-chair.jpg" class="img-fluid" width="200" height="200" /></a>
																							</div>
																							<div class="product-description">
																								<div class="product-title">
																									Armen Living Summer Chair
																								</div>
																								<span class="product-price-hotspot">$28.72</span>
																							</div>
																						</div>
																						<a href="bed-bath/2-9-armen-living-summer-chair.html#/1-size-s" target="_blank" rel="noopener noreferrer"><span class="rb-hotspot-text">#3</span></a>
																					</div>
																					<div class="rb-hotspot" style="top: 50%; left: 88%" data-toggle="tooltip" data-html="true">
																						<div class="row rb-hotspot-product">
																							<div class="thumbnail-container">
																								<a href="wall-lamp/6-modern-sofa-couch-with-wood.html">
																									<img src="./54-small_default/modern-sofa-couch-with-wood.jpg" class="img-fluid" width="200" height="200" /></a>
																							</div>
																							<div class="product-description">
																								<div class="product-title">
																									Modern Sofa Couch with Wood
																								</div>
																								<span class="product-price-hotspot">$11.90</span>
																							</div>
																						</div>
																						<a href="wall-lamp/6-modern-sofa-couch-with-wood.html" target="_blank" rel="noopener noreferrer"><span class="rb-hotspot-text">#4</span></a>
																					</div>
																				</div>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-image-hotspot.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-image-hotspot.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-productcombination no-margin-bottom rb-section rb-element rb-element-gegat3k rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-qfxq0zn col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-wv3caof rb-widget-image" data-element_type="image">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-image">
																				<img src="./img/cms/bg3-h1.png" alt="" />
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-uelo9bf rb-widget-prestashop-widget-ProductsList" data-element_type="prestashop-widget-ProductsList">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-product.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-product.tpl -->
																			<section id="products" class="rb-products rb-products-list">
																				<div class="products rb-products-carousel slick-products-carousel products-grid slick-arrows-middle" data-slider_options='{"responsive":[{"breakpoint":992,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":768,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"dots":false,"infinite":true,"rows":1,"slidesToShow":1,"slidesToScroll":1,"autoplay":false,"arrows":false}'>
																					<div class="product">
																						<article class="product-miniature js-product-miniature" data-id-product="18" data-id-product-attribute="36">
																							<div class="thumbnail-container">
																								<div class="product-image">
																									<a href="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled" class="thumbnail product-thumbnail">
																										<img alt="Folding Tables &amp; Chairs" class="img-fluid rb-image image-cover" src="./124-home_default/folding-tables-chairs.jpg" data-full-size-image-url="./124-thickbox_default/folding-tables-chairs.jpg" loading="lazy" />

																										<div class="product-hover">
																											<img class="img-fluid rb-image image-hover" src="./125-home_default/folding-tables-chairs.jpg" title="Folding Tables &amp; Chairs" width="700" height="700" loading="lazy" />
																										</div>
																									</a>

																									<div class="rb-ajax-loading">
																										<div class="cssload-container">
																											<div class="cssload-speeding-wheel"></div>
																										</div>
																									</div>
																								</div>

																								<div class="product-meta">
																									<h3 class="h3 product-title">
																										<a href="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled" content="home/18-36-folding-tables-chairs.html#/22-paper_type-ruled">Folding Tables &amp;
																											Chairs</a>
																									</h3>

																									<div class="product-price-and-shipping">
																										<span class="price" aria-label="Price">
																											$12.90
																										</span>
																									</div>

																									<!-- begin modules/rbthemefunction/views/templates/hook/rb-brand.tpl -->
																									<h3 class="h3 product-brand" itemprop="brand">
																										<span>Brand: </span>
																										<a href="brand/2-graphic-corner.html" tabindex="0">Graphic Corner</a>
																									</h3>
																									<!-- end modules/rbthemefunction/views/templates/hook/rb-brand.tpl -->

																									<div class="product-description-short" itemprop="description">
																										<p>
																											Lorem ipsum dolor sit
																											amet, consectetur
																											adipiscing elit, sed do
																											eiusmod tempor
																											incididunt ut labore et
																											dolore magna aliqua. Ut
																											enim ad minim veniam,
																											quis nostrud
																											exercitation ullamco
																											laboris nisi ut aliquip
																											ex ea commodo consequat.
																											Duis aute irure dolor in
																											reprehenderit in
																											voluptate velit esse
																											cillum dolore eu fugiat
																											nulla pariatur.
																										</p>
																									</div>

																									<div class="product-combination"></div>
																								</div>
																							</div>
																						</article>
																					</div>
																				</div>
																			</section>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-product.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-product.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-bannertext style-1 rb-section rb-element rb-element-yyu93r8 rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-kauuht8 col-md-6 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-j4eucrb rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="box-banner-text">
																				<div class="rb-subtitle">
																					Our stories
																				</div>
																				<h3 class="rb-title">
																					We design <br />everything we make.
																				</h3>
																				<div class="rb-description">
																					Sed cursus turpis vitae tortor.
																					Curabitur ligula sapien, tincidunt
																					non, euismod posuere imperdiet.
																					Donec elit libero, sodales nec,
																					volutpat a, suscipit non, turpis.
																					Nullam cursus lacinia erat. Nulla
																					sit amet est.
																				</div>
																				<div class="rb-button">
																					<span class="rb-button-link btn btn-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 512 512" width="512">
																							<g>
																								<path d="m373.489 364.092c-33.329-8.401-58.793-14.952-68.238-45.384 28.932-15.432 49.831-44.01 54.673-77.708h1.076c33.423 0 60-28.112 60-61 0-10.925-2.949-21.167-8.072-30h23.072c8.284 0 15-6.716 15-15s-6.716-15-15-15h-75v-45c0-41.355-33.645-75-75-75h-60c-41.355 0-75 33.645-75 75v45c-33.084 0-60 26.916-60 60 0 32.894 26.584 61 60 61h1.076c4.842 33.698 25.74 62.276 54.673 77.708-9.473 30.52-35.346 37.093-68.238 45.384-51.068 12.874-107.511 29.199-107.511 132.908 0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-95.348-45.592-117.298-107.511-132.908zm-222.489 27.784c10.202-2.599 20.486-5.39 30.305-9.194 3.332 38.256 35.336 69.318 74.695 69.318 39.338 0 71.361-31.038 74.695-69.317 9.818 3.804 20.103 6.594 30.305 9.194v90.123h-210zm240-211.876c0 16.804-13.738 31-30 31v-61c16.542 0 30 13.458 30 30zm-210-105c0-24.813 20.187-45 45-45h60c24.813 0 45 20.187 45 45v45h-30v-45c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v45h-30zm90 45h-30v-30h30zm-150 60c0-16.542 13.458-30 30-30v61c-16.262 0-30-14.196-30-31zm60 46v-76h150v76c0 41.355-33.645 75-75 75s-75-33.645-75-75zm75 105c7.206 0 14.244-.731 21.045-2.12 4.899 14.946 12.828 27.07 23.955 36.647v10.473c0 24.935-20.607 46-45 46s-45-21.065-45-46v-10.473c11.127-9.578 19.055-21.701 23.955-36.647 6.801 1.389 13.839 2.12 21.045 2.12zm-135 68.987v82.013h-59.516c3.416-50.491 22.941-70.304 59.516-82.013zm270 82.013v-82.013c36.415 11.658 56.081 31.242 59.516 82.013z"></path>
																							</g>
																						</svg>
																						<span>About us</span>
																					</span>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-g7gk2sp col-md-6 rb-top-column" data-element_type="column">
															<div class="rb-column-wrap">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-services style-1 rb-section rb-element rb-element-cuzzn13 rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-31gfhbw col-md-3 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-96gkw1o rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper elementor-animation-wobble-horizontal">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="
                                                enable-background: new 0 0 512
                                                  512;
                                              " xml:space="preserve">
																						<g>
																							<g>
																								<path d="M119.467,337.067c-28.237,0-51.2,22.963-51.2,51.2c0,28.237,22.963,51.2,51.2,51.2s51.2-22.963,51.2-51.2    C170.667,360.03,147.703,337.067,119.467,337.067z M119.467,422.4c-18.825,0-34.133-15.309-34.133-34.133    c0-18.825,15.309-34.133,34.133-34.133s34.133,15.309,34.133,34.133C153.6,407.091,138.291,422.4,119.467,422.4z"></path>
																							</g>
																						</g>
																						<g>
																							<g>
																								<path d="M409.6,337.067c-28.237,0-51.2,22.963-51.2,51.2c0,28.237,22.963,51.2,51.2,51.2c28.237,0,51.2-22.963,51.2-51.2    C460.8,360.03,437.837,337.067,409.6,337.067z M409.6,422.4c-18.825,0-34.133-15.309-34.133-34.133    c0-18.825,15.309-34.133,34.133-34.133c18.825,0,34.133,15.309,34.133,34.133C443.733,407.091,428.425,422.4,409.6,422.4z"></path>
																							</g>
																						</g>
																						<g>
																							<g>
																								<path d="M510.643,289.784l-76.8-119.467c-1.57-2.441-4.275-3.917-7.177-3.917H332.8c-4.719,0-8.533,3.823-8.533,8.533v213.333    c0,4.719,3.814,8.533,8.533,8.533h34.133v-17.067h-25.6V183.467h80.674l72.926,113.442v82.825h-42.667V396.8h51.2    c4.719,0,8.533-3.814,8.533-8.533V294.4C512,292.77,511.531,291.157,510.643,289.784z"></path>
																							</g>
																						</g>
																						<g>
																							<g>
																								<path d="M375.467,277.333V217.6h68.267v-17.067h-76.8c-4.719,0-8.533,3.823-8.533,8.533v76.8c0,4.719,3.814,8.533,8.533,8.533h128    v-17.067H375.467z"></path>
																							</g>
																						</g>
																						<g>
																							<g>
																								<path d="M332.8,106.667H8.533C3.823,106.667,0,110.49,0,115.2v273.067c0,4.719,3.823,8.533,8.533,8.533H76.8v-17.067H17.067v-256    h307.2v256H162.133V396.8H332.8c4.719,0,8.533-3.814,8.533-8.533V115.2C341.333,110.49,337.519,106.667,332.8,106.667z"></path>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="8.533" y="345.6" width="51.2" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="179.2" y="345.6" width="145.067" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="469.333" y="345.6" width="34.133" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="34.133" y="140.8" width="298.667" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="110.933" y="379.733" width="17.067" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="401.067" y="379.733" width="17.067" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect x="34.133" y="72.533" width="119.467" height="17.067"></rect>
																							</g>
																						</g>
																						<g>
																							<g>
																								<rect y="72.533" width="17.067" height="17.067"></rect>
																							</g>
																						</g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																					</svg>
																				</div>
																				<div class="rb-box-content">
																					<h3 class="rb-box-title">
																						<span>Free Shipping</span>
																					</h3>
																					<p class="rb-box-description">
																						Capped at $39 per order
																					</p>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-23oc9n4 col-md-3 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-osidwux rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper elementor-animation-wobble-horizontal">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="
                                                enable-background: new 0 0 512
                                                  512;
                                              " xml:space="preserve">
																						<g>
																							<g>
																								<g>
																									<path d="M498.409,175.706L336.283,13.582c-8.752-8.751-20.423-13.571-32.865-13.571c-12.441,0-24.113,4.818-32.865,13.569     L13.571,270.563C4.82,279.315,0,290.985,0,303.427c0,12.442,4.82,24.114,13.571,32.864l19.992,19.992     c0.002,0.001,0.003,0.003,0.005,0.005c0.002,0.002,0.004,0.004,0.006,0.006l134.36,134.36H149.33     c-5.89,0-10.666,4.775-10.666,10.666c0,5.89,4.776,10.666,10.666,10.666h59.189c0.014,0,0.027,0.001,0.041,0.001     s0.027-0.001,0.041-0.001l154.053,0.002c5.89,0,10.666-4.776,10.666-10.666c0-5.891-4.776-10.666-10.666-10.666l-113.464-0.002     L498.41,241.434C516.53,223.312,516.53,193.826,498.409,175.706z M483.325,226.35L226.341,483.334     c-4.713,4.712-11.013,7.31-17.742,7.32h-0.081c-6.727-0.011-13.025-2.608-17.736-7.32L56.195,348.746L302.99,101.949     c4.165-4.165,4.165-10.919,0-15.084c-4.166-4.165-10.918-4.165-15.085,0.001L41.11,333.663l-12.456-12.456     c-4.721-4.721-7.321-11.035-7.321-17.779c0-6.744,2.6-13.059,7.322-17.781L285.637,28.665c4.722-4.721,11.037-7.321,17.781-7.321     c6.744,0,13.059,2.6,17.781,7.322l57.703,57.702l-246.798,246.8c-4.165,4.164-4.165,10.918,0,15.085     c2.083,2.082,4.813,3.123,7.542,3.123c2.729,0,5.459-1.042,7.542-3.124l246.798-246.799l89.339,89.336     C493.128,200.593,493.127,216.546,483.325,226.35z"></path>
																									<path d="M262.801,308.064c-4.165-4.165-10.917-4.164-15.085,0l-83.934,83.933c-4.165,4.165-4.165,10.918,0,15.085     c2.083,2.083,4.813,3.124,7.542,3.124c2.729,0,5.459-1.042,7.542-3.124l83.934-83.933     C266.966,318.982,266.966,312.229,262.801,308.064z"></path>
																									<path d="M228.375,387.741l-34.425,34.425c-4.165,4.165-4.165,10.919,0,15.085c2.083,2.082,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l34.425-34.425c4.165-4.165,4.165-10.919,0-15.085     C239.294,383.575,232.543,383.575,228.375,387.741z"></path>
																									<path d="M260.054,356.065l-4.525,4.524c-4.166,4.165-4.166,10.918-0.001,15.085c2.082,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.459-1.042,7.541-3.125l4.525-4.524c4.166-4.165,4.166-10.918,0.001-15.084     C270.974,351.901,264.219,351.9,260.054,356.065z"></path>
																									<path d="M407.073,163.793c-2-2-4.713-3.124-7.542-3.124c-2.829,0-5.541,1.124-7.542,3.124l-45.255,45.254     c-2,2.001-3.124,4.713-3.124,7.542s1.124,5.542,3.124,7.542l30.17,30.167c2.083,2.083,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l45.253-45.252c4.165-4.165,4.165-10.919,0-15.084L407.073,163.793z M384.445,231.673     l-15.085-15.084l30.17-30.169l15.084,15.085L384.445,231.673z"></path>
																									<path d="M320.339,80.186c2.731,0,5.461-1.042,7.543-3.126l4.525-4.527c4.164-4.166,4.163-10.92-0.003-15.084     c-4.165-4.164-10.92-4.163-15.084,0.003l-4.525,4.527c-4.164,4.166-4.163,10.92,0.003,15.084     C314.881,79.146,317.609,80.186,320.339,80.186z"></path>
																									<path d="M107.215,358.057l-4.525,4.525c-4.165,4.164-4.165,10.918,0,15.085c2.083,2.082,4.813,3.123,7.542,3.123     s5.459-1.041,7.542-3.123l4.525-4.525c4.165-4.166,4.165-10.92,0-15.085C118.133,353.891,111.381,353.891,107.215,358.057z"></path>
																								</g>
																							</g>
																						</g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																						<g></g>
																					</svg>
																				</div>
																				<div class="rb-box-content">
																					<h3 class="rb-box-title">
																						<span>Securety Payments</span>
																					</h3>
																					<p class="rb-box-description">
																						Up to 12 months installments
																					</p>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-7muoztp col-md-3 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-2x3qnxp rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper elementor-animation-wobble-horizontal">
																					<svg xmlns="http://www.w3.org/2000/svg" height="511pt" viewBox="0 1 511.99981 511" width="511pt">
																						<path d="m506.8125 111.230469-199.40625-109.496094c-2.996094-1.6445312-6.628906-1.6445312-9.625 0l-75.160156 41.269531c-1.585938.417969-3.066406 1.214844-4.292969 2.359375l-119.949219 65.867188c-3.199218 1.753906-5.1875 5.113281-5.1875 8.765625v132.429687c-20.234375 6.328125-38.777344 17.488281-54.195312 32.910157-40.1875 40.183593-50.433594 101.472656-25.496094 152.507812 2.421875 4.960938 8.410156 7.019531 13.371094 4.59375 4.964844-2.425781 7.019531-8.414062 4.597656-13.375-21.1875-43.363281-12.480469-95.4375 21.667969-129.585938 21.355469-21.355468 49.746093-33.117187 79.945312-33.117187s58.589844 11.761719 79.945313 33.117187c21.351562 21.351563 33.113281 49.742188 33.113281 79.941407s-11.761719 58.589843-33.117187 79.945312c-34.148438 34.148438-86.222657 42.855469-129.585938 21.667969-4.960938-2.425781-10.949219-.367188-13.371094 4.59375-2.425781 4.964844-.371094 10.953125 4.59375 13.375 18.589844 9.085938 38.535156 13.5 58.335938 13.5 34.542968-.003906 68.625-13.449219 94.171875-38.996094 11.714843-11.714844 20.972656-25.230468 27.523437-39.921875l43.089844 23.660157c1.5.824218 3.15625 1.234374 4.8125 1.234374s3.316406-.410156 4.8125-1.234374l199.40625-109.492188c3.199219-1.757812 5.1875-5.117188 5.1875-8.765625v-69.496094c0-5.523437-4.476562-10-10-10s-10 4.476563-10 10v63.578125l-179.375 98.496094v-196.171875l59.199219-32.507813v51.53125c0 3.539063 1.867187 6.8125 4.910156 8.609376 1.570313.925781 3.328125 1.390624 5.089844 1.390624 1.65625 0 3.316406-.410156 4.820312-1.238281l42.730469-23.519531c3.195312-1.757812 5.175781-5.113281 5.175781-8.757812v-62.460938l57.449219-31.542969v52.597657c0 5.523437 4.476562 10 10 10s10-4.476563 10-10v-69.496094c0-3.648438-1.988281-7.011719-5.1875-8.765625zm-204.21875-89.324219 178.628906 98.089844-56.347656 30.941406-178.628906-98.089844zm0 196.175781-178.628906-98.085937 58.414062-32.078125 178.632813 98.085937zm79.191406-43.484375-178.628906-98.085937 22.3125-12.253907 178.632812 98.085938zm-154.617187 110.738282c-25.132813-25.132813-58.546875-38.972657-94.085938-38.972657-6.722656 0-13.363281.496094-19.890625 1.46875v-110.9375l179.4375 98.53125v196.171875l-31.144531-17.101562c3.066406-11.289063 4.652344-23.0625 4.652344-35.078125 0-35.539063-13.839844-68.953125-38.96875-94.082031zm187.386719-60.347657-22.730469 12.511719v-45.597656l22.730469-12.480469zm0 0"></path>
																						<path d="m502 219.441406c-2.628906 0-5.210938 1.070313-7.070312 2.929688-1.859376 1.859375-2.929688 4.4375-2.929688 7.070312 0 2.628906 1.070312 5.207032 2.929688 7.066406 1.859374 1.863282 4.441406 2.929688 7.070312 2.929688s5.210938-1.066406 7.070312-2.929688c1.859376-1.859374 2.929688-4.4375 2.929688-7.066406 0-2.632812-1.070312-5.210937-2.929688-7.070312-1.859374-1.859375-4.441406-2.929688-7.070312-2.929688zm0 0"></path>
																						<path d="m99.457031 389.417969c2.558594 0 5.121094-.976563 7.070313-2.925781 3.90625-3.90625 3.90625-10.238282 0-14.144532l-6.925782-6.929687h59.101563c14.335937 0 26 11.664062 26 26 0 14.335937-11.664063 26-26 26h-35.019531c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 9.996093 10 9.996093h35.019531c25.363281 0 46-20.632812 46-45.996093s-20.636719-45.996094-46-45.996094h-59.101563l6.925782-6.929687c3.90625-3.90625 3.90625-10.238282 0-14.144532-3.902344-3.902344-10.234375-3.902344-14.140625 0l-24 24c-3.902344 3.90625-3.902344 10.238282 0 14.144532l24 23.996093c1.953125 1.953125 4.511719 2.929688 7.070312 2.929688zm0 0"></path>
																						<path d="m46.074219 476.449219c-2.84375 0-5.667969-1.210938-7.640625-3.558594l-.019532-.023437c-3.554687-4.226563-3.007812-10.53125 1.21875-14.085938 4.226563-3.558594 10.535157-3.011719 14.089844 1.214844 3.550782 4.230468 3.015625 10.546875-1.210937 14.101562-1.878907 1.578125-4.164063 2.351563-6.4375 2.351563zm0 0"></path>
																					</svg>
																				</div>
																				<div class="rb-box-content">
																					<h3 class="rb-box-title">
																						<span>14-Day Returns</span>
																					</h3>
																					<p class="rb-box-description">
																						Shop with confidence
																					</p>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-4q054ak col-md-3 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-8det8mr rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper elementor-animation-wobble-horizontal">
																					<svg xmlns="http://www.w3.org/2000/svg" height="512pt" viewBox="0 0 512 512" width="512pt">
																						<path d="m436 412c5.519531 0 10-4.480469 10-10s-4.480469-10-10-10-10 4.480469-10 10 4.480469 10 10 10zm0 0"></path>
																						<path d="m100 352c-33.085938 0-60 26.914062-60 60s26.914062 60 60 60 60-26.914062 60-60-26.914062-60-60-60zm0 100c-22.054688 0-40-17.945312-40-40s17.945312-40 40-40 40 17.945312 40 40-17.945312 40-40 40zm0 0"></path>
																						<path d="m502 332h-212.148438l144.597657-144.597656c3.90625-3.90625 3.90625-10.238282 0-14.144532l-98.988281-99c-1.875-1.875-4.417969-2.929687-7.070313-2.929687s-5.195313 1.054687-7.070313 2.929687l-141.320312 141.320313v-205.578125c0-5.523438-4.476562-10-10-10h-140c-5.523438 0-10 4.476562-10 10v342.015625c-12.914062 17.210937-20 38.367187-20 59.984375 0 55.140625 44.859375 100 100 100 21.617188 0 42.773438-7.085938 59.984375-20h342.015625c5.523438 0 10-4.476562 10-10v-140c0-5.523438-4.476562-10-10-10zm-244.320312-165.816406 84.847656 84.855468-70.707032 70.707032-84.859374-84.847656zm-59.140626 228.84375c-2.683593-15.550782-9.035156-30.347656-18.539062-43.011719v-93.792969l77.675781 77.667969zm-158.539062-163.027344v-106h120v106zm0 20h120v79.976562c-17.125-12.875-38.042969-19.976562-60-19.976562s-42.875 7.101562-60 19.976562zm159.453125 170.398438 60.546875-60.546876v110.148438h-80.011719c10.8125-14.40625 17.601563-31.546875 19.464844-49.601562zm80.546875-70.398438h106v120h-106zm48.390625-256.527344 84.847656 84.855469-56.566406 56.570313-84.847656-84.859376zm-168.390625-75.472656v86h-120v-86zm-140 392c0-44.445312 36.019531-80 80-80 44.546875 0 80 36.167969 80 80 0 43.617188-35.253906 80-80 80-44.113281 0-80-35.886719-80-80zm472 60h-46v-30c0-5.523438-4.476562-10-10-10s-10 4.476562-10 10v30h-20v-120h86zm0 0"></path>
																					</svg>
																				</div>
																				<div class="rb-box-content">
																					<h3 class="rb-box-title">
																						<span>Free Fabric Swatches</span>
																					</h3>
																					<p class="rb-box-description">
																						Delivered to your door
																					</p>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-blog rb-section rb-element rb-element-bahy2cr rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="box-title style-1 rb-column rb-element rb-element-g3qn4fl col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-ji6v5df rb-widget-heading" data-element_type="heading">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-heading-title rb-size-default none">
																				<span>
																					<h2>From Our Blog</h2>
																					<p>
																						See how our customers have styled
																						davici products in their home
																					</p>
																				</span>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-muou8zg rb-widget-prestashop-widget-Blog" data-element_type="prestashop-widget-Blog">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-blog.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-blog.tpl -->
																			<section class="rb-blog-posts rb-blog-posts-carousel rb-slick-slider rbthemeblog">
																				<div class="rb-blog-carousel simpleblog-posts" data-slider_options='{"responsive":[{"breakpoint":992,"settings":{"slidesToShow":2,"slidesToScroll":2}},{"breakpoint":575,"settings":{"slidesToShow":1,"slidesToScroll":1}}],"slidesToShow":3,"slidesToScroll":2,"autoplaySpeed":5000,"autoplay":false,"infinite":false,"pauseOnHover":true,"arrows":false,"dots":true}'>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/dining-chair/traveling-solo-is-awesome.html" title="Traveling Solo Is Awesome" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/8-thumb.jpg" alt="Traveling Solo Is Awesome" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											18
																										</span>

																										<span class="month">
																											Apr
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/dining-chair.html" title="Dining Chair">
																											Dining Chair
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/dining-chair/traveling-solo-is-awesome.html" title="Traveling Solo Is Awesome">Traveling Solo Is
																											Awesome</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Donec tellus Nulla lorem
																											Nullam elit id ut elit
																											feugiat lacus. Congue
																											eget dapibus congue
																											tincidunt...
																										</p>
																									</div>

																									<a href="blog/dining-chair/traveling-solo-is-awesome.html" title="Traveling Solo Is Awesome" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/a-beautiful-sunday-morning.html" title="A Beautiful Sunday Morning" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/7-thumb.jpg" alt="A Beautiful Sunday Morning" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/a-beautiful-sunday-morning.html" title="A Beautiful Sunday Morning">A Beautiful Sunday
																											Morning</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Suspendisse posuere,
																											diam in bibendum
																											lobortis, turpis ipsum
																											aliquam risus, sit amet
																											dictum ligula...
																										</p>
																									</div>

																									<a href="blog/furniture/a-beautiful-sunday-morning.html" title="A Beautiful Sunday Morning" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/post-format-audio-blogs.html" title="Post format audio blogs" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/6-thumb.jpg" alt="Post format audio blogs" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/post-format-audio-blogs.html" title="Post format audio blogs">Post format audio
																											blogs</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Nunc aliquet, justo non
																											commodo congue, velit
																											sem pulvinar enim, ac
																											bibendum mi mi...
																										</p>
																									</div>

																									<a href="blog/furniture/post-format-audio-blogs.html" title="Post format audio blogs" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/post-format-video-blogs.html" title="Post format video blogs" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/5-thumb.jpg" alt="Post format video blogs" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/post-format-video-blogs.html" title="Post format video blogs">Post format video
																											blogs</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Sed mauris Pellentesque
																											elit Aliquam at lacus
																											interdum nascetur elit
																											ipsum. Enim ipsum
																											hendrerit...
																										</p>
																									</div>

																									<a href="blog/furniture/post-format-video-blogs.html" title="Post format video blogs" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/post-format-quote-blogs.html" title="Post format quote blogs" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/4-thumb.jpg" alt="Post format quote blogs" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/post-format-quote-blogs.html" title="Post format quote blogs">Post format quote
																											blogs</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Mi vitae magnis Fusce
																											laoreet nibh felis
																											porttitor laoreet
																											Vestibulum faucibus. At
																											Nulla id tincidunt ...
																										</p>
																									</div>

																									<a href="blog/furniture/post-format-quote-blogs.html" title="Post format quote blogs" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/flexibility-for-the-work-spaces.html" title="Flexibility for the Work spaces" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/3-thumb.jpg" alt="Flexibility for the Work spaces" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/flexibility-for-the-work-spaces.html" title="Flexibility for the Work spaces">Flexibility for the
																											Work spaces</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Mi vitae magnis Fusce
																											laoreet nibh felis
																											porttitor laoreet
																											Vestibulum faucibus. At
																											Nulla id tincidunt ...
																										</p>
																									</div>

																									<a href="blog/furniture/flexibility-for-the-work-spaces.html" title="Flexibility for the Work spaces" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/dining-chair/classics-yesterday.html" title="Classics yesterday" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/2-thumb.jpg" alt="Classics yesterday" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/dining-chair.html" title="Dining Chair">
																											Dining Chair
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/dining-chair/classics-yesterday.html" title="Classics yesterday">Classics yesterday</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Donec tellus Nulla lorem
																											Nullam elit id ut elit
																											feugiat lacus. Congue
																											eget dapibus congue
																											tincidunt...
																										</p>
																									</div>

																									<a href="blog/dining-chair/classics-yesterday.html" title="Classics yesterday" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																					<div class="simpleblog-posts-column">
																						<div class="rb-post-inner">
																							<div class="rb-left-block">
																								<div class="rb-blog-image-container">
																									<a class="rb-blog-img-link" href="blog/furniture/how-to-make-your-first-10.html" title="How to Make Your First 10" itemprop="url">
																										<img class="img-fluid slick-loading" data-lazy="./modules/rbthemeblog/covers/1-thumb.jpg" alt="How to Make Your First 10" itemprop="image" />
																										<div class="rb-image-loading"></div>
																									</a>
																									<div class="rb-date-block">
																										<span class="day">
																											28
																										</span>

																										<span class="month">
																											Nov
																										</span>
																									</div>
																								</div>
																							</div>

																							<div class="right-block">
																								<div class="rb-blog-meta">
																									<div class="rb-blog-category">
																										<a href="blog/furniture.html" title="Furniture">
																											Furniture
																										</a>
																									</div>
																									<h5 class="rb-blog-title" itemprop="name">
																										<a href="blog/furniture/how-to-make-your-first-10.html" title="How to Make Your First 10">How to Make Your First
																											10</a>
																									</h5>

																									<div class="rb-blog-desc" itemprop="description">
																										<p>
																											Odio ut pretium ligula
																											quam Vestibulum
																											consequat convallis
																											fringilla Vestibulum
																											nulla. Accumsan morbi...
																										</p>
																									</div>

																									<a href="blog/furniture/how-to-make-your-first-10.html" title="How to Make Your First 10" class="post-btn-more">Read More</a>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</section>
																			<div>
																				<div class="blog-viewall">
																					<a class="btn" href="blog.html" title="View All">View All</a>
																				</div>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/themes/rb_davici/modules/rbthemedream/views/templates/widget/rb-blog.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-blog.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-brand rb-section rb-element rb-element-bzp6z08 rb-top-section rb-section-boxed rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="container rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="rb-column rb-element rb-element-w6tidbo col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-e6q43wi rb-widget-prestashop-widget-Brands" data-element_type="prestashop-widget-Brands">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<!-- begin module:rbthemedream/views/templates/widget/rb-brand.tpl -->
																			<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-brand.tpl -->
																			<div class="rb-brands">
																				<div class="rb-brands-carousel slick-arrows-middle" data-slider_options='{"responsive":[{"breakpoint":992,"settings":{"slidesToShow":5,"slidesToScroll":5}},{"breakpoint":768,"settings":{"slidesToShow":4,"slidesToScroll":4}},{"breakpoint":576,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":481,"settings":{"slidesToShow":2,"slidesToScroll":2}}],"rows":1,"slidesToShow":5,"slidesToScroll":5,"navigation":"none","itemsPerColumn":"1","autoplay":false,"infinite":false,"arrows":false,"dots":false}'>
																					<div class="rb-brands-item">
																						<a href="brand/3-brand-3.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/3.jpg" alt="Brand 3" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/4-brand-4.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/4.jpg" alt="Brand 4" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/5-brand-5.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/5.jpg" alt="Brand 5" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/6-brand-6.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/6.jpg" alt="Brand 6" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/7-brand-7.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/7.jpg" alt="Brand 7" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/8-brand-8.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/8.jpg" alt="Brand 8" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/9-brand-9.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/9.jpg" alt="Brand 9" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/2-graphic-corner.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/2.jpg" alt="Graphic Corner" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																					<div class="rb-brands-item">
																						<a href="brand/1-studio-design.html">
																							<img class="img-fluid slick-loading" data-lazy="https://rubiktheme.com/demo/rb_davici_demo/img/m/1.jpg" alt="Studio Design" />
																							<div class="rb-image-loading"></div>
																						</a>
																					</div>
																				</div>
																			</div>
																			<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget/rb-brand.tpl -->
																			<!-- end module:rbthemedream/views/templates/widget/rb-brand.tpl -->
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- begin module:rbthemedream/views/templates/section.tpl -->
											<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
											<div class="rb-section-instagram rb-section rb-element rb-element-crsxt20 rb-top-section rb-section-stretched rb-section-full_width rb-section-height-default rb-section-height-default" data-element_type="section">
												<div class="rb-container rb-column-gap-default">
													<div class="row">
														<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/section.tpl -->
														<!-- end module:rbthemedream/views/templates/section.tpl -->

														<!-- begin module:rbthemedream/views/templates/column.tpl -->
														<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
														<div class="box-title style-1 rb-column rb-element rb-element-foezz7x col-md-12 rb-top-column" data-element_type="column">
															<div class="rb-column-wraprb-element-populated">
																<div class="rb-widget-wrap">
																	<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/column.tpl -->
																	<!-- end module:rbthemedream/views/templates/column.tpl -->
																	<div class="rb-widget rb-element rb-element-a61qvb4 rb-widget-html" data-element_type="html">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-widget-icon">
																				<div class="rb-icon-wrapper">
																					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00096 512.00096">
																						<path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"></path>
																						<path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"></path>
																						<path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"></path>
																					</svg>
																				</div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-uprmb5g rb-widget-heading" data-element_type="heading">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-heading-title rb-size-default none">
																				<span>
																					<h2>#Davicifurniture</h2>
																					<p>
																						See how our customers have styled
																						davici products in their home
																					</p>
																				</span>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
																	</div>
																	<div class="rb-widget rb-element rb-element-vzzu2ky rb-widget-instagram" data-element_type="instagram">
																		<!-- begin module:rbthemedream/views/templates/widget.tpl -->
																		<!-- begin /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<div class="rb-widget-container">
																			<div class="rb-instagram-carousel-wrapper rb-slick-slider">
																				<div class="rb-instagram rb-instagram-carousel" data-options='{"token":"IGQVJVQTdxOGNWMWZAQdVU0NG9zcHBmb1ZABdlEwbV9OSTAtdWktZAlVBY2ZARakZASWEhGQ3p5eUdKSW1HMDE3T2NJU0xGYXJEdmtGMDVZAQnpER1BKYXljUXpUYVk2ZAUN5SE9GeUMzVDlfVV9JamxaNF8tbwZDZD","limit":10,"linked":true,"class":""}' data-slider_options='{"responsive":[{"breakpoint":992,"settings":{"slidesToShow":5,"slidesToScroll":5}},{"breakpoint":768,"settings":{"slidesToShow":4,"slidesToScroll":4}},{"breakpoint":575,"settings":{"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":480,"settings":{"slidesToShow":2,"slidesToScroll":2}}],"slidesToShow":6,"slidesToScroll":6,"autoplaySpeed":5000,"autoplay":false,"infinite":false,"pauseOnHover":false,"speed":500,"arrows":false,"dots":false}'></div>
																			</div>
																		</div>
																		<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/widget.tpl -->
																		<!-- end module:rbthemedream/views/templates/widget.tpl -->
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
								<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/front/front.tpl -->
								<!-- end module:rbthemedream/views/templates/front/front.tpl -->

								<!-- end /var/www/html/demo/rb_davici_demo/modules/rbthemedream/views/templates/hook/rb_content.tpl -->
								<!-- end module:rbthemedream/views/templates/hook/rb_content.tpl -->
							</section>

							<footer class="page-footer">
								<!-- Footer content -->
							</footer>
						</section>
					</div>
				</div>
			</div>
		</section>

		<?php include_once('./common/footer.php') ?>
	</main>

	<script type="text/javascript" src="./themes/rb_davici/assets/cache/bottom-e25b9038.js"></script>
</body>

<!-- Mirrored from rubiktheme.com/demo/rb_davici_demo/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Apr 2022 00:40:08 GMT -->

</html>

<!-- end index.tpl -->
