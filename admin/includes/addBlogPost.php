<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Blog Post</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Description -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Blog Post</h3>
                <div class="card-tools">
                    <button type="button" onclick="window.location='index.php?blog_post';" class="btn btn-sm btn-info">
                        Manage Blog Post
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form role="form" method="post" id="blog_post_Add" enctype="multipart/form-data">
                    <div class="col-sm-8 offset-2">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="postTitle" class="form-control" placeholder="Enter Blog Post Title">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="card-body pad">
                                <div class="mb-3">
                                         <textarea class="textarea" name="postDes" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 38px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                         </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="select_cats" class="form-control select2" style="width: 100%;">
                                <option value="0" disabled="disabled" selected="selected">Select Category</option>
                                <?php
                                $sql = "SELECT * FROM `blog_categories` where is_Active='1'";
                                $execute = mysqli_query($con, $sql);

                                while ($row = mysqli_fetch_array($execute)) {
                                    $name = $row['name'];
                                    $id = $row['id'];
                                    echo "<option value='$id'>$name</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="InputFile">File input - (Recommended size 256*256)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input accept=".png, .jpg, .jpeg" type="file"
                                           class="custom-file-input" name="authorImg">
                                    <label class="custom-file-label" for="InputFile">Blog Post Image</label>
                                </div>
                            </div>
                        </div>


                    </div>

            </div>
            <!-- card-footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-block btn-success float-right col-md-1">Save</button>
            </div>
            </form>
            <!-- /.card-footer-->
        </div>
        <!-- /.Description -->

    </section>
    <!-- /.content -->
</div>
<?php
