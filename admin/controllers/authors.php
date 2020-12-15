<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];
    $uploadDir = '../img/author/';
    $date = date("mdYHis");

    if (isset($check)) {
        if ($check == "insert") {
            $name = mysqli_real_escape_string($con, $_POST["authorName"]);
            $des = mysqli_real_escape_string($con, $_POST["authorDes"]);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $image = $date . '.' . pathinfo($_FILES['authorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['authorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT name FROM author WHERE name = '$name'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1 || file_exists($uploadDir . $_FILES['authorImg']['name'])) {
                echo '3';
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "INSERT INTO `author` (`name`, `img`,`descript`) VALUES  ('$name', '$image','$des');";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }
        if ($check == "update") {
            $id = $_POST['AuthorId'];
            $name = $_POST['AuthorName'];
            $des = $_POST['authorDes'];

            $image = $date . '.' . pathinfo($_FILES['authorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['authorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT name FROM author WHERE name = '$name' AND id !='$id' ");
            $row_count = mysqli_affected_rows($con);

            if ($row_count > 0) {
                echo '3';
                return;
            } else if (file_exists($uploadDir . $_FILES['authorImg']['name'])) {
                $sql = "update author set name='$name',descript='$des' where id='$id'";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "update author set name='$name',img='$image',descript='$des' where id='$id'";
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
            $sql = "update author set isActive='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


