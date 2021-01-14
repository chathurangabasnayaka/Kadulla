<div class="blog-area bg-gray-3 pt-115 pb-80">
    <div class="container">
        <div class="section-title-tab-wrap mb-35">
            <div class="section-title-3">
                <h2>The Latest News</h2>
            </div>
            <div class="btn-style-5">
                <a href="blog.php">View All News <i class="icon-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "select b.`id` as blog_id,b.`title`,b.`photo`,b.`created_at`,bc.`name`,b.`descript`,b.`category_id` from `blogs` b INNER join `blog_categories` bc on b.`category_id`=bc.`id` WHERE b.`is_Active`='1' ORDER BY b.`id` DESC limit 6";
            $run_sql = mysqli_query($con, $sql);

            while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                $id = $row_run_sql['blog_id'];
                $name = $row_run_sql['title'];
                $img = $row_run_sql['photo'];
                $date = $row_run_sql['created_at'];
                $cats_name = $row_run_sql['name'];
                $cats_id = $row_run_sql['category_id'];
                $des = $row_run_sql['descript'];

                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-30">
                        <div class="blog-img mb-25">
                            <a href="<?php echo $id ?>"><img src="admin/img/blog/<?php echo $img; ?>" alt="blog-img"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="<?php echo $cats_id ?>"><?php echo $cats_name ?></a></li>
                                    <li><?php echo $date ?></li>
                                </ul>
                            </div>
                            <h3><a href="<?php echo $id ?>"><?php echo $name ?></a></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
