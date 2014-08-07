<?php
	// 1. Connecting to the database
	$host = "localhost";
	$username = "widget_cms";
	$password = "secretpassword";
	$db_name = "widget_corp";
	$connection = mysqli_connect($host, $username, $password, $db_name);

	// Testing database connectivity
	if(mysqli_connect_errno($connection)){
		die("Database connection failed<br />");
	}
?>