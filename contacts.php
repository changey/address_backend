<?php

$userId = $_GET['userId'];
$friend = $_GET['friend'];
$groupId = $_GET['groupId'];

include_once 'config.php';

//$query = "SELECT * FROM groups WHERE receiver='$user' ORDER BY id DESC";
$query = "SELECT * 
          FROM contacts 
          INNER JOIN favorites
          ON contacts.id = favorites.contactId
          WHERE groupId='$groupId' AND favorites.userId = '$userId' ORDER BY name";
// if (mysql_num_rows(mysql_query($query)) == 0) {
	// //$error = "That username already exists<br /><br />";
	// echo 0;
// } else {
	$result = mysql_query($query) or die(mysql_error($con));
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$stack = array();


	while ($row = mysql_fetch_row($result)) {
		//$user_id = $row[2];
		//$data = array("id" => $row[0], "sender" => $row[1], "receiver" => $row[2], "url" => $row[3], "time" => $row[4], "captions" => $row[5]);
		$data = array("id" => $row[0], "name" => urlencode($row[1]), "email" => $row[4]
		, "tel" => $row[5], "thumbnail" => $row[6], "university" => $row[7], "job" => $row[8], 
		"gender" => $row[9], "favorites" => $row[13]);
		
		array_push($stack, $data);
		//echo $user_id;
		 
		//$query = "INSERT INTO friends (user, friend_id) VALUES('$user', $friend_id)";
		mysql_query($query);
	}
	
	//$str_utf8=utf8_encode($stack);
	
	$json = urldecode(json_encode($stack));
		 
	echo $json;
	//header("Location: index2.php");

// }

// $query = "INSERT INTO friends (user, friend_id) VALUES('changey', 'heather')";
// mysql_query($query);

//make sure you're using the correct database
//mysql_select_db('devices', $db) or die(mysql_error($db));
?>