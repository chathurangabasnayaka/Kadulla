<!doctype html>
<html class="no-js" lang="zxx">
<?php
include('include/db.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Books - Kadulla Book Publishers</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.jpeg">

    <!-- All CSS is here
	============================================ -->
    <?php include 'include/css.php' ?>

</head>

<body>

<div class="main-wrapper">
    <header class="header-area">
        <div class="container">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-1 border-bottom-1">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="header-offer-wrap">
                                <p><i class="icon-paper-plane"></i> FREE SHIPPING world wide for all orders over <span>$199</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="header-top-right">
                                <div class="social-style-1 social-style-1-mrg">
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                    <a href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="main-menu main-menu-padding-1 main-menu-lh-1">
                                <nav>
                                    <ul>
                                        <?php include_once 'include/header_link.php' ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-action header-action-flex header-action-mrg-right">
                                <div class="same-style-2 header-search-1">
                                    <a class="search-toggle" href="#">
                                        <i class="icon-magnifier s-open"></i>
                                        <i class="icon_close s-close"></i>
                                    </a>
                                    <div class="search-wrap-1">
                                        <form action="#">
                                            <input placeholder="Search products…" type="text">
                                            <button class="button-search"><i class="icon-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="same-style-2">
                                    <a href="login-register.php"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2">
                                    <a href="wishlist.php"><i class="icon-heart"></i><span
                                                class="pro-count red">03</span></a>
                                </div>
                                <div class="same-style-2 header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="mobile-logo">
                            <a href="index.php">
                                <img alt="" src="assets/images/logo/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2">
                                <a href="login-register.php"><i class="icon-user"></i></a>
                            </div>
                            <div class="same-style-2">
                                <a href="wishlist.php"><i class="icon-heart"></i><span
                                            class="pro-count red">03</span></a>
                            </div>
                            <div class="same-style-2 header-cart">
                                <a class="cart-active" href="#">
                                    <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                </a>
                            </div>
                            <div class="same-style-2 main-menu-icon">
                                <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile menu start -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="clickalbe-sidebar-wrap">
            <a class="sidebar-close"><i class="icon_close"></i></a>
            <div class="mobile-header-content-area">
                <div class="header-offer-wrap mobile-header-padding-border-4">
                    <p><i class="icon-paper-plane"></i> FREE SHIPPING world wide for all orders over <span>$199</span>
                    </p>
                </div>
                <div class="mobile-search mobile-header-padding-border-1">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search here…">
                        <button class="button-search"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-padding-border-2">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.php">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Home version 1 </a></li>
                                    <li><a href="index-2.php">Home version 2</a></li>
                                    <li><a href="index-3.php">Home version 3</a></li>
                                    <li><a href="index-4.php">Home version 4</a></li>
                                    <li><a href="index-5.php">Home version 5</a></li>
                                    <li><a href="index-6.php">Home version 6</a></li>
                                    <li><a href="index-7.php">Home version 7</a></li>
                                    <li><a href="index-8.php">Home version 8</a></li>
                                    <li><a href="index-9.php">Home version 9</a></li>
                                    <li><a href="index-10.php">Home version 10</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop layout</a>
                                        <ul class="dropdown">
                                            <li><a href="book.php">standard style</a></li>
                                            <li><a href="shop-list.php">shop list style</a></li>
                                            <li><a href="shop-fullwide.php">shop fullwide</a></li>
                                            <li><a href="shop-no-sidebar.php">grid no sidebar</a></li>
                                            <li><a href="shop-list-no-sidebar.php">list no sidebar</a></li>
                                            <li><a href="shop-right-sidebar.php">shop right sidebar</a></li>
                                            <li><a href="store-location.php">store location</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.php">tab style 1</a></li>
                                            <li><a href="product-details-2.php">tab style 2</a></li>
                                            <li><a href="product-details-sticky.php">sticky style</a></li>
                                            <li><a href="product-details-gallery.php">gallery style </a></li>
                                            <li><a href="product-details-affiliate.php">affiliate style</a></li>
                                            <li><a href="product-details-group.php">group style</a></li>
                                            <li><a href="product-details-fixed-img.php">fixed image style </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="about-us.php">about us </a></li>
                                    <li><a href="cart.php">cart page</a></li>
                                    <li><a href="checkout.php">checkout </a></li>
                                    <li><a href="my-account.php">my account</a></li>
                                    <li><a href="wishlist.php">wishlist </a></li>
                                    <li><a href="compare.php">compare </a></li>
                                    <li><a href="contact.php">contact us </a></li>
                                    <li><a href="order-tracking.php">order tracking</a></li>
                                    <li><a href="login-register.php">login / register </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.php">blog standard </a></li>
                                    <li><a href="blog.php">blog no sidebar </a></li>
                                    <li><a href="blog-right-sidebar.php">blog right sidebar</a></li>
                                    <li><a href="blog-details.php">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-contact-info mobile-header-padding-border-4">
                    <ul>
                        <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                        <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                        <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                    </ul>
                </div>
                <div class="mobile-social-icon">
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mini cart start -->
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="icon_close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Simple Black T-Shirt</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Norda Backpack</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-checkout-btn">
                    <a class="btn-hover cart-btn-style" href="cart.php">view cart</a>
                    <a class="no-mrg btn-hover cart-btn-style" href="checkout.php">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">BOOKS</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $result_count = mysqli_query($con, "SELECT COUNT(id) FROM `book` where is_Active='1'");
    $row_count = mysqli_fetch_row($result_count);
    $total_records = $row_count[0];
    ?>
    <div class="shop-area pt-120 pb-120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-topbar-wrapper">
                        <div class="shop-topbar-left">
                            <div class="view-mode nav">
                                <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                                <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                            </div>
                            <p>Showing 1 - <?php
                                if (isset($_GET["lim"])) {
                                    echo $_GET["lim"];
                                } else {
                                    echo '12';
                                }
                                ?> of <?php echo $total_records ?> results </p>
                        </div>
                        <div class="product-sorting-wrapper">
                            <div class="product-shorting shorting-style">
                                <label>View :</label>
                                <select id="limit">
                                    <option value="12" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 12) {
                                        echo 'selected';
                                    } ?> >12
                                    </option>
                                    <option value="24" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 24) {
                                        echo 'selected';
                                    } ?> >24
                                    </option>
                                    <option value="36" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 36) {
                                        echo 'selected';
                                    } ?> >36
                                    </option>
                                </select>
                            </div>
                            <div class="product-show shorting-style">
                                <label>Sort by :</label>
                                <select id="filter">
                                    <option value="book_id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'book_id') {
                                        echo 'selected';
                                    } ?>>Default
                                    </option>
                                    <option value="book_name" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'book_name') {
                                        echo 'selected';
                                    } ?>> Name
                                    </option>
                                    <option value="book_id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'book_id') {
                                        echo 'selected';
                                    } ?>> ID
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <?php

                                    $selectedOption = "book_id";
                                    $selectedOption_qry = "";
                                    if (isset($_GET["filter"]) && $_GET["filter"]!='') {
                                        $selectedOption = $_GET["filter"];
                                        $selectedOption_qry = "&filter=" . $_GET["filter"];
                                    }

                                    $catq = "";
                                    $selectedCats_qry = "";
                                    if (isset($_GET["cat"]) && $_GET["cat"]!='') {
                                        $catq = " AND bc.`cats_id`='" . $_GET["cat"] . "' ";
                                        $selectedCats_qry = "&cat=" . $_GET["cat"];
                                    }

                                    $type = "";
                                    $type_q = "";
                                    $selectedType_qry = "";
                                    if (isset($_GET["type"]) && $_GET["type"]!='') {
                                        $type = $_GET["type"];
                                        $type_q = " AND t.`id` IN(" . substr($type,1,strlen($type)-1) . ") ";

                                        $selectedType_qry = "&type=" . $_GET["type"];

                                    }

                                    $minq = " AND b.`latest_price`>=50 ";;
                                    $min_qry = '';
                                    $min = 0;
                                    if (isset($_GET["min"]) && $_GET["min"]!='') {
                                        $minq = " AND b.`latest_price`>='" . $_GET["min"] . "' ";
                                        $min_qry = "&min=" . $_GET["min"];
                                        $min = $_GET["min"];
                                    }

                                    $maxq = " AND b.`latest_price`>=50 ";;
                                    $max_qry = '';
                                    $max = 0;
                                    if (isset($_GET["max"])  && $_GET["max"]!='') {
                                        $maxq = " AND b.`latest_price`<='" . $_GET["max"] . "' ";
                                        $max_qry = "&max=" . $_GET["max"];
                                        $max = $_GET["max"];
                                    }


                                    $qry = "";
                                    $limit = 4;
                                    $limit_qry = "";
                                    if (isset($_GET["lim"])  && $_GET["lim"]!='') {
                                        $limit = $_GET["lim"];
                                        $limit_qry = "&lim=" . $_GET["lim"];
                                    }

                                    $page = "";
                                    if (isset($_GET["page"]) && $_GET["page"]!='') {
                                        $page = $_GET["page"];
                                        $qry .= "&page=" . $_GET["page"];
                                    } else {
                                        $page = 1;
                                    };


                                    $start_from = ($page - 1) * $limit;

                                    $sql = "SELECT DISTINCT b.`id` book_id,b.`name` book_name,t.`id` type_id,t.`name` type_name,a.id author_id,a.`name` author_name,p.`id` pub_id,p.`name` pub_name,b.`discription`,b.`latest_price`,b.`img1`,b.`page`,b.`isbn_no`,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id = categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a INNER JOIN `publisher` p INNER JOIN `type` t JOIN `book_has_cats` bc WHERE b.`id`=bc.`book_id` AND a.`id`= b.`author_id` AND t.`id`=b.`type_id` AND p.`id` = b.`publisher_id` AND b.`is_Active`='1' " . $catq . $minq . $maxq . $type_q . " ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                    $run_sql = mysqli_query($con, $sql);

                                    while ($row_run_sql = mysqli_fetch_array($run_sql)) {

                                        $bookid = $row_run_sql['book_id'];
                                        $authorid = $row_run_sql['author_id'];
                                        $pubid = $row_run_sql['pub_id'];

                                        $bname = $row_run_sql['book_name'];
                                        $pname = $row_run_sql['pub_name'];
                                        $aname = $row_run_sql['author_name'];

                                        $des = $row_run_sql['discription'];
                                        $img = $row_run_sql['img1'];
                                        $latest_price = $row_run_sql['latest_price'];

                                        ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="product-details.php?ID=<?php echo $bookid ?>">
                                                        <img src="admin/img/book/<?php echo $img; ?>" alt="">
                                                    </a>
                                                    <div class="product-action-2 tooltip-style-2">
                                                        <!--                                                        <button title="Wishlist"><i class="icon-heart"></i></button>-->
                                                        <button title="Quick View" data-toggle="modal"
                                                                data-target="#exampleModal"><i
                                                                    class="icon-size-fullscreen icons"></i></button>
                                                        <!--                                                        <button title="Compare"><i class="icon-refresh"></i></button>-->
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 text-center">
                                                    <h4>
                                                        <a href="product-details.php?ID=<?php echo $bookid ?>"><?php echo $bname ?></a>
                                                    </h4>
                                                    <h3>
                                                        <a href="author-details.php?CID=<?php echo $authorid ?>"><?php echo $aname ?></a>
                                                    </h3>
                                                    <div class="product-price-2">
                                                        <span>Rs.<?php echo $latest_price ?></span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <div class="product-rating-wrap">
                                                    </div>
                                                    <h3>
                                                        <a href="product-details.php?ID=<?php echo $bookid ?>"><?php echo $pname ?></a>
                                                    </h3>
                                                    <div class="product-price-2">
                                                        <span>Rs.<?php echo $latest_price ?></span>
                                                    </div>
                                                    <div class="pro-add-to-cart">
                                                        <button title="Add to Cart">Add To Cart</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>

                            <div id="shop-2" class="tab-pane">

                                <?php
                                $sql = "SELECT DISTINCT b.`id` book_id,b.`price`,b.`name` book_name,t.`id` type_id,t.`name` type_name,a.id author_id,a.`name` author_name,p.`id` pub_id,p.`name` pub_name,b.`discription`,b.`latest_price`,b.`img1`,b.`page`,b.`isbn_no`,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id = categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a INNER JOIN `publisher` p INNER JOIN `type` t JOIN `book_has_cats` bc WHERE b.`id`=bc.`book_id` AND a.`id`= b.`author_id` AND t.`id`=b.`type_id` AND p.`id` = b.`publisher_id` AND b.`is_Active`='1' " . $catq . $minq . $maxq . $type_q . " ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                $run_sql = mysqli_query($con, $sql);

                                while ($row_run_sql = mysqli_fetch_array($run_sql)) {


                                    $bookid = $row_run_sql['book_id'];
                                    $authorid = $row_run_sql['author_id'];
                                    $pubid = $row_run_sql['pub_id'];

                                    $bname = $row_run_sql['book_name'];
                                    $pname = $row_run_sql['pub_name'];
                                    $aname = $row_run_sql['author_name'];

                                    $des = $row_run_sql['discription'];
                                    $img = $row_run_sql['img1'];
                                    $latest_price = $row_run_sql['latest_price'];
                                    $price = $row_run_sql['price'];

                                    ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="product-details.php?ID=<?php echo $bookid ?>">
                                                        <img src="admin/img/book/<?php echo $img; ?>"
                                                             alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <button title="Quick View" data-toggle="modal"
                                                                data-target="#exampleModal"><i
                                                                    class="icon-size-fullscreen icons"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <h3>
                                                        <a href="product-details.php?ID=<?php echo $bookid ?>"><?php echo $pname ?></a>
                                                    </h3>
                                                    <div class="pro-list-price">
                                                        <span class="new-price">Rs.<?php echo $latest_price; ?></span>
                                                        <span class="old-price">Rs.<?php echo $price; ?></span>
                                                    </div>
                                                    <p><?php echo $des; ?></p>
                                                    <div class="product-list-action">
                                                        <button title="Add To Cart"><i class="icon-basket-loaded"></i>
                                                        </button>
                                                        <!--                                                        <button title="Wishlist"><i class="icon-heart"></i></button>-->
                                                        <!--                                                        <button title="Compare"><i class="icon-refresh"></i></button>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-10">
                            <ul>
                                <?php
                                if ((int)$page != 1) {
                                    ?>
                                    <li><a class="prev"
                                           href='book.php?page=<?php echo ((int)$page) - 1 ?><?php echo $limit_qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $selectedType_qry ?>'><i
                                                    class="icon-arrow-left"></i></a></li>
                                    <?php
                                }

                                ?>

                                <?php
                                $result_db = mysqli_query($con, "SELECT COUNT(id) FROM `book` where is_Active='1'");
                                $row_db = mysqli_fetch_row($result_db);
                                $total_records = $row_db[0];
                                $total_pages = ceil($total_records / $limit);
                                /* echo  $total_pages; */
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    $pagLink = "<li><a href='book.php?page=" . $i . $limit_qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $selectedType_qry . "'>" . $i . "</a></li>";
                                    echo $pagLink;
                                }

                                if ((int)$page != (int)$total_pages) {
                                    ?>
                                    <li><a class="next"
                                           href='book.php?page=<?php echo ((int)$page) + 1 ?><?php echo $limit_qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $selectedType_qry ?>'><i
                                                    class="icon-arrow-right"></i></a></li>
                                    <?php
                                }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                        <div class="sidebar-widget mb-40">
                            <h4 class="sidebar-widget-title">Search </h4>
                            <div class="sidebar-search">
                                <form class="sidebar-search-form" action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button>
                                        <i class="icon-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                            <h4 class="sidebar-widget-title">Categories </h4>
                            <div class="shop-catigory">
                                <ul class="cats_menu">
                                    <?php

                                    $sql = "SELECT * FROM `categories` WHERE is_Active='1' AND is_Orderby IS NOT NULL ORDER BY `is_Orderby`";
                                    $execute = mysqli_query($con, $sql);

                                    while ($row = mysqli_fetch_array($execute)) {
                                        $name = $row['name'];
                                        $id = $row['id'];

                                        $tt = "";
                                        if (isset($_GET["cat"]) && $_GET["cat"] == $id) {
                                            $tt="class='active'";
                                        }

                                        echo "<li value='$id'><a  ".$tt." href='book.php?" . $qry . $limit_qry . $selectedOption_qry . $max_qry . $min_qry . $selectedType_qry . "&cat=$id'>$name</a></li>";
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                            <h4 class="sidebar-widget-title">Price Filter </h4>
                            <div class="price-filter">
                                <span>Range:  Rs. 50.00 - 15,000.00 </span>
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <div class="label-input">
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                    </div>
                                    <button id="fltr_btn" type="button">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                            <h4 class="sidebar-widget-title">Type </h4>
                            <div class="sidebar-widget-list">
                                <ul>
                                    <?php

                                    $sql = "SELECT t.`name`,COUNT(b.`id`) bc,t.`id` FROM `book` b JOIN `type` t ON b.`type_id`=t.`id` WHERE b.`is_Active`='1' AND t.`is_Active`='1' GROUP BY t.`name`";
                                    $execute = mysqli_query($con, $sql);
                                    while ($row = mysqli_fetch_array($execute)) {
                                        $name = $row['name'];
                                        $bc = $row['bc'];
                                        $id = $row['id'];
                                        $st = "";
                                        if(isset($_GET['type']) && strpos($_GET['type'], ','.$id) !== false){
                                            $st="checked=''";
                                        }

                                        echo '<li>
                                        <div class="sidebar-widget-list-left">
                                            <input class="btype" type="checkbox" value="" tid="'.$id.'" '.$st.' > <a href="book.php?' . $qry . $limit_qry . $selectedOption_qry . $max_qry . $min_qry . $selectedCats_qry . '&type=' . $id . '">' . $name . '<span>' . $bc . '</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/subscribe_area.php' ?>
    <?php include 'include/footer.php' ?>
    <?php include 'include/modal.php' ?>

</div>

<!-- All JS is here
============================================ -->

<?php include 'include/js.php' ?>

<script>

    // $('.btype').click(function(){
    //     alert('ll');
    // });

    $('.btype').change(function () {
        console.log($(this).is(":checked"));
        <?php
//            if ($type!=''){
//                $type.= ',';
//            }
        ?>

        if ($(this).is(":checked")){
            window.location.href = "book.php?<?php echo $qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $limit_qry . '&type='.$type ?>" + ','+$(this).attr('tid');
        }else {
            let st = "<?php echo $type?>";
            window.location.href = "book.php?<?php echo $qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $limit_qry . '&type=' ?>" + st.replace(','+$(this).attr('tid'),'') ;
        }

    });

    $('#limit').change(function () {
        window.location.href = "book.php?<?php echo $qry . $selectedOption_qry . $selectedCats_qry . $max_qry . $min_qry . $selectedType_qry . '&lim='?>" + $(this).val();
    });
    $('#filter').change(function () {
        window.location.href = "book.php?<?php echo $qry . $limit_qry . $selectedCats_qry . $max_qry . $min_qry . $selectedType_qry . '&filter='?>" + $(this).val();
    });

    // $('ul.cats_menu li').click(function () {
    //     alert($(this).val());
    // });

    $("#fltr_btn").click(function () {
        let famount = $('#amount').val().replace("Rs.", "").split("-")[0].trim();
        let lamount = $('#amount').val().split("-")[1].replace(" Rs.", "").trim();
        // alert(famount + ' ' + lamount);

        window.location.href = "book.php?<?php echo $qry . $limit_qry . $selectedOption_qry . $selectedCats_qry . $selectedType_qry?>&min=" + famount + "&max=" + lamount;
    });

    /*---------------------
    Price range
--------------------- */
    var sliderrange = $('#slider-range');
    var amountprice = $('#amount');
    $(function () {
        sliderrange.slider({
            range: true,
            min: 50,
            max: 15000,
            values: [<?php echo $min ?>, <?php echo $max ?>],
            slide: function (event, ui) {
                amountprice.val("Rs." + ui.values[0] + " - Rs." + ui.values[1]);
            }
        });
        amountprice.val("Rs." + sliderrange.slider("values", 0) +
            " - Rs." + sliderrange.slider("values", 1));
    });

</script>

</body>

</html>
