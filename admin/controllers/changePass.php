<?php
session_start();
include('../includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:login.php');
} else {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Current Password hashing
        $password = $_POST['pass'];
        $options = array("cost" => 4);
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);
        $adminId = $_SESSION['login'];
        // new password hashing
        $newPassword = $_POST['newpass'];
        $newHashedPass = password_hash($newPassword, PASSWORD_BCRYPT, $options);

        $sql = mysqli_query($con, "SELECT pass FROM  tbluser where uname='$adminId'");
        $num = mysqli_fetch_array($sql);
        if ($num > 0) {
            $dbPassword = $num['pass'];
            if (password_verify($password, $dbPassword)) {
                $con = mysqli_query($con, "update tbluser set pass='$newHashedPass' where uname='$adminId'");
                echo "1";
            }else{
                echo "2";
            }
        }
    }
}

