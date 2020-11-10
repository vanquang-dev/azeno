<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['username'])) {
	$user_id = $_POST['user_id'];
	$product_id = $_POST['product_id'];
	$connect->build_query([
		"table" => "`order_user`",
		"where" => "`user_id` = '{$user_id}' AND `product_id`='$product_id' AND `status`='1'"
	])->delete();
} else {
	header('Location: ../admin/login.php');
}
?>