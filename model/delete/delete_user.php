<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['username'])) {
	$id = $_POST['id'];
	$connect->build_query([
		"table" => "`user`",
		"where" => "`id` = '{$id}'"
	])->delete();
} else {
	header('Location: ../admin/login.php');
}
?>