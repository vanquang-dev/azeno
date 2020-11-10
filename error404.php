<?php 
    session_start();
    include_once 'controller/database.php';
    include_once 'model/utf8tourl.php';
 ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include 'views/header.php';?>
<body>

    <div class="main-wrapper">

        <?php include 'views/navbar.php'; ?>

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="breadcrumb-title">Lỗi</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Lỗi</li>
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
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="search-error-wrapper">
                            <h1>404</h1>
                            <h2>TRANG KHÔNG TỒN TẠI</h2>
                            <p class="home-link">Xin lỗi nhưng trang bạn đang tìm kiếm không tồn tại, đã bị xóa, tên đã thay đổi hoặc không có sẵn tạm thời.</p>
                            <form action="#" class="error-form">
                                <div class="error-form-input">
                                    <input type="text" placeholder="Tìm kiếm..." class="error-input-text">
                                    <button type="submit" class="error-s-button"><i class="ion-android-search"></i></button>
                                </div>
                            </form>
                            <a href="index.php" class="home-bacck-button">Trở về trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>

</body>

</html>