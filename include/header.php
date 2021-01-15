<header class="header-area">
    <div class="header-large-device">
        <div class="header-top header-top-ptb-1 border-bottom-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="social-offer-wrap">
                            <div class="social-style-1">
                                <a href="#"><i class="icon-social-twitter"></i></a>
                                <a href="#"><i class="icon-social-facebook"></i></a>
                                <a href="#"><i class="icon-social-instagram"></i></a>
                                <a href="#"><i class="icon-social-youtube"></i></a>
                                <a href="#"><i class="icon-social-pinterest"></i></a>
                            </div>
                            <div class="header-offer-wrap-2">
                                <p><span>FREE SHIPPING</span> island wide for all orders over LKR.2999</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="header-top-right">
                            <div class="same-style-wrap">
                                <div class="same-style same-style-mrg-2 track-order">
                                    <p>
                                        <?php
                                        if ($user != ''){
                                            echo 'Hi, '.$user['uname'];
                                        }else{
                                            echo '';
                                        }
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-padding-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="categori-search-wrap">
                            <div class="categori-style-1">
                                <select class="nice-select nice-select-style-1">
                                    <option>All Categories</option>
                                    <?php
//                                    mysqli_set_charset($con, 'utf8');
                                    $sql = "SELECT * FROM `categories` where is_Active='1'";
                                    $execute = mysqli_query($con, $sql);

                                    while ($row = mysqli_fetch_array($execute)) {
                                        $name = $row['name'];
                                        $id = $row['id'];
                                        echo "<option value='$id'>$name</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="search-wrap-3">
                                <form action="#">
                                    <input placeholder="Search Books..." type="text">
                                    <button><i class="lnr lnr-magnifier"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2 same-style-2-font-inc">
                                <a id="login_check" href="#"><i class="icon-user"></i></a>
<!--                                href="login-register.php"-->
                            </div>
<!--                            <div class="same-style-2 same-style-2-font-inc">-->
<!--                                <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count green">03</span></a>-->
<!--                            </div>-->
                            <div class="same-style-2 same-style-2-font-inc header-cart">
                                <a class="cart-active" href="#">
                                    <?php
                                        include_once ('cart_controller.php');
                                    ?>
                                    <i class="icon-basket-loaded"></i><span class="pro-count green"><?=getSize()?></span>
                                    <span class="cart-amount">LKR <?= number_format((float)calculateTotal(), 2, '.', '');?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="main-categori-wrap">
                            <a class="categori-show" href="#"><i class="lnr lnr-menu"></i> Top Categories <i class="icon-arrow-down icon-right"></i></a>
                            <div class="category-menu categori-hide">
                                <nav>
                                    <ul>
                                        <?php

                                        $sql = "SELECT * FROM `categories` WHERE is_Active='1' AND is_Orderby IS NOT NULL ORDER BY `is_Orderby` ASC LIMIT 12";
                                        $execute = mysqli_query($con, $sql);

                                        while ($row = mysqli_fetch_array($execute)) {
                                            $name = $row['name'];
                                            $id = $row['id'];
                                            echo "<li class='cr-dropdown'><a href='category-details.php?CID=$id'>$name</a></li>";
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu main-menu-padding-1 main-menu-font-size-14 main-menu-lh-2">
                            <nav>
                                <ul>
                                    <li><a href="book.php">BOOKS </a> </li>
                                    <li><a>EXPLORE </a>
                                        <ul class="sub-menu-style">
                                            <li><a href="authors.php">AUTHORS </a> </li>
                                            <li><a href="translators.php">TRANSLATORS </a> </li>
                                            <li><a href="publishers.php">PUBLISHERS </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">BLOG </a></li>
                                    <li><a href="contact.html">CONTACT </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="hotline">
                            <p><i class="icon-call-end"></i> <span>Hotline</span> 077 258 3942 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device small-device-ptb-1">
        <div class="container">
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
                        <div class="same-style-2 same-style-2-font-inc">
<!--                            <a href="login-register.html"><i class="icon-user"></i></a>-->
                            <p>test</p>
                        </div>
                        <div class="same-style-2 same-style-2-font-inc">
<!--                            <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count green">03</span></a>-->
                        </div>
                        <div class="same-style-2 same-style-2-font-inc header-cart">
                            <a class="cart-active" href="#">
                                <i class="icon-basket-loaded"></i><span class="pro-count green">02</span>
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
