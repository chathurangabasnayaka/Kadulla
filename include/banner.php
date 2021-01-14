<div class="banner-area padding-10-row-col pb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-10">
                    <?php
                    $sql_banner_1 = "SELECT * FROM `banner` where id='1' AND `state`='1'";
                    $execute_banner_1 = mysqli_query($con, $sql_banner_1);
                    $row_banner_1 = mysqli_fetch_assoc($execute_banner_1);
                    $title_1 = $row_banner_1['title_1'];
                    $title_2 = $row_banner_1['title_2'];
                    $title_3 = $row_banner_1['title_3'];
                    $link = $row_banner_1['link'];
                    $file = $row_banner_1['img'];
                    ?>
                    <div class="banner-img banner-img-border banner-img-zoom">
                        <a href="<?php echo $link; ?>"><img src="assets/images/banner/<?php echo $file; ?>" alt=""></a>
                    </div>
                    <div class="banner-content-3">
                        <h2><?php echo $title_1; ?></h2>
                        <span><?php echo $title_2; ?></span>
                        <h3><?php echo $title_3; ?></h3>
                        <div class="btn-style-4">
                            <a href="<?php echo $link; ?>">Shop now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-10">
                    <?php
                    $sql_banner_2 = "SELECT * FROM `banner` where id='2' AND `state`='1'";
                    $execute_banner_2 = mysqli_query($con, $sql_banner_2);
                    $row_banner_2 = mysqli_fetch_assoc($execute_banner_2);
                    $title_1 = $row_banner_2['title_1'];
                    $title_2 = $row_banner_2['title_2'];
                    $title_3 = $row_banner_2['title_3'];
                    $link = $row_banner_2['link'];
                    $file = $row_banner_2['img'];
                    ?>
                    <div class="banner-img banner-img-border banner-img-zoom">
                        <a href="<?php echo $link; ?>"><img src="assets/images/banner/<?php echo $file; ?>" alt=""></a>
                    </div>
                    <div class="banner-content-4">
                        <h2><?php echo $title_1; ?></h2>
                        <span></span>
                        <h3><?php echo $title_3; ?></h3>
                        <div class="btn-style-4">
                            <a href="<?php echo $link; ?>">Shop now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="banner-wrap mb-10">
                    <?php
                    $sql_banner_3 = "SELECT * FROM `banner` where id='3' AND `state`='1'";
                    $execute_banner_3 = mysqli_query($con, $sql_banner_3);
                    $row_banner_3 = mysqli_fetch_assoc($execute_banner_3);
                    $title_1 = $row_banner_3['title_1'];
                    $title_2 = $row_banner_3['title_2'];
                    $title_3 = $row_banner_3['title_3'];
                    $link = $row_banner_3['link'];
                    $file = $row_banner_3['img'];
                    ?>
                    <div class="banner-img banner-img-border banner-img-zoom">
                        <a href="<?php echo $link; ?>"><img src="assets/images/banner/<?php echo $file; ?>" alt=""></a>
                    </div>
                    <div class="banner-content-5">
                        <span><?php echo $title_2; ?></span>
                        <h2><?php echo $title_1; ?></h2>
                        <p><?php echo $title_3; ?></p>
                        <div class="btn-style-4">
                            <a href="<?php echo $link; ?>">Shop now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
