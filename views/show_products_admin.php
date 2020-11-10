<?php 
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
        echo '
            <div class="col-md-6 col-lg-3">
                <div class="product-list-box card p-2">
                    <a href="javascript:void(0);">
                        <img src="image/'.$row["images"].'" class="img-fluid" alt="work-thumbnail">
                    </a>
                    <div class="detail">
                        <h4 class="font-size-16 mt-2"><a href="#" class="text-dark">'.$row["name_product"].'</a> </h4>

                        <a href="edit-product.php?id='.$row["id"].'" class="btn btn-success btn-sm mr-1">Sửa</a>
                        <button class="btn btn-danger btn-sm delete" data-id='.$row["id"].'>Xóa</button>
                    </div>
                </div>
            </div>
        ';  
    }
    echo '</div>';
    echo '
        <div class="m-auto">
             <ul class="pagination mb-0">
    ';
    if ($page > 1 && $totalPage > 1) {
        echo '
             <li class="page-item">
                <a class="page-link" href="show-products.php?page='.($page-1).'"><<</a>
            </li>
        ';
    }
    if ($page < 3) {
        for ($i = 1; $i < 3 ; $i++) {
            if ($i == $page) {
                echo '
                    <li class="page-item active">
                        <span class="page-link">
                            '.$i.'
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                ';
            } else {
                echo '<li class="page-item"><a class="page-link" href="show-products.php?page='.$i.'">'.$i.'</a></li>';
            }
            
        }
        echo '<li class="page-item"><a class="page-link" href="show-products.php?page=3">3</a></li>';
    } else if ($page >= ($totalPage-2)) {
        for ($i = ($totalPage-3); $i <= $totalPage ; $i++) {
            if ($i == $page) {
                echo '
                    <li class="page-item active">
                        <span class="page-link">
                            '.$i.'
                            <span class="sr-only">(current)</span>
                        </span>
                    </li>
                ';
            } else {
                echo '<li class="page-item"><a class="page-link" href="show-products.php?page='.$i.'">'.$i.'</a></li>';
            }
            
        }
    } else {
        echo '
            <li class="page-item"><a class="page-link" href="show-products.php?page=1">1</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
        ';
        if ($i = $page) {
            echo '<li class="page-item"><a class="page-link" href="show-products.php?page='.($i-1).'">'.($i-1).'</a></li>';
            echo '
                <li class="page-item active">
                    <span class="page-link">
                        '.$i.'
                        <span class="sr-only">(current)</span>
                    </span>
                </li>
            ';
            echo '<li class="page-item"><a class="page-link" href="show-products.php?page='.($i+1).'">'.($i+1).'</a></li>';
        }
        echo '
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="show-products.php?page='.$totalPage.'">Cuối</a></li>
        ';
    }

    if ($page < $totalPage && $totalPage > 1) {
        echo '
            <li class="page-item">
                <a class="page-link" href="show-products.php?page='.($page+1).'">>></a>
            </li>
        ';
    }
    echo '
            </ul>
        </div>
    ';
    
        
?>