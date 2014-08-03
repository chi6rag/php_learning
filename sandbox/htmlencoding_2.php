<!DOCTYPE html>
<html>
<head>
	<title>HTML ENCODING 2</title>
</head>
<body>
<?php // What to use when
	// Sending data from the page
	$url="http://localhost/";
	$link_name = "assets and misc/get document.php";
	$age = 2;
	$name = "Chirag Aggarwal";
	$address = "QD-23, Vishakha Enclave, Pitampura";

	$url .= rawurlencode($link_name);
	$url .= "?" . "name=" . urlencode($name) . "&" . "age=" . urlencode($age) . "&" . "address=" . urlencode($address);
	echo $url;
?>
</body>
</html>