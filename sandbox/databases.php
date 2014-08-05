<?php
	// 1. Connecting to the database
	$host = "localhost";
	$db_username = "widget_cms";
	$db_pass = "secretpassword";
	$db_name = "widget_corp";
	$database = mysqli_connect($host,$db_username,$db_pass,$db_name);

	// Optional: Testing Connection
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
	}

	// 2. Firing Queries and Storing Resources
	$query  = "SELECT * FROM subjects ";
	$resource = mysqli_query($database, $query);

	// 3. Fetch information from the resource and operate on the information
 	//while($assoc = mysqli_fetch_assoc($resource)){
	// 	echo "ID: {$assoc["id"]}<br />";
	// 	echo "Menu Name: {$assoc["menu_name"]}<br />";
	// 	echo "Position: {$assoc["position"]}<br />";
	// 	echo "Visible: {$assoc["visible"]}<br /><hr />";
	// }

	
	for( ;$standard_array = mysqli_fetch_row($resource); ){
		for($var = 0; $var < sizeof($standard_array); $var++){
			echo "{$standard_array[$var]}<br />";
		}
		echo "<hr />";
	}

	// 4. Free disk space
	mysqli_free_result($resource);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Databases: Practice</title>
</head>
<body>
<?php
?>
</body>
</html>

<?php
	// 5. Closing connection
	mysqli_close($database);
	?>