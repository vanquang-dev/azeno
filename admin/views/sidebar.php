
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">

        <li>
            <a href="index.php" class="waves-effect">
                <i class="dripicons-home"></i>
                <span> Trang chủ </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="dripicons-cart"></i>
                <span> Sản phẩm </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="show-products.php"><i class="dripicons-cart"></i>Tất cả sản phẩm</a></li>
                <li><a href="add-products.php"><i class="dripicons-cart"></i>Thêm sản phẩm</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="dripicons-document-edit"></i>
                <span> Bài đăng </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="#"><i class="dripicons-document-edit"></i>Tất cả bài đăng</a></li>
                <li><a href="#"><i class="dripicons-document-edit"></i>Thêm bài đăng</a></li>
                <li><a href="#"><i class="dripicons-document-edit"></i>Thêm thể loại</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="mdi mdi-calendar-check"></i>
                <span> Đơn hàng </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="show-order.php"><i class="mdi mdi-calendar-check"></i>Đang chuyển</a></li>
                <li><a href="show-order-success.php"><i class="mdi mdi-calendar-check"></i>Đã chuyển xong</a></li>
            </ul>
        </li>
        
         <li>
            <a href="#" class="waves-effect">
                <i class="dripicons-broadcast"></i>
                <span> Thêm quản cáo </span>
            </a>
        </li>
        <?php 
            if ($_SESSION['position'] == 0) {
                echo '
                     <li>
                        <a href="admin-user.php" class="waves-effect">
                            <i class="dripicons-user-group"></i>
                            <span> Bảng quản trị </span>
                        </a>
                    </li>
                ';
            }
         ?>
        <li>
            <a href="table-user.php" class="waves-effect">
                <i class="dripicons-user"></i>
                <span>Bảng người dùng</span>
            </a>
        </li>

        <li>
            <a href="change-password.php" class="waves-effect">
                <i class="dripicons-lock"></i>
                <span>Đổi mật khẩu </span>
            </a>
        </li>

        <li>
            <a href="logout.php" class="waves-effect">
                <i class="dripicons-power"></i>
                <span>Đăng xuất</span>
            </a>
        </li>

    </ul>
</div>
