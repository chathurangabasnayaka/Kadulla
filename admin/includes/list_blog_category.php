<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Manage Blog Category</li>
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
                    <h3 class="card-title">Manage Blog Category</h3>
                    <div class="card-tools">
                        <button type="button" onclick="window.location='index.php?blog_catagory';" class="btn btn-sm btn-info">Add New Blog Category</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-10 offset-1">
                        <table id="view_blog_cats" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 50px;text-align: center;">#</th>
                                <th style="width: 250px;text-align: center;">Name</th>
                                <th style="width: 100px;text-align: center;">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.Description -->
    </section>
    <!-- /.content -->

    <!-- Edit modal -->
    <div class="modal fade" id="modal-blog_editCats">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Blog Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" class="blog_catsUpdate">
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input name="blog_catsId" type="hidden">
                                <input type="text" name="blog_catsName" class="form-control">
                            </div>
                        </div>

                </div>
                <div class="modal-footer right">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->

    <!-- Delete modal -->
    <div class="modal fade" id="modal-dlt-blog">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Blog Category</h4>
                    <input id="cid" name="cid" type="hidden" />
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you want to Delete ....?</p>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="button" id="dlt_Blog_Cat_btn" class="btn btn-outline-light">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>
