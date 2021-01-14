<div class="product-area pb-115">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
            <div class="section-title-3">
                <h2>Seller's Picks</h2>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-11" class="tab-pane active">
                <div class="product-slider-active-3 nav-style-3">
                    <?php
                    $sql = "SELECT b.`id`,b.`name`,b.`price`,b.`latest_price`,b.`img1`,a.`name` as author_name,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id=categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a WHERE a.`id`=b.`author_id` AND b.`is_Active`='1'  AND b.`seller_picks`='1'";
                    $run_sql = mysqli_query($con, $sql);

                    while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                    $id = $row_run_sql['id'];
                    $name = $row_run_sql['name'];
                    $price = $row_run_sql['price'];
                    $latest_price = $row_run_sql['latest_price'];
                    $author_name = $row_run_sql['author_name'];
                    $img1 = $row_run_sql['img1'];

                    $cat_arry = $row_run_sql['cat'];
                    $str = str_replace(',', ' ^/ ', $cat_arry);
                    $cat = explode('^', $str);

                    ?>
                    <div class="product-plr-1">
                        <div class="single-product-wrap">
                            <div class="product-img product-img-zoom mb-15">
                                <a href="product-details.php?ID=<?php echo $id ?>">
                                    <img src="admin/img/book/<?php echo $img1; ?>" alt="">
                                </a>
                                <div class="product-action-2 tooltip-style-2">
<!--                                    <button title="Wishlist"><i class="icon-heart"></i></button>-->
                                    <button title="Quick View" id="<?php echo $id; ?>" class="bookViewBtn"><i
                                            class="icon-size-fullscreen icons"></i></button>
<!--                                    <button title="Compare"><i class="icon-refresh"></i></button>-->
                                </div>
                            </div>
                            <div class="product-content-wrap-3">
                                <div class="product-content-categories">
                                    <a href="shop.html"><?php
                                        foreach ($cat as $index=>$cat_si) {
                                            if ($index == 2){
                                                break;
                                            }
                                            echo $cat_si;
                                        }
                                        ?></a>
                                </div>
                                <h3><a href="product-details.php?ID=<?php echo $id ?>"><?php echo $name; ?></a></h3>
                                <div class="product-rating-wrap-2">
                                    <h5><a href="product-details.php?ID=<?php echo $id ?>"><?php echo $author_name; ?></a></h5>
                                </div>
                                <div class="product-price-4">
                                    <span>Rs.<?php echo $latest_price; ?></span>
                                </div>
                            </div>
                            <div class="product-content-wrap-3 product-content-position-2">
                                <div class="product-content-categories">
                                    <a href="shop.html"><?php
                                        foreach ($cat as $index=>$cat_si) {
                                        if ($index == 2){
                                        break;
                                        }
                                        echo $cat_si;
                                        }
                                        ?></a>
                                    </a>
                                </div>
                                <h3><a href="product-details.php?ID=<?php echo $id ?>"><?php echo $name; ?></a></h3>
                                <div class="product-rating-wrap-2">
                                    <h5><a href="product-details.php?ID=<?php echo $id ?>"><?php echo $author_name; ?></a></h5>
<!--                                    <span>(9)</span>-->
                                </div>
                                <div class="product-price-4">
                                    <span>Rs.<?php echo $latest_price; ?></span>
                                </div>
                                <div class="pro-add-to-cart-2">
                                    <button class="basket_btn" value="<?php echo $id ?>" title="Add to Cart">Add To Cart</button>
                                </div>
<!--                                <input type="hidden" value="--><?php //echo $name; ?><!--" name="bid" />-->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
