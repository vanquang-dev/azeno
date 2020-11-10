<?php 
    session_start();
    include_once '../controller/database.php';
    if (isset($_SESSION['username'])) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng nhập | Azeno shop</title>
        <?php include_once 'views/header.php'; ?>
    </head>
    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg.jpg');background-size: cover;background-position: center;"></div>

        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html"><img src="assets/images/logo.png" height="30" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 mt-2 text-center">Đăng nhập</h4>
                                    <p class="text-muted text-center mb-4">Đăng nhập vào trang chủ Azeno-shop.</p>
    
                                    <form class="form-horizontal" method="POST" action="../model/login_admin.php">

                                        <div class="form-group">
                                            <label for="username">Tên đăng nhập</label>
                                            <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" required="">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="userpassword">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="">
                                        </div>
                                        
                                        <div class="text-xs-center">
                                
                                            <?php 
                                            if(isset($_GET['error'])){
                                                echo '<div style="padding: 9px 12px; background-color: red; border-radius: .25rem; margin-top: 15px; margin-bottom:5px; color: white;">Tài khoản hoặc mật khẩu không chính xác.</div>';
                                            }
                                            ?>
                                           
                                        </div>

                                        <div class="form-group">
                                            <div class="text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Đăng nhập</button>
                                            </div>
                                        </div>
                                        
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
   

        <!-- JAVASCRIPT -->
        <?php include_once 'views/corejs.php'; ?>

    </body>
</html>
