<?php 
    session_start();
    include_once 'controller/database.php';
    include_once 'model/utf8tourl.php';
    if (@$_SESSION['user']) {
        header('Location: index.php');
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
                        <h2 class="breadcrumb-title">Đăng nhập &amp; Đăng ký</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Đăng nhập &amp; Đăng ký</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb lagin-and-register-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <!-- login-register-tab-list start -->
                            <div class="login-register-tab-list nav">
                                <a class="active" data-toggle="tab" href="#lg1">
                                    <h4> Đăng nhập </h4>
                                </a>
                                <a data-toggle="tab" href="#lg2">
                                    <h4> Đăng ký </h4>
                                </a>
                            </div>
                            <!-- login-register-tab-list end -->
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="model/login.php" method="post">
                                                <div class="login-input-box">
                                                    <input type="text" name="username" placeholder="Tên đăng nhập" required="">
                                                    <input type="password" name="password" placeholder="Mạt khẩu" required="">
                                                    <div class="content-view">
                                                        <?php 
                                                            if(isset($_GET['error'])){
                                                                echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 0px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                            }
                                                         ?>
                                                    </div>
                                                </div>
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Nhớ mật khẩu</label>
                                                        <a href="#">Quên mật khẩu?</a>
                                                    </div>
                                                    <div class="button-box">
                                                        <input type="submit" class="login-btn btn" id="submit-login" value="Đăng nhập">
                                                        <input type="button" class="login-btn btn" value="Đăng nhập với Facebook" style="background: #3939d0; color: #fff;">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="model/register.php" method="post">
                                                <div class="login-input-box">
                                                    <div class="form-group row">
                                                        <label class="">Tên đăng nhập</label>
                                                        <input type="text" name="username" id="username" placeholder="Tên đăng nhập" required="">
                                                        <div id="notice"></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="">Mật khẩu</label>
                                                        <input type="password" name="password" id="password" placeholder="Mật khẩu" required="">
                                                        <div id="notice1"></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="">Nhập lại mật khẩu</label>
                                                        <input type="password" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu" required="">
                                                        <div id="notice2"></div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="">Email</label>
                                                        <input name="email" placeholder="Email" id="email" type="email" required="">
                                                        <div id="notice3"></div>
                                                    </div>
                                                     <div class="content-view">
                                                        <?php 
                                                            if(isset($_GET['error1'])){
                                                                echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 0px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                            }
                                                         ?>
                                                    </div>
                                                </div>
                                                <div class="button-box">
                                                    <input type="submit" class="register-btn btn" value="Đăng ký">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->




        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>
    <script  src="js/login-register.js"></script>

</body>

</html>