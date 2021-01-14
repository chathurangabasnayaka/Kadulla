<!doctype html>
<html class="no-js" lang="en">
<?php
include('include/db.php');
session_start();
if(isset($_SESSION["cus_name"]))
{
    header("location: my-account.php");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login / Register - Kadulla Book Publishers</title>
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
    <header class="header-area">
        <div class="container">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-1 border-bottom-1">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="header-offer-wrap text-right">
                                <p><i class="icon-paper-plane"></i> FREE SHIPPING world wide for all orders over <span>$199</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="header-top-right">
                                <div class="social-style-1 social-style-1-mrg">
                                    <a href="#"><i class="icon-social-twitter"></i></a>
                                    <a href="#"><i class="icon-social-facebook"></i></a>
                                    <a href="#"><i class="icon-social-instagram"></i></a>
                                    <a href="#"><i class="icon-social-youtube"></i></a>
                                    <a href="#"><i class="icon-social-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7">
                            <div class="main-menu main-menu-padding-1 main-menu-lh-1">
                                <nav>
                                    <ul>
                                        <?php include_once 'include/header_link.php' ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="header-action header-action-flex header-action-mrg-right">
                                <div class="same-style-2 header-search-1">
                                    <a class="search-toggle" href="#">
                                        <i class="icon-magnifier s-open"></i>
                                        <i class="icon_close s-close"></i>
                                    </a>
                                    <div class="search-wrap-1">
                                        <form action="#">
                                            <input placeholder="Search products…" type="text">
                                            <button class="button-search"><i class="icon-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="same-style-2">
                                    <a href="wishlist.html"><i class="icon-user"></i></a>
                                </div>
<!--                                <div class="same-style-2">-->
<!--                                    <a href="login-register.php"><i class="icon-heart"></i><span class="pro-count red">03</span></a>-->
<!--                                </div>-->
                                <div class="same-style-2 header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-small-device small-device-ptb-1">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="mobile-logo">
                            <a href="index.html">
                                <img alt="" src="assets/images/logo/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="header-action header-action-flex">
                            <div class="same-style-2">
                                <a href="login-register.php"><i class="icon-user"></i></a>
                            </div>
                            <div class="same-style-2">
                                <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                            </div>
                            <div class="same-style-2 header-cart">
                                <a class="cart-active" href="#">
                                    <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                </a>
                            </div>
                            <div class="same-style-2 main-menu-icon">
                                <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile menu start -->
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="clickalbe-sidebar-wrap">
            <a class="sidebar-close"><i class="icon_close"></i></a>
            <div class="mobile-header-content-area">
                <div class="header-offer-wrap mobile-header-padding-border-4">
                    <p><i class="icon-paper-plane"></i> FREE SHIPPING world wide for all orders over <span>$199</span>
                    </p>
                </div>
                <div class="mobile-search mobile-header-padding-border-1">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search here…">
                        <button class="button-search"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-padding-border-2">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="index.php">HOME </a></li>
                            <li><a href="authors.php">AUTHORS </a></li>
                            <li><a href="Publishers.php">PUBLISHERS </a></li>
                            <li><a href="blog.php">BLOG </a></li>
                            <li><a href="contact.php">CONTACT </a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-contact-info mobile-header-padding-border-4">
                    <ul>
                        <li><i class="icon-phone "></i> (+612) 2531 5600</li>
                        <li><i class="icon-envelope-open "></i> norda@domain.com</li>
                        <li><i class="icon-home"></i> PO Box 1622 Colins Street West Australia</li>
                    </ul>
                </div>
                <div class="mobile-social-icon">
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mini cart start -->
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class="icon_close"></i></a>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <ul>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Simple Black T-Shirt</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Norda Backpack</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-checkout-btn">
                    <a class="btn-hover cart-btn-style" href="cart.php">view cart</a>
                    <a class="no-mrg btn-hover cart-btn-style" href="checkout.php">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">login - register</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form class='signin' method="post">
                                            <div class="form-group">
                                                <small id="unameHelp" style="display: none;"
                                                       class="text-danger text-right form-text">User name
                                                    is required</small>
                                                <input class="form-control" type="text" name="user-name"
                                                       placeholder="Username or Email">
                                            </div>
                                            <div class="form-group">
                                                <small id="upassHelp" style="display: none;"
                                                       class="text-danger text-right form-text">Password
                                                    is required</small>
                                                <input class="form-control" type="password" name="user-password"
                                                       placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <a href="#">Forgot Password?</a>
                                                        <input name="rem_me" type="checkbox">
                                                        <label>Remember me</label>
                                                    </div>
                                                    <small id="allHelp" style="display: none;"
                                                           class="text-danger text-right form-text">Please Fill all
                                                        Field !!</small>
                                                    <button class="text-center" type="submit">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form class="signup" method="post">

                                            <div class="form-group">
                                                <small id="unameHelp" style="display: none;"
                                                       class="text-danger text-right form-text">User name
                                                    is required</small>
                                                <input class="form-control" type="text" name="uname"
                                                       placeholder="Choose a User Name">
                                            </div>

                                            <div class="form-group">
                                                <small id="upassHelp" style="display: none;"
                                                       class="text-danger text-right form-text">Password
                                                    is required</small>
                                                <input class="form-control" type="password" name="upass"
                                                       placeholder="Password">
                                            </div>


                                            <div class="form-group">
                                                <small id="emailHelp" style="display: none;"
                                                       class="text-danger text-right form-text">A valid email
                                                    address is required</small>
                                                <input class="form-control" name="user-email" placeholder="Email"
                                                       type="email">
                                            </div>

                                            <div class="form-group">
                                                <small id="fnameHelp" style="display: none;"
                                                       class="text-danger text-right form-text">First Name
                                                    is required</small>
                                                <input class="form-control" type="text" name="fname"
                                                       placeholder="First Name">
                                            </div>

                                            <div class="form-group">
                                                <small id="lnameHelp" style="display: none;"
                                                       class="text-danger text-right form-text">Last Name
                                                    is required</small>
                                                <input class="form-control" type="text" name="lname"
                                                       placeholder="Last Name">
                                            </div>

                                            <div class="form-group">
                                                <small id="streetHelp" style="display: none;"
                                                       class="text-danger text-right form-text">Street
                                                    is required</small>
                                                <input class="form-control" type="text" name="street"
                                                       placeholder="Street">
                                            </div>

                                            <div class="form-group">
                                                <small id="address1Help" style="display: none;"
                                                       class="text-danger text-right form-text">Address 1
                                                    is required</small>
                                                <input class="form-control" type="text" name="address1"
                                                       placeholder="Address 1">
                                            </div>


                                            <div class="form-group">
                                                <small id="address2Help" style="display: none;"
                                                       class="text-danger text-right form-text">Address 2
                                                    is required</small>
                                                <input class="form-control" type="text" name="address2"
                                                       placeholder="Address 2">
                                            </div>

                                            <div class="form-group">
                                                <small id="countryHelp" style="display: none;"
                                                       class="text-danger text-right form-text">Country
                                                    is required</small>
                                                <div style="padding-bottom: 20px;">
                                                    <select name="country" class="form-control">
                                                        <option value="0" disabled="disabled" selected="selected">Select
                                                            Country
                                                        </option>
                                                        <?php
                                                        $sql = "select * from `countries` where `is_Active`='1'";
                                                        $execute = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_array($execute)) {
                                                            $name = $row['name'];
                                                            $id = $row['id'];
                                                            echo "<option value='$id'>$name</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="country">Your Main Interests</label>
                                                <br>

                                                <?php
                                                $sql = "SELECT * FROM `categories` where is_Active='1'";

                                                $execute = mysqli_query($con, $sql);
                                                $count = 0;
                                                while ($row = mysqli_fetch_array($execute)) {
                                                    $name = $row['name'];
                                                    $id = $row['id'];
                                                    echo " <input type='checkbox' name='$id' value='$id'>";
                                                    echo " <label for='$id'> $name</label>";
                                                    if ($count == 4) {
                                                        echo "<br>";
                                                        $count = 0;
                                                    } else {
                                                        $count++;
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="form-group">
                                                <div class="text-center button-box">
                                                    <small id="allHelp" style="display: none;"
                                                           class="text-danger text-right form-text">Please Fill all
                                                        Field !!</small>
                                                    <button type="submit">Register</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/subscribe_area.php' ?>

    <?php include 'include/footer.php' ?>

    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center"><strong></strong></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center" style="font-size: 20px;" id="userModalBody">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

</div>

<!-- All JS is here
============================================ -->
<?php include 'include/js.php' ?>

<script>
    $('.signup').on('submit', function (e) {
        e.preventDefault();
        let checks = [];
        $(':checkbox:checked').each(function (i) {
            checks[i] = $(this).val();
        });

        let uname = $('[name ="uname"]').val();
        let pass = $('[name ="upass"]').val();
        let email = $('[name ="user-email"]').val();
        let fname = $('[name ="fname"]').val();
        let lname = $('[name ="lname"]').val();
        let street = $('[name ="street"]').val();
        let address1 = $('[name ="address1"]').val();
        let address2 = $('[name ="address2"]').val();
        let country = $('[name ="country"]').val();

        if (uname.length == 0) {
            $('#unameHelp').show();
        } else {
            $('#unameHelp').hide();
        }

        if (pass.length == 0 || pass == "") {
            $('#upassHelp').show();
        } else {
            $('#upassHelp').hide();
        }

        if (email.length == 0) {
            $('#emailHelp').show();
        } else {
            $('#emailHelp').hide();
        }

        if (fname.length == 0 || fname == "") {
            $('#fnameHelp').show();
        } else {
            $('#fnameHelp').hide();
        }

        if (lname.length == 0) {
            $('#lnameHelp').show();
        } else {
            $('#lnameHelp').hide();
        }

        if (street.length == 0) {
            $('#streetHelp').show();
        } else {
            $('#streetHelp').hide();
        }

        if (address1.length == 0) {
            $('#address1Help').show();
        } else {
            $('#address1Help').hide();
        }

        if (address2.length == 0) {
            $('#address2Help').show();
        } else {
            $('#address2Help').hide();
        }

        if ($('[name ="country"]').val() == null) {
            $('#countryHelp').show();
        } else {
            $('#countryHelp').hide();
        }

        $('[name ="uname"]').keyup(function () {
            if (uname == 0) {
                $('#unameHelp').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="upass"]').keyup(function () {
            if (uname == 0) {
                $('#upassHelp').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="fname"]').keyup(function () {
            if (uname == 0) {
                $('#fnameHelp').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="lname"]').keyup(function () {
            if (uname == 0) {
                $('#lnameHelp').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="street"]').keyup(function () {
            if (uname == 0) {
                $('#streetHelp').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="address1"]').keyup(function () {
            if (uname == 0) {
                $('#address1Help').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="address2"]').keyup(function () {
            if (uname == 0) {
                $('#address2Help').hide();
                $('#allHelp').hide();
            }
        });

        $('[name ="country"]').bind("change keyup", function (event) {
            $('#countryHelp').hide();
            $('#allHelp').hide();
        });

        if ($('[name ="country"]').val() == null || uname == "" || pass == "" || email == "" || fname == "" || lname == "" || street == "" || address1 == "" || address2 == "") {
            $('#allHelp').show();
            return;
        } else {
            $('#allHelp').hide();

            let formData = new FormData(this);
            formData.append('cats', checks);
            formData.append('contry', country);

            $.ajax({
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/signup.php',
                success: function (data) {
                    if (data == 1) {
                        $('#userModal').modal('show');
                        $('h3.modal-title.text-center').addClass('text-success');
                        $('#userModalBody').addClass('text-success').html(uname + ', Your Account has been successfully Created !');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        $('#userModal').modal('show');
                        $('h3.modal-title.text-center').addClass('text-warning').find("strong").html('Warning !!');
                        $('#userModalBody').addClass('text-danger').html(email + ', already exists');
                    } else {
                        $('#userModal').modal('show');
                        $('h3.modal-title.text-center').addClass('text-danger');
                        $('#userModalBody').addClass('text-danger').html('Try Again..!!');
                    }

                }
            });

        }
    });

    $('.signin').on('submit', function (e) {
        e.preventDefault();
        let pass = $('[name ="user-password"]').val();
        let name = $('[name ="user-name"]').val();
        let check = '';

        if ($('[name = "rem_me"]').is(":checked")) {
            check = 'check';
        }

        if (name.length == 0) {
            $('#unameHelp').show();
        } else {
            $('#unameHelp').hide();
        }

        if (pass.length == 0) {
            $('#upassHelp').show();
        } else {
            $('#upassHelp').hide();
        }

        $('[name ="user-name"]').bind("change keyup", function (event) {
            $('#unameHelp').hide();
            $('#allHelp').hide();
        });

        $('[name ="user-password"]').bind("change keyup", function (event) {
            $('#upassHelp').hide();
            $('#allHelp').hide();
        });


        if (name.length == 0 || pass.length == 0) {
            $('#allHelp').show();
            return;
        } else {

            let formData = new FormData(this);
            formData.append('check', check);

            $.ajax({
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/signin.php',
                success: function (data) {
                    if (data == 'success') {
                        window.location.href = "index.php";//<- your url here
                    }
                    if(data == 'w-pass'){
                        // $('#allHelp').val('');
                        $('#allHelp').html("Incorrect data..!");
                        $('#allHelp').show();
                    }
                }
            });

        }


    });

    $('[name ="user-email"]').keyup(function () {
        let email = $('[name ="user-email"]').val();
        if (email != 0) {
            if (isValidEmailAddress(email)) {
                $('#emailHelp').hide();
            } else {
                $('#emailHelp').show();
            }
        }
    });

    function isValidEmailAddress(emailAddress) {
        let pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    }
</script>


</body>

</html>
