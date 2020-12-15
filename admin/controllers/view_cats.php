<?php
// Database connection info
include 'db_details.php';

// DB table to use
//$table = 'category';
$table = <<<EOT
 (
SELECT * FROM `categories` WHERE is_Active='1'
) temp
EOT;

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'id', 'dt' => 0),
    array('db' => 'name', 'dt' => 1),
);

// Include SQL query processing class
require '../Datatable/ssp.class.php';

//$whereResult = "isActive ='1'";
// Output data as json format
echo json_encode(
//    SSP::complex($_GET, $dbDetails, $table, $primaryKey, $columns ,$whereResult, null)
    SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
