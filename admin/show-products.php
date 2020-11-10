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
        <title>Tất cả sản phẩm | Azeno shop</title>
        <?php include_once 'views/header.php'; ?>
    </head>

    <body data-sidebar="dark">

        <!-- Loader -->

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
                                            <h2 class="">Tất cả sản phẩm</h2>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>
                                        <div class="content-view">
                                            <?php 
                                                if(isset($_GET['success'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Xóa thành công!!</div>';
                                                }elseif(isset($_GET['error'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                }
                                             ?>
                                        </div>
                                        <div class="row">
                                            <?php include_once '../views/show_products_admin.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!-- container-fluid -->

                </div>
                <!-- End Page-content -->

                <?php include_once 'views/footer.php' ?>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <?php include_once 'views/corejs.php'; ?>
        <script src="js/show-product.js"></script>

    </body>
</html>
