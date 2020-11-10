<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['username'])) {
	$id = $_POST['id'];
	$connect->build_query([
		"table" => "`order_user`",
		"where" => "`user_id` = '{$id}' AND `status`='1'"
	])->delete();
} else {
	header('Location: ../admin/login.php');
}
?>