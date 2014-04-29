<?php

$groupId = $_GET['groupId'];
$groupName = $_GET['groupName'];
$groupIntro =$_GET['groupIntro'];

$target_path="";

include_once 'config.php';


//if (isset($_FILES['image']) && $_FILES['image']['size'] <= 0) {
    $query = "UPDATE groups
          SET name = '$groupName', intro = '$groupIntro'
          WHERE id = '$groupId'";
    mysql_query($query) or die(mysql_error($con));
    echo 'successfully update the group info';
//}

//else {
//if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
//	if (is_uploaded_file($_FILES['image']['tmp_name'])) {
//		// Temporary file name stored on the server
//		$tmpName = $_FILES['image']['tmp_name'];
//		$imgData = file_get_contents($_FILES['image']['tmp_name']);
//		$size = getimagesize($_FILES['image']['tmp_name']);
//		//echo $imgData;
//
//		// Read the file
//		$fp = fopen($tmpName, 'r');
//		$data = fread($fp, filesize($tmpName));
//		$data = addslashes($data);
//		fclose($fp);
//		
//		$query = "SELECT * FROM tbl_images";
//		$file_number=mysql_num_rows(mysql_query($query))+1;
//		//echo mysql_num_rows(mysql_query($query))+1;
//		
//
//		// Create the query and insert
//		// into our database.
//		
//		$query = "INSERT INTO tbl_images ";
//		$query .= "(url) VALUES ('http://54.200.250.29/startup/uploads/$file_number.jpg')";
//		$results = mysql_query($query, $con);
//
//		// Print results
//		print "Thank you, your file has been uploaded.";
//	} else {
//		print "No image selected/uploaded";
//	}
//	
//	$myparam = $_POST['image'];     //getting image Here
//    $mytextLabel= $_POST['filenames'];   //getting textLabe Here
//
//	$target_path = "uploads/";
//
//	//$target_path = $target_path . basename($_FILES['image']['name']);
//	$target_path = $target_path .  $file_number . '.jpg';
//	//echo $target_path;
//
//	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
//		//echo "The file " . basename($_FILES['image']['name']) . " has been uploaded";
//		
//		//echo $groupName;
//		$query = "SELECT * FROM groups";
//		$number = mysql_num_rows (mysql_query($query));
//		
//		$query = "INSERT INTO groups (name, intro, thumbnail, tagString) VALUES ('$groupName', '$groupIntro', '$target_path', '$tagString')";
//		mysql_query($query) or die(mysql_error($con));
//		
//		$number += 1;
//	
//	    echo $number;
//		//echo "\ngroup created successfully";
//		//echo "http://107.22.99.26/startup/uploads/$file_number.jpg";
//		
//	} else {
//		echo 0;
//	}
//
//}

?>