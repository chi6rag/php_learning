<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			$var1 = 10;
			$var2 = 20;
		?>
		Absolute Value: <?php echo abs((0-300)/10); ?><br />
		3 Powered to 4: <?php echo pow(3,4); ?><br />
		Square Root of 10: <?php echo sqrt(10); ?><br />
		7 divided by 5 has remainder: <?php echo fmod(7, 5); ?><br />
		Random Number: <?php echo rand(); ?><br />
		Ranged Random Number: <?php echo rand(10, 20); ?><br />
		<br /><br />
		+=: <?php echo $var1 += $var2; ?><br />
		-=: <?php echo $var1 -= $var2; ?><br />
		*=: <?php echo $var1 *= $var2; ?><br />
		/=: <?php echo $var1 /= $var2; ?><br />
		++: <?php echo $var1++; ?><br />
		--: <?php echo $var1--; ?><br />
	</body>
</html>