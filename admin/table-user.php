<?php  
session_start();
include_once '../controller/database.php';
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Thêm tài khoản admin | Azeno shop</title>
        <?php include_once 'views/header.php'; ?>
    </head>

    <body data-sidebar="dark">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php include_once 'views/navbar.php'; ?>

            <!-- ========== Left Sidebar Start ========== -->

            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <?php include_once 'views/sidebar.php'; ?>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h2 class="header-title m-t-0 m-b-30">Danh sách tài khoản</h2>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>
                                        <div class="table-responsive">
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                                <thead>
                                                    <tr>
                                                        <th>Tên đăng nhập</th>
                                                        <th>Mật khẩu</th>
                                                        <th>Email</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Tùy chọn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php include_once '../views/show_user.php'; ?>
                                                </tbody>
                                            </table>
                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <div class="card-body">
                                        <div class="text-center">
                                            <h2 class="">Thêm tài khoản</h2>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>
                                        <div class="content-view">
                                            <?php 
                                                if(isset($_GET['success'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Thêm thành công!!</div>';
                                                }elseif(isset($_GET['error'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                }
                                             ?>
                                        </div>
                                        <form action="../model/add_user.php" method="POST">
                                            
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Tên đăng nhập:</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="username" id="username" placeholder="Nhập tên đăng nhập..." required="">
                                                </div>
                                                <div id="notice"></div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-sm-2 col-form-label">Mật khẩu:</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="password" id="password" placeholder="Nhập mật khẩu..." required="">
                                                    <div id="notice1"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Nhập lại mật khẩu:</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" name="repassword" id="repassword" placeholder="Nhập lại mật khẩu..." required="">
                                                    <div id="notice2"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-email-input" class="col-sm-2 col-form-label">Nhập email:</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="email" name="email" id="email" placeholder="Nhập email..." required="">
                                                    <div id="notice3"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="text-center" style="margin: 0 auto;">
                                                    <button class="btn btn-success w-md waves-effect waves-light" type="submit">Thêm</button>
                                                </div>
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php include_once 'views/footer.php' ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <?php include_once 'views/corejs.php'; ?>
        <script src="js/table-user.js"></script>

    </body>
</html>