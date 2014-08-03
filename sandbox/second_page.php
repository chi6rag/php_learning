<!-- Assume that this is the post login page for a random user -->
<!DOCTYPE html>
<html>
<head>
	<title>Welcome: Second Page</title>
</head>
<body style="color: red; font-size: 30px;">
	<?php
		// print_r($_GET);
		$id = $_GET["id"];
		$company_name = $_GET["company_name"];
		echo "The id sent by the first page is {$id}<br />";
		echo "{$company_name}";
	?>
</body>
</html>