<?php 
	session_start();
	include_once '../controller/database.php';
	include_once '../controller/optimize_images.php';
	if (@$_SESSION['username']) {
		$name_product = $_POST['name_product'];
		$price = $_POST['price'];
		$introduce = $_POST['introduce'];
		$how_to_use = $_POST['how_to_use'];
		$origin = $_POST['origin'];
		$admin_add = $_SESSION['id'];
		// Thêm nhãn hàng
		$brand = $_POST['brand'];
		$get_brand = $connect->build_query([
			"select" => "*",
			"table" => "`brand`",
			"where" => "`name_brand` = '{$brand}'"
		])->select();
		while ($row = mysqli_fetch_array($get_brand)) {
			$id_brand = $row['id'];
		}
		// Thêm loại sản phẩm
		$category = $_POST['category'];
		$get_category = $connect->build_query([
			"select" => "*",
			"table" => "`category`",
			"where" => "`name_category` = '{$category}'"
		])->select();
		while ($row = mysqli_fetch_array($get_category)) {
			$id_category = $row['id'];
		}

		// Xử lý update ảnh
		$file_name = date('YmdHis', time());
		$image = new SimpleImage();
		$image->load($_FILES['avatar']['tmp_name']);
		$img_name = $file_name.".jpg";
		$image->save("../admin/image/{$img_name}");
		$connect->build_query([
			"table" => "`products`",
			"ten_cot" => "`id_category`, `id_brand`, `name_product`, `price`, `introduce`, `how_to_use`, `origin`, `images`, admin_add",
			"gia_tri_cot" => "'$id_category', '$id_brand', '$name_product', '$price', '$introduce', '$how_to_use', '$origin', '$img_name', '$admin_add'"
		])->insert();
		header ('Location: ../admin/add-products.php?success');
	} else {
		header("Location: ../admin/login.php");
	}
		
?>