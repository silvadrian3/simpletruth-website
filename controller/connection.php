<?php 
date_default_timezone_set("Asia/Manila");
//$db_host = "188.166.215.43";
//$db_user = "root";
//$db_password = "st!!tfay6712$&asd";
//$db_name = 'simple_truth_db';

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = 'simpletruth';

$con = mysql_connect($db_host, $db_user, $db_password);
	if (!$con) {
		die('Unable to connect database: ($db_host, $db_user, $db_password) ' . mysql_error());
	} else {
			$selected_db = mysql_select_db($db_name, $con);
			if (!$selected_db) { die('Unable to use the selected database ($db_name): '. mysql_error()); }
		}
?>
 