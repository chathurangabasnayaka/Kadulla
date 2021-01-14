<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Main Menu Slider</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Main Menu Slider</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <?php
        $sql_slider = "SELECT `title`,`decript`,`filepath`,`link` FROM `slider` where state='1'";
        $run_slider = mysqli_query($con, $sql_slider);
        $i = -1;
        $id = 0;
        while ($row_run_slider = mysqli_fetch_array($run_slider)) {
//            $id = $row_run_slider['id'];
            $title = $row_run_slider['title'];
            $des = $row_run_slider['decript'];
            $file = $row_run_slider['filepath'];
            $book_link = $row_run_slider['link'];
            $i++;
            $id++;
            ?>
            <!-- Slider 1 -->
            <div class="card <?php echo($i ? 'collapsed-card' : '') ?>">
                <div class="card-header">
                    <h3 class="card-title">Main Menu Slider <?php echo $id ?></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas <?php echo($i ? 'fa-plus' : ' fa-minus') ?>"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" class="sliderForm" method="post" name="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-8 offset-2">
                                <input name="ids" type="hidden" value="<?php echo $id ?>">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Slider Title</label>
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                         <textarea class="textarea" name="sliderTitle" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px;
                                                   border: 1px solid #dddddd; padding: 10px;">
                                             <?php echo $title;?>
                                         </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /text input -->
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Slider Description</label>
                                    <textarea name="sliderDes" class="form-control" rows="3"
                                              placeholder="Enter Slider Description"><?php echo $des; ?></textarea>
                                </div>
                                <!-- / textarea -->
                                <div class="form-group">
                                    <label>Link</label>
                                    <input value="<?php echo $book_link; ?>" type="text" name="sliderLink" class="form-control" placeholder="Enter Slider Link">
                                </div>

                                <!-- Image-->
                                <div class="form-group">
                                    <center>
                                        <img name="imagePreview" src=" ../assets/images/slider/<?php echo $file; ?>"
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
                                                   class="custom-file-input" name="sliderFile">
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
<?php
