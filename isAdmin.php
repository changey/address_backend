<?php

ob_start();
include_once 'config.php';

$groupId = $_GET['groupId'];
$userId = $_GET['userId'];
// Encrypted Password

$query = "SELECT * FROM admin
WHERE groupId='$groupId' AND userId='$userId'";
$result = mysql_query($query) or die(mysql_error($con));
if (mysql_num_rows(mysql_query($query)) == 0) {
	echo 0;
} else {
	echo 1;
}

mysql_close($con);
ob_end_flush();
?>