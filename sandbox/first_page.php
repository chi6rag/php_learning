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
		$new_link = rawurlencode("../assets and misc/") . rawurlencode("get document.php") . urlencode("?id={$id}&link_name={$link_name}");
	?>
	<a href="second_page.php?id=<?php echo $id; ?>&company_name=<?php echo urlencode($company_name); ?>"><?php echo $link_name; ?></a><br />
	<a href="<?php echo $new_link; ?>">New Link</a>
</body>
</html>