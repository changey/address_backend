<?php

//$message='trial';

include_once 'config.php';

$query = "INSERT INTO rnmembers (user, pass, name) VALUES('changey', 'a', 'Eric Chang')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('jace', 'a', 'Jace Lieberman')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('heather', 'a', 'Heather Wilk')";
			mysql_query($query);
			
$query = "INSERT INTO rnmembers (user, pass, name) VALUES('jill', 'a', 'Jill Rosok')";
			mysql_query($query);

echo 'Data inserted successfully!';
?>