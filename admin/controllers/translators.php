<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];
    $uploadDir = '../img/translator/';
    $date = date("mdYHis");

    if (isset($check)) {
        if ($check == "insert") {
            $name = mysqli_real_escape_string($con, $_POST["TranslatorName"]);
            $des = mysqli_real_escape_string($con, $_POST["TranslatorDes"]);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $image = $date . '.' . pathinfo($_FILES['TranslatorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['TranslatorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT name FROM book_translator WHERE name = '$name'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1 || file_exists($uploadDir . $_FILES['TranslatorImg']['name'])) {
                echo '3';
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "INSERT INTO `book_translator` (`name`, `img`,`descript`) VALUES  ('$name', '$image','$des');";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }
        if ($check == "update") {
            $id = $_POST['TranslatorId'];
            $name = $_POST['TranslatorName'];
            $des = $_POST['TranslatorDes'];

            $image = $date . '.' . pathinfo($_FILES['TranslatorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['TranslatorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT name FROM book_translator WHERE name = '$name' AND id !='$id' ");
            $row_count = mysqli_affected_rows($con);

            if ($row_count > 0) {
                echo '3';
                return;
            } else if (file_exists($uploadDir . $_FILES['TranslatorImg']['name'])) {
                $sql = "update book_translator set name='$name',descript='$des' where id='$id'";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "update book_translator set name='$name',img='$image',descript='$des' where id='$id'";
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
            $sql = "update book_translator set is_Active='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


