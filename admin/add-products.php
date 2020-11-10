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
                                            <h2 class="">Thêm sản phẩm</h2>
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
                                         <form action="../model/add_products.php" method="POST" enctype= "multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name_product">Tên sản phẩm</label>
                                                        <input id="name_product" name="name_product" type="text" class="form-control" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Giá sản phẩm</label>
                                                        <input id="price" name="price" type="text" class="form-control" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="introduct">Giới thiệu</label>
                                                        <textarea id="introduct" name="introduce" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="origin">Xuất xứ</label>
                                                        <input id="origin" name="origin" type="text" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label">Tên hãng</label>
                                                        <select class="form-control select2" name="brand">
                                                            <?php 
                                                                $query = $connect->build_query([
                                                                    "select" => "*",
                                                                    "table" => "brand"
                                                                ])->select();

                                                                while ($row = mysqli_fetch_array($query)) {
                                                                    $name_brand = $row['name_brand'];
                                                                    echo "
                                                                        <option value='$name_brand'>-- $name_brand --</option>
                                                                    ";
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Loại sản phẩm</label>

                                                        <select name="category" class="form-control">
                                                            <?php 
                                                                $query = $connect->build_query([
                                                                    "select" => "*",
                                                                    "table" => "category"
                                                                ])->select();

                                                                while ($row = mysqli_fetch_array($query)) {
                                                                    $name_category = $row['name_category'];
                                                                    echo "
                                                                        <option value='$name_category'>-- $name_category --</option>
                                                                    ";
                                                                }
                                                            ?>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Cách dùng</label>
                                                        <textarea id="how_to_use" name="how_to_use" rows="5" class="form-control"></textarea>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tải ảnh</label> <br>
                                                        <input name="avatar" type="file" class="form_file" id="img_up">
                                                        <div class="box-pre-img hidden"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-success w-md waves-effect waves-light" type="submit">Thêm</button>
                                        </form>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <div class="text-center">
                                            <h2 class="">Thêm hãng, thể loại</h2>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <form action="../model/add_brand.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="name_brand">Tên hãng</label>
                                                        <input id="name_brand" name="name_brand" type="text" class="form-control">
                                                        <div id="notice"></div>
                                                        <button class="btn btn-success w-md waves-effect waves-light" type="submit">Thêm</button>
                                                    </div>
                                                </form>
                                                <div class="content-view">
                                                    <?php 
                                                        if(isset($_GET['success1'])){
                                                            echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Thêm thành công!!</div>';
                                                        }elseif(isset($_GET['error1'])){
                                                            echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                        }
                                                     ?>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <form action="../model/add_category.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="name_category">Tên loại sản phẩm</label>
                                                        <input id="name_category" name="name_category" type="text" class="form-control">
                                                        <div id="notice1"></div>
                                                        <button class="btn btn-success w-md waves-effect waves-light" type="submit">Thêm</button>
                                                    </div>
                                                </form>
                                                <div class="content-view">
                                                    <?php 
                                                        if(isset($_GET['success2'])){
                                                            echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Thêm thành công!!</div>';
                                                        }elseif(isset($_GET['error2'])){
                                                            echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                        }
                                                     ?>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

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
        <script type="text/javascript" src="js/jquery.number.min.js"></script>
        <script src="js/add-products.js"></script>
        
    </body>
</html>