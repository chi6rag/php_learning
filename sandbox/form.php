<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<style>
		body {
			background-image: url("sources/blurred.jpg");
		}
		input {
			height: 50px;
			width: 450px;
			border: 1px solid gray;
			padding: 20px;
			font-family: sans-serif;
			margin: 0 auto;
			font-size: 24px;
			font-weight: 0;
			color: gray;
			border-radius: 5px;
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
			padding: 20px;

		}

		</style>
	</head>
	<body>
		<div class="submit-form">
			<form action="processing.php" method="post" >
				<input type="text" name="username" placeholder="Email" /><br /><br />
				<input type="password" name="password" placeholder="Password" /><br /><br />
				<span id="submit"><input type="submit" name="Submit" /></span>
			</form>
		</div>
		
	</body>
</html>