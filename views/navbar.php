
<header class="fl-header">

    <!-- haeader bottom Start -->
    <div class="haeader-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-5">
                    <div class="logo-area">
                        <a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <div class="main-menu-area text-center">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation">
                            <ul>
                                <li class="active"><a href="index.php">Trang chủ</a>
                                </li>
                                <li><a href="javascript: void(0);">Sản phẩm</a>
                                    <?php 
                                        $get_data = $connect->build_query([
                                            "select" => "*",
                                            "table" => "category"
                                        ])->select();
                                        echo '
                                            <ul class="mega-menu">
                                                <li>
                                                    <ul>
                                        ';
                                        while ($row = mysqli_fetch_array($get_data)) {
                                            $category = utf8tourl($row['name_category']);
                                            echo '
                                                <li><a href="product-list.php?category='.$category.'-'.$row["id"].'">'.$row["name_category"].'</a></li>
                                            ';
                                        }
                                        echo '
                                                    </ul>
                                                </li>
                                            </ul>
                                        ';
                                     ?>
                                </li>
                                <li><a href="javascript: void(0);">Các hãng</a>
                                    <ul class="sub-menu">
                                        <?php 
                                            $get_data = $connect->build_query([
                                                "select" => "*",
                                                "table" => "brand"
                                            ])->select();
                                            while ($row = mysqli_fetch_array($get_data)) {
                                                $brand = utf8tourl($row['name_brand']);
                                                echo '
                                                    <li><a href="product-list.php?brand='.$brand.'">'.$row["name_brand"].'</a></li>
                                                ';
                                            }
                                         ?>
                                    </ul>
                                </li>
                                <li><a href="about-us.php">Về chúng tôi</a></li>
                                <li><a href="contact-us.php">Liên hệ</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <div class="col-lg-2 col-md-8 col-7">
                    <div class="right-blok-box d-flex">
                        <div class="search-wrap">
                            <a href="javascript: void(0);" class="trigger-search"><i class="ion-ios-search-strong"></i></a>
                        </div>
                        <?php 
                            if (@$_SESSION['user']) {
                                echo '
                                    <div class="shopping-cart-wrap" style="margin-left: 15px;">
                                        <a href="javascript: void(0);"><i class="ion-ios-cart-outline"></i></a>
                                        <ul class="mini-cart">
                                            <li><a href="cart.php">Giỏ hàng</a></li>
                                            <li><a href="my-order.php">Đang vận chuyển</a></li>
                                        </ul>
                                    </div>
                                ';
                            }
                         ?>
                        <div class="shopping-cart-wrap" style="margin-left: 15px;">
                            <?php 
                                if (@$_SESSION['user']) {
                                    echo '
                                        <a href="javascript: void(0);"><i class="ion-ios-person"></i></a>
                                        <ul class="mini-cart">
                                            <li>Xin chào '.$_SESSION['user'].'</li>
                                            <li><a href="change-password.php">Đổi mật khẩu</a></li>
                                            <li><a href="logout.php">Đăng xuất</a></li>
                                        </ul>
                                        ';
                                } else {
                                    echo '<a href="login-register.php"><i class="ion-ios-person"></i></a>';
                                }
                             ?>
                        </div>
                        <div class="mobile-menu-btn d-block d-lg-none">
                            <div class="off-canvas-btn">
                                <i class="ion-android-menu"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- haeader bottom End -->

    <!-- main-search start -->
    <div class="main-search-active">
        <div class="sidebar-search-icon">
            <button class="search-close"><span class="ion-android-close"></span></button>
        </div>
        <div class="sidebar-search-input">
            <form method="get" action="product-list.php">
                <div class="form-search">
                    <input id="search" class="input-text" name="search" placeholder="Tìm kiếm ..." type="search">
                    <button class="search-btn" type="submit">
                        <i class="ion-ios-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- main-search start -->


    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.php">Trang chủ</a>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Sản phẩm</a>
                                <?php 
                                    $get_data = $connect->build_query([
                                        "select" => "*",
                                        "table" => "category"
                                    ])->select();
                                    echo '
                                        <ul class="dropdown">
                                    ';
                                    while ($row = mysqli_fetch_array($get_data)) {
                                        $category_crc32 = crc32($row['name_category']);
                                        echo '
                                            <li><a href="product-list.php?category='.$category_crc32.'">'.$row["name_category"].'</a></li>
                                        ';
                                    }
                                    echo '
                                        </ul>
                                    ';
                                 ?>
                                
                            </li>
                            <li class="menu-item-has-children "><a href="#">Các hãng</a>
                                <ul class="dropdown">
                                    <?php 
                                        $get_data = $connect->build_query([
                                            "select" => "*",
                                            "table" => "brand"
                                        ])->select();
                                        while ($row = mysqli_fetch_array($get_data)) {
                                            $brand_crc32 = crc32($row['name_brand']);
                                            echo '
                                                <li><a href="product-list.php?brand='.$brand_crc32.'">'.$row["name_brand"].'</a></li>
                                            ';
                                        }
                                     ?>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="about-us.php">Về chúng tôi</a></li>
                            <li><a href="contact-us.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->



                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li>
                                Mon - Fri : 9am to 5pm
                            </li>
                            <li>
                                <a href="#">0123456789</a>
                            </li>
                            <li>
                                <a href="#">info@yourdomain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="#"><i class="ion-social-facebook"></i></a>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                        <a href="#"><i class="ion-social-tumblr"></i></a>
                        <a href="#"><i class="ion-social-googleplus"></i></a>
                    </div>

                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>
