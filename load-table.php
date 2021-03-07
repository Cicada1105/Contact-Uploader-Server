<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST, GET");
    header("Access-Control-Allow-Headers: Content-Type, Content-Length, Origin, Accept, X-Requested-With");

	$file = fopen("contacts.json","r") or die("The file cannot be found");
	$fileString = fread($file,filesize("contacts.json"));
	fclose($file);
	
	echo $fileString;
?>