<?php  
	session_start();
	include_once '../controller/database.php';
	if (!@$_SESSION['user']) {
		header("Location: ../login-register.php");
	} else {
		$user_id = $_SESSION['id_user'];
		$username = $_POST['username'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$array_id = [];
		$count = 0;
		$get_data = $connect->build_query([
			"select" => "*",
			"table" => "`order_user`",
			"where" => "`user_id`='$user_id' AND `status`='0'"
		])->select();
		while ($row = mysqli_fetch_array($get_data)) {
			$array_id[$count] = $row['id'];
			$count++;
		}
		for ($i = 0; $i < $count ; $i++) {
			$id = $array_id[$i];
			$tr = "number-".$i;
			$number = $_POST[$tr];
			$success = $connect->build_query([
				"table" => "`order_user`",
				"set" => "`number`='$number',`username` = '$username', `address` = '$address', `phone_number`='$phone_number', `status`='1'",
				"where" => "`id` = '$id'"
			])->update();
		}
		if ($success = true) {
			header('Location: ../my-order.php');
		} else {
			header('Location: ../error404.php');
		}
	}
?>