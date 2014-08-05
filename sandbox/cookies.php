<?php
	$name = "test";
	$value = "Aggarwal";
	$expiration = time() + (60*60*24*7);
	//setcookie($name, $value, $expiration);
	//setcookie($name);
	//setcookie($name, null);
	setcookie($name, null, time()-3600);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
	<style type="text/css">
	body {
		background-color: black;
		color: white;
	}
	</style>
</head>
<body>
	<?php
		if( isset($_COOKIE["test"]) ){
			$test = $_COOKIE["test"];
		}else{
			$test = "";
		}
		echo "Cookie Value: {$test}";
	?>
</body>
</html>