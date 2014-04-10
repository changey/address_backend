<?php

//$message='trial';
// connect to MySQL//  $db = mysql_connect('127.0.0.1', 'root2','root') or//      die ('Unable to connect. Check your connection parameters.');
include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass) VALUES('a', 'c4ca4238a0b923820dcc509a6f75849b')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro, tagString) 
			VALUES('MIT', 'uploads/4.jpg', 'bar', '#MIT #college')";
			mysql_query($query);
			
$query = "INSERT INTO groups (name, thumbnail, intro, tagString) 
			VALUES('P & G', 'uploads/4.jpg', 'baz', '#cooperation #manufacturing')";
			mysql_query($query);

$query = "INSERT INTO groups (name, thumbnail, intro, tagString) 
			VALUES('Harvard', 'uploads/4.jpg', 'bar', '#college #easyA')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender, tagString) VALUES('Wanni Ninja', 1, 0, 'wanni@pik.com', '(617)425-2323', 'contact_pics/c1.png', 'MIT',
          'McKinsey', 'Female', '#ninja #mechE #MIT')";
			mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender, tagString) VALUES('Dianasaur', 1, 0, 'diana@pik.com', '(617)425-2323', 'contact_pics/c2.png', 'MIT',
          'McKinsey', 'Female', '#MIT #finance #econ')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender, tagString) VALUES('Eric', 1, 0, 'eric@pik.com', '(617)425-2323', 'contact_pics/c3.png', 'MIT',
          'Intel', 'Male', '#MIT #Sunrun')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Wanni', 2, 0, 'wanni@pik.com', '(617)425-2323', 'contact_pics/c1.png', 'MIT',
          'McKinsey', 'Female')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, school,
          work, gender) VALUES('Diana', 2, 0, 'diana@pik.com', '(617)425-2323', 'contact_pics/c2.png', 'MIT',
          'McKinsey', 'Female')";

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(1, 1, 'a', 1)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(2, 1, 'a', 0)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(3, 1, 'a', 0)";
			mysql_query($query);//make sure you're using the correct database//mysql_select_db('devices', $db) or die(mysql_error($db));

echo 'Data inserted successfully!';
?>