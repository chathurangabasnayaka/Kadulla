<?php
include('../include/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tid = $_POST['tid'];
    $output = "";
    $limit = 8;
    $page = "";

    if (isset($_POST['page_no'])) {
        $page = $_POST['page_no'];
    } else {
        $page = 1;
    }

    $offset = ($page - 1) * $limit;

    $sql = "SELECT b.`price`,b.`id` bookid,t.`id` trans_id,t.`name` trans_name,p.`id` pubid,p.`name` pubname,b.`name`,b.`img1`,b.`discription`,b.`latest_price` FROM `book` b JOIN `book_translator` t ON t.`id`=b.`trans_id` JOIN `publisher` p ON p.`id`=b.`publisher_id` WHERE t.`id`='$tid' and b.`is_Active`='1' ORDER BY bookid ASC LIMIT $offset, $limit";
    $run_sql = mysqli_query($con, $sql);

    $output .= '<div class="related-product-active slick-initialized slick-slider">';
    $output .= '<div class="slick-list draggable">';
    $output .= '<div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">';

    while ($row_run_sql = mysqli_fetch_array($run_sql)) {

        $bookid = $row_run_sql['bookid'];
        $authorid = $row_run_sql['trans_id'];
        $pubid = $row_run_sql['pubid'];

        $bname = $row_run_sql['name'];
        $pname = $row_run_sql['pubname'];
        $aname = $row_run_sql['trans_name'];

        $des = $row_run_sql['discription'];
        $img = $row_run_sql['img1'];
        $latest_price = $row_run_sql['latest_price'];

        $output .= ' 
 <div class="product-plr-1 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 300px;">
 <div class="single-product-wrap" >
                <div class="product-img product-img-zoom mb-15">
                    <a href="product-details.php?ID=' . $bookid . '">
                        <img src="admin/img/book/' . $img . '" alt="">
                    </a>
                    <div class="product-action-2 tooltip-style-2">
                    </div>
                </div>
                <div class="product-content-wrap-2 text-center">
                    <h3><a href="product-details.php?ID=' . $bookid . '">' . $bname . '</a></h3>
                    <div class="product-price-2">
                        <span>Rs. ' . $latest_price . '</span>
                    </div>
                </div>
                <div class="product-content-wrap-2 product-content-position text-center">
                    <h3><a href="product-details.php?ID=' . $bookid . '">' . $bname . '</a></h3>
                    <div class="product-price-2">
                        <span>Rs. ' . $latest_price . '</span>
                    </div>
                    <div class="pro-add-to-cart">
                        <button title="Add to Cart">Add To Cart</button>
                    </div>
                </div>
                </div>
                </div>
      ';
    }

    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';

    $output .= '<div class="pro-pagination-style text-center mt-10"><ul>';

    if ((int)$page != 1){
        $castPage = ((int)$page) - 1;
        $output .= '<li><a class="prev pgg" href="translator-details.php?tid='.$tid.'&page_no='.$castPage.'"><i class="icon-arrow-left"></i></a></li>';
    }

    $result_db = mysqli_query($con, "SELECT count(b.`id`) as id FROM `book` b JOIN `book_translator` t ON t.`id`=b.`trans_id` JOIN `publisher` p ON p.`id`=b.`publisher_id` WHERE t.`id`='$tid' and b.`is_Active`='1'");
    $row_db = mysqli_fetch_row($result_db);
    $total_records = $row_db[0];
    $total_pages = ceil($total_records / $limit);

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i==(int)$page){
            $pagLink = "<li><a class='pgg active' href='translator-details.php?tid=$tid&page_no=" . $i . "'>" . $i . "</a></li>";
        }else{
        $pagLink = "<li><a class='pgg' href='translator-details.php?tid=$tid&page_no=" . $i . "'>" . $i . "</a></li>";
        }
        $output .= $pagLink;
    }

    if ((int)$page != (int)$total_pages) {
        $castPage = ((int)$page) + 1;
        $output .= "<li><a class='next pgg' href='translator-details.php?tid=".$tid."&page_no=".$castPage."'><i class='icon-arrow-right'></i></a></li>";
    }

    $output .= "</ul>";
    $output .= "</div>";

    echo $output;

}
