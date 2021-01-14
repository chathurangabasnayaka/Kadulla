<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $check = $_POST['check'];
    $uploadDir = '../img/book/';
    $date = date("mdYHis");

    if (isset($check)) {
        if ($check == "insert") {

            $bookName = mysqli_real_escape_string($con, $_POST["bookName"]);
            $BookDes = mysqli_real_escape_string($con, $_POST["BookDes"]);
            $book_weight = mysqli_real_escape_string($con, $_POST["book_weight"]);
            $book_price = mysqli_real_escape_string($con, $_POST["book_price"]);
            $book_latest_price = mysqli_real_escape_string($con, $_POST["book_latest_price"]);
            $book_qty = mysqli_real_escape_string($con, $_POST["book_qty"]);
            $book_isbn = mysqli_real_escape_string($con, $_POST["book_isbn"]);
            $book_page = mysqli_real_escape_string($con, $_POST["book_page"]);
            $select_author = mysqli_real_escape_string($con, $_POST["select_author"]);
            $select_translator = mysqli_real_escape_string($con, $_POST["select_translator"]);
            $select_type = mysqli_real_escape_string($con, $_POST["select_type"]);
            $select_publisher = mysqli_real_escape_string($con, $_POST["select_publisher"]);
            $select_category = mysqli_real_escape_string($con, $_POST["cats"]);
            $best_seller = mysqli_real_escape_string($con, $_POST["best_seller"]);
            $seller_picks = mysqli_real_escape_string($con, $_POST["seller_picks"]);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $result = mysqli_query($con, "SELECT name FROM book WHERE isbn_no = '$book_isbn'");
            $row_count = mysqli_num_rows($result);
            if ($row_count == 1) {
                echo '3';
            } else {

                $sql = "INSERT INTO `book` (`name`, `discription`,`weight`,`price`,`latest_price`,`available_qty`,
	`author_id`,`publisher_id`,`type_id`,`trans_id`,`isbn_no`,`page`,`best_seller` ,`seller_picks`)
	VALUES  ('$bookName', '$BookDes','$book_weight','$book_price','$book_latest_price','$book_qty',
	         '$select_author','$select_publisher','$select_type','$select_translator','$book_isbn','$book_page','$best_seller','$seller_picks')";
                $insert = mysqli_query($con, $sql);

                if ($insert) {
                    $last_id = $con->insert_id;

                    $cats = explode(",", $select_category);

                    foreach ($cats as $cat) {
                        $sql = "insert into `book_has_cats` (`book_id`,`cats_id`) values  ('$last_id','$cat')";
                        mysqli_query($con, $sql);
                    }
                    if (isset($_FILES['img1'])) {
                        $image_tmp1 = $_FILES['img1']['tmp_name'];
                        move_uploaded_file($image_tmp1, "$uploadDir" . $last_id . "_1.jpg");
                        $url = $last_id . "_1.jpg";
                        $sql = "update `book` set img1='$url' where id='$last_id'";
                        mysqli_query($con, $sql);
                    }

                    if (isset($_FILES['img2'])) {
                        $image_tmp2 = $_FILES['img2']['tmp_name'];
                        move_uploaded_file($image_tmp2, "$uploadDir" . $last_id . "_2.jpg");
                        $url = $last_id . "_2.jpg";
                        $sql = "update `book` set img2='$url' where id='$last_id'";
                        mysqli_query($con, $sql);
                    }
                    if (isset($_FILES['img3'])) {
                        $image_tmp3 = $_FILES['img3']['tmp_name'];
                        move_uploaded_file($image_tmp3, "$uploadDir" . $last_id . "_3.jpg");
                        $url = $last_id . "_3.jpg";
                        $sql = "update `book` set img3='$url' where id='$last_id'";
                        mysqli_query($con, $sql);
                    }
                    if (isset($_FILES['img4'])) {
                        $image_tmp4 = $_FILES['img4']['tmp_name'];
                        move_uploaded_file($image_tmp4, "$uploadDir" . $last_id . "_4.jpg");
                        $url = $last_id . "_4.jpg";
                        $sql = "update `book` set img4='$url' where id='$last_id'";
                        mysqli_query($con, $sql);
                    }
                    echo '1';
                } else {
                    echo "2";
                }
            }
        }

        if ($check == "update") {

            $bookId = mysqli_real_escape_string($con, $_POST["BookId"]);
            $bookName = mysqli_real_escape_string($con, $_POST["bookName"]);
            $BookDes = mysqli_real_escape_string($con, $_POST["BookDes"]);
            $book_weight = mysqli_real_escape_string($con, $_POST["book_weight"]);
            $book_price = mysqli_real_escape_string($con, $_POST["book_price"]);
            $book_latest_price = mysqli_real_escape_string($con, $_POST["book_latest_price"]);
            $book_qty = mysqli_real_escape_string($con, $_POST["book_qty"]);
            $book_isbn = mysqli_real_escape_string($con, $_POST["book_isbn"]);
            $book_page = mysqli_real_escape_string($con, $_POST["book_page"]);
            $select_author = mysqli_real_escape_string($con, $_POST["select_author"]);
            $select_translator = mysqli_real_escape_string($con, $_POST["select_translator"]);
            $select_type = mysqli_real_escape_string($con, $_POST["select_type"]);
            $select_publisher = mysqli_real_escape_string($con, $_POST["select_publisher"]);
            $select_category = mysqli_real_escape_string($con, $_POST["cats"]);
            $best_seller = mysqli_real_escape_string($con, $_POST["best_seller"]);
            $seller_picks = mysqli_real_escape_string($con, $_POST["seller_picks"]);

            $result = mysqli_query($con, "SELECT name FROM book WHERE isbn_no = '$book_isbn' AND id !='$bookId'");
            $row_count = mysqli_num_rows($result);

            if ($row_count > 0) {
                echo '3';
                return;
            } else {
                $sql = "update  `book` set `name` = '$bookName',  `discription` = '$BookDes',
                   `weight` = '$book_weight',  `price` = '$book_price',  `latest_price` = '$book_latest_price',
                   `available_qty` = '$book_qty',  `author_id` = '$select_author',
                   `publisher_id` = '$select_publisher',  `type_id` = '$select_type',
                   `trans_id` = '$select_translator',  `isbn_no` = '$book_isbn', 
                   `page` = '$book_page',`best_seller`='$best_seller',`seller_picks`='$seller_picks' where `id` = '$bookId'";
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
            $sql = "update `book` set is_Active='0' where id='$cid'";
            $insert = mysqli_query($con, $sql);
            if ($insert) {
                echo '1';
            } else {
                echo "2";
            }
        }
    }

}


