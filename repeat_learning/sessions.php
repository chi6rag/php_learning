<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
	<?php
	$_SESSION["chirag"] = "chirag";
	echo $_SESSION["chirag"];
	?>
</body>
</html>