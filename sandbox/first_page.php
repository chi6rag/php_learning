<!-- Assume that this is the post login page for a random user -->
<!DOCTYPE html>
<html>
<head>
	<title>Welcome: First Page</title>
</head>
<body>
	<?php
		$link_name = "Go to the Second Page";
		$id = 293;
		$company_name = "Johnson & Johnson";
	?>
	<a href="second_page.php?id=<?php echo $id; ?>&company_name=<?php echo urlencode($company_name); ?>"><?php echo $link_name; ?></a>
</body>
</html>