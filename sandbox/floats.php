<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo $float = 3.14; ?><br />
	<?php echo $float + 7; ?><br />
	<?php echo 4/3; ?><br />
	<?php echo 4/0; // Returns error?><br />
	<hr />
	Round: <?php echo round($float, 1); ?><br />
	Ceil: <?php echo ceil($float); ?><br />
	Floor: <?php echo floor($float); ?><br />
	<br />
	<?php $integer=3; ?>
	<?php echo "Is {$integer} Integer?"." ".is_int($integer); ?><br />
	<?php echo "Is {$float} Float?"." ".is_float($float); ?><br />
	<hr />
	<?php echo "Is {$integer} Float?"." ".is_float($integer); ?><br />
	<?php echo "Is {$float} Integer?"." ".is_int($float); ?><br />
	<hr />
	<?php echo "Is {$integer} numeric?"." ".is_numeric($integer); ?><br />
	<?php echo "Is {$float} numeric?"." ".is_numeric($float); ?><br />
	<br />
	
</body>
</html>