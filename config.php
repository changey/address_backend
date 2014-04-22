<?php

/*$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
$mysql_password = "";*/
$mysql_hostname = "127.0.0.1";
$mysql_user = "root";
//$mysql_password = "address";
//$mysql_database = "pik";
$mysql_database = "social";
$con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) 
or die("Can't connect to database");
mysql_select_db($mysql_database, $con) or die("Can't select database");

mysql_set_charset('gbk');
header("content-type:text/html; charset=gbk");

// mysql_set_charset('utf8');

?>