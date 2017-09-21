<?php

	header('Content-Type: application/json');

	//database
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '123456');
	define('DB_NAME', 'p_inventory');

	//get connection
	$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(!$connect){
	  die("connect Failed: " . $connect->error);
	}
	// echo "success";


?>
