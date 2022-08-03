<?php

	//	PHP PASSWORDS FROM LESSON 5 - find these in your my_sql connection file generated in LESSON 4 and HOW TO ProjectSpace


	$servername = "localhost";
	$username = "???";
	$password = "???";
	$dbname = "???";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

?>