<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['username'])) {
	$id = $_POST['id'];
	$check_delete = $connect->build_query([
		"select" => "*",
		"table" => "`products`",
		"where" => "`id` = '{$id}'"
	])->num_rows();
	if ($check_delete == 0) {
	} else {
		$connect->build_query([
			"table" => "`products`",
			"where" => "`id` = '{$id}'"
		])->delete();
	}
} else {
	header('Location: ../admin/login.php');
}
?>