
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
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
                <h3 class="card-title">Change Password</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <form role="form" action="#" method="post">
                <div class="card-body">
                    <div class="col-sm-8 offset-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="text" name="password" id="password" class="form-control"
                                   placeholder="Enter Current Password"
                                   required>
                        </div>
                        <!-- /text input -->
                        <!-- text input -->
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" name="newPassword" id="newPassword" class="form-control"
                                   placeholder="Enter New Password"
                                   required>
                        </div>
                        <!-- /text input -->
                        <!-- text input -->
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="text" id="confirmPassword" name="confirmPassword" class="form-control"
                                   placeholder="Enter Again New Password" required>
                        </div>
                        <!-- /text input -->
                    </div>
                </div>
                <!-- card-footer-->
                <div class="card-footer">
                    <button name="save" type="button" id="save" class="btn btn-block btn-success float-right col-md-1">Save
                    </button>
                </div>
                <!-- /.card-footer-->
            </form>
        </div>
        <!-- /.Description -->

    </section>
    <!-- /.content -->
</div>


