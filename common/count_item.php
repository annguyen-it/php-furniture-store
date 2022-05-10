<?php

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
