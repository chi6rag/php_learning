<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<?php 
			$numbers = array(4,5,6,7,8);
			echo $numbers[2];
		?>
		<hr />
		<?php
			$mixed_array = array(6, "foo", "bar", array("x","y","z"));
			echo $mixed_array[2]."\n";
			echo $mixed_array[1]."\n";
			echo $mixed_array[0]."\n";
			echo $mixed_array[3][2]
		?>
	</body>
</html>