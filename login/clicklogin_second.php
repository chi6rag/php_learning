<!-- Assume that this is the post login page for a random user -->
<!DOCTYPE html>
<html>
<head>
	<title>Welcome: First Page</title>
</head>
<body>
	<?php
		$person_details = $_GET["person_details"];
		print_r($person_details);
	?>
</body>
</html>