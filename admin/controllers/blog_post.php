<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];
    $uploadDir = '../img/blog/';
    $date = date("mdYHis");

    if (isset($check)) {
        if ($check == "insert") {
            $name = mysqli_real_escape_string($con, $_POST["postTitle"]);
            $des = mysqli_real_escape_string($con, $_POST["postDes"]);
            $cats_id = mysqli_real_escape_string($con, $_POST["select_cats"]);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $image = $date . '.' . pathinfo($_FILES['authorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['authorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT title FROM blogs WHERE title = '$name'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1 || file_exists($uploadDir . $_FILES['authorImg']['name'])) {
                echo '3';
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "insert into `blogs` (`category_id`,`title`,`descript`,`photo`) values  ('$cats_id','$name','$des','$image');";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo $sql;
                }
            }
        }
        if ($check == "update") {
            $id = $_POST['BlogPostId'];
            $name = mysqli_real_escape_string($con, $_POST["postTitle"]);
            $des = mysqli_real_escape_string($con, $_POST["postDes"]);
            $cats_id = mysqli_real_escape_string($con, $_POST["select_cats"]);

            $image = $date . '.' . pathinfo($_FILES['authorImg']['name'], PATHINFO_EXTENSION);
            $image_tmp = $_FILES['authorImg']['tmp_name'];

            $result = mysqli_query($con, "SELECT title FROM blogs WHERE title = '$name' AND id !='$id' ");
            $row_count = mysqli_affected_rows($con);

            if ($row_count > 0) {
                echo '3';
                return;
            } else if (file_exists($uploadDir . $_FILES['authorImg']['name'])) {
                $sql = "update blogs set title='$name',descript='$des',category_id='$cats_id' where id='$id'";
                $insert = mysqli_query($con, $sql);
                if ($insert) {
                    echo '1';
                } else {
                    echo "2";
                }
            } else {
                move_uploaded_file($image_tmp, "$uploadDir$image");
                $sql = "update blogs set title='$name',img='$image',descript='$des',category_id='$cats_id' where id='$id'";
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
            $sql = "update blogs set is_Active='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


