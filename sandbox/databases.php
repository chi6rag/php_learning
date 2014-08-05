<?php
	/*// 1. Create a database connection
	//phpinfo();
	$host = "localhost";
	$dbuser = "widget_cms";
	$password = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($host, $dbuser, $password, $dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")"
		);
	}
	// 2. Perform database query
	$query = "SELECT * FROM subjects";
	$result = mysqli_query($connection, $query);

	// Test if there is query error
	if (!$result) die("Database Query Failed");

	// 3. Return data if any
	while($row = mysqli_fetch_row($result)){
		print_r($row);
	}*/

	// 1. Connect to the database
	$host = "localhost";
	$db_username = "widget_cms";
	$db_password = "secretpassword";
	$db_name = "widget_corp";
	$database = mysqli_connect($host, $db_username, $db_password, $db_name);

	// 1:Optional, Testing connection
	if(mysqli_errno($database)){
		die("Connection Died. Database failed to connect. ERROR: XYZ_CHIRAG");
	}

	// 2. Fire Query and store resource
	$query  = "SELECT * FROM subjects ";
	$resource = mysqli_query($database, $query);

	// 3. Use results obtained to operate
	while( $row = mysqli_fetch_row($resource) ){
		print_r($row);
	}

	// 4. Free resources
	mysqli_free_result($resource);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Databases</title>
</head>
<body>
	<?php
		if ( isset($database) ) echo "Connection made<br />";
	?>
</body>
</html>
<?php
	mysqli_close($database);
?>