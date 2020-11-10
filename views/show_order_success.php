<?php 
	include_once '../model/formatMoney.php';
	$get_number_user = $connect->build_query([
		"table" => "`order_user`",
		"select" => "DISTINCT `user_id`",
		"where" => "`status` = '2'"
	])->select();
	while ($row = mysqli_fetch_array($get_number_user)) {

		$user_id = $row["user_id"];

		$get_data = $connect->build_query([
			"select" => "*",
			"table" => "`order_user`",
			"where" => "`user_id`='$user_id' AND `status`='2'"
		])->select();
		$array = [];
		$i = 0;
		$tong_gia=0;
		while ($du_lieu = mysqli_fetch_array($get_data)) {
			$username = $du_lieu['username'];
	        $address = $du_lieu['address'];
	        $phone_mumber = $du_lieu['phone_number'];
	        $gia = $du_lieu["price"]*$du_lieu["number"];
	        $price = formatMoney($gia);
	        $tong_gia+=$gia;
	        $date_creted=$du_lieu['date_created'];
	        $array[$i]=$du_lieu['product_name']." ( ".$du_lieu['number']." cái )";
	        $i++;
		}
		$tong_gia = formatMoney($tong_gia);
		$products = "";
		foreach ($array as $value) {
			$products .= $value.", ";
		}
		echo "
		<tr>
			<td>$user_id</td>
			<td>$username</td>
			<td>$address</td>
			<td>$phone_mumber</td>
			<td>$products</td>
			<td>$tong_gia đ</td>
			<td>$date_creted</td>
			<td style='text-align:center;'>
				<form action='views-order-success.php' method='get'>
					<input type='hidden' name='user_id' value='$user_id'>
					<button class='btn btn-info btn-sm waves-effect' type='submit'><i class='dripicons-preview'></i> Xem </button>
					<button class='btn btn-danger btn-sm waves-effect delete' data-id='$user_id'><i class='dripicons-trash'></i> Xóa </button>
				</form>
			</td>
		</tr>
		";
	}
 ?>