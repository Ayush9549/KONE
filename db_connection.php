<?php
	$is_db_connected = false;
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "grocery";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		$is_db_connected =  false;
		
	}
	else
	{
		$is_db_connected =  true;
	}
?>