<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Manage Author</li>
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
                    <h3 class="card-title">Manage Author</h3>
                    <div class="card-tools">
                        <button type="button" onclick="window.location='index.php?author';" class="btn btn-sm btn-info">Add New Author</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-10 offset-1">
                        <table id="view_translator" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 50px;text-align: center;">#</th>
                                <th style="width: 250px;text-align: center;">Name</th>
                                <th style="width: 250px;text-align: center;">Description</th>
                                <th style="width: 250px;text-align: center;">Image</th>
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
    <div class="modal fade bd-example-modal-xl" id="modal-edit-Translator">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Translator</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" class="translatorUpdate">
                        <div class="col-sm-8 offset-2">
                            <div class="form-group">
                                <label>Translator Name</label>
                                <input name="TranslatorId" type="hidden">
                                <input type="text" name="TranslatorName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="InputFile">File input - (Recommended size 256*256)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept=".png, .jpg, .jpeg" type="file"
                                               class="custom-file-input" name="TranslatorImg">
                                        <label class="custom-file-label" name="TranslatorName" for="InputFile">Author Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="card-body pad">
                                    <div class="mb-3">
                                         <textarea class="textarea" name="TranslatorDes" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                         </textarea>
                                    </div>
                                </div>
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
    <div class="modal fade" id="modal-dlt-translator">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Translator</h4>
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
                    <button type="button" id="dlt_authorbtn" class="btn btn-outline-light">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>
