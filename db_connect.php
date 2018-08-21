<?php
	$servername = "localhost";
	$username = ""; // enter the database username here
	$password = ""; // enter the database password here
	$dbname = ""; // enter the database name here

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>