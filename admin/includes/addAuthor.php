<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Author</li>
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
                <h3 class="card-title">Add Author</h3>
                <div class="card-tools">
                    <button type="button" onclick="window.location='index.php?list_author';" class="btn btn-sm btn-info">Manage Author</button>
                </div>
            </div>
            <div class="card-body">
                <form role="form" method="post" id="authorAdd" enctype="multipart/form-data">
                    <div class="col-sm-8 offset-2">

                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" id="authorName" name="authorName" class="form-control" placeholder="Enter Author Name">
                        </div>

                        <div class="form-group">
                            <label for="InputFile">File input - (Recommended size 256*256)</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input accept=".png, .jpg, .jpeg" type="file"
                                           class="custom-file-input" name="authorImg">
                                    <label class="custom-file-label" for="InputFile">Author Image</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="card-body pad">
                                <div class="mb-3">
                                         <textarea class="textarea" name="authorDes" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                         </textarea>
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
