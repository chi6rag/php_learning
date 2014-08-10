<?php
	// 1. Connecting to the database
	// $host = "localhost";
	// $username = "widget_cms";
	// $password = "secretpassword";
	// $db_name = "widget_corp";
	define("DB_SERVER", "localhost");
	define("USERNAME", "widget_cms");
	define("PASSWORD", "secretpassword");
	define("DB_NAME", "widget_corp");
	$connection = mysqli_connect(DB_SERVER, USERNAME, PASSWORD, DB_NAME);

	// Testing connection
	if( mysqli_connect_errno($connection) ){
		die("Database query failed");
	}
?>