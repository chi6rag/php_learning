<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: pink;
		}
	</style>
	<title>Second Page</title>
</head>
<body>
	<?php
		$id = $_GET["id"];
		$id++;
		echo "Welcome to the second page<br /><br />{$id}<br />";
	?>
</body>
</html>