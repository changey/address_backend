<?php

include_once 'config.php';

$query = "INSERT INTO admin (groupId, user, isAdmin, isMember) 
          VALUES(1, '(242)123-1231', 1, 1)";
mysql_query($query);

$query = "INSERT INTO admin (groupId, user, isAdmin, isMember) 
          VALUES(2, '(242)123-1231', 0, 1)";
mysql_query($query);

$query = "INSERT INTO admin (groupId, user, isAdmin, isMember) 
          VALUES(3, '(242)123-1231', 0, 0)";
mysql_query($query);

$query = "INSERT INTO rnmembers (user, pass, name, email, tel, thumbnail, university,
          job, gender) 
          VALUES('(242)123-1231', 'c4ca4238a0b923820dcc509a6f75849b', 'David Zhu', 'david@inspero.com', '(123)321-3232'
          , 'contact_pics/c4.png', 'MIT', 'CEO, Inspero Inc', 'Male')";			
            mysql_query($query);

$query = "INSERT INTO rnmembers (user, pass, name, email, tel, thumbnail, university,
          job, gender)
          VALUES('15174662062', 'c4ca4238a0b923820dcc509a6f75849b', 'David Zhu', 'david@inspero.com', '(123)321-3232'
          , 'contact_pics/c4.png', 'MIT', 'CEO, Inspero Inc', 'Male')";
            mysql_query($query);

$query = "INSERT INTO rnmembers (user, pass, name, email, tel, thumbnail, university,
          job, gender)
          VALUES('a', 'c4ca4238a0b923820dcc509a6f75849b', 'David Zhu', 'david@inspero.com', '(123)321-3232'
          , 'contact_pics/c4.png', 'MIT', 'CEO, Inspero Inc', 'Male')";
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
          job, gender, tagString) VALUES('Tingting Sha', 0, 0, 'tingting@inspero.com', '(617)425-2323', 'contact_pics/c5.png', 'PhD, Washington University',
          'VP, Inspero Inc.', 'Female', '#awesome #MIT')";
mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('David Zhu', 0, 0, 'david@inspero.com', '(617)425-2323', 'contact_pics/c4.png', 'MIT',
          'McKinsey', 'Male', '#MIT #finance #econ')";
mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender, tagString) VALUES('Max Wu', 0, 0, 'max@inspero.com', '(000)000-0000', 'contact_pics/c6.png', 'MIT',
          'Intel', 'Male', '#MIT #Intel')";
mysql_query($query);

$query = "INSERT INTO contacts (name, groupId, sectionNumber, email, tel, thumbnail, university,
          job, gender) VALUES('David', 2, 0, 'david@inspero.com', '(000)000-0001', 'contact_pics/c4.png', 'MIT',
          'McKinsey', 'Male')";
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

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(7, 2, '(242)123-1231', 1)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(8, 2, '(242)123-1231', 0)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(4, 0, '(242)123-1231', 1)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(5, 0, '(242)123-1231', 0)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(6, 0, '(242)123-1231', 0)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(1, 1, '15174662062', 1)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(2, 1, '15174662062', 0)";
mysql_query($query);

$query = "INSERT INTO favorites (contactId, groupId, user, favorites) VALUES(3, 1, '15174662062', 0)";
mysql_query($query);

echo 'Data inserted successfully!';
?>