<?php 
	session_start();
	include_once '../controller/database.php';
	if (@$_SESSION['user']) {
		$user_id = $_SESSION['id_user'];
		$product_id = $_POST['product_id'];
		$image = $_POST['image'];
		$product_name = $_POST['product_name'];
		$price = $_POST['price'];
		$number = $_POST['number'];

		$check = $connect->build_query([
			"select" => "*",
			"table" => "`order_user`",
			"where" => "`product_id`='$product_id' AND `status`='0'"
		])->num_rows();

		if ($check == 0) {
			$success = $connect->build_query([
				"table" => "`order_user`",
				"ten_cot" => "`user_id`, `product_id`, `image`, `product_name`, `price`, `number`, `status`",
				"gia_tri_cot" => "'$user_id', '$product_id', '$image', '$product_name', '$price', '$number', '0'"
			])->insert();

			if ($success = true) {
				header('Location: ../cart.php');
			} else {
				header('Location: ../error404.php');
			}
		} else {
			header('Location: ../cart.php');
		}
	} else {
		header('Location: ../login-register.php');
	}
		
?>