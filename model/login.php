<?php  
	session_start();
	include_once '../controller/database.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = strip_tags($username);
	$password = strip_tags($password);
	$username = addslashes($username);
	$password = addslashes($password);

	$check_user = $connect->build_query([
		"select" => "*",
		"table" => "`user`",
		"where" => "`username`='$username'"
	])->num_rows();
	if ($check_user == 0) {
		echo "<meta http-equiv='refresh' content='0;URL=../login-register.php?error'>";
	} else {
		$query = $connect->build_query([
			"select" => "*",
			"table" => "`user`",
			"where" => "`username` = '{$username}'"
		])->select();
		while ($row = mysqli_fetch_array($query)) {
			$username_db = $row['username'];
			$password_db = $row['password'];
		}
		if (($username == $username_db) && (password_verify($password, $password_db))) {
			$check = $connect->build_query([
				"select" => "`username`, `password`",
				"table" => "`user`",
				"where" => "`username` = '{$username}'"
			])->num_rows();
			if($check == 1) {
				$get_data = $connect->build_query([
					"select" => "*",
					"table" => "`user`",
					"where" => "`username` = '{$username}'"
				])->select();
				while ($row = mysqli_fetch_array($get_data)) {
					$_SESSION['id_user'] = $row['id'];
					$_SESSION['user'] = $row['username'];
					$_SESSION['email'] = $row['email'];
				}
				echo "<meta http-equiv='refresh' content='0;URL=../index.php'>";
			} else {

			}
		} else {
			echo "<meta http-equiv='refresh' content='0;URL=../login-register.php?error'>";
		}
	}

?>