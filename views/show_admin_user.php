<?php 
	$get_info = $connect->build_query([
		"table" => "`admin`",
		"select" => "*",
	])->select();
	while ($row = mysqli_fetch_array($get_info)) {
		if ($row['position'] == 0) {
			$row['position'] = 'Admin - quyền cao nhất';
		} else if ($row['position'] == 1) {
			$row['position'] = 'Biên tập viên';
		} else if ($row['position'] == 2) {
			$row['position'] = 'Marketing';
		}
		echo "
		<tr>
			<td>{$row['username']}</td>
			<td>{$row['name']}</td>
			<td>{$row['password']}</td>
			<td>{$row['position']}</td>
			<td>{$row['date_created']}</td>
			<td style='text-align:center;'>
				<button class='btn btn-danger btn-sm waves-effect delete' data-id='{$row["id"]}'><i class='dripicons-trash'></i> Xóa </button>
			</td>
		</tr>
		";
	}
 ?>