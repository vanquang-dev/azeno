<?php  
    include_once '../model/formatMoney.php';
    $user_id = $_GET['user_id'];
    $get_data = $connect->build_query([
        "select" => "*",
        "table" => "`order_user`",
        "where" => "`user_id`='$user_id' AND `status`='2'"
    ])->select();
    while ($row = mysqli_fetch_array($get_data)) {
        $gia = $row["price"]*$row["number"];
        $gia_ht = formatMoney($gia);
        echo '
            <tr>
                <td class="product-list-img">
                    <img src="image/'.$row["image"].'" class="img-fluid avatar-md rounded" alt="tbl">
                </td>
                <td>
                    <h6 class="mt-0 mb-1">'.$row["product_name"].'</h6>
                </td>
                <td>'.$row["number"].'</td>
                <td>'.$gia_ht.'</td>
            </tr>
        ';
    }
?>