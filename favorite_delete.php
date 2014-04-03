<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$contactId = $_GET['contactId'];
$groupId = $_GET['groupId'];
$user = $_GET['user'];
//$email = $_GET['email'];
// if ($name == "") {
	// echo 0;
	// }
// else{
// $query = "SELECT * FROM contacts WHERE user='$user'";
$query = "SELECT * FROM favorites WHERE contactId = '$contactId' AND groupId = '$groupId' AND user = '$user'";
		if (mysql_num_rows(mysql_query($query))) {
			//$error = "That username already exists<br /><br />";
			$query = "UPDATE favorites 
			          SET favorites = 0 
			          WHERE contactId = '$contactId' AND groupId = '$groupId' AND user = '$user'";
			mysql_query($query, $con) or die (mysql_error($con));
			
		} else {
			$query = "INSERT INTO favorites (contactId, groupId, user, favorites) 
			VALUES('$contactId', '$groupId', '$user', 0)";
			mysql_query($query, $con) or die (mysql_error($con));
			
		}
		echo 'delete successfully';
//}
		

mysql_close($con);
ob_end_flush(); 
?>