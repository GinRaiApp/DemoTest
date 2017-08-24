<?php
	$server = 'localhost';
	$username = 'root';
	$password = 'Password*1234';
	$db = 'p_inventory';
	//$port = '8889';

	// Create connection
	$conn = new mysqli($server, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully : ";
?>
