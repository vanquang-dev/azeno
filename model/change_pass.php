<?php 
	session_start();
	include_once '../controller/database.php';
	if (@$_SESSION['user']) {
		$id = $_SESSION['id_user'];
		$old_password = $_POST['oldpass'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$query = $connect->build_query([
			"select" => "*",
			"table" => "`user`",
			"where" => "`id` = '{$id}'"
		])->select();
		while ($row = mysqli_fetch_array($query)) {
			$password_db = $row['password'];
		}

		if (password_verify($old_password, $password_db) && $repassword == $password && strlen($password) >= 8) {
			$success = $connect->build_query([
				"table" => "`user`",
				"set" => "`password` = '{$hashed_password}'",
				"where" => "`id` = '{$id}'"
			])->update();
			if ($success = true) {
				header('Location: ../change-password.php?success');
			} else {
				header('Location: ../change-password.php?error');
			}
		} else {
			header('Location: ../change-password.php?error');
		}
	} else {
		header("Location: ../login-register.php");
	}
		

?>