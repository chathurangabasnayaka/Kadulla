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
    <title>Home - Kadulla Book Publishers</title>
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

    <?php include 'include/header.php' ?>

    <!-- mobile header start -->
    <?php include 'include/mobile_header.php' ?>

    <?php include 'include/slider.php' ?>

    <?php include 'include/service.php' ?>

    <?php include 'include/banner.php' ?>

    <?php include 'include/best_seller.php' ?>

    <?php include 'include/daily_recommend.php' ?>

    <!--    --><?php //include 'include/recommended.php' ?>

    <?php include 'include/seller_picks.php' ?>

    <?php include 'include/latest.php' ?>

    <?php include 'include/brands.php' ?>

    <?php include 'include/subscribe_area.php' ?>

    <?php include 'include/modal.php' ?>

    <?php include 'include/footer.php' ?>


</div>

<!-- All JS is here
============================================ -->
<?php include 'include/js.php' ?>

<script type="text/javascript">
    $('.bookViewBtn').click(function (e) {
        e.preventDefault();
        let bookId = this.id;
        let dataString = 'bookId=' + bookId + '&seller_picks=' + 'seller_picks';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/book_search.php',
            success: function (response) {
                let data = JSON.parse(response);
                $("div#title h2").html(data.name);
                $('#bookDetails').text(data.discription);
                $('.new-price').html('Rs.' + data.latest_price);
                $('.old-price').html('Rs.' + data.price);
                $("#cats").html('<span>Categories:</span>' + data.cat);
                $("#img1").attr("src", 'admin/img/book/' + data.img1);
                $("#img2").attr("src", 'admin/img/book/' + data.img2);
                $("#img3").attr("src", 'admin/img/book/' + data.img3);
                $("#img4").attr("src", 'admin/img/book/' + data.img4);

                $("#q_img1").attr("src", 'admin/img/book/' + data.img1);
                $("#q_img2").attr("src", 'admin/img/book/' + data.img2);
                $("#q_img3").attr("src", 'admin/img/book/' + data.img3);
                $("#q_img4").attr("src", 'admin/img/book/' + data.img4);

                $('#exampleModal').modal('show');

            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    ////check login button account
    $("#login_check").click(function (event) {
        //let aid = '<?php //echo $_SESSION["user"]; ?>//';
        let aid = '<?php echo $user?>';
        if (aid != null) {
            window.location.href = "login-register.php";
        }else {
            window.location.href = "my-account.php";
        }
        event.preventDefault();
    });
    ////check login button account

    // $('.basket_btn').click(function (e) {
    //     let val = $(this).val();
    //     alert(val);
    // });

</script>

</body>

</html>
