<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DashBoard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php
                            $category = "SELECT COUNT(*) AS total FROM `categories` WHERE is_Active='1' ";
                            $result_category = mysqli_query($con, $category);
                            $row_category  = mysqli_fetch_assoc($result_category);
                            ?>
                            <h3><?php echo $row_category ['total']; ?></h3>
                            <p>Category</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="index.php?list_category" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php
                            $author = "SELECT COUNT(*) AS total FROM `author` WHERE isActive='1' ";
                            $result_author = mysqli_query($con, $author);
                            $row_author = mysqli_fetch_assoc($result_author);
                            ?>
                            <h3><?php echo $row_author['total']; ?></h3>
                            <p>Author</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-social-designernews-outline"></i>
                        </div>
                        <a href="index.php?list_author" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->


                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php
                            $publisher = "SELECT COUNT(*) AS total FROM `publisher` WHERE is_Active='1' ";
                            $result_publisher = mysqli_query($con, $publisher);
                            $row_publisher = mysqli_fetch_assoc($result_publisher);
                            ?>
                            <h3><?php echo $row_publisher['total']; ?></h3>
                            <p>Publisher</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-book"></i>
                        </div>
                        <a href="index.php?list_publisher" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <?php
                            $type = "SELECT COUNT(*) AS total FROM `type` WHERE is_Active='1' ";
                            $result_type = mysqli_query($con, $type);
                            $row_type = mysqli_fetch_assoc($result_type);
                            ?>
                            <h3><?php echo $row_type['total']; ?></h3>
                            <p>Type</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bookmark"></i>
                        </div>
                        <a href="index.php?list_type" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <?php
                            $translator = "SELECT COUNT(*) AS total FROM `book_translator` WHERE is_Active='1' ";
                            $result_translator = mysqli_query($con, $translator);
                            $row_translator = mysqli_fetch_assoc($result_translator);
                            ?>
                            <h3><?php echo $row_translator['total']; ?></h3>
                            <p>Translator</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-person"></i>
                        </div>
                        <a href="index.php?list_translator" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php
                            $book = "SELECT COUNT(*) AS total FROM `book` WHERE is_Active='1' ";
                            $result_book = mysqli_query($con, $book);
                            $row_book = mysqli_fetch_assoc($result_book);
                            ?>
                            <h3><?php echo $row_book['total']; ?></h3>
                            <p>Book</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-email"></i>
                        </div>
                        <a href="index.php?list_book" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->


            </div>
        </div>

    </section>
</div>



