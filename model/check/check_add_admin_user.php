<?php 
	session_start();
	include_once '../../controller/database.php';
	$username = $_POST['username'];
	$query = $connect->build_query([
		"table" => "`admin`",
		"select" => "*",
		"where" => "`username`='{$username}'",
	])->num_rows();
	if ($query != 0 ) {
	echo '<div class="check">Tài khoản đã tồn tại!!</div>';
	} else if ($username == '') {

	} else if (strlen($username) < 5 || strlen($username) > 24 || preg_match('/\W/', $username)) {
		echo '<div class="check">Tên đăng nhập có 5-24 ký tự, không có khoảng trắng và ký tự đặc biệt!!</div>';
	}
 ?>