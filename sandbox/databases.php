<?php
	// 1. Create a database connection
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
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Databases</title>
</head>
<body>
	<?php
		if ( isset($connection) ) echo "Connection made<br />";
	?>
</body>
</html>
<?php
	mysqli_close($connection);
?>