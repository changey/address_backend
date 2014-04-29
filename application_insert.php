<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$name = mysql_real_escape_string($_GET['name']);
$groupId = $_GET['groupId'];
$applicant = $_GET['applicant'];

$query = "INSERT INTO applications (groupId, applicant, shown) VALUES('$groupId', '$applicant', 1)";
mysql_query($query);
		
echo "Successfully inserted the application";

mysql_close($con);
ob_end_flush(); 
?>