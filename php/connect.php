<?php
	$server = '127.0.0.1';
	$username = 'root';
	$password = 'root';
	$db = 'demo';
  $port = '8889';

	// Create connection
	$conn = new mysqli($server, $username, $password, $db, $port);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully : ";
?>
