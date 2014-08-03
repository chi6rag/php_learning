<!DOCTYPE html>
<html>
<head>
	<title>Pointers</title>
</head>
<body>
<?php 
	$years = array(1994,1995,1996,1997,1998);

	echo "a. " . current($years) . "<br />"; // current(array) returns the element the array pointer is pointng to right now
	echo "b. " . next($years) . "<br />"; // next(array) increments the pointer of the array by 1
	next($years);
	next($years);
	echo "c. " . next($years) . "<br />";
	echo "d. " . reset($years) . "<br />"; // reset(array) resets the array pointer to default
	echo "e. " . end($years) . "<br />"; // array pointer points to the last emlement
	echo "f. " . next($years) . "<br />";


	echo "Alternate looping with while<br />";
	reset($years);
	while(current($years)){
		echo current($years) . "<br />";
		next($years);
	}
	echo "<br />";
	echo "Alternate looping with while<br />";
	reset($years);
	while(current($years)){
		echo current($years) . "<br />";
		next($years);
	}
	

?>
</body>
</html>