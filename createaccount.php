<?php

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass) VALUES('a', 'c4ca4238a0b923820dcc509a6f75849b')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro) VALUES('MIT', 'uploads/4.jpg', 'bar')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro) VALUES('class', 'uploads/4.jpg', 'baz')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('David Zhu', 1, 0, 'david@inspero.com', '(617)425-2323', 'contact_pics/c1.png', 'MIT',
          'McKinsey', 'Male')";
			mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Tingting Sha', 1, 0, 'tingting@inspero.com', '(617)425-2323', 'contact_pics/c3.png', 'MIT',
          'McKinsey', 'Female')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Max Wu', 1, 0, 'max@inspero.com', '(617)425-2323', 'contact_pics/c2.png', 'MIT',
          'Intel', 'Male')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Shuo Wang', 2, 0, 'shuo@inspero.com', '(617)425-2323', 'http://', 'MIT',
          'McKinsey', 'Female')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Eric Chang', 2, 0, 'eric@inspero.com', '(617)425-2323', 'http://', 'MIT',
          'McKinsey', 'Male')";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, userId, favorites) VALUES(1, 1, 1)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, userId, favorites) VALUES(2, 1, 0)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, userId, favorites) VALUES(3, 1, 0)";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>