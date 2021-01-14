<?php
session_start();
include('../include/db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uname = mysqli_real_escape_string($con, $_POST["user-name"]);
    $upass = mysqli_real_escape_string($con, $_POST["user-password"]);
    $check = mysqli_real_escape_string($con, $_POST["check"]);
//    $home_url = 'http://' . $_SERVER['HTTP_HOST'];
//    $url = dirname($home_url.'/Kadulla/abc.php').'/index.php';

    if (!empty($uname) && !empty($upass)) {
        $result = mysqli_query($con, "SELECT id,uname,email,pass FROM customer WHERE (uname='$uname' || email='$uname')");
        $user = mysqli_fetch_array($result);

        if ($user > 0) {
            $db_pass = $user['pass'];
            $db_id = $user['id'];
            $private_key = "!$//%$$//%$&=§$!&%&=§$!&%";
            if (!empty($check)) {
                if ($upass == $db_pass) {
                    setcookie("cus_login", $uname, time() + (10 * 365 * 24 * 60 * 60));
                    setcookie('cus_password', md5($upass.$private_key),time() + (10 * 365 * 24 * 60 * 60));
                    $_SESSION["cus_name"] = $uname;
                    echo 'success';
                } else {
                    echo 'w-pass';
                }

            } else {
                if ($upass == $db_pass) {
                    if (isset($_COOKIE["cus_login"])) {
                        setcookie("cus_login", '');
                    }
                    if (isset($_COOKIE["cus_password"])) {
                        setcookie("cus_password", '');
                    }
                    if (isset($_COOKIE["cus_id"])) {
                        setcookie("cus_id", '');
                    }
                    $_SESSION["cus_name"] = $uname;
                    echo 'success';
                } else {
                    echo 'w-pass';
                }
            }

        } else {
            $msg = 'non'; //User not registered with us.!
        }
    } else {
        echo "non";//User not registered with us.!
    }

}
