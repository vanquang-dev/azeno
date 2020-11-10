<?php 
    include_once 'model/formatMoney.php';
	echo '
		<div class="col-12">
            <div class="table-content table-responsive">
            	<table class="table">
                    <thead>
                        <tr>
                            <th class="plantmore-product-thumbnail">Ảnh</th>
                            <th class="cart-product-name">Tên SP</th>
                            <th class="plantmore-product-price">Số lượng</th>
                            <th class="plantmore-product-quantity">Tổng giá</th>
                            <th class="plantmore-product-subtotal">Trạng thái</th>
                            <th class="plantmore-product-remove">Hủy</th>
                        </tr>
                    </thead>
                    <tbody>
	';
    $tong_gia=0;
	while ($row = mysqli_fetch_array($get_data)) {
        $username = $row['username'];
        $address = $row['address'];
        $phone_mumber = $row['phone_number'];
        $gia = $row["price"]*$row["number"];
        $price = formatMoney($gia);
        $tong_gia+=$gia;
		echo '
			<tr>
                <td class="plantmore-product-thumbnail"><a href="#"><img src="admin/image/'.$row["image"].'" alt=""></a></td>
                <td class="plantmore-product-name"><a href="#">'.$row["product_name"].'đ</a></td>
                <td class="plantmore-product-quantity">
                    <p>'.$row["number"].'</p>
                </td>
                <td class="plantmore-product-price"><span class="amount">'.$price.'đ</span></td>
                <td class="product-subtotal"><h6 style="color: red;">Đang chuyển</h6></td>
                <td class="plantmore-product-remove"><a href="javascript: void(0);" class="delete"  data-id='.$row["id"].'><i class="ion-close"></i></a></td>
            </tr>
		';
	}
    $tong_gia = formatMoney($tong_gia);
	echo '
					</tbody>
            	</table>
            </div>
        </div>
        <div class="col-md-12" style="padding: 50px;">
            <h5>Tên người đặt:&nbsp; '.$username.'</h5> <br>
            <h5>Số điện thoại:&ensp; '.$phone_mumber.'</h5> <br>
            <h5>Địa chỉ:&emsp; &emsp; &emsp;'.$address.'</h5> <br>
            <h5>Tổng giá tiền:&ensp; '.$tong_gia.'</h5>
        </div>

	';
?>
