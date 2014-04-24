<?php

$user = $_GET['user'];
$friend = $_GET['friend'];

include_once 'config.php';

//$query = "SELECT * FROM groups WHERE receiver='$user' ORDER BY id DESC";
$query = "SELECT * 
          FROM applications
          INNER JOIN roles
          ON applications.groupId = roles.groupId
          WHERE roles.user = '$user' AND roles.isAdmin = 1 AND applications.shown = 1";

	$result = mysql_query($query) or die(mysql_error($con));
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$stack = array();


	while ($row = mysql_fetch_row($result)) {

        $applicantNumber = $row[2];
        $groupId = $row[1];

        $query = "SELECT * 
          FROM groups
          WHERE id = '$groupId'
          LIMIT 1";
        $groupResult = mysql_query($query) or die(mysql_error($con));
        if (!$groupResult) {
            die("Query to show fields from table failed");
        }
        $groupRow = mysql_fetch_row($groupResult);
        $groupName = $groupRow[1];
        
        $query = "SELECT * 
          FROM rnmembers
          WHERE user = '$applicantNumber'
          LIMIT 1";
        $memberResult = mysql_query($query) or die(mysql_error($con));
        if (!$memberResult) {
            die("Query to show fields from table failed");
        }
        $memberRow = mysql_fetch_row($memberResult);
        $memberName = $memberRow[3];
        $memberEmail = $memberRow[4];
        $memberTel = $memberRow[5];
        $memberThumbnail = $memberRow[6];
        $memberUniversity = $memberRow[7];
        $memberJob = $memberRow[8];
        $memberGender = $memberRow[9];
            
		$data = array("id" => $row[0], "groupId" => $row[1],"groupName" => $groupName,
            "applicantNumber" => $row[2], "shown" => $row[3], "applicantName" => $memberName,
            "applicantEmail" => $memberEmail, "applicantTel" => $memberTel, 
            "applicantThumbnail" => $memberThumbnail, "applicantUniversity" => $memberUniversity,
            "applicantJob" => $memberJob, "applicantGender" => $memberGender);
		
		array_push($stack, $data);
		
		mysql_query($query);
	}

	$json = urldecode(json_encode($stack));
		 
	echo $json;
	//header("Location: index2.php");

// }

//make sure you're using the correct database
//mysql_select_db('devices', $db) or die(mysql_error($db));
?>