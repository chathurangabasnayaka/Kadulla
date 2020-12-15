<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];
    $uploadDir = '../img/publisher/';
    $date = date("mdYHis");

    if (isset($check)) {

        if ($check == "insert") {

            $name = mysqli_real_escape_string($con, $_POST["pubName"]);
            $des = mysqli_real_escape_string($con, $_POST["pubDes"]);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $image = $date . '.' . pathinfo($_FILES['pubImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['pubImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT name FROM publisher WHERE name = '$name'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                echo '3';
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "INSERT INTO publisher (name,description,img) VALUES ('$name','$des','$image')";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }

        if ($check == "update") {

            $id = $_POST['pubId'];
            $name = mysqli_real_escape_string($con, $_POST["pubName"]);
            $des = mysqli_real_escape_string($con, $_POST["pubDes"]);

            $image = $date . '.' . pathinfo($_FILES['pubImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['pubImg']['tmp_name'];


            $result = mysqli_query($con, "SELECT name FROM publisher WHERE name = '$name' AND id !='$id' ");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                echo '3';
                return;
            } elseif (file_exists($uploadDir . $_FILES['pubImg']['name'])) {
                $sql = "update publisher set name='$name',description='$des' where id='$id'";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "update publisher set name='$name',description='$des',img='$image' where id='$id'";
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
            $sql = "update publisher set is_Active='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


