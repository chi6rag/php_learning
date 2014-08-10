<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body {
		background-color: pink;
	}
</style>
	<title>First Page</title>
</head>
<body>
	<?php
		$link_name = "Let's go to the second page";
		$id = 6;
		echo "Welcome to the first page<br /><br />";
	?>
	<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>
</body>
</html>