<!DOCTYPE html>
<html>
	<head><title>String Functions</title></head>
	<body>
		<?php
			$first = "The quick brown fox "; // Declared string variable $first
			$second = "jumps over the lazy dog"; // Declared string variable $second
			$third = $first; // Assigned to string variable $third the value of variable $second
			$third .= $second; // Concatinated string variable $second to string variable $third
			echo $third; // Displays string variable $third
		?>
		
		<br />
		<br />
		lowercase: <?php echo strtolower($first); ?>
		<br />
		UPPERCASE: <?php echo strtoupper($second); ?>
		<br />
		Uppercase first: <?php echo ucfirst($first); ?>
		<br />
		First Letter Capital For Every Word: <?php echo ucwords($third); ?>
		<br />
		<br />
		Length: <?php echo strlen($third); ?>
		Trim: <?php echo "A".trim(" BCD ")."E"; ?>
		Find: <?php echo strstr(); ?>
	</body>
</html>
		
		
		