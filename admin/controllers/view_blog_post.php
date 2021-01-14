<?php
// Database connection info

include 'db_details.php';

// DB table to use
$table = 'blogs';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'title', 'dt' => 1),
    array('db' => 'descript', 'dt' => 2),
    array('db' => 'photo', 'dt' => 3),
    array('db' => 'created_at', 'dt' => 4),
    array('db' => 'category_id', 'dt' => 5)
);

// Include SQL query processing class
require '../Datatable/ssp.class.php';

$db = SSP::db($dbDetails);
$db->exec("set names utf8");

$whereResult = "is_Active ='1'";
// Output data as json format
echo json_encode(
    SSP::complex($_GET, $db, $table, $primaryKey, $columns ,$whereResult, null)
);
