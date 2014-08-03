<!DOCTYPE html>
<html>
<head>
	<title>Functions: Scope</title>
</head>
<body>
	<?php 
		$var = 100;

		function change_value(){
			global $var;
			$var = 200;
		}

		change_value();
		echo $var;
	?>
</body>
</html>