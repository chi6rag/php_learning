<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
</head>
<body>
	<?php 
		$page_name = "Go to the second page";
		$id = 1;
		$company = "Johnson & Johnson";
	?>
	<a href="redirect.php?id=<?php echo $id?>&company=<?php echo urlencode($company); ?>"><?php echo $page_name; ?></a>
</body>
</html>