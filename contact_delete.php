<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$name = mysql_real_escape_string($_GET['name']);
$pass = mysql_real_escape_string($_GET['pass']);
$userId = $_GET['userId'];
//$email = $_GET['email'];
// $query = "SELECT * FROM contacts WHERE user='$user'";
$query = "DELETE FROM contacts WHERE id='$userId'";
       mysql_query($query) or die (mysql_error($con));

echo 'deleted contact successfully';

mysql_close($con);
ob_end_flush(); 
?>