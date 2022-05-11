<?php

require "config/constants.php";
session_start();
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
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Ecommerce</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
				</ul>
			</div>
		</div>
	</div>
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout">
							<?php

							$sql = '';
							if (isset($_SESSION["uid"])) {
								//When user is logged in this query will execute
								$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
							} else {
								//When user is not logged in this query will execute
								$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
							}
							$query = mysqli_query($con, $sql);

							if (mysqli_num_rows($query) > 0) {
								//display user cart item with "Ready to checkout" button if user is not login
							?>
								<form method="post" action="login_form.php">

									<?php
									$n = 0;
									while ($row = mysqli_fetch_array($query)) {
										$n++;
										$product_id = $row["product_id"];
										$product_title = $row["product_title"];
										$product_price = $row["product_price"];
										$product_image = $row["product_image"];
										$cart_item_id = $row["id"];
										$qty = $row["qty"];

									?>
										<div class="row">
											<div class="col-md-2">
												<div class="btn-group">
													<a href="#" remove_id="<?= $product_id ?>" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
													<a href="#" update_id="<?= $product_id ?>" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
												</div>
											</div>
											<input type="hidden" name="product_id[]" value="<?= $product_id ?>" />
											<input type="hidden" name="" value="<?= $cart_item_id ?>" />
											<div class="col-md-2"><img class="img-responsive" src="product_images/<?= $product_image ?>"></div>
											<div class="col-md-2"><?= $product_title ?></div>
											<div class="col-md-2"><input type="text" class="form-control qty" value="<?= $qty ?>"></div>
											<div class="col-md-2"><input type="text" class="form-control price" value="<?= $product_price ?>" readonly="readonly"></div>
											<div class="col-md-2"><input type="text" class="form-control total" value="<?= $product_price ?>" readonly="readonly"></div>
										</div>
									<?php
									}
									?>

									<div class="row">
										<div class="col-md-8"></div>
										<div class="col-md-4">
											<b class="net_total" style="font-size:20px;"> </b>
										</div>

										<?php
										if (!isset($_SESSION["uid"])) {
										?>
											<input type="submit" style="float:right;" name="login_user_with_product" class="btn btn-info btn-lg" value="Ready to Checkout">
									<?php
										}
									}
									?>
								</form>

								<?php
								if (isset($_SESSION["uid"])) {
								?>

									<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="business" value="shoppingcart@ecommerceastro.com">
										<input type="hidden" name="upload" value="1">

										<?php

										$x = 0;
										$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
										$query = mysqli_query($con, $sql);
										while ($row = mysqli_fetch_array($query)) {
											$x++;
										?>

											<input type="hidden" name="item_name_<?= $x ?>" value="<?= $row["product_title"] ?>">
											<input type="hidden" name="item_number_<?= $x ?>" value="<?= $x ?>">
											<input type="hidden" name="amount_<?= $x ?>" value="<?= $row["product_price"] ?>">
											<input type="hidden" name="quantity_<?= $x ?>" value="<?= $row["qty"] ?>">';

										<?php
										}

										?>

										<input type="hidden" name="return" value="http://localhost/project1/payment_success.php" />
										<input type="hidden" name="notify_url" value="http://localhost/ecommerce-app-h/payment_success.php">
										<input type="hidden" name="cancel_return" value="http://localhost/ecommerce-app-h/cancel.php" />
										<input type="hidden" name="currency_code" value="USD" />
										<input type="hidden" name="custom" value="<?= $_SESSION["uid"] ?>" />
										<input style="float:right;margin-right:80px;" type="image" name="submit" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="PayPal Checkout" alt="PayPal - The safer, easier way to pay online">
									</form>

								<?php
								}
								?>
						</div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'>
						</div>
						<div class="col-md-2">Product Name</div>
						<div class="col-md-2"><input type='text' class='form-control' value='1'></div>
						<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
					</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
					</div>
				</div>
				<div class="panel-footer"></div>
			</div>
		</div>
		<div class="col-md-2"></div>

	</div>

	<script>
		var CURRENCY = '<?php echo CURRENCY; ?>';
	</script>
</body>

</html>
