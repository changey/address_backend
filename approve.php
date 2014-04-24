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

$query = "SELECT * FROM roles WHERE groupId = '$groupId' AND user = '$applicant'";
$result = mysql_query($query) or die(mysql_error($con));
if (!$result) {
    die("Query to show fields from table failed");
}
if (mysql_num_rows($result)) {
    $query = "UPDATE roles
          SET isMember = 1
          WHERE groupId = '$groupId' AND user = '$applicant'";
    mysql_query($query);
    echo 'successfully made applicant from non member to a member';
}
else {
    $query = "INSERT INTO roles (groupId, user, isMember) VALUES('$groupId', '$applicant', 1)";
    mysql_query($query);
    echo 'successfully added applicant as a member';
}


mysql_close($con);
ob_end_flush(); 
?>