<?php
	header("HTTP 1.1/ 404 Not Found");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Headers</title>
</head>
<body>
<?php
	// This won't work
	// header("HTTP 1.1/ 404 Not Found");
	print_r(headers_list());
?>
</body>
</html>