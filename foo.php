<?php

$stack = array();

$data = array("id" => $row[0], "name" => urlencode("台灣"));

array_push($stack, $data);

$json = urldecode(json_encode($stack));

echo $json;

?>