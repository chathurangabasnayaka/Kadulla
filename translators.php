<!doctype html>
<html class="no-js" lang="zxx">
<?php
include('include/db.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Authors - Kadulla Book Publishers</title>
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
                                    <a href="wishlist.html"><i class="icon-heart"></i><span
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
                                <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
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
                            <li><a href="index.php">HOME </a></li>
                            <li><a href="authors.php">AUTHORS </a></li>
                            <li><a href="Publishers.php">PUBLISHERS </a></li>
                            <li><a href="blog.php">BLOG </a></li>
                            <li><a href="contact.php">CONTACT </a></li>
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
                    <li class="active">Translators</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $result_count = mysqli_query($con,"SELECT COUNT(id) FROM `book_translator` where is_Active='1'");
    $row_count = mysqli_fetch_row($result_count);
    $total_records = $row_count[0];
    ?>
    <div class="shop-area pt-20 pb-120 section-padding-2">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
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
                                    <option value="id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'id') {
                                        echo 'selected';
                                    } ?>>Default</option>
                                    <option value="name" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'name') {
                                        echo 'selected';
                                    } ?>> Name</option>
                                    <option value="id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'id') {
                                        echo 'selected';
                                    } ?>> ID</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">

                                    <?php

                                    $selectedOption = "id";
                                    $selectedOption_qry = "";
                                    if (isset($_GET["filter"])) {
                                        $selectedOption = $_GET["filter"];
                                        $selectedOption_qry = "&filter=" . $_GET["filter"];
                                    }

                                    $qry = "";
                                    $limit = 12;
                                    $limit_qry = "";
                                    if (isset($_GET["lim"])) {
                                        $limit = $_GET["lim"];
                                        $limit_qry = "&lim=" . $_GET["lim"];
                                    }

                                    $page = "";
                                    if (isset($_GET["page"])) {
                                        $page = $_GET["page"];
                                        $qry .= "&page=" . $_GET["page"];
                                    } else {
                                        $page = 1;
                                    };

                                    $start_from = ($page-1) * $limit;
                                    $sql = "SELECT * FROM `book_translator` WHERE `is_Active`='1' ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                    $run_sql = mysqli_query($con, $sql);

                                    while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                                        $id = $row_run_sql['id'];
                                        $name = $row_run_sql['name'];
                                        $des = $row_run_sql['descript'];
                                        $img = $row_run_sql['img'];

                                        ?>

                                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="translator-details.php?tid=<?php echo $id ?>">
                                                        <img src="admin/img/translator/<?php echo $img; ?>" alt="">
                                                    </a>
<!--                                                    <div class="product-action-2 tooltip-style-2">-->
<!--                                                        <button title="Quick View" data-toggle="modal"-->
<!--                                                                data-target="#exampleModal"><i-->
<!--                                                                class="icon-size-fullscreen icons"></i>-->
<!--                                                        </button>-->
<!--                                                    </div>-->
                                                </div>
                                                <div class="product-content-wrap-2 text-center"><h3><a
                                                            href="#"><?php echo $name ?></a></h3>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <h3><a href="translator-details.php?tid=<?php echo $id ?>"><?php echo $name ?></a></h3>
                                                    <div class="pro-add-to-cart">
                                                        <button onclick="location.href='translator-details.php?tid=<?php echo $id ?>'" title="Translator Details">Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <?php
                                $sql = "SELECT * FROM `book_translator` WHERE `is_Active`='1' ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                $run_sql = mysqli_query($con, $sql);

                                while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                                    $id = $row_run_sql['id'];
                                    $name = $row_run_sql['name'];
                                    $des = $row_run_sql['descript'];
                                    $img = $row_run_sql['img'];

                                    ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="translator-details.php?tid=<?php echo $id ?>">
                                                        <img src="admin/img/translator/<?php echo $img; ?>"
                                                             alt="Product Style">
                                                    </a>
<!--                                                    <div class="product-list-quickview">-->
<!--                                                        <button title="Quick View" data-toggle="modal"-->
<!--                                                                data-target="#exampleModal"><i-->
<!--                                                                    class="icon-size-fullscreen icons"></i></button>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <h3><a href="translator-details.php?tid=<?php echo $id ?>"><?php echo $name ?></a></h3>
                                                    <p><?php echo $des ?></p>
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
                                if ((int)$page!=1){
                                    ?>
                                    <li><a class="prev" href='translators.php?page=<?php echo ((int)$page)-1 ?><?php echo $limit_qry.$selectedOption_qry ?>'><i class="icon-arrow-left"></i></a></li>
                                    <?php
                                }

                                ?>

                                <?php
                                $result_db = mysqli_query($con,"SELECT COUNT(id) FROM `book_translator`  where is_Active='1'");
                                $row_db = mysqli_fetch_row($result_db);
                                $total_records = $row_db[0];
                                $total_pages = ceil($total_records / $limit);
                                /* echo  $total_pages; */
                                for ($i=1; $i<=$total_pages; $i++) {
                                    $pagLink = "<li><a href='translators.php?page=".$i. $limit_qry .$selectedOption_qry. "'>".$i."</a></li>";
                                    echo $pagLink;
                                }

                                if ((int)$page!=(int)$total_pages){
                                    ?>
                                    <li><a class="next" href='translators.php?page=<?php echo ((int)$page)+1 ?><?php echo $limit_qry.$selectedOption_qry ?>'><i class="icon-arrow-right"></i></a></li>
                                    <?php
                                }

                                ?>

                            </ul>
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
    $('#limit').change(function () {
        window.location.href = "translators.php?<?php echo $qry.$selectedOption_qry . '&lim='?>" + $(this).val();
    });
    $('#filter').change(function () {
        window.location.href = "translators.php?<?php echo $qry .$limit_qry. '&filter='?>" + $(this).val();
    });
</script>
</body>

</html>
