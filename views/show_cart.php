<?php 
    include_once 'model/formatMoney.php';
	echo '
		<div class="col-12">
	        <form action="model/close_order.php" class="cart-table" method="post">
	            <div class="table-content table-responsive">
	            	<table class="table">
	                    <thead>
	                        <tr>
	                            <th class="plantmore-product-thumbnail">Ảnh</th>
	                            <th class="cart-product-name">Tên SP</th>
	                            <th class="plantmore-product-price">Giá</th>
	                            <th class="plantmore-product-quantity">Số lượng</th>
	                            <th class="plantmore-product-subtotal">Tổng giá</th>
	                            <th class="plantmore-product-remove">Xóa</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	';
    $tong_gia=0;
    $i = 0;
	while ($row = mysqli_fetch_array($get_data)) {
        $price = formatMoney($row["price"]);
        $gia = $row["price"]*$row["number"];
        $gia_ht = formatMoney($gia);
		echo '
			<tr>
                <td class="plantmore-product-thumbnail"><a href="#"><img src="admin/image/'.$row["image"].'" alt=""></a></td>
                <td class="plantmore-product-name"><a href="#">'.$row["product_name"].'</a></td>
                <td class="plantmore-product-price"><span class="amount">'.$price.'đ</span></td>
                <td class="plantmore-product-quantity">
                    <input value="'.$row["number"].'" type="number" name="number-'.$i.'">
                </td>
                <td class="product-subtotal"><span class="amount">'.$gia_ht.'đ</span></td>
                <td class="plantmore-product-remove"><a href="javascript: void(0);" class="delete"  data-id='.$row["id"].'><i class="ion-close"></i></a></td>
            </tr>
		';
        $i++;
        $tong_gia+=$gia;
	}
    $tong_gia = formatMoney($tong_gia);
	echo '
						</tbody>
                	</table>
                </div>
                <div class="row">
                	<div class="col-md-8">
                        <div class="coupon-all">
                            <div class="coupon">
                            	<h3>Điền thông tin</h3>
                                <span>Tên người đặt *</span>
                                <input type="text" name="username" placeholder="Tên ngời đặt..." required=""><br>
                            	<span>Địa chỉ *</span>
                            	<input type="text" name="address" placeholder="Nhập địa chỉ..." required=""><br>
                            	<span>Số điện thoại *</span>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Nhập số điện thoại..." required=""> <span id="notice"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="cart-page-total">
                            <ul>
                                <li>Tổng <span>'.$tong_gia.'đ</span></li>
                            </ul>
                            <button type="submit" class="proceed-checkout-btn">Lên đơn</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
	';
?>
