<?php 
session_start();
include_once '../controller/database.php';

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
$check_email = $connect->build_query([
	"select" => "`username`",
	"table" => "`user`",
	"where" => "`email` = '{$email}'"
])->num_rows();
if ($check_user != 0) {
	header('Location: ../login-register.php?error1');
} else if ($check_email !=0){
	header('Location: ../login-register.php?error1');
} else {
	if (strlen($password) <= 8) {
		header('Location: ../login-register.php?error1');
	} else {
		$success = $connect->build_query([
			"table" => "`user`",
			"ten_cot" => "`username`, `password`, `email`",
			"gia_tri_cot" => "'$username', '{$hashed_password}', '{$email}'"
		])->insert();
		if ($success = true) {
			$get_data = $connect->build_query([
				"select" => "`username`",
				"table" => "`user`",
				"where" => "`username` = '{$username}'"
			])->select();
			while($row = mysqli_fetch_array($get_data)) {
				$_SESSION['id_user'] = $row['id'];
				$_SESSION['user'] = $row['username'];
				$_SESSION['email'] = $row['password'];
			}
			header('Location: ../index.php');
		} else {
			header('Location: ../login-register.php?error1');
		}
	}
}
?>