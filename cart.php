<!doctype html>
<html class="no-js" lang="en">
<?php
include('include/db.php');
session_start();
$cus_name = '';
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
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-action header-action-flex header-action-mrg-right">
<!--                                <div class="same-style-2 header-search-1">-->
<!--                                    <a class="search-toggle" href="#">-->
<!--                                        <i class="icon-magnifier s-open"></i>-->
<!--                                        <i class="icon_close s-close"></i>-->
<!--                                    </a>-->
<!--                                    <div class="search-wrap-1">-->
<!--                                        <form action="#">-->
<!--                                            <input placeholder="Search products…" type="text">-->
<!--                                            <button class="button-search"><i class="icon-magnifier"></i></button>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="same-style-2">
                                    <a href="login-register.php"><i class="icon-user"></i></a>
                                </div>
<!--                                <div class="same-style-2">-->
<!--                                    <a href="wishlist.php"><i class="icon-heart"></i><span-->
<!--                                            class="pro-count red">03</span></a>-->
<!--                                </div>-->
<!--                                <div class="same-style-2 header-cart">-->
<!--                                    <a class="cart-active" href="#">-->
<!--                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>-->
<!--                                    </a>-->
<!--                                </div>-->
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
<!--                            <div class="same-style-2">-->
<!--                                <a href="wishlist.php"><i class="icon-heart"></i><span-->
<!--                                        class="pro-count red">03</span></a>-->
<!--                            </div>-->
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

    <!-- mobile header start -->
    <?php include 'include/mobile_header.php' ?>

    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Cart Page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-main-area pt-115 pb-120">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Simple Black T-Shirt</a></td>
                                    <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                    <td class="product-quantity pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$110.00</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Norda Simple Backpack</a></td>
                                    <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                    <td class="product-quantity pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Simple Black T-Shirt </a></td>
                                    <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                    <td class="product-quantity pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$170.00</td>
                                    <td class="product-remove">
                                        <a href="#"><i class="icon_close"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="#">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button>Update Cart</button>
                                        <a href="#">Clear Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-2 col-md-4">
                        </div>

                        <div class="col-lg-8 col-md-4">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                <h5>Total products <span>$260.00</span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                        <li><input type="checkbox"> Express <span>$30.00</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                <a href="checkout.php">Proceed to Checkout</a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-area bg-gray pt-115 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="section-title">
                        <h2>keep connected</h2>
                        <p>Get updates by subscribe our weekly newsletter</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div id="mc_embed_signup" class="subscribe-form">
                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate=""
                              target="_blank" name="mc-embedded-subscribe-form" method="post"
                              action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email address"
                                       name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1"
                                           name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe"
                                           value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer.php' ?>
</div>

<!-- All JS is here
============================================ -->
<?php include 'include/js.php' ?>
<script>
    $('.category-menu categori-hide').hide();
</script>

</body>

</html>
