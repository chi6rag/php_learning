<?php
	require("sources/header_functions.php");
	if ( isset($_POST["Submit"]) ){
		$username = $_POST["username"];
		$password = $_POST["password"];
		if( $username=="chi6rag" && $password=="hello"){
			redirect_to("assoc_array.php");
		}
		$message = "There were some errors...";
	}else{
		 $message = "There were some errors...";
		 $username = "";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<style>
		body {
			background-color: #A30000;
			color: white;
		}
		input {
			height: 50px;
			width: 450px;
			border: 0px solid;
			padding: 20px;
			font-family: sans-serif;
			margin: 0 auto;
			font-size: 24px;
			font-weight: 0;
			color: gray;
			border-radius: 2px;
		}
		#submit input{
			
			width: 120px;
			font-size: 20px;
			text-align: center;
			vertical-align: middle;
			line-height: 10px;
		}
		.submit-form {
			margin-top: 150px;
			text-align: center;
			padding: 20px;ame] => [password] =>

		}
		p{
			color: white;
			font-family: sans-serif;
		}

		</style>
	</head>
	<body>
		<div class="submit-form">
		<?php
			echo "{$message}<br />";
		?>
			<form action="form_singlepage.php" method="post" >
				<input type="text" name="username" placeholder="Email" value="<?php echo $username; ?>" /><br /><br />
				<input type="password" name="password" placeholder="Password" /><br /><br />
				<span id="submit"><input type="submit" name="Submit" /></span>
			</form>
		</div>
		
	</body>
</html>