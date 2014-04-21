<?php

include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass) VALUES('(242)123-1231', 'c4ca4238a0b923820dcc509a6f75849b')";			
            mysql_query($query);

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
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('Tingting Sha', 1, 0, 'tingting@inspero.com', '(617)425-2323', 'contact_pics/c5.png', 'PhD, Washington University',
          'VP, Inspero Inc.', 'Female', '#awesome #MIT')";
			mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('David Zhu', 1, 0, 'david@inspero.com', '(617)425-2323', 'contact_pics/c4.png', 'MIT',
          'McKinsey', 'Male', '#MIT #finance #econ')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('Max Wu', 1, 0, 'max@inspero.com', '(000)000-0000', 'contact_pics/c6.png', 'MIT',
          'Intel', 'Male', '#MIT #Intel')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender) VALUES('Tingting', 2, 0, 'tingting@inspero.com', '(000)000-0001', 'contact_pics/c5.png', 'MIT',
          'McKinsey', 'Female')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender) VALUES('David', 2, 0, 'david@pik.com', '(000)000-0002', 'contact_pics/c4.png', 'MIT',
          'McKinsey', 'Male')";

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(1, 1, 'a', 1)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(2, 1, 'a', 0)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(3, 1, 'a', 0)";
			mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(1, 1, '(242)123-1231', 1)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(2, 1, '(242)123-1231', 0)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(3, 1, '(242)123-1231', 0)";
mysql_query($query);

echo 'Data inserted successfully!';
?>