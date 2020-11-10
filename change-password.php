<?php 
    session_start();
    include_once 'controller/database.php';
    include_once 'model/utf8tourl.php';
    if (!@$_SESSION['user']) {
    	header('Location: login-register.php');
    }
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
                        <h2 class="breadcrumb-title">Đổi mật khẩu</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Đổi mật khẩu</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <div class="container" style="margin: 100px auto;">
            <div class="row">
                <div class="login-form-container m-auto col-md-6">
                    <div class="content-view">
                        <?php 
                            if(isset($_GET['error'])){
                                echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 0px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                            } else if (isset($_GET['success'])) {
                                echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 0px 0px 20px 0px; font-size: 19px">Đổi thành công!!</div>';
                            }
                         ?>
                    </div>
                    <form action="model/change_pass.php" method="post">
                        <div class="login-input-box">
                            <div class="form-group row">
                                <label class="">Mật khẩu cũ</label>
                                <input type="password" name="oldpass" placeholder="Mật khẩu cũ" required="">
                            </div>
                            <div class="form-group row">
                                <label class="">Mật khẩu</label>
                                <input type="password" name="password" id="password" placeholder="Mật khẩu" required="">
                                <div id="notice"></div>
                            </div>
                            <div class="form-group row">
                                <label  class="">Nhập lại mật khẩu</label>
                                <input type="password" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu" required="">
                                <div id="notice1"></div>
                            </div>
                            
                        </div>
                        <div class="button-box" style="text-align: center;">
                            <input type="submit" class="register-btn btn" value="Gửi" style=" border: none; background: #ff8303; color: #ffffff;">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>
    <script src="js/change_password.js"></script>
</body>

</html>