<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];

    if (isset($check)) {

        if ($check == "insert") {
            $name = mysqli_real_escape_string($con, $_POST["name"]);

            $result = mysqli_query($con, "SELECT name FROM blog_categories WHERE name = '$name'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                echo '3';
            } else {
                $sql = "INSERT INTO blog_categories (name) VALUES ('$name')";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }

        if ($check == "update") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = mysqli_query($con, "SELECT name FROM blog_categories WHERE name = '$name' AND id !='$id' ");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                echo '3';
            } else {
                $sql = "update blog_categories set name='$name' where id='$id'";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }

        if ($check == "delete") {
            $cid = $_POST['cid'];
            $sql = "update blog_categories set is_Active='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


