<?php 
session_start();
include_once '../controller/database.php';
if (@$_SESSION['username']) {
	if ($_SESSION['position'] != 0) {
		header('Location: ../admin/admin-user.php?error');
	} else {
		$username = $_POST['username'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$position = $_POST['position'];

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$check_user = $connect->build_query([
			"select" => "`username`",
			"table" => "`admin`",
			"where" => "`username` = '{$username}'"
		])->num_rows();
		if ($check_user != 0) {
			header('Location: ../admin/admin-user.php?error');
		} else {
			if (strlen($password) <= 8 || $repassword != $password) {
				header('Location: ../admin/admin-user.php?error');
			} else {
				$success = $connect->build_query([
					"table" => "`admin`",
					"ten_cot" => "`username`, `name`, `password`, `position`",
					"gia_tri_cot" => "'$username', '{$name}', '{$hashed_password}', '{$position}'"
				])->insert();
				if ($success = true) {
					header('Location: ../admin/admin-user.php?success');
				} else {
					header('Location: ../admin/admin-user.php?error');
				}
			}
		}
	}
} else {
	header("Location: ../admin/login.php");
}
	
?>