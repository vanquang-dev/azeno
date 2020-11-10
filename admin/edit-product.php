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
                                            <h2 class="">Sửa sản phẩm</h2>
                                        </div>
                                        <div style="margin-bottom: 50px;"></div>
                                        <div class="content-view">
                                            <?php 
                                                if (isset($_GET['id'])) {
                                                    $id_product = $_GET['id'];
                                                    $get_product = $connect->build_query([
                                                        "select" => "*",
                                                        "table" => "`products`",
                                                        "where" => "`id` = '{$id_product}'"
                                                    ])->select();
                                                    if (mysqli_num_rows($get_product) != 0) {
                                                        while ($row = mysqli_fetch_array($get_product)) {
                                                            $name_product = $row['name_product'];
                                                            $price = $row['price'];
                                                            $introduce = $row['introduce'];
                                                            $origin = $row['origin'];
                                                            $how_to_use = $row['how_to_use'];
                                                        }
                                                    }
                                                } else {
                                                    echo "<meta http-equiv='refresh' content='0;URL=show-products.php'>";
                                                }

                                                if(isset($_GET['success'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: #70ba7f; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Sửa thành công!!</div>';
                                                }elseif(isset($_GET['error'])){
                                                    echo '<div style="padding: 5px 24px; border-radius: 20px; background-color: red; color: white; text-align:center; margin: 20px 0px 20px 0px; font-size: 19px">Đã xảy ra lỗi vui lòng thử lại!!</div>';
                                                }
                                             ?>
                                        </div>
                                        <form action="../model/edit_product_admin.php" method="POST" enctype= "multipart/form-data">
                                            <input type="hidden" name="id_product" value="<?php echo $id_product; ?>">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="name_product">Tên sản phẩm</label>
                                                        <input id="name_product" name="name_product" type="text" class="form-control" value="<?php echo $name_product; ?>" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Giá sản phẩm</label>
                                                        <input id="price" name="price" type="text" class="form-control" value="<?php echo $price; ?>" required="">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="introduce">Giới thiệu</label>
                                                        <textarea id="introduce" name="introduce" rows="5" class="form-control"><?php echo $introduce; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="origin">Xuất xứ</label>
                                                        <input id="origin" name="origin" type="text" class="form-control" value="<?php echo $origin; ?>">
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
                                                        <textarea id="how_to_use" name="how_to_use" rows="5" class="form-control"><?php echo $how_to_use; ?></textarea>
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tải ảnh</label> <br>
                                                        <input name="avatar" type="file" class="form_file" id="img_up">
                                                        <div class="box-pre-img hidden"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-success w-md waves-effect waves-light" type="submit" style="margin-right: 15px;">Sửa</button>
                                            <a class="btn btn-danger w-md waves-effect waves-light" href="../admin/show-products.php">Trở lại</a>
                                        </form>

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
        <script src="js/edit-product.js"></script>
    </body>
</html>