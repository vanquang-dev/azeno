<?php 
    session_start();
    include_once 'controller/database.php';
    include_once 'model/utf8tourl.php';
    if (!isset($_SESSION['user'])) {
        header('Location: login-register.php');
    }
 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include 'views/header.php';?>
<body>

    <div class="main-wrapper">
!
        <?php include 'views/navbar.php'; ?>
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area <se>!</se>ction-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Đơn đã đặt</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Đơn hàng</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb wishlist-page">
            <div class="container">
                <div class="row">
                    <?php  
                        $user_id = $_SESSION['id_user'];
                        $get_data = $connect->build_query([
                            "select" => "*",
                            "table" => "`order_user`",
                            "where" => "`user_id`='$user_id' AND `status`='1'"
                        ])->select();
                        $check = mysqli_num_rows($get_data);
                        if ($check == 0) {
                            echo '
                                <div class="m-auto">
                                    <h3>Không có sản phẩm nào</h3>
                                </div>
                            ';
                        } else {
                            include_once 'views/show_close_order.php';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>
    <script src="js/my_order.js"></script>
</body>

</html>