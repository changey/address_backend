<?php
//function to filter the hashtag
	function hashtag($msg){
		//filter the hastag
		preg_match_all('/(^|[^a-z0-9_])#([a-z0-9_]+)/i', $msg, $matched_hashtag);
		$hashtag = '';
		//if hashtag found
		if(!empty($matched_hashtag[0])){
			//fetch hastag from the array
			foreach ($matched_hashtag[0] as $matched) {
				//append every hastag to a string
				//remove the # by preg_replace function
				$hashtag .= preg_replace('/[^a-z0-9]+/', '', $matched).',';
				//append and , after every hashtag
			}
		}
		//remove , from the last hashtag
		return rtrim($hashtag, ',');
	}
//function to convert the url & hashtag into link
	function convert_to_links($msg){
		$final_message = preg_replace(array('/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/', '/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('<a href="$1" target="_blank">$1</a>', '$1<a href="">@$2</a>', '$1<a href="index.php?hashtag=$2">#$2</a>'), $msg);
		return $final_message;
	}
?>