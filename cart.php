<!doctype html>
<html class="no-js" lang="en">
<?php
include('include/db.php');
session_start();
$user = '';
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
//    header("location:my-account.php");
}
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
    <?php include 'include/page_header.php' ?>

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

                                <?php
                                $total = 0;
                                $items = getAllItems();
                                if (isset($items['db'])) {

                                    while ($row = mysqli_fetch_assoc($items['db'])) {
                                        $book_id = $row['book_id'];
                                        $result = mysqli_query($con, "SELECT * FROM `book` WHERE id='$book_id'");
                                        $book = mysqli_fetch_assoc($result);
                                        ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img width="100px" height="100px"
                                                                 src="admin/img/book/<?= $book['img1'] ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?= $book['name'] ?></a></td>
                                            <td class="product-price-cart"><span
                                                        class="amount">LKR <?= $book['latest_price'] ?></span></td>
                                            <td class="product-quantity pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" id="qtybutton" name="qtybutton"
                                                           value="<?= $row['qty'] ?>" >
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                LKR <?= number_format((float)$book['latest_price'] * $row['qty'], 2, '.', ''); ?></td>
                                            <td class="product-remove">
                                                <a data-id="<?= $book_id ?>" class="remove-cart" href="#"><i
                                                            class="icon_close"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $total += $book['latest_price'] * $row['qty'];
                                    }
                                } elseif (isset($items['session'])) {
                                    foreach ($items['session'] as $id => $qty) {
                                        $result = mysqli_query($con, "SELECT * FROM `book` WHERE id='$id'");
                                        $book = mysqli_fetch_assoc($result);
                                        ?>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img width="100px" height="100px"
                                                                 src="admin/img/book/<?= $book['img1'] ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?= $book['name'] ?></a></td>
                                            <td class="product-price-cart"><span
                                                        class="amount">LKR <?= $book['latest_price'] ?></span></td>
                                            <td class="product-quantity pro-details-quality">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" id="qtybutton" name="qtybutton"
                                                           value="<?= $qty ?>" >
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                LKR <?= number_format((float)$book['latest_price'] * $qty, 2, '.', ''); ?></td>
                                            <td class="product-remove">
                                                <a data-id="<?= $id ?>" class="remove-cart" href="#"><i
                                                            class="icon_close"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $total += $book['latest_price'] * $qty;
                                    }
                                }
                                ?>

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
                                <h5>Total products <span>LKR <?= number_format((float)$total, 2, '.', ''); ?></span>
                                </h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        <li><input type="checkbox"> Standard <span>LKR 20.00</span></li>
                                        <li><input type="checkbox"> Express <span>LKR 30.00</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total
                                    <span>LKR <?= number_format((float)$total, 2, '.', ''); ?></span></h4>
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
    $(document).ready(function () {
        $('.category-menu categori-hide').hide();

    });
</script>

</body>

</html>
