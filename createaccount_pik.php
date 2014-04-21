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
          job, gender, tagString) VALUES('Wan-Ni Tsai', 1, 0, 'wanni@pik.com', '(617)425-2323', 'contact_pics/c1.png', 'PhD, Washington University',
          'VP, Pik', 'Female', '#awesome #MIT')";
			mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('Diana Hsieh', 1, 0, 'diana@pik.com', '(617)425-2323', 'contact_pics/c2.png', 'MIT',
          'McKinsey', 'Male', '#MIT #finance #econ')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('Eric Chang', 1, 0, 'eric@pik.com', '(000)000-0000', 'contact_pics/c3.png', 'MIT',
          'Intel', 'Male', '#MIT #Intel')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender) VALUES('Wanni', 2, 0, 'wanni@pik.com', '(000)000-0001', 'contact_pics/c1.png', 'MIT',
          'McKinsey', 'Female')";
			mysql_query($query);
			
$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender) VALUES('Diana', 2, 0, 'diana@pik.', '(000)000-0002', 'contact_pics/c2.png', 'MIT',
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