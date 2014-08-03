<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	<?php
		$numbers = array(3,8,54,1,-34,-23,94);
	?>
	<hr />
	Count: <?php echo count($numbers); //Returns the number of values ?><br />
	Max Value: <?php echo max($numbers); // Returns the maximum value ?><br />
	Min Value: <?php echo min($numbers); // Returns the minimum value ?><br />
	<hr>
	<pre>
	Sort: <?php echo sort($numbers); // Sorts the array in ascending order 
	print_r($numbers);
	?>
	</pre>
	<br />
	Reverse Sort: <?php echo rsort($numbers); // Sorts the array in descending order
	print_r($numbers);
	?>
	<br />
	<hr />
	Implode: <?php echo $numbers_string = implode(" * ", $numbers); // Converts the entire array into a string with each array element divided by *
	?>
	<br />
	Explode: <?php print_r(explode(" * ", $numbers_string)); // Converts the entire string into an array dividing the string upon the occurance of *
	?>
	<br />
	<hr />
	In Array: <?php echo in_array(1, $numbers); // Return T/F
	?><br />
	
</body>
</html>