<?php 
    session_start();
    include_once 'controller/database.php';
    include_once 'model/utf8tourl.php';
 ?>
<!doctype html>
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
                        <h2 class="breadcrumb-title">Về chúng tôi</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Chúng tôi</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap">
            <!-- About Us Area -->
            <div class="about-us-area section-ptb">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-us-contents">
                                <h3>Chào mùng đến với shop của chúng tôi</h3>
                                <p>Chúng tôi là shop bán các sản phẩm phục vụ cho những salon, chúng tôi có nhiệu nhà phân phối trên cả nước và bán nhiều loại mặt hàng hot trên thị trường. Với đội ngũ bán hàng cùng đội ngũ kỹ thuật chuyên nghiệp luôn sẵ sàng giải đáp mọi thắc mắc về kỹ thuật, cách dùng sàn phẩm giúp bạn. </p>
                                <div class="about-us-btn">
                                    <a href="#">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <div class="about-us-image text-right">
                                <img src="assets/images/other/about-us.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// About Us Area -->


            <!-- Project Count Area Start -->
            <div class="project-count-area section-pb section-pt-60 project-count-bg">
                <div class="container">
                    <div class="project-count-inner_two">
                        <div class="row">
                            <div class="col-lg-12 ml-auto mr-auto">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-fun-factor">
                                            <!-- counter start -->
                                            <div class="counter text-center">
                                                <h3><span class="counter-active">50</span>+</h3>
                                                <p>project done</p>
                                            </div>
                                            <!-- counter end -->
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-fun-factor">
                                            <!-- counter start -->
                                            <div class="counter text-center">
                                                <h3><span class="counter-active">65</span>+</h3>
                                                <p>cups of coffee</p>
                                            </div>
                                            <!-- counter end -->
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-fun-factor">
                                            <!-- counter start -->
                                            <div class="counter text-center">
                                                <h3><span class="counter-active">160</span>+</h3>
                                                <p>branding</p>
                                            </div>
                                            <!-- counter end -->
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single-fun-factor">
                                            <!-- counter start -->
                                            <div class="counter text-center">
                                                <h3><span class="counter-active">82</span>+</h3>
                                                <p>happy clients</p>
                                            </div>
                                            <!-- counter end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Count Area End -->


            <!-- Our Team Area -->
            <div class="our-team-area section-ptb">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="single-team mt--30">
                                <div class="single-team-image">
                                    <img src="assets/images/team/team-01.jpg" alt="">
                                </div>
                                <div class="single-team-info">
                                    <h5>Nguyễn Văn Huyên</h5>
                                    <p>Giám đốc</p>
                                </div>
                                <ul class="personsl-socail">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="single-team mt--30">
                                <div class="single-team-image">
                                    <img src="assets/images/team/team-02.jpg" alt="">
                                </div>
                                <div class="single-team-info">
                                    <h5>Mẫn Thị Hiên</h5>
                                    <p>Marketing</p>
                                </div>
                                <ul class="personsl-socail">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="single-team mt--30">
                                <div class="single-team-image">
                                    <img src="assets/images/team/team-03.jpg" alt="">
                                </div>
                                <div class="single-team-info">
                                    <h5>Mẫn Thị Yến</h5>
                                    <p>Telesale</p>
                                </div>
                                <ul class="personsl-socail">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single-team mt--30">
                                <div class="single-team-image">
                                    <img src="assets/images/team/team-04.jpg" alt="">
                                </div>
                                <div class="single-team-info">
                                    <h5>Nguyễn Văn Quang</h5>
                                    <p>Design</p>
                                </div>
                                <ul class="personsl-socail">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Our Team Area -->



            <!-- testimonial-area start -->
            <?php include_once 'views/customer.php'; ?>
            <!-- testimonial-area end -->

        </div>
        <!-- main-content-wrap end -->

    <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>

</body>

</html>