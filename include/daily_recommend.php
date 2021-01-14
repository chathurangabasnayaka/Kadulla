<div class="banner-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <?php
                    $sql_banner_1 = "SELECT * FROM `banner` where id='4' AND `state`='1'";
                    $execute_banner_1 = mysqli_query($con, $sql_banner_1);
                    $row_banner_1 = mysqli_fetch_assoc($execute_banner_1);
                    $title_1 = $row_banner_1['title_1'];
                    $link = $row_banner_1['link'];
                    $file = $row_banner_1['img'];
                    ?>
                    <div class="banner-img banner-img-zoom">
                        <a href="<?php echo $link; ?>"><img src="assets/images/banner/<?php echo $file; ?>" alt=""></a>
                    </div>
                    <div class="banner-content-6">
                        <h3><?php echo $title_1; ?></h3>
                        <div class="banner-btn-1">
                            <a href="<?php echo $link; ?>">Shop now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="banner-wrap mb-30">
                    <?php
                    $sql_banner_1 = "SELECT * FROM `banner` where id='5' AND `state`='1'";
                    $execute_banner_1 = mysqli_query($con, $sql_banner_1);
                    $row_banner_1 = mysqli_fetch_assoc($execute_banner_1);
                    $title_1 = $row_banner_1['title_1'];
                    $title_2 = $row_banner_1['title_2'];
                    $title_3 = $row_banner_1['title_3'];
                    $link = $row_banner_1['link'];
                    $file = $row_banner_1['img'];
                    ?>
                    <div class="banner-img banner-img-zoom">
                        <a href="<?php echo $link; ?>"><img src="assets/images/banner/<?php echo $file; ?>" alt=""></a>
                    </div>
                    <div class="banner-content-7-8-wrap">
                        <div class="banner-content-7">
                            <span>දවසේ ළමා කතන්දරය </span>
                            <h2><?php echo $title_1; ?></h2>
                            <p><?php echo $title_2; ?></p>
                        </div>
                        <div class="banner-content-8">
                            <span>discount</span>
                            <h3><?php echo $title_3; ?></span></h3>
                            <div class="banner-btn-2">
                                <a href="<?php echo $link; ?>">Shop now <i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
