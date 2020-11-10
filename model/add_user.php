<?php 
session_start();
include_once '../controller/database.php';
if (@$_SESSION['username']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$email = $_POST['email'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$check_user = $connect->build_query([
		"select" => "`username`",
		"table" => "`user`",
		"where" => "`username` = '{$username}'"
	])->num_rows();
	if ($check_user != 0) {
		header('Location: ../admin/table-user.php?error');
	} else {
		if (strlen($password) <= 8 || $repassword != $password) {
			header('Location: ../admin/table-user.php?error');
		} else {
			$success = $connect->build_query([
				"table" => "`user`",
				"ten_cot" => "`username`, `password`, `email`",
				"gia_tri_cot" => "'$username', '{$hashed_password}', '{$email}'"
			])->insert();
			if ($success = true) {
				header('Location: ../admin/table-user.php?success');
			} else {
				header('Location: ../admin/table-user.php?error');
			}
		}
	}
} else {
	header("Location: ../admin/login.php");
}
	
?>