<?php  
session_start();
include_once '../controller/database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = strip_tags($username);
$password = strip_tags($password);
$username = addslashes($username);
$password = addslashes($password);

$query = $connect->build_query([
	"table" => "`admin`",
	"select" => "`password`",
	"where" => "`username` = '{$username}'"
])->num_rows();
if ($query == 0) {
	echo "<meta http-equiv='refresh' content='0;URL=../admin/login.php?error'>";
} else {
	$query1 = $connect->build_query([
		"select" => "`username`, `password`",
		"table" => "`admin`",
		"where" => "`username` = '{$username}'"
	])->select();
	while ($row = mysqli_fetch_row($query1)) {
		$username_db = $row[0];
		$password_db = $row[1];
	}
	if (($username == $username_db) && (password_verify($password, $password_db))) {
		$check_user = $connect->build_query([
			"select" => "`username`, `password`",
			"table" => "`admin`",
			"where" => "`username` = '{$username}'"
		])->num_rows();
		if($check_user == 1) {
			$get_data = $connect->build_query([
				"select" => "*",
				"table" => "`admin`",
				"where" => "`username` = '{$username}'"
			])->select();
			while ($row = mysqli_fetch_array($get_data)) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['position'] = $row['position'];
			}
			echo "<meta http-equiv='refresh' content='0;URL=../admin/index.php'>";
		} else {

		}
	} else {
		echo "<meta http-equiv='refresh' content='0;URL=../admin/login.php?error'>";
	}
}
	

?>