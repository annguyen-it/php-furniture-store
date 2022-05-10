<?php

if (isset($_SESSION["uid"])) {
  //When user is logged in this query will execute
  $sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
} else {
  //When user is not logged in this query will execute
  $sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
}

$query = mysqli_query($con, $sql);
//display cart item in dropdown menu
if (mysqli_num_rows($query) > 0) {
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
      <div class="col-md-3"><?= $n ?></div>
      <div class="col-md-3"><img class="img-responsive" src="product_images/<?= $product_image ?>" /></div>
      <div class="col-md-3"><?= $product_title ?></div>
      <div class="col-md-3"><? CURRENCY ?> <?= $product_price ?></div>
    </div>
  <?php
  }
  ?>
  <a style="float:right;" href="cart.php" class="btn btn-warning">
    Edit&nbsp;&nbsp;
    <span class="glyphicon glyphicon-edit"></span>
  </a>
<?php
}
