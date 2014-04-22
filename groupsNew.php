<?php

$user = $_GET['user'];
$friend = $_GET['friend'];

include_once 'config.php';

$query = "SELECT * FROM groups WHERE 1=1 ORDER BY id DESC";

	$result = mysql_query($query) or die(mysql_error($con));
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$stack = array();

	while ($row = mysql_fetch_row($result)) {
		
		$data = array("id" => $row[0], "name" => urlencode($row[1]), "thumbnail" => $row[2], "tagString" => $row[5]);
		
		array_push($stack, $data);

		mysql_query($query);
	}
	
	$json = urldecode(json_encode($stack));
		 
	echo $json;
	//header("Location: index2.php");

// }
?>