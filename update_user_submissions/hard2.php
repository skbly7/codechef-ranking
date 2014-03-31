<?php
//to add all for the first time in history.. :P
date_default_timezone_set('Asia/Kolkata');
include "../crawl2.php";
include "req.php";
ini_set('display_errors', '1');
ini_set('max_execution_time', 0);
include "../../connect.php";
$name=$_GET['name'];
mysql_query("DROP TABLE ".$name);

//Find of is the function defined to update all submission in a month...!!!
find_of($name);
?>