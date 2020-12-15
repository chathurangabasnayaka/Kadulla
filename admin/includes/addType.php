<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Type</li>
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
                <h3 class="card-title">Add Type</h3>
                <div class="card-tools">
                    <button type="button" onclick="window.location='index.php?list_type';" class="btn btn-sm btn-info">Manage Type</button>
                </div>
            </div>
            <div class="card-body">
                <form role="form" method="post" id="typeAdd" enctype="multipart/form-data">
                    <div class="col-sm-8 offset-2">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" id="typeName" class="form-control" placeholder="Enter Name of Type">
                        </div>
                        <!-- / textarea -->
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
