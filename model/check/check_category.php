<?php  
	include_once '../../controller/database.php';
	$name_category = $_POST['name_category'];
	$query = $connect->build_query([
		"select" => "*",
		"table" => "`category`",
		"where" => "`name_category` = '{$name_category}'"
	])->num_rows();
	if ($query == 1) {
		echo '<div class="check">Tên mặt hàng đã tồn tại!!</div>';
	} else {

	}
?>