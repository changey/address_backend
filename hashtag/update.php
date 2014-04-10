<?php
	require 'function.php';
	if(isset($_POST['msg']) && !empty($_POST['msg'])){
		$msg = mysql_real_escape_string(strip_tags(trim($_POST['msg'])));
		//get the hastag 
		$hashtags = hashtag($msg);
		//insert into db
		$query = mysql_query("INSERT INTO `message` (`message`,`hashtag`) VALUES ('$msg', '$hashtags')");
		$final_msg = convert_to_links($msg);
		echo '<div id="posts">
		<ul>
		<li><img src="image.jpg"></li>
		<li>'.$final_msg.'</li>
		<ul>
		</div>';
	}
?>