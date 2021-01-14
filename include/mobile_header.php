<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class="icon_close"></i></a>
        <div class="mobile-header-content-area">
            <div class="header-offer-wrap-2 mrg-none mobile-header-padding-border-4">
                <p><span>FREE SHIPPING</span> world wide for all orders over Rs 1999</p>
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
                        <li class="menu-item-has-children"><a href="authors.php">AUTHORS</a></li>
                        <li class="menu-item-has-children "><a href="authors.php">TRANSLATORS </a></li>
                        <li class="menu-item-has-children "><a href="Publishers.php">PUBLISHERS </a></li>
                        <li><a href="blog.php">BLOG </a></li>
                        <li><a href="contact.html">CONTACT </a></li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="main-categori-wrap mobile-menu-wrap mobile-header-padding-border-3">
                <a class="categori-show" href="#">
                    <i class="lnr lnr-menu"></i> Top Categories <i class="icon-arrow-down icon-right"></i>
                </a>
                <div class="categori-hide-2">
                    <nav>
                        <ul class="mobile-menu">
                            <?php

                            $sql = "SELECT * FROM `categories` WHERE is_Active='1' AND is_Orderby IS NOT NULL ORDER BY `is_Orderby` ASC LIMIT 12";
                            //                                        mysqli_set_charset($con, 'utf8');
                            $execute = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_array($execute)) {
                                $name = $row['name'];
                                $id = $row['id'];
                                echo "<li class='menu-item-has-children'><a href='$id'>$name</a></li>";
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
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
