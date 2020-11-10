<?php 
session_start();
include_once '../../controller/database.php';
if (isset($_SESSION['username'])) {
	if ($_SESSION['position'] == 0) {
		$id = $_POST['id_user'];
		$check_delete = $connect->build_query([
			"select" => "`position`",
			"table" => "`admin`",
			"where" => "`id` = '{$id}'"
		])->select();
		$row = mysqli_fetch_array($check_delete);
		if ($row[0] == 0) {
			echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
		} else {
			$connect->build_query([
				"table" => "`admin`",
				"where" => "`id` = '{$id}'"
			])->delete();
			echo '<script>location.reload();</script>';
		}
	} else {
		echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
	}
} else {
	header('Location: ../admin/login.php');
}
?>