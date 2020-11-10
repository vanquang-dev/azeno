<?php 
	if (@$_GET['prod']) {
		include_once 'model/formatMoney.php';
		$url = $_GET['prod'];
		$array = explode('-', $url);
		$count = count($array)-1;
		$id = $array[$count];
		$check = $connect->build_query([
            "select" => "*",
            "table" => "`products`",
            "where" => "`id` = '$id'"
        ])->num_rows();
        if ($check == 1) {
        	$get_data = $connect->build_query([
	            "select" => "*",
	            "table" => "`products`",
	            "where" => "`id` = '$id'"
	        ])->select();
        	while ($row = mysqli_fetch_array($get_data)) {
        		$price = formatMoney($row["price"]);
        		echo '
					<div class="container">
		                <div class="row">
		                    <div class="col-xl-5 col-lg-6 col-md-6">
		                        <div class="product-details-images">
		                            <div class="product_details_container">
		                                <!-- product_big_images start -->
		                                <div class="product_big_images-top">
		                                    <div class="portfolio-full-image tab-content">
		                                        <div role="tabpanel" class="tab-pane active product-image-position" id="img-tab-5">
		                                            <a href="admin/image/'.$row["images"].'" class="img-poppu">
		                                                <img src="admin/image/'.$row["images"].'" alt="#">
		                                            </a>
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane product-image-position" id="img-tab-6">
		                                            <a href="assets/images/product/details/w2.jpg" class="img-poppu">
		                                                <img src="assets/images/product/details/w2.jpg" alt="#">
		                                            </a>
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane product-image-position" id="img-tab-7">
		                                            <a href="assets/images/product/details/w3.jpg" class="img-poppu">
		                                                <img src="assets/images/product/details/w3.jpg" alt="#">
		                                            </a>
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane product-image-position" id="img-tab-8">
		                                            <a href="assets/images/product/details/w4.jpg" class="img-poppu">
		                                                <img src="assets/images/product/details/w4.jpg" alt="#">
		                                            </a>
		                                        </div>
		                                        <div role="tabpanel" class="tab-pane product-image-position" id="img-tab-9">
		                                            <a href="assets/images/product/details/w2.jpg" class="img-poppu">
		                                                <img src="assets/images/product/details/w2.jpg" alt="#">
		                                            </a>
		                                        </div>
		                                    </div>
		                                </div>
		                                <!-- product_big_images end -->

		                                <!-- Start Small images -->
		                                <ul class="product_small_images-bottom horizantal-product-active nav" role="tablist">
		                                    <li role="presentation" class="pot-small-img active">
		                                        <a href="#img-tab-5" role="tab" data-toggle="tab">
		                                            <img src="assets/images/product/details/small-01.jpg" alt="small-image">
		                                        </a>
		                                    </li>
		                                    <li role="presentation" class="pot-small-img">
		                                        <a href="#img-tab-6" role="tab" data-toggle="tab">
		                                            <img src="assets/images/product/details/small-02.jpg" alt="small-image">
		                                        </a>
		                                    </li>
		                                    <li role="presentation" class="pot-small-img">
		                                        <a href="#img-tab-7" role="tab" data-toggle="tab">
		                                            <img src="assets/images/product/details/small-03.jpg" alt="small-image">
		                                        </a>
		                                    </li>
		                                    <li role="presentation" class="pot-small-img">
		                                        <a href="#img-tab-8" role="tab" data-toggle="tab">
		                                            <img src="assets/images/product/details/small-04.jpg" alt="small-image">
		                                        </a>
		                                    </li>
		                                    <li role="presentation" class="pot-small-img">
		                                        <a href="#img-tab-9" role="tab" data-toggle="tab">
		                                            <img src="assets/images/product/details/small-02.jpg" alt="small-image">
		                                        </a>
		                                    </li>
		                                </ul>
		                                <!-- End Small images -->
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-xl-7 col-lg-6 col-md-6">
		                        <!-- product_details_info start -->
		                        <div class="product_details_info">
		                            <h2>'.$row["name_product"].'</h2>
		                            <!-- pro_rating start -->
		                            <div class="pro_rating d-flex">
		                                <ul class="product-rating d-flex">
		                                    <li><span class="ion-android-star-outline"></span></li>
		                                    <li><span class="ion-android-star-outline"></span></li>
		                                    <li><span class="ion-android-star-outline"></span></li>
		                                    <li><span class="ion-android-star-outline"></span></li>
		                                    <li><span class="ion-android-star-outline"></span></li>
		                                </ul>
		                                <span class="rat_qun"> (Dựa trên n đánh giá) </span>
		                            </div>
		                            <!-- pro_rating end -->
		                            <!-- pro_details start -->
		                            <div class="pro_details">
		                                <p>'.$row["introduce"].'. </p>
		                            </div>
		                            <!-- pro_details end -->
		                            <!-- pro_dtl_prize start -->
		                            <ul class="pro_dtl_prize">
		                                <li> '.$price.'</li>
		                            </ul>
		                            <!-- pro_dtl_prize end -->
		                            <!-- pro_dtl_color start-->
		                            <div class="pro_dtl_color">
		                                <h2 class="title_2">Chọn màu</h2>
		                                <ul class="pro_choose_color">
		                                    <li class="red"><a href="#"><i class="ion-record"></i></a></li>
		                                    <li class="blue"><a href="#"><i class="ion-record"></i></a></li>
		                                    <li class="perpal"><a href="#"><i class="ion-record"></i></a></li>
		                                    <li class="yellow"><a href="#"><i class="ion-record"></i></a></li>
		                                </ul>
		                            </div>
		                            <!-- pro_dtl_color end-->
		                            <!-- product-quantity-action start -->
		                            <div class="product-quantity-action">
		                                
		                                <div class="product-quantity">
		                                    <form action="model/add_order.php" method="post">
		                                        <div class="product-quantity">
		                                            <div class="cart-plus-minus">
		                                            	<span>Số lượng :</span>
		                                                <input value="1" type="number" name="number">
		                                                <input type="hidden" value="'.$row["id"].'" name="product_id">
		                                                <input type="hidden" value="'.$row["images"].'" name="image">
		                                                <input type="hidden" value="'.$row["name_product"].'" name="product_name">
		                                                <input type="hidden" value="'.$row["price"].'" name="price">
		                                            </div>
		                                        </div>
		                                        <!-- pro_dtl_btn start -->
					                            <ul class="pro_dtl_btn">
					                            	<li><button type="submit" class="btn buy_now_btn">Đặt hàng</button></li>
					                                
					                                <li><a href="#"><i class="ion-heart"></i></a></li>
					                            </ul>
					                            <!-- pro_dtl_btn end -->
		                                    </form>
		                                </div>
		                            </div>
		                            <!-- product-quantity-action end -->
					                            
		                            <!-- pro_social_share start -->
		                            <div class="pro_social_share d-flex">
		                                <h2 class="title_2">Chia sẻ :</h2>
		                                <ul class="pro_social_link">
		                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
		                                    <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
		                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
		                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
		                                </ul>
		                            </div>
		                            <!-- pro_social_share end -->
		                        </div>
		                        <!-- product_details_info end -->
		                    </div>
		                </div>
		                <div class="row">
		                    <div class="col-12">
		                        <div class="product-details-tab mt-60">
		                            <ul role="tablist" class="mb-50 nav">
		                                <li class="active" role="presentation">
		                                    <a data-toggle="tab" role="tab" href="#description" class="active">Miêu tả</a>
		                                </li>
		                                <li role="presentation">
		                                    <a data-toggle="tab" role="tab" href="#sheet">Thông tin</a>
		                                </li>
		                                <li role="presentation">
		                                    <a data-toggle="tab" role="tab" href="#reviews">Bình luận</a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                    <div class="col-12">
		                        <div class="product_details_tab_content tab-content">
		                            <!-- Start Single Content -->
		                            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
		                                <div class="product_description_wrap">
		                                    <div class="product_desc mb--30">
		                                        <h2 class="title_3">Chi tiết</h2>
		                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis noexercit ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id.</p>
		                                    </div>
		                                    <div class="pro_feature">
		                                        <h2 class="title_3">Cách dùng</h2>
		                                        <ul class="feature_list">
		                                            <li><a href="#"><i class="ion-ios-play-outline"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
		                                            <li><a href="#"><i class="ion-ios-play-outline"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
		                                            <li><a href="#"><i class="ion-ios-play-outline"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
		                                            <li><a href="#"><i class="ion-ios-play-outline"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
		                                        </ul>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- End Single Content -->
		                            <!-- Start Single Content -->
		                            <div class="product_tab_content tab-pane" id="sheet" role="tabpanel">
		                                <div class="pro_feature">
		                                    <h2 class="title_3">Data sheet</h2>
		                                    <ul class="feature_list">
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Duis aute irure dolor in reprehenderit in voluptate velit esse</a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Irure dolor in reprehenderit in voluptate velit esse</a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Sed do eiusmod tempor incididunt ut labore et </a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
		                                        <li><a href="#"><i class="ion-ios-play-outline"></i>Nisi ut aliquip ex ea commodo consequat.</a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <!-- End Single Content -->
		                            <!-- Start Single Content -->
		                            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
		                                <div class="row">
		                                    <div class="col-lg-7">

		                                        <!-- blog-details-wrapper -->
		                                        <div class="col-lg-12 review_address_inner">
		                                            <h5>Bình luận</h5>
		                                            <!-- Single Review -->
		                                            <div class="pro_review">
		                                                <div class="review_thumb">
		                                                    <img alt="review images" src="assets/images/other/review-01.jpg">
		                                                </div>
		                                                <div class="review_details">
		                                                    <div class="review_info">
		                                                        <h5><a href="#">Helen Nancy</a></h5>
		                                                        <div class="rating_send">
		                                                            <a href="#">Reply</a>
		                                                        </div>
		                                                    </div>
		                                                    <div class="review_date">
		                                                        <span>30 May, 2019</span> <span>10:20 pm</span>
		                                                    </div>
		                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teimpor in aliqua. Utf enim ad minim veniam,</p>

		                                                </div>
		                                            </div>
		                                            <!--// Single Review -->
		                                            <!-- Single Review -->
		                                            <div class="pro_review">
		                                                <div class="review_thumb">
		                                                    <img alt="review images" src="assets/images/other/review-02.jpg">
		                                                </div>
		                                                <div class="review_details">
		                                                    <div class="review_info">
		                                                        <h5><a href="#">tome Shetty</a></h5>
		                                                        <div class="rating_send">
		                                                            <a href="#">Reply</a>
		                                                        </div>
		                                                    </div>
		                                                    <div class="review_date">
		                                                        <span>Sep 11, 2019</span>
		                                                    </div>
		                                                    <p>Lorem ipsum dolor sit con dipis cing elitdpon aliqua minim veniam,</p>
		                                                </div>
		                                            </div>
		                                            <!--// Single Review -->
		                                            <!-- Single Review -->
		                                            <div class="pro_review">
		                                                <div class="review_thumb">
		                                                    <img alt="review images" src="assets/images/other/review-03.jpg">
		                                                </div>
		                                                <div class="review_details">
		                                                    <div class="review_info">
		                                                        <h5><a href="#">ketrin frans</a></h5>
		                                                        <div class="rating_send">
		                                                            <a href="#">Reply</a>
		                                                        </div>
		                                                    </div>
		                                                    <div class="review_date">
		                                                        <span>Sep 25, 2019</span>
		                                                    </div>
		                                                    <p>dolore magna aliqua. Ut enim ad con Duis aute irur eritae pliciav aquuntu consectetur dunt ut labore et dolore magna aliqua. Ut enim adabz.</p>
		                                                </div>
		                                            </div>
		                                            <!--// Single Review -->
		                                        </div>
		                                        <div class="col-lg-12">
		                                            <div class="comments-reply-area">
		                                                <h5 class="comment-reply-title mb-30">Bình luận </h5>
		                                                <form action="#" class="comment-form-area">
		                                                    <div class="comment-input">
		                                                        <div class="row">
		                                                            <div class="col-lg-12">
		                                                                <p class="comment-form-comment">
		                                                                    <textarea class="comment-notes" required="" placeholder="Viết bình luận..."></textarea>
		                                                                </p>
		                                                            </div>
		                                                            <div class="col-lg-12">
		                                                                <div class="comment-form-submit">
		                                                                    <button class="comment-submit">Gửi</button>
		                                                                </div>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		                                                </form>
		                                            </div>
		                                        </div>
		                                        <!--// blog-details-wrapper -->
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- End Single Content -->
		                        </div>
		                    </div>
		                </div>
		            </div>
        		';	
        	}
        } else {
        	echo '
        		<div class="row">
        			<div class="m-auto">
						<h1>Sản phẩm này không tồn tại!!!</h1>
					</div>
        		</div>
        	';
        }
	} else {
		echo "<meta http-equiv='refresh' content='0;URL=index.php'>";
	}
 ?>
