<?php
session_start();
include "db.php";

if (isset($_POST["getProduct"])) {
	$limit = 9;
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
}
if (isset($_POST["get_selected_Category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"])) {
	if (isset($_POST["get_selected_Category"])) {
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	} else if (isset($_POST["selectBrand"])) {
		$id = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$id'";
	} else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}

	$run_query = mysqli_query($con, $sql);
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
								<div class='panel-heading'>Rs.$pro_price.00/-
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>Add To Cart</button>
								</div>
							</div>
						</div>	
			";
	}
}



if (isset($_POST["addToCart"])) {
	$p_id = $_POST["proId"];

	if (isset($_SESSION["uid"])) {

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con, $sql);
		$count = mysqli_num_rows($run_query);
		if ($count > 0) {
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			"; //not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if (mysqli_query($con, $sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
	} else {
		$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query) > 0) {
			echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
			exit();
		}
		$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
		if (mysqli_query($con, $sql)) {
			echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to cart!</b>
					</div>
				";
			exit();
		}
	}
}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	} else {
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}

	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id, a.product_title, a.product_price, b.id, b.qty, pi.product_image
						FROM products a
								 JOIN cart b ON a.product_id = b.p_id
								 LEFT JOIN (SELECT product_id, MIN(product_image) product_image FROM product_image GROUP BY product_id) pi
													 ON pi.product_id = a.product_id
						WHERE b.user_id = $_SESSION[uid]";
	} else {
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id, a.product_title, a.product_price, b.id, b.qty, pi.product_image
						FROM products a
								 JOIN cart b ON a.product_id = b.p_id
								 LEFT JOIN (SELECT product_id, MIN(product_image) product_image FROM product_image GROUP BY product_id) pi
													 ON pi.product_id = a.product_id
						WHERE b.user_id < 0";
	}
	$query = mysqli_query($con, $sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n = 0;

			echo "<ul class='cart-products'>";

			while ($row = mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];

				echo "<li>
								<div class='cart-product-line no-gutters align-items-center'>
									<span class='product-image media-middle'>
										<a href='/ecommerce-app-h/product.php?id=$product_id'>
											<img src='/ecommerce-app-h/product_images/$product_image' alt='$product_title' class='img-fluid'>
										</a>
							    </span>
									<div class='product-info'>
										<a class='product-name' href='/ecommerce-app-h/product.php?id=$product_id'>$product_title</a>
										<div class='product-price-quantity'>
											<span class='text-muted'><span class='qty'>$qty</span> x</span>
											<span class='product-price'>" . CURRENCY . "<span class='price'>$product_price</span></span> 
										</div>
									</div>
									<div class='remove-cart'>
										<a class='remove-from-cart remove' rel='nofollow' href='#' remove_id='$product_id' title='remove from cart'>
											<i class='fa fa-trash-o' aria-hidden='true'></i>
										</a>
									</div>
								</div>
							</li>";
			}


			echo "</ul>";
			echo "<div class='cart-subtotals'>
							<p class='cart-products-count'>There is $n item" . ($n == 1 ? 's' : '') . " in your cart.</p>
							<div class='products clearfix'>
								<span class='label'>Subtotal</span>
								<span class='price-total value float-right net_total'></span>
							</div>
						</div>
						<div class='cart-buttons text-center'>
							<a rel='nofollow' class='btn btn-secondary btn-block' href='//rubiktheme.com/demo/rb_davici_demo/en/cart?action=show'>Cart</a>
							<a href='//rubiktheme.com/demo/rb_davici_demo/en/order' class='btn btn-primary btn-block btn-lg'>Checkout</a>
						</div>";
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_form.php'>";
			$n = 0;
			while ($row = mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];

				echo
				'<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id="' . $product_id . '" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" update_id="' . $product_id . '" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="' . $product_id . '"/>
								<input type="hidden" name="" value="' . $cart_item_id . '"/>
								<div class="col-md-2"><img class="img-responsive" src="product_images/' . $product_image . '"></div>
								<div class="col-md-2">' . $product_title . '</div>
								<div class="col-md-2"><input type="text" class="form-control qty" value="' . $qty . '" ></div>
								<div class="col-md-2"><input type="text" class="form-control price" value="' . $product_price . '" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="' . $product_price . '" readonly="readonly"></div>
							</div>';
			}

			echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
					</div>';
			if (!isset($_SESSION["uid"])) {
				echo '<input type="submit" style="float:right;" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout" >
							</form>';
			} else {
				//Paypal checkout form
				echo '
						</form>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="shoppingcart@ecommerceastro.com">
							<input type="hidden" name="upload" value="1">';

				$x = 0;
				$sql = "SELECT a.product_id, a.product_title, a.product_price, pi.product_image, b.id, b.qty
								FROM products a
										 JOIN cart b ON a.product_id = b.p_id
										 LEFT JOIN (SELECT product_id, MIN(product_image) product_image FROM product_image GROUP BY product_id) pi
															 ON pi.product_id = a.product_id
								WHERE b.user_id = $_SESSION[uid]";

				$query = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_array($query)) {
					$x++;
					echo
					'<input type="hidden" name="item_name_' . $x . '" value="' . $row["product_title"] . '">
								  	 <input type="hidden" name="item_number_' . $x . '" value="' . $x . '">
								     <input type="hidden" name="amount_' . $x . '" value="' . $row["product_price"] . '">
								     <input type="hidden" name="quantity_' . $x . '" value="' . $row["qty"] . '">';
				}

				echo
				'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://localhost/ecommerce-app-h/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/ecommerce-app-h/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="' . $_SESSION["uid"] . '"/>
									<input style="float:right;margin-right:80px;" type="image" name="submit"
										src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout"
										alt="PayPal - The safer, easier way to pay online">
								</form>';
			}
		}
	}
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	} else {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if (mysqli_query($con, $sql)) {
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	} else {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if (mysqli_query($con, $sql)) {
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}

?>
