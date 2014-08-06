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
	 $query  = "DELETE FROM subjects ";
	 $query .= "WHERE menu_name='chirag_menu'";
	$resource = mysqli_query($db_link, $query);

	echo $resource . "<br />";

	$resource = mysqli_query($db_link, "SELECT * FROM subjects");
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