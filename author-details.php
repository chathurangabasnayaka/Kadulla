<!doctype html>
<html class="no-js" lang="en">
<?php
include('include/db.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Norda - Minimal eCommerce HTML Template</title>
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
                                    </li>
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
                                    <li><a href="index.php">HOME </a></li>
                                    <li><a href="authors.php">AUTHORS </a></li>
                                    <li><a href="Publishers.php">PUBLISHERS </a></li>
                                    <li><a href="blog.php">BLOG </a></li>
                                    <li><a href="contact.php">CONTACT </a></li>
                                </ul>
                            </li>
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
    <?php
    $aid = $_GET['aid'];
    $sql = "SELECT * from `author` where id='$aid'";
    $run_sql = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($run_sql);
    $id = $row['id'];
    $name = $row['name'];
    $descript = $row['descript'];
    $img = $row['img'];
    ?>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Author Details</li>
                    <li class="active"><?php echo $name ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 offset-1">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider">
                            <img src="admin/img/author/<?php echo $img; ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="product-details-content pro-details-content-mrg">
                        <h1><?php echo $name ?></h1>
                        <p><?php echo $descript ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="related-product pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2><?php echo $name ?>විසින් රචිත කෘති</h2>
            </div>
            <div id="test">

            </div>
        </div>
    </div>

    <?php include 'include/subscribe_area.php' ?>

    <?php include 'include/modal.php' ?>

    <?php include 'include/footer.php' ?>

</div>

<!-- All JS is here
============================================ -->

<?php include 'include/js.php' ?>
<script type="text/javascript">

    $(document).ready(function () {
        let aid = '<?php echo $aid; ?>';
        function loadData(page) {
            $.ajax({
                url: "pagination/author_paginate_detail.php",
                type: "POST",
                cache: false,
                data: {page_no: page, aid: aid},
                success: function (response) {
                    $("#test").html(response);
                }
            });
        }
        loadData();
        // Pagination code
        $(document).on("click", ".pgg", function (e) {
            e.preventDefault();
            let pageId=$(this).attr('href').split("&page_no=")[1].split("&")[0];
            loadData(pageId);
        });
    });
</script>

</body>

</html>
