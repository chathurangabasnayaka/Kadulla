<!doctype html>
<html class="no-js" lang="en">
<?php
include('include/db.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products - Kadulla Book Publishers</title>
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
                            <!--                            <div class="same-style-2">-->
                            <!--                                <a href="wishlist.php"><i class="icon-heart"></i><span class="pro-count red">03</span></a>-->
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
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">Book details</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $PID = $_GET['ID'];
    $sql = "SELECT b.`id`,t.`name` typename,b.`name`,b.`available_qty`,b.`discription`,b.`price`,b.`latest_price`,b.`img1`,b.`img2`,b.`img3`,b.`img4`,a.`name` as author_name,a.id a_id,p.`name` pub_name,b.`page`,b.`isbn_no`,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id=categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a inner JOIN `publisher` p inner join `type` t WHERE a.`id`= b.`author_id` and t.`id`=b.`type_id` and p.`id` = b.`publisher_id` AND b.`is_Active`='1' and b.`id`='$PID' LIMIT 1";
    $run_sql = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($run_sql);
    $id = $row['id'];
    $name = $row['name'];
    $des = $row['discription'];
    $author_id = $row['a_id'];
    $author_name = $row['author_name'];
    $price = $row['price'];
    $latest_price = $row['latest_price'];
    $img1 = $row['img1'];
    $img2 = $row['img2'];
    $img3 = $row['img3'];
    $img4 = $row['img4'];
    $publisher = $row['pub_name'];
    $page = $row['page'];
    $isbn = $row['isbn_no'];
    $qty = $row['available_qty'];
    $type = $row['typename'];

    $cat_arry = $row['cat'];
    $str = str_replace(',', ' ^/ ', $cat_arry);
    $cat = explode('^', $str);
    ?>
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="admin/img/book/<?php echo $img1 ?>">
                                        <img src="admin/img/book/<?php echo $img1 ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="admin/img/book/<?php echo $img1 ?>"><i
                                            class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="admin/img/book/<?php echo $img2 ?>">
                                        <img src="admin/img/book/<?php echo $img2 ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="admin/img/book/<?php echo $img2 ?>"><i
                                            class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="admin/img/book/<?php echo $img3 ?>">
                                        <img src="admin/img/book/<?php echo $img3 ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="admin/img/book/<?php echo $img3 ?>"><i
                                            class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="admin/img/book/<?php echo $img4 ?>">
                                        <img src="admin/img/book/<?php echo $img4 ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="admin/img/book/<?php echo $img4 ?>"><i
                                            class="icon-size-fullscreen"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="admin/img/book/<?php echo $img2 ?>">
                                        <img src="admin/img/book/<?php echo $img2 ?>" alt="">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="admin/img/book/<?php echo $img2 ?>"><i
                                            class="icon-size-fullscreen"></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider-small product-dec-small-style1">
                            <div class="product-dec-small active">
                                <img src="admin/img/book/<?php echo $img1 ?>" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="admin/img/book/<?php echo $img2 ?>" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="admin/img/book/<?php echo $img3 ?>" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="admin/img/book/<?php echo $img4 ?>" alt="">
                            </div>
                            <div class="product-dec-small">
                                <img src="admin/img/book/<?php echo $img2 ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content pro-details-content-mrg">
                        <input type="hidden" id="book_id" value="<?= $id ?>">
                        <h1><?php echo $name ?></h1>
                        <span></span>
                        <h2><a href="#"><?php echo $author_name ?></a></h2>
                        <!--                        <p>වැඩ බැරි දාස චිත්‍ර ශිල්පියෙක් වීමට උත්සාහ කල හැටි කියවන්න. නිකොලායි නෝසව්..</p>-->
                        <div class="pro-details-price">
                            <span class="new-price">Rs.<?php echo $latest_price ?></span>
                            <span class="old-price">Rs.<?php echo $price ?></span>
                        </div>
                        <div class="pro-details-quality">
                            <span>Quantity:</span>
                            <div class="cart-plus-minus">
                                <input class="cart-plus-minus-box" type="text" id="qty" name="qty" value="1" min="1"
                                       max="<?php echo $qty ?>">
                            </div>
                        </div>
                        <div class="product-details-meta">
                            <ul>
                                <li><span>Categories:</span>
                                    <?php
                                    foreach ($cat as $index => $cat_si) {
                                        if ($index == 2) {
                                            break;
                                        }
                                        echo '<a href="' . $index . '">' . $cat_si . '</a>';
                                    }
                                    ?>
                                </li>
                                <li><span>Publisher </span> <a
                                            href="publisher-details.php?ID="><?php echo $publisher ?></a></li>
                            </ul>
                        </div>
                        <div class="pro-details-action-wrap">
                            <div class="pro-details-add-to-cart">
                                <a id="add-cart" title="Add to Cart" href="#">Add To Cart </a>
                            </div>
                            <div class="pro-details-action">
                                <!--                                <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>-->
                                <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                <div class="product-dec-social">
                                    <a class="facebook" title="Facebook" href="#"><i
                                                class="icon-social-facebook"></i></a>
                                    <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                    <a class="instagram" title="Instagram" href="#"><i
                                                class="icon-social-instagram"></i></a>
                                    <a class="pinterest" title="Pinterest" href="#"><i
                                                class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-wrapper pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dec-review-topbar nav mb-45">
                        <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                        <a data-toggle="tab" href="#des-details2">Specification</a>
                    </div>
                    <div class="tab-content dec-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="description-wrap">
                                <p><?php echo $des ?></p>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="title width1">Name</td>
                                        <td><?php echo $name ?></td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Author</td>
                                        <td><?php echo $author_name ?></td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Pages</td>
                                        <td><?php echo $page ?></td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Bind</td>
                                        <td><?php echo $type ?></td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Publisher</td>
                                        <td><?php echo $publisher ?></td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">ISBN</td>
                                        <td><?php echo $isbn ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="specification-wrap table-responsive">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="title width1">Top</td>
                                        <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Bottom</td>
                                        <td>Cotton Cambric</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Dupatta</td>
                                        <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="des-details4" class="tab-pane">
                            <div class="review-wrapper">
                                <h2>1 review for Sleeve Button Cowl Neck</h2>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="assets/images/product-details/client-1.png" alt="">
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>John Snow</span> - March 14, 2019</h5>
                                            </div>
                                            <div class="review-rating">
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                            </div>
                                        </div>
                                        <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna
                                            molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam
                                            egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span>
                                </p>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="rating-form-style mb-20">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="star-box-wrap">
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon_star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                    </div>
                                                    <div class="single-ratting-star">
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                        <a href="#"><i class="icon_star"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2>Related Product</h2>
            </div>
            <div class="related-product-active">
                <div class="product-plr-1">
                    <div class="single-product-wrap">
                        <div class="product-img product-img-zoom mb-15">
                            <a href="product-details.php">
                                <img src="assets/images/product/product-13.jpg" alt="">
                            </a>
                            <div class="product-action-2 tooltip-style-2">
                                <!--                                <button title="Wishlist"><i class="icon-heart"></i></button>-->
                                <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i
                                            class="icon-size-fullscreen icons"></i></button>
                                <!--                                <button title="Compare"><i class="icon-refresh"></i></button>-->
                            </div>
                        </div>
                        <div class="product-content-wrap-2 text-center">
                            <h3><a href="product-details.php">Basic Joggin Shorts</a></h3>
                            <div class="product-price-2">
                                <span>$20.50</span>
                            </div>
                        </div>
                        <div class="product-content-wrap-2 product-content-position text-center">
                            <h3><a href="product-details.php">Basic Joggin Shorts</a></h3>
                            <div class="product-price-2">
                                <span>$20.50</span>
                            </div>
                            <div class="pro-add-to-cart">
                                <button title="Add to Cart">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
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
<script>
    $(document).ready(function () {
        $('#add-cart').on('click', function () {

            $.post("add-to-cart.php",
                {
                    book_id: $('#book_id').val(),
                    qty: $('#qty').val()
                },
                function (data, status) {
                    if (data == 'success') {
                       window.location.href = 'cart.php';
                    }
                });
        });
    });
</script>
</body>

</html>
