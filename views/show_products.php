<?php 
    include_once 'model/formatMoney.php';
    $coutProducts = $connect->build_query([
        "select" => "*",
        "table" => "products"
    ])->num_rows();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if (preg_match('/\d/', $page)) {
            $page = $page;
        } else {
            $page = 1;
        }
    } else {
        $page = 1;
    }

    $limit = 12;
    $totalPage = ceil($coutProducts/$limit);
    if ($page > $totalPage) {
        $page = $totalPage;
    } else if ($page < 1) {
        $page = 1;
    }
    $start = ($page - 1)*$limit;

    $get_data = $connect->build_query([
        "select" => "*",
        "table" => "`products`",
        "orderby" => "`id`",
        "desclimit" => "$start, $limit"
    ])->select();
    echo '<div class="row">';
    while ($row = mysqli_fetch_array($get_data)) {
        $price = formatMoney($row["price"]);
        echo '
            <div class="col-lg-3 product-400px">
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="product-details.php?prod='.utf8tourl($row["name_product"]).'-'.$row["id"].'"><img src="admin/image/'.$row["images"].'" alt="Ảnh sản phẩm"></a>
                    </div>
                    <div class="product-content">
                        <h3><a href="product-details.php?prod='.utf8tourl($row["name_product"]).'-'.$row["id"].'">'.$row["name_product"].'</a></h3>
                        <div class="price-box">
                            <span>'.$price.'đ</span>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
            </div>
        ';  
    }
    echo '</div>';
    echo '
        <div class="paginatoin-area">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="pagination-box">
    ';
    if ($page > 1 && $totalPage > 1) {
        echo '
            <li><a class="Previous" href="index.php?page='.($page-1).'"><i class="ion-chevron-left"></i></a></li>
        ';
    }
    if ($page < 3) {
        for ($i = 1; $i < 3 ; $i++) {
            if ($i == $page) {
                echo '
                    <li class="active"><a href="javascript: void(0);">'.$i.'</a></li>
                ';
            } else {
                echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
            }
            
        }
        echo '<li><a href="index.php?page=3">3</a></li>';
    } else if ($page >= ($totalPage-2)) {
        echo '
            <li><a href="index.php?page=1">1</a></li>
            <li><a href="javascript: void(0);">...</a></li>
        ';
        for ($i = ($totalPage-2); $i <= $totalPage ; $i++) {
            if ($i == $page) {
                echo '<li class="active"><a href="#">'.$i.'</a></li>';
            } else {
                echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
            }
            
        }
    } else {
        echo '
            <li><a href="index.php?page=1">1</a></li>
            <li><a href="javascript: void(0);">...</a></li>
        ';
        if ($i = $page) {
            echo '<li><a href="index.php?page='.($i-1).'">'.($i-1).'</a></li>';
            echo '<li class="active"><a href="javascript: void(0);">'.$i.'</a></li>';
            echo '<li><a href="index.php?page='.($i+1).'">'.($i+1).'</a></li>';
        }
        echo '
            <li><a href="javascript: void(0);">...</a></li>
            <li><a href="index.php?page='.$totalPage.'">Cuối</a></li>
        ';
    }

    if ($page < $totalPage && $totalPage > 1) {
        echo '
            <li>
                <a class="Next" href="index.php?page='.($page+1).'"><i class="ion-chevron-right"></i> </a>
            </li>
        ';
    }
    echo '
                    </ul>
                </div>
            </div>
        </div>
    ';
    
        
?>