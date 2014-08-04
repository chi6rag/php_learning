<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
	<?php
		/*
		//print_r($_POST);
		if( isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["Submit"]) ){
			echo "{$_POST["username"]}:  {$_POST["password"]}";
		}else{
			echo "The form was not submitted";
		}*/

		// print_r($_POST);
		isset($_POST["username"]) ? $username = $_POST["username"] : $username = "";
		isset($_POST["password"]) ? $password = $_POST["password"] : $password = "";

		echo "{$username}: {$password}";
	?>
</body>
</html>