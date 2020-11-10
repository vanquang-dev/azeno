<?php 
	session_start();
	include_once '../controller/database.php';
	if (@$_SESSION['username']) {
		$username = $_SESSION['username'];
		$old_password = $_POST['old_password'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$query = $connect->build_query([
			"select" => "*",
			"table" => "`admin`",
			"where" => "`username` = '{$username}'"
		])->select();
		while ($row = mysqli_fetch_array($query)) {
			$password_db = $row['password'];
		}

		if (password_verify($old_password, $password_db) && $password == $password && strlen($password) >= 8) {
			$success = $connect->build_query([
				"table" => "admin",
				"set" => "`password` = '{$hashed_password}'",
				"where" => "`username` = '{$username}'"
			])->update();
			if ($success = true) {
				header('Location: ../admin/change-password.php?success');
			} else {
				header('Location: ../admin/change-password.php?error');
			}
		} else {
			header('Location: ../admin/change-password.php?error');
		}
	} else {
		header("Location: ../admin/login.php");
	}
		

?>