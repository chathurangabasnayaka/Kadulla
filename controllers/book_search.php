<?php
include('../include/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check = $_POST['seller_picks'];
    if (isset($check)) {

        $id = mysqli_real_escape_string($con, $_POST["bookId"]);

        $sql = "SELECT b.`id`,b.`name`,b.`discription`,b.`available_qty`,b.`latest_price`,b.`price`,b.`img1`,b.`img2`,b.`img3`,b.`img4`,a.`name` AS author_name,(SELECT GROUP_CONCAT(`categories`.`name`) FROM `book_has_cats` AS bhc LEFT JOIN `categories` ON bhc.cats_id=categories.`id` WHERE bhc.book_id=b.`id` ) AS cat FROM `book` b INNER JOIN `author` a WHERE a.`id`=b.`author_id` AND b.`is_Active`='1' AND b.`id`='$id';";
        $result = mysqli_query($con,$sql);
        $num = mysqli_fetch_assoc($result);

//        $rows = array();
//        while($r = mysqli_fetch_assoc($result)) {
//            $rows[] = $r;
//        }
//        print json_encode($rows);

        $bookID = $num['id'];
        $bookName = $num['name'];
        $bookDES = $num['discription'];
        $bookQTY = $num['available_qty'];
        $bookLPrice = $num['latest_price'];
        $bookPrice = $num['price'];
        $bookImg1 = $num['img1'];
        $bookImg2 = $num['img2'];
        $bookImg3 = $num['img3'];
        $bookImg4 = $num['img4'];
        $authorName = $num['author_name'];
        $cats = $num['cat'];
        $book = (object)[
            "id" => $bookID, "name" => $bookName, "discription" => $bookDES,
            "available_qty" => $bookQTY, "latest_price" => $bookLPrice,
            "price" => $bookPrice, "img1" => $bookImg1,
            "img2" => $bookImg2, "img3" => $bookImg3,
            "img4" => $bookImg4, "author_name" => $authorName,
            "cat" => $cats];
        print json_encode($book);
    }
}
