<!doctype html>
<html class="no-js" lang="en">
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
    <title>Norda - Minimal eCommerce HTML Template</title>
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

    <?php
    $aid = $_GET['aid'];
    $sql = "SELECT * from `author` where id='$aid'";
    $run_sql = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($run_sql);
    $id = $row['id'];
    $name = $row['name'];
    $descript = $row['descript'];
    $img = $row['img'];
    ?>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Author Details</li>
                    <li class="active"><?php echo $name ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-details-area pt-120 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 offset-1">
                    <div class="product-details-tab">
                        <div class="pro-dec-big-img-slider">
                            <img src="admin/img/author/<?php echo $img; ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="product-details-content pro-details-content-mrg">
                        <h1><?php echo $name ?></h1>
                        <p><?php echo $descript ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="related-product pb-115">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <h2><?php echo $name ?>විසින් රචිත කෘති</h2>
            </div>
            <div id="test">

            </div>
        </div>
    </div>

    <?php include 'include/subscribe_area.php' ?>

    <?php include 'include/modal.php' ?>

    <?php include 'include/footer.php' ?>

</div>

<!-- All JS is here
============================================ -->

<?php include 'include/js.php' ?>
<script type="text/javascript">

    $(document).ready(function () {
        let aid = '<?php echo $aid; ?>';
        function loadData(page) {
            $.ajax({
                url: "pagination/author_paginate_detail.php",
                type: "POST",
                cache: false,
                data: {page_no: page, aid: aid},
                success: function (response) {
                    $("#test").html(response);
                }
            });
        }
        loadData();
        // Pagination code
        $(document).on("click", ".pgg", function (e) {
            e.preventDefault();
            let pageId=$(this).attr('href').split("&page_no=")[1].split("&")[0];
            loadData(pageId);
        });
    });
</script>

</body>

</html>
