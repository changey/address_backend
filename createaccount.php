<?php

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass) VALUES('a', 'c4ca4238a0b923820dcc509a6f75849b')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro) VALUES('MIT', 'foo', 'bar')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro) VALUES('foo', '', '')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber) VALUES('David Zhu', 1, 0)";
			mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber) VALUES('Tingting Sha', 1, 0)";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber) VALUES('Max Wu', 1, 0)";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>