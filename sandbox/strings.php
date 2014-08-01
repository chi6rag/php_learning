<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
	<?php
		echo "Hello World!<br />";
		echo 'Hello World<br />';
		$greeting = "Hello";
		$target = "World!";
		$phrase =  $greeting . " " . $target;
		echo "$phrase<br />";
		echo "{$phrase}, again?"; // This is in place substitution
	?>
	</body>
</html>