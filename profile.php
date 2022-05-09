<?php
require "config/constants.php";
session_start();
if (!isset($_SESSION["uid"])) {
	header("location:index.php");
}

include "db.php";
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>

	<link rel="stylesheet" href="./css/theme.css" type="text/css" media="all" />

	<style>
		@media screen and (max-width:480px) {
			#search {
				width: 80%;
			}

			#search_btn {
				width: 30%;
				float: right;
				margin-top: -32px;
				margin-right: 10px;
			}
		}
	</style>

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
			.rb_megamenu.layout_layout1 {
				background: ;
			}

			.layout_layout1 .rb_megamenu_content {
				background: linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
				background: -webkit-linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
				background: -o-linear-gradient(#ffffff, #f2f2f2) repeat scroll 0 0 rgba(0, 0, 0, 0);
			}

			.rb_megamenu.layout_layout1:not(.ybc_vertical_menu) .rb_menus_ul {
				background: ;
			}

			#header .layout_layout1:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout1 .ybc-menu-vertical-button,
			.layout_layout1 .rb_extra_item * {
				color: ;
			}

			.layout_layout1 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: ;
			}

			.layout_layout1 .rb_menus_li:hover>a,
			.layout_layout1 .rb_menus_li.active>a,
			#header .layout_layout1 .rb_menus_li:hover>a,
			.layout_layout1:hover .ybc-menu-vertical-button,
			.layout_layout1 .rb_extra_item button[type="submit"]:hover i,
			#header .layout_layout1 .rb_menus_li.active>a {
				color: ;
			}

			.layout_layout1:not(.ybc_vertical_menu) .rb_menus_li>a:before,
			.layout_layout1.ybc_vertical_menu:hover .ybc-menu-vertical-button:before,
			.layout_layout1:hover .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar,
			.ybc-menu-vertical-button.layout_layout1:hover {
				background-color: ;
			}

			.layout_layout1:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout1.ybc_vertical_menu:hover,
			#header .layout_layout1:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout1.ybc_vertical_menu:hover {
				background: ;
			}

			.layout_layout1.rb_megamenu .rb_columns_ul,
			.layout_layout1.ybc_vertical_menu .rb_menus_ul {
				background-color: ;
			}

			#header .layout_layout1 .rb_block_content a,
			#header .layout_layout1 .rb_block_content p,
			.layout_layout1.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout1.ybc_vertical_menu .rb_menus_li>a {
				color: ;
			}

			.layout_layout1 .rb_columns_ul h1,
			.layout_layout1 .rb_columns_ul h2,
			.layout_layout1 .rb_columns_ul h3,
			.layout_layout1 .rb_columns_ul h4,
			.layout_layout1 .rb_columns_ul h5,
			.layout_layout1 .rb_columns_ul h6,
			.layout_layout1 .rb_columns_ul .rb_block>h1 a,
			.layout_layout1 .rb_columns_ul .rb_block>h2 a,
			.layout_layout1 .rb_columns_ul .rb_block>h3 a,
			.layout_layout1 .rb_columns_ul .rb_block>h4 a,
			.layout_layout1 .rb_columns_ul .rb_block>h5 a,
			.layout_layout1 .rb_columns_ul .rb_block>h6 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h1 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h2 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h3 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h4 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h5 a,
			#header .layout_layout1 .rb_columns_ul .rb_block>h6 a,
			.layout_layout1 .rb_columns_ul .h1,
			.layout_layout1 .rb_columns_ul .h2,
			.layout_layout1 .rb_columns_ul .h3,
			.layout_layout1 .rb_columns_ul .h4,
			.layout_layout1 .rb_columns_ul .h5,
			.layout_layout1 .rb_columns_ul .h6 {
				color: ;
			}

			.layout_layout1 li:hover>a,
			.layout_layout1 li>a:hover,
			.layout_layout1 .rb_tabs_li.open .rb_tab_toggle_title,
			.layout_layout1 .rb_tabs_li.open .rb_tab_toggle_title a,
			.layout_layout1 .rb_tabs_li:hover .rb_tab_toggle_title,
			.layout_layout1 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout1 .rb_tabs_li.open .rb_tab_toggle_title,
			#header .layout_layout1 .rb_tabs_li.open .rb_tab_toggle_title a,
			#header .layout_layout1 .rb_tabs_li:hover .rb_tab_toggle_title,
			#header .layout_layout1 .rb_tabs_li:hover .rb_tab_toggle_title a,
			.layout_layout1.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout1 li:hover>a,
			.layout_layout1.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout1.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout1 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout1 li>a:hover {
				color: ;
			}

			/*end layout 1*/

			/*layout 2*/
			.rb_megamenu.layout_layout2 {
				background-color: ;
			}

			#header .layout_layout2:not(.ybc_vertical_menu) .rb_menus_li>a,
			.layout_layout2 .ybc-menu-vertical-button,
			.layout_layout2 .rb_extra_item * {
				color: #000000;
			}

			.layout_layout2 .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: #000000;
			}

			.layout_layout2:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.layout_layout2:not(.ybc_vertical_menu) .rb_menus_li.active>a,
			#header .layout_layout2:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.layout_layout2:hover .ybc-menu-vertical-button,
			.layout_layout2 .rb_extra_item button[type="submit"]:hover i,
			#header .layout_layout2:not(.ybc_vertical_menu) .rb_menus_li.active>a {
				color: ;
			}

			.layout_layout2:hover .ybc-menu-vertical-button .ybc-menu-button-toggle_icon_default .icon-bar {
				background-color: ;
			}

			.layout_layout2:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			#header .layout_layout2:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout2.ybc_vertical_menu:hover {
				background-color: ;
			}

			.layout_layout2.rb_megamenu .rb_columns_ul,
			.layout_layout2.ybc_vertical_menu .rb_menus_ul {
				background-color: ;
			}

			#header .layout_layout2 .rb_block_content a,
			.layout_layout2.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout2.ybc_vertical_menu .rb_menus_li>a,
			#header .layout_layout2 .rb_block_content p {
				color: ;
			}

			.layout_layout2 .rb_columns_ul h1,
			.layout_layout2 .rb_columns_ul h2,
			.layout_layout2 .rb_columns_ul h3,
			.layout_layout2 .rb_columns_ul h4,
			.layout_layout2 .rb_columns_ul h5,
			.layout_layout2 .rb_columns_ul h6,
			.layout_layout2 .rb_columns_ul .rb_block>h1 a,
			.layout_layout2 .rb_columns_ul .rb_block>h2 a,
			.layout_layout2 .rb_columns_ul .rb_block>h3 a,
			.layout_layout2 .rb_columns_ul .rb_block>h4 a,
			.layout_layout2 .rb_columns_ul .rb_block>h5 a,
			.layout_layout2 .rb_columns_ul .rb_block>h6 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h1 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h2 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h3 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h4 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h5 a,
			#header .layout_layout2 .rb_columns_ul .rb_block>h6 a,
			.layout_layout2 .rb_columns_ul .h1,
			.layout_layout2 .rb_columns_ul .h2,
			.layout_layout2 .rb_columns_ul .h3,
			.layout_layout2 .rb_columns_ul .h4,
			.layout_layout2 .rb_columns_ul .h5,
			.layout_layout2 .rb_columns_ul .h6 {
				color: ;
			}

			.layout_layout2 li:hover>a,
			.layout_layout2 li>a:hover,
			.layout_layout2 .rb_tabs_li.open .rb_tab_toggle_title,
			.layout_layout2 .rb_tabs_li.open .rb_tab_toggle_title a,
			.layout_layout2 .rb_tabs_li:hover .rb_tab_toggle_title,
			.layout_layout2 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout2 .rb_tabs_li.open .rb_tab_toggle_title,
			#header .layout_layout2 .rb_tabs_li.open .rb_tab_toggle_title a,
			#header .layout_layout2 .rb_tabs_li:hover .rb_tab_toggle_title,
			#header .layout_layout2 .rb_tabs_li:hover .rb_tab_toggle_title a,
			#header .layout_layout2 li:hover>a,
			.layout_layout2.ybc_vertical_menu .rb_menus_li>a,
			.layout_layout2.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout2.ybc_vertical_menu .rb_menus_li:hover>a,
			#header .layout_layout2 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout2 li>a:hover {
				color: ;
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

			.layout_layout5:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			#header .layout_layout5:not(.ybc_vertical_menu) .rb_menus_li:hover>a,
			.rb_megamenu.layout_layout5.ybc_vertical_menu:hover,
			#header .layout_layout5 .rb_menus_li:hover>a {
				background-color: ;
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
				background-color: ;
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

			.layout_layout1 .rb_menus_li:hover>a,
			#header .layout_layout1 .rb_menus_li:hover>a {
				color: ;
			}

			.layout_layout1 .rb_has_sub.rb_menus_li:hover .arrow::before {
				/*border-color: ;*/
			}

			.layout_layout1 .rb_menus_li:hover>a,
			#header .layout_layout1 .rb_menus_li:hover>a {
				background-color: ;
			}

			.layout_layout1 li:hover>a,
			.layout_layout1 li>a:hover,
			#header .layout_layout1 li:hover>a,
			#header .layout_layout1 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout1 li>a:hover {
				color: ;
			}

			/*------------------------------------------------------*/

			.layout_layout2 .rb_menus_li:hover>a,
			#header .layout_layout2 .rb_menus_li:hover>a {
				color: ;
			}

			.layout_layout2 .rb_has_sub.rb_menus_li:hover .arrow::before {
				border-color: ;
			}

			.layout_layout2 .rb_menus_li:hover>a,
			#header .layout_layout2 .rb_menus_li:hover>a {
				background-color: ;
			}

			.layout_layout2 li:hover>a,
			.layout_layout2 li>a:hover,
			#header .layout_layout2 li:hover>a,
			#header .layout_layout2 .rb_columns_ul .rb_block_type_product .product-title>a:hover,
			#header .layout_layout2 li>a:hover {
				color: ;
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

			.layout_layout5 .rb_menus_li:hover>a,
			#header .layout_layout5 .rb_menus_li:hover>a {
				background-color: ;
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
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Ecommerce Site</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
						<div class="dropdown-menu" style="width:400px;">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-md-3 col-xs-3">Sl.No</div>
										<div class="col-md-3 col-xs-3">Product Image</div>
										<div class="col-md-3 col-xs-3">Product Name</div>
										<div class="col-md-3 col-xs-3">Price in <?php echo CURRENCY; ?></div>
									</div>
								</div>
								<div class="panel-body">
									<div id="cart_product">
										<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
									</div>
								</div>
								<div class="panel-footer"></div>
							</div>
						</div>
					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "Hi, " . $_SESSION["name"]; ?></a>
						<ul class="dropdown-menu">
							<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart"> Cart</a></li>
							<li class="divider"></li>
							<li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
							<li class="divider"></li>

							<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">

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
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' style='width:220px; height:250px;'/>
								</div>
								<div class='panel-heading'>" . CURRENCY . ". $pro_price.00/-
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
								</div>
							</div>
						</div>	
			";
								}
							}
							?>
							<!--Here we get product jquery Ajax Request-->
						</div>

						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					
					<div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>

	
</body>

</html>
