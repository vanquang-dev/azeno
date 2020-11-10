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
                        <h2 class="breadcrumb-title">Liên hệ với chúng tôi</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Liên hệ</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->

        <!-- Page Conttent -->
        <main class="page-content section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12">
                        <div class="contact-form">
                            <div class="contact-form-info">
                                <div class="contact-title">
                                    <h3>Nói với chúng tôi suy nghĩ của bạn</h3>
                                </div>
                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="contact-page-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Tên *">
                                            </div>
                                            
                                            <div class="contact-inner">
                                                <input name="con_phone" type="text" placeholder="Số điện thoại *">
                                            </div>
                                            
                                            <div class="contact-inner contact-message">
                                                <textarea name="con_message" placeholder="Lời nhắn *"></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-submit-btn">
                                            <button class="submit-btn" type="submit">Gửi</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <div class="contact-infor">
                            <div class="contact-title">
                                <h3>Liên hệ với chúng tôi</h3>
                            </div>
                            <div class="contact-dec">
                                <p>Shop chúng tôi có đội ngũ kỹ thuật chuyên nghiệp sẵn sàng giải đáp mọi thắc về sản phầm của bạn. </p>
                            </div>
                            <div class="contact-address">
                                <ul>
                                    <li><i class="zmdi zmdi-home"></i> Địa chỉ : 98 Nguyễn Ngọc Nại / Thanh Xuân / Hà Nội</li>
                                    <li><i class="zmdi zmdi-email"></i> vanquang@gmail.com</li>
                                    <li><i class="zmdi zmdi-phone"></i> 0988888888</li>
                                </ul>
                            </div>
                            <div class="work-hours">
                                <h5>Thời gian làm việc</h5>
                                <p><strong>Thứ hai &ndash; Thứ bảy</strong>: &nbsp;08 Sáng &ndash; 22 Tối</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--// Page Conttent -->

        <?php include 'views/footer.php'; ?>
    </div>

    <?php include 'views/corejs.php'; ?>

</body>

</html>