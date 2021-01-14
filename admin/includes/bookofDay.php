<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Main Menu  Book of the Day</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Main Menu Book of the Day</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <?php
        $sql_banner = "SELECT * FROM `banner` WHERE state='1' ORDER BY id ASC LIMIT 3,5";
        $run_banner = mysqli_query($con, $sql_banner);
        $i = -1;
        $count = 0;
        while ($row_run_banner = mysqli_fetch_array($run_banner)) {
            $id = $row_run_banner['id'];
            $title_1 = $row_run_banner['title_1'];
            $title_2 = $row_run_banner['title_2'];
            $title_3 = $row_run_banner['title_3'];
            $link = $row_run_banner['link'];
            $file = $row_run_banner['img'];
            $i++;
            $count++;
            ?>
            <!-- Slider 1 -->
            <div class="card <?php echo($i ? 'collapsed-card' : '') ?>">
                <div class="card-header">
                    <h3 class="card-title">Main Menu Book of the Day <?php echo $count ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas <?php echo($i ? 'fa-plus' : ' fa-minus') ?>"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="dayBookForm" method="post" name="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-8 offset-2">
                                <input name="ids" type="hidden" value="<?php echo $id ?>">

                                <!-- text input -->
                                <div class="form-group">
                                    <label>Title 1</label>
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                         <textarea class="textarea" name="bannerTitle_1" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                                                   border: 1px solid #dddddd; padding: 10px;">
                                             <?php echo $title_1;?>
                                         </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /text input -->

                                <div class="form-group">
                                    <label>Title 2</label>
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                         <textarea class="textarea" name="bannerTitle_2" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                             <?php echo $title_2; ?>
                                         </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Title 3</label>
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                         <textarea class="textarea" name="bannerTitle_3" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                             <?php echo $title_3; ?>
                                         </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Shop Link</label>
                                    <input type="text" name="banner_link" value="<?php echo $link; ?>" class="form-control" placeholder="www.yourdomain.com/link">
                                </div>

                                <!-- Image-->
                                <div class="form-group">
                                    <center>
                                        <img name="imagePreview" src=" ../assets/images/banner/<?php echo $file; ?>"
                                             style="text-align: center; width: 400px;height: 250px">
                                    </center>
                                </div>
                                <!-- Image-->

                                <!-- Choose Image -->
                                <div class="form-group">
                                    <label for="InputFile">File input - (Recommended size 256*600)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input accept=".png, .jpg, .jpeg, .gif" type="file"
                                                   class="custom-file-input" name="bannerFile">
                                            <label class="custom-file-label" for="InputFile"><?php echo $file; ?></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Choose Image-->
                            </div>
                        </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-block btn-success float-right col-md-1">
                        Save
                    </button>
                </div>
                </form>
                <!-- /.card-footer-->
            </div>
            <!-- /.Slider 1 -->
        <?php } ?>
    </section>
    <!-- /.content -->
</div>
