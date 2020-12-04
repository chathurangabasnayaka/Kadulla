<?php
session_start();
//Database Configuration File
require_once('includes/config.php');
$msg=''; //paragraph msg print
if (isset($_POST['login'])) {
    // Getting username/ email and password
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Fetch data from database on the basis of username/email and password
    $sql = mysqli_query($con, "SELECT username,email,password FROM `user` WHERE (username='$email' || email='$email')");
    $num = mysqli_fetch_array($sql);

    if ($num > 0) {
        $hashpassword = $num['password']; // Hashed password fething from database
        //verifying Password
        if (password_verify($password, $hashpassword)) {
//            $_SESSION['login'] = $_POST['email'];
            $_SESSION['login'] = $num['username'];
            echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        } else {
            $msg = 'Wrong Password.!';
        }
    } //if username or email not found in database
    else {
        $msg = 'User not registered with us.!';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'includes/cssFiles.php' ?>

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="index.php"><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="#" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="email" placeholder="User Name or Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p id="msg" style="color: red"><?php echo $msg; ?></p>
            </div>
            <!-- /.social-auth-links -->

<!--            <p class="mb-1">-->
<!--                <a href="forgot-password.html">I forgot my password</a>-->
<!--            </p>-->
            <p class="mb-0">
                <a href="register.php" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<?php include 'includes/jsFiles.php' ?>

</body>
</html>
