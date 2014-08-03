<!DOCTYPE html>
<html>
<head>
	<title>Null</title>
</head>
<body>
	<?php 
		$var1 = null;
		$var2 = "";
	?>
	is $var1 null? <?php echo is_null($var1); ?><br />
	is $var2 null? <?php echo is_null($var2); ?><br />
	is $var3 null? <?php echo is_null($var3); ?><br />
	<hr />
	is $var1 set? <?php echo isset($var1); ?><br />
	is $var2 set? <?php echo isset($var2); ?><br />
	is $var3 set? <?php echo isset($var3); ?><br />
	<hr />
	is $var1 empty? <?php echo empty($var1); ?><br />
	is $var2 empty? <?php echo empty($var2); ?><br />
	is $var3 empty? <?php echo empty($var3); ?><br />
</body>
</html>