<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$applicationId =  $_GET['applicationId'];
$groupId = $_GET['groupId'];
$applicant = $_GET['applicant'];

// $query = "SELECT * FROM contacts WHERE user='$user'";
$query = "UPDATE applications
          SET shown = 0
          WHERE id='$applicationId'";
mysql_query($query);

echo "Successfully decline the application";

mysql_close($con);
ob_end_flush(); 
?>