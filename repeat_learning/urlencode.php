<!DOCTYPE html>
<html>
<head>
	<title>urlencode</title>
</head>
<body>
<?php
	$path = "JPEG Assets";
	$query_string = "1st image.jpeg";
	$url = "http://chiragaggarwal.com" . "/" . rawurlencode($path) . "?query=" . urlencode($query_string);
	echo $url;
?>
</body>
</html>