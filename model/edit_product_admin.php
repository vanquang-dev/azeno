<?php 
	session_start();
	include_once '../controller/database.php';
	include_once '../controller/optimize_images.php';
	if (@$_SESSION['username']) {
		$id_product = $_POST['id_product'];
		$name_product = $_POST['name_product'];
		$price = $_POST['price'];
		$introduce = $_POST['introduce'];
		$how_to_use = $_POST['how_to_use'];
		$origin = $_POST['origin'];
		
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
		
		if ($_FILES['avatar']['name'] == '') {
			$success = $connect->build_query([
				"table" => "products",
				"set" => "`id_category`='$id_catgory', `id_brand`='$id_brand', `name_product`='$name_product', `price`='$price',`introduce`='$introduce', `how_to_use`='$how_to_use', `origin`='$origin'",
				"where" => "`id` = '{$id_product}'"
			])->update();
		} else {
			$file_name = date('YmdHis', time());
			$image = new SimpleImage();
			$image->load($_FILES['avatar']['tmp_name']);
			$img_name = $file_name.".jpg";
			$image->save("../admin/image/{$img_name}");
			$success = $connect->build_query([
				"table" => "products",
				"set" => "`id_category`='$id_catgory', `id_brand`='$id_brand', `name_product`='$name_product', `price`='$price',`introduce`='$introduce', `how_to_use`='$how_to_use', `origin`='$origin', `images`='$img_name'",
				"where" => "`id` = '{$id_product}'"
			])->update();
		}
		
		if ($success = true) {
			header('Location: ../admin/edit-product.php?success&id='.$id_product.'');
		} else {
			header('Location: ../admin/edit-product.php?error&id='.$id_product.'');
		}
	} else {
		header("Location: ../admin/login.php");
	}
		
?>