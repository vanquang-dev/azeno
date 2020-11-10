<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['user'])) {
	$id = $_POST['id'];
	$connect->build_query([
		"table" => "`order_user`",
		"where" => "`id` = '{$id}'"
	])->delete();
} else {
	header('Location: ../login-register.php');
}
?>