<?php
// Database connection info

include 'db_details.php';

// DB table to use
$table = <<<EOT
 (
SELECT *,(SELECT GROUP_CONCAT(`cats_id`) FROM `book_has_cats` WHERE `book_id`=b.`id`) AS cat FROM `book` b WHERE b.`is_Active`='1'
) temp
EOT;

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'isbn_no', 'dt' => 1),
    array('db' => 'name', 'dt' => 2),
    array('db' => 'discription', 'dt' => 3),
    array('db' => 'added_time', 'dt' => 4),
    array('db' => 'latest_price', 'dt' => 5),
    array('db' => 'available_qty', 'dt' => 6),
    array('db' => 'author_id', 'dt' => 7),
    array('db' => 'publisher_id', 'dt' => 8),
    array('db' => 'type_id', 'dt' => 9),
    array('db' => 'weight', 'dt' => 10),
    array('db' => 'img1', 'dt' => 11),
    array('db' => 'img2', 'dt' => 12),
    array('db' => 'img3', 'dt' => 13),
    array('db' => 'img4', 'dt' => 14),
    array('db' => 'trans_id', 'dt' => 15),
    array('db' => 'page', 'dt' => 16),
    array('db' => 'price', 'dt' => 17),
    array('db' => 'cat', 'dt' => 18),
    array('db' => 'best_seller', 'dt' => 19),
    array('db' => 'seller_picks', 'dt' => 20)
);

// Include SQL query processing class
require '../Datatable/ssp.class.php';

$db = SSP::db($dbDetails);
$db->exec("set names utf8");

//$whereResult = "is_Active ='1'";
// Output data as json format
echo json_encode(
    SSP::simple($_GET, $db, $table, $primaryKey, $columns)
);
