<?php  
	session_start();
	include '../controller/database.php';
	if (@$_SESSION['username']) {
		$name_category = $_POST['name_category'];
		$check = $connect->build_query([
			"select" => "*",
			"table" => "`category`",
			"where" => "`name_category`='{$name_category}'"
		])->num_rows();
		if ($check == 0) {
			$connect->build_query([
				"table" => "`category`",
				"ten_cot" => "`name_category`",
				"gia_tri_cot" => "'{$name_category}'"
			])->insert();
			header('Location: ../admin/add-products.php?success2');
		} else {
			header('Location: ../admin/add-products.php?error2');
		}
	} else {
		header("Location: ../admin/login.php");
	}
		
?>