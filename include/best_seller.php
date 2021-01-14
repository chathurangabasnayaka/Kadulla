<div class="product-area pb-110">
    <div class="container">
        <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
            <div class="section-title-3">
                <h2>Best Sellers</h2>
            </div>
        </div>
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                    <?php
                    $sql = "SELECT b.`id`,b.`name`,b.`price`,b.`latest_price`,b.`img1`,a.`name` as author_name,a.id a_id,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id=categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a WHERE a.`id`=b.`author_id` AND b.`is_Active`='1'  AND b.`best_seller`='1' LIMIT 24";
                    $run_sql = mysqli_query($con, $sql);
                    //                    $i = -1;
                    while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                        $id = $row_run_sql['id'];
                        $author_id = $row_run_sql['a_id'];
                        $name = $row_run_sql['name'];
                        $price = $row_run_sql['price'];
                        $latest_price = $row_run_sql['latest_price'];
                        $author_name = $row_run_sql['author_name'];
                        $img1 = $row_run_sql['img1'];

                        $cat_arry = $row_run_sql['cat'];
                        $str = str_replace(',', ' ^/ ', $cat_arry);
                        $cat = explode('^', $str);

//                    $i++;

                        ?>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.php?ID=<?php echo $id ?>"><img src="admin/img/book/<?php echo $img1; ?>"
                                                                        alt=""></a>
                                </div>
                                <div class="product-content-3">
                                <span><?php
                                    foreach ($cat as $index=>$cat_si) {
                                        if ($index == 2){
                                            break;
                                        }
                                        echo $cat_si;
                                    }
                                    ?></span>
                                    <h4><a href="product-details.php?ID=<?php echo $id ?>"><?php echo $name; ?></a></h4>
                                    <h5><a href="author-details.php?ID=<?php echo $author_id ?>"><?php echo $author_name; ?></a></h5>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>Rs.<?php echo $latest_price; ?></span>
                                            <span class="old-price">Rs.<?php echo $price; ?></span>
                                        </div>
                                        <div class="product-action-3">
<!--                                            <button title="Wishlist"><i class="icon-heart"></i></button>-->
                                            <button class="basket_btn" value="<?php echo $id ?>" title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
