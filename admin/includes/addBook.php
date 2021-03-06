<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Book</li>
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
                <h3 class="card-title">Add Book</h3>
                <div class="card-tools">
                    <button type="button" onclick="window.location='index.php?list_book';" class="btn btn-sm btn-info">
                        Manage Book
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form role="form" method="post" id="bookAdd" enctype="multipart/form-data">
                    <div class="col-sm-8 offset-2">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="bookName" class="form-control" placeholder="Madol Duwa">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <div class="card-body pad">
                                <div class="mb-3">
                                         <textarea class="textarea" name="BookDes" placeholder="Place some text here"
                                                   style="width: 100%; height: 200px; font-size: 38px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                         </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Weight - (KG)</label>
                            <input type="text" name="book_weight" class="form-control" placeholder="0.250">
                        </div>

                        <div class="form-group">
                            <label>Price - (LKR)</label>
                            <input type="text" name="book_price" class="form-control" placeholder="100">
                        </div>

                        <div class="form-group">
                            <label>Latest Price - (KG)</label>
                            <input type="text" name="book_latest_price" class="form-control" placeholder="100">
                        </div>

                        <div class="form-group">
                            <label>Available Quantity</label>
                            <input type="text" name="book_qty" class="form-control" placeholder="100">
                        </div>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="book_isbn" class="form-control" placeholder="978-3-16-148410-0">
                        </div>

                        <div class="form-group">
                            <label>Pages</label>
                            <input type="text" name="book_page" class="form-control" placeholder="225">
                        </div>

                        <div class="form-group">
                            <label>Author</label>
                            <select name="select_author" class="form-control select2" style="width: 100%;">
                                <option value="0" disabled="disabled" selected="selected">Select Author</option>
                                <?php
                                $sql = "SELECT * FROM `author` where isActive='1'";
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
                            <label>Translator</label>
                            <select name="select_translator" class="form-control select2" style="width: 100%;">
                                <option value="0" disabled="disabled" selected="selected">Select Translator</option>
                                <?php
                                $sql = "SELECT * FROM `book_translator` where is_Active='1'";
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
                            <label>Type</label>
                            <select name="select_type" class="form-control select2" style="width: 100%;">
                                <option value="0" disabled="disabled" selected="selected">Select Type</option>
                                <?php
                                $sql = "SELECT * FROM `type` where is_Active='1'";
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
                            <label>Publisher</label>
                            <select name="select_publisher" class="form-control select2" style="width: 100%;">
                                <option value="0" disabled="disabled" selected="selected">Select Publisher</option>
                                <?php
                                $sql = "SELECT * FROM `publisher` where is_Active='1'";
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
                            <label>Categories</label>
                            <select name="select_category" class="form-control select2" multiple="multiple" style="width: 100%;">
                                <?php
                                $sql = "SELECT * FROM `categories` where is_Active='1'";
                                $execute = mysqli_query($con, $sql);

                                while ($row = mysqli_fetch_array($execute)) {
                                    $name = $row['name'];
                                    $id = $row['id'];
                                    echo "<option value='$id'>$name</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <div class="icheck-success d-inline">
                                <input type="checkbox" id="best_seller">
                                <label for="best_seller">
                                    Best Sellers
                                </label>
                            </div>
                            <div class="icheck-success d-inline">
                                <input type="checkbox" id="seller_picks">
                                <label for="seller_picks">
                                    Seller's Picks
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <label class="active">Photos - (Recommended 200 Kb Image)</label>
                                <div class="input-images-1" style="padding-top: .5rem;"></div>
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
