<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$groupId = $_POST['groupId'];
//echo $groupId;
$contacts_str = $_POST['contacts'];
//echo $contacts_str;
$contacts = explode(',', $contacts_str);
$length = count($contacts);

for ($i=0; $i<$length; $i++) {
	$name = $contacts[$i];
	echo $name;
	$query = "INSERT INTO contacts (name, groupId) VALUES('$name', '$groupId')";
			mysql_query($query);
}
		

mysql_close($con);
ob_end_flush(); 
?>