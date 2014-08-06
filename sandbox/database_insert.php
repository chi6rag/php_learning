<?php
	// 1. Connecting to the database
	$db_host = "localhost";
	$db_name = "widget_corp";
	$db_username = "widget_cms";
	$db_password = "secretpassword";
	$db_link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	// Testing connection
	if( !mysqli_connect_errno() ){
		echo "Connected Successfully<br />";
	}else{
		die( "Database connection failed: ". mysqli_connect_errno() );
	}

	// 2. Firing Queries and Storing resources
	$menu_name = "Chirag's Choices";
	$menu_name = mysqli_real_escape_string($db_link, $menu_name);
	$position = 5;
	$visible = 1;
	$query  = "INSERT INTO subjects(menu_name, position, visible)";
	$query .= "VALUES('{$menu_name}', {$position}, {$visible});";
	$resource = mysqli_query($db_link, $query);
	echo "{$resource}" . "<br />";
	$query  = "SELECT * FROM subjects";
	$resource = mysqli_query($db_link, $query);
	while($row_assoc = mysqli_fetch_assoc($resource)){
		print_r($row_assoc);
		echo("<br />");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Database Insert</title>
</head>
<body>

</body>
</html>
<?php
	// 5. Closing Database
	mysqli_close($db_link);
?>