<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$groupId = $_GET['groupId'];
//echo $groupId;
$contactsJson = $_GET['contactsJson'];
$contactsJsonNoSlashes = stripslashes($contactsJson);
echo $contactDetails;
//$contactsJson = '[{"name":"b"},{"c":"d"},{"e":"f"}]';
$contactDetails = json_decode($contactsJsonNoSlashes, true);
print $contactDetails[0]["name"];

//$contacts = explode(',', $contactDetails);
//$length = count($contacts);
//
//for ($i=0; $i<$length; $i++) {
//	$name = $contacts[$i];
//	echo $name;
//	$query = "INSERT INTO contacts (name, groupId) VALUES('$name', '$groupId')";
//			mysql_query($query);
//}
		

//mysql_close($con);
//ob_end_flush(); 
?>