<!doctype html>
<html class="no-js" lang="zxx">
<?php
include('include/db.php');
session_start();
$user = '';
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
//    header("location:my-account.php");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Authors - Kadulla Book Publishers</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.jpeg">

    <!-- All CSS is here
	============================================ -->
    <?php include 'include/css.php' ?>

</head>

<body>

<div class="main-wrapper">

    <?php include 'include/page_header.php' ?>

    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">Authors</li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    $result_count = mysqli_query($con, "SELECT COUNT(id) FROM `author` where isActive='1'");
    $row_count = mysqli_fetch_row($result_count);
    $total_records = $row_count[0];
    ?>
    <div class="shop-area pt-20 pb-120 section-padding-2">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <div class="shop-topbar-wrapper">
                        <div class="shop-topbar-left">
                            <div class="view-mode nav">
                                <a class="active" href="#shop-1" data-toggle="tab"><i class="icon-grid"></i></a>
                                <a href="#shop-2" data-toggle="tab"><i class="icon-menu"></i></a>
                            </div>
                            <p>Showing 1 - <?php
                                if (isset($_GET["lim"])) {
                                    echo $_GET["lim"];
                                } else {
                                    echo '12';
                                }
                                ?> of <?php echo $total_records ?> results </p>
                        </div>
                        <div class="product-sorting-wrapper">
                            <div class="product-shorting shorting-style">
                                <label>View :</label>
                                <select id="limit">
                                    <option value="12" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 12) {
                                        echo 'selected';
                                    } ?> >12
                                    </option>
                                    <option value="24" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 24) {
                                        echo 'selected';
                                    } ?> >24
                                    </option>
                                    <option value="36" <?php if (isset($_GET["lim"]) && $_GET["lim"] == 36) {
                                        echo 'selected';
                                    } ?> >36
                                    </option>
                                </select>
                            </div>
                            <div class="product-show shorting-style">
                                <label>Sort by :</label>
                                <select id="filter">
                                    <option value="id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'id') {
                                        echo 'selected';
                                    } ?>>Default</option>
                                    <option value="name" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'name') {
                                        echo 'selected';
                                    } ?>> Name</option>
                                    <option value="id" <?php if (isset($_GET["filter"]) && $_GET["filter"] == 'id') {
                                        echo 'selected';
                                    } ?>> ID</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="shop-bottom-area">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">

                                    <?php

                                    $selectedOption = "id";
                                    $selectedOption_qry = "";
                                    if (isset($_GET["filter"])) {
                                        $selectedOption = $_GET["filter"];
                                        $selectedOption_qry = "&filter=" . $_GET["filter"];
                                    }

                                    $qry = "";
                                    $limit = 12;
                                    $limit_qry = "";
                                    if (isset($_GET["lim"])) {
                                        $limit = $_GET["lim"];
                                        $limit_qry = "&lim=" . $_GET["lim"];
                                    }

                                    $page = "";
                                    if (isset($_GET["page"])) {
                                        $page = $_GET["page"];
                                        $qry .= "&page=" . $_GET["page"];
                                    } else {
                                        $page = 1;
                                    };


                                    $start_from = ($page - 1) * $limit;

                                    $sql = "SELECT * FROM `author` WHERE `isActive`='1' ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                    $run_sql = mysqli_query($con, $sql);

                                    while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                                        $id = $row_run_sql['id'];
                                        $name = $row_run_sql['name'];
                                        $des = $row_run_sql['descript'];
                                        $img = $row_run_sql['img'];

                                        ?>

                                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                                            <div class="single-product-wrap mb-35">
                                                <div class="product-img product-img-zoom mb-15">
                                                    <a href="author-details2.php?aid=<?php echo $id ?>">
                                                        <img src="admin/img/author/<?php echo $img; ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-content-wrap-2 text-center"><h3><a
                                                                href="#"><?php echo $name ?></a></h3>
                                                </div>
                                                <div class="product-content-wrap-2 product-content-position text-center">
                                                    <h3>
                                                        <a href="author-details.php?aid=<?php echo $id ?>"><?php echo $name ?></a>
                                                    </h3>
                                                    <div class="pro-add-to-cart">
                                                        <button onclick="window.location.href='author-details.php?aid=<?php echo $id ?>'"
                                                                title="Author Details">Details
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <?php
                                $sql = "SELECT * FROM `author` WHERE `isActive`='1' ORDER BY (" . $selectedOption . ") ASC LIMIT $start_from, $limit";
                                $run_sql = mysqli_query($con, $sql);

                                while ($row_run_sql = mysqli_fetch_array($run_sql)) {
                                    $id = $row_run_sql['id'];
                                    $name = $row_run_sql['name'];
                                    $des = $row_run_sql['description'];
                                    $img = $row_run_sql['img'];

                                    ?>
                                    <div class="shop-list-wrap mb-30">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                                                <div class="product-list-img">
                                                    <a href="<?php echo $id ?>">
                                                        <img src="admin/img/author/<?php echo $img; ?>"
                                                             alt="Product Style">
                                                    </a>
                                                    <div class="product-list-quickview">
                                                        <button title="Quick View" data-toggle="modal"
                                                                data-target="#exampleModal"><i
                                                                    class="icon-size-fullscreen icons"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-6">
                                                <div class="shop-list-content">
                                                    <h3><a href="<?php echo $id ?>"><?php echo $name ?></a></h3>
                                                    <p><?php echo $des ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-10">
                            <ul>
                                <?php
                                if ((int)$page != 1) {
                                    ?>
                                    <li><a class="prev"
                                           href='authors.php?page=<?php echo ((int)$page) - 1 ?><?php echo $limit_qry.$selectedOption_qry ?>'><i
                                                    class="icon-arrow-left"></i></a></li>
                                    <?php
                                }

                                ?>

                                <?php
                                $result_db = mysqli_query($con, "SELECT COUNT(id) FROM `author` where isActive='1'");
                                $row_db = mysqli_fetch_row($result_db);
                                $total_records = $row_db[0];
                                $total_pages = ceil($total_records / $limit);
                                /* echo  $total_pages; */
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    $pagLink = "<li><a href='authors.php?page=" . $i . $limit_qry .$selectedOption_qry. "'>" . $i . "</a></li>";
                                    echo $pagLink;
                                }

                                if ((int)$page != (int)$total_pages) {
                                    ?>
                                    <li><a class="next"
                                           href='authors.php?page=<?php echo ((int)$page) + 1 ?><?php echo $limit_qry.$selectedOption_qry ?>'><i
                                                    class="icon-arrow-right"></i></a></li>
                                    <?php
                                }

                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/subscribe_area.php' ?>
    <?php include 'include/footer.php' ?>
    <?php include 'include/modal.php' ?>
</div>

<!-- All JS is here
============================================ -->
<?php include 'include/js.php' ?>
<script>
    $('#limit').change(function () {
        window.location.href = "authors.php?<?php echo $qry.$selectedOption_qry . '&lim='?>" + $(this).val();
    });
    $('#filter').change(function () {
        window.location.href = "authors.php?<?php echo $qry .$limit_qry. '&filter='?>" + $(this).val();
    });
</script>

</body>

</html>
