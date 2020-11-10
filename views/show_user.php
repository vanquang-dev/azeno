<?php 
	$get_info = $connect->build_query([
		"table" => "`user`",
		"select" => "*",
	])->select();
	while ($row = mysqli_fetch_array($get_info)) {
		echo "
		<tr>
			<td>{$row['username']}</td>
			<td>{$row['password']}</td>
			<td>{$row['email']}</td>
			<td>{$row['date_created']}</td>
			<td style='text-align:center;'>
				<button class='btn btn-danger btn-sm waves-effect delete' data-id='{$row["id"]}'><i class='dripicons-trash'></i> Xóa </button>
			</td>
		</tr>
		";
	}
 ?>