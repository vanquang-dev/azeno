<?php  
	include_once '../../controller/database.php';
	$name_brand = $_POST['name_brand'];
	$query = $connect->build_query([
		"select" => "*",
		"table" => "`brand`",
		"where" => "`name_brand` = '{$name_brand}'"
	])->num_rows();
	if ($query == 1) {
		echo '<div class="check">Tên nhãn hàng đã tồn tại!!</div>';
	} else {

	}
?>