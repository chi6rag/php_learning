<!-- Confirm form submission -->
<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
<?php 
	if(isset($_POST["Submit"]) && $_POST["Submit"]=="Submit"){
		isset($_POST["username"]) ? $username = $_POST["username"] : $username = "";
		isset($_POST["password"]) ? $password = $_POST["password"] : $password = "";
	 	echo "Username: " . $username . "<br />";
	 	echo "Password: " . $password . "<br />";
	}else{
		echo "Form was not submitted";
	}
?>
</body>
</html>