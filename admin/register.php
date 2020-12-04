<?php
session_start();
//Database Configuration File
require_once("includes/config.php");
$msg=''; //paragraph msg print
if (isset($_POST['register'])) {
    $uName = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rePass = $_POST['repass'];

    if ($rePass != $pass) {
        $msg = 'Password Does Not Matched..!';
    } else {
        $options = array("cost" => 4);
        $hashPassword = password_hash($rePass, PASSWORD_BCRYPT, $options);

        $sql = "insert into `user` (username,email, password) value('". $uName ."', '". $email ."','". $hashPassword ."')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Registration successfully";
            echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
        }
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'includes/cssFiles.php' ?>

</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="#" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="name" placeholder="User name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="repass" class="form-control" placeholder="Retype password">
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
                        <button name="register" type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p id="msg" style="color: red"><?php echo $msg; ?></p>
            </div>

            <a href="login.php" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php include 'includes/jsFiles.php' ?>

</body>
</html>
