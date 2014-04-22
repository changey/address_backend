<?php

$user = $_GET['user'];
$friend = $_GET['friend'];
$groupId = $_GET['groupId'];

include_once 'config.php';

$query = "SELECT * 
          FROM rnmembers
          WHERE user='$user'";

	$result = mysql_query($query) or die(mysql_error($con));
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$stack = array();

	while ($row = mysql_fetch_row($result)) {
		$data = array("id" => $row[0], "name" => urlencode($row[1]), "email" => $row[4]
		, "tel" => $row[5], "thumbnail" => $row[6], "university" => $row[7], "job" => $row[8], 
		"gender" => $row[9]);
		
		array_push($stack, $data);

		mysql_query($query);
	}
	
	$json = urldecode(json_encode($stack));
		 
	echo $json;
?>