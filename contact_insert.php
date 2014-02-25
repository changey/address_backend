<?php /*
* process whatever you want here but don't make any output! *
*/

ob_start();
include_once 'config.php';

$name = mysql_real_escape_string($_GET['name']);
$pass = mysql_real_escape_string($_GET['pass']);
$pass2=$pass;
$pass=md5($pass);
//$email = $_GET['email'];
if ($name == "") {
	echo 0;
	}
else{
// $query = "SELECT * FROM contacts WHERE user='$user'";
$query = "SELECT * FROM contacts WHERE 1=2";
		if (mysql_num_rows(mysql_query($query))) {
			//$error = "That username already exists<br /><br />";
			echo 0;
		} else {
			$query = "INSERT INTO contacts (name, groupId) VALUES('$name', 1)";
			mysql_query($query);
			echo 1;
			//header("Location: index2.php");
		}
}
		

mysql_close($con);
ob_end_flush(); 
?>