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

        <!-- Hero Section Start -->
        <?php 
            if (isset($_GET['page'])) {
                if ($_GET['page'] < '2') {
                    include 'views/slides.php'; 
                }
            } else {
                include 'views/slides.php'; 
            }
        ?>
        <!-- Hero Section End -->
        
        <?php 
            if (isset($_GET['page'])) {
                if ($_GET['page'] < '2') {
                    include 'views/show_product_hot.php'; 
                }
            } else {
                include 'views/show_product_hot.php'; 
            }
        ?>
        

        <!-- Start Product Area -->
        <div class="porduct-area section-pb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-title text-center">
                            <h2>Tất cả sản phẩm</h2>
                            <p>Dưới đây là tổng hợp những sản phẩm shop đang bán</p>
                        </div>
                    </div>
                </div>

                <?php include_once 'views/show_products.php'; ?>

            </div>
        </div>
        <!-- Start Product End -->


        <!-- testimonial-area start -->
        <?php include_once 'views/customer.php'; ?>
        <!-- testimonial-area end -->
        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>

</body>

</html>