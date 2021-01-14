<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'1234');
define('DB_NAME','book_store');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset($con, 'utf8');
// Change character set to utf8
//$con -> set_charset("utf8");

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

