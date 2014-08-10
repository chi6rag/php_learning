<?php
	$name = "cookie_chirag";
	$value = 45;
	$expire = time() + (60*2);
	//setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
	<style type="text/css">
	body {
		background-color: pink;
	}
	</style>
</head>
<body>
	<?php
		isset( $_COOKIE["cookie_chirag"] ) ? $cookie_chirag = $_COOKIE["cookie_chirag"] : $cookie_chirag = "";
		echo $cookie_chirag;
	?>
</body>
</html>