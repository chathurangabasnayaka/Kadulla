<div class="slider-area bg-gray-2">
    <div class="hero-slider-active-2 nav-style-1 nav-style-1-green">

        <?php
        $sql_slider = "SELECT `title`,`decript`,`filepath`,`link` FROM `slider` where state='1'";
        $run_slider = mysqli_query($con, $sql_slider);
        $i = -1;
        while ($row_run_slider = mysqli_fetch_array($run_slider)) {
        $title = $row_run_slider['title'];
        $des = $row_run_slider['decript'];
        $file = $row_run_slider['filepath'];
        $link = $row_run_slider['link'];
        $i++;
        ?>

        <div class="single-hero-slider single-hero-slider-hm3 single-animation-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-12 ml-auto">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
                                <div class="hero-slider-content-3 slider-animated-1">
                                    <h4 class="animated">New Arrivals</h4>

                                    <h1 class="animated"><?php echo $title; ?></h1>
                                    <p class="animated"><?php echo $des; ?></p>
                                    <div class="btn-style-3">
                                        <a class="animated btn-1-padding-1" href="<?php echo $link; ?>">Shop now <i
                                                class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-12">
                                <div class="tab-content slider-tab-big-img-wrap jump animated">
                                    <div class="tab-pane active">
                                        <div class="slider-tab-big-img slider-tab-big-img-mrg-1">
                                            <img src="assets/images/slider/<?php echo $file; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>
