<?php 
	session_start();
	include_once '../controller/database.php';
	if (isset($_SESSION['username'])) {
		$user_id = $_POST['id'];
		$connect->build_query([
			"table" => "`order_user`",
			"set" => "`status`='2'",
			"where" => "`user_id` = '{$user_id}'"
		])->update();
	} else {
		header("Location: ../admin/login.php");
	}
?>