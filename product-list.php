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
                        <h2 class="breadcrumb-title">Danh sách sản phẩm</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh sách</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <?php
                                                if (@$_GET['brand']) {
                                                    include_once 'views/show_products_list_brand.php'; 
                                                } else if (@$_GET['category']) {
                                                    include_once 'views/show_products_list_category.php'; 
                                                } else if (@$_GET['search']) {
                                                    include_once 'views/show_products_search.php';
                                                } else {
                                                    header('Location: index.php');
                                                }
                                                
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                        </div>
                        <!-- shop-product-wrapper end -->
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