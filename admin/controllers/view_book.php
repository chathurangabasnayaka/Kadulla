<?php
// Database connection info

include 'db_details.php';

// DB table to use
$table = 'book';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'name', 'dt' => 1),
    array('db' => 'discription', 'dt' => 2),
    array('db' => 'weight', 'dt' => 3),
    array('db' => 'price', 'dt' => 4),
    array('db' => 'latest_price', 'dt' => 5),
    array('db' => 'available_qty', 'dt' => 6),
    array('db' => 'author_id', 'dt' => 7),
    array('db' => 'publisher_id', 'dt' => 8),
    array('db' => 'category_id', 'dt' => 9),
    array('db' => 'type_id', 'dt' => 10),
    array('db' => 'isbn_no', 'dt' => 11)
);

// Include SQL query processing class
require '../Datatable/ssp.class.php';

$whereResult = "is_Active ='1'";
// Output data as json format
echo json_encode(
    SSP::complex($_GET, $dbDetails, $table, $primaryKey, $columns ,$whereResult, null)
);
