<?php  
	session_start();
	include '../controller/database.php';
	if (@$_SESSION['username']) {
		$name_brand = $_POST['name_brand'];
		$check = $connect->build_query([
			"select" => "*",
			"table" => "`brand`",
			"where" => "`name_brand`='{$name_brand}'"
		])->num_rows();
		if ($check == 0) {
			$connect->build_query([
				"table" => "`brand`",
				"ten_cot" => "`name_brand`",
				"gia_tri_cot" => "'{$name_brand}'"
			])->insert();
			header('Location: ../admin/add-products.php?success1');
		} else {
			header('Location: ../admin/add-products.php?error1');
		}
	} else {
		header("Location: ../admin/login.php");
	}
?>