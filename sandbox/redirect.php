<?php
	// This is how you redirect
	function redirect_to($location){
		header("Location: " . urlencode($location));
		exit();
	}
	if($_GET["id"]==1){
		redirect_to("second_page.php");
	}else{
		redirect_to("header.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Redirect</title>
</head>
<body>

</body>
</html>