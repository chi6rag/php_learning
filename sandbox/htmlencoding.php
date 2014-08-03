<!DOCTYPE html>
<html>
<head>
	<title>HTML Encoding</title>
</head>
	<body>
		<?php
			$link_name = "<Click> me";	
		?>
		<a href=""><?php echo htmlentities($link_name); ?></a>
	</body>
</html>